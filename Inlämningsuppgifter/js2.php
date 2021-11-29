<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body {
            width: 100%;
            height: 100vh;
            margin: 0;
        }
        .box {
            position: absolute;
            background-color: red;
            height: 50vmin;
            width: 50vmin;
            top: 25%;
            right: 0%;
        }
    </style>
</head>
<body>
</body>
</html>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    var exdiv = document.createElement("div");

    exdiv.classList.add("box");
    exdiv.onclick = function() {
        exdiv.style.left = "0";
        exdiv.style.right = "50%";
        exdiv.style.background = "blue";
    };
    document.body.appendChild(exdiv);
    });
</script>