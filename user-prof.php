<?php

    include 'header_nav.php';

    include 'Conn/config.php';

?>

<link rel="stylesheet" type="text/css" href="assets/css/prof_page.css">

<div class="wrapper">
<a href=""></a>
<?php  

    $prim = false;

    if ($_SESSION["uid"] != 1) {
       echo "<span>Basic User</span>";
     }else{
        echo '<span><a href="backend/admin.php">Administrator User</a></span>';
    }
?>

<h3>Welcome to your page <?php echo $_SESSION["username"];?></h3>
<div class="wrap-cont">

        <div class="usr-img">
            <img src="https://i.ibb.co/KGqJHSk/Login-icon.png">
            <h1><?php echo $_SESSION["username"];?></h1>
            <p>User's bio profile info</p>
        </div>

<div class="usr-info">
    <ul>
        


<?php

$uid = $_SESSION['uid'];
    
    $query = "SELECT * FROM users WHERE uid = $uid";

    $result = mysqli_query($link, $query);

        if (mysqli_num_rows($result) > 0) {
           
            while ($row = mysqli_fetch_assoc($result)) {
               
                echo "<li>Status: ".$row['status']."</li>";

                echo "<li>User ID: ".$_SESSION["uid"]."</li>";

                echo "<li>Joined On: ".$row['date']."</li>";

            }
        }


?>


        
    </ul>
</div>


     

    




    </div>

</div>

<?php
    include 'footer.php'
?>

</body>

</html>