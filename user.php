<?php
    session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user page</title>
    <link rel="stylesheet" href="CSS/user.css">
</head>
<body >
    <div style = "" class ="welcome">
       <h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
    </div>
    <!-- ------------------------------------------------------ -->
    <div class="sideNav" id="sideNav">
        <nav>
            <ul>
                <li><a href="first.html">Community</a></li>
                <li><a href="newCommers.html">Sessions</a></li>
                <li><a href="main.php">Log out</a></li>

            </ul>
        </nav>
    </div>
    <div class="menuBtn" id="menubtn">
        <img src="Imgs/menu.png" alt="" id="menu"> <!-- -------------- -->
    </div>
    <!-- ------------------------------------------------------ -->
    <script>
        var menuBtn = document.getElementById("menubtn")
        var sideNav = document.getElementById("sideNav")
        var menu = document.getElementById("menu")
        sideNav.style.right = "0";
        menuBtn.onclick = function(){
            if(sideNav.style.right == "-250px"){
                sideNav.style.right = "0";
                menu.src="Imgs/close.png"; //////////////////////
            }
            else{
                sideNav.style.right = "-250px"; 
                menu.src="Imgs/menu.png";  //////////////////////
            }
        }
    </script>
</body>
</html>