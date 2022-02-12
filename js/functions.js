let el = document.getElementById("myBtn");
if(el){el.addEventListener("click", showMsg);}

el2 = document.getElementById("myBtn2");
if(el2){el2.addEventListener("click", showMsg2);}

el3 = document.getElementById("myBtn3");
if(el3){el3.addEventListener("click", showMsg3);}

el4 = document.getElementById("myBtn4");
if(el4){el4.addEventListener("click", showMsg4);}

el5 = document.getElementById("myBtn5");
if(el5){el5.addEventListener("click", showMsg5);}

el6 = document.getElementById("myBtn6");
if(el6){el6.addEventListener("click", showMsg6);}

el7 = document.getElementById("myBtn7");
if(el7){el7.addEventListener("click", showMsg7);}

function showMsg() {
  document.getElementById("demo").innerHTML = "Message 1";
}
function showMsg2() {
    document.getElementById("demo2").innerHTML = "Message 2";
}
function showMsg3() {
    document.getElementById("demo3").innerHTML = "Message 3";
}
function showMsg4() {
    document.getElementById("demo4").innerHTML = "Message 4";
}
function showMsg5() {
    document.getElementById("demo5").innerHTML = "Message 5";
}
function showMsg6() {
    document.getElementById("demo6").innerHTML = "Message 6";
}
function showMsg7() {
    document.getElementById("demo7").innerHTML = "Message 7";
}