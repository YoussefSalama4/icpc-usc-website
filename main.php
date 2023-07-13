<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICPC USC website</title>
    <link rel="stylesheet" href="CSS/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@500&family=Kaushan+Script&family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <section class="banner">
        <img class="logo" src="Imgs/logo.png" alt="">
        <div class="first">
            <div class="parent">
                <div class="banner-text">
                    <h1>
                        About us
                    </h1>
                    <p>
                        ICPC USC community is a community for students of <br>
                        university of sadat city to improve their problem
                        solving skills
                    </p>
                    <div class="banner-btn">
                        <a href="#sup"><span></span>Supervisor</a>
                        <a href="#tem"><span></span>Our Team</a>
                        <a href="#foot"><span></span>More info</a>
                    </div>
                </div>
                <div class="login">
                    <h1>Login</h1>
                    <form action="validation.php" method ="post">
                       
                       <div class="mail">
                            <label>Username</label>
                            <input  name="user"  type="text" >     
                            <span></span>
                        </div>
                        <div class="mail">
                            <label >Password</label>
                            <input name = "password" type="password"  required>
                            <span></span>
                        </div>
                        <div class="forgot-password"><a href="forgetPassword.php">Manage account ?</a> </div>
                        <input type="submit" value="login">
                        <div class="sign-up">
                            not a member ? <a href="register.php">Sign up</a>
                        </div>
                    </form>
                    
    
                </div>
            </div>
        </div>  
    </section>
   
    <!-- ----------------------------------------------------------------- -->
    <section class="supervisors" id="sup">
       <div class="title-text">
            <p>Supervisor</p>
       </div>
       <div class="supervisor-box">
           <div class="dr">
               <img src="Imgs/img3.jpg" alt="">
               <div class="overlay"></div>
               <div class="member-desc"><h3>Dr. Sara Shehab</h3></div>
           </div>
       </div>
       
    </section>
    <!-- --------------------------------------------------------- -->
    <section class="team-members" id="tem">
        <div class="title-text">
            <p>Team members</p>
       </div>
       <div class="members-box">
           <div class="single-member">
               <div class="img">
                     <img src="Imgs/Abdullah.jpeg" alt="">
               </div>
               
               <div class="overlay"></div>
               <div class="member-desc"><h3>Abdullah Ali</h3></div>
           </div>
           <div class="single-member">
               <div class="img2">
                 <img src="Imgs/Osa.jpg" alt="">
               </div>
           
            <div class="overlay"></div>
            <div class="member-desc"><h3>Youssef Ahmed</h3></div>
        </div>
           <div class="single-member">
               <div class="img3">
                <img src="Imgs/esraa.jpg" alt="">
               </div>
               
               <div class="overlay"></div>
               <div class="member-desc"><h3>Esraa Maged</h3></div>
           </div>
           <div class="single-member">
               <div class="img4">
                <img src="Imgs/Sara.jpeg" alt="">
               </div>
               
               <div class="overlay"></div>
               <div class="member-desc"><h3>Sara Samir</h3></div>
           </div>
           <div class="single-member">
               <div class="img5">
                <img  src="Imgs/Mohamed.jpg" alt="">
               </div>
            
            <div class="overlay"></div>
            <div class="member-desc"><h3>Mohamed Ashraf</h3></div>
        </div>
           
           <div class="single-member">
               <div class="img6">
                <img src="Imgs/gewaly.jpg" alt="">
               </div>
               
               <div class="overlay"></div>
               <div class="member-desc"><h3>Mohamed Atef</h3></div>
           </div>

       </div>
    </section>

    <!-- ------------------------------------------------------ -->
    <footer class="footer" id="foot">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Contact us</h4>
                    <ul>
                        <li> 07775000 </li>
                        <li> 010995401240125 </li>
                        <li> 0453512351</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow us</h4>
                    <div class="social-links">
                    
                        <a href=""><i class="fab fa-facebook-f"></i></a>  
                        <a href=""><i class="fab fa-twitter"></i></a> 
                        <a href=""><i class="fab fa-instagram"></i></a> 
                        <a href=""><i class="fab fa-linkedin-in"></i></a> 
                    </div>
                </div>
                
            </div>
        </div>
    </footer>







    <!-- ------------------------------------------------------ -->
    
</body>
</html>