
<title>LA Clippers | Staff</title>
<?php 

$pictures = array ('images/coaches/1.jpg', 'images/coaches/2.jpg', 'images/coaches/3.jpg', 'images/coaches/4.jpg', 'images/coaches/5.jpg', 'images/coaches/6.jpg') ;
include"header.php";
?>
<div id="menu">
			<ul>
				<li><a href="index.php" accesskey="1" title="">Home</a></li>
				<li><a href="history.php" accesskey="2" title="">History</a></li>
				<li  class="active"><a href="team.php" accesskey="3" title="">Team</a></li>
				<li><a href="arena.php" accesskey="4" title="">Arena</a></li>
				<li><a href="tickets.php" accesskey="5" title="">Tickets</a></li>
			</ul><br>
			<div class= "drugimeni"><ul>
				<li><a href="roster.php" accesskey="2" title="">Roster</a></li>
				<li   class="active"><a href="rosterstaff.php" accesskey="4" title="">Staff</a></li>
			</ul></div>
		</div>
	</div>
<?php 
	include "aftermenu.php";
?>
	<div class="title"><h2>Coaching Staff</h2></div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
<div class="container">
    		<form>
            <h2 class="title">Team Owner</h2>
            <h5 id="owner"><img src="images/coaches/ballmer.jpg"></h5>
            <h3 class="text-info"><?php echo "<strong>Steve Ballmer</strong>"; ?></h3>
            </form>
            <form>
            <h2 class="title">Head Coach</h2>
            <h5 id="owner"><img src="images/coaches/doc.jpg"></h5>
            <h3 class="text-info"><?php echo "<strong>Glenn 'Doc' Rivers</strong>"; ?></h3>
            </form>
            </div>
            
	<h2 class="title">Assistant coaches</h2>
	<?php
	$query = "SELECT * FROM coaches ORDER BY c_name ASC";
	$result = mysqli_query($connect, $query);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			?>
			<div class="col-md-3">
            <form>
            <h5 class="text-info"><?php echo "<img src=\"".$pictures[$row["id"]-1]."\">"; ?></h5>
            <h3 class="text-info"><?php echo "<strong>".$row["c_name"]."</strong>"; ?></h3>
            </form>
            </div>
             <?php
		}
	}
		?>
</body>
<?php
	include"page.php";
	include"footer.php";
?>