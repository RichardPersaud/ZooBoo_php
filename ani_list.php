<?php 
include 'header_nav.php' 
?>


<div class="wrapper">

<div class="access">
	<ul>
		<li><a href="#Newest"> Newest</a></li>
		<li><a href="#LastUpdate"> LastUpdate</a></li>
		<li><a href="#Ongoing">Ongoing</a> </li>
		<li><a href="#Other">Other</a> </li>
	</ul>
</div>










<div class="main_col">

	<h4>Anime List</h4>

	<!-- <ul>
		<li><a href="ani_cate.php?ref=#">#</a></li>
		<li><a href="ani_cate.php?ref=A">A</a></li>
		<li><a href="ani_cate.php?ref=B">B</a></li>
		<li><a href="ani_cate.php?ref=C">C</a></li>
		<li><a href="ani_cate.php?ref=D">D</a></li>
		<li><a href="ani_cate.php?ref=E">E</a></li>
		<li><a href="ani_cate.php?ref=F">F</a></li>
		<li><a href="ani_cate.php?ref=G">G</a></li>
		<li><a href="ani_cate.php?ref=H">H</a></li>
		<li><a href="ani_cate.php?ref=I">I</a></li>
		<li><a href="ani_cate.php?ref=J">J</a></li>
		<li><a href="ani_cate.php?ref=K">K</a></li>
		<li><a href="ani_cate.php?ref=L">L</a></li>
		<li><a href="ani_cate.php?ref=M">M</a></li>
		<li><a href="ani_cate.php?ref=N">N</a></li>
		<li><a href="ani_cate.php?ref=O">O</a></li>
		<li><a href="ani_cate.php?ref=P">P</a></li>
		<li><a href="ani_cate.php?ref=Q">Q</a></li>
		<li><a href="ani_cate.php?ref=R">R</a></li>
		<li><a href="ani_cate.php?ref=S">S</a></li>
		<li><a href="ani_cate.php?ref=T">T</a></li>
		<li><a href="ani_cate.php?ref=U">U</a></li>
		<li><a href="ani_cate.php?ref=V">V</a></li>
		<li><a href="ani_cate.php?ref=W">W</a></li>
		<li><a href="ani_cate.php?ref=X">X</a></li>
		<li><a href="ani_cate.php?ref=Y">Y</a></li>
		<li><a href="ani_cate.php?ref=Z">X</a></li>
	</ul> -->

<?php
include 'simple_html_dom.php';

$count = 0;
for($i = 1; $i < 56; $i++) {
	$html = file_get_html('http://gogoanimee.io/anime-list.html?page='.$i);
	$data = $html->find('div.anime_list_body', 0);
	foreach ($data->find('li') as $temp) {
		foreach ($temp->find('a') as $a) {
			$name = $a->plaintext;
			$href = $a->href;

			$link = (explode("/",$href));

			echo "<a href='ani_cate.php?ref=".$link[2]."'>";
			echo $name;
			echo "</a><br>";
			$count++;
		}
	}
}

echo "<hr>TOTAL ANIME: ".$count."<br>";

	
?>

</div>


<div class="right_col">
<div class="search_bar">
	<form>

		<input type="text" name="search" placeholder="Search...">
		 <button type="submit"><i class="fa fa-search"></i></button>
	</form>
</div>

<div class="genre">
	<h5>Anime Genres</h5> <!-- Add More Links here-->
	<ul>
		<li>Action</li>
		<li>Adventure</li>
		<li>Cars</li>
		<li>Comedy</li>
	</ul>
</div>

 <div class="rec_added">
	<h5>Recently Added (5)</h5>
	<ul>
		<li>
			<a href="#" class="side_img">
				<img src="https://static.akacdn.ru/files/images/2019/09/e025421f0a9bd6b24623a37a1f08303f.jpg">
			</a>
			<p class="side_para">lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			</p> 

			<style type="text/css">
				.rec_added li{
					background-color: #333;
					margin-bottom: 10px;
					border-radius: 3px;
				}

				.side_img img{
					width: 20%;
					
				}
				.side_para{
					display: inline-block;
					width: 75%;
				}


			</style>

		</li>
		<li>Name</li>
		<li>Name</li>
		<li>Name</li>
	</ul>
</div>
	<i class="fa fa-search"></i>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</div>



</div>





<?php
    include 'footer.php'
?>

</body>

</html>