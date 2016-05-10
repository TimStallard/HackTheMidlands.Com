<?php session_start(); $_SESSION['visitedPage'] = "true"; ?>
<!doctype html>
<html>
<head>
	<title>HackTheMidlands 2016</title>
	
	<meta charset="utf-8" />
	<meta name="description" content="HackTheMidlands is a hackathon run by students in the city of Birmingham." />
	<meta name="keywords" content="HackTheMidlands, hackathon, birmingham, birmingham hackathons, birmingham tech events, uk hackathons, uk under 18 hackathons, uk hackathons u18, european hackathons, hackathons 2016" />
	<meta name="robots" content="index,follow" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<!--<link rel="shortcut icon" href="images/favicon.png" type="image/png" />-->
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet" type="text/css">

	<script src="jquery-1.12.0.min.js"></script>
	<script src="submitEmail.js"></script>
	<script src="index.js"></script>
</head>
<body>
	<div id="introSection" class="section">
		<div id="logo">
			<!-- <img src="images/banner.png" alt="HackTheMidlands"/> -->
		</div>
		<div id="heading-details">
			Birmingham, Autumn 2016
		</div>
		<div id="email">
			<div id="emailBackground"></div>
			<div id="contact">info@hackthemidlands.com</div>
			<form method="post" id="emailForm">
				<div class="form-group">
					<input id="emailAddress" class="form-control" type="email" name="emailAddress" placeholder="Enter your email address"/>
				</div>
				<div class="form-group">
					<input id="submitEmailButton" type="submit" class="btn btn-success" value="Register Interest"/>
				</div>
				<div id="emailSubmitError">
					<div id="emailSubmitErrorMessage">Error</div>

					<div id="emailSubmitTryAgainMessage">
						Please try again or email us to get added:<br>
						<strong>info@hackthemidlands.com</strong>
					</div>
				</div>
			</form>

			<div id="emailSuccessMessage">
				Great!<br>
				We&#39;ve added you to the mailing list.<br><br>
				We&#39;ll keep you up to date with any important news regarding HackTheMidlands!
			</div>

			<hr>

			<div id="sponsorsSignup">
				<a id="sponsorsSignupLink" href="#">Interested in sponsoring?</a>
				<div id="sponsorsSignupPanel">
					<hr>
					Contact us!<br>
					We&#39;d love to hear from you.<br><br>

					<strong>sponsor@hackthemidlands.com</strong>
				</div>
			</div>
		</div>
		
		<div class="backgroundCreditPadding"></div>
		<div class="backgroundCredit">
			Image Credit - VisitBritain: Pawel Libera
		</div>
	</div>
	
	<div class="section">
		<div class="sectionContent">
			<div class="subsection">
				<h1>About</h1>
				<p>
					HackTheMidlands will be a 24-hour hackathon based in the city of Birmingham.<br>
					The event will take place this autumn.
				</p>
				<p>
					We&#39;re aiming to make our event accessible to attendees of all ages.
				</p>
				<p>
					<a href="https://www.facebook.com/events/755731347893833/" target="_blank">Add our Facebook event to your calendar!</a>
				</p>
			</div>
			
			<div class="subsection">
				<h1>What&#39;s a hackathon?</h1>
				<p>
					<div class="quote">
						<p>
							A hackathon is best described as an &quot;invention marathon&quot;.<br>
							Anyone who has an interest in technology attends a hackathon to learn, 
							  build &amp; share their creations over the course of a weekend in a relaxed 
							  and welcoming atmosphere. <br>
							You don&#39;t have to be a programmer and you certainly don&#39;t have to be majoring in CS.
						</p>
						<div class="quoteSource">
							<a href="https://mlh.io/faq#what-is-a-hackathon">Taken from the Major League Hacking FAQ</a>
						</div>
					</div>
				</p>
			</div>
			
			<div class="subsection">
				<h1>Can under 18s attend?</h1>
				<p>Yes!</p>
				<p>
					As the event is being run with the intent of supporting students aged 14 and over 
					 we have taken a number of measures to ensure the safety of our participants.
				</p>
				<p>
					All attendees under the age of 18 will require a consent form signed by their parents 
					  to be granted access to the event.
				</p>
				<p>
					All attendees will be supervised by DBS-checked adults
					  at all times and are signed in and out of the venue accordingly.<br>
					  Ratio of under 18s to DBS-checked volunteers will be 10:1.
					  
				</p>
				<p>
					Participants under the age of 18 will not be allowed to leave the venue until the event 
					  has finished.
				</p>
			</div>
			
			<div class="subsection">
				<h1>Do I need to be a computer science student?</h1>
				<p>No!</p>
				<p>You&#39;re <u>not required</u> to have any prior programming experience.</p>
				<p>If you&#39;re interested in learning programming, we&#39;d recommend using <a href="https://www.codecademy.com/" target="_blank">Codecademy</a> to learn the basics.<br>
				Have a read through it if you don't want to wait until the hackathon before learing new things!</p>
			</div>
			
			<div class="subsection">
				<h1>Code of conduct</h1>
				<p>We will be following the <a href="http://static.mlh.io/docs/mlh-code-of-conduct.pdf">MLH code of conduct</a>.</p>
				<p>
					If you do not wish to be in photographs, let us know during registration.<br>
					Please respect the choice of others to not appear in photographs.
				</p>
			</div>
		</div>
	</div>
	
	<div class="section sectionForBackground" style="background-image: url('images/background-2.jpg')">
		<div class="backgroundCreditPadding"></div>
		<div class="backgroundCredit">
			Image Credit - <a href="http://www.baddeley.be/blog/?p=1133">R. J> Baddeley</a>
		</div>
	</div>
	
	<div class="section">
		<div class="sectionContent">
			<h1>The Team</h1>
			<p>Here are the people working to make this hackathon possible!</p>
			<!--<div class="subsection" style="text-align: center; margin-bottom: 0;">
				<div class="teamMember">
					<h2>Liam</h2>
					<h3>Organiser</h3>
					<div class="teamImage">
						<img src="images/theteam/liam.jpg" alt=""/>
					</div>
				</div><div class="teamMember">
					<h2>Tom</h2>
					<h3>Lead Organiser</h3>
					<div class="teamImage">
						<img src="images/theteam/tom.jpg" alt=""/>
					</div>
				</div><div class="teamMember">
					<h2>Michael</h2>
					<h3>Organiser</h3>
					<div class="teamImage">
						<img src="images/theteam/michael.jpg" alt=""/>
					</div>
				</div>
			</div><div class="subsection" style="text-align: center;">
				<div class="teamMember">
					<h2>Chloe</h2>
					<h3>Safeguarding Officer</h3>
					<div class="teamImage">
						<img src="images/theteam/chloe.jpg" alt=""/>
					</div>
				</div><div class="teamMember">
					<h2>Bee</h2>
					<h3>Organising Committee</h3>
					<div class="teamImage">
						<img src="images/theteam/bee.jpg" alt=""/>
					</div>
				</div><div class="teamMember">
					<h2>Aran</h2>
					<h3>Organising Committee</h3>
					<div class="teamImage">
						<img src="images/theteam/aran.jpg" alt=""/>
					</div>
				</div><div class="teamMember">
					<h2>Daniel</h2>
					<h3>Organising Committee</h3>
					<div class="teamImage">
						<img src="images/theteam/dan.jpg" alt=""/>
					</div>
				</div><div class="teamMember">
					<h2>Pandelis</h2>
					<h3>Organising Committee</h3>
					<div class="teamImage">
						<img src="images/theteam/panelis.jpg" alt=""/>
					</div>
				</div> 
			</div>-->
		</div>
	</div>

	<div class="section sectionForBackground" style="background-image: url('images/background-4.jpg')"></div>
	
	<div class="section">
		<div class="sectionContent" style="text-align: center;">
			<h1>Sponsors</h1>
			<div class="subsection">
				If you are interested in sponsoring the event, please send an email to:<br>
				<strong>sponsor@hackthemidlands.com</strong>
			</div>
			<div class="subsection">
				<h2>Diamond</h2>
				<p><strong> - </strong></p>
			</div><div class="subsection">
				<h2>Platinum</h2>
				<p><strong> - </strong></p>
			</div><div class="subsection">
				<h2>Gold</h2>
				<p><strong> - </strong></p>
			</div><div class="subsection">
				<h2>Silver</h2>
				<p><strong> - </strong></p>
			</div><div class="subsection">
				<h2>Bronze</h2>
				<p><strong> - </strong></p>
			</div>
			
			<div class="subsection">
				<h2>Partners</h2>
				
				<div class="sponsor">
					<h3>HackCampus</h3>
					<p>Partner</p>
					<div class="sponsorImage">
						<img src="images/sponsors/hackcampus.png" alt=""/>
					</div>
				</div>
			</div>
			
			<div class="subsection">
				<h2>Additional Sponsors</h2>
				
				<div class="sponsor">
					<h3>StickerMule</h3>
					<p>Swag for all</p>
					<div class="sponsorImage">
						<img src="images/sponsors/stickermule.png" alt=""/>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
