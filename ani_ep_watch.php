<?php
    include 'header_nav.php';
    include 'simple_html_dom.php';
?>

<div class="Main_cont_page">
<div class="media_vid">

<?php

    if (isset($_GET['watch'])) {
       $anime = $_GET['watch'];

    $html = file_get_html('http://gogoanimee.io/'.$anime);

    $title = $html->find('h2', 0);

    foreach($html->find(".anime_video_body_cate") as $cate ) {
        echo "<h6>".$cate->plaintext."</h6>";
    }

    $image = $html->find('iframe', 0);

        echo "<h3>".$title->plaintext."</h3><br>";
        echo "<iframe src='".$image->src."' frameborder='0' 
    marginheight='0' 
    marginwidth='0' 
    width='100%' 
    height='100%' 
    scrolling='auto'>Your browser doesn't support iframes</iframe>";
        // echo $image->src;
    }else{
        echo'PAGE NOT FOUND';
    }


?>
    
    <a href="#" class="previous">&laquo; Previous</a>
    <a href="boruto_sub_ep2.php" class="next">Next &raquo;</a>
    <div class="list"><a href="boruto_sub.php"> Episode List</a></div>
</div>

	
<?php
    include 'report.php';
?>
</div>

<?php
    include 'footer.php'
?>

</body>

</html>