<?php 
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
	include "aftermenu.php";
?>	
<div id="staff" class="container">
			<?php
	

	//formira promenljive sa kratkim imenima
	$game=$_POST['game'];
	$seats=$_POST['seats'];
	$seatqty=$_POST['seatqty'];
	$address=$_POST['address'];
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
	$date = date('H:i, jS F Y');

?>
<html>
<head>
	<title>LA Clippers | Order</title>
</head>
<body>
<h1>Finish order</h1>
	<?php 
		$seatprice = 0;
		$gamefactor = 1;
		$discount=0;
		$opponent;
		$typeofseat;
		switch ($game)
		{
			case 'a' :
			$gamefactor = 1.3;
			$opponent = "vs. Phoenix";
			break;
			case 'b' :
			$gamefactor = 1.1;
			$opponent = "vs. Utah";
			break;
			case 'c':
			$gamefactor = 1.2;
			$opponent = "vs. Detroit";
			break;
			case 'd':
			$gamefactor = 1.5;
			$opponent = "vs. Golden State";
			break;
			default:
			$gamefactor = 0;
			echo '<p style="color:red">';
			echo 'You did not choose the game on the previous page!';
			echo '</p>';
			exit;
		}
		switch ($seats)
		{
			case 'a' :
			$seatprice = 500;
			$typeofseat = "Courtside";
			break;
			case 'b' :
			$seatprice = 300;
			$typeofseat = "Loge level";
			break;
			case 'c':
			$seatprice = 180;
			$typeofseat = "Premium";
			break;
			case 'd':
			$seatprice = 90;
			$typeofseat = "Upper level";
			break;
			default:
			$seatprice = 0;
			echo '<p style="color:red">';
			echo 'You did not choose the seats on the previous page!';
			echo '</p>';
			exit;
		}
		if (empty($seatqty)) {
			echo '<p style="color:red">';
			echo 'You did not choose how many seats you want on the previous page!';
			echo '</p>';
			exit;
		}
		if ($seatqty < 1 || $seatqty>8 || '') {
			echo '<p style="color:red">';
			echo 'You can only buy 8 tickets or less!';
			echo '</p>'; 
			exit;
		}
		if (empty($address)) {
			echo '<p style="color:red">';
			echo 'You did not enter your address on the previous page!';
			echo '</p>';
			exit;
		}
		echo "Order processed at ".date ('H:i, jS F Y').'<br>'; 
		echo 'Sector: '.$typeofseat.'<br>';	
		echo 'Tickets oredered: '.$seatqty.'<br>';
		$totalprice = 0.00;
		$totalprice=$gamefactor*($seatqty * $seatprice);
		echo 'Total: $'.number_format($totalprice,2).'<br>';
		echo '<p>Address to ship to is: '.$address.'</p>';

		//$outputstring se upisuje u datoteku.
		$outputstring = $date."\t".$opponent." \t".$typeofseat." seat sector\t"
						.$seatqty." seats\t  $".$totalprice."\t".stripslashes($address)."\n";

		//datoteku otvaramo za dodavanje na kraj
		//fopen otvara datitejy za sve tri opcije upisivanja
		//prima dva parametra: 1-destinacija fajla, 2-rezim rada
		//a (append) znaci da dodaje tekst na vec postojeci. b (binary) u kombinaciji sa ostalim rezimima (stranica 57)
		@ $fp = fopen("$DOCUMENT_ROOT/clippers/files/orders.txt",'ab');

		if(!$fp)
		{
			echo '<p><strong>Your order could not be precessed at this time. '.'Please try again later.</strong></p></body></html>';
			exit;
		}


		//funkcija flock() zakljucava datoteku
		//prvi parametar je fajl koji se zakljucava, drugi parametar govori na koji nacin se zakljucava
		//postoji 4 predefinisana parametra
		//parametar LOCK_EX  zakljucava za upisivanje. Datoteku ne moze da deli vise korisnika.
		flock($fp, LOCK_EX);

		//funkcija koja upisuje tekst u datoteku.
		//funkcija upisuje znakovni niz iz promenljive $outputstring u datoteku na koju upucuje promenljiva $fp
		//treci parametar je maksimalan broj bajtova koje treba upisati
		fwrite($fp,	$outputstring, strlen($outputstring));
		
		//flock(), parametar LOCK_UN otkljucava zakljucanu datoteku
		//postoje jos parametri
		//LOCK_SH koji zakljucava za citanje, vise korisnika moze da deli datoteku
		//i LOCK_NB koji sprecava blokiranje prilikom zakljucavanja datoteke
		flock($fp, LOCK_UN);

		//funkcija koja zatvara datoteku
		//vraca true ako je datoteka uspesno zatvorena, odnosno false ako nije 
		fclose($fp);

		echo "<p style='color:#5c5'><b>Order written.</b></p>";

	?>
</body></html></div>
<?php
	include"page.php";
	include"footer.php";
 ?>