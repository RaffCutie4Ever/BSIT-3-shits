<?php
$conn = mysql_connect("localhost","root","1234");
if(!$conn)
{
	die('could not connect:' .mysql_error());
}
mysql_select_db("registration",$conn);
	$_Pwd=md5($_POST[password]);
$query = "INSERT INTO tbl_reg (Email,Password,Date_of_Birth,Gender) Values ('$_POST[email]','$_Pwd','$_POST[dob]','$_POST[gender]')";

	if(!mysql_query($query,$conn))
{
die('Error:' .mysql_error());
}
echo "<script>alert(\"you are now registered\");window.location='login.html'</script>";
mysql_close($conn);
?>

