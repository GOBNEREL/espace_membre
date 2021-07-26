<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Okay</title>
        <link rel="stylesheet" href="page.css">
    </head>

    <body>
        <div class="full-page">
            <div class="navbar">
                <div>
                    <!--this is for the logo-->
                    <a href="page.html">okay</a>
                </div>
                <!--this is for the navigation bar-->
                <nav>
                    <ul id="MenuItems">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">AboutUs</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Okay</a></li>
                        <li><button class="loginbtn" onclick="document.getElementById('login-form').style.display = 'block'" style="width: auto;">Login</button></li>
                    </ul>
                </nav> 
                <!--end of navigation bar-->
            </div>
            <div id="login-form" class="login-page">
                <div class="form-box">
                    <div class="button-box">
                        <div id="btn"></div>
                        <button type="button" onclick="login()" class="toggle-btn">Log In</button>
                        <button type="button" onclick="register()" class="toggle-btn">Register</button>
                    </div>


                    <!--login form-->
                    <form  action="login.php" method="POST" id="login" class="input-login">

                        <input type="text" class="input-field"  name="user_name" placeholder="User name" >
                        <input type="password" class="input-field" name="pass_1" placeholder="Enter Password" >
                        <input type="checkbox" class="check-box"><span>Remember Password</span>

                        <button type="submit" class="submit-btn" name="submit" >Login</button>
                    </form>


                    <!--register form-->
                    <form action="registration.php" method="POST" id="register" class="input-register">
                    

                        <input type="text" class="input-field" name="user_name" placeholder="User Name" required >
                        <input type="email" class="input-field" name="user_email" placeholder="Email Id" required >
                        <input type="password" class="input-field" name="pass_1" placeholder="Enter Password" required >
                        <input type="password" class="input-field" name="pass_2" placeholder="Confirm Password" required >
                        <input type="checkbox" class="check-box"><span>I agree to the terms and conditions</span>
                        <button type="submit" class="submit-btn" name="submit">Register</button>
                    </form>


                </div>
            </div>
        </div>
        <script>
            var x = document.getElementById('login');
            var y = document.getElementById('register');
            var z = document.getElementById('btn');

            function register(){
                x.style.left = '-400px';
                y.style.left = '50px';
                z.style.left = '110px';
            }

            function login(){
                x.style.left = '50px';
                y.style.left = '450px';
                z.style.left = '0px';
            }

            var cool = document.getElementById('login-form');
            window.onclick = function(event){
                if (event.target == cool){
                    cool.style.display = "none";
                }
            }
        </script>

    </body>
</html>