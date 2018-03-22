<?php include('server.php') ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact</title>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">

<link href="fa/css/font-awesome.min.css" type="text/css" rel="stylesheet">

<link href="css/style2.css" type="text/css" rel="stylesheet">

</head>

<body>

<div id="wrapper">
	
	<div id="header">
	
		<h1>Auto-moto world</h1>
    	
    </div><!-- end #header -->
	
	<div id="nav">
	
		<ul>
        	<li><a href="login.php">Home</a></li>
          <li><a href="register.php">Contact</a></li>
		</ul>
	
	</div><!-- end #nav -->
	
	<div id="main">
    
		<div class="block">
        
			<h1><strong>Prodaja u SAD-u</strong></h1>
        
		<p>Evo i prodaje u SAD-u u 2012. godini. Donji tabelarni prikaz je dovoljan za sve koje zanimaju ovakvi podaci.  Iz nekog razloga. Kinesko jeste najveće svjetsko automobilsko tržište, no ipak ono u SAD-u vrijedi više novca. U 2012. je prdato 15,38 miliona vozila od toga putničkih 14,49 miliona. Rast je ovo od 13 posto u odnosu na 2011. godinu. Chrysler, onako na prvi pogled, treba biti najzadovoljniji. Vjerujemo da i jeste. Ni Volkswagen nema razloga da ne trlja ruke, onako zadovoljno. Ipak, Toyota je vodeća ...
    sa 1,8 miliona prodatih vozila. </p>
        
		</div>
        
		<div class="block">
        
			<h2><strong>Prodaja u prethodnim godinama</strong></h2>
            
        <table>
        	<caption>Tabelarni prikaz!</caption>
          <tbody>
          
            <tr>
              <th>&nbsp</th>
              <th>Market/Kompanija</th>
              <th>Obim %</th>
              <th>2016.</th>
              <th>2017</th>
              <th>DPS %*</th>
              <th>2016</th>
              <th>2017</th>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>Fiat</td>
              <td>121.42</td>
              <td>43,772</td>
              <td>19,769</td>
              <td>121.42</td>
              <td>143</td>
              <td>64</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>Smart</td>
              <td>92.19</td>
              <td>10,009</td>
              <td>5,208</td>
              <td>92.19</td>
              <td>33</td>
              <td>17</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>Lamborghini</td>
              <td>41.18</td>
              <td>480</td>
              <td>340</td>
              <td>41.18</td>
              <td>2</td>
              <td>1</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>Chrysler</td>
              <td>39.13</td>
              <td>307,967</td>
              <td>221,346</td>
              <td>39.13</td>
              <td>1,003</td>
              <td>721</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>Volkswagen</td>
              <td>35.06</td>
              <td>438.133</td>
              <td>324,402</td>
              <td>35.06</td>
              <td>1,427</td>
              <td>1,057</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><strong>Toyota</strong></td>
              <td>27.12</td>
              <td>1,838,338</td>
              <td>1,446,109</td>
              <td>27.12</td>
              <td>5,988</td>
              <td>4,710</td>
            </tr>
            
          </tbody>
          
        </table>

        
       </div>
        
    </div><!-- end #main -->
	
	<div id="sidebar">
        
		    <h2>Join our team...</h2>
        
        <p>Register:</p>
        
      <form action="register.php" method="POST">

          <?php include('errors.php'); ?>

          <label>Username:</label>
  				<input type="text" name="username" placeholder="Write your username..." value="<?php echo $username; ?>">
          <label>Email:</label>
  				<input type="email" name="email" value="<?php echo $email; ?>">
  				<label>Password:</label>
  				<input type="password" name="password_1" placeholder="Password">
          <label>Confirm password:</label>
          <input type="password" name="password_2" placeholder="Password">
  			  <button type="submit" class="btn" name="reg_user">Register</button>
				  <p>
            Already a member? <a href="login.php">Sign in</a>
          </p>
		  </form>
            
    </div><!-- end #sidebar -->
	
	<div id="footer">
		<p>Toyota &copy; </p>
	</div><!-- end #footer -->
	
</div><!-- end #wrapper -->


</body>
</html>












