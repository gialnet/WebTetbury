

/**
 * Lista de socios con sus aportaciones
 * @returns {Conectar}
 */

function LeerAdministradores()
{
    
    var url='AjaxContaServlet';
    var dataToSend='accion=ListaAdministradores';
    var conn = new Conectar(url, dataToSend);
    
    conn.pageRequest.onreadystatechange = function() { ListaAdministradores(conn.pageRequest); };

    conn.Enviar();
    
    return conn;
}

function ListaAdministradores(pageRequest) {


    if (pageRequest.readyState === 4)
    {
        if (pageRequest.status === 200)
        {
            // Solo descomentar para depuración
            //alert(pageRequest.responseText);
            if (pageRequest.responseText === 'Error')
                alert(pageRequest.responseText);
            else
            {
                CrearTablaAdministradores(pageRequest.responseText);
                //return pageRequest.responseText;

            }


        }
    }
    else
        return;
}

/**
 * 
 * @param {type} myJson
 * @returns {undefined}
 */
function CrearTablaAdministradores(myJson)
{

    var tabla = new grid("oAdministradores");
    var j = 0;

    var obj = JSON.parse(myJson);

    // borrar las tuplas de consultas anteriores
    deleteLastRow("oAdministradores");
    
    //alert(obj.length);
    
    for (j = 0; j <= (obj.length - 1); j++)
    {
        //alert(obj[j].Descripcion);
        var row = tabla.AddRowTable(j + 1);

        //tabla.AddRowCellText(row, 0, obj[j].id);
        var celda = tabla.AddRowCellText(row, 0, obj[j].id);
        celda.setAttribute('hidden', 'true'); // ocultar la columna ID
        tabla.AddRowCellText(row, 1, obj[j].nif );
        tabla.AddRowCellNumber(row, 2, obj[j].nombre );
        tabla.AddRowCellNumber(row, 3, obj[j].tipo_poderes ); // tipo de poderes del Administrador de la sociedad
        tabla.AddRowCellText(row, 4,           
        '<ul class="table-controls"><li ><a  onclick="VerDiarioApunte('+(j+1)+');"  class="btn tip" title="Editar"> <i class="icon-refresh"> </i> </a></li></ul>');
    
    }
    obj=null;


}