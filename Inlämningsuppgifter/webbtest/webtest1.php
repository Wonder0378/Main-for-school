<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        * {
        margin: 0;
        padding: 0;
        --outline: 1px dotted rgb(255, 251, 251);
        }
        body {
            position: absolute;
            background: rgb(159, 236, 200);
            height: 100vh;
            width: 100%;
            z-index: 1;
        }
        header {
            height: 100px;
            width: 100%;
        }
        #bg {
            position: absolute;
            top: 0;
            width: 100%;
            height: fit-content;
            z-index: -10;
        }
        #Logo {
            position: absolute;
            height: 50px;
            width: 50px;
            top: 10px;
        }
        .titlehead {
            position:absolute;
            height: 70px;
            width: 100%;
            font-size: 180%;
            background: linear-gradient(to right, rgb(5, 83, 9), transparent)
        }
        .titlehead h1 {
            position: absolute;
            top: 0;
            left: 60px;
            width: calc(100%-60px);
            z-index: 10;
            color: white;
        }
        nav {
            position: absolute;
            height: 30px;
            width: 100%;
            top: 70px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            background: green;
            outline: white 2px solid;
        }
        nav a {
            padding: 0 50px;
            font-size: 150%;
            text-decoration: none;
            color: white;
        }
        .bg img {
            z-index: -1;
            position: absolute;
            width: 100%;
            height: fit-content;
        }
        .picturerow {
            height: 250px;
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: center;
            background: rgba(154, 235, 190, 0.425);
            outline: white 2px solid;

        }
        .picturerow img {
            height: 230px;
            padding: 10px;
            width:fit-content;
        }
        .textcolumns {
            margin-top: 10px;
            width: 95%;
            margin-left: 2.5%;
            display: flex;
            flex-direction: row;
            justify-content: center;
            background: rgba(43, 80, 57, 0.308);
            color: white;
            border-radius: 20px;
        }
        .textcolumns div {
            padding: 10px;
            width: 400px;
        }
        .textcolumns img {
            margin: 30px;
            width: 300px;
            height: fit-content;
            border-radius: 30px;
        }
    </style>
</head>
<body>
    <header>
        <img id="bg" src="https://d279m997dpfwgl.cloudfront.net/wp/2016/09/tree.jpg" alt="">
        <div class="titlehead">
            <h1>The Treehouse</h1>
        </div>
        <img id="Logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Team_Trees_circle_logo.svg/1200px-Team_Trees_circle_logo.svg.png" alt="">
        <nav>
            <a href="">Home</a>
            <a href="">About</a>
            <a href="">Contact Us</a>
        </nav>
    </header>
    <div class="bg">
        <img src="https://wogacolorado.org/wp-content/uploads/2021/09/trees-2367356_1920.jpg" alt="">
    </div>
    <div class="picturerow">
        <img src="https://www.gardeningknowhow.com/wp-content/uploads/2020/12/lonely-japanese-cherry.jpg" alt="">
        <img src="https://ychef.files.bbci.co.uk/976x549/p09vcqxp.jpg" alt="">
        <img src="https://www.sciencenewsforstudents.org/wp-content/uploads/2020/04/1030_LL_trees-1028x579.png" alt="">
    </div>
    <div class="textcolumns">
        <div class="left">
            <h2>Lorem</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Facilis expedita est voluptate fugiat illum accusantium 
                unde aliquam provident aut. Vitae tempore perferendis veniam
                 vero? Architecto eligendi quia praesentium voluptatum exercitationem.
                Quam blanditiis sequi enim repudiandae, facere eius. Dolore 
                doloribus, soluta eaque provident aspernatur dolores esse cum quas 
                sed cupiditate vero molestiae qui doloremque, ducimus in quos numquam 
                adipisci inventore tenetur.
                Aliquam consequatur provident aliquid voluptate corporis 
                laudantium vitae unde culpa delectus quibusdam praesentium, 
                quo deleniti quisquam. Facilis, facere repellat nihil aut iusto 
                hic animi, et pariatur autem aliquam dolores veniam..
                <br><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Facilis expedita est voluptate fugiat illum accusantium 
                unde aliquam provident aut. Vitae tempore perferendis veniam
                 vero? Architecto eligendi quia praesentium voluptatum exercitationem.
                Quam blanditiis sequi enim repudiandae, facere eius. Dolore 
                doloribus, soluta eaque provident aspernatur dolores esse cum quas 
                sed cupiditate vero molestiae qui doloremque, ducimus in quos numquam 
                adipisci inventore tenetur.
                Aliquam consequatur provident aliquid voluptate corporis 
                laudantium vitae unde culpa delectus quibusdam praesentium, 
                quo deleniti quisquam. Facilis, facere repellat nihil aut iusto 
                hic animi, et pariatur autem aliquam dolores veniam..     
            </p>
        </div>
        <div class="right">
            <h2>Ipsum</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Facilis expedita est voluptate fugiat illum accusantium 
                unde aliquam provident aut. Vitae tempore perferendis veniam
                 vero? Architecto eligendi quia praesentium voluptatum exercitationem.
                Quam blanditiis sequi enim repudiandae, facere eius. Dolore 
                doloribus, soluta eaque provident aspernatur dolores esse cum quas 
                sed cupiditate vero molestiae qui doloremque, ducimus in quos numquam 
                adipisci inventore tenetur.
                Aliquam consequatur provident aliquid voluptate corporis 
                laudantium vitae unde culpa delectus quibusdam praesentium, 
                quo deleniti quisquam. Facilis, facere repellat nihil aut iusto 
                hic animi, et pariatur autem aliquam dolores veniam..Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Voluptates quisquam, laborum voluptatem nulla quos officia 
                amet velit incidunt dolorum ipsum. Nobis ad vero exercitationem 
                a optio aut molestiae eum numquam.
                <br><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Facilis expedita est voluptate fugiat illum accusantium 
                unde aliquam provident aut. Vitae tempore perferendis veniam
                 vero? Architecto eligendi quia praesentium voluptatum exercitationem.
                Quam blanditiis sequi enim repudiandae, facere eius. Dolore 
                doloribus, soluta eaque provident aspernatur dolores esse cum quas 
                sed cupiditate vero molestiae qui doloremque, ducimus in quos numquam 
                adipisci inventore tenetur.
            </p>
        </div>
        <img src="https://i2.wp.com/kulturportallund.se/wp-content/uploads/2015/11/Linn%C3%A9_Carl_von.jpg?fit=668%2C1000&ssl=1" alt="">
    </div>
</body>
</html>