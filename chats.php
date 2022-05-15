<!DOCTYPE html>
<html lang="en">
    <head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./UI/css/chats.css">
    <title>Start chat</title>
   
</head>
<body>
    <header>
        <div class="title">
            <p> Talk it </p>
        </div>
        <nav>
            <ul>
                <li><a href="" class="btn">Profile</a></li>
                <li><a href="" class="btn">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="form-container">
            
             <form action="">
                 <input type="text" onkeyup="search_users(this.value)" name="" id="" placeholder="Search users">
          
             </form>   
        </div>

        <div class="users-container">
            <!-- <div class="bar">
                <p>Available users : </p>
            </div> -->
                            
            <!-- <div class="card">
                <p>Jessica carter</p>
                                <a href="">start chat</a>

            </div>                         -->
        </div>

    </main>



 <script>
        function search_users(str){
            if(str==""){
                document.querySelector(".users-container").innerHTML =  "";

            }else{
                // Create xhr object
                let xml = new XMLHttpRequest();
                xml.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status ==200){
                        console.log(this.responseText);
                        document.querySelector(".users-container").innerHTML = this.responseText;

                    }
                };
                xml.open("GET","./core/API/request_obj.php?search="+str,true);
                xml.send();
            }
        }
    </script>
</body>
</html>
