<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">


<HEAD>

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="logos/gea-horizontal.svg">
<link rel="preload" as="image" href="svgs/eb-blue.svg">

_END;?>

<?php require_once ("meta/brikchain-$lang.php");?>

<?php require_once ("header.php");?>


<!-- CUSTOM PAGE SCRIPTS-->

<script src="accordion-scripts.js"></script> 

<STYLE>


/*This sets up the the first splash content block that is unique to the top of each page*/

@media screen and (max-width: 700px) { 
	.splash-content-block {
		
		background: url(svgs/eb-blue.svg) top;
		background-color: #00E6FF;
		
		text-align: left;
		height: 70vh;
		padding: 50px 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;
    	background-repeat: no-repeat;
		background-size: cover;
		margin-top: 45px;
		width: 100%;
		display: flex;
 		box-sizing: border-box;
		flex-direction: column;
		position: relative;

	}
}


@media screen and (min-width: 700px) { 
	.splash-content-block {
		
		background: url(svgs/eb-blue.svg) bottom;
		background-color: #00E6FF;
		
		text-align: left;
		height: 60vh;
		padding: 50px 7% 50px 7%;
		z-index: 5;
		position: relative;
    	background-repeat: no-repeat;
		margin: -3px 0 -20px 0;
		display: flex;
 		flex-wrap: wrap;
 		box-sizing: border-box;
		flex-direction: row;
		width: 100%;
		background-size: cover;
		position: relative;
}
}



/*This is the text box on the left of the splash that holds the splash header and sub text*/


@media screen and (max-width: 700px) { 
.splash-text-box {
		position: relative;
		flex: 100%;
		padding: 10px 10px 0px 0px;
		box-sizing: border-box;
		text-align: right;
}
}

@media screen and (min-width: 700px) { 
.splash-text-box {
		z-index: 5;
		position: relative;
		flex: 65%;
		padding: 10px 30px 0px 0px;
		box-sizing: border-box;
		text-align: right;
}
}


@media screen and (max-width: 700px) { 
.splash-image {
		z-index: 5;
		position: relative;
		text-align: left;
		flex: 25%;
		width: 250px;
		padding: 0px;
		box-sizing: border-box;
		margin: 0px 0px 0px 10px;
}
}

/*This is the image on the right of the content block*/
@media screen and (min-width: 700px) { 
.splash-image {
		z-index: 5;
		position: relative;
		text-align: center;
		flex: 35%;
		padding: 0px;
		box-sizing: border-box;
		margin-top: 0px;
}
}

.splash-heading { 
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  color: white;
  font-weight: 300;
  text-shadow: 0 0 8px black;

}

@media screen and (max-width: 700px) {
	.splash-heading {
      font-size: 2.0em;
      line-height: 1.1;
      margin: 10px 0;
  }
}

@media screen and (min-width: 700px) {
	.splash-heading {
      font-size: 4.3em;
      line-height: 1.3;
      margin: 40px 0 10px;
  }
}

.splash-sub {
  font-family: 'Arvo', Georgia, serif;
  color: #fff;
  margin: 15px 0;
	/*text-shadow: 0px 0px 10px #fff;*/
}

@media screen and (max-width: 700px) {
	.splash-sub {
		font-size: 1.2em;
		line-height: 1.5;
		font-weight: 400;
  }
}
@media screen and (min-width: 700px) {
	.splash-sub {
		font-size: 1.5em;
		line-height: 1.3;
		font-weight: 400;
  }
}


/*This is the angled bar at the bottom of the intro splash block*/

#splash-bar {
	margin-top: -50px;
	width: 100%;
	background-color: #FCC32F;
	/*background: url(wp-content/uploads/2020/01/Gray-to-green-catalyst-banner-1.svg) right top;*/
	height:100px;	
	box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
	position: relative;
	z-index: 0;
	margin-bottom: 40px;

	-webkit-transform: skewY(-3deg);
 	 -moz-transform: skewY(-3deg);
 	 -ms-transform: skewY(-3deg);
 	 -o-transform: skewY(-3deg);
 	 transform: skewY(-3deg);

}

	
</style>	

</head>
							  
											  
<BODY id="full-page">

	<div id="load-background">

<!-- MENU BAR-->	
         
		<?php include 'menu-bar.php';?>

<!--SPLASH SECTION-->

	
<div class="splash-content-block">
	<div class="splash-text-box">
		<div class="splash-heading">Brikchain Explorer</div>
		<div class="splash-sub">Search the Full Brikcoin Blockchain</div>
	</div>
	<div class="splash-image"><img src="https://s3-eu-west-1.amazonaws.com/assets.knack-eu.com/assets/5abaea5dfdbfad4d03858fe2/5b4c1165d44d5804c418a27e/original/brikcoinchaintransparency.png" style="width: 70%;"></div>	
</div>
<div id="splash-bar"></div>



<!-- PAGE CONTENT-->

<a name="top"></a>

<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">

			<div class="lead-page-paragraph">
				
				<p>The Global Ecobrick Alliance maintains the Brikcoin blockchain and provides the Brikchain Explorer tool as a means to search the full chain of transactions and ecobricks.</p>
			</div>

			<div class="page-paragraph">
				  

				<p>For the moment here's a full table of all the current birkcoin transactions.  Not that this feature is still under development!</p>

			</div>
				
            <?php include 'db.php';?>
		
			<?php

				$str = '<div class="page-paragraph">';

				$sql = "SELECT transaction_id, transaction_name, block_tran_type, transaction_amount FROM brk_tran";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {

					
					echo $str"Transaction ID:  " . $row["transaction_id"]. "   |  Name: " . $row["transaction_name"]. "   Type:" . $row["block_tran_type"]. "   |   Amount:" . $row["transaction_amount"]. "<br></div>";
				}
				} else {
				echo "0 results";
				}
				$conn->close();
			?>   

		
	

		<div class="side">

		
			
		<div id="side-module-desktop-only">
        <img src="webp/2020-regen-report.webp" width="90%">
				<h4>NEW! 2021 Regen Report</h4>
				<h5>We're proud to publish our net-green ecological impact for the past year.</h5><br>
				<a class="module-btn" href="https://gobrik.com/#catalyze" target="_blank">Access Report</a><br><br>
			</div>


			<div id="side-module-desktop-mobile">
				<img src="webp/for-earth500px.webp" width="80%">
				<h4>For-Earth Enterprise</h4>
				<h5>By discolosing our carbon, plastic and biodiversity impacts and by ensuring that they are net-green, the GEA commits to for-Earth Enterprise</h5><br>
				<a class="module-btn" href="about">About Us</a>
			</div>

			<div id="side-module-desktop-mobile">
				<img src="webp/gea-logo-400px.webp" width="90%">
				<h4>Global Ecobrick Alliance</h4>
				<h5>The GEA is dedicated to accelerating plastic transition.  We preside over the GoBrik app and the Brikcoin blockchain.</h5><br>
				<a class="module-btn" href="about">About Us</a>
			</div>

		</div>

	</div>
</div>





	<!--FOOTER STARTS HERE-->


	<?php include 'footer.php'; ?>


	<!--FOOTER ENDS HERE-->
</div>
</body>
</html>
