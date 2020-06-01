var phora= 17;
var oven= 48;
var dobleoven= 58;
var carpet= 38;
var window= 35;


var canthoras = document.getElementById("canthoras").value;
console.log(canthoras);


document.getElementsById("signo").addEventListener("click", function preciototal(){
    var h = canthoras * phora;
    document.getElementById("mostrarhoras").innerHTML = h;     

});

console.log(preciototal);
preciototal();