<?php
require '../vendor/autoload.php';

$redis = new Predis\Client();
$redis->connect('127.0.0.1', 6379); 
echo "Connection to server sucessfully"; 
echo "<br>";
//set the data in redis string 
$redis->set("tutorial-name", "Redis tutorial"); 
// Get the stored data and print it 
echo "Stored string in redis:: " .$redis->get("tutorial-name");
echo "<br>";
echo $redis->ping();
?>