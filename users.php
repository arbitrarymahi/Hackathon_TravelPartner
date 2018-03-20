    <?php
require "connection.php";
require "header.php";
?>
<!DOCTYPE html>
    <head>
    
        </head>
    <body>
    <!--	<div class="header">
        	<a href="<?php //echo $url_home; ?>"><img src="<?php //echo $design; ?>/images/logo.png" alt="Members Area" /></a>
	    </div>
        <div class="content">
This is the list of members:
<table>
    <tr>
    	<th>Id</th>
    	<th>Username</th>
    	<th>Email</th>
    </tr>--><table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>User Name</th>
      <th>Email</th>
      <th>Branch</th>
    </tr>
  </thead>
  <tbody>
<?php
//We get the IDs, usernames and emails of users
//$con=new mysqli("localhost","root","","bahubali_ips");

$query="select * from Student_information ORDER BY Branch, First_Name ";


    $count = 1;
 $result=$con->query($query);
 while($row=$result->fetch_assoc())

{
?>
 <tr>
      <th scope="row"><?php echo $count; ?></th>
      <td><a href="profile.php?Computer_Code=<?php echo $row['Computer_Code']; ?>"><?php echo htmlentities($row['First_Name']." ".$row['Last_Name'], ENT_QUOTES, 'UTF-8'); ?></a></td>
      <td><?php echo htmlentities($row['Email'], ENT_QUOTES, 'UTF-8'); ?></td>
      <td><?php echo htmlentities($row['Branch'], ENT_QUOTES, 'UTF-8'); ?></td>
    </tr>
    

<?php $count +=1;
}
?>
</tbody>
</table>


    
		
	</body>
</html>