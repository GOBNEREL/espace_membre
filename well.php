<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome</title>
        <link rel="stylesheet" href="well.css">
    </head>

    <body>
        <div class="nav-bar">
            <div class="nav-links">
                
            </div>

            <div class="user-icon">
                <button type="button" class="user-icon" onclick="document.getElementById('user-block').style.display = 'block'" ><img src="3.jpg"></button>
            </div>
        </div>

        <div class="side-bar"></div>

        <div class="page">
            <img class="im" src="2.jpg">
        </div>

        <div class="user-cool">
            <form action="logout.php" method="POST" id="user-block" class="user-block">
                <div class="shadow"></div>
                <button type="button" name="submit" class="user-profile"><img src="3.jpg"></button>
                <div class="shadows">
                    <p><?php
                       include "login.php";
                       echo "<h3>Welcome " . $_SESSION['user_name'] . "</h3>"; 
                       //echo "<h3>Welcome " . $_SESSION['user_email'] . "</h3>"; 
                    ?></p>
                </div>
                <div class="log">
                    <button>Logout</button>
                </div>
            </form>
        </div>

        <script>
            var cool = document.getElementById('user-block');
            window.onclick = function(event){
                if (event.target == cool){
                    cool.style.display = "none";
                }
            }
        </script>
    </body>
</html>