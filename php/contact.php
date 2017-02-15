<?php

include("config.php");

if(isset($_POST["submit"]))
{
	$Name = $_POST["name"];
	$Email = $_POST["email"];
	$Subject = $_POST["subject"];
	$Message = $_POST["message"];

	$sql = "INSERT INTO contactus(id,name,email,subject,message) VALUES (NULL,'$Name','$Email','$Subject','$Message')";

	$result = mysqli_query($conn,$sql);
		
	header("location:../index.php");


});


}


?>