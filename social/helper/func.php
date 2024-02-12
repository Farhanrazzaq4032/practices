<?php
function hash_password($string){
    $hash = SALT.$string.SALT;
    return md5($hash);
}

function ckeck_password($hash, $string){
    $new_string = SALT.$string.SALT;
    if($hash == $new_string){
        return true;
    }
    
    return false;
}

function error_message($msg, $type=""){
    if($type == "error"){
        return "<div style='color:red';>$msg</div>";
    }
    elseif($type == "info"){
        return "<div style='color:red';>$msg</div>";
    }
    elseif($type == "warning"){
        return "<div style='color:red';>$msg</div>";
    }
    elseif($type == "success"){
        return "<div style='color:red';>$msg</div>";
    }
    else{
        return "<div style='color:red';>$msg</div>";
    }
}


function check_method($method = "GET"){
    $sm = strtolower($_SERVER["REQUEST_METHOD"]);
    $method = strtolower($method);
    if($method == $sm){
        return true;
    }
    return false;
}

function set_flash($msg){
    $_SESSION["msg"] = $msg;
}
function flash($key){
    if(isset($_SESSION["msg"])){
        $note = $_SESSION["msg"];
        unset($_SESSION["msg"]);
        return $note;
        }
    return "";
}

function set_segment($seg = 1){
    $host = trim($_SERVER["HTTP_HOST"], "/");
    $uri = trim($_SERVER["REQUEST_URI"], "/");

    $uri_split = explode("?", $uri);
    $clean_uri = $uri_split[0];
    $current_url ="http://".$host."/".$clean_uri;
    $current_seg = str_replace(URL, "", $current_url);
    $segs = explode("/", $current_seg);
    $seg-=1;
    if(isset($segs[$seg])){
        return $segs[$seg];
    }
    else
    return "";
}



function clean_string($string){
    $string = trim($string);
    $string = addslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}
function redirect($path = ""){
    header("location:".URL.$path);
    exit;
}

?>