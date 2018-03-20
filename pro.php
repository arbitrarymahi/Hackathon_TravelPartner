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

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="Wrapper">
<div style="float:left;  border:1px solid #cccccc; width:100%;">
	<div class="LeftSec">
    	<span>Name : <?php echo htmlentities($dnn['First_Name']." ".$dnn['Last_Name']); ?></span>
        <span>Email : XXXXXX</span>
        <span>Gender: Male</span>
        <span>Birthday: xxxxx</span>
        <span>Computer Code: XXX</span>
        <span>Location:XXXX</span>
        <span>Gender: Male</span>
        <a href="#">Go To The Users List</a>
    </div>
    <div class="RightSec">
    	<div class="FeedsOuter">
        	<div class="Image"></div>
            <div class="Content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
            <div class="URL">
            	<a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">Linked In</a>
            </div>
        </div>
        </div>
       
</div>
</div>
</body>
</html>
<?}}?>