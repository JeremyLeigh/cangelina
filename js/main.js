
//VARS
var hamStack = document.querySelector("#hamWrap");
var barOne = document.querySelector("#hamOne");
var barTwo = document.querySelector("#hamTwo");
var barThree = document.querySelector("#hamThree");
var navPage = document.querySelector("#hamSplash");
var splashFog = document.querySelector('#fog');
var exitSet = 0;
//search
var searchInput = document.querySelectorAll(".search input");
//nav about drop
var aboutDrops = document.getElementsByClassName("mobileNavMini");
var aboutBtn = document.querySelector("#navAbout");
var aboutArrow = document.querySelector("#navAbout img");
//Covid-Notice
var covNoticeX = document.querySelector("#workNotice img");
var covNotice = document.querySelector("#workNotice");
var covText = document.querySelector("#workNotice p");
//Scroll to top
var backToTopBtn = document.querySelector("#toTop");
var page = document.body;
console.log(backToTopBtn);

//FUNCT
//ham menu
function maxGate()
{
  if (window.innerWidth >= 960 && exitSet == 1){
    console.log("GateKeep");
    triggerHamburger();
  }
}

function  triggerHamburger()
{
  if (exitSet == 0){
    navPage.style.width = 100+"%";
    splashFog.style.width = 100+"vw";
    barTwo.style.transform = "translateY("+20+"px)";
    barOne.style.transform = "rotate("+45+"deg) translate("+6+"px,"+6+"px)";
    barThree.style.transform = "rotate(-"+45+"deg) translate("+5+"px,-"+5+"px)";
    barTwo.style.backgroundColor = "#496D61";
    barTwo.style.height = 2+"px";
    //lock
    hamStack.classList.add('hamFixed');
    hamStack.classList.remove('hamRel');
    console.log("Trigger Burger");
    exitSet = 1;
  }
  else {
    navPage.style.width = 0+"px";
    splashFog.style.width = 0+"px";
    barTwo.style.transform = "translateX("+0+"px)";
    barTwo.style.backgroundColor = "#496D61";
    barTwo.style.height = 4+"px";
    barOne.style.transform = "rotate(0deg)";
    barThree.style.transform = "rotate(0deg)";
    //unlock
    hamStack.classList.add('hamRel');
    hamStack.classList.remove('hamFixed');
    console.log("Burger Reset");
    exitSet = 0;
  }
}
//search ani
  function clearSearch()
  {
    this.value = "";
    console.log("Cleared");
  }
//mobile nav dropdown
  var navSwitch = 0;
  function navDrop()
  {
    if(navSwitch == 0){
    var i;
    for (i = 0; i < aboutDrops.length; i++) {
    aboutDrops[i].classList.remove('aboutNavHidden');
  }
  aboutArrow.classList.add('navChevUp');
  navSwitch = 1;
}
  else
    {
      var i;
      for (i = 0; i < aboutDrops.length; i++) {
      aboutDrops[i].classList.add('aboutNavHidden');
    }
    aboutArrow.classList.remove('navChevUp');
      navSwitch = 0;
    }
  }
//Covid Notice
      function noticeDismiss()
      {
        covNotice.style.maxHeight = 0;
      }

//Scroll to top
      function scrollToTop()
      {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }



//EV LIST
//ham menu
hamStack.addEventListener("click", triggerHamburger, false);
window.addEventListener("resize", maxGate, false);
//search
searchInput.forEach(i => {
  i.addEventListener('blur', clearSearch, false);
});
//mobile nav dropdown
aboutBtn.addEventListener("click", navDrop, false);
//Scroll to topBar
backToTopBtn.addEventListener("click", scrollToTop, false);


//page specific content
window.onload = function()
{
    if (document.body.id === "workshopPage") {
      //Covid Notice
      covNoticeX.addEventListener("click", noticeDismiss, false);

    }
    else{
      console.log("Workshop Functions Omitted");
    }
  };
