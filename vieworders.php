
<title>LA Clippers | Order</title><?php
//pravi kratko ime promenljive
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bob's Auto Parts</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Customer orders</h2>
<?php
//Cita celu datoteku
//Svaka porudzbina postaje jedan element niza
@$orders = file("$DOCUMENT_ROOT/clippers/files/orders.txt");

//Prebrojava porudzbine u nizu
$number_of_orders = count($orders);


if (file_exists("$DOCUMENT_ROOT/php/poglavlje2/orders/orders.txt")){
		echo "<strong>There are orders in this file:</strong><br>";
	}else{
		echo "<p><strong>No orders pending.
		Please try again later.</strong></p>";
		exit;
	}


if ($number_of_orders == 0)
{
	echo "<p><stron>No orders pending. Please try again later.</strong></p>";
	exit;
}


echo "<table border=\"1\">\n";
echo   "<tr><th bgcolor=\"#CCCCFF\">Order Date</th>
			<th bgcolor=\"#CCCCFF\">Opponent</th>
			<th bgcolor=\"#CCCCFF\">Sector</th>
			<th bgcolor=\"#CCCCFF\">No. of seats</th>
			<th bgcolor=\"#CCCCFF\">Total</th>
			<th bgcolor=\"#CCCCFF\">Address</th>
		</tr>";

for ($i=0; $i < $number_of_orders; $i++) { 
	
	//razbija svaki red
	$line = explode("\t", $orders[$i]);
	
	//cuva samo broj narucenih artikala
	$line[3] = intval($line[3]);
	
	//prikazuje svaku porudzbinu
	echo "<tr><td>$line[0]</td>
				<td align ='right'>$line[1]</td>
				<td align ='right'>$line[2]</td>
				<td align ='right'>$line[3]</td>
				<td align ='right'>$line[4]</td>
				<td align ='right'>$line[5]</td>
				</tr>";
}
echo "</table><br><br>";
?>
</body>
</html>