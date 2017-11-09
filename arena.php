
<title>LA Clippers | Arena</title>
<?php 
include"header.php";
?>
<div id="menu">
			<ul>
				<li><a href="index.php" accesskey="1" title="">Home</a></li>
				<li><a href="history.php" accesskey="2" title="">History</a></li>
				<li><a href="team.php" accesskey="3" title="">Team</a></li>
				<li class="active"><a href="arena.php" accesskey="4" title="">Arena</a></li>
				<li><a href="tickets.php" accesskey="5" title="">Tickets</a></li>
			</ul>
		</div>
	</div>
<?php
include "aftermenu.php";
?>
	<div class="title">
			<h2>Staples Center</h2>
			<span>Learn more about the Clippers Arena</span> </div>
			<p id="novaklasa">The Clippers play their home games at Staples Center in downtown Los Angeles.</p>

  </p>

     <script type = "text/javascript">
          function displayNextImage() {
              $('#img').css("height",500);
              $('#img').css("width","auto");
              $('#img').fadeIn(1000);
              $('#img').delay(1000);
              $('#img').fadeOut(1000);
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img").src = images[x];

          }

          function startTimer() {

              setInterval(displayNextImage, 3000);
              $('#img').delay(2000);
              $('#img').css("height",500);
              $('#img').css("width","auto");
              $('#img').fadeOut(1000);
          }

          var images = [], x = -1;
          images[0] = "images/arena/1.jpg";
          images[1] = "images/arena/2.jpg";
          images[2] = "images/arena/3.jpg";
      </script>
   <body onload = "startTimer()">
       <img id="img" src="images/arena/3.jpg"/><br></body>
<p><blockquote>
Address:	1111 South Figueroa Street</br>
Location: 	Los Angeles, California </br>
Capacity: 19,060</br>
Opened: 	October 17, 1999</br></blockquote>
</p>
<?php
	include"page.php";
	include"footer.php";
 ?>