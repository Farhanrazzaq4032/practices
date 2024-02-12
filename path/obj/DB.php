<?php
class DB {
    private $con;
    protected $result = null;
    function connection(){
        $this->con = mysqli_connect(HOST, USER, PASS, DATA_BASE);
    }

    function queryRun($sql){
        $this->connection();
        if($this->con){
            $this->result = mysqli_query($this->con, $sql);
            return true;
        }
        else{
            echo "database is not connected";
            return false;
        }

    }

    function inser($sql){
        $this->queryRun($sql);
    }
}

?>