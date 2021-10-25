//document.addEventListener("DOMContentLoaded", function() {
/**
* 
* 
*/
const b = document.querySelector(".box")
height = b.clientHeight
width = b.clientWidth
isbig = false

function main() {
    if (isbig == true) {
        isbig = false
        height = height*1.2
        width = width*1.2

        b.style.height = height + "px"
        b.style.width = width + "px"
        b.style.padding = height/2 + "px"
    }
    else {
        isbig = true
        height = height/1.2
        width = width/1.2

        b.style.height = height + "px"
        b.style.width = width + "px"
        b.style.padding = height/2 + "px"
    }

    
}
// Main <3
//main()
//})