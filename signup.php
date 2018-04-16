
<?php
session_start();

$bdd=mysqli_connect('localhost','root','','resto') ;
if ( isset($_POST['firstname']) && isset($_POST['signup'])) {



extract($_POST);
$sql="INSERT INTO client (nom,prenom,num_tele,password) VALUES ('$firstname','$lastname','$num_tele','$password')";
$resault=mysqli_query($bdd , $sql);
$_SESSION['firstname']=$firstname;
$_SESSION['lastname']=$lastname;
if($resault)
	header('location:ttt.php') ;
else
	echo "Error";
}

?>
<html>
<head>
	<title>signup.php</title>
</head>
<style type="text/css">
body {
	background-image: url('rb.JPG');
}
</style>
<body>
	<form action="signup.php" method="POST">
		<center>
	<div style="margin-top:200px; border:1px solid black;border-radius:20px; ;width:330px; hight:300px; background-color:rgba(204, 0, 0 , 0.5);	"><br>
<table>
<tr><td style="color:white;font-size:20px;">First name</td><td><input type="text" name="firstname"  required></td></tr>
<tr><td style="color:white ;font-size:20px;">Last name</td><td><input type="text" name="lastname" required></td></tr>
<tr><td style="color:white ;font-size:20px;">Phone number</td><td><input type="text" name="num_tele" required></td></tr>
<tr><td style="color:white ;font-size:20px;">Password</td><td><input type="password" name="password"  required></td></tr>
<tr><td><br></td></tr>
<tr><td><input type="submit" name="signup" value="Submit"></td></tr>
</table>
<br>
</div>
</center>
</form>					
</body>
</html>