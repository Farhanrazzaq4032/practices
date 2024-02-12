<?php


function check_method($method = "post"){
   $request_method = strtolower($_SERVER["REQUEST_METHOD"]);
   $my_method = strtolower($method);
   if($request_method == $my_method){
      return true;
   }
   return false;
}


function set_segment($seg = 1){
   $host = trim($_SERVER["HTTP_HOST"], "/");
   $uri = trim($_SERVER["REQUEST_URI"], "/");
   $uri_split = explode("?", $uri);
   $clean_uri = $uri_split[0];
   $current_url = "http://".$host."/".$clean_uri;
   $current_seg = str_replace(URL, "",$current_url);
   $segs = explode("/", $current_seg);
   $seg -= 1;
   if(isset($segs[$seg])){
      return $segs[$seg];
   }
   return "";
}

function msg($msg, $type = "error"){
   if($type == "error"){
      return "<div>$msg</div>";
   }
      return "<div>$msg</div>";
}


function set_flash($msg){
   $_SESSION["msg"] = $msg;
}

function flash($key){
   if(isset($_SESSION["msg"])){
      $msg = $_SESSION["msg"];
      unset($_SESSION["msg"]);
      return $msg;
   }
   return "";
}
?>
