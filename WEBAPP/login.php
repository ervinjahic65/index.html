<?php include('server.php') ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">

<link href="fa/css/font-awesome.min.css" type="text/css" rel="stylesheet">

<link href="css/style2.css" type="text/css" rel="stylesheet">

</head>

<body>

<div id="wrapper">
	
	<div id="header">
	
		<h1>Toyota Quality Management-Toyota</h1>
    	
    </div><!-- end #header -->
	
	<div id="nav">
	
		<ul>
        	<li><a href="login.php" >Home</a></li>
            <li><a href="register.php">Contact</a></li>
		</ul>
	
	</div><!-- end #nav -->
	
	<div id="main">
    
		<div class="block">
        
			<h1><strong>Toyota i okoliš</strong></h1>
        
		<p>Mi brinemo o okolišu. To je središte onoga tko smo i što radimo. Predani smo stalnom smanjenju utjecaja našeg poslovanja na svijet oko nas i stalno razvijamo tehnologije, proizvode i načine rada koji su blaži prema okolišu i doprinose društvu u cjelini. Ponosimo se na povijest naših ekoloških postignuća – na primjer, mi smo prva kompanija koja je postavila temelje za recikliranje vozila, prva koja ima tvornicu koja otpad ne izbacuje u zemlju, i prva koja masovno proizvodi hibridno vozilo i limuzinu na vodikove ćelije s nultom razinom emisija. Iako smo postigli značajne uspjehe, želimo učiniti još više i inspirirati druge, sebi postaviti nove i veće ciljeve zaštite okoliša kako bi izgradili bolju budućnost, <a href="index2.php">Pročitajte više</a></p>
        
		</div>
        
		<div class="block">
        
			<h2><strong>Flotna prodaja</strong></h2>
        
       		<img src="img/vs.jpg" width="621" height="311" alt="" class="sidePic"> 
            
        </div>
        
    </div><!-- end #main -->
	
	<div id="sidebar">
	
		<h2>Interni kvalitet:</h2>
        
        	<ol>
				<li>utvrditi tržište preduzeća</li>
				<li>uspostaviti odnose proizvođač – kupac</li>
				<li>raditi ispravno prvi put i svaki put</li>
				<li>programirati kontinuirano poboljšanje kvaliteta</li>
				<li>sistematično i dokumentirano informirati o kvalitetu</li>
				<li>provoditi kontinuirano obrazovanje o kvalitetu</li>
				<li>preduzeće inicira i stalno provodi TQM</li>
			</ol>

			<h3>Login:</h3>
            
            <form action="login.php" method="POST">

            	<?php include('errors.php'); ?>

          		<label>Username:</label>
  				<input type="text" name="username" placeholder="Write your username...">
          		
  				<label>Password:</label>
  				<input type="password" name="password" placeholder="Password">
          		<button type="submit" class="btn" name="login_user">Login</button>
          		<p>
					Not yet a member? <a href="register.php">Sign up</a>
				</p>
		  	</form>
	
				
	
	</div><!-- end #sidebar -->
	
	<div id="footer">
		<p>Find a new crossover at a Toyota dealership near you, or build & price your own C-HR online today. &copy; </p>
	</div><!-- end #footer -->
	
</div><!-- end #wrapper -->


</body>
</html>












