/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Busqueda de clientes por nombre
 * @returns {undefined}
 */
function ClientesByNombre(){
    var pag=1; 
    var tama=10; 
    var xNombre = document.getElementById('xNombre').value;
    var direccion='accion=clientesByNombre&pagina='+pag +'&size='+tama+'&xNombre='+xNombre;
    //alert(direccion);
    CallRemote('AjaxServlet', direccion);
}


/**
 * 
 * @returns {undefined}
 */
function NextPageClientes()
{
    window.pagina++;
    var pag=window.pagina;
    var tama=window.pagsize;
    var xNombre = document.getElementById('xNombre').value;    
    var direccion='';
    
     if(xNombre.length>0){
       
        direccion='accion=clientesByNombre&pagina='+pag +'&size='+tama+'&xNombre='+xNombre;
    }
    else
        direccion='accion=clientes'+'&pagina='+pag +'&size='+tama;
    
    
    
    document.getElementById("xPag").innerHTML=window.pagina;
    //alert(direccion);
    CallRemote('AjaxServlet', direccion);
}

/**
 * 
 * @returns {undefined}
 */
function PrevPageClientes()
{
    
    window.pagina--;
    if (window.pagina <1)
        window.pagina=1;
    
    var pag=window.pagina;
    var tama=window.pagsize;
    
    var xNombre = document.getElementById('xNombre').value;    
    var direccion='';
    
    if(xNombre.length>0){
       
        direccion='accion=clientesByNombre&pagina='+pag +'&size='+tama+'&xNombre='+xNombre;
    }
    else
        direccion='accion=clientes'+'&pagina='+pag +'&size='+tama;
    
    
    
    document.getElementById("xPag").innerHTML=window.pagina;
    //alert(direccion);
    CallRemote('AjaxServlet', direccion);
}
