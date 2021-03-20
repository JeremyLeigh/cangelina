//Vars
var livesearchUl = document.querySelectorAll(".livesearch ul");
var searchBars = document.querySelectorAll(".search input");
var livesearch =  document.querySelectorAll(".livesearch");

//Functions

function mobileCheck()
{
if(window.innerWidth <= 959)
{
  resultBlock = livesearchUl[1];
  resultsSec = livesearch[1];
}
else{
  resultBlock = livesearchUl[0];
  resultsSec = livesearch[0];
}
return [resultBlock, resultsSec];
console.log("MobileChecked");
}


function showRes()
{
  unpack = mobileCheck();
  resultsSec = unpack[1];
  resultsSec.style.display = "block";
}
function hideRes()
{
  unpack = mobileCheck();
  resultsSec = unpack[1];
  //resultsSec.style.display = "none";
  //while (resultBlock.firstChild) {
  //  resultBlock.removeChild(resultBlock.lastChild);
//  }
}


function showResult(str) {
  //Erases Results on Cleared Field
  unpack = mobileCheck();
  resultsSec = unpack[1];
  resultBlock = unpack[0];
  if (str.length==0) {
    while (resultBlock.firstChild) {
      resultBlock.removeChild(resultBlock.lastChild);
    }
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      var searchData = JSON.parse(this.responseText);
      console.log("This is the Json Parse "+searchData);
      //clear last results
      while (resultBlock.firstChild) {
        resultBlock.removeChild(resultBlock.lastChild);
      }

      if (searchData == null)
      {
        var resItem = document.createElement("li");
        resultBlock.appendChild(resItem);
        var resP = document.createElement("p");
        resItem.appendChild(resP);
        resP.innerHTML = "No Results";
      }
      else{
      for(var i = 0; i < searchData.length; i++)
      {
      var resItem = document.createElement("li");
      resultBlock.appendChild(resItem);
      var resA = document.createElement("a");
      //console.log(searchData[i]);
      resA.href = "javascript:void(0)";
      resA.id = searchData[i].item_id;
      resA.classList.add("searchLink");
      resA.innerHTML = searchData[i].item_name;
      resItem.appendChild(resA);
      var searchLinks = document.querySelectorAll(".searchLink");
      searchLinks.forEach(item => {
      item.addEventListener('click', loadStore, false);
      });
    }
    }
        //console.log(i);
    }
  }
  xmlhttp.open("GET","phpscripts/livesearch.php?q="+str,true);
  xmlhttp.send();
}

//EL

searchBars.forEach(item => {
item.addEventListener('focus', showRes, false);
});
searchBars.forEach(item => {
item.addEventListener('blur', hideRes, false);
});
