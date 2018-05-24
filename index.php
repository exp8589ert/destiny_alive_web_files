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
<link rel="canonical" href="http://daccinternational.org">
<link rel="apple-touch-icon" href="sections/img/logo.png">
<link rel="shortcut icon" href="sections/img/logo.ico " type="img/x-icon?" />
<title>Destiny Alive Christian Centre Int&#039;l</title>
<link rel="stylesheet" type="text/css" href="sections/style/style.css" />


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400i|Monda|Open+Sans|Quicksand:300|Ubuntu" rel="stylesheet">
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
<body> <!--body -->

<!--

-->




	<div id="main_container">

	<header id="header" role="banner">
		<div class="header_content">
			<a href="http://destinyalive.com"><div class="page_logo" alt="page_logo"></div><span>DESTINY ALIVE <br />CHRISTIAN CENTRE INT'L</span></a>


			<div class="right_content_container">
				<aside role="complementary" class="social_plugins">
					<label class="follow_class">Follow us</label>
					<a target="blank" href="https://web.facebook.com/Destiny-Alive-Christian-Centre-DACC-748185435390685/">
						<div class="faceBk"><i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i></div>
					</a>

					<a href="#"><div class="Google"><i class="fa fa-google-plus fa-lg" aria-hidden="true"></i></div></a>
					<a href="#"><div class="twitter"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></div></a>
					<a href="#"><div class="instagram"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></div></a>

				</aside>



				<div class="login_registeration_div">

				<label class="loginlink showModal" id="loGin">Login &nbsp;
					<i class="fa fa-sign-in fa-lg" aria-hidden="true"></i>
				</label>


				<input class="regBtn showModal" id="signUp" type="button" value="Sign Up">




				</div>

				<div class="menu_cont" id="menu_cont_id">
					<label class="network_label">NETWORK &nbsp;


					<a class="button">
					<div id="square" class="icon x"></div>
					</a>


					</label>
					</div>
					</div>


		</div>

	</header>
	<div class="below_img"> </div>
	<div class="background_pic" alt="background image">
   </div>
		<div class="drop_down" id="drop_down_cont">
			<div class="descrip_cont">
				<div class="descriptionDiv"><span class="writeUp">Be part of a Church that work together to Make Better & More Disciples of Jesus Christ, equipped to make an impact in your world.</span>
				</div>
			</div>
			<div class="second_div_cont">
				<div class="leftDiv">

					<nav role="navigation" id="thirdNavID">
						<label class="resource_label">RESOURCES</label>
						<ul>
							<a href="#"><li class="bolder_class">Overview</li></a>
							<a href="#"><li>Sermons</li></a>
							<a href="#"><li>Books</li></a>
							<a href="#"><li>Audios</li></a>
							<a href="#"><li>Videos</li></a>
							<a href="#"><li>In the presence of God</li></a>
							<a href="#"><li>Seasonal Conventions</li></a>

						</ul>
					</nav>

					<nav role="navigation" class="SecndnavClass">

						<ul>
							<a href="#"><li class="bolder_class leaDership">Leadership Development</li></a>
							<a href="#"><li class="bolder_class">Church Networks</li></a>
							<a href="#"><li>Workers</li></a>
							<a href="#"><li>Bible Study</li></a>
							<a href="#"><li>Residency</li></a>
							<a href="#"><li>Collective Leadership</li></a>
							<a href="#"><li>Schools</li></a>

						</ul>
					</nav>

					<nav role="navigation" class="navClass">
						<label class="whoweare_label">WHO WE ARE</label>
						<ul>
							<a href="#"><li class="bolder_class">Overview</li></a>
							<a href="http://destinyalive.com/sections/destiny_alive"><li class="bolder_class">Beliefs & Values</li></a>
							<a href=""><li>Our Mission</li></a>
							<a href="http://destinyalive.com/sections/the_gospel"><li>The Gospel</li></a>
							<a href="#"><li>Discipleship</li></a>
							<a href="#"><li>In the presence of God</li></a>
							<a href="#"><li>Core values</li></a>

						</ul>
					</nav>



				</div>



				<div class="rightDiv">
					<div class="recentPost">This space is for special gospel messages</div>

					<input id="insideMenuBtn" type="button" name="" value="Unknown Button">
				</div>

			</div>




			<input id="closebtn" type="button" name="" value="Close">
	</div>












	<section aria-live="assertive" aria-atomic="true" id="section">




			<div class="romans_5_8">
				<label class="cont_span">
					But God demonstrated his own love for us in this: While we were still sinners, Christ died for us...
				</label>


			<br /><br /><br /><br /><br />
			<input class="frstBtn" type="button" name="" value="BUTTON 1">
			<input class="secBtn" type="button" name="" value="BUTTON 2">
		</div>

		<div class="IntroMsgCont">


		<div class="IntroMessage">

			<a href="#">
				<div class="profilePicture">Pst Pic</div></a>

		<aside role="complementary" class="frontMsg"> <label class="NameClass">Rev. XXXX XXXXX </label><br /><label class="dateLabel">Date: 18-05-2018</label><br />
			</p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus, felis in accumsan molestie, leo nisi dictum dui, quis sollicitudin tellus mi eu augue. Aliquam at egestas massa. Sed tempor, erat quis suscipit aliquam, mauris libero egestas massa, mattis sollicitudin mauris felis nec nulla. Nulla lobortis tellus eget ornare pretium. Donec eu volutpat dui.
			</p>

			<p> Donec malesuada, ante a tristique volutpat, nunc diam volutpat orci, ac lacinia dolor nisi nec orci. Maecenas vitae massa arcu. Quisque ut efficitur ligula, vel mollis arcu. Etiam mollis sed justo a rutrum. Maecenas risus arcu, pulvinar eget tempor vitae, rutrum eu massa. Nulla ut risus pulvinar, bibendum odio eget, egestas velit. Fusce tortor ex, dignissim at nisi at,  Suspendisse et rhoncus sapien, eu interdum tellus.
			</p>

			<a href="#"><label class="viewAllpost">View all Post</label></a>

		</aside>




		</div> <!-- IntroMsg ends -->

			<aside role="complementary" class="UpcomingEventsCont">
				<div class="UpcomingEventsDiv"><span class="upcomingClass">upcoming &nbsp;</span><span class="EventClass">EVENTS &nbsp; </span>
					<div class="calendaCont">
						<i class="fa fa-calendar" aria-hidden="true"></i>
					</div>
				</div>

				<div class="eventContClass">
					<div class="eventDate">
						<label class="eventDay">Sunday 6th</label>
						<label class="eventMonth">May</label>
					</div>
					<div class="eventWriteup">
					Recent upcoming event Recent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming event
				</div>
				</div>


				<div class="eventContClass">
				<div class="eventDate">
						<label class="eventDay">Sunday 6th</label>
						<label class="eventMonth">May</label>
				</div>
				<div class="eventWriteup">
					Recent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming event
				</div>
				</div>


					<div class="eventContClass">
					<div class="eventDate">
							<label class="eventDay">Sunday 6th</label>
							<label class="eventMonth">May</label>
					</div>
					<div class="eventWriteup">
					Recent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming event
					</div>
					</div>



					<div class="eventContClass">
					<div class="eventDate">
							<label class="eventDay">Sunday 6th</label>
							<label class="eventMonth">May</label>
					</div>
					<div class="eventWriteup">
					Recent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming event
					Recent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming eventRecent upcoming event
					</div>
					</div>



					<a href="#">
						<div class="eventViewallBtn">
						View more...
						</div>
					</a>



			</aside>

			<div class="socialPlugins">
				<div class="fb-share-button " data-href="http://daccinternational.org" data-layout="button_count" data-size="large" data-mobile-iframe="false">
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fdaccinternational.org%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share
				</a>
				</div>
		 	</div>




		</div> <!--IntroMsgCont ends -->



		<aside role="complementary" class="media_cont">

				<div class="video_cont" controls>

				<!-- 	<iframe class="videoFrame" allowFullScreen="allowFullScreen" src="https://www.youtube.com/embed/yp_1ACnMRy8?ecver=1&amp;autoplay=1&amp;iv_load_policy=1&amp;yt:stretch=16:9&amp;autohide=1&amp;color=red&amp;width=560&amp;width=560" width="560" height="315" allowtransparency="true" frameborder="0"><div><a rel="nofollow" id="Viv3PGip" href="https://www.sellcompare.co.uk">https://www.sellcompare.co.uk</a></div><script type="text/javascript">function execute_YTvideo(){return youtube.query({ids:"channel==MINE",startDate:"2018-01-01",endDate:"2018-12-31",metrics:"views,estimatedMinutesWatched,averageViewDuration,averageViewPercentage,subscribersGained",dimensions:"day",sort:"day"}).then(function(e){},function(e){console.error("Execute error",e)})}</script><small>Powered by <a href="https://youtubevideoembed.com/">Embed YouTube Video</a></small>
					</iframe> -->

				</div>



			<div class="media_desc">
				<div class="videoTitle">Video Title Video Title Video Title </div>



			<div class="videoDescr"> Lorem ipsum dolor sit amet, adipiscing elit. Sed maximus, felis in accumsan molestie, leo nisi dictum dui, quis sollicitudin tellus mi eu augue.
			</div>

			<div class="videoBtnCont">

				<audio id="audioBtn" controls="true">
				<source src="/sections/img/AUD-20180321-WA0003.mp3" type="audio/ogg">
				<source src="horse.mp3" type="audio/mpeg">
				Your browser does not support the audio element.
				</audio>

				<br />
				<input id="transcriptBtn" type="button" value="Transcript" title="Download message transcript">
			</div>


			</div>









		 </aside>

		 <aside role="complementary" class="recentPostCont">



		 	<div class="subscrDiv">
			<p class="signUp_p">Sign up to our weekly newsletter to get life transforming contents straight to your inbox.</p>
			<div id="newsLetPicId" class="newsLetter"></div>

			<div class="row content02">

			<label id="thanksLabel" >Thanks!&nbsp;Please check your email.

			</label>
			</div>




			<form enctype="multipart/form-data">
			<input id="subscriptionInput" placeholder="Please enter your email" />
			<div class="signup">Sign Up</div>
			</form>




		 	</div>








		 	<label class="recentSermonelabel">
		 		Recent sermons
		 		<div class="recenTclock">
		 		<i class="fa fa-clock-o" aria-hidden="true"></i>
		 	</div>
		 </label>

		 	<br />
		 	<br />

		 	<a href="#"><div class="recentSermonCont">Sermon 1</div></a>
		 	<a href="#"><div class="sermrightCont">Sermon 2</div></a>
		 	<a href="#"><div class="recentSermonCont">Sermon 3</div></a>
		 	<a href="#"><div class="sermrightCont">Sermon 4</div></a>



				<div class="numberCount">
					<a href="#">
					<nav role="navigation">
						<ul>
							<li class="PreviousList"><i class="fa fa-chevron-left fa-sm" style="font-size: 11px;" aria-hidden="true"></i> Previous</li>
							<li>1</li>
							<li>2</li>
							<li>3</li>
							<li>4</li>
							<li>Next <i class="fa fa-chevron-right fa-sm" style="font-size: 11px;" aria-hidden="true"></i></li>
						</ul>
					</nav>
					</a>
				</div>





		 </aside>












		<div id="loginRegModal">
			<div class="login_Reg_div_content">
				<fieldset id="loginFormFieldset" enctype="multipart/form-data">
					<label class="login_label">Enter email and password to log in</label>
				<form id="loginForm">
					<label for="email">Email :</label><br /><input aria-required="true" type="email" id="eMail" name="login email">
					<br /><br />
					<label for="password">Password :</label><br /><input aria-required="true" type="password" id="passWord" name="login password">
					<br />
					<br />
					<br />

					<input type="checkbox" name=""><label>Remember me</label>
					<input type="button" name="loginBtn" id="loGinBtn" value="Log In">
					<br /><br /><br />


				</form>
				</fieldset>

				<br/>

			<fieldset id="regFormFieldset" style="display: none;">
				<form id="regForm" enctype="multipart/form-data">
					<label for="familyName">Family Name :</label><input type="text" id="familyName" name="familyName">
					<label for="firstName">First Name :</label><input type="text" id="firstName" name="firstName">
					<label for="email">Email :</label><input type="email" id="email" name="login email">
					<label for="password">Password :</label><input type="password" id="password" name="login password">
					<input type="button" name="registerBtn" id="regBtn" value="sign Up">
				</form>
			</fieldset>


						<div class="social_Api_cont">
					<a href="#"><div class="login_with_fb"></div></a>
					<a href="#"><div class="sigin_with_google"></div></a>
					<a href="#"><div class="sigin_with_twitter"></div></a>
					</div>



							<input id="closeBtn" type="button" value="Close">
			</div>





		</div>






	</section>

	<footer id="divBeforeFooter">
		Division before footer
	</footer>


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

</div> <!--Main container ends here-->




<div id="fb-root"></div>

<script>





	(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


</script>

		<script type="text/javascript" src="../script/script.js"></script>

</body>
</html>
