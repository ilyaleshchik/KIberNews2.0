<?php
	require "../db.php";
	
	$data = $_POST;
	if(isset($data['do_login']))
	{	
		$err = array();
		$user = R::findOne('users', 'login= ?', array($data['log']));
		if($user)
			//пользователь найден
		{
			  if ( md5($data['p']) == $user->password)
			{
				//всё хорошо логиним
				$_SESSION['loged_user'] = $user;
				header('Location: /');
			}else
			{
				$err[] = 'Incorrect password!!!';
			}
		}else
		{
			$err[] = 'Invalid username!!! ';
		}
		if(! empty($err))
		{
			echo '<div id="err">'.array_shift($err).'</div>';
		}
	}
?>
<html>
<head>
<link rel="stylesheet"  href="../css/signup.css" >
<meta charset="utf-8">
<title>LOGIN</title>
</head>
<body>
<div id="all">
<form action="signup.php"  method="POST">
	<div class="window">
		<p>Log in</p>
	<div class="login">
		<input type="text" name="log" placeholder="Username">
	</div>
	<div class="pass">
		<input type="password" name="p" placeholder="Password">
	</div>
	<div class="regist">
		<p>if you don't have account at our site pleas regist at this <a href="login.php">page</a></p>
	</div>
	<div class="dologin">
		<input type="submit" value="SignUp" name="do_login" />	
	</div>
	</div>
</form>	
</div>
</body>
</html>