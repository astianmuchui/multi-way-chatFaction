<?php
    require_once "./core/engine/class.engine.php";
    // Initialize object
    $obj = new user;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./ui/css/portal.css">
    <title>Seb Astian</title>
</head>
<body>
    <header>
        <div class="title">
            <p> Talk it </p>
        </div>
        <nav>
            <ul>
                <li><a href="./chats.php" class="btn">New group</a></li>
                
                <li><a href="./logout.php?action=logout" class="btn">Logout</a></li>
                
            </ul>
        </nav>
    </header>
    <main>
        <div class="sidebar">
            <img src="./UI/img/images-removebg-preview.png" alt="" width="150" height="150">
            <h2><?php $obj->show_profile(); ?></h2>
            
        </div>
        <h2 class="h-title">My Chats</h2>

        <div class="leftbar">
           <div class="chat">
                        <a href="./action/create_room.php?id=3">Robin sparkles</a>
                        <small>Lets hang out sometime, </small>
                        <small>11:03</small>
                         </div> 
        </div>
    </main> 

</body>
</html>