<?php
if(check_method("post")){
    $User = new User();
    $User->save_user($_POST["name"], $_POST["email"], $_POST["pass"]);
    exit;
}
?>