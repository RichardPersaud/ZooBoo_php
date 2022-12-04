<?php
session_start();
   include '../Conn/config.php';
// Check if the user is already logged in, if yes then redirect him to welcome page
if($_SESSION["username"] != 'admin'){
    header("location: ../main_lib.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZooBoo.com</title>

    <!--navigation links-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--navigation links-->

    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../assets/css/user.css">
    <!--tab icon-->
    <link rel="shortcut icon" href="https://i.ibb.co/7N9MpRW/logo-design.png">
    <!--tab icon-->
</head>

<body>

     
      <nav class="navbar navbar-inverse">

  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../index.php"> 
        <img src="https://i.ibb.co/7N9MpRW/logo-design.png" href="index.php" width="60" height="60" >
      </a>
    </div>


    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../index.php">Home</a></li>
      </ul>


<style type="text/css">
.page-header {
margin: 0;
padding: 0;
border-style: none;
}

.btn{
margin-top: 30px;
}

.btn:hover{
margin: 0;
vertical-align: bottom;

}
</style>
            <div class="page-header">
            <p>
                <a href="../logout.php" class="btn btn-danger">Sign Out</a>
                <a href="../reset-password.php" class="btn btn-warning">Reset Your Password</a>
            </p>
            </div>
    </div>
  </div>

</nav>

<!-- ============================================================= -->











<div class="wrapper">
    <div class="wrap-cont">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="../assets/css/admin.css">

<link rel="stylesheet" type="text/css" href="../assets/css/pop_window.css">


<?php
// =======================================================
 $query = "SELECT * FROM users";
        $result = mysqli_query($link, $query);
      
    $i = 0;      
    while ($row = mysqli_fetch_assoc($result))
    {  
        $i++;
    }    
     echo "<a href='#users'>"."Registed Users: "."$i"."</a><br>";

// opens an overlay of all users registerd
// modify and remove users

// =======================================================
?>

<div id='users' class='overlay'>
    <div class='popup'>
        <h2><i class="fa fa-users"></i> Users</h2>
            <a class='close' href='' target='_self'>&times;</a>
            
<?php
// =======================================================
$query = "SELECT * FROM users";
$result = mysqli_query($link, $query);

$i = 0;      
while ($row = mysqli_fetch_assoc($result))
{  
$i++;
}    
echo "Registed Users: "."$i"."<br>";

// opens an overlay of all users registerd
// modify and remove users
// =======================================================
?>

<div class="usr_data">
    <table>
        <tr>
            <th>| Names |</th>
            <th>| Status |</th>
            <th>| ID |</th>
            <th>| Date Registed |</th>
        </tr>
<?php
    $query = "SELECT * from users";
        // execute the query
        $result = mysqli_query($link, $query);
        // check if some rows were fetched
if (mysqli_num_rows($result) > 0) 
{                  
// loop through all the rows of the fetched data
    while ($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>";
        echo $row['username']."<br>";
        echo "</td>";
        echo "<td>";
        echo $row['status']."<br>";
        echo "</td>";
        echo "<td>";
        echo $row['uid']."<br>";
        echo "</td>";
        echo "<td>";
        echo $row['date']."<br>";
        echo "</td>";
        echo "</tr>";
    }
}
?>
    </table>

</div>


<form action="del_usr.php" method="post">

    <label style="
    color: red;
    margin-top: 20px;
    ">Delete User from ID:</label>
    
<div class="intext">   
    <input s type="number" name="UID" placeholder="Enter ID of User to delete" min="0" autofocus style="
    width: 70%;
    ">
   
</div> 
    <input type="submit" value="Delete" style="
    background-color: red;
    color: #fff;
    padding:10px;
    margin-top: 10px;
    border-radius: 5px;
    border-style: none;
    cursor: pointer;
    ">
 
</form>





<?php 
 // to print the message if insertion was successful or not
            // check if the 'result' variable exists in the URL
    if (isset($_REQUEST['result']))
    {
        if ($_REQUEST['result'] == "deleted")
        {

echo "<div class='alert'>";
?>
<span class='closebtn' onclick="this.parentElement.style.display='none'";>&times;

<?php  echo "</span><strong>Deleted User</strong></div>";

        }
    }
?>



        
    </div>
</div>




































<?php     
// =======================================================
 $query = "SELECT * FROM anime";
        $result = mysqli_query($link, $query);
      
    $i = 0;      
    while ($row = mysqli_fetch_assoc($result))
    {  
        $i++;
    }    
     echo "<a href='#anime'>"."Number of Anime: "."$i"."</a><br>";

// =======================================================
?>


<div id='anime' class='overlay'>
    <div class='popup'>
        <h2><i class="fa fa-tv"></i> Anime</h2>
            <a class='close' href='' target='_self'>&times;</a>



<div class="usr_data">
<table>
    <tr>
        <th>| Anime |</th>
        <th>| rating |</th>
        <th>| AID |</th>
        <th>| Date |</th>
        <th>| IMG Path |</th>
    </tr>

<?php
$query = "SELECT * from anime";
        // execute the query
        $result = mysqli_query($link, $query);
        // check if some rows were fetched
if (mysqli_num_rows($result) > 0) 
{                  
// loop through all the rows of the fetched data
    while ($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>";
        echo $row['name']."<br>";
        echo "</td>";
        echo "<td>";
        echo $row['rating']."<br>";
        echo "</td>";   
        echo "<td>";
        echo $row['aid']."<br>";
        echo "</td>";
        echo "<td>";
        echo $row['date']."<br>";
        echo "</td>";
        echo "<td>";
        echo $row['image']."<br>";
        echo "</td>";

        echo "</tr>";

    }
}
?>

</table>


    </div> 

<table>
<form action="../php/add_anime.php" method="POST">
    <tr>
        <th>| Add Anime |</th>
        <th>| Add Image |</th>
        <th>| Add Synopsis |</th>
        <th></th>
    </tr>
<tr>
    
<td>    
<div class="intext">   
    <input type="text" name="Aname" placeholder="Enter Name of Anime" autofocus style="
    width: 100%;
    "><br>
</td>

<td>  
    <input type="text" name="img">
</td>
<td>
    <textarea name="synopsis" placeholder="Synopsis of Anime" style="
    width: 100%; height: 50px;
    "></textarea>
</td>
<td>
     <input type="submit"style="
        background-color: green;
        color: #fff;
        padding:10px 25px 10px 25px;

        border-radius: 5px;
        border-style: none;
        cursor: pointer;
        width: 100%;
        ">
</td>
</tr>

  </form>
 </table>       

        
    </div>
</div>


<!-- <script type='text/javascript'>
    function preview_image(event){

     var reader = new FileReader();

     reader.onload = function(){

      var output = document.getElementById('output_image');
      output.src = reader.result;
     }

     reader.readAsDataURL(event.target.files[0]);
    }
</script>   
 -->



















<?php     
// =======================================================
 $query = "SELECT * FROM episodes";
        $result = mysqli_query($link, $query);
      
    $i = 0;      
    while ($row = mysqli_fetch_assoc($result))
    {  
        $i++;
    }    
     echo "<a href='#epi'>"."Number of Episodes: "."$i"."</a><br>";


// =======================================================
?>

<div id='epi' class='overlay'>
    <div class='popup'>
        <h2><i class="fa fa-film"></i> Episodes</h2>
            <a class='close' href='' target='_self'>&times;</a>

<div class="usr_data">
<table>
    <tr>
        <th>| Names |</th>
        <th>| Likes |</th>
        <th>| EID |</th>
    </tr>

<?php
    $query = "SELECT * from episodes";
        // execute the query
        $result = mysqli_query($link, $query);
        // check if some rows were fetched
if (mysqli_num_rows($result) > 0) 
{                  
// loop through all the rows of the fetched data
    while ($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>";
        echo $row['name']."<br>";
        echo "</td>";
        echo "<td>";
        echo $row['likes']."<br>";
        echo "</td>";   
        echo "<td>";
        echo $row['eid']."<br>";
        echo "</td>";

        echo "</tr>";

    }
}
?>   

</table>
    
    </div>




<table>
<form action="../php/add_episode.php" method="POST">
    <tr>
        <th>| Title |</th>
        <th>| Ep-Link |</th>
        <th>| Anime Name |</th>
    </tr>
<tr>
    
    <td>
        
    <div class="intext">   
        <label>Name: </label>
        <input type="text" name="name" placeholder="Enter Name of Anime" autofocus style="
        width: 100%;
        "><br>
    </td>

    <td>
     <div class="intext">   
        <label>Title: </label>
        <input type="text" name="Tit" placeholder="Enter Title of Episode" style="
        width: 100%;
        "><br>
    </td>

    <td>
        <h5>Ep-Link: </h5>
        <input type="text" name="link" placeholder="Link to Video source">    <input type="submit"style="
        background-color: green;
        color: #fff;
        padding:10px 25px 10px 25px;
        margin-top: 10px;
        border-radius: 5px;
        border-style: none;
        cursor: pointer;
        width: 100%;
        "> 
    </td>
</tr>

  </form>
 </table>       




    </div>
</div>



























<?php     
// =======================================================
 $query = "SELECT * FROM comments";
        $result = mysqli_query($link, $query);
      
    $i = 0;      
    while ($row = mysqli_fetch_assoc($result))
    {  
        $i++;
    }    
     echo "<a href='#com'>"."Comments: "."$i"."</a><br>";

// =======================================================
?>


<div id='com' class='overlay'>
    <div class='popup'>
        <h2><i class="fa fa-comments"></i> Comments</h2>
            <a class='close' href='' target='_self'>&times;</a>

<div class="usr_data">
<table>
    <tr>
        <th>| User |</th>
        <th>| Amount |</th>
    </tr>
    <tr>
    
<td>
<?php
$query = "SELECT * from comments";
        // execute the query
        $result = mysqli_query($link, $query);
        // check if some rows were fetched
if (mysqli_num_rows($result) > 0) 
{                  
// loop through all the rows of the fetched data
    while ($row = mysqli_fetch_assoc($result)){
        echo $row['user']."<br>";

$usr = $row['user'];


$que = "SELECT * FROM comments where username like $usr";
        $res = mysqli_query($link, $que);
      
    $i = 0;      
    while ($rw = mysqli_fetch_assoc($res))
    {  
        $i++;
    }    
     echo $i;

    }
}
?>
</td>



<td>
<?php     
 
?>
</td>


</tr>
</table>

</div>

    </div>
</div>


























<?php
// =======================================================
 $query = "SELECT * FROM users WHERE online != 0";
        $result = mysqli_query($link, $query);
      
    $i = 0;      
    while ($row = mysqli_fetch_assoc($result))
    {  
        $i++;
    }    
     echo "<a href='#online'>"."Online: "."$i"."</a><br>";

// =======================================================

?>


<div id='online' class='overlay'>
    <div class='popup'>
        <h2><i class="fa fa-dot-circle-o"></i> ONLINE</h2>
            <a class='close' href='' target='_self'>&times;</a>

            <?php
// =======================================================
$query = "SELECT * FROM users WHERE online != 0";
$result = mysqli_query($link, $query);

$i = 0;      
while ($row = mysqli_fetch_assoc($result))
{  
$i++;
}    
echo "Current Online Users: "."$i"."<br>";

// opens an overlay of all users registerd
// modify and remove users
// =======================================================
?>

<div class="usr_data">
<table>
    <tr>
        <th>| Names |</th>
        <th>| Status |</th>
        <th>| ID |</th>
    </tr>
    <tr>
    
<td>
<?php
$query = "SELECT * from users WHERE online != 0";
        // execute the query
        $result = mysqli_query($link, $query);
        // check if some rows were fetched
if (mysqli_num_rows($result) > 0) 
{                  
// loop through all the rows of the fetched data
    while ($row = mysqli_fetch_assoc($result)){
        echo $row['username']."<br>";
    }
}
?>
</td>



<td>
<?php
$query = "SELECT * from users WHERE online != 0";
        // execute the query
        $result = mysqli_query($link, $query);
        // check if some rows were fetched
if (mysqli_num_rows($result) > 0) 
{                  
// loop through all the rows of the fetched data
    while ($row = mysqli_fetch_assoc($result)){
        echo $row['status']."<br>";
    }
}
?>
</td>



<td>
<?php
$query = "SELECT * from users WHERE online != 0";
        // execute the query
        $result = mysqli_query($link, $query);
        // check if some rows were fetched
if (mysqli_num_rows($result) > 0) 
{                  
// loop through all the rows of the fetched data
    while ($row = mysqli_fetch_assoc($result)){
        echo $row['uid']."<br>";
    }
}
?>
</td>

</tr>
</table>








        </div>
    </div>
</div>



    </div>
</div>

<div class="bottom"> 
    <div class="copyright"> 
        <h6>Site Copyrighted By Richard © 2017</h6>
    </div>
</div>



</body>

</html>





<!-- =====================SAVED=================================  -->


<!--<div id='online' class='overlay'>
    <div class='popup'>
        <h2>ONLINE</h2>
            <a class='close' href='' target='_self'>&times;</a>
    </div>
</div> -->

<!-- ======================================================  -->

