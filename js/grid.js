
var pagina=1;
var pagsize=10;

/*
 
 Clase rejilla para javascript en html 5
 
 */

function grid(idTabla) {

    this.tbl = document.getElementById(idTabla);

    // añadir una fila a un objeto tabla
    this.AddRowTable = function(nFila) {

        var row = this.tbl.insertRow(this.tbl.rows.length);
        row.setAttribute('id', 'ofila' + nFila);
        //row.setAttribute('onclick', 'GetFila(this.id);');
        row.setAttribute('onMouseOver', 'FilaActiva(this.id);');
        row.setAttribute('onMouseOut', 'FilaDesactivar(this.id);');
        
      

        return row;

    };

    /*
     si a valorCell le pasamos un html como este le pasamos una imagen:
     '<img title="ver documento" alt="ver documento" src="img/search.png">'
     */

    // la primera celda es la 0 la segunda la 1 etc.
    this.AddRowCellText = function(row, NumeroCell, ValorCell) {

        // ID 
        var cellText = row.insertCell(NumeroCell); // 0
        var textNode = document.createTextNode(this.tbl.rows.length - 1);
        cellText.appendChild(textNode);
        cellText.innerHTML = ValorCell;

        return cellText;
    };

    // la primera celda es la 0 la segunda la 1 etc.
    this.AddRowCellNumber = function(row, NumeroCell, ValorCell) {

        // ID 
        var cellText = row.insertCell(NumeroCell); // 0
        var textNode = document.createTextNode(this.tbl.rows.length - 1);
        cellText.appendChild(textNode);
        cellText.setAttribute('align', 'right');
        cellText.innerHTML = ValorCell;
        
        return cellText;

    };
    
   

}
        

//
// Poner el color de fila seleccionada a la fila activa
//
function FilaActiva(xID)
{
    document.getElementById(xID).style.backgroundColor = "#ECF3F5";
}


//
// cambiar el color de una fila selecciona a otra no seleccionada
//
function FilaDesactivar(xID)
{
    document.getElementById(xID).style.backgroundColor = "#FFFFFF";
}


//
// Cojer el valor de la fila que contiene el ID
//
function GetFila(xID)
{
    var oCelda = document.getElementById(xID).cells[0];
    //var oDoc=document.getElementById(xID).cells[6];
    //var fila=document.getElementById(xID).rowIndex;

    //alert(oDoc.innerHTML);

    //if (oDoc.innerHTML!='') 
    //   location="SeguiExpeDocs.php?xIDExpe="+oCelda.innerHTML;

    //location="Notarios.php?xIDNotario="+oCelda.innerHTML;
    alert(oCelda.innerHTML);


}

//
// Crear la tabla de Facturas Recibidas
//
function CrearTablaEmitidas(myJson) {

    var tabla = new grid("oTabla");
    var j = 0;

    //alert(myJson);
    
    var obj = JSON.parse(myJson);

    deleteLastRow("oTabla");
    
//alert(obj.length);
    for (j = 0; j <= (obj.length - 1); j++)
    {
        //alert(obj[j].Descripcion);
        var row = tabla.AddRowTable(j + 1);

        var celda = tabla.AddRowCellText(row, 0, obj[j].id);
        celda.setAttribute('hidden', 'true'); // ocultar la columna ID
        tabla.AddRowCellText(row, 1, obj[j].numero);
        tabla.AddRowCellText(row, 2, obj[j].nombre);
        tabla.AddRowCellNumber(row, 3, obj[j].fecha);
        tabla.AddRowCellNumber(row, 4, obj[j].total);
      
        if(obj[j].estado==='PAGADA')
            tabla.AddRowCellText(row, 5,'<span class="label label-success">'+ obj[j].estado+'</span>');
        else
            tabla.AddRowCellText(row, 5,'<span class="label label-info">'+ obj[j].estado+'</span>');
        
        //Comprobamos si está pagada o no para cambiar entre pagar y cancelar pago
        var cobro;
         if(obj[j].estado==='PAGADA')
           cobro = '<li><a onclick="CancelarCobrarFact('+(j+1)+');" class="btn tip" title="Anular el cobro de la factura"> <i class="icon-ban-circle"> </i> </a></li>';        

        else
           cobro ='<li><a onclick="CobrarFact('+(j+1)+');" class="btn tip" title="Cobrar la factura"> <i class="icon-money"> </i> </a></li>';        

        
        tabla.AddRowCellText(row, 6,
        '<ul class="table-controls">'+
        '<li><a onclick="VerPDF('+(j+1)+');" class="btn tip" title="Ver Factura"><i class="icon-eye-open"></i></a> </li>'+
        '<li> <a onclick="UpdateFact('+(j+1)+');" class="btn tip" title="Editar factura"> <i class="icon-pencil"> </i> </a></li>'+ 
        '<li><a onclick="SendEmailFact('+(j+1)+');" class="btn tip" title="Enviar por e-Mail"> <i class="icon-envelope-alt"> </i> </a></li>'+
        cobro+
        '</ul>');
       

    }
    
    obj=null;

}

//
// Abrir el formulario para cobrar una factura
//
function CobrarFact(numFila)
{
    var xID='ofila'+numFila;
    var oCelda = document.getElementById(xID).cells[0];
    // http://localhost:8080/FacturaRedmoon/
    window.location.href = 'CobrarFactura.jsp?xIDFactura='+oCelda.innerHTML;
}

