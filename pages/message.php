<?php
$mySerialResult=$objUsr->mySerial($_SESSION['sb_id']);
while($row=mysqli_fetch_assoc($mySerialResult)){
    $msgFrndIdResult=$objUsr->selectUseWithId($row['frndId']);
    $frndRow=mysqli_fetch_assoc($msgFrndIdResult);
?>

<form name="frndMsgForm" action="messageChat.php" method="post">
    
    <div class="friend">
        <button style="background:none; border:none; width:100%;" type="submit" name="frndMessage" value="<?php echo $frndRow['id'];/*add virtual */?>">
            <div class="img">
                <center>
				<?php
				if(isset($frndRow['image'])){
				?>
					<img style=" " src="<?php echo $frndRow['image'];?>" alt="" />
				<?php
				}
				?>
				</center>                
            </div>
            <div class="frndName">
                <p><?php echo $frndRow['name'];?></p>
                
               
                    
            </div>
        </button>
    </div>

</form>
<?php
}
?>