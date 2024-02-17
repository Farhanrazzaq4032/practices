<?php
if(check_method("get")){
    $delete_post = new DeletePost();
    $delete_post->delete_post($_GET["post_id"]); 
    
}

?>