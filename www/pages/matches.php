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
					<a href="../index.php"><li>home</li></a>
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
			<div class="window">
				<div class="ligue">
					<p>EU Qualifier: Play Off</p>
				</div>
				<div class="firstteam">
					<p class="teamone"><strong>OpTic Gaming</strong></p>
					<p class="country">United States</p>
					<img src="../img/country.svg" alt="">
				</div> 
				<div class="time">
					<p>18:00</p>
					<p>27.08.2018</p>
				</div>
				<div class="secondteam">
					<p class="teamtwo"><strong>OpTic Gaming</strong></p>
					<img src="../img/country.svg" alt="">
					<p class="country">United States</p>
				</div> 
			</div>
		</div>
	</section>
	<!--Второй матч-->
	<section>
		<div class="container">
			<div class="windowtwo">
				<div class="ligue">
					<p>EU Qualifier: Play Off</p>
				</div>
				<div class="firstteam">
					<p class="teamone"><strong>OpTic Gaming</strong></p>
					<p class="country">United States</p>
					<img src="../img/country.svg" alt="">
				</div> 
				<div class="time">
					<p>18:00</p>
					<p>27.08.2018</p>
				</div>
				<div class="secondteam">
					<p class="teamtwo"><strong>OpTic Gaming</strong></p>
					<img src="../img/country.svg" alt="">
					<p class="country">United States</p>
				</div> 
			</div>
		</div>
	</section>
<!--Третий матч-->
	<section>
		<div class="container">
			<div class="windowthree">
				<div class="ligue">
					<p>EU Qualifier: Play Off</p>
				</div>
				<div class="firstteam">
					<p class="teamone"><strong>OpTic Gaming</strong></p>
					<p class="country">United States</p>
					<img src="../img/country.svg" alt="">
				</div> 
				<div class="time">
					<p>18:00</p>
					<p>27.08.2018</p>
				</div>
				<div class="secondteam">
					<p class="teamtwo"><strong>OpTic Gaming</strong></p>
					<img src="../img/country.svg" alt="">
					<p class="country">United States</p>
				</div> 
			</div>
		</div>
	</section>
	<!--Четвертый матч-->
	<section>
		<div class="container">
			<div class="windowfour">
				<div class="ligue">
					<p>EU Qualifier: Play Off</p>
				</div>
				<div class="firstteam">
					<p class="teamone"><strong>OpTic Gaming</strong></p>
					<p class="country">United States</p>
					<img src="../img/country.svg" alt="">
				</div> 
				<div class="time">
					<p>18:00</p>
					<p>27.08.2018</p>
				</div>
				<div class="secondteam">
					<p class="teamtwo"><strong>OpTic Gaming</strong></p>
					<img src="../img/country.svg" alt="">
					<p class="country">United States</p>
				</div> 
			</div>
		</div>
	</section>
		<!--Пятый матч-->
	<section>
		<div class="container">
			<div class="windowfife">
				<div class="ligue">
					<p>EU Qualifier: Play Off</p>
				</div>
				<div class="firstteam">
					<p class="teamone"><strong>OpTic Gaming</strong></p>
					<p class="country">United States</p>
					<img src="../img/country.svg" alt="">
				</div> 
				<div class="time">
					<p>18:00</p>
					<p>27.08.2018</p>
				</div>
				<div class="secondteam">
					<p class="teamtwo"><strong>OpTic Gaming</strong></p>
					<img src="../img/country.svg" alt="">
					<p class="country">United States</p>
				</div> 
			</div>
		</div>
	</section>
			<!--Шестой матч-->
	<section>
		<div class="container">
			<div class="windowsix">
				<div class="ligue">
					<p>EU Qualifier: Play Off</p>
				</div>
				<div class="firstteam">
					<p class="teamone"><strong>OpTic Gaming</strong></p>
					<p class="country">United States</p>
					<img src="../img/country.svg" alt="">
				</div> 
				<div class="time">
					<p>18:00</p>
					<p>27.08.2018</p>
				</div>
				<div class="secondteam">
					<p class="teamtwo"><strong>OpTic Gaming</strong></p>
					<img src="../img/country.svg" alt="">
					<p class="country">United States</p>
				</div> 
			</div>
		</div>
	</section>
		<!--Седьмой матч-->
	<section>
		<div class="container">
			<div class="windowseven">
				<div class="ligue">
					<p>EU Qualifier: Play Off</p>
				</div>
				<div class="firstteam">
					<p class="teamone"><strong>OpTic Gaming</strong></p>
					<p class="country">United States</p>
					<img src="../img/country.svg" alt="">
				</div> 
				<div class="time">
					<p>18:00</p>
					<p>27.08.2018</p>
				</div>
				<div class="secondteam">
					<p class="teamtwo"><strong>OpTic Gaming</strong></p>
					<img src="../img/country.svg" alt="">
					<p class="country">United States</p>
				</div> 
			</div>
		</div>
	</section>
	<!--Восьмой матч-->
	<section>
		<div class="container">
			<div class="windowseight">
				<div class="ligue">
					<p>EU Qualifier: Play Off</p>
				</div>
				<div class="firstteam">
					<p class="teamone"><strong>OpTic Gaming</strong></p>
					<p class="country">United States</p>
					<img src="../img/country.svg" alt="">
				</div> 
				<div class="time">
					<p>18:00</p>
					<p>27.08.2018</p>
				</div>
				<div class="secondteam">
					<p class="teamtwo"><strong>OpTic Gaming</strong></p>
					<img src="../img/country.svg" alt="">
					<p class="country">United States</p>
				</div> 
			</div>
		</div>
	</section>
		<!--Девятый матч-->
	<section>
		<div class="container">
			<div class="windownine">
				<div class="ligue">
					<p>EU Qualifier: Play Off</p>
				</div>
				<div class="firstteam">
					<p class="teamone"><strong>OpTic Gaming</strong></p>
					<p class="country">United States</p>
					<img src="../img/country.svg" alt="">
				</div> 
				<div class="time">
					<p>18:00</p>
					<p>27.08.2018</p>
				</div>
				<div class="secondteam">
					<p class="teamtwo"><strong>OpTic Gaming</strong></p>
					<img src="../img/country.svg" alt="">
					<p class="country">United States</p>
				</div> 
			</div>
		</div>
	</section>
		<!--Десятый матч-->
	<section>
		<div class="container">
			<div class="windowten">
				<div class="ligue">
					<p>EU Qualifier: Play Off</p>
				</div>
				<div class="firstteam">
					<p class="teamone"><strong>OpTic Gaming</strong></p>
					<p class="country">United States</p>
					<img src="../img/country.svg" alt="">
				</div> 
				<div class="time">
					<p>18:00</p>
					<p>27.08.2018</p>
				</div>
				<div class="secondteam">
					<p class="teamtwo"><strong>OpTic Gaming</strong></p>
					<img src="../img/country.svg" alt="">
					<p class="country">United States</p>
				</div> 
			</div>
		</div>
	</section>
</body>
</html>