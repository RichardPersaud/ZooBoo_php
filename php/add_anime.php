<?php
include '../Conn/config.php'; // remember your inside PHP

session_start();
$name = $_REQUEST['Aname'];
$syn = $_REQUEST['synopsis'];
$img = $_REQUEST['img'];
// ============================================================
   

if(empty($name)||empty($syn)){
header("location:../backend/admin.php#anime"); //remember to go back
exit();
}

// query to insert into table posts
$query = "INSERT into anime (name, synopsis, image) values ('$name', '$syn', '$img')";

$result = mysqli_query($link, $query);

// check if 1 record was added
if ($result == 1 && $uploadOk != 0)
{

header("location:../backend/admin.php?result=Done#anime");

} else
{
header("location:../backend/admin.php?result=fail#anime");
}



// =====================================================================





// ============================================================s




?>