<?php
    include './core/engine/class.engine.php';
    $engine = new ENGINE;
    $engine->signup();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="stylesheet" href="./UI/css/style.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <title>signup</title>
</head>
<body>
   <header>
      <div class="title">
          <p>Talkit</p>
      </div>
      <nav>
          <ul>
              <li><a href="./login.php" class="btn">Login</a></li>
          </ul>
      </nav>
  </header>

  <p class="feedback"> <br> </p>
  <main>
      <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
          <input type="text" name="unm" id="" placeholder="Username">
          <input type="password" name="pwd" id="" placeholder="password" >
          <input type="submit" value="signup" name="signup">
      </form>
  </main>
</body>
</html>