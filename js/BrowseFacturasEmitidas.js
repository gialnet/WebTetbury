/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Busqueda de clientes por nombre
 * @returns {undefined}
 */
function EmitidasByNombre(){
    var pag=1; 
    var tama=10; 
    var xNombre = document.getElementById('xNombre').value;
    var direccion='accion=emitidasByNombre&pagina='+pag +'&size='+tama+'&xNombre='+xNombre;
    //alert(direccion);
    CallRemote('AjaxServlet', direccion);
}

/*
 * 
 * @returns {undefined}
 */
function EmitidasByNumero(){
    var pag=1; 
    var tama=10; 
    var xNombre = document.getElementById('xNumero').value;
    var direccion='accion=emitidasByNumero&pagina='+pag +'&size='+tama+'&xNombre='+xNombre;
    //alert(direccion);
    CallRemote('AjaxServlet', direccion);
}


/**
 * 
 * @returns {undefined}
 */
function NextPageEmitidas()
{
    window.pagina++;
    var pag=window.pagina;
    var tama=window.pagsize;
    var xNombre = document.getElementById('xNombre').value;    
    var direccion='';
    
     if(xNombre.length>0){
       
        direccion='accion=emitidasByNombre&pagina='+pag +'&size='+tama+'&xNombre='+xNombre;
    }
    else
        direccion='accion=fact_emitidas'+'&pagina='+pag +'&size='+tama;
    
    
    
    document.getElementById("xPag").innerHTML=window.pagina;
    //alert(direccion);
    CallRemote('AjaxServlet', direccion);
}

/**
 * 
 * @returns {undefined}
 */
function PrevPageEmitidas()
{
    
    window.pagina--;
    if (window.pagina <1)
        window.pagina=1;
    
    var pag=window.pagina;
    var tama=window.pagsize;
    
    var xNombre = document.getElementById('xNombre').value;    
    var direccion='';
    
    if(xNombre.length>0){
       
        direccion='accion=emitidasByNombre&pagina='+pag +'&size='+tama+'&xNombre='+xNombre;
    }
    else
        direccion='accion=fact_emitidas'+'&pagina='+pag +'&size='+tama;
    
    
    
    document.getElementById("xPag").innerHTML=window.pagina;
    //alert(direccion);
    CallRemote('AjaxServlet', direccion);
}
