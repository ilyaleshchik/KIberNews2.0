<?php
	require "../db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Matches</title>
	<link rel="stylesheet" href="../css/matches.css">
</head>
<body>
	<header>
		<div class="container">
			<div class="head clearfix">
			<div class="logo">
				<img src="../img/logo.png" alt="">
			</div>
			<nav>
				<div class="menu">
					<ul>
					<a href="../index.php"><li>Главная</li></a>
						<a href="#"><li>Новости</li></a>
						<a href="#"><li>События</li></a>
						<a href="#"><li>О нас</li></a>
					</ul>
				</div>
			</nav>
		<?php if(isset($_SESSION['loged_user'])) : ?>
			<div class="signup">
				<a href="pages/logout.php">Выйти</a>
			</div>
		<?php else : ?>	
			<div class="signup">
				<a href="pages/signup.php">Войти</a>
			</div>
	    <?php endif; ?>
		</div>
			</div>
	</header>
	<section>
		<div class="container">
			<?php 
				$matches  = mysqli_query($connection,'SELECT * FROM  `matches`');
				while($cat = mysqli_fetch_assoc($matches))
				{
					?>
			 <div class="window">
				<div class="ligue">
					<p><?php echo $cat['ligue'];  ?></p>
				</div>
				<div class="firstteam">
					<p class="teamone"><strong><?php echo $cat['firstTeam'];  ?></strong></p>
					<p class="country"><?php echo $cat['FirstCountry'];  ?></p>
					<img src="../img/<?php echo $cat['fcimg'];  ?>" alt="">
				</div> 
				<div class="time">
					<p><?php echo $cat['time'];  ?></p>
					<p><?php echo $cat['day'];  ?></p>
				</div>
				<div class="secondteam">
					<p class="teamtwo"><strong><?php echo $cat['secondTeam'];  ?></strong></p>
					<img src="../img/<?php echo $cat['dcimg'];  ?>" alt="">
					<p class="country"><?php echo $cat['SecondCountry'];  ?></p>
				</div> 
			</div>
					<?php
				}
			?>
		</div>

	</section>
</body>
</html>