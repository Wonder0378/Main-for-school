
// to shorten the screen display function
var display = document.getElementById("screen");
var lastused = ""

//Main function for input (numbers/operators)
function button(strVar) {
    if(strVar == "clear") {
        display.innerHTML = "";
        lastused = "";
    } 
    else {
        lastused = display.innerHTML
        display.innerHTML = 
        display.innerHTML + strVar;
    };
};
//Calculate function
function calc() {
    display.innerHTML = eval(display.innerHTML);
};
//Delete function (deletes last number/operator)
function del() {
    display.innerHTML = display.innerText.slice(0, -1);
};
//Square root function
function sqrt() {
    display.innerHTML = Math.sqrt(eval(display.innerHTML));
};
//Function for logarithm of 10
function log() {
    display.innerHTML = Math.log10(eval(display.innerHTML));
};
function plusminus() {
    display.innerHTML = -eval(display.innerHTML);
};
function trig(strVar) {
    var strVar = strVar
    switch(strVar) {
        case "sin":
            display.innerHTML = Math.sin(eval(display.innerHTML));
            break;
        case "cos":
            display.innerHTML = Math.cos(eval(display.innerHTML));
            break;
        case "tan":
            display.innerHTML = Math.tan(eval(display.innerHTML));
            break;
        case "sint":
            display.innerHTML = Math.sinh(eval(display.innerHTML));
            break;
        case "cost":
            display.innerHTML = Math.cosh(eval(display.innerHTML));
            break;
        case "tant":
            display.innerHTML = Math.tanh(eval(display.innerHTML));
            break;
    };
};