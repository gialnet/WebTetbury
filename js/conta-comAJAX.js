/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//
// Objeto para invocar una comunicación AJAX
//

//
// Leer datos de Oracle via Ajax y PHP
//
// Hacer una llamada http post asincrona
//
// ejemplo: url_parametros='xIDExpe=94175';
// ejemplo: CallRemote('Redmoon_php/serializado_SeguiSolicitudes.php', url_parametros)
//


var Conectar = (function() {

    this.url;
    this.dataToSend;
    this.pageRequest;
    
    var conecta = function(url, dataToSend)
    {
        this.url=url;
        this.dataToSend=dataToSend;
        //this.pageRequest;
        
            if (window.XMLHttpRequest) {
                this.pageRequest = new XMLHttpRequest();
            }
            else if (window.ActiveXObject) {
                try {
                    this.pageRequest = new ActiveXObject("Msxml2.XMLHTTP");
                }
                catch (e) {
                    try {
                        this.pageRequest = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    catch (e) {
                    }
                }
            }
            else
                return false;
            
            this.Enviar = function()
                        {
                            if (this.dataToSend) {
                                this.pageRequest.open('POST', this.url, true);
                                this.pageRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                                this.pageRequest.send(this.dataToSend);
                                //alert('CallRemote dataToSend');
                                return true;
                            }
                            else {
                                this.pageRequest.open('GET', this.url, true);
                                this.pageRequest.send(this.dataToSend);
                                return true;
                            }
                            return true;
                        };
                        
            this.NextPage = function(accion)
            {

                window.pagina++;
                var direccion=accion+'&pagina='+window.pagina+'&size='+window.pagsize;
                this.dataToSend=direccion;

                //alert(window.pagina+'data:'+direccion);
                
                document.getElementById("xPag").innerHTML=window.pagina;
                this.Enviar();
                
                //CallRemote('AjaxServlet', direccion);

            };

            this.PrevPage = function(accion)
            {
                window.pagina--;
                if (window.pagina <1)
                    window.pagina=1;

                var direccion=accion+'&pagina='+window.pagina+'&size='+window.pagsize;
                this.dataToSend=direccion;
                
                document.getElementById("xPag").innerHTML=window.pagina;
                this.Enviar();
                //alert(direccion);
                //CallRemote('AjaxServlet', direccion);
            };
            //return pageRequest;
    };

    

    
return conecta;

})();
