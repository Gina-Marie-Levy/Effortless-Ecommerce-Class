<!DOCTYPE html>
<html>

<head>
	<?php
        require("includes/get_fc_data.php");
    ?> 
	<title> Assignment 01 AJAX - Jessica Naimo </title>
	<style>
		@import url('css/styles.css');
	</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
</head>
<body>
	<div id="container">
		<div id="header">
			<img src="img/fortuneday.png" alt="Fortune Cookie of the Day"/>
			<div class="nav">
                <ul>
                    <li><a href="http://www.fortunecookiemessage.com/">Origins <span> More Fortunes</span></a></li>
                    <li><a href="https://www.grubhub.com/">Feed Me <span> Order Chinese Food </span></a></li>
                    <li><a href="http://www.w3schools.com/ajax/">AJAX <span>Do it Yourself </span></a></li>
                </ul>
             </div>   
		</div>
		<div id="content">
			<div id="forms">
				<h1> Feeling Lucky? </h1>
				<p> Everyone knows that a mysterious fortune cookie holds the answers to all of life's questions. Why would you bother asking a trusted friend or mentor when you can get your critical life advice from a crunchy cookie that comes free with a combo meal? </p>
				<form method="post" id="usermood" name="usermood"> 
					<label for="number">What is your current mood?</label>
					<select name="number" id="number">
						<option value="0">Happy</option>
						<option value="1">Sad</option>
						<option value="2">Adventurous</option>
						<option value="3">Lonely</option>
						<option value="4">Lost</option>
					</select>	
					<input type='submit' name='action' value='submit'>
				</form>
				
			</div>

			<div id="fcookie">	
				<span id="fortuneButton" style="cursor: pointer; text-decoration: underline">
				<img id="cookie" src="img/cookie.png" alt="Fortune Cookie" /></span>	
			</div>	
			<div id="messages">	
				
				<h1>Your Fortune: </h1>
				<div id="fortune">Submit the form to recieve a fortune!</div>
			</div>
					
						
					
			<br/>	
		</div>
		<div id="footer">
			<p> Copyright 2014 &copy; Jessica Naimo. All rights reserved. </p>
			<p> Contact: <a href="mailto:jessicanaimo@knights.ucf.edu?Subject=ZOMMedia">jessicanaimo@knights.ucf.edu </a></p>
		</div>
	</div>
	

<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>

