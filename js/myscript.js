
var phora= 17;
var oven= 48;
var dobleoven= 58;
var carpet= 38;
var window= 35;

const canthoras = document.getElementById("canthoras").value;


           
function preciototal(){
    var h = canthoras * phora;
    document.getElementById("mostrarhoras").innerHTML = h;
}

console.log(preciototal);

var v;
var z;
if( ( v = $("#ozonoselect:checked").val() ) != null ){
    document.getElementById("type").innerHTML = "Ozono Cleaning";
}
else if( ( v = $("#clean:checked").val() ) != null ){
    document.getElementById("type").innerHTML = "Standard Clean";
}
else{
    document.getElementById("type").innerHTML = "Choose type clean";
}


preciototal();