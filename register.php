<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/register.css">
</head>
<body>
    <section class="banner">
        <img class="logo" src="Imgs/logo.png" alt="">
        <div class="first">
            <div class="parent">
                
                <div class="login">
                    <h1>Register</h1>
                    <form action="registration.php" method="post">
                       
                        <div class="mail">
                            <label>Username</label>
                            <input  name="user"  type="text" >     
                            <span></span>
                        </div>
                        <div class="mail">
                            <label>Password</label>
                            <input  name="password" id="pass" type="password"  required>
                            <span></span>
                        </div>
                        
                        <div class="mail">
                            <label>Phone number</label>
                            <input  name="phone" type="text"  required>
                            <span></span>
                        </div>
                        <div class="mail">
                            <label>Level</label>
                            <input name="level" type="text" required>     
                            <span></span>
                        </div>
                        <input type="submit" value="Register">
                        
                    </form>
                    
                </div>
            </div>
        </div>
       
        
    </section>
</body>
</html>