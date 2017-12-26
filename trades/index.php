<HTML>
<head>
	<title>Omar Guzman's Day Trading Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Keywords" content="Omar,Omar Guzman,finance,software engineer,computer science,day trade">
	<meta name="Description" content="Personal Website that displays my trades I make throughout the year.">
	<meta name="author" content ="Omar Guzman">

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="stylesheets/stylesheet.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script rel="text/javascript" src="scripts/scripts.js"></script>
</head>

<?php require 'php/inc.php'; ?>

<body>
	<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-teal w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" 
	href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="https://www.omarguzman.org" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="https://resume.omarguzman.org" class="w3-bar-item w3-button w3-padding-large w3-hide-small">RESUME</a>
    <a href="https://downloads.omarguzman.org" class="w3-bar-item w3-button w3-padding-large w3-hide-small">DOWNLOADS</a>
    <a href="https://trades.omarguzman.org" class="w3-bar-item w3-button w3-padding-large w3-hide-small">TRADES</a>
	<a href="https://blog.omarguzman.org" class="w3-bar-item w3-button w3-padding-large w3-hide-small">BLOG</a>
  </div>
</div>


<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-teal w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="https://resume.omarguzman.org" class="w3-bar-item w3-button w3-padding-large">RESUME</a>
  <a href="https://downloads.omarguzman.org" class="w3-bar-item w3-button w3-padding-large">DOWNLOADS</a>
  <a href="https://trades.omarguzman.org" class="w3-bar-item w3-button w3-padding-large">TRADES</a>
  <a href="https://blog.omarguzman.org" class="w3-bar-item w3-button w3-padding-large">BLOG</a>
</div>
	<div class = "imgContainer">
		<img id="banner" src="images/banner.jpg" alt="Banner Image"/>
		<div class="centered">Trades</div>
	</div>
	
	<div class ="space"></div>
	<?php
		$sql="SELECT * FROM Ticker_Record ORDER BY ID DESC";

		if ($result=mysqli_query($link,$sql))
		  {
		  // Fetch one and one row
		  while ($row=mysqli_fetch_row($result))
		    {
		    	echo "<section><header>$";
		    	echo "$row[1]</header>";
		    	echo "$row[2] Shares\t$$row[4] Used";
				echo "<br>$$row[3] Profit";
		    	echo "<article>$row[6]</article></section>";

		    	//echo $row[5];
		    	//echo $row[6];
		    	//echo $row[7];
		    	//echo $row[8];	
		    }
		  // Free result set
		  mysqli_free_result($result);
		}
		mysqli_close($link);

	?>
	
<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">

	<div class = "socialMedia">
		<div class="sm">
			<a href="https://www.facebook.com/OmarGuz">
				<img src="images/social-1_logo-facebook.svg">
			</a>
		</div>
		<div class="sm">
			<a href="https://twitter.com/OmarGuz">
				<img src="images/social-1_logo-twitter.svg">
			</a>
		</div>
		<div class="sm">
			<a href="https://www.linkedin.com/in/OmarGuz">
				<img src="images/social-1_logo-linkedin.svg">
			</a>
		</div>
		<div class="sm">
			<a href="https://www.instagram.com/OmarxGuzman">
				<img src="images/social-1_logo-instagram.svg">
			</a>
		</div>
		<div class="sm">
			<a href="https://www.github.com/OmarGuz5">
				<img src="images/social-1_logo-github.svg">
			</a>
		</div>
	</div>
		<br><br><br>
		<p>Created by Omar Guzman</p>
</footer>
	
</body>
</HTML>