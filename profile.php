 <?php
require "connection.php";
require "header.php";
if(isset($_GET['Computer_Code']))
{
	$Computer_Code = intval($_GET['Computer_Code']);
	//We check if the user exists
	$dn = 'select * from Student_information where Computer_Code="'.$Computer_Code.'"';

 	$result=$con->query($dn);
 	
 	
	if(mysqli_num_rows($result)>0)
	{
		$dnn = mysqli_fetch_array($result);
		//We display the user datas

?>

    <head>
    <link rel="stylesheet" type="text/css" href="profile.css">
    <link rel="stylesheet" type="text/css" href="forumque.css">
        
    </head>
    <body>
    	<div class="container" >
    		<div class="userBio">
    			<div class="userColumn">
    				<img id="dp" src="b1.jpg"><br>
    				<h4 id="userName"><?php echo htmlentities($dnn['First_Name']." ".$dnn['Last_Name']); ?></h4>
    				<h5 id="userEmail">
    				<?php echo htmlentities($dnn['Email']); ?></h5>
    				<h5 id="userEmail">BRANCH 	
    				<?php echo htmlentities($dnn['Branch']); ?></h5>
    				
    			</div>
    			<div class="bioColumn" >
    				<?php echo htmlentities($dnn['Bio']); ?>
    				<div id="social">
    					<a href="facebook.com">facebook</a>
    					<a href="instagram.com">instagram</a>
    					<a href="Linkedin.com">linkedin</a>
    					<a href="gmail.com">gmail</a>
    					
    				</div>
    				
    			</div>
    			
    		</div>

    		<div class="userThreads" style="background: white;  ">

    		
<?php 
    		$query="select * from Questions where userId = '".$Computer_Code."' ";



			 $result=$con->query($query);
			 if(!$row=$result->fetch_assoc()){
			 	echo mysqli_error($con);
			 }while($row=$result->fetch_assoc())

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

			 /*echo "strinsg";
			 	while($row=$result->fetch_assoc())

					{

					echo '<div id="que">';
					//echo "<div style='color:green;''>"
					$id = $row["id"];
					echo "<a href = 'forumAnswer.php?ID= ".$id."  '> ".$row["que"]." </a>" ;
					echo "<ul>";
						
						echo "<li>";
							echo $row["user"];
						echo "</li>";
						echo "<li>";
						echo $row["date"];
						echo "</li>";
					echo "</ul>";
					
					echo "</div>";
					
				}
	*/	 ?>



    		</div>
    		

    	</div>


































   <!-- 	<div class="header">
        	<a href="<?php echo $url_home; ?>"><img src="<?php echo $design; ?>/images/logo.png" alt="Members Area" /></a>
	    </div>
        <div class="content">-->
<?php
//We check if the users ID is defined
//$con=new mysqli("localhost","root","","bahubali_ips");

?>
<!--This is the profile of "<?php echo htmlentities($dnn['First_Name']); ?>" :
<table style="width:500px;">
	<tr>
    	<td>
</td>
    	<td class="left"><h1><?php echo htmlentities($dnn['First_Name'], ENT_QUOTES, 'UTF-8'); ?></h1>
    	Email: <?php echo htmlentities($dnn['Email'], ENT_QUOTES, 'UTF-8'); ?><br />
        </td>
    </tr>
</table>-->
<?php
//We add a link to send a pm to the user
if(isset($_SESSION['First_Name']))
{
?>
<br /><a href="new_pm.php?recip=<?php echo urlencode($dnn['username']); ?>" class="big">Send a PM to "<?php echo htmlentities($dnn['username'], ENT_QUOTES, 'UTF-8'); ?>"</a>
<?php
}
	}
	else
	{
		echo 'This user dont exists.';
	}
}
else
{
	echo 'The user ID is not defined.';
}
?>
		</div><br><br>
		<div class="foot"><a href="users.php" style="padding-left: 45%;">Go to the users list</a> </div>
	</body>
</html>