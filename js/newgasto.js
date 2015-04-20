/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function ValidarFormularioGasto(newgasto)
{
    
    var datalist_id = document.getElementById("lista_nombres");
    var input_id = document.getElementById('xIDCodProveedor');

    // validar los campos xBase xPorIVA xTotal
    /*
     * Se pueden dar las siguientes circunstancias
     * 1ª que solo sepa el Total y no tenga IVA paises como UK permiten facturar sin VAT
     * 2º el total y el IVA
     * 3º
     */
    var base = document.getElementById("xBase").value;
    var vat = document.getElementById("xPorIVA").value;
    var total = document.getElementById("xTotal").value;
        
    var baseFloat = parseFloat(base.toString().trim());
    var vatFloat = parseFloat(vat.toString().trim());
    var totalFloat = parseFloat(total.toString().trim());
    
    if (isNaN(baseFloat))
        document.getElementById("xBase").value="0";
    
    if (isNaN(vatFloat))
        document.getElementById("xPorIVA").value="0";
    
    if (isNaN(totalFloat))
        {
            alert("Al menos tiene que indicar el total de la factura");
            return false;
        }
    
    /*
     * En caso de una modificación el campo xIDCompra será mayor de 0
     * es una modificación
     */

     var id_form;
     
   
         id_form = document.getElementById('xIDCodProveedor').value;
    
    //alert(id_form);
    if (typeof id_form === "undefined")
        {
            alert("Tiene que seleccionar un proveedor");
            return false;
        }
        
    document.getElementById('xIDCodProveedor').value=id_form;
    
    newgasto.submit();
    
}

/**
 * 
 * @param {type} xID
 * @returns {undefined}
 */
function checkVAT(xID)
{
    var vat = document.getElementById(xID).value;
    var vatFloat = parseFloat(vat.toString().trim());
    var base = document.getElementById("xBase").value;
    var baseFloat = parseFloat(base.toString().trim());
    
    if (isNaN(vatFloat))
        document.getElementById("xPorIVA").value="0";
    else
        {
            if (isNaN(baseFloat))
                document.getElementById("xBase").value="0";
            else
                {
                    document.getElementById("xTotal").value=((baseFloat)+(baseFloat*vatFloat/100)).toFixed(2);
                }
        }
}

/**
 * 
 * @param {type} xID
 * @returns {undefined}
 */
function checkTotal(xID)
{
    var total = document.getElementById(xID).value;
    var vat = document.getElementById("xPorIVA").value;
    var vatFloat = parseFloat(vat.toString().trim());
    
    var totalFloat = parseFloat(total.toString().trim());
    if (isNaN(totalFloat))
        alert("Al menos tiene que indicar el total de la factura");
    else
        {
            // calcular la base imponible en función del IVA
            if (vatFloat > 0)
                {
                    var base = totalFloat/(1+(vatFloat/100));
                    document.getElementById("xBase").value=base.toFixed(2);
                }
        }
}

//
// Cuando cambia el valor de los escrito lo buscamos en la base de datos
//
function DatosProveedorDB(Nombre)
{
    //alert(Nombre);
    CallRemote('AjaxServlet', 'accion=LeerDatosProveedor&cuantos=lista_nombres&xIDProveedor=' + Nombre);
}

//
// Llenar una lista de opciones con nombres
//
function LeerDatosProveedor(idLista,myJson)
{
    
     var obj = JSON.parse(myJson);
     //alert(obj.length);
     for (j = 0; j <= (obj.length - 1); j++)
    {
                 
        $('#listaProveedores').append($('<option>', { 
            value: obj[j].ID,
            text : obj[j].Nombre,
            id_suppliers_type : obj[j].id_suppliers_type
    }));
    }
    
    var xProv = document.getElementById('xIDCodProveedor').value;
    if( xProv.length>0 )
        setProvIndex(xProv);
}

/**
 * Poner el indice de un select de proveedores para las modificaciones de facturas
 * @returns {undefined}
 */
function setProvIndex(xProv)
{

    $('#listaProveedores').select2('val',xProv);

}

