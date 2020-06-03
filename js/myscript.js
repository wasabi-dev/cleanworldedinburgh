var phora= 17;
var oven= 48;
var dobleoven= 58;
var carpet= 38;
var window= 35;

const canthoras = document.getElementById("canthoras").value;
document.getElementById("signo").addEventListener("keypress", preciototal)
function preciototal(){
    var h = canthoras * phora;
    document.getElementById("mostrarhoras").innerHTML = h;
}



console.log(preciototal);
preciototal();