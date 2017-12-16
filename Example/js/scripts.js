(function() { 
    var n;
    var httpRequest;
    document.usermood.onsubmit=function(event){
        event.preventDefault();
         makeRequest('data/fortunes.txt');
    };

  function makeRequest(url) {
     if (window.XMLHttpRequest) { // Mozilla, Safari, ...
        httpRequest = new XMLHttpRequest();
      } 
    else if (window.ActiveXObject) { // IE
      try {
        httpRequest = new ActiveXObject("Msxml2.XMLHTTP");
      } 
      catch (e) {
        try {
          httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
        } 
        catch (e) {}
      }
    }

    if (!httpRequest) {
      alert('Giving up :( Cannot create an XMLHTTP instance');
      return false;
    }
    displayLoading(document.getElementById("fortune"));
    httpRequest.onreadystatechange = alertContents;
    httpRequest.open('GET', url);
    httpRequest.send();
  }

  function alertContents() {
    if (httpRequest.readyState === 4) {
      if (httpRequest.status === 200 || httpRequest.status== 304) {

          var JSONObject = JSON.parse(httpRequest.responseText);
          fortuneDiv=document.getElementById("fortune");
         //fortuneDiv.innerHTML = JSONObject.Description;

           t=document.getElementById("number");
          n=t.value;
         
          if(n==0){
            fortuneDiv.innerHTML = JSONObject.Happy;
          }
          else if(n==1){
             fortuneDiv.innerHTML = JSONObject.Sad;
          }
          else if(n==2){
             fortuneDiv.innerHTML = JSONObject.Adventurous;
          }
          else if(n==3){
            fortuneDiv.innerHTML = JSONObject.Lonely;
          }
          else if(n==4){
            fortuneDiv.innerHTML = JSONObject.Lost;
          }
          

          fadeUp(fortuneDiv,255,255,153);
          var cookieImg = document.getElementById("cookie");
          cookieImg.src="img/cracked.png";
      } else {
        alert('There is a problem with the request');
      }

    }
  }

  function displayLoading(element) {
    while (element.hasChildNodes()) {
      element.removeChild(element.lastChild);
    }
    var image = document.createElement("img");
    image.setAttribute("src","img/loading.gif");
    image.setAttribute("alt","Loading...");
    element.appendChild(image);
  }
  function fadeUp(element,red,green,blue) {
    if (element.fade) {
      clearTimeout(element.fade);
    }
    element.style.backgroundColor = "rgb("+red+","+green+","+blue+")";
    if (red == 255 && green == 255 && blue == 255) {
      return;
    }
    var newred = red + Math.ceil((255 - red)/10);
    var newgreen = green + Math.ceil((255 - green)/10);
    var newblue = blue + Math.ceil((255 - blue)/10);
    var repeat = function() {
      fadeUp(element,newred,newgreen,newblue)
    };
    element.fade = setTimeout(repeat,200);
  }

})();