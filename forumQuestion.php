<?php
require "connection.php";
require "header.php";
if($_POST){

	$que = $_POST["question"];
	$que_desc = $_POST["que_desc"];
	$user = $_SESSION['user'];
	$userId = $_SESSION['user_id'];
	$date = date("Y/m/d") ;

	//$con = new mysqli('localhost','root','','h');

	$query= "insert into Questions (que,que_desc,userId,user,date) values ('".$que."','".$que_desc."','".$userId."','".$user."','".$date."')";
	//$result=$con->query($query);
	if (!$result=$con->query($query)) {
					     		echo "error !";
					     		echo mysqli_error($con);
					     	}
					     	else{
					     		echo "Question posted. <a href = 'forum.php'> view </a>";

					     		
	}


}

?>