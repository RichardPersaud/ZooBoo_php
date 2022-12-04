<!DOCTYPE html>
<html>
<head>
	<title>UPDATE</title>
</head>
<style type="text/css">

body{
	font-family: sans-serif;
}

a{
	background-color: #333;
	color:#fff;
	padding: 10px;
}

</style>
<body>
	<h1>ANIME DATABASE UPDATE</h1>
<hr>


<br>
<a href="UPDATE.php">WEBSCRAPE DATA</a>
<p>Click here to get the data from the anime site and store it into animelinks.txt file.</p>
<br>
<a href="DATABASE.php">STORE DATA</a>
<p>Click here to store data from txt format into the mysql database.</p>


<hr>

<?php
include 'Conn/config.php';
$query = "SELECT * FROM anime";
$result = mysqli_query($link, $query);
echo " 'anime' DATABASE ";
if (mysqli_num_rows($result) > 0) { 


      echo "<table border = solid>";
      echo "<tr>";
      echo "<th>Aid</th>";
      echo "<th>Name</th>";
      echo "<th>Image</th>";
      echo "<th>Link</th>";
      echo "<th>Date</th>";
      echo "</tr>";

      while($row = mysqli_fetch_assoc($result)){
      // echo $row['name'];
      echo "<tr>";
      echo "<th>".$row['aid']."</th>";
      echo "<th>".$row['name']."</th>";
      echo "<th>".$row['image']."</th>";
      echo "<th>".$row['videolink']."</th>";
      echo "<th>".$row['date']."</th>";

      echo "</tr>";
    
    }

      echo "</table>";

}else{
  echo "no data";
}
?>

<hr>
<hr>

<?php
// $query = "SELECT * FROM episodes";
// $result = mysqli_query($link, $query);
// echo " 'episode' DATABASE ";
// if (mysqli_num_rows($result) > 0) { 


//       echo "<table border = solid>";
//       echo "<tr>";
//       echo "<th>Eid</th>";
//       echo "<th>Name</th>";
//       echo "<th>Aid</th>";
//       echo "<th>Views</th>";
//       echo "<th>Title</th>";
//       echo "<th>Likes</th>";
//       echo "<th>Link</th>";
//       echo "</tr>";

//       while($row = mysqli_fetch_assoc($result)){
//       // echo $row['name'];
//       echo "<tr>";
//       echo "<th>".$row['eid']."</th>";
//       echo "<th>".$row['name']."</th>";
//       echo "<th>".$row['aid']."</th>";
//       echo "<th>".$row['views']."</th>";
//       echo "<th>".$row['title']."</th>";
//       echo "<th>".$row['likes']."</th>";
//       echo "<th>".$row['link']."</th>";

//       echo "</tr>";
    
//     }

//       echo "</table>";

// }else{
//   echo "no data";
// }
?>

</body>
</html>