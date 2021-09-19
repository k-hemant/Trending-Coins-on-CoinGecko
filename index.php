<html>

<title>Trending Coins on CoinGecko</title>

<font face='Arial' align='center'>
<h1>Top-7 trending coins on CoinGecko <br> in the last 24 hours</h1>
</font>

<div style="  margin-top: 0px;
  margin-bottom: 100px;
  margin-right:550px;
  margin-left: 400px;">






<font face='Arial' >




<?php
 
$url = "https://api.coingecko.com/api/v3/search/trending";

$json = file_get_contents($url);
$json_data = json_decode($json);


for($i=0;$i<=6;$i++){
$name = $json_data->coins[$i]->item->name;
$logo = $json_data->coins[$i]->item->small;	
$symbol = $json_data->coins[$i]->item->symbol;
$marketcap = $json_data->coins[$i]->item->market_cap_rank;



echo "<table><td><span style=''><font face='Arial'><h2>$i . </h2></font></span></td><td>";

	
echo "<img src='$logo'>&nbsp&nbsp";
echo "</td><td>";

echo "<font size='4'><b>Name</b> : $name";
echo "<br><b>Symbol</b> : $symbol";
echo "<br><b>Market Cap</b> : $marketcap </font>";


echo "</td></table>";

echo "<P>";
}

?>

</font>
</div>

<center>
<font face='Arial' >
Developed by Team Hierarchy using CoinGecko Api.
</font>
</center>
<br><br>


</html>
