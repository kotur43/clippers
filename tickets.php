
<title>LA Clippers | Tickets</title><?php 
include"header.php";
?>
<div id="menu">
			<ul>
				<li><a href="index.php" accesskey="1" title="">Home</a></li>
				<li><a href="history.php" accesskey="2" title="">History</a></li>
				<li><a href="team.php" accesskey="3" title="">Team</a></li>
				<li><a href="arena.php" accesskey="4" title="">Arena</a></li>
				<li class="active"><a href="tickets.php" accesskey="5" title="">Tickets</a></li>
			</ul>
		</div>
	</div>
<?php 
include "aftermenu.php" ?>
<style type="text/css">     
    select{
        width:200px;
    }
    input {
        width:196px;
    }
</style>
		<div class="title">
			<h2>ORDER TICKETS</h2>
			<span>Here you can order tickets</span> </div>
<form action="ordertickets.php" method="post">
<table border="0" align="center">
	<tr>
		<td width="200">Select Game</td>
		<td width="200" align="center">
			<select style="width=250px" name="game">
			<option value="0">Choose..</option>
			<option value="a">vs. Suns, 21 OCT</option>
			<option value="b">vs. Utah, 24 OCT</option>
			<option value="c">vs. Detroit, 28 OCT</option>
			<option value="d">vs. Golden State, 30 OCT</option>
			</select>
		</td>
	</tr>
	<tr>
		<td width="200">Select Seats</td>
		<td align="center">
			<select  style="width=250px" name="seats">
			<option value="0">Choose..</option>
			<option value="a">Courtside</option>
			<option value="b">Loge level</option>
			<option value="c">Premier seating</option>
			<option value="d">Upper Level</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Number of seats (max 8)</td>
		<td align="center"><input type="text" name="seatqty" maxlength="3"/></td>
	</tr>
	<tr>
  		<td>Shipping Address</td>
  		<td align="center"><input type="text" name="address" maxlength="40"/></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" value="Submit Order"/></td>
	</tr>
</table>
</form>
<?php
	include"page.php";
	include"footer.php";
?>