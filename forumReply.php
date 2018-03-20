<?php
require "connection.php";
require "header.php";
if($_POST){

	$ans = $_POST["answer"];
	$qid = $_POST['qId'];
	$user = $_SESSION['user'];
	$userId = $_SESSION['user_id'];
	$date = date("Y/m/d") ;

	//$con = new mysqli('localhost','root','','h');

	$query= "insert into Answers (answer,que_id,user_id,user,date) values ('".$ans."','".$qid."','".$userId."','".$user."','".$date."')";
	$result=$con->query($query);
	if (!$result) {
					     		echo "error !";
					     		echo mysqli_error($con);
					     	}
					     	else{
					     		echo "Answer posted. <a href = 'forumAnswer.php?ID= ".$qid."  '> view </a>";

					     		
	}


}

?>