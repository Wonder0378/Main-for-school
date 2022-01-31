<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php
        session_start();
        if(isset($_POST["submit"])) {
            $_SESSION["user"] = $_POST["text"];
            setcookie('user', $_POST['text'], time() + (86400*30), '/' );
        }
        else{
            $_SESSION["user"] = "";
            setcookie('user', '', time() + (86400*30), '/' );
        }
    ?>
    <form action="cookiesAndCream.php">
        <input type="text" id="text" name="text" value="Name" require>
        <input type="submit" id='submit' name="submit" value="Save Name">
    </form>
</head>
<body>
    <?php echo("Welcome to the club ".$_COOKIE['user']." or ".$_SESSION['user']); ?>
</body>
</html>