<?php
	//my send msg
	if(isset($_POST['sendMyMsg'])){
		$objUsr->sendMyMsg($_POST);
	}
	//select msg from all public frnd list and my serial frnd list
	if(isset($_POST['frndMessage'])){
		$objUsr->selectChatFrnd($_POST['frndMessage']);
	
	}
	// select chat
	$msgResult=$objUsr->selectMsg($_SESSION['sb_frndId']);
	while($msgRow=mysqli_fetch_assoc($msgResult)){
		if($_SESSION['sb_id']==$msgRow['senderId']){
			//my send msg
		?>
		<div class="msgChat" style=''>
			<div class="myMsg">
				<div class="myText">
				<?php
					echo $msgRow['msg'];
				?>
				</div>
				<div class="myPic">
					<center>
					<?php
					if(isset($_SESSION['sb_image'])){
						
					?>
						<img style=" " src="<?php echo $_SESSION['sb_image'];?>" alt="" />
					<?php
					}
					?>
					</center>
				</div>
			</div>
		</div>
		<?php
		}else{
			//frnd send msg
		?>
		<div class="msgChat" style=''>
			<div class="frndMsg">
				<div class="frndText">
				<?php
					echo $msgRow['msg'];
				?>
				</div>
				<div class="frndPic">
					<center>
					<?php
					if(isset($_SESSION['sb_frndImage'])){
						
					?>
						<img style=" " src="<?php echo $_SESSION['sb_frndImage'];?>" alt="" />
					<?php
					}
					?>
					</center>
				</div>
			</div>
		</div>
		<?php
		}
	?>

	<?php
	}
?>








<!--send msg-->
<div class="mySendBody" style="" id="sendBox">
        <form method="post" action="" enctype="multipart/form-data">
            <div class="postBodyMain">
			<textarea name="SendPTxt" type="text" id="" style='width:100%; max-width:100%; background:none; border:none;'  rows="1" placeholder='type here'></textarea>
            </div>
            <div class="postAction">
                    <button type="submit" name="sendMyMsg" value="<?php echo $_SESSION['sb_frndId'];?>" style="background:none; border:none;" title="send">
                        <i class="fa fa-send"></i>
                    </button>
            </div>
        </form>
	
</div>