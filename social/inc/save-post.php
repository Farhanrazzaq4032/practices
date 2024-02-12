<?php
if(check_method("post")){
    $User = new Post();
    $User->save_post($_SESSION["user"], $_POST["comment"]);
}

?>