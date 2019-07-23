<link rel="stylesheet" type="text/css" href="../../assets/css/side_nav.css">

<!-- ................................................ -->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <br>

  <div class="user_prof">

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

      <img src="https://i.ibb.co/KGqJHSk/Login-icon.png">
      <a href="user-prof.php">
        <h3><?php echo htmlspecialchars($_SESSION["username"]); ?></h3>
      </a> 
  </div>
  <hr>


<p>Information of your fav anime / watch times /etc</p>



</div>

<div id="main">
  <span style="font-size:24px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
    document.getElementById("main").style.marginLeft = "200px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>
     
</body>