/**
 * Crear la tabla de Facturas Recibidas
 * @param {type} myJson
 * @returns {undefined}
 */
function CrearTablaRecibidas(myJson) {

    //alert(myJson);
    var tabla = new grid("oTabla");
    var j = 0;

    var obj = JSON.parse(myJson);
    deleteLastRow("oTabla");
//alert(obj.length);
    for (j = 0; j <= (obj.length - 1); j++)
    {
        //alert(obj[j].Descripcion);
        var row = tabla.AddRowTable(j + 1);

        var celda = tabla.AddRowCellText(row, 0, obj[j].id);
        celda.setAttribute('hidden', 'true'); // ocultar la columna ID
        
        tabla.AddRowCellText(row, 1, obj[j].nombre);
        
        if (typeof obj[j].concepto === "undefined")
            tabla.AddRowCellText(row, 2, "");
        else
            tabla.AddRowCellText(row, 2, obj[j].concepto);
        
        tabla.AddRowCellNumber(row, 3, obj[j].fecha_emision);
        tabla.AddRowCellNumber(row, 4, obj[j].LocaleImporte);
        
        var pago;
        if(obj[j].estado==='PAGADA'){//<span class="label label-success">Done</span>
            tabla.AddRowCellText(row, 5,'<span class="label label-success">'+ obj[j].estado+'</span>');
            pago='<li ><a onclick="CancelarPagarCompra('+(j+1)+');" class="btn tip" title="Anular Pago de la Compra"> <i class="icon-ban-circle"> </i> </a></li>';
        }
        else{
            tabla.AddRowCellText(row, 5,'<span class="label label-info">'+ obj[j].estado+'</span>');
            pago='<li ><a href="#fechabanco" data-toggle="modal" class="btn tip" title="Pagar por banco la compra"> <i class="icon-money"> </i> </a></li>';
        }
        
        
          tabla.AddRowCellText(row, 6,
                '<ul class="table-controls">'+
                '<li ><a onclick="VerDocGasto('+(j+1)+');"  class="btn tip" title="Ver Factura"> <i class="icon-eye-open"> </i> </a></li>'+
                '<li ><a onclick="EditarCompra('+(j+1)+');" class="btn tip" title="Editar gasto"> <i class="icon-pencil"> </i> </a></li>'+
                pago+
                '</ul>'
            );
    }
    
    obj=null;

}

/**
 * 
 * @param {type} numFila
 * @returns {undefined}
 */
function EditarCompra(numFila)
{
    var xID='ofila'+numFila;
    var oCelda = document.getElementById(xID).cells[0];
    //alert(oCelda.innerHTML);
    // http://localhost:8080/FacturaRedmoon/
    window.location.href = 'newGasto.jsp?xIDCompra='+oCelda.innerHTML;
}

/**
 * Pagar una compra asiento contable y actualización en la tabla de facturas recibidas
 * @param {type} numFila
 * @returns {undefined}
 */
function PagarCompra(numFila)
{
    var xID='ofila'+numFila;
    var oCelda = document.getElementById(xID).cells[0];
    document.getElementById('fechabanco').style.visibility = 'visible'; //'hidden'
    document.getElementById('xIDGasto').value=oCelda.innerHTML;
    
    return oCelda.innerHTML;
}

/**
 * Cancelar el pago de una compra asiento contable y actualización en la tabla de facturas recibidas
 * @param {type} numFila
 * @returns {undefined}
 */
function CancelarPagarCompra(numFila)
{
    var xID='ofila'+numFila;
    var oCelda = document.getElementById(xID).cells[0];
       
    window.location.href = 'CancelarPagoGasto.do?xIDGasto='+oCelda.innerHTML;
}


/**
 * Ver la factura adjunta al gasto
 * @param {type} numFila
 * @returns {undefined}
 */
function VerDocGasto(numFila)
{
    var xID='ofila'+numFila;
    var oCelda = document.getElementById(xID).cells[0];
    //alert(oCelda.innerHTML);
    
    window.location.href = 'verDocGastoServlet?xIDGasto='+oCelda.innerHTML;
}