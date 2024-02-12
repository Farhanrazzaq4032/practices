<?php
// echo __DIR__."<br>";
ob_start();
session_start();
//root Directory
define("BASE_PATH", __DIR__."/");
//inc Directory
define("INC", BASE_PATH. "inc/");
//helpers Directory
define("HELPERS", BASE_PATH."helper/");
//OBJ Directory
define("OBJ", BASE_PATH."obj/");
//URl Directory
define("URL", "http://".$_SERVER["HTTP_HOST"]."/php/social/");


//include file
include BASE_PATH."conf.php";
include HELPERS."func.php";
include OBJ."DB.php";
include OBJ."Login.php";
include OBJ."User.php";
include OBJ."Post.php";
include OBJ."DeletePost.php";
include BASE_PATH."routes.php";










$host = trim($_SERVER["HTTP_HOST"], "/");
    $uri = trim($_SERVER["REQUEST_URI"], "/");

    $uri_split = explode("?", $uri);
    $clean_uri = $uri_split[0];
    $current_url ="http://".$host."/".$clean_uri;
    $current_seg = str_replace(URL, "", $current_url);
    $segs = explode("/", $current_seg);
    

//this comment used to uderstand file code flow
// echo INC;
echo "<br>";
echo $clean_uri;
// echo "<br>";
// echo OBJ;










//this comment used to uderstand segment code flow

    // $host = trim($_SERVER["HTTP_HOST"], "/");
    // $uri = trim($_SERVER["REQUEST_URI"], "/");

    // $uri_split = explode("?", $uri);
    // $clean_uri = $uri_split[0];
    // $current_url ="http://".$host."/".$clean_uri;
    // $current_seg = str_replace(URL, "", $current_url);
    // $segs = explode("/", $current_seg);


// echo $host ."<hr>";
// echo $uri ."<hr>";
// echo $uri_split[0] ."<hr>";
// echo $uri_split[1] ."<hr>";
// echo $clean_uri ."<hr>";
// echo $current_url ."<hr>";
// echo "url <hr>";

// echo URL ."<hr>";
// echo URL ."<hr>";
// echo $current_seg ."<hr>";
// echo $segs[0] ."<hr>";
// echo $segs[1] ."<hr>";
// echo $segs[2] ."<hr>";


// echo set_segment("1");
?>