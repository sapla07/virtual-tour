<?php
	include('dbfeedback.php');													
		$Name= $_POST['name'];
		$Email_id= $_POST['email'];
		$Contact_Number= $_POST['contact'];
		$Rate= $_POST['radSize'];
		$Suggestion= $_POST['text'];
		

			mysql_query("insert into feedback (Name,Email id,Contact Number,Rate,Suggestion) 
			values('$Name','$Email_id','$Contact_Number','$Rate','$Suggestion')")or die(mysql_error());
																		
				header('location:feedback.php');							
							
?>				