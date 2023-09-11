<header class="header default">	
        <link rel="stylesheet" href="assets/frontend/css/style.css" />
		<link rel="stylesheet" href="assets/frontend/css/font-awesome.min.css"/>
		<div class="headerLeft">			
			<div class="brand">ShareBook</div>
			<div class="menu">
				<ul class="hdrMenu">
					<li><a href="home.php">Home</a></li>
					<li><a href="profile.php">Profile</a></li>
					<li><a href="message.php">Message</a></li>
					<li><a href="friends.php">Friends</a></li>
				</ul>
			</div>
		</div>
		<div class="headerPicCover" title="<?php echo $_SESSION['sb_name'];?>" href="profile.php">
			<div class="headerPic">
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
</header>