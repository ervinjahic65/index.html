<?php
	date_default_timezone_set('Europe/Copenhagen');
	include 'dbh.inc.php';
	include 'comments.inc.php';
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Title</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>

<body>

<div id ="wrapper">	

	<div id="header">
	
		<h1>Toyota Quality Management-Toyota</h1>
    	
    </div><!-- end #header -->
	
	<div id="nav">
	
		<ul>
        	<li><a href="login.php" >Home</a></li>
            <li><a href="register.php">Contact</a></li>
		</ul>
	
	</div><!-- end #nav -->

	<br><br>

	<p>Ostavite komentar</p>

<?php
	echo "<form method='POST' action='".getLogin($conn)."'>
		<input type='text' name='uid'>
		<input type='password' name='pwd'>
		<button type='submit' name='loginSubmit'>Login</button>
	</form>";
	echo "<form method='POST' action='".userLogout()."'>
		<button type='submit' name='logoutSubmit'>Log out</button>
	</form>";

	if (isset($_SESSION['id'])) {
		echo "You are logged in!";
	}else {
		echo "You are NOT logged in!";
	}
?>
<br><br>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
<br><br>	
<?php
	if (isset($_SESSION['id'])) {
			echo "<form method='POST' action='".setComments($conn)."'>
			<input type='hidden' name='uid' value='".$_SESSION['id']."'>
			<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
			<textarea name='message'></textarea><br>
			<button type='submit' name='commentSubmit'>Comment</button>
		</form>";
	}else {
		echo "You need to be logged in to comment!
		<br><br>";
	}

getComments($conn);
?>

</div>

</body>

</html>