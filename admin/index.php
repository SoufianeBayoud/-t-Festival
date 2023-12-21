<!DOCTYPE html>
<?php
session_start();
include "../includes/db_connection.php";
include "functions.php";
//ADMIN INDEX
// Werkt niet meer ineens, moet er dubbele code inzetten voordat het weer werkt...
if (isset($_SESSION["isAdmin"]) && $_SESSION['isAdmin'] != 1){
	header("Location: ../index.php");
}

if (isset($_SESSION["isAdmin"]) != 1){
	header("Location: ../index.php");
}
?>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Dit is de CSS die bij Bootstrap hoort.
    Pas deze NIET aan, dat zorgt alleen maar voor problemen.-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><!-- DataTable Plugin -->
  <!--Dit is de main stylesheet. Deze mogen we aanpassen.-->
  <link rel="stylesheet" href="../assets/css/trends.css">
  <link rel="stylesheet" href="../assets/css/navigatie.css">
  <!--Dit is de link naar de JQuery library.-->
  <script src="../assets/jquery/jquery-3.3.1.min.js"></script>
  <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <title>'t Festival - Admin</title>
</head>
<body>
  <?php
  include "includes/admin_header.php";
  ?>
	<div class="container form">
    <hr>
		<h1>Admin</h1><br>
    <a class="adminLink" href="show_user.php">Show Users</a>
    <a class="adminLink" href="../create.php">Create New User</a>
    <hr>
      <div class="col-sm-4">
        <div class="fb-page" data-href="https://www.facebook.com/tfestival/" data-tabs="timeline" data-width=""
          data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
          data-show-facepile="true">
        </div>
      </div>



    <!--script for icons-->
    <script src="https://kit.fontawesome.com/150d9cdc3a.js" crossorigin="anonymous"></script>
    <!--Dit is het Javascriptje van de navigatie.
    Hier gaan we niet zomaar in sleutelen!-->
    <script src="../assets/js/navigatie.js" crossorigin="anonymous"></script>
    <!--Dit zijn alle links naar Javascriptjes die ook bij Bootstrap horen. 
    Ook hier dient men van af te blijven!-->
    <script src="../assets/bootstrap/bootstrap-js/bootstrap.bundle.js" crossorigin="anonymous"></script>
    <script src="../assets/bootstrap/bootstrap-js/bootstrap.bundle.js.map" crossorigin="anonymous"></script>
    <script src="../assets/bootstrap/bootstrap-js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../assets/bootstrap/bootstrap-js/bootstrap.bundle.min.js.map" crossorigin="anonymous"></script>
    <script src="../assets/bootstrap/bootstrap-js/bootstrap.js" crossorigin="anonymous"></script>
    <script src="../assets/bootstrap/bootstrap-js/bootstrap.js.map" crossorigin="anonymous"></script>
    <script src="../assets/bootstrap/bootstrap-js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="../assets/bootstrap/bootstrap-js/bootstrap.bundle.min.js.map" crossorigin="anonymous"></script>
    <!--Dit is de link naar onze Javascript file.-->
    <script src="../assets/js/javascript.js"></script>
</body>

</html>