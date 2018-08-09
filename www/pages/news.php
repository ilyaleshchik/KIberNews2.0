<?php
	require "../db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KIberNews</title>
	<link rel="stylesheet" href="../css/news.css">
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
						<a href="matches.php"><li>Матчи</li></a>
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
	<div class="container clearfix">
		<div class="large">
			<div class="article">
					<?php
						$text = mysqli_query($connection,"SELECT * FROM  `news` ");
						$cat = mysqli_fetch_assoc($text);
					?>
					<img src="../img/<?php echo $cat['img'];  ?>" alt="article">
				<div class="newstext">
					<p><?php echo $cat['alltext']; ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="prevarts">
			<?php
			$prev = mysqli_query($connection,"SELECT * FROM  `prev` ORDER BY 'id' DESC LIMIT 0,3");
			while ($cat = mysqli_fetch_assoc($prev)) 
			{
				?>
						<div class="prev">
							.
							<p class="ntxt"><?php echo $cat['headtxt']; ?> </p>

							<img src="../img/<?php echo $cat['img']; ?>" alt="">
							<p class="butt"><a href="article.php?id=<?php echo $cat['id']; ?>">Далее...<a></p>
						</div>
					<?php
			}
			?>
		</div>
	</div>
</section>
</body>
</html>