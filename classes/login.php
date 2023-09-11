<?php
session_start();
include 'database.php';
class Login{
    public $db;
    public function __construct(){
        $this->db=new Database();
    }
    public function selectData($data){
        $email=$data['email'];
        $password=$data['password'];
        $sql="SELECT * FROM user WHERE email='$email' AND password='$password' ";
        $result=mysqli_query($this->db->link,$sql);
        if($row=mysqli_fetch_assoc($result)){
            $_SESSION['sb_id']=$row['id'];
            $_SESSION['sb_email']=$row['email'];
            $_SESSION['sb_name']=$row['name'];
            $_SESSION['sb_image']=$row['image'];
            $_SESSION['sb_deletionStatus']=$row['deletionStatus'];
            $_SESSION['sb_activeStatus']=$row['activeStatus'];
            header("location:home.php");
        }else{
            return 'email and password  not matched!';
        }
    }
}
?>