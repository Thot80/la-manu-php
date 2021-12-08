<?php
session_start();
if(isset($_POST["login"]) && !empty($_POST["login"]) && isset($_POST["password"]) && !empty($_POST["password"])){
    setcookie("login", $_POST["login"]);
    setcookie("password", $_POST["password"]);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/styles/a11y-dark.min.css" integrity="sha512-Vj6gPCk8EZlqnoveEyuGyYaWZ1+jyjMPg8g4shwyyNlRQl6d3L9At02ZHQr5K6s5duZl/+YKMnM3/8pDhoUphg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Session et cookies</title>
</head>
<body>
 
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Cookies et Sessions</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2>Session</h2>
            <p>Firstname : <?= $_SESSION["firstname"];?> </p>
            <p>Lastname : <?= $_SESSION["lastname"];?> </p>
            <p>Age : <?= $_SESSION["age"];?> </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2>Cookies</h2>
            <?php
            if(isset($_COOKIE["login"]) && !empty($_COOKIE["login"]) && isset($_COOKIE["password"]) && !empty($_COOKIE["password"])){
                echo "<p> Login : ".$_COOKIE["login"]."</p>";
                echo "<p> Password :".$_COOKIE["password"]."</p>";
            }else {
                echo "<p> Login : Inconnu</p>";
                echo "<p> Password : Inconnu</p>";
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <form action="session.php" method="POST">
                    <div class="mb-3">
                        <label for="login" class="form-label">Modifier login</label>
                        <input type="email" class="form-control" id="login" name="login" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Attention aux regards indiscrets !</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label" >Modifier password</label>
                        <input type="password" class="form-control" id="password"name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2>Nouveaux Cookies</h2>
            <?php
            if(isset($_COOKIE["login"]) && !empty($_COOKIE["login"]) && isset($_COOKIE["password"]) && !empty($_COOKIE["password"])){
                echo "<p> Login : ".$_COOKIE["login"]."</p>";
                echo "<p> Password :".$_COOKIE["password"]."</p>";
            }else {
                echo "<p> Login : Inconnu</p>";
                echo "<p> Password : Inconnu</p>";
            }
            ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script> 
<script>hljs.highlightAll();</script>
</body>
</html>