<!DOCTYPE html>
<?php require_once ("lang.php");
echo <<<_END
<html lang="$lang">
_END;?>

<HEAD>
	
<meta charset="utf-8">
<!-- This loads the page's meta tags:  *be sure to add the page's name!*-->
<?php require_once ("meta/welcome-$lang.php");?>

<!--  Set any page specific graphics to preload-->
<link rel="preload" as="image" href="logos/gea-horizontal.svg">
<link rel="preload" as="image" href="svgs/cloud-back.svg">
<link rel="preload" as="image" href="webp/earthday-2022-400px.webp">
<link rel="preload" as="image" href="webp/mountain-top2.webp">
<link rel="stylesheet" type="text/css" href="stylesheet-first-load.css?v0.2">
<link rel="stylesheet" type="text/css" href="stylesheet-landing.css?v0.56">


<!--This loads the page's header-->

<?php require_once ("header.php");?>

</head>

<!--MAIN CONTENT-->
	
	
<BODY id="full-page">

	<div id="load-background">

	<!-- This loads the page's language specific menu -->

    <?php require_once ("menus/menu-$lang.php");?>

	<!-- This loads the page's top graphics-->

		<div id="clouds"><img src="webp/mountain-top2.webp" width="100%"></div>
		<div id="cloud-banner"><img src="webp/vision-bottom4.webp" width="100%" height="31%"></div>


	<!-- SLIDER CONTENT -->
	
		<div id="sliders">

		<div id="slider1">
				<div id="slider-image"><img src="webp/faqs-400px.webp" width="92%" height="100%" alt="How to make an ecobrick"></div>
					<div id="slider-textbox">
					<div id="slider-heading">INDONESIA! Ecobricks Guidelines & Standards</div>
					<div id="slider-body">Learn about what makes an ecobrick an ecobrick!  Did you know there are several kinds of ecobricks?</div>
					<div id="slider-link"><a href="/what">About Ecobricks</var></a></div>
					<div id="slider-date">June 16th, 2022 | Site updates</div>
				</div>
			</div>


			<div id="slider2">

			<div id="slider-image">
				<img src="webp/brikmarket-400px.webp" width="92%" height="100%" alt="Our eco brick market place for arranging trades and droping off ecobricks">
			</div>
			<div id="slider-textbox">
				<div id="slider-heading">The <var>Brik Market</var> is Launched</div>
				<div id="slider-date">May 2nd, 2022 | GEA Annoucement</div>
				<div id="slider-body">After three years of development, we're excited to launch a place to exchange, trade, barter and drop-off your ecobricks.</div>
				<div id="slider-link">>> <a href="drop-off.php">The <var>Brik Market</var></a></div>

				</div>
			</div>


			<div id="slider3">
				<div id="slider-image"><img src="webp/catalyst.webp" width="92%" height="100%" alt="Our eco brick enterprise program"></div>
					<div id="slider-textbox">
					<div id="slider-heading">Plastic Transition Platform for Enterprises</div>
					<div id="slider-body">Our Catalyst program for keen green companies, organizations and projects is now live!  Track, disclose and accelerate your plastic transition.</div>
					<div id="slider-link"><a href="catalyst.php">Learn more</a></div>
					<div id="slider-date">Feb. 6, 2022 | GEA Announcements</div>
				</div>
			</div>

			
			<div id="slider4">
				<div class="slider-textbox">
					<div id="slider-heading">Learn how to build with Ecobricks</div>
					<div id="slider-date">June 16th, 2022 | GEA Update Content</div>
					<div id="slider-body">Learn about the various ways to put ecobricks to good use in everything from module to earth construction.</div>
					<div id="slider-link">>> <a href="build.php">Ecobrick Building</a></div>
				</div>
				<div class="slider-image"><img src="webp/build-blue-450px.webp" style="width: 85%;"></div>	
												
			</div>		
		</div>

	<!--FIRST CONTENT SECTION-->

	<div id="content-sect1">
	 	<div id="main-content">
			<div id="dolphin-graphic"><img src="svgs/dolphin-top-optimized.svg"width="100%" height="76%" alt="eco bricks help keep plastic out of the ocean" loading="lazy"></div>
			<div class="big-header">Accelerating Plastic Transition</div>
			<div class="sub-text">
			<p>Together we can keep our plastic out of the oceans.  With ecobricks we can secure plastic to build our greenest visions and ignite regenerative transition.</p>
			</div>
			 <a href="faqs.php" button class="main-button">All About Ecobricks</a>
			<h6><a href="what.php">What is an ecobrick?</a> | <a href="/how">How to Make?</a> | <a href="/why">Why Make?</a></h6>
		</div>	
	
	</div>

	<!--SECOND CONTENT SECTION-->

	  
	<div id="content-sect2">
		<div id="main-content">
			<div class="lead-graphic"><img src="webp/earth-service-700px.webp" width="100%" height="96%" alt="eco bricks follow the Earth's example." max-width="700px">
			</div>
			<div class="big-header">Follow the Earth's Example</div>
			<!--<div class="lead-paragraph">Join the Regenerative Movement</div>-->
			<div class="sub-text">
			<p>Ecobricking follows the Earth's example of concentrating and securing carbon out of the biosphere.  Following the science of plastic degradation and Earthen principles, ecobricking is a non-capital, net-zero means of plastic sequestration.</p>
			</div>
			<a href="sequest.php" button class="main-button">Plastic Sequestration</a>
			<h6><a href="/ayyew">Ayyew Inspired</a> | <a href="/circular">Circular by Design</a> | <a href="/plastic">Towards Transition</a> | <a href="/principles">Regenerative</a> <!--| <a href="/reports">Reports & Whitepapers</a>--></h6>
		</div>
	</div>	
		
	<!--THIRD CONTENT SECTION-->

	<div id="content-sect3">
		<div id="main-content">
			<div class="lead-graphic"><img src="webp/spiral-circular-800px.webp" width="100%" max-width="777px" height="90%" alt="eco brick plastic brick building"></div>
			<div class="big-header">The Problem is the Solution.</div>
			<div class="sub-text"><p>Ecobricks turn used plastic into reusable building blocks ideal for circular & spiral building applications.  Use them make modules, home furniture, play parks, and food-forest gardens.  Using the problem, we can build our greenest visions.</p>
			</div> 

			<a href="build.php" button class="main-button">Building Applications</a>
			
			<h6><a href="/earth">Earth & Ecobrick Building</a> | <a href="/earth-methods">E&B Methods</a> | <a href="/modules">Milstein Modules</a> | <a href="/circular">Spiral & Circular</a> | <a href="/openspaces">Open Spaces</a> | <a href="/fire">Fire Safety</a></h6>
		</div>
	</div>

	<!--FOURTH CONTENT SECTION-->

	<div id="content-sect4">
		<div id="main-content">
			<div class="lead-graphic"><img src="webp/balancing-green.webp"  width="100%" height="100%"></div>
			<div class="lead-graphic"><img src="svgs/aes-brk.svg" width="100%" height="40%" alt="authenticated eco brick sequetration"></div><!--width="300px" height="254px"-->
			<!--<div class="lead-paragraph"><br>Introducing AES Plastic Offsetting</div>-->
			<div class="sub-text"><p><br>Fast track your journey to zero-waste through plastic offsetting.  Plastic offsets are directly correlated to authenticated ecobricked plastic through the Brikcoin manual blockchain.</p></div>
			<a href="https://gobrik.com/#offset" target="_blank" class="main-button">Plastic Offsetting</a>
			<h6><a href="/brikcoins">Brikcoin Blockchain</a> | <a href="/aes">AES Plastic</a> | <a href="transition.php">Plastic Transition</a> | <a href="about.php">About the GEA</a></h6><br><br>
			<p>The Brikcoin manual blockchain enables the authentication, valuation and vitalization of ecobricks.<br><a href="https://gobrik.com/#offset" target="_blank">Offset your household or company plastic generation with us.</a></p><br>
			<img src="svgs/3brikcoins.svg" width="30%">

			<br><br>
			<h4>Eco-brick, eco brick, or ecobrick?</h4>

			<p>Back in the early days of putting plastic into a bottle we called it just that-- plastic bottle bricks!  Then when we realized it was helpful to the <b>eco</b>systems around us, the name changed to "eco bricks" or "eco-brick". Today 'ecobrick' is the <a href="https://en.wikipedia.org/wiki/Ecobricks" target="_blank">Wikipedia recongnized</a> term for the go-to, non-capital, zero-carbon solution for <a href="https://en.wikipedia.org/wiki/plastic_sequestration" target="_blank">plastic sequestration</a></a></p>
				<p>Learn about the main focus of the ecobrick movement and technology:</p>
				<a href="transition.php" button class="main-button">Plastic Transition</a>
			
		</div>
	</div>


	<!--FOOTER STARTS HERE-->

	<?php require_once ("footers/footer-$lang.php");?>



	<!--FOOTER ENDS HERE-->

	

</div>
</body>
</html>
