<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$number = $_POST['number'];
	$conn = new mysqli('localhost','root','','C19');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, address, number) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $address, $number);
		$execval = $stmt->execute();
		echo $execval;
		$stmt->close();
		$conn->close();
		
	}
	header('MAIN.HTML');
?>
