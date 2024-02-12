<?php
namespace App\Service;
use App\Controller\Front;

class Route{
    function actions(){
        return array(
            "" => "Front@home",
            "about" => "Front@about" ,
            "terms-policy" => "Front@policy",
            "contact" => "Front@contact",
            "drawback-of-internet"=>"Front@post",
            "5-types-of-errors"=>"Front@post"
        );
    }


    function request(){
        $uri = $_SERVER["REQUEST_URI"];
        $uri = trim($uri, "/");
        $exp_q = explode("?", $uri);
        $uri_with_hash = explode("#",$exp_q[0]);
        $exp_uri = explode("/", $uri_with_hash[0]);
        return $exp_uri;
    }

    function segment($seg = 1){
        $segs = $this->request();
        if(isset($segs[$seg])){
            return $segs[$seg];
        }else{
           return "";
        }
    }

    function start(){
        $act = $this->actions();
        $seg = $this->segment("1");
        $found = "";
        foreach($act as $route => $obj){
            if($route == $seg){
                $found = $obj;
                break;
            }
        }
        if($found != ""){
            $obj = explode("@", $found);
            $className = $obj[0];
            $methodName  = $obj[1];
                
            $class = 'App\\Controller\\'. $className;
            if(!class_exists($class)){
                echo "Object Not Found!";
                die();
            }
            $o = new $class;
            if(!method_exists($o, $methodName)){
                echo "Method Not Found!";
                die();
            }
            $o->{$methodName}();
        }else{
            echo "404 Not Found!";
        }
    }

    function get(){
        $seg = $this->segment("1");
        $Front = new Front;
        if($seg==""){
            $Front->home();
        }elseif($seg=="about"){
            $Front->about();
        }
        elseif($seg=="home"){
            $Front->home();
        }
        elseif($seg=="contact"){
            $Front->contact();
        }elseif($seg=="save-data"){
            $Front->saveData();   
        }else{
            $Front->notFound();
        }
    }
}