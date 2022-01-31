<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="pang.css">
</head>
<body>
    <div id="whitebg"></div>
    <div class="pang">
        <h1>PANG!</h1>
        <nav>
            <a href="#">HOME</a>
            <a href="#">
                <label for="read" id="click">READ</label>
            </a>
            <a href="#">CONTACT</a>
            <a href="#">ABOUT</a>
        </nav>
    </div>
    <input type="checkbox" id="read">
    <div id="read" class="read">
        <?php
        $x = 5;
        $textlenght = 4;
        
        for($i = 1; $i<=$x; $i++) {
            $lorem = "Lorem ipsum dolor, sit amet consectetur 
                adipisicing elit. Magnam hic officia ipsa voluptas beatae! 
                Accusamus id dolorem earum. Perspiciatis cumque repudiandae
                 magnam qui corrupti unde deleniti atque, id sequi repellat 
                 eligendi possimus repellendus, laborum suscipit quidem quaerat 
                 alias natus recusandae!";
            $number = random_int(1, $textlenght);
            for($z = 1; $z<$number; $z++) {
                $lorem = "$lorem $lorem";
            };
            print("
            <div id='article$i'>
                <h2>Article</h2>
                <p>$lorem</p>
            </div>
            ");
        }; 
        ?>
    </div>
    <footer>By Marcus Hedquist</footer>
</body>
</html>