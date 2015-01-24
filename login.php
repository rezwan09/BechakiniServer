<?php
include("functions.php");

$conn=dbConnect();
mysqli_select_db($conn,'bechakini');

/*$_name=$_POST['user'];
$_password=$_POST[pass];*/

//for test purpose
$_name='rana';
$_password='daj444';

session_start();
if(!empty($_name)) {
	$query = mysqli_query($conn,"SELECT * FROM user where name = '$_name' AND password = '$_password'") or die(mysql_error());

	if($row =mysqli_fetch_array($query)==0){
		echo "SORRY...YOU ENTERED WRONG USERNAME OR PASSWORD... PLEASE RETRY...";
	}

	//$row = mysqli_fetch_array($query) or die(mysql_error());
	

	else{
		$_SESSION['name'] = $row['password'];
		echo "LOGIN SUCCESSFUL";
	}
	

}

?>