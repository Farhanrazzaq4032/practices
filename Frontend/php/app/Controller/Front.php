<?php
namespace App\Controller;

use App\Model\User;
use App\Model\Post;
use App\Model\Cart;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dompdf\Dompdf;
class Front{
    
    function home(){
        $user = new User;
        $post = new Post;
        $cart = new Cart;
        $data = array(
            "name" => "Hassan",
            "city" => "Khanewal",
        );
        $meta = array(
            "page_title" => "Home Page"
        );
        view("front/home", array("user"=>$data, "meta"=>$meta));
    }

    function saveData(){
        print_r($_POST);
        header("location:/");
    }

    function about(){
        $meta = array(
            "page_title" => "About Us"
        );
        view("front/about", ["meta"=>$meta]);
    }

    function contact(){
        $meta = array(
            "page_title" => "Contact Us"
        );
        view("front/contact", ["meta"=>$meta]);
    }

    function notFound(){
        $meta = array(
            "page_title" => "Page Not Found"
        );
        view("front/404", ["meta"=>$meta]);
    }

    function policy(){
        echo "Temrs of Policy";
    }

    function post(){
        echo "Blog Post";
    }

}
