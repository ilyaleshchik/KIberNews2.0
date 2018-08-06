<?php
	require "../db.php";
	$data = $_POST;
	if(isset($data['do_sign']))
	{
		$err = array();
		if (trim($data['l'] == '')) 
		{
			$err[] = "You did not enter your username";
		}
		if(trim($data['e']) == '')
		{
			$err[] = 'You did not enter your email!!';
		}
		if(trim($data['p'])=='')
		{
			$err = 'You did not enter your password!';
		}
		if (preg_match('/\w*@(yandex.com|mail.ru|gmail.com)/',$data['e'])) 
		{
			# code...
			
		}else
		{
			$err[] = 'Our site support only "mail.ru, gmail.com, yandex.com" mails ';
		}
		
		if(R::count('users',"login = ?", array($data['l'])) > 0)
		{
			$err[] = 'Account with this login already exists!';
		}
		if(R::count('users',"email = ?", array($data['e'])) > 0)
		{
			$err[] = 'You have already registered with Email!';
		}
		if(empty($err))
		{
			$user = R::dispense('users');
			$user->login = $data['l'];
			$user->email = $data['e'];
			$user->password  = md5($data['p']);
			R::store($user);
			header('Location: /pages/signup.php');
		}else
		{
			echo '<div id="err">'.array_shift($err).'</div>';
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/login.css">	
<meta charset="utf-8">
<title>Registration</title>
</head>
<body>
<div id="gl">	
	<form action="../pages/login.php" method="POST">
		<div class="window">
				<p>Sign up</p>
			<div class="login">
				<input type="text" name="l" placeholder="Username" value="<?php echo @$data['l'] ?>">
			</div>
			<div class="email">
				<input type="text" name="e" placeholder="Email" value="<?php echo @$data['e'] ?>" />
			</div>
			<div class="password">
				<input type="text" name="p" placeholder="Password" />
			</div>		
			<div class="dologin">
				<input type="submit" value="Registration" name="do_sign" />
			</div>
		</div>
	</form>
</div>
</body>
</html>