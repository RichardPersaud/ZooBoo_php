<?php
include '../Conn/config.php'; // remember your inside PHP

session_start();
$name = $_REQUEST['name'];
$title = $_REQUEST['Tit'];
$lik = $_REQUEST['link'];
// ============================================================
   

if(empty($name)||empty($title)||empty($lik)){
header("location:../backend/admin.php#epi"); //remember to go back
exit();
}

// query to insert into table posts
$query = "INSERT into episodes (name, title, link) values ('$name', '$title', '$lik')";

$result = mysqli_query($link, $query);

// check if 1 record was added
if ($result == 1 && $uploadOk != 0)
{

header("location:../backend/admin.php?result=Done#epi");

} else
{
header("location:../backend/admin.php?result=fail#epi");
}



// =====================================================================





// ============================================================s




?>