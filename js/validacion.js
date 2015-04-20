/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


function validacion() {

    var nif = document.getElementById("xNIF");
    var miformulario = document.getElementById("newcustomer");

    if (nif.value === "")
    {
        alert("datos no validos");
        return false;
    }
    else
        miformulario.submit();
}