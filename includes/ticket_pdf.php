<?php
session_start();
include('db_connection.php');
$user_id = $_SESSION['user_id'];
$user_firstname = $_SESSION['firstname'];
$user_lastname = $_SESSION['lastname'];
$row = NULL;
if(isset($_GET['ticket'])){
  $query = "SELECT * FROM tickets WHERE ticket_id = " . $_GET['ticket'];;
  $result = mysqli_query($connection, $query);
  $row = mysqli_fetch_assoc($result);
}
if($row === NULL){
  header("Location: ../index.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
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

  <!--Dit zijn de links naar de css voor de navigatie en de css van de footer-->
  <!--<link rel="stylesheet" href="assets/css/navigatie.css">-->
  <!--<link rel="stylesheet" href="assets/css/footer.css">-->

  <!--Deze link tracht te worden toegevoegd om de footer die geïnclude wordt te laten werken.-->
  <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  
  <!--Dit is de link naar de JQuery library.-->
  <script src="assets/jquery/jquery-3.3.1.min.js"></script>
<style>
  <?php
  echo file_get_contents('../assets/css/ticket.css');
  ?>
</style>
    <title>ticket for <?php echo $user_firstname; ?></title>
</head>
<body>

<div class="row">
    <div class="col-md-4"></div>

    <div class="col-md-4">

    
<div class="event">
  <span class="tfestivalspan">'t Festival</span><br>
  <div class="info">
    <?php echo $row['bezoekdag'];?> <br>
    <?php echo $user_lastname . " ". $user_firstname;?><br>
    <?php echo $row['user_email'];?>
  </div>
  <div class="ticketaantalweergave">
    <?php echo "Tickets:<br> x " . $row['ticket_aantal'];?>
  </div>
</div>


    </div>

    <div class="col-md-4"></div>
</div>
</body>
</html>