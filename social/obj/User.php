<?php
class User extends DB{

    function save_user($name, $email, $pass){
        $name = clean_string($name);
        $email = clean_string($email);
        $pass = clean_string($pass);

        if($name == "" || $email == "" || strlen($pass) < 6){
            set_flash("Please fill all the field");
            redirect("register");
        }
        else{
            $pass = hash_password($pass);
            $name = $name;
            $query ="INSERT INTO users (emp_name, emp_email, emp_pass) VALUES ('$name', '$email', '$pass')";
            $this->insert($query);
            set_flash("You are Successfull Registerd");
            redirect("register");
        }

    }

    function get_user($user_id){
        $query = "SELECT * FROM users WHERE id = '$user_id'";
        $data = $this->select($query, true);
        return $data;
    }
}
?>