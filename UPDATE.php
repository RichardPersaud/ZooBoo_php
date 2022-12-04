<?php
include 'simple_html_dom.php';
$c=0;

$f=fopen('animelinks.txt','w');
fwrite($f,'');
fclose($f);


for($i = 1; $i < 56; $i++) {
  $html = file_get_html('http://gogoanimee.io/anime-list.html?page='.$i);
  $data = $html->find('div.anime_list_body', 0);
  foreach ($data->find('li') as $temp) {
    foreach ($temp->find('a') as $a) {
      $name = $a->plaintext;
      $href = $a->href;
      $link = (explode("/",$href));

      $anime_link =  $link[2];
      $anime_name[] = $name;
    
      $html = file_get_html('http://gogoanimee.io/category/'.$anime_link);

      $data = $html->find('div.anime_info_body_bg', 0);

       foreach ($data->find('img') as $a) {
          $name = $a->plaintext;
          $src = $a->src;
          $anime_image = $src;
        }// end of img


// $anime=$anime_link;

// $html = file_get_html('http://gogoanimee.io/category/'.$anime);

// $total = $html->find('div[class=anime_video_body]', 0);
// foreach($total->find('li') as $num) {
//   $TNUM = $num->plaintext;

// if (strpos($TNUM, '-') !== false) {
//   $list = (explode("-",$TNUM));

//   if ($list[1] == 99 || $list[1] == 199 || $list[1] == 299 || $list[1] == 399 || $list[1] == 499 || $list[1] == 599 || $list[1] == 699 || $list[1] == 799 || $list[1] == 899) {
//    echo " ";
//   }else{
//     echo "<hr>";
//     echo "Episode: 1-".$list[1]; 
//   }
  
// }else{
//   echo "<hr>";
//   echo "Episode: 1-".$TNUM; 
// }

  

// }
//   echo "<br> <div class='ep_count'>";
//   echo "<ul>";
// for ($i=0; $i < $list[1] ; $i++) {
//   $ep = $i + 1;
//   echo "<li>";
//   echo("<a href='ani_ep_watch.php?watch=".$anime."-episode-".$ep."'>EP.".$ep."</a>");
//   echo "</li>";
// }
// echo "</div>";

  

      
      $myFile = "animelinks.txt";
      $file = fopen($myFile, 'a') or die("can't open file");
      $txt =   $anime_name[$c]." || ".$anime_link." || ".$anime_image."\n";
      fwrite($file, $txt);
      fclose($file);
      $c++;


    }//end of a
header("location: updatefile.php");
  }//end of li


    
} //end of main foreach


// =================================================================================
// ?>

