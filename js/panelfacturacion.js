/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Actualizar todo facturación
 * @param {type} xYear
 * @param {type} xPeri
 * @returns {Conectar}
 */
function ActualizarTodo(xYear, xPeri)
{
    
    //window.location.href = 'ServletActualizarBalance?xYear='+xYear+'&xUser='+xUser;
    
    var url='ServletActualizarFacturacion';
    var dataToSend='xYear='+xYear+'&xPeri='+xPeri;
    
    //alert(dataToSend);
    
    var conn = new Conectar(url, dataToSend);
       
    conn.pageRequest.onreadystatechange = function() { RefrescarVistaFacturacion(conn.pageRequest); };

    conn.Enviar();
    
    return conn;   
    
}

/**
 * Para la imagen animada de realizando proceso
 * @param {type} pageRequest
 * @returns {unresolved}
 */
function RefrescarVistaFacturacion(pageRequest) {


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
                PararAnimacionFacturacion();
                //return pageRequest.responseText;
            }


        }
    }
    else
        return;
}

/**
 * Alerta de proceso concluido
 * @returns {undefined}
 */
function PararAnimacionFacturacion()
{
    alert('Proceso concluido, voy a refrescar los datos de la página');
    window.location.href = 'PanelFacturacion.jsp';
}