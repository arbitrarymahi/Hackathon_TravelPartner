<!DOCTYPE html>
<html>
<head>
	<title>
		forum
	</title>

	<link rel="stylesheet" href="bootstrap.min.css" >
     <!-- Optional theme -->
    <link rel="stylesheet" href="bootstrap/3.3.7/css/bootstrap-theme.min.css" ">
    <link rel="stylesheet" type="text/css" href="forumque.css">
	<!--<link href="forum.css" rel="stylesheet">-->
</head>
<body>
<?php
require "connection.php";

require "header.php";
//$con = new mysqli('localhost','root','','IPS_Connect');
 $query="select * from Questions ";



 $result=$con->query($query);
 if(!$row=$result->fetch_assoc()){
 	echo mysqli_error($con);
 }
 while($row=$result->fetch_assoc())

		{

			echo '<body background="#fff">


<div class="fullcontainer">
	
	<div id="center"  >
	<span class="glyphicon glyphicon-bullhorn">
	</span>';
			//echo "<div style='color:green;''>"
			$id = $row["id"];
			echo "<a color:red; href = 'forumAnswer.php?ID= ".$id."  '> ".$row["que"]." </a>" ;
			echo "</div>";
				
				echo '<div id="bottom1">
				<span class="glyphicon glyphicon-user">
				</span>
				';
					echo $row["user"];
					echo '<span style="display:inline-block; width:20px;"></span>
					<span class="glyphicon glyphicon-calendar">
					</span>';
				
					echo $row["date"];

				echo "</div>";
			
			
			echo "</div>";
			
		}
		 ?>

<div style="margin-left: 10%;margin-right:10%; width: 80%;">
<h2>Ask a question</h2>
<form method="POST" action="forumQuestion.php">
	<input type="text" name="question" placeholder="Question Heading" style="width: 800px; height: 50px;"><br><br><br>
	<input type="textarea" name="que_desc" placeholder="Question Description" style="width: 800px; height: 100px;"><br><br><br>
	<input type="submit" name="submit"><br>
	
</form>
</div>
</div>
</body>
</html>


