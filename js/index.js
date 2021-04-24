
var bordername=document.getElementById('name');
var borderuser=document.getElementById('username');
var borderpass=document.getElementById('password');
var borderconpass=document.getElementById('conpassword');
var borderadd=document.getElementById('address');
var bordernumber=document.getElementById('sel');
var borderemail=document.getElementById('email');
var bordercomment=document.getElementById('comments');


var war1=document.getElementById('warname');
var war2=document.getElementById('warusername');
var war3=document.getElementById('warpass');
var war4=document.getElementById('warconpass');
var war5=document.getElementById('waremail');
var war6=document.getElementById('warphone');
var war7=document.getElementById('wargen');
var war8=document.getElementById('waradd');
var war9=document.getElementById('warcom');

function Check(form){
   
    var a=/^[A-Za-z]+$/;
    var b=document.getElementById('name').value;
    
    if(b.match(a)){
    bordername.style.borderColor ="Seagreen";
    war1.innerHTML="";
    }
    else{
    war1.innerHTML="**Required and Alphabets Only";
    bordername.style.borderColor ="red";
    return false;
    }

    var c=document.getElementById('username').value;
if(c.length==0){
    war2.innerHTML="**Required username";
    borderuser.style.borderColor ="red";
    return false;
    }

else if(form.sel.value.length==0){
        war6.innerHTML="**Required Mobile number";
        borderlang.style.borderColor ="red";
        return false;
        }
else if(form.password.value.length<6){
            war3.innerHTML="**Required and Must be 6 to 12";
            borderpass.style.borderColor ="red";
            return false;
            }
else if(form.email.value.length == 0 || form.email.value.indexOf("@")<1 || form.email.value.indexOf(".")<2 ){
                war5.innerHTML="**Must be a valid email";
                borderemail.style.borderColor ="red";
                return false;
                } 
else if(form.password.value!=form.conpassword.value){
                war4.innerHTML="**password must be same";
                borderconpass.style.borderColor ="red";
                return false; 
            }

else if(form.address.value.length==0){
            war8.innerHTML="**Field can't be empty!";
            form.address.style.borderColor ="red";
            return false;
         }        
else if(form.comments.value.length==0){
            war9.innerHTML="**Field can't be empty!";
            form.comments.style.borderColor ="red";
            return false;
}       
else{
    borderuser.style.borderColor ="Seagreen";
    borderpass.style.borderColor ="Seagreen";
    borderconpass.style.borderColor ="Seagreen";
    borderemail.style.borderColor ="Seagreen";
    bordernumber.style.borderColor ="Seagreen";
    borderadd.style.borderColor ="Seagreen";
    bordercomment.style.borderColor ="Seagreen";

    war1.innerHTML="";
    war2.innerHTML="";
    war3.innerHTML="";
    war4.innerHTML="";
    war5.innerHTML="";
    war6.innerHTML="";
    war7.innerHTML="";
    war8.innerHTML="";
    war9.innerHTML="";

    
}

var x=document.forms.gender;

for(let i=0;i<x.length;i++){
    if(x[i].checked==true){
        return true;
    }
    else{
        war7.innerHTML="**Requried!";
        return false;
    }
}

}





$(document).ready(function(){

    $('.slider').slick({
        arrows:false,
        dots:true,
        appendDots:'.slider-dots',
        dotsClass:'dots'
    });
});



let btn=document.getElementById("reg");
var a='../Corporate/php/RegistrationForm.html';
btn.addEventListener('click', ()=>{
window.open(a,'_top');
});

let btn2=document.getElementById("contact");
var con='../Corporate/#cntct';
btn2.addEventListener('click', ()=>{
    window.open(con,'_top');
});

let btn3=document.getElementById("contact1");
var con="../Corporate/#cntct";
btn3.addEventListener('click', ()=>{
    window.open(con,'_top');
});




