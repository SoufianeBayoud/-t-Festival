<?php
include('includes/db_connection.php');
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
  
  <!--Dit is de link naar de Icon library-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--Dit is de link naar de JQuery library.-->
  <script src="assets/jquery/jquery-3.3.1.min.js"></script>

  <title>'t Festival - Home</title>
</head>

<body>
 <?php include('includes/header.php'); ?>

  <!--Dit is de carousel.-->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="slideImg d-block w-100" src="assets/img/slider1.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h1>test</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, quisquam?</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="slideImg d-block w-100" src="assets/img/slider2.png" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, quisquam?</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="slideImg d-block w-100" src="assets/img/slider3.png" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, quisquam?</p>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="row">
      <div class="col-sm-8">

      </div>
      <div class="col-sm-4">
        <div class="fb-page" data-href="https://www.facebook.com/tfestival/" data-tabs="timeline" data-width=""
          data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
          data-show-facepile="true">
          <blockquote cite="https://www.facebook.com/tfestival/" class="fb-xfbml-parse-ignore"><a
              href="https://www.facebook.com/tfestival/">&#039;t Festival</a></blockquote>
        </div>
      </div>
    </div>
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