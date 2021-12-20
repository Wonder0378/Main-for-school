<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        * {
        padding: 0;
        margin: 0;
        --outline: red dotted 1px;
        }
        body {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: row;
            overflow: hidden;
        }
        .leftbar {
            background: rgba(28, 87, 31, 0.679);
            width: 20%;
            height: 100%;
            color: white;
            border-right: 5px white solid;
        }
        #bg {
            z-index: -5;
            height: 100%;
            position: absolute;
        }
        #lefttitle {
            height: 10%;
            width: 100%;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            font-size: 200%;
        }
        .articles {
            width: 100%;
            height: 90%;
            display: flex;
            flex-direction: column;
            text-align: center;
            gap: 2%;
        }
        .articles div {
            border-radius: 20px;
            transition: ease-in-out 0.1s;
        }
        .articles div img {
            width: 90%;
            height: fit-content;
            padding-left: 5%;
            padding-right: 5%;
            padding-bottom: 2.5%;
            border-radius: 50px;
        }
        .articles div:hover {
            background: rgba(0, 0, 0, 0.315);
        }
        .rightbar {
            background: linear-gradient(to right, rgb(0, 0, 0) 0%, rgba(0, 0, 0, 0.973) 30%, transparent 100%);
            width: 80%;
            height: 100%;
            color: white;
        }
        #changingbg {
            position: absolute;
            height: 100%;
            width: 80%;
            z-index: -5;
        }
        #logotext {
            width: 100%;
            margin-top: 10%;
            text-align: center;
            font-size: 300%;
        }
        .article {
            height: 40%;
            width: 60%;
            margin-left: 20%;
            margin-top: 5%;
            background: rgba(177, 174, 174, 0.637);
            border-radius: 20px;
            outline: 1px solid white;
            transition: ease-in-out 0.2s;
        }
        .article:hover {
            height: 50%;
            width: 70%;
            margin-left: 15%;
            margin-top: 2.5%;
        }
        .article h2 {
            height: 10%;
            padding-top: 30px;
            width: 100%;
            text-align: center;
            font-size: 150%;
        }
        .article p {
            width: 100%;
            height: calc(90% - 30px);
            text-align: center;
            font-size: 100%;
        }
        nav {
            position: absolute;
            width: 20%;
            height: 4%;
            background: white;
            font-size: 100%;
            right: 0;
            display: flex;
            flex-direction: row;
            justify-content: center;
            gap: 5%;
            border-bottom-left-radius: 20px;
        }
        nav * {
            margin-top: 1%;
            text-decoration: none;
            color: black;
        }
        nav *:hover {
            color: green;
        }
    </style>
</head>
<body>
    <div class="leftbar">
        <img id="bg" src="http://antisel.gr/wp-content/uploads/2015/06/Sky-Blue-Sky.jpg" alt="">
        <div id="lefttitle">
            <h1>Articles</h1>
        </div>
        <div class="articles">

            <div id="flower" onclick="showarticle('1')">
                <h2>Flowers</h2>
                <img src="https://news.cgtn.com/news/2020-09-20/Spider-flower-The-flower-with-a-distinctive-display-TVYLozFKg0/img/9c42156e261a4d2282370c03fce43a0a/9c42156e261a4d2282370c03fce43a0a.jpeg" alt="">
            </div>

            <div id="tree" onclick="showarticle('2')">
                <h2>Trees</h2>
                <img src="https://waste4change.com/blog/wp-content/uploads/niko-photos-tGTVxeOr_Rs-unsplash-1024x683.jpg" alt="">
            </div>

            <div id="mushroom" onclick="showarticle('3')">
                <h2>Mushrooms</h2>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Amanita_muscaria_3_vliegenzwammen_op_rij.jpg/1200px-Amanita_muscaria_3_vliegenzwammen_op_rij.jpg" alt="">
            </div>

        </div>
    </div>
    <div class="rightbar">
        <img id="changingbg" src="https://www.greendeals.nl/themes/custom/dictu_greendeals/img/backgrounds/background-1.jpg" alt="">
        
        <nav>
            <a href="">Home</a>
            <a href="">Explore</a>
            <a href="">About</a>
            <a href="">Contact</a>
        </nav>

        <div id="logotext">
            <h1>Nature</h1>
        </div>

        <div class="article">
            <h2 id="article_title">This Is An Article</h2>
            <p id="article_text">Check out some of the articles to the left. <br> You may
                find som interesting! </p>
        </div>
    </div>
</body>
<script>

    var article_title = document.getElementById("article_title");
    var article_text = document.getElementById("article_text");
    var chaning_bg = document.getElementById("changingbg");

    function showarticle(number) {
        switch(number) {
            case '1':
                article_title.innerHTML = "Flowers";
                article_text.innerHTML = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum beatae repellat omnis, molestiae quaerat deserunt nobis ad optio quam debitis animi saepe facere, aperiam laborum praesentium nihil. Reiciendis debitis sequi, consectetur eaque nam, praesentium sint perspiciatis rem libero, ipsum illum repellendus. Omnis perspiciatis, dolores dignissimos animi libero in! Perferendis, quas.";
                chaning_bg.src = "https://assets.eflorist.com/site/EF-20975/Tile/m6960156-flowers-background-butterflies-beautiful-87452.jpeg";
                break;

            case '2':
                article_title.innerHTML = "Trees";
                article_text.innerHTML = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius fugiat, maxime nam aperiam ipsum, nesciunt in voluptates harum laboriosam dolorum illo corporis quisquam! Dolore distinctio ea vitae ut quaerat hic sit officiis nesciunt nisi aliquam praesentium, laboriosam laudantium nemo similique at voluptas? Explicabo nesciunt itaque et culpa dignissimos esse ullam perspiciatis temporibus dolorem voluptas asperiores quod quidem molestias commodi debitis eos corrupti quasi, illo dolore eius eligendi. Natus ab assumenda inventore amet, sunt culpa quos laborum aperiam cum itaque quo.";
                chaning_bg.src = "https://www.3blmedia.com/sites/www.3blmedia.com/files/images/japanese_maple_shade_tree_iStock-180454493.jpg";
                break;
                
            case '3':
                article_title.innerHTML = "Mushrooms";
                article_text.innerHTML = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti explicabo debitis officiis tempore quaerat fuga dolorum, fugit dolores. Dignissimos necessitatibus cum odit nesciunt ratione laboriosam accusantium nihil asperiores mollitia quaerat possimus nam alias, tempore dolores at magnam expedita nulla placeat deserunt ullam amet est? Dolores atque dolorem incidunt ratione, iure quisquam quasi voluptatum. Officiis libero, quis fugit doloremque laboriosam suscipit, aspernatur quisquam laborum, mollitia voluptatum labore blanditiis repudiandae quasi dolor.";
                chaning_bg.src = "https://cdn.hswstatic.com/gif/mushrooms-save-earth.jpg";
                break;
        };
    };
</script>
</html>

