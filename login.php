<?php session_start(); ?>

<?php
$conn = mysql_connect("localhost","root","1234");
if(!$conn)
{
    die('Could not connect: ' . mysql_error());
    }mysql_select_db("registration", $conn);
$email=$_POST["email"];
$pwd=md5($_POST["password"]);

$query = mysql_query("SELECT * FROM tbl_reg where password='$pwd' AND email='$email'",$conn);

$rows = mysql_num_rows($query);
if(!$email|| !$pwd)

    { 
    echo"<script>alert(\"please fill up fields\");window.location='login.html'</script>";
    }
    if ($rows == 1)
    {
		$_SESSION['auth']=true;
    echo"<script>alert(\"login Success\");window.location='index2.php'</script>";
    }
    else
    {
        $error = "Username or Password is invalid";
        }
        if ($rows == 0)
        {
echo"<script>alert(\"Username or Password is Incorrect\");window.location='login.html'</script>";}
        mysql_close($conn);
?>