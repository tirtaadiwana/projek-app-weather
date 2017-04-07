<html>

</html>
<?php
   // error_reporting (E_ALL^ (E_NOTICE|E_WARNING));
    //$QueryState = $_GET['state'];
    //$QueryCity = str_replace(' ', '_', $_GET['city']);

    $json_string = file_get_contents("http://api.wunderground.com/api/b4e483b07e96ffd0/currenthurricane/view.json");   
    $json = json_decode($json_string);

        //pencarian variabel

    $hari = $json->currenthurricane[1]->{"stormInfo"}->{"stormName_Nice"};
    $hari1 = $json->currenthurricane[1]->{"Current"}->{"Category"};
	$hari2 = $json->currenthurricane[1]->{"Current"}->{"lat"};
	$hari3 = $json->currenthurricane[1]->{"Current"}->{"lon"};
    
    
    

        //eksekusi variabel
    echo "${hari} \n";
	echo "<br>";
    echo " ${hari1} \n";
	echo "<br>";
    echo "lat ${hari2}\n";
	echo "lon ${hari3}\n";
    echo "<br>";
    echo "\n";
    echo "<br>";
    echo "<img src='http://icons.wxug.com/i/c/k/" . $hari7 . ".gif'><br/>";
    echo "<h3>${hari8} F|C\n</h3>";
    echo "<br>";
    echo "Hari ini : ${hari} ${hari1}, ${hari2} ${hari3} ${hari4} \n";

   
    
	

?>