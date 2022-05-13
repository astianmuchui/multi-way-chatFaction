<?php
$feedback = "";
include './core/engine/class.engine.php';
$engine = new ENGINE;
$engine->login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./ui/css/style.css">
    <title>Login</title>
</head>
<body>
    <header>
        <div class="title">
            <p>Talkit</p>
        </div>
        <nav>
            <ul>
                <li><a href="./index.php" class="btn">Signup</a></li>
            </ul>
        </nav>
    </header>

    <p class="feedback"> <?php echo $feedback."<br>"; ?> </p>
    <main>
        <form action="/projects/faction/login.php" method="post">
            <input type="text" name="unm" id="" placeholder="Username" required>
            <input type="password" name="pwd" id="" placeholder="password" required>
            <input type="submit" value="login" name="login">
        </form>
    </main>
</body>
</html>