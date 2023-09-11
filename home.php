<?php
session_start();
if(empty($_SESSION['sb_id'])){
	header("location:index.php");
}else{
		
	include 'header.php';
	include 'classes/user.php';
	$objUsr=new User();
?>
	<section class="content">
		<div class="slide">
			<marquee>gp 4G Grameenphone</marquee>
			<img src="4g.png">
			<img src="4g.png">
		</div>
		<div class="contentBody">
			<div class="contentMain">
				<?php
				if(isset($pages)){
					include $pages;
				}else{
					include 'pages/home.php';
				}
				
				?>			
			</div>
		</div>
	</section>
<?php
	include 'footer.php';
}
?>