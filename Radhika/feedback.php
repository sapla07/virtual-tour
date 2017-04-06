<?php 
include("dbfeedback.php");
?>
<html>

<head>
	<title>Virtual tour Feedback</title>
	
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>

<body>

	<h2>Feedback</h2>
	
	<form class="form">
<form action="dbadd.php" method="post">
	
		<p class="name">
		<label for="name">Name *</label><input type="text" name="name" id="name" placeholder="Full Name" required>
			
		</p>
		
		<p class="email">
			<label for="email">Email Id *</label><input type="text" name="email" id="email"placeholder="abc@gmail.com" required>
			
		</p>
		

		
		<p class="phone">
 <label for="tel">Contact Number</label>
  <input id="phonenum" type="tel" pattern="^\d{10}$" name="contact" required >
<p>		
 <label>Please rate our site</label>            
          <input type = "radio"
                 name = "radSize"
                 id = "sizeSmall"
                 value = "good" required />
          <label for = "sizeSmall">Good</label>
          <input type = "radio"
                 name = "radSize"
                 id = "sizeMed"
                 value = "better" required />
          <label for = "sizeMed">Better</label>
          <input type = "radio"
                 name = "radSize"
                 id = "sizeLarge"
                 value = "excellent" required />
          <label for = "sizeLarge">Excellent</label>
        </p>       
		
	
		<p class="text">
		<label for="text">Any Suggestions?<br><textarea name="text" placeholder="Write something to us" /></textarea></label>
		</p>
	
		<p class="submit">
			<input type="submit" value="Submit" />
		</p>
	</form>

</body>

</html>
