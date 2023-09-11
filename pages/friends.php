<?php
    $resultFriends=$objUsr->ShowAllUsr();
    while($row=mysqli_fetch_assoc($resultFriends)){
       //add virtual?
?>
<form name="frndMsgForm" action="messageChat.php?#sendBox" method="post">
    
    <div class="friend">
        <button style="background:none; border:none; width:100%;" type="submit" name="frndMessage" value="<?php echo $row['id'];/*add virtual */?>">
            <div class="img">
                <center>
				<?php
				if(isset($row['image'])){
				?>
					<img style=" " src="<?php echo $row['image'];?>" alt="" />
				<?php
				}
				?>
				</center>                
            </div>
            <div class="frndName">
                <p><?php echo $row['name'];?></p>
                
               
                    
            </div>
            <div class="frndChatIcn"><i class="fa fa-comment"></i>
            </div>
        </button>
    </div>

</form>
<?php
    }
?>