
<?php
$con=mysqli_connect("localhost","root","","report") or die("not connected");
$ar = array();

for($i = 1;$i<=7;$i++)
{
	$ar[$i] = 0;
}	
foreach($_POST['category'] as $s)
{
		$ar[$s] = 1;
}



$sql="INSERT INTO report1(s1,s2,s3,s4,s5,s6,s7)
values('".$ar[1]."','".$ar[2]."','".$ar[3]."','".$ar[4]."','".$ar[5]."','".$ar[6]."','".$ar[7]."')";

//echo $sql."<br/>";
if(!mysqli_query($con,$sql))
{
die('Error:'.mysqli_error($con));
}
//echo "1 record added";
header('Location:report.php');
mysqli_close($con);
?>