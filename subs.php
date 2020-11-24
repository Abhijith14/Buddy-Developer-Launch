<?php


include('db.php');


if (isset($_GET['email'])) {

	$email = $_GET['email'];
	$sql_check = "SELECT * FROM subs WHERE EMAIL = '$email'";
	$results_check = mysqli_query($conn, $sql_check);
	if(mysqli_num_rows($results_check) > 0)
	{
		header('location:index.php');
	}
	else
	{
		$sql = "INSERT INTO subs (EMAIL) VALUES ('$email')";
		mysqli_query($conn, $sql);

		// $from = "Buddy Developer";
		// $message = "";
  //       $headers= "MIME-VERSION: 1.0" . "\r\n";
  //       $headers=$headers."Content-type:text/html;charset=UTF-8" . "\r\n"; 
  //       $headers=$headers."From :<$from> \r\n ";

  //       mail(to, subject, message)

		header('location:index.php');
	}
}
else
{
	header('location:index.php');
}


?>