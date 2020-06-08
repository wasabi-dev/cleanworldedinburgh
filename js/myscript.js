
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

/////////Ventana modal/////////

var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}