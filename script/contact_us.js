// contact us FROM
var icon_form = document.querySelector(".icon_form");
var form = document.querySelector(".form");

var start_now = document.querySelector(".start_now");
start_now.addEventListener("click",()=>{
  form.classList.toggle("form_close")
});

icon_form.addEventListener("click",()=>{
  form.classList.toggle("form_close");
});


window.onscroll = ()=>{
    form.classList.add("form_close");
  }
  