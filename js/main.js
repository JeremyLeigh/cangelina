
//VARS
var hamStack = document.querySelector("#hamWrap");
var barOne = document.querySelector("#hamOne");
var barTwo = document.querySelector("#hamTwo");
var barThree = document.querySelector("#hamThree");
var navPage = document.querySelector("#hamSplash");
var exitSet = 0;

//FUNCT
function  triggerHamburger()
{
  if (exitSet == 0){
    navPage.style.width = 100+"vw";
    barTwo.style.transform = "translateY("+20+"px)";
    barOne.style.transform = "rotate("+45+"deg) translate("+7+"px,"+7+"px)";
    barThree.style.transform = "rotate(-"+45+"deg) translate("+7+"px,-"+7+"px)";
    console.log("Trigger Burger");
    exitSet = 1;
  }
  else {
    navPage.style.width = 0+"px";
    barTwo.style.transform = "translateX("+0+"px)";
    barOne.style.transform = "rotate(0deg)";
    barThree.style.transform = "rotate(0deg)";
    console.log("Burger Reset");
    exitSet = 0;
  }
}

//EV LIST
hamStack.addEventListener("click", triggerHamburger, false);
