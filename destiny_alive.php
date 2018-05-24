<?php
// googlebot can sometimes crawl index.php with queries (/?page_id=xxx) which will produce many same-pages and no 404s
// this could penalize this website, and also websites linked from this page
if (!empty($_SERVER['QUERY_STRING']))
{
header('HTTP/1.0 404 Not Found');
echo '<h1>404 Not Found</h1>';
echo 'The page that you have requested could not be found.';
exit();
}
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset= "UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="referrer" content="origin"/>
<meta name=’pageKey’ content=’guest-home’>

<link rel="apple-touch-icon" href="../img/logo.png">
<link rel="shortcut icon" href="../img/logo.ico " type="img/x-icon?" />
<title>Destiny Alive Christian Centre Int&#039;l</title>
<link rel="stylesheet" type="text/css" href="../style/style.css" />


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Monda|Open+Sans|Quicksand:300|Ubuntu" rel="stylesheet">
<script type="text/javascript" src="../script/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!--<link rel="stylesheet" type="text/css" href="UIcontenttopper.css" />-->
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->




<!--[if (gte IE 6)&(lte IE 8)]>
  <script type="text/javascript" src="selectivizr.js"></script>
  <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
<![endif]-->
<!--
<noscript>
  <h2>This site requires javascript. Please enable your javascript to continue.
</noscript>

-->
</head>
<body id="destiny_alive"> <!--body -->

<!--

-->




	<div id="destiny_alive_main_container">

	<header role="banner" id="about_dest_page_header">
		<div class="destinyalive_header_cont">
			<a href="http://destinyalive.com"><div class="page_logo" alt="page_logo"></div><span>DESTINY ALIVE <br />CHRISTIAN CENTRE INT'L</span></a>
	</div>
</header>

<div class="below_img"></div>
<div class="destiny_menu_header">
	</div>


<div class="destiny_alive_inner_cont">

	<section class="destiny_alive_Section">
		<div class="menu">
			<nav role="navigation">
				<ul>
					<li class="selected"><a href="http://destinyalive.com/sections/destiny_alive/"><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;Destiny Alive</li>
					<li><a href="http://destinyalive.com/sections/the_gospel/">The Gospel</li>
					<li><a href="#">Baptism</li>
					<li><a href="#">Church Network</li>
					<li><a href="http://destinyalive.com/sections/books/">Christian Books &nbsp;<i class="fa fa-file-pdf-o" aria-hidden="true"></i></li>
					<li><a href="#"></li>
				</ul>
			</nav>
		</div>


	

	</section>

	</div>




	<footer id="footer">
		<div class="footerHeader">Footer header</div>

		<div class="fDiv">
		<table id="footer_table">
			<tr  class="bolderFont">
				<td><a href="#">About Ministry</a></td><td><a href="#">Event Schedules</a></td>
			</tr>
			<tr>
				<td><a href="#">Testimonies</a></td><td><a href="#">Prayer Request</a></td>
			</tr>
			<tr>
				<td><a href="#">Contact Us</a></td><td><a href="#">Christian Books</a></td>
			</tr>
				<tr>
				<td><a href="#">Sermons</a></td><td><a href="#">Get Involved  </a></td>
			</tr>
			</tr>
				<tr>
				<td><a href="#">Gospel of Jesus Christ</a></td><td><a href="#">Workers </a></td>
			</tr>
			</tr>
				<tr>
				<td><a href="#">Sermons</a></td><td><a href="#">Copyright Policy</a></td>
			</tr>
			</tr>
				<tr>
				<td><a href="#">Sermons</a></td><td><a href="#">Copyright Policy</a></td>
			</tr>
			</tr>
				<tr>
				<td><a href="#">Sermons</a></td><td><a href="#">Copyright Policy</a></td>
			</tr>
			<tr>
				<td><a href="#">Bible Study</a></td><td><a href="#">Terms of Use</a></td>
			</tr>
			<tr class="lastTableRole">
				<th colspan="4"><a href="#" class="copyRight">&copy; 2018 Destiny Alive Christian Centre Int'l &nbsp; <i class="fa fa-globe fa-lg" aria-hidden="true"></i></a></th>
			</tr>
		</table>


	<div class="rightSideDiv">
		<a href="#"><div class="lionofjudah">
			<div class="spaceFillup"></div>
			<div class="lionofjudahLabel">Describe about the lion of judah label here.</div>
			</div>
		</a>
		<a href="#"><div class="eagle">
			<div class="spaceFillup"></div>
			<div class="lionofjudahLabel">Describe about the lion of judah label here.</div>
			</div>
		</a>

		<div class="churchLocation">Church Location &nbsp; <i class="material-icons">location_on</i>

			<span class="churchAddress">No. 1 Fidelity Fortune Street, Off Summit Road, Umuagu, Asaba, Delta State, Nigeria.
			</span>
		</div>


		<a href="#">
			<div class="churchMap"></div>
		</a>

		<a href="#">
			<div class="spaceOcc"></div>
		</a>


		<a href="#">
			<div class="webmasterLink">website designed by <span class="intgratedNetwork">Integrated Network.</span></div>
		</a>





		<!-- <div><a href="https://www.google.com/maps/place/Destiny+Alive+Christian+Centre/@6.2121679,6.7009245,16.74z/data=!4m5!3m4!1s0x1043f265d4c106e5:0xd84573ea4e099fa8!8m2!3d6.2107088!4d6.7014141">View on Google Map</a></div> -->
	</div>


	</footer>



</div> <!-- main_container ends -->
</body>
</html>
