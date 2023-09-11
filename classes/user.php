<?php
include 'database.php';
class User{
    public $db;
    public function __construct(){
        $this->db=new Database();
    }
    //insert post
    public function insertPost($data){
        //print_r($data);        
		//print_r($_FILES);
        $postTxt=$data['SendPTxt'];
        $postId=$data['submitPost'];
        $postImage=$data['SendPTxt'];
        $sql="INSERT INTO post (writerId,postText) VALUES ('$postId','$postTxt')";
        mysqli_query($this->db->link,$sql);
        header("location:?");
    }
    // show public post
    public function ShowPublicPost(){
        $sql="SELECT * FROM post WHERE deletionStatus='0' ORDER BY id DESC";
        $result=mysqli_query($this->db->link,$sql);
        return $result;
    }
    //show user with id
    public function selectUseWithId($data){
        $id=$data;
        $sql="SELECT * FROM user WHERE id='$id'";
        $result=mysqli_query($this->db->link,$sql);
        return $result;
    }
    
    //show all user
    public function ShowAllUsr(){
        $sql="SELECT * FROM user WHERE activeStatus=1 AND deletionStatus=0 ";
        $result=mysqli_query($this->db->link,$sql);
        return $result;
    }
    // select chat friend
    public function selectChatFrnd($id){
        $sql="SELECT * FROM user WHERE id='$id'";
        $result=mysqli_query($this->db->link,$sql);
        if($row=mysqli_fetch_assoc($result)){
            $_SESSION['sb_frndId']=$row['id'];
            $_SESSION['sb_frndName']=$row['name'];
            $_SESSION['sb_frndImage']=$row['image'];
            header("location:?");
        }else{
            header("location:message.php");
        }
    }
    // select msg
    public function selectMsg($id){
        $myId=$_SESSION['sb_id'];
        $sql="SELECT * FROM msg WHERE (senderId='$id' AND receiverId='$myId') OR (senderId='$myId' AND receiverId='$id')";
        $result=mysqli_query($this->db->link,$sql);        
        return $result;
    }
    //send my msg
    public function sendMyMsg($data){
        //send msg
        $myId=$_SESSION['sb_id'];
        $receiveId=$data['sendMyMsg'];
        $myMsg=$data['SendPTxt'];
        $sql="INSERT INTO msg (senderId,receiverId,msg) VALUES ('$myId','$receiveId','$myMsg')";
        mysqli_query($this->db->link,$sql);
        //serial list
            //if duplicate
                //FRM
                    //delete old serial
        $sql="SELECT * FROM msgserial WHERE myId=$myId AND frndId=$receiveId";
        $result=mysqli_query($this->db->link,$sql);
        while($row=mysqli_fetch_assoc($result)){
            $sql="DELETE FROM msgserial WHERE myId=$myId AND frndId=$receiveId";
            mysqli_query($this->db->link,$sql);
        }
                    // insert new serial
        $sql="INSERT INTO msgserial (myId,frndId) VALUES ($myId,$receiveId)";
        mysqli_query($this->db->link,$sql);
            //FRF
                    //delete old serial
        $sql="SELECT * FROM msgserial WHERE myId=$receiveId AND frndId=$myId";
        $result=mysqli_query($this->db->link,$sql);
        while($row=mysqli_fetch_assoc($result)){
            $sql="DELETE FROM msgserial WHERE myId=$receiveId AND frndId=$myId";
            mysqli_query($this->db->link,$sql);
        }
                    // insert new serial
        $sql="INSERT INTO msgserial (myId,frndId) VALUES ($receiveId,$myId)";
        mysqli_query($this->db->link,$sql);

        header("location:?#sendBox");
    }
    // my serial
    public function mySerial($id){
        $sql="SELECT * FROM msgserial WHERE myId=$id ORDER BY id DESC";
        $result=mysqli_query($this->db->link,$sql);
        return $result;
    }
}
?>