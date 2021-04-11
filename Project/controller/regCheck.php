<?php
	session_start();

	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];

		if($username == ""){
			echo "Enter a Name";
		}
		else if(ctype_alnum($username) and $username=="_" and $username=="-" and strlen( $username) < 2){
			echo "Invalid Name \n";
			echo " Name can contain alpha numeric characters period,dash or underscore only \n User Namemust contain at leasttwo (2) characters";
		}
		else if($email==""){
			echo "enter a valid email";
		}
		else if($username==""){
			echo "Enter a valid User Name";
		}
		else if(ctype_alnum($username) and $username=="_" and $username=="-" and strlen( $username) < 2){
			echo "Invalid Name \n";
			echo "User Name can contain alpha numeric characters period,dash or underscore only \n User Namemust contain at leasttwo (2) characters";
		}
		else if($password ==""){
			echo "Enter a password";
		}
		else if($repass==""){
			echo "Re-type the password to confirm your password";
		}
		else if 
			( $password=="@" ||$password=="#" || $password=="$" ||$password=="%" and strlen($password)<8) 
		{

			echo "\n Invalid password";
			echo "Password must not be less than eight(8) characters \n Password must contain at least one of the special characters (@, #, $, %)";
		}
		else if($password != $repass){
			echo "Passwords did not match";
		}



		else {			if($password == $repass)
				{

				$user = [	
							'username'	=> $username, 
							'password'	=> $password, 
							'email'		=>$email, 
							'type'		=>'user'
						];
				
				$status = insertUser($user);				

				if($status){
					header('location: ../view/login.html');
				}else{
					echo "error..try again";
				}

				
				else{
						echo "password & confirm password mismatch...";
			 		}
			}
    



	header('location: ../view/login.html');
			
	}
	


?>