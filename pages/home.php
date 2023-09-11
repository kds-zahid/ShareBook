<?php
    if(isset($_POST['pSendHide'])){
        $_SESSION['pSendStutus']='hide';
        header("location:?");
    }
    if(isset($_POST['pSendShow'])){
        $_SESSION['pSendStutus']='show';
        header("location:?");
	}
	//inser post
	if(isset($_POST['submitPost'])){
		$objUsr->insertPost($_POST);
	}
	$PostResult=$objUsr->ShowPublicPost();
?>
<div class="postSendBody" style="//visibility:hidden;">
	<section class="sendSection">
		<div class="postUser">
            <div style="float:right;">
                <form method="post">                
                    <button style="background:none; border:none;" name="<?php if(isset($_SESSION['pSendStutus']) && ($_SESSION['pSendStutus']=='hide')){ echo 'pSendShow';}else{ echo 'pSendHide';}?>" title="<?php if(isset($_SESSION['pSendStutus']) && ($_SESSION['pSendStutus']=='hide')){ echo 'Show';}else{ echo 'Hide';}?>" value='true' type='submit'>
                        <i class="fa fa-<?php if(isset($_SESSION['pSendStutus']) && ($_SESSION['pSendStutus']=='hide')){echo 'plus';}else{ echo 'remove';}?>"></i>
                    </button>
                </form>
            </div>
			<div class="pic">
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
			<div class="name"><?php echo $_SESSION['sb_name'];?></div>
		</div>
	</section>
	<!--send post section-->
	<section style="<?php if(isset($_SESSION['pSendStutus']) && ($_SESSION['pSendStutus']=='hide')){echo 'visibility:hidden; position:fixed;';} ?>">
        <form method="post" action="" enctype="multipart/form-data">
            <div class="postBodyMain">
			<textarea name="SendPTxt" id="" style='width:100%; background:none; border:none;'  rows="3" placeholder='type here' required ></textarea>
            </div>
            <div class="postAction">
                <div class="light">
					<input name="file" id="file" type="file" accept=".jpeg,.jpg,.png" />
                </div>
                <div class="block">                   
                    <button type="submit" name="submitPost" value="<?php echo $_SESSION['sb_id']; ?>" style="color:#E31AAD; background:none; border:none;" title="send">
                       <i class="fa fa-send"></i>
					</button>
                </div>
            </div>
        </form>
		
	</section>
	
</div>
<!--public-post-->
<?php
while($row=mysqli_fetch_assoc($PostResult)){
	$userResult=$objUsr->selectUseWithId($row['writerId']);
	$userRow=mysqli_fetch_assoc($userResult);
	//print_r($userRow);
?>

<div class="postBody">
	<section>
		<div class="postUser">
			<div class="pic">                
				<center>
				<?php
				if(isset($userRow['image'])){
				?>
					<img style=" " src="<?php echo $userRow['image'];?>" alt="" />
				<?php
				}
				?>
				</center>
            </div>
			<div class="name"><?php echo $userRow['name'];?></div>
		</div>
	</section>
	<section>
		<div class="postBodyMain">
			<center>				
			<?php
				if(isset($row['postImage'])){	
				?>
				<div class="pPic">
					<img class="pImg" style=" " src="<?php echo $row['postImage'];?>" alt="" />
				</div>	
				<?php
				}
				?>				
				<div class="pText" style="margin-top:-7px;">
                    <p>
						<?php echo $row['postText'];?>
					</p>
				</div>			
			</center>
		</div>
		<div class="postAction">
			<div class="light">
				<i class="fa fa-star"></i>
            </div>
			<div class="comment">
				<i class="fa fa-comment"></i>
            </div>
			<div class="block">
				<i class="fa fa-ban"></i>
            </div>
		</div>
	</section>
	
</div>
<?php
}
?>
<div class="postBody">
	<section>
		<div class="postUser">
			<div class="pic">                
				<center>
					<img style=" " src="GP_Ookla_desktop_home_slider.jpg" alt="" />
				</center>
            </div>
			<div class="name">post user name</div>
		</div>
	</section>
	<section>
		<div class="postBodyMain">
			<center>
				<div class="pPic">
					<img class="pImg" style="" src="assets/frontend/img/post/aa.jpg" alt="" />
				</div>	
				<div class="pText">
                    <p>
                        কিছু লেখা। কিছু লেখা। কিছু লেখা। কিছু লেখা। কিছু লেখা। কিছু লেখা। কিছু লেখা। কিছু লেখা। কিছু লেখা। কিছু লেখা। কিছু লেখা। কিছু লেখা। কিছু লেখা। কিছু লেখা। কিছু লেখা। কিছু লেখা। কিছু লেখা। কিছু লেখা। কিছু লেখা। কিছু লেখা। কিছু লেখা। কিছু লেখা। কিছু লেখা। 
					   
						texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext
						texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext
						texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext
						some text. some text. some text.some text. some text. some text. some text.some text. some text. some text. some text.some text. some text. some text. some text.some text. 
                    </p>
				</div>			
			</center>
		</div>
		<div class="postAction">
			<div class="light">
				<i class="fa fa-star"></i>
            </div>
			<div class="comment">
				<i class="fa fa-comment"></i>
            </div>
			<div class="block">
				<i class="fa fa-ban"></i>
            </div>
		</div>
	</section>
	
</div>