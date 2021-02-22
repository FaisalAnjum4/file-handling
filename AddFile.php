<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Validation </title>
</head>
<body>

	<h1>Registration Form Validation</h1>

	<?php 

		$firstName = $_POST['fname'];
		$lastName = $_POST['lastname'];
		$Gender = $_POST['gender'];
		$Email = $_POST['email'];
		$UserName = $_POST['username'];
		$Password = $_POST['pass'];
		$REmail = $_POST['remail'];

    	echo "First Name: $firstName  ";
    	echo "<br>";
    	echo "Last Name: $lastName ";
    	echo"<br>";
    	echo "Gender: $Gender";
    	echo "<br>";
    	echo "Email: $Email";

	
        $f = fopen("text.txt","a");
        fwrite($f, "First Name= ".$firstName ."\n");
        fwrite($f, "Last Name= ".$lastName ."\n");
        fwrite($f, "Gender= ".$Gender ."\n");
        fwrite($f, "Email= ".$Email. "\n");
        fwrite($f, "User Name=".$UserName. "\n");
        fwrite($f, "Password=".$Password. "\n");
        fwrite($f, "Recovery Email=".$REmail. "\n\n");

        fclose($f);

	?>

</body>
</html>