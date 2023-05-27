<!DOCTYPE php>

<?php
$error = false;
if (isset($_POST['login'])){
	$username = preg_replace ('/[^A-Za-z]/', '',$_POST['username']);
	$password = md5 ($_POST['password']);
	if(file_exists('users/' . $username . '.xml')) {
		$xml = new SimpleXMLElement ('users/' . $username . '.xml', 0, true);
		if($password == $xml->password) {
			session_start();
			$_SESSION['username'] = $username;
			header('Location: index.php');
			die;
		}
	}
	$error = true;
}

?>

<?php 
$errors = array(); 
				if(isset ($_POST['signup'])) {
					$username = preg_replace ('/[^A-Za-z]/', '',$_POST['username']);
					$email = $_POST['email'];
					$password = $_POST['password'];

					if(file_exists('users/' . $username . '.xml')) {
						$errors[] = 'Username already exists';
					}
					if ($username == '') {
						$errors[] = 'Username is blank';
					}
					if ($email == '') {
						$errors[] = 'Email is blank';
					}
					if ($password == '') {
						$errors[] = 'Password is blank';
					}
					if (count($errors) == 0) {
						$xml = new SimpleXMLElement('<user></user>');
						$xml->addChild('password', md5 ($password));
						$xml->addChild('email', $email);
						$xml->asXml('users/' . $username . '.xml');
						header('Location: login.php');
						die;
					}
				}
      
				?>

<html>
<head>
	<title>Register/Login</title>
	<link rel="stylesheet" type="text/css" href="css/style_login.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body>

<div class="div1">
		<?php
					if ($error) {
						echo "<p>*Invalid username and/or password</p>";
					}
			?>
			<?php if (count ($errors) > 0) {
			echo "<ul>";
			foreach($errors as $e) {
				echo "<li>" . $e . "</li>";
			}
			
		}
		?>
		
</div>

<section>
<div class="main">
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="signup">
			
				<form method="post" >
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="username" placeholder="Username" >
					<input type="email" name="email" placeholder="Email" >
					<input type="password" name="password" placeholder="Password" >
					<input type="submit" value="Sign up" name="signup">
				</form>
			</div>


			<div class="login">
			
				<form method="post" action="">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="username" placeholder="Username" >
					<input type="password" name="password" placeholder="Password" >
					
					<input type="submit" value="Login" name="login">
				</form>
			</div>
	</div>
</section>
	
</body>
</html>

