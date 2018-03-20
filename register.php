<?php
require("connection.php");
	if($_POST)
	{
		$computer_code = $_POST['computer_code'];
		$dob = $_POST['date_of_birth'];
		$password1 = $_POST["password1"];
		$password2 = $_POST["password2"];
		$email = $_POST["email"];
		$phone_number = $_POST["phone_number"];
		
		$password_hash = md5($_POST["password1"]);
		

		if(!empty($password1)  && !empty($password2) && !empty($email) &&  !empty($phone_number) && !empty($computer_code) && !empty($dob))
		{
			$query1="select * from Student_information where Computer_Code='".$computer_code."'";

			$result=$con->query($query1);
			$row=$result->fetch_assoc();
			if ($row["Password"] == null) 
			{
				if($computer_code == $row["Computer_Code"] && $dob == $row["DOB"])
				{

					if ($password1 == $password2) 
					{

						
					     $query="UPDATE Student_information SET phone_no = '$phone_number',Password = '$password1', Email = '$email' WHERE Computer_Code = '".$computer_code."' " ;

							     $result=$con->query($query);

							    
					     	if (!$result) {
					     		echo "error hua hai!";
					     		echo mysqli_error($con);
					     	}
					     	else{
					     		header("Location: index.php");
					     	}
					     
					     
							
										
					}
					else{
							echo "Password do not match";
					}
				}else{
					echo "Invalid Computer Code or DOB";
				}
			}else{
				echo "You are already Awesome";
			}

														

		}else{
			echo "All fields required";
    	}
    }

  ?>  
   
