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
            margin-top: 12.5%;
            margin-left: 25%;
            width: 50%;
            height: 50%;
        }
        .hej{
            width: 20px;
            height: 20px;
            color: red;
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
        document.body.appendChild(exdiv);
    });
</script>