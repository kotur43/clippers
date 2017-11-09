<html>
<head>
<script>
function getVote(int) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<div id="poll">
<h2>POLL</h2>
<p>How many games will Clippers win this season?</p>
<form>
<table>
  <tr>
    <td align="right">Over 65</td>
    <td><input type="radio" width="10px" name="vote" value="0" onclick="getVote(this.value)"></td>
  </tr>
  <tr>
    <td>55-65</td>
    <td><input type="radio" name="vote" value="1" onclick="getVote(this.value)"></td>
  </tr>
  <tr>
    <td>45-55</td>
    <td><input type="radio" name="vote" value="2" onclick="getVote(this.value)"></td>
  </tr>
  <tr>
    <td>Under 45</td>
    <td><input type="radio" name="vote" value="3" onclick="getVote(this.value)"></td>
  </tr>
</table>
</form>
</div>

</body>
</html> 