//
// Abrir el formulario para cobrar una factura
//
function CancelarCobrarFact(numFila)
{
    var xID='ofila'+numFila;
    var oCelda = document.getElementById(xID).cells[0];
    // http://localhost:8080/FacturaRedmoon/
    window.location.href = 'CancelarCobrarFactura.do?xIDFactura='+oCelda.innerHTML;
}



//
// Abrir el formulario para editar un cliente
//
function UpdateFact(numFila)
{
    var xID='ofila'+numFila;
    var oCelda = document.getElementById(xID).cells[0];
    // http://localhost:8080/FacturaRedmoon/
    window.location.href = 'newFactura.jsp?xIDFactura='+oCelda.innerHTML;
}

//
// Enviar un correo
//
function SendEmailFact(numFila)
{
    var xID='ofila'+numFila;
    var oCelda = document.getElementById(xID).cells[0];
    // SendMailFact
    CallRemote('AjaxServlet', 'accion=SendMailFact&xIDFact='+oCelda.innerHTML);
    
}

//
// Crear tabla de Clientes
//
function CrearTablaCustomers(myJson) {

    var tabla = new grid("oTabla");
   
    var j = 0;

    var obj = JSON.parse(myJson);

    deleteLastRow("oTabla");
    //alert(obj.length);
    
    for (j = 0; j <= (obj.length - 1); j++)
    {
        //alert(obj[j].Descripcion);
        var row = tabla.AddRowTable(j + 1);

        var celda = tabla.AddRowCellText(row, 0, obj[j].ID);
        celda.setAttribute('hidden', 'true'); // ocultar la columna ID
        tabla.AddRowCellText(row, 1, obj[j].Nif);
        tabla.AddRowCellText(row, 2, obj[j].Nombre);
        tabla.AddRowCellText(row, 3, obj[j].Direccion);
        tabla.AddRowCellText(row, 4, obj[j].Movil);
        tabla.AddRowCellText(row, 5, obj[j].Mail);
        tabla.AddRowCellText(row, 6,
               '<ul class="table-controls"><li ><a onclick="EditarCliente('+(j+1)+');" class="btn tip" title="Ver/Editar Cliente"> <i class="icon-pencil"> </i> </a></li></ul>');




    }
    
    obj=null;

}

//
// Abrir el formulario para editar un cliente
//
function EditarCliente(numFila)
{
    var xID='ofila'+numFila;
    var oCelda = document.getElementById(xID).cells[0];
    // http://localhost:8080/FacturaRedmoon/
    window.location.href = 'newCliente.jsp?xIDCliente='+oCelda.innerHTML;
}


//
// Crear la tabla de Proveedores
//
function CrearTablaProviders(myJson) {

    var tabla = new grid("oTabla");
    var j = 0;

    var obj = JSON.parse(myJson);
    deleteLastRow("oTabla");
//alert(obj.length);
    for (j = 0; j <= (obj.length - 1); j++)
    {
        //alert(obj[j].Descripcion);
        var row = tabla.AddRowTable(j + 1);

        //tabla.AddRowCellText(row, 0, obj[j].ID);
        
         var celda = tabla.AddRowCellText(row, 0, obj[j].ID);
        celda.setAttribute('hidden', 'true'); // ocultar la columna ID
        
        tabla.AddRowCellText(row, 1, obj[j].Nif);
        tabla.AddRowCellText(row, 2, obj[j].Nombre);
        tabla.AddRowCellText(row, 3, obj[j].Direccion);
        tabla.AddRowCellText(row, 4, obj[j].Movil);
        tabla.AddRowCellText(row, 5, obj[j].Mail);
        tabla.AddRowCellText(row, 6,
                '<ul class="table-controls"><li ><a onclick="EditarProveedor('+(j+1)+');" class="btn tip" title="Ver/Editar Proveedor"> <i class="icon-pencil"> </i> </a></li></ul>');

    }
    
    obj=null;

}

//
// Abrir el formulario para editar un cliente
//
function EditarProveedor(numFila)
{
    
    var xID='ofila'+numFila;
    var oCelda = document.getElementById(xID).cells[0];   
    
    window.location.href = 'newProveedor.jsp?xIDProveedor='+oCelda.innerHTML;
}


/**
 * 
 * @param {type} accion
 * @returns {undefined}
 */
function NextPage(accion)
{
    
    window.pagina++;
    var pag=window.pagina;
    var tama=window.pagsize;
    var direccion=accion+'&pagina='+pag +'&size='+tama;
    
    document.getElementById("xPag").innerHTML=window.pagina;
    //alert(direccion);
    CallRemote('AjaxServlet', direccion);
}

/**
 * 
 * @returns {undefined}
 */
function PrevPage(accion)
{
    window.pagina--;
    if (window.pagina <1)
        window.pagina=1;
    
    var pag=window.pagina;
    var tama=window.pagsize;
    var direccion=accion+'&pagina='+pag +'&size='+tama;
    document.getElementById("xPag").innerHTML=window.pagina;
    //alert(direccion);
    CallRemote('AjaxServlet', direccion);
}

/**
 * Borrar las columnas de una tabla
 * @param {type} tblName
 * @returns {undefined}
 */
function deleteLastRow(tblName)
{
var tbl = document.getElementById(tblName);
//if (tbl.rows.length > 1) tbl.deleteRow(tbl.rows.length - 1);
for(x=(tbl.rows.length-1); x>0; x--)
    tbl.deleteRow(x);
}
