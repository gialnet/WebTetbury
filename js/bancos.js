/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function LeerSaldoCuenta()
{
    
   document.xCuenta=$("#xCuentaBanco option:selected").val();
    //alert(xCuenta);
    CallRemote('AjaxServlet', 'accion=LeerSaldoCuenta&cuantos=year_fiscal&xCuentaBanco='+document.xCuenta);
}

function PutSaldoenHTML(saldo)
{
    //alert(saldo);
    document.getElementById("xSaldo").innerHTML='Saldo en cuenta: '+saldo;
}


function LeerMovimientosBancos(direccion)
{
    document.xCuenta=$("#xCuentaBanco option:selected").val();
    var direccion = 'accion=ListaMovimientosBancos&cuantos=year_fiscal&xCuentaBanco='+document.xCuenta+'&pagina=' + pag + '&size=' + tama;
    //alert(direccion);
   // var xCuenta=$("#listaProveedores option:selected").val();
    CallRemote('AjaxServlet', direccion);
    LeerSaldoCuenta();
}


/**
 * 
 * @param {type} myJson
 * @returns {undefined}
 */
function CrearTablaMovimientosBancos(myJson)
{

    var tabla = new grid("oTabla");
    var j = 0;

    var obj = JSON.parse(myJson);

    // borrar las tuplas de consultas anteriores
    deleteLastRow("oTabla");
    
    //alert(obj.length);
    
    for (j = 0; j <= (obj.length - 1); j++)
    {
        //alert(obj[j].Descripcion);
        var row = tabla.AddRowTable(j + 1);

       // tabla.AddRowCellText(row, 0, obj[j].id);
         var celda = tabla.AddRowCellText(row, 0, obj[j].id);
        celda.setAttribute('hidden', 'true'); // ocultar la columna ID
        tabla.AddRowCellText(row, 1, obj[j].fecha);
        tabla.AddRowCellText(row, 2, obj[j].concepto);
        //tabla.AddRowCellNumber(row, 3, obj[j].importe);
        if (obj[j].debe_haber==='D')
            {
                tabla.AddRowCellNumber(row, 3, obj[j].LocaleImporte);
                tabla.AddRowCellNumber(row, 4, '');
            }
        else
            {
                tabla.AddRowCellNumber(row, 3, '');
                tabla.AddRowCellNumber(row, 4, obj[j].LocaleImporte);
            }
        
        tabla.AddRowCellText(row, 5,
                '<ul class="table-controls">'+
               '<li ><a onclick="UpdateAsientoCaja('+(j+1)+');" class="btn tip" title="Editar movimiento"> <i class="icon-pencil"> </i> </a></li>'+
                '</ul>');

    }
    
    obj=null;


}

/**
 * 
 * @param {type} numFila
 * @returns {undefined}
 */
function UpdateAsientoCaja(numFila)
{
    // Abrir la pantalla para actualizar el asiento
    var xID='ofila'+numFila;
    var oCelda = document.getElementById(xID).cells[0];
    // http://localhost:8080/FacturaRedmoon/
    window.location.href = 'ReintegrosIngresos.jsp?xIDAsiento='+oCelda.innerHTML;
}

