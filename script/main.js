// navbar
var bar =document.querySelector(".bar");
var nav =document.querySelector("nav");

var botton = [
`<img style="width:40px; height:auto;" src="images/icon/close.png" alt="botton">`,
`<img style="width:40px; height:auto;" src="images/icon/menu.png" alt="botton">`,
];

let A = 0;
bar.addEventListener("click",()=>{
  bar.innerHTML = botton[A++];
  if(A >= botton.length ){ A=0 }

  nav.classList.toggle("navbar")
})



// contact us FROM

var icon_form = document.querySelector(".icon_form");
var form = document.querySelector(".form");

var start_now = document.querySelector(".start_now");

start_now.addEventListener("click",()=>{
  form.classList.remove("form_close")
});

icon_form.addEventListener("click",()=>{
  form.classList.add("form_close")
});


window.onscroll = ()=>{
  form.classList.add("form_close");
}