var fname=document.querySelector('#first-name');
fname.addEventListener('blur',validate);
var lastname=document.querySelector('#lastname');
lastname.addEventListener('blur',validate);
var email=document.querySelector('#email');
email.addEventListener('blur',validate);
var phone=document.querySelector('#phone');
phone.addEventListener('blur',validate);
var street=document.querySelector('#street');
street.addEventListener('blur',validate);
var address=document.querySelector('#address');
address.addEventListener('blur',validate);
var city=document.querySelector('#city');
city.addEventListener('blur',validate);
var code=document.querySelector('#code');
code.addEventListener('blur',validate);
var hours=document.querySelector('#hours');
hours.addEventListener('blur',validate);
var often=document.querySelector('#often');
often.addEventListener('blur',validate);
var chemicals=document.querySelector('#chemicals');
chemicals.addEventListener('blur',validate);
var days=document.querySelector('#days');
days.addEventListener('blur',validate);
var bedrooms=document.querySelector('#bedrooms');
bedrooms.addEventListener('blur',validate);
var pets=document.querySelector('#pets');
pets.addEventListener('blur',validate);
var comments=document.querySelector('#comments');
comments.addEventListener('blur',validate);

function validate(){
    const label=this.parentNode.previousSibling.previousSibling;
    let icono=document.createElement('i');
        if(this.value===''){
            icono.classList.add('fas','fa-exclamation','icono');  
            label.appendChild(icono);
        }
        else{
            if (document.querySelector('svg')) {
                label.removeChild(document.querySelector('svg'));   
            } 
        }
        this.addEventListener('keypress',()=>{
            if (document.querySelector('svg')) {
                label.removeChild(document.querySelector('svg'));   
            }
        })
}
