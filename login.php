<?php
include "includes/db_connection.php"; 
include('includes/header.php');

if (isset($_POST['login'])) {

	$email = $_POST['email'];
	$password_input = $_POST['password'];

	$email = mysqli_real_escape_string($connection, $email);
	$password = mysqli_real_escape_string($connection, $password);

	//$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
	
	$query = "SELECT * FROM users WHERE email = '" . $email . "'";
  
	$result = mysqli_query($connection, $query);

	if (!$result) {
		die("QUERY FAILED" . mysqli_error($connection));
	}
	while ($row = mysqli_fetch_assoc($result)) {

		$user_id = $row['user_id'];
		$firstname = $row['firstname'];
    $lastname = $row['lastname'];
		$user_password = $row['password'];
		$isAdmin = $row['isAdmin'];
		$user_email = $row['email'];
	}


	if ($email === $user_email && password_verify($password_input, $user_password) ) {
    $_SESSION['email'] = $user_email;
		$_SESSION['firstname'] = $firstname;
		$_SESSION['lastname'] = $lastname;
		$_SESSION['isAdmin'] = $isAdmin;
		$_SESSION['user_id'] = $user_id;
		header("location: index.php"); 
	} else {
		header("Location: login.php");
	}

}
 ?>

<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Dit is de CSS die bij Bootstrap hoort.
    Pas deze NIET aan, dat zorgt alleen maar voor problemen.-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!--Dit is de main stylesheet. Deze mogen we aanpassen.-->
  <link rel="stylesheet" href="assets/css/trends.css">
  <link rel="stylesheet" href="assets/css/navigatie.css">
  <!--Dit is de link naar de JQuery library.-->
  <script src="assets/jquery/jquery-3.3.1.min.js"></script>
  <title>'t Festival - Sign in</title>
</head>

<body>
    <div class="container form login">
      <hr>
      <p>Log in</p>
      <hr>
        <form action="login.php" method="POST">
        <div class="form-group">
          <label for="fistname">E-Mail</label>
          <input class="form-control login" id="email" type="text" name="email">
        </div>
      
        
        <div class="form-group">
          <label cla for="password">Wachtwoord</label>
          <input class="form-control login" id="password" type="password" name="password">
          </div>

          <div class="form-group">
            <input class="btn btn-primary login" type="submit" name="login" value="Log in">
          </div>
          
        

     </form>
     <hr>
      <div class="col-sm-4">
        <div class="fb-page" data-href="https://www.facebook.com/tfestival/" data-tabs="timeline" data-width=""
          data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
          data-show-facepile="true">
          <blockquote cite="https://www.facebook.com/tfestival/" class="fb-xfbml-parse-ignore"><a
              href="https://www.facebook.com/tfestival/">&#039;t Festival</a></blockquote>
        </div>
      </div>
    </div>



    <!--script for icons-->
    <script src="https://kit.fontawesome.com/150d9cdc3a.js" crossorigin="anonymous"></script>
    <!--Dit is het Javascriptje van de navigatie.
    Hier gaan we niet zomaar in sleutelen!-->
    <script src="assets/js/navigatie.js" crossorigin="anonymous"></script>
    <!--Dit zijn alle links naar Javascriptjes die ook bij Bootstrap horen. 
    Ook hier dient men van af te blijven!-->
    <script src="assets/bootstrap/bootstrap-js/bootstrap.bundle.js" crossorigin="anonymous"></script>
    <script src="assets/bootstrap/bootstrap-js/bootstrap.bundle.js.map" crossorigin="anonymous"></script>
    <script src="assets/bootstrap/bootstrap-js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="assets/bootstrap/bootstrap-js/bootstrap.bundle.min.js.map" crossorigin="anonymous"></script>
    <script src="assets/bootstrap/bootstrap-js/bootstrap.js" crossorigin="anonymous"></script>
    <script src="assets/bootstrap/bootstrap-js/bootstrap.js.map" crossorigin="anonymous"></script>
    <script src="assets/bootstrap/bootstrap-js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="assets/bootstrap/bootstrap-js/bootstrap.bundle.min.js.map" crossorigin="anonymous"></script>
    <!--Dit is de link naar onze Javascript file.-->
    <script src="assets/js/javascript.js"></script>
</body>

</html>