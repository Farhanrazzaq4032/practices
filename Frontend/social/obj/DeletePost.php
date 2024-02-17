<?php
class DeletePost extends DB{

    function delete_post($id){
        $query = "DELETE FROM post WHERE id = '$id'";
        $data = $this->delete($query);
            set_flash("Delete");
            redirect();
    }
}
?>