<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "contact_form");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$_name = $_REQUEST['name_name'];
		$_email = $_REQUEST['email_email'];
		$_message = $_REQUEST['m_message'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO user_details VALUES ('$_name',
			'$_email','$_message')";
		
		if(mysqli_query($conn, $sql)){
			echo "<center><h3>Submitted Successfully</h3><center>";
			header("Location: ./index.html?submit=true");
			// echo nl2br("\n$_name\n $_email\n "
			// 	. "$_message");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
?>