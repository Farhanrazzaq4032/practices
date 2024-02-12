<?php
class Login extends DB{
    private $email, $pass;
    public $msg;
    function __construct($email, $pass){
        $this->email = $email;
        $this->pass = $pass;
    }

    function validation(){
        if($this->email!="" and $this->pass!=""){
            $pass = hash_password($this->pass);
            $query = "SELECT * FROM users WHERE emp_email = '$this->email' and emp_pass = '$pass'";
            $r = $this->select($query, true);
                if(isset($r["id"])){
                    $_SESSION["user"] = $r["id"];
                  $this->msg = error_message("Login Successfull","success"); 
                    return true;
                }
                else
                {
                  $this->msg = error_message("Invalid User!","error"); 
                  return false;

                }
        } else {
            $this->msg = error_message("Enter correct details","error"); 
            return false;

        }       
    }
}
?>