
/*
function wGet(myUrl) {
    var www = new XMLHttpRequest();
    
    www.open("GET", myUrl, false);
    www.send(null);

    return www.responseText; 
  }

infobox = document.getElementById('fetcheddata');

function newReq() {
    let data = wGet('https://api.sportsdata.io/v3/lol/scores/json/Teams?key=2aeb06301d9f4544b2738238282de7dd');

    let myData = JSON.parse(data);

    for(i=0; i<myData.lenght; i++) {
      infobox.innerHTML += "<div id='data'>" +
      myData[i].Name + 
      "from" + myData[i].Areaname + 
      "</div>"
    };
};
*/