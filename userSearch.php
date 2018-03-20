<?php
require "connection.php";
include "header.php";

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//mysql_select_db($db_database, $con);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body><table class="table table-striped">
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
if (!empty($_POST['searchUser'])) {

$searchUser =$_REQUEST['searchUser'];     

$sql = "SELECT * FROM Student_information WHERE First_Name LIKE '%".$searchUser."%' OR Last_Name LIKE '%".$searchUser."%'"; 
$query = mysqli_query($con,$sql); 


$count = 1;

 while ($row = mysqli_fetch_array($query))

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

}
?>
</tbody></table>
<br><br>
<a href="users.php" style="padding-left: 40%;">All users</a>
    </body>
</html>