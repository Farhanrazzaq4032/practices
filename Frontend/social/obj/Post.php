<?php
class Post extends DB{
    function save_post($user_id, $post){
        $post = clean_string($post);
        if($post!=""){

            $query = "INSERT INTO post (user_id, comment) VALUES ('$user_id', '$post')";
            $this->insert($query);
            set_flash("save post");
            redirect();
        }
        else{
            set_flash("Enter Comment");
            redirect();
        }
    }

    function fetchAll(){
        $query = "SELECT * FROM post";
        $data = $this->select($query);
        return $data;
    }
}
?>