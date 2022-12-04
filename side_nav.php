<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="subbed.php">Subbed Anime</a>
  <a href="#">Dubbed Anime</a>
  <a href="#">Anime Movies</a>
  <a href="#">Manga <br> (Coming Soon)</a>
</div>

<div id="main">
  <span style="font-size:24px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
    document.getElementById("main").style.marginLeft = "200px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>
     
</body>

