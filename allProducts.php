<?php


$db = json_decode(file_get_contents("allProducts.db.json"),true); 

$size = count($db) ; 

echo PHP_EOL."Records:".$size.PHP_EOL ;
$additionalCounter=0; 
$counter;
$record=Array() ; 
$newrecord=Array() ; 
$newdb=Array() ; 
for($x=0;$x<$size;$x++) { 


	$record = $db[$x] ; 
	$newrecord["id"] = $x;
	$newrecord["device"] = $db[$x]["device"]; 
	$newrecord["model"] = $db[$x]["model"];
	$newrecord["brand"] = $db[$x]["brand"] ; 	
	$newrecord["category"] = $db[$x]["category"] ; 
	$newrecord["userguide"] = "https://user.guide/index.php?from=".$x;
        $newdb[$x] = $newrecord ; 
        print_r($newrecord) ; 
        echo PHP_EOL ; 

} 

$jsondb = json_encode($newdb,JSON_PRETTY_PRINT) ; 
file_put_contents("products-and-userguides.json",$jsondb) ; 
echo PHP_EOL."done".PHP_EOL ;




?>
