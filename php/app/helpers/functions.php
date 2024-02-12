<?php
function view($ivew = "", $data = array()){
    $file = "resources/".$ivew.".php";
    if ($ivew !="" and is_file($file) and file_exists($file)){
        extract($data);
        require_once $file;
    }
}