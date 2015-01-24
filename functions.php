<?php

function dbConnect()
{

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
return $conn;
}

function register($_name,$_email,$_password)
{
	$conn=dbConnect();
	mysqli_select_db($conn,'bechakini');
    $sql = "INSERT INTO user(user_id,name,email,password)
VALUES ('NULL', '$_name', '$_email','$_password')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}

function postad($_name,$_price,$_isNegotiable,$_seller_phone)
{

}



?>
