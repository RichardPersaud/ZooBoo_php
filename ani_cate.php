<?php
    include 'header_nav.php'
?>
	 

<div id="wrapper"> 
<div class="anime_bio">
<div class="description">



<?php
include 'simple_html_dom.php';
  
if (isset($_GET['ref'])) {
$anime=$_GET['ref'];

$html = file_get_html('http://gogoanimee.io/category/'.$anime);


$h1 = $html->find('div.anime_info_body_bg', 0);

  foreach ($h1->find('h1') as $head) {
      $temp = $head->plaintext;
      echo "<h3>".$temp."</h3>";
    }

$data = $html->find('div.anime_info_body_bg', 0);

  foreach ($data->find('img') as $a) {
      $name = $a->plaintext;
      $src = $a->src;
      echo "<div class='cover_img'>";
      echo "<img src='".$src."' width='220' height='320'>";
      echo "</div>";

      foreach ($a->find('p') as $p) {
        $stuf = $p->plaintext;

          if ($stuf == 'Click to manage book marks') {
            $stuf=' ';
          }else{
            echo $stuf.'<br><br>';
          }
        
      }
  }

$total = $html->find('div[class=anime_video_body]', 0);
foreach($total->find('li') as $num) {
  $TNUM = $num->plaintext;

if (strpos($TNUM, '-') !== false) {
  $list = (explode("-",$TNUM));

  if ($list[1] == 99 || $list[1] == 199 || $list[1] == 299 || $list[1] == 399 || $list[1] == 499 || $list[1] == 599) {
   echo " ";
  }else{
    echo "<hr>";
    echo "Episode: 1-".$list[1]; 
  }
  
}else{
  echo "<hr>";
  echo "Episode: 1-".$TNUM; 
}

  

}
  echo "<br> <div class='ep_count'>";
  echo "<ul>";
for ($i=0; $i < $list[1] ; $i++) {
  $ep = $i + 1;
  echo "<li>";
  echo("<a href='ani_ep_watch.php?watch=".$anime."-episode-".$ep."'>EP.".$ep."</a>");
  echo "</li>";
}
echo "</div>";


}
else{echo "PAGE NOT FOUND";}
  
?>


</div>        
</div>
</div>


  <?php
    include 'footer.php'
  ?> 


</body>

</html>