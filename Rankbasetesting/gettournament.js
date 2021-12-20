function wGet(myUrl) {
    var www = new XMLHttpRequest(); // a new request with the help of an instance of the class XMLHttpRequest() which is builtin
    
    www.open("GET", myUrl, false);
    //we use 'GET' http command to get URL, the boolean setting parameter 'async' to false because we want synchronous data from the API
    
    www.send(null); //we want to respond but not send data.
    return www.responseText; //responseText gets us the whole URL as our return.
  }
  


var url = 'https://api.sportsdata.io/v3/lol/scores/json/ActiveMemberships?key=2aeb06301d9f4544b2738238282de7dd';

infobox = document.getElementById('info');