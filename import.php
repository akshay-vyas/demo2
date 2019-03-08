<?php
error_reporting(0);

//$page = $_SERVER['PHP_SELF'];
$sec = "3";
//header("Refresh: $sec; url=$page");
  // perform HTTP request to your nodejs server to fetch your data
  $raw_data = file_get_contents('https://garbage-monitoring-system.herokuapp.com/garbage-monitor');

  // PHP just sees your data as a JSON string, so we'll decode it
  $data = json_decode($raw_data, true);

  // ... do stuff with your data
  //echo $data[]; // fromBluetoothHere

//print_r($data[1]);



  

  $len = sizeof($data)."<br> size of ";


  $num = $data[$len-1][num];


/*

  foreach ($data as $key) {
  	# code...
  	$num = $key;
  	print_r($num);
  	//echo $num;
  	//print_r($key);
  }*/




?>