
<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
</head>
<body>
	<h1>Registration form</h1>
	<hr>
	<br>

	<!-- HTML form -->
	
	<form  method="POST">

 <fieldset>
  <legend>Basic Information:</legend>
		<!-- Input Text Field -->
		<label for="fname">First Name:</label>
		<input type="text" name="fname" id="fname">

		<br>

		<label for="lastname">Last Name:</label>
		<input type="text" name="lastname" id="lastname">

		<br>

		<br>

		<!-- Radio -->
		<label for="gender">Gender</label>
		<input type="radio" name="gender" id="male" value="male">
		<label for="male">Male</label>

		<input type="radio" name="gender" id="female" value="female">

		<label for="female">Female</label>

		<br>
		<br>

         <!--Email/email-->
          <label for="email">Email Address:</label>
          <input type="email" id="email" name="email">
		<br>
		
        </fieldset>

       
        <fieldset>
		<legend>User Account Information </legend>
		
		<label for="username">User Name:</label>
		<input type="text" name="username" id="username">

		<br>

		<label for="pass">Password</label>
		<input type="password" id="pass" name="pass">
		<br>

		 <label for="remail">Recovery Email Address:</label>
          <input type="email" id="remail" name="remail">
          </fieldset>
		<br>

         <input type="submit" value="Submit">

	</form>

<?php
$filePath = "text.txt";
$file=fopen($filePath, "a");
fwrite($file, fname);
fwrite($file, lastname);
fwrite($file, gender);
fwrite($file, email);
fwrite($file, username);
fwrite($file, pass);
fwrite($file, remail);
fclose($file);


?>
		

</body>
</html>

