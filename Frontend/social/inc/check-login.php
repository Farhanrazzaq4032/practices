

<?php
if(check_method("post")){
    $Login = new Login($_POST["email"], $_POST["pass"]);
    if($Login->validation()){
    redirect("");
    }
    else{
        set_flash($Login->msg);

    }
} else{

    $note = error_message("Request Failed", "error");
    set_flash($note);
}
redirect("");

?>