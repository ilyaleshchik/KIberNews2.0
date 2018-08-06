<?php
	require "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/animate.css">
			 <script src="js/wow.min.js"></script>
     <script>
    	  new WOW().init();
     </script>	
	<meta charset="UTF-8">
	<title>KiberNews v2.0</title>
</head>
<body>
	<header>
		<div class="container">
			<div class="head clearfix">
			<div class="logo">
				<img src="img/logo.png" alt="">
			</div>
			<nav>
				<div class="menu">
					<ul>
					<a href="pages/matches.php"><li>matches</li></a>
						<a href="#"><li>news</li></a>
						<a href="#"><li>developments</li></a>
						<a href="#"><li>about</li></a>
					</ul>
				</div>
			</nav>
		<?php if(isset($_SESSION['loged_user'])) : ?>
			<div class="signup">
				<a href="pages/logout.php">log out</a>
			</div>
		<?php else : ?>	
			<div class="signup">
				<a href="pages/signup.php">sign up</a>
			</div>
	    <?php endif; ?>
		</div>
			</div>
	</header>

	<section>
		<div class="container">
			<div class="tournaments clearfix">
				<h1>Tournaments</h1>
			</div>
<?php
	$ts = mysqli_query($connection,"SELECT * FROM  `tournaments` ");
	while($tour = mysqli_fetch_assoc($ts))
	{
		?>
		<div class="allts">			
			<div class="tourinfo clearfix">
				<div class="esl clearfix">
					<img src="img/esl.jpg" alt="esl">
					<p><?php echo $tour['status']; ?></p>
					<p class="price"><?php echo $tour['price']; ?></p>
				</div>
			</div>
		</div>
	<?php
	}
?>

	</section>
	<?php
		$text = mysqli_query($connection,"SELECT * FROM  `news` ");
		$cat = mysqli_fetch_assoc($text);
	?>
	<section>
		<div class="container">
			<div class="news clearfix">
				<h1>news</h1>
			</div>
			<div class="newsinfo ">
				<img src="img/<?php echo $cat['img'];  ?>" alt="logo">
			</div>
			<div class="newstext clearfix">
				<p><?php echo $cat['headertext'] ?></p>
			<div class="readmore clearfix">
				<a href="#">read more</a>
			</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="container ">
			<div class="imges">
			<div class="vk clearfix">
				<a href="vk.com"><img class="wow fadeInLeft"  src="img/vk.png" alt="Vk"></a>
				<p class="wow fadeInRight">Our group at vk</p>
			</div>
			<div class=" youtube clearfix">
				<a href="">
					<img class="wow fadeInLeft" src="img/youtube.png" alt="Youtube">
				</a>
				<p class="wow fadeInRight">Our channel at youtube</p>
			</div>
			<div class="twitch">
				<a href="">
					<img class="wow fadeInLeft"  src="img/twitch.png" alt="twitch">
				</a>
				<p class="wow fadeInRight	">Our streams at twitch</p>
			</div>
			</div>
		</div>
	</footer>
</body>
</html>