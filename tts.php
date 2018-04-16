


<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<center>
			<h1 style="text-decoration:underline">Votre coordones<h1>
<table border="1">
<?php
if(isset($_POST['name']) && isset($_POST['add']) && isset($_POST['sex'])) {
echo "<tr> <td> Name is </td><td>". $_POST['name'] ."</td> </tr> <tr> <td>Add is </td><td>". $_POST['add'] ."</td> </tr> <br>";

if($_POST['sex']=="male") echo "<tr><td>male</td></tr>";
if($_POST['sex']=="fe") echo "<tr><td>female</td></tr>";


}
?>

</table>
</center>
</form>
</body>
</html>