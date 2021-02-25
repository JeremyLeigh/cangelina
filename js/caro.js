//VARS
var slideBar = document.querySelector("#caroViewport");
var leftArrow = document.querySelector("#caroPrev");
var rightArrow = document.querySelector("#caroNext");
var slide = document.querySelector("#caroSlide1");
var slideNum = 1;
var body = document.body;

//Functions
  function spin()
  {
    if (slideNum == 3){
      slideBar.scrollTo(0,0);
      console.log("Reset");
      slideNum = 1;
    }
    else {
      slideBar.scrollBy(body.clientWidth,0);
      slideNum ++;
    }
  }

  function reverse()
  {
    if (slideNum == 1){
      slideBar.scrollTo(body.clientWidth*3,0);
      console.log("Reset Reverse");
      slideNum = 3;
    }
    else {
      slideBar.scrollBy(-body.clientWidth,0);
      slideNum --;
    }
  }


//Event Listeners
rightArrow.addEventListener("click", spin, false);
leftArrow.addEventListener("click", reverse, false);
