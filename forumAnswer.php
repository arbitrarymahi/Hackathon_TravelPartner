<!DOCTYPE html>
<html>
<head>
	<title>
		forum Answer
	</title>

	<link rel="stylesheet" href="bootstrap.min.css" >
     <!-- Optional theme -->
    
    <link rel="stylesheet" type="text/css" href="forumans.css">
	
</head>
<body>
<?php

require "connection.php";
require "header.php";

if($_GET) {
  $var=$_GET["ID"];
  
 		

	//$con = new mysqli('localhost','root','','ips_connect');

	$query1="select * from Questions where id = '".$var."'";



 $result=$con->query($query1);
 $row=$result->fetch_assoc();

				echo '<body background="#fff">


<div class="fullcontainer">
	
	<div id="center"  >
	<span class="glyphicon glyphicon-bullhorn">
	</span>';
			echo "<a href = 'forumAnswer.php?ID= ".$var."  '> ".$row["que"]." </a>" ;
			echo "</div>";
			echo '<div id="bottom1">
				<span class="glyphicon glyphicon-user">
				</span>';

				echo$row['user'];
				
			echo'<span style="display:inline-block; width:20px;"></span>
			<span class="glyphicon glyphicon-calendar">
			</span>';

			$time = time();

			echo date('d - m - y',$time);
			echo "</div>";


			echo '<div id="last">';
			echo $row['que_desc'];
			echo"</div>
			</div>" ;
			

			
		



 $query="select * from Answers where que_id = '".$var."'";
 echo '<h3 style="text-align: center;">Top Answers</h3>';

 $result=$con->query($query);
while($row=$result->fetch_assoc())
		{
				echo '<div class="ansfullcontainer">
	
	<div id="anstop"  >
	<span class="glyphicon glyphicon-pencil"></span>';
				echo ($row["answer"]);
				echo "</div> <hr>";
				echo '<div id="ansuser">
				<span class="glyphicon glyphicon-user">
				</span>';
               echo $row['user'];
			echo'<span style="display:inline-block; width:20px;"></span>
			<span class="glyphicon glyphicon-calendar">
			</span>';
					$time = time();
					echo date('d - m - y',$time);
					echo "</div>";	
				echo "</div>";



				
		 } 

}
?>

<div style="margin-left: 10%;margin-right:10%; width: 80%;">
<h2>Reply..</h2>
<form method="POST" action="forumReply.php" >
	<input type="textarea" name="answer" style="width: 800px; height: 100px;"><br>
	<input type="hidden" name="qId" value="<?php print $var ; ?>"><br>
	<input type="submit" name="Add Reply">
	
</form>
</div>

</body>
</html>