


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./ui/css/chat.css">
    <title>Chat</title>
</head>
<body>
    <header>
        <div class="title">
            <p> Talk it </p>
        </div>
        <nav>
            <ul>
                <li><a href="./profile.php?id=4" class="btn">Profile</a></li>
                <li><a href="./logout.php?action=logout" class="btn">Logout</a></li>
            </ul>
        </nav>
    </header>
    <center><small class "feedback"></small></center>
    <main>
        <div class="sidebar">
            <img src="./ui/img/images-removebg-preview.png" alt="" width="150" height="150">
            <h2>Seb Astian</h2>
            
        </div>
        <div class="leftbar">
            <main class="space">
                <div class="bar">
                    <h3>Robin sparkles</h3>
                </div>
                <div class="chat-space">
                    
                    <div class="message-container">
                    <div class="right-text">
                        <p>Hi</p>
                        <small>11:00</small>
                    </div> 
                    <div class="message-container">
                    <div class="left-text">
                        <p>Hi too wassup</p>
                        <small>11:01</small>
                    </div> 
                    <div class="message-container">
                    <div class="right-text">
                        <p>Everything alright?</p>
                        <small>11:01</small>
                    </div> 
                    <div class="message-container">
                    <div class="left-text">
                        <p>Yeah. Its all cool how about you?</p>
                        <small>11:02</small>
                    </div> 
                    <div class="message-container">
                    <div class="right-text">
                        <p>Yeah. Holding up pretty well</p>
                        <small>11:03</small>
                    </div> 
                    <div class="message-container">
                    <div class="left-text">
                        <p>Lets hang out sometime, </p>
                        <small>11:03</small>
                    </div>             </div>
            <div class="form-container">
                <form action="/projects/chat-sys/chat.php" method="post">
                    <textarea name="message" id="" cols="30" rows="10"></textarea>
                    <button type="submit" name="send"><i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </div>

    </main>
        <script src="./ui/js/font_awesome_main.js"></script>
</body>
</html>