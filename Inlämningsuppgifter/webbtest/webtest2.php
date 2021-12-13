<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            --outline: red dotted 2px;
        }
        body {
            position: absolute;
            width: 100%;
        }
        header {
            height: 100px;
            width: 100%;
            text-align: center;
            font-size: 170%;
            font-family: arial;
            background: linear-gradient(to right, darkred, red);
            outline: black 2px solid;
        }
        header p {
            text-decoration: underline overline;
        }
        body #img {
            position: absolute;
            width: 100%;
            height: fit-content;
            z-index: -10;
        }
        .body {
            border-radius: 40px;
            width: 60%;
            margin-left: 20%;
            background: rgba(255, 255, 255, 0.438);
            padding: 10px;
            margin-top: 10px;
        }
        .top {
            margin-left: 30%;
            margin-top: 40px;
            width: 40%;
            text-align: center;
            display: flex;
            flex-direction: row;
        }
        .pic {
            width: 400px;
            height: fit-content;
            left: 0;
        }
        img {
            height: 300px;
            width: fit-content;
        }
        #ingress {
            padding: 50px;
        }
        .maintext {
            width: 60%;
            margin-left: 20%;
            margin-top: 15px;
            font-size: 130%;
        }
        #brodtext {
            margin-top: 10px;
        }
        footer {
            bottom: 0;
            margin-top: 20px;
            font-family: cursive;
            background: linear-gradient(to right, darkred, red);            
            text-align: center;
            height: 450px;
            outline: black 2px solid;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Filmrecension Rubrik</h1>
        <p>   Av Marcus Hedquist   </p>
    </header>
    <img id="img" src="https://cdn.onebauer.media/one/media/5ef0/99b0/f4ad/c9cb/7c33/51a8/cinema-screening.jpg?format=jpg&quality=80&width=960&height=540&ratio=16-9&resize=aspectfill" alt="">
    <div class="body">
    <div class="top">
        <div class="pic">
        <img src="https://s.studiobinder.com/wp-content/uploads/2019/06/Movie-Poster-Template-Movie-Credits-StudioBinder.jpg.webp" alt="">
        <p>Bildtext</p>
        </div>
        <div id="ingress"><strong>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Enim magnam architecto sit suscipit. Dolore eos, sapiente vel perspiciatis 
            suscipit itaque delectus autem qui, eius quae, quis mollitia quam assumenda? Illo.</strong></div>
    </div>
    <div class="maintext">
        <p id="brodtext">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Deleniti ipsum laborum, placeat qui quidem beatae porro iusto quaerat 
            maxime a! Saepe temporibus recusandae impedit animi quam, iste alias expedita 
            provident.At quaerat vel earum harum enim asperiores nulla quibusdam excepturi esse doloribus. 
            Assumenda totam error quia iure esse corrupti maiores aut cumque laboriosam, impedit 
            tempore voluptas perspiciatis officia voluptatibus explicabo Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Deleniti ipsum laborum, placeat qui quidem beatae porro iusto quaerat 
            maxime a! Saepe temporibus recusandae impedit animi quam, iste alias expedita 
            provident.At quaerat vel earum harum enim asperiores nulla quibusdam excepturi esse doloribus. 
            Assumenda totam error quia iure esse corrupti maiores aut cumque laboriosam, impedit 
            tempore voluptas perspiciatis officia voluptatibus explicabo
            <br> <br>
            recusandae impedit animi quam, iste alias expedita 
            provident.At quaerat vel earum harum enim asperiores nulla quibusdam excepturi esse doloribus. 
            Assumenda totam error quia iure esse corrupti maiores aut cumque laboriosam, impedit 
            tempore voluptas perspiciatis officia voluptatibus explicabo Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Deleniti ipsum laborum, placeat qui quidem beatae porro iusto quaerat 
            maxime a! Saepe temporibus recusandae impedit animi quam, iste alias expedita 
            provident.At quaerat vel earum harum enim asperiores nulla quibusdam excepturi esse doloribus. 
            Assumenda totam error quia iure esse corrupti maiores aut cumque laboriosam, impedit 
            tempore voluptas perspiciatis officia voluptatibus explicabo
            <br> <br>
            recusandae impedit animi quam, iste alias expedita 
            provident.At quaerat vel earum harum enim asperiores nulla quibusdam excepturi esse doloribus. 
            Assumenda totam error quia iure esse corrupti maiores aut cumque laboriosam, impedit 
            tempore voluptas perspiciatis officia voluptatibus explicabo Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Deleniti ipsum laborum, placeat qui quidem beatae porro iusto quaerat 
            maxime a! Saepe temporibus recusandae impedit animi quam, iste alias expedita 
            provident.At quaerat vel earum harum enim asperiores nulla quibusdam excepturi esse doloribus. 
            Assumenda totam error quia iure esse corrupti maiores aut cumque laboriosam, impedit 
            tempore voluptas perspiciatis officia voluptatibus explicabo placeat qui quidem beatae porro iusto quaerat 
            maxime a! Saepe temporibus recusandae impedit animi quam, iste alias expedita 
            provident.At quaerat vel earum harum enim asperiores nulla quibusdam excepturi esse doloribus. 
            Assumenda totam error quia iure esse corrupti maiores aut cumque laboriosam, impedit 
            tempore voluptas perspiciatis officia voluptatibus explicabo

        
        </p>
    </div>
    </div>
    <footer>
        <p>Eftermiddagsbladet</p>
    </footer>
</body>
</html>