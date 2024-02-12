<?php

ob_start();
session_start();
//Base path Directory
define("BASE_PATH", __DIR__."/");
//Helpers file
define("HELPERS", BASE_PATH."helpers/");
//inc Directory
define("INC", BASE_PATH."inc/");
//obj Directory
define("OBJ", BASE_PATH."obj/");
//URL Directory
define("URL", "http://".$_SERVER["HTTP_HOST"]."/php/practices/");




//Include file

include BASE_PATH."conf.php";
include HELPERS."func.php";
include BASE_PATH."path.php";
include OBJ."DB.php";




//echo thing to ckeck result
echo BASE_PATH ."<br>";
echo INC ."<br>";
echo OBJ ."<br>";
echo URL ."<br><br><hr>";




// $host = $_SERVER["HTTP_HOST"];
// $uri = $_SERVER["REQUEST_URI"];
// $uri_split = explode("?", $uri);
// $clean_uri = $uri_split[0];
// $current_url = "http://".$host."/".$clean_uri;
// $current_seg = str_replace(URL,"",$current_url);
// $segs = explode("/", $current_seg);



// echo $host ."<hr>";
// echo $uri ."<hr>";
// echo $uri_split[0] ."<hr>";
// // echo $uri_split[1] ."<hr>";
// echo $current_url ."<hr>";
// echo $current_seg ."<hr>";


?>