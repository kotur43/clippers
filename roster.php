
<title>LA Clippers | Roster</title>
<?php 

$pictures = array ('images/players/1.png', 'images/players/2.png', 'images/players/3.png', 'images/players/4.png', 'images/players/5.png', 'images/players/6.png', 'images/players/7.png', 'images/players/8.png', 'images/players/9.png', 'images/players/10.png', 'images/players/11.png', 'images/players/12.png');
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
				<li  class="active"><a href="roster.php" accesskey="2" title="">Roster</a></li>
				<li><a href="rosterstaff.php" accesskey="4" title="">Staff</a></li>
			</ul></div>
		</div>
	</div>
<?php 
	include "aftermenu.php";
?>
	<div class="title"><h2>Roster</h2></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <?php
	$query = "SELECT * FROM players ORDER BY p_name ASC";
	$result = mysqli_query($connect, $query);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			
			?>

            <div class="col-md-3">
            <form>
            <div class="igrac">
            <h5 class="text-info"><?php echo "<img src=\"".$pictures[$row["id"]]."\">"; ?></h5>
            <h3 class="text-info"><?php echo "<strong>".$row["p_name"]."</strong>"; ?></h3>
            <h4 class="text-info"><?php echo "Games: ".$row["games"]; ?></h4>
            <h4 class="text-info"><?php echo "Points: ".$row["points"]; ?></h4>
            <h4 class="text-info"><?php echo "Rebounds: ".$row["rebounds"]; ?></h4>
            <h4 class="text-info"><?php echo "Assists: ".$row["assists"]; ?></h4>
            </div>
            </form>
            </div>
            <?php
		}
	}
		?>
</div></body>
<?php
	include"page.php";
	include"footer.php";
?>