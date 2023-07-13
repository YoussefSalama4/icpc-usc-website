<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="ForgetPassword" content="width=device-width, initial-scale=1.0">
    <title>ForgetPassword</title>
    <link rel="stylesheet" href="CSS/register.css">
</head>
<body>
    <section class = "banner">
    <div class="first">
            <div class="parent">
                
                <div class="login">
                    <h1>Manage Account</h1>
                    <form action="reset.php" method="post">
                       
                        <div class="mail">
                            <label>Username</label>
                            <input  name="user"  type="text" >     
                            <span></span>
                        </div>
                        <div class="mail">
                            <label>Phone number</label>
                            <input  name="phone" type="text"  required>
                            <span></span>
                        </div>
                        <div class="mail">
                            <label>Password</label>
                            <input  name="password" id="pass" type="password"  required>
                            <span></span>
                        </div>
                        <input type="submit" value="Reset password">
                        <input type="submit" value="Delete Account" name = "del" >

                    </form>
                    
                </div>
            </div>
        </div>
    </section>

</body>
</html>