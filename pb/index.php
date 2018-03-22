<html>
<head>
	<title>pb</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="wrap">
		<div id="search">
			<img src="img/search.png"><br/><br/>
			<a href="insert.php"><img src="img/add.png" height="50px" title="Add new contact"></a>
			<a href="remove.php"><img src="img/remove.png" height="50px" title="Remove contact"></a>
			<form action="#" method="GET">
				<input type="text" name="criteria" placeholder="Criteria...">
				<input type="submit" value="Search"><br/>
			</form>
		</div>
		<?php
			include 'inc/getResults.php';
		?>
	</div>
</body>
</html>