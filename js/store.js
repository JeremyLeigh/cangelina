//VARS
var detLink = document.querySelectorAll('.viewDets');
var popUpDets = document.querySelector('#screenWipe');
var closeBtn = document.querySelector('#xPopUp');
var catLink = document.querySelectorAll('.catLinks');
var resultList = document.querySelector("#resultList");
var allButton = document.querySelector(".loadAll");
var catHeader = document.querySelector("#resultHeader");
var detailsImg = document.querySelector("#detailsImg");
var detailsName = document.querySelector("#popUpDetails h4");
var detailsQty = document.querySelector("#popUpDetails p:first-of-type");
var detailsP = document.querySelector("#popUpDetails p:last-of-type");


//Cat LIST
var category =  ["All", "Meat Pies", "Artisan Sausages", "Lasagnas", "Porchetta", "Whole Pigs", "Preserves"];

//FUNCT

  function loadStore()
  {
    var sentBy = this.id;
    var sentClass = this.classList[0];
    var items = [sentBy , sentClass];
    localStorage.setItem("originData", JSON.stringify(items));
    //localStorage.setItem("storedCat", sentBy);
    //window.location.replace("store.php");
    console.log("Loading Store with this Data = "+items);
    window.location.href = "store.php";
  }


  function originCheck()
  {
    if (document.body.id === "storePage")
    {
    clearAll();
  }
  }

  function popItUp()
  {
    console.log("Pop Up enabled from "+this.id);
    popUpDets.style.display = "flex";
    itemNum = this.id;
    detRequest= new XMLHttpRequest();
   if(!detRequest){
      return false;
   }
   detRequest.onreadystatechange = detLoad;
   detRequest.open("GET", "phpscripts/getSingle.php" + '?itemNum=' + itemNum);
   detRequest.send();
 }

 function detLoad()
 {
   if (detRequest.readyState === detRequest.DONE && detRequest.status === 200){
    var detData = JSON.parse(detRequest.responseText);
    //console.log(detData);
    detailsImg.style.backgroundImage = "url('images/full/"+detData.item_fullimg+"')";
    detailsName.innerHTML = detData.item_name;
    detailsQty.innerHTML = "Qty: " + detData.item_qty;
    detailsP.innerHTML = detData.item_details;
 }

  }

  function closeIt()
  {
    console.log("Closing Pop-Up");
    popUpDets.style.display = "none"
  }


  function clearAll()
  {
    var originData = localStorage.getItem("originData");
    var value = JSON.parse(originData);
    if (value === null)
    {
      value = 0;
    }

    while (resultList.firstChild) {
    resultList.removeChild(resultList.lastChild);
  }
  currentId = this.id;
  console.log("clearAll says this.Id = "+currentId);
  //console.log(this.firstChild);
  if (currentId == undefined)
  {
    currentId = value[0];
  }
  if (currentId == undefined && value[0] == undefined)
  {
    currentId = 0;
  }
  if (currentId == 0)
  {
    console.log("Running from Get All Request")
    allRequest();
    catHeader.innerHTML = "Results For: All";
    colourCat(currentId);
  }
  else{
  if (value[1] === "searchLink")
  {
    console.log("Working from search request");
    singleRequest(currentId);
    catHeader.innerHTML = "Results For: Custom Search";
  }
  else {
  catRequest(currentId);
  console.log("Sent from Store Link");
  catHeader.innerHTML = "Results For: "+ category[currentId];
  colourCat(currentId);
}
}
localStorage.removeItem("originData");
}

 function  colourCat(value)
  {
    console.log("colourCat"+value);
    catLink.forEach(item => {
    item.style.backgroundColor = "#D3D3D3";
    if (item.id === value)
    {
    item.style.backgroundColor = "#80241F";
    }
    if (value === 0)
    {
      allButton.style.backgroundColor = "#80241F";
    }
    });
  }


  function singleRequest(){
       httpRequest= new XMLHttpRequest();
      if(!httpRequest){
         return false;
      }
      httpRequest.onreadystatechange = catLoad;
      httpRequest.open("GET", "phpscripts/getOne.php" + '?itemNum=' + currentId);
      httpRequest.send();
    }



  function catRequest(){
       httpRequest= new XMLHttpRequest();
      if(!httpRequest){
         return false;
      }
      httpRequest.onreadystatechange = catLoad;
      httpRequest.open("GET", "phpscripts/getCat.php" + '?itemCat=' + currentId);
      httpRequest.send();
    }


      function allRequest(){
           httpRequest= new XMLHttpRequest();
           //console.log(CurrentId.innerHTML);
           //console.log(newID);
          if(!httpRequest){
            //console.log('Request Has Failed.');
             return false;
          }
          console.log("Request Sent for All");
          httpRequest.onreadystatechange = catLoad;
          httpRequest.open("GET", "phpscripts/getAll.php");
          httpRequest.send();
        }


    function catLoad(){

      if (httpRequest.readyState === httpRequest.DONE && httpRequest.status === 200){
       //console.log("Status Okay on catLoad");
       var catData = JSON.parse(httpRequest.responseText);
       console.log(catData);
       console.log(catData.length);

       for(var i = 0; i < catData.length; i++)
       {
         console.log(i);
         var itemLi = document.createElement("li");
         resultList.appendChild(itemLi);
         var itemWrap = document.createElement("div");
         itemWrap.classList.add('menuItem');
         itemLi.appendChild(itemWrap);
         if (catData[i].item_fav == 1)
         {
           var itemStar = document.createElement("img");
           itemStar.src = ("icons/star.svg");
           itemStar.classList.add('star');
           itemWrap.appendChild(itemStar);
         }
         var itemThb = document.createElement("img");
         itemThb.src = ("images/thumb/"+catData[i].item_img);
         itemThb.classList.add("thb");
         itemWrap.appendChild(itemThb);
         var itemDiv = document.createElement("div");
         itemWrap.appendChild(itemDiv);
         var itemH4 = document.createElement("h4");
         itemH4.innerHTML = catData[i].item_name;
         itemDiv.appendChild(itemH4);
         var itemA = document.createElement("a");
         itemA.href = "javascript:void(0)";
         itemA.innerHTML = "View Details";
         itemA.classList.add("viewDets");
         itemA.id = catData[i].item_id;
         itemDiv.appendChild(itemA);
         itemA.addEventListener('click', popItUp, false);
       }
 }
     else {
       //console.log("Status Failed On catLoad.");
     }
 }


//EL
addLink();
originCheck();
function addLink(){
  console.log("Adding Links");
  for(i = 0; i < detLink.length; i++) {
  detLink[i].addEventListener('click', popItUp, false);
}
}

  catLink.forEach(item => {
  item.addEventListener('click', clearAll, false);
  });


allButton.addEventListener("click", clearAll, false);

closeBtn.addEventListener("click", closeIt, false);
