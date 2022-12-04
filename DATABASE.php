<a href="updatefile.php"> << BACK</a><br><hr>
<?php
include 'Conn/config.php';
//Prints the logs.txt file
$contents = file_get_contents('animelinks.txt');
// echo "<pre>".$contents."</pre>";

$file_content = file_get_contents("animelinks.txt");
$data = explode("\n", $file_content);
$c=0;
  foreach ($data as $temp) {

  	// echo $temp;

	$d = explode(" || ", $temp);

	$count = $c;
	$count +=1;

	if ($d[0] == "" || $d[1] == "" ||  $d[2] == "") {
		exit();
	}

  	echo "(".$count.") -- ".$d[0]."<br>".$d[1]."<br>".$d[2]."<hr>";

	$anime_name= $d[0];
	$anime_link= $d[1];
	$anime_img= $d[2];


	$query = "INSERT INTO anime (name, image, videolink) VALUES ('$anime_name','$anime_img','$anime_link')";

	$result = mysqli_query($link, $query);


  	$c++;
  	header("location: updatefile.php");
  }



?>