<?php

include '../Conn/config.php';

$id = $_REQUEST['UID'];

if ($id == 1) {
	header('Location: admin.php?result=lol#users'); //cant delete the admin profile
	exit();
}
// sql to delete a record
$sql = "DELETE FROM users WHERE uid = $id"; 

if (mysqli_query($link, $sql)) {
    mysqli_close($link);
    header('Location: admin.php?result=deleted#users'); //If book.php is your main page where you list your all records
    exit;
} else {
    header('Location: admin.php?result=del_error#users'); 
}

?>