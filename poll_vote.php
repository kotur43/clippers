<h2>POLL</h2><p>How many games will Clippers win this season?</p><p>Result</p>
<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "files/poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$first = $array[0];
$second = $array[1];
$playoffs = $array[2];
$outofplayoffs = $array[3];

if ($vote == 0) {
  $first = $first + 1;
}
if ($vote == 1) {
  $second = $second + 1;
}
if ($vote == 2) {
  $playoffs = $playoffs + 1;
}
if ($vote == 3) {
  $outofplayoffs = $outofplayoffs + 1;
}
$total = $first+$second+$playoffs+$outofplayoffs;
//insert votes to txt file
$insertvote = $first."||".$second."||".$playoffs."||".$outofplayoffs;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>
<table>
<tr>
<td width="100px">Over 65:</td>
<td width="130px" align="left">
<img align="left" src="images/poll.gif"
width='<?php echo(100*round($first/($total),2)); ?>'
height='20'></td><td width="30px">
<?php echo(100*round($first/($total),2))."%"; ?>
</td>
</tr>
<tr>
<td>55-65:</td>
<td align="left">
<img align="left" src="images/poll.gif"
width='<?php echo(100*round($second/($total),2)); ?>'
height='20'></td><td>
<?php echo(100*round($second/($total),2))."%"; ?>
</td>
</tr>
<tr>
<td>45-55:</td>
<td>
<img align="left" src="images/poll.gif"
width='<?php echo(100*round($playoffs/($total),2)); ?>'
height='20'></td><td>
<?php echo(100*round($playoffs/($total),2))."%"; ?>
</td>
</tr>
<tr>
<td>Under 45:</td>
<td >
<img align="left" src="images/poll.gif"
width='<?php echo(100*round($outofplayoffs/($total),2)); ?>'
height='20'></td><td>
<?php echo(100*round($outofplayoffs/($total),2))."%"; ?>
</td>
</tr>
<tr>
	<td colspan="3">
		<p><?php echo"Total number of votes: ".($total);?></p>
	</td>
</tr>
</table>