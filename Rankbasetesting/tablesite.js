
var gallery = document.getElementById('gallery');
var left = document.getElementById('left');
var right = document.getElementById('right');

right.addEventListener("click", function() {
    console.log(left_pos);
    gallery.style.left = gallery.style.left - "37.5%";
    gallery.style.background = "red";
});

left.addEventListener("click", function() {
    gallery.style.left = gallery.style.left - "37.5%";
});