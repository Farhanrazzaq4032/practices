<?php
namespace App\Model;
use App\Database\Logger;

class Post{
    function get(){
        $db = new Logger;
        $db->get();
        echo "Hello Post Model! <br>";
    }
}