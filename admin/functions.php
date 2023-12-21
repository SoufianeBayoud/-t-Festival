<?php
function addUser(){
    // Voegt User toe
    global $connection;
		 if (isset($_POST['add_user'])) {
			 if($_POST['firstname']){
				$firstname = $_POST['firstname'];
			 }else{
				$firstname =""; 
			 }
			  if($_POST['lastname']){
				$lastname = $_POST['lastname'];
				  }else{
				$lastname =""; 
			 }
			  if($_POST['password']){
				$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
				  }else{
				$password =""; 
			 }
			  if($_POST['email']){
				$email = $_POST['email'];
				  }else{
				$email =""; 
			 }
			 if(isset($_POST['isAdmin'])){
				$isAdmin = 1;
			 }else{
				$isAdmin = 0;
			 }
				
				

			  
			  

			$query = "INSERT INTO users (firstname, lastname, password, email, isAdmin)
						VALUES('"
						. $firstname ."', '"
						. $lastname ."', '"
						. $password . "', '"
						. $email . "', '"
						. $isAdmin . "');";
			//echo $query;
			$result = mysqli_query($connection, $query);
				//echo $query;
				echo "<div  class='container alert alert-primary'> Account Aangemaakt: Nu kan je inloggen.</div>";
			
		};
                                         
}
function editUsers(){
    // EDIT AN USER, ALTER THEIR DATA
	
    global $connection;
            
	$user_id = $_POST['user_id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	if(isset($_POST['isAdmin'])){
		$isAdmin = 1;
	}else{
		$isAdmin = 0;
	}
	
	if ($_POST['password'] != "") {
		$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
	}

	$query = "UPDATE users SET firstname = '" . $firstname . "', lastname = '" . $lastname . "'" ;
	if(isset($password)){
		$query .= ", password = '" . $password ."'";
	}
	$query .=	", isAdmin = '" . $isAdmin . "', email = '" . $email .  "' WHERE user_id =" . $user_id ." ";


	$result = mysqli_query($connection, $query);
	header("Location: show_user.php");
			
}
?>