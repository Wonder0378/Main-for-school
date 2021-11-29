
// to shorten the screen display function
var display = document.getElementById("screen");

//Main function for input (numbers/operators)
function button(strVar) {
    if(strVar == "clear") {
        display.innerHTML = "";
    } else {
        display.innerHTML = 
        display.innerHTML + strVar;
    }
};
//Calculate function
function calc() {
    display.innerHTML = eval(display.innerHTML);
};