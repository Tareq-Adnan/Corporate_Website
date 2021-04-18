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
var con='./Corporate/#cntct';
btn2.addEventListener('click', ()=>{
    window.open(con,'_top');
});

let btn3=document.getElementById("contact1");
var con='./Corporate/#cntct';
btn3.addEventListener('click', ()=>{
    window.open(con,'_top');
});