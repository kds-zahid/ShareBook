<?php
class Database{
    public $link;
    public function __construct(){
        $host="localhost";
        $userName="root";
        $password="";
        $databaseName="sharebook";
        $this->link=mysqli_connect($host,$userName,$password,$databaseName);
    }
}
?>