<?php

    include 'header_nav.php';

?>

<link rel="stylesheet" type="text/css" href="assets/css/prof_page.css">

<div class="wrapper">

<?php  

    $prim = false;

    if ($_SESSION["username"] == 'admin') {
       echo '<span>Administrator User</span>';
    }

    elseif($prim == true){
        echo '<span>Primium User</span>';
    }else{
        echo "<span>Basic User</span>";
    }
?>

        <h3>Welcome to you page <?php echo $_SESSION["username"];?></h3>
    <div class="wrap-cont">
        <div class="usr-img">
            <img src="https://i.ibb.co/KGqJHSk/Login-icon.png">
            <h1><?php echo $_SESSION["username"];?></h1>
            <p>User's bio profile info</p>
        </div>
        <div class="usr-info">
            <ul>
                <li>User ID: <?php echo $_SESSION["id"];?></li>
                <li>Joined On: <?php echo "date_create"?></li>
            </ul>
        </div>




    </div>

</div>

<?php
    include 'footer.php'
?>

</body>

</html>