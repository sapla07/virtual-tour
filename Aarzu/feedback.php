<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'feedback';
   
   $conn = mysql_connect("localhost", "root","");
   $db = mysql_select_db("feedback",$conn) or die('ERROR');
   
   if(!$conn) {
      die('Could not connect');
  }
    else{
    echo "Connected";   
   }
echo "kk";
$name = $_POST['name'];
echo 'hi';
$gender = $_POST['gender'];
$email = $_POST['email'];
$contact = $_POST['phone'];
$rating = $_POST['radSize'];
$suggestion = $_POST['sug'];


echo $name,$email,$g,$phone,$site,$sug;
  $sql = "INSERT INTO feedback (Name,Email_id,Gender,Contact_Number,Rating,Any_suggestions)
VALUES ('$name','$email','$gender','$contact','$rating','$suggestion')";

mysql_query($sql);


?>
