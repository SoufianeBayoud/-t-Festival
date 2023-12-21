<?php
include('includes/db_connection.php');
/*
if (!isset($_SESSION["user_id"])){
	header("Location: index.php");
}
*/
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

  <!--Dit zijn de links naar de css voor de navigatie en de css van de footer-->
  <link rel="stylesheet" href="assets/css/navigatie.css">
  <link rel="stylesheet" href="assets/css/footer.css">

  <!--Deze link tracht te worden toegevoegd om de footer die geïnclude wordt te laten werken.-->
  <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  
  <!--Dit is de link naar de JQuery library.-->
  <script src="assets/jquery/jquery-3.3.1.min.js"></script>
  <title>'t Festival - Home</title>
</head>

<body>
 <?php
 include('includes/header.php');
 ?>


<!--Je code hiertussen.-->
<div class="container">


<div class="row">
<div class="col-md-4"></div>

<div class="col-md-4">
<form class="bestelformulier" action="process_ticket.php" method="POST">
  <div class="form-group">
  <?php
    if (!isset($_SESSION["user_id"])){
	    echo "<div class='alert alert-danger'>Je moet ingelogd zijn om een ticket te kopen</div>";
    }
  ?>
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="ticketEmail" name="userEmail" value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?>" >
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Dag van bezoek</label>
    <select class="form-control" id="bezoekDag" name="bezoekDag">
      <option>Vrijdag 13 mei</option>
      <option>Zaterdag 14 mei</option>
      <option>Zondag 15 mei</option>
    </select>
  </div>
  <label for="exampleFormControlSelect2">Aantal tickets</label>
    <select class="form-control" id="ticketAantal" name="ticketAantal">
      <option value="1">1 ticket</option>
      <option value="2">2 tickets</option>
      <option value="3">3 tickets</option>
      <option value="4">4 tickets</option>
      <option value="5">5 tickets</option>
      <option value="6">6 tickets</option>
      <option value="7">7 tickets</option>
      <option value="8">8 tickets</option>
      <option value="9">9 tickets</option>
      <option value="10">10 tickets</option>
    </select><br>
    <p>Totaalprijs: €xx,xx</p>
    <?php if(isset($_SESSION['user_id'])) { ?>
    <button type="submit" class="btn btn-primary bestelknop" name="ticket_submit">Bestellen</button>
    <?php } ?>
  </div>
  
</form>
</div>

<div class="col-md-4"></div>

</div>



</div>
<!--Je code hiertussen.-->

 <br>
    <?php include('includes/footer.php'); ?>


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