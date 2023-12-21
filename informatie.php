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

  <title>'t Festival - Informatie</title>
</head>

<body>
 <?php include('includes/header.php'); ?>

<div class="container">

<div class="row">
<div class="col-md-7">
  <div class="sectiebox">
  <h2>Locatie</h2>
    <p class="infoblok">
        't Festival zal dit jaar plaatsvinden op de Berg van Termunt in Tervuren.
        Als je je GPS gebruikt om te navigeren kan je die best instellen op de Paleizenlaan te Tervuren.
        <br>
        <br>
        Het pad naar de ingang is te vinden op de Tervurenlaan, ter hoogte van de Oppemstraat.
        <br>
        De ingang naar de Berg op de Leuvensesteenweg is voorbehouden voor hulpdiensten en kan dus niet gebruikt worden tijdens het evenement.
    </p>
</div>

<div class="sectiebox">
    <h2>Mobiliteit</h2>
    <br>
    <ul>
      <li>Er is een fietsenstalling voorzien naast de inkom.</li>
      <li>De tramhalte Oppemstraat is dichtbij de inkom.<br>
      <a href="https://www.stib-mivb.be/horaires-dienstregeling2.html?l=en&amp;_line=44&amp;_directioncode=V" target="_blank">Website van de MIVB</a></li>
      <li>Er is een Kiss&Ride zone op de N3 tussen fontijn en de Oppemstraat.</li>
      <li>De bushalte Oppemstraat lis dicht bij de inkom.<br>
      <a href="https://www.delijn.be/nl/haltes/halte/304877/Tervuren_Oppemstraat" target="_blank">Website van De Lijn</a></li>
    </ul>
    </p>
</div>

<div class="sectiebox">
    <h3>Openingsuren</h3>
    <p class="infoblok">
      Vrijdag 13 mei: 17u30 - 01u00
      <br>
      Zaterdag 14 mei: 19u00 - 03u00
      <br>
      Zondag 15 mei: 14u00 - 18u00
    </p>
</div>

<div class="sectiebox">
    <h3>Vrijdag 18+</h3>
    <p class="infoblok">
      Op vrijdag 13 mei organizeren we een dag waar enkel meerderjarige mensen aan zullen mogen deelnemen.
      <br>
      In het weekend is iedereen welkom en is er geen minimimleeftijd.
    </p>
</div>

<div class="sectiebox">
    <h3>Cashless</h3>
    <p class="infoblok">
      We werken op dit evenement niet meer met cash voor drank- en foodstands.
      <br>
      Aan de kassa kan je betalen met PayConiq by Bancontact.
      <br>
      Je kan op voorhand drankjetons kopen om het kopen van drinken te vereenvoudigen.
    </p>
</div>

<div class="sectiebox">
    <h3>Drugsbeleid</h3>
    <p class="infoblok">
      Drugs zijn <b>ABSOLUUT NIET</b>  welkom op 't Festival. Wij werken samen met onze bewakingsagenten en de politie om het evenement en de omgeving drugsvrij te houden.
      <br>
      <p>Drugsbezit = EINDE VAN HET EVENEMENT. Geen uitzonderingen.</p>
    </p>
</div>

<div class="sectiebox">
    <h3>Vragen/problemen met je ticket?</h3>
    <p class="infoblok">
      Het is verboden om zelf drank of eten mee te nemen naar het festival, indien je dit toch mee zou hebben gaan we je aan de ingang vragen om dit in de vuilnisbak te gooien.
      <br>
      <b>Let op: Het is tijdens het evenenement verboden om met open alcoholcontainers in de omgeving rond te lopen.</b>
    </p>
</div>

<div class="sectiebox">
    <h3>Geen 16? Geen alcohol!</h3>
    <p class="infoblok">
      We schenkel geen alcoholische dranken aan personen onder de 16.
      <br>
      Als je onder de 16 bent en we betrappen je op het drinken van alcohol dan zal de alcohol in beslag genomen worden en dit genoteerd worden.
      <br>
      Eens dit nog voorvalt zal je van het domein worden verwijdert.
    </p>
    <h3>Wat mag ik niet vergeten alvorens naar 't Festival af te zakken?</h3>
    <p class="infoblok">
      Je moet zeker <b>je ticket</b> en <b>een identificatiebewijs</b>  bij je hebben. We controleren dit aan de ingang. 
    </p>
</div>

<div class="sectiebox">
    <h3>Respecteer de buurt</h3>
    <p class="infoblok">
      We vragen aan iedereen om bij het verlaten van het evenement-terrein geen overlast te veroorzaken voor de buurtbewoners,
      zo kunnen we zeker zijn dat iedereen van het festival kan genieten.
    </p>
</div>

</div>

<div class="col-md-5">
  <div class="witruimte">
  </div>
  <h3>HEAD PARTNERS</h3>
  <div class="row">
    <div class="col-md-4">
      <a href="https://www.zkg.be/">
      <img class="fullwidth" alt="Partner Geers" src="assets/img/sponsors/Geers.jpg">
</a>
</div>
<div class="col-md-4">
<a href="https://www.zkg.be/">
<img class="fullwidth" alt="Partner Peeters" src="assets/img/sponsors/Peeters.jpg">
</a>
</div>
<div class="col-md-4">
<a href="https://www.zkg.be/">
<img class="fullwidth" alt="Partner ZKG" src="assets/img/sponsors/ZKG.jpg">
</a>
</div>
  </div><br>
  <div class="row">
    <div class="col-md-4">
      <a href="https://www.nationale-loterij.be/onze-spelen/win-for-life">
      <img class="fullwidth" alt="Partner Geers" src="assets/img/sponsors/winforlife.jpg">
</a>
</div>
<div class="col-md-4">
  <a href="https://spansprotection.be/">
<img class="fullwidth" alt="Partner Peeters" src="assets/img/sponsors/spans.jpg">
</a>
</div>
<div class="col-md-4">
<a href="https://www.lindemans.be/">
<img class="fullwidth" alt="Partner ZKG" src="assets/img/sponsors/lindemans.jpg">
</a>
</div>
  </div>

  <h3>PREMIUM PARTNERS</h3>
  <div class="row">
    <div class="col-md-4">
    <a href="https://www.creathings.be/">
      <img class="fullwidth" alt="Partner Creathings" src="assets/img/sponsors/creathings.jpg">
</a>
</div>
<div class="col-md-4">
<a href="https://www.bossproductions.be/">
<img class="fullwidth" alt="Partner Boss" src="assets/img/sponsors/boss.jpg">
</a>
</div>
<div class="col-md-4">
<a href="https://www.stageworks.be/">
<img class="fullwidth" alt="Partner Stageworks" src="assets/img/sponsors/stageworks.jpg">
</a>
</div>
  </div><br>

  <h3>DIAMOND PARTNERS</h3>
  <div class="row">
    <div class="col-md-4">
    <a href="https://www.trixxo.be/">
      <img class="fullwidth" alt="Partner Trixxo" src="assets/img/sponsors/trixxo.jpg">
</a>
</div>
<div class="col-md-4">
<a href="https://www.groupvhc.be/">
<img class="fullwidth" alt="Partner Groupvhc" src="assets/img/sponsors/groupvhc.jpg">
</a>
</div>
<div class="col-md-4">
<a href="https://www.klusjesmangeert.be/">
<img class="fullwidth" alt="Partner Geert" src="assets/img/sponsors/geert.jpg">
</a>
</div>
  </div><br>
  <div class="row">
    <div class="col-md-4">
    <a href="https://nicodewolf.be/">
      <img class="fullwidth" alt="Partner nicodewolf" src="assets/img/sponsors/nicodewolf.jpg">
</a>
</div>
<div class="col-md-4">
<a href="https://www.garagemontana.be/">
<img class="fullwidth" alt="Partner Montana" src="assets/img/sponsors/montana.jpg">
</a>
</div>
<div class="col-md-4">
<a href="https://aceg.be/">
<img class="fullwidth" alt="Partner Aceg" src="assets/img/sponsors/aceg.jpg">
</a>
</div>
  </div><br>
  <div class="row">
    <div class="col-md-4">
    <a href="https://www.dalco-electro.be/">
      <img class="fullwidth" alt="Partner Dalco" src="assets/img/sponsors/dalco.jpg">
</a>
</div>
<div class="col-md-4">
<a href="https://www.jupiler.be/">
<img class="fullwidth" alt="Partner Jupiler" src="assets/img/sponsors/jupiler.jpg">
</a>
</div>
<div class="col-md-4">
<a href="https://www.payconiq.be/">
<img class="fullwidth" alt="Partner Payconic" src="assets/img/sponsors/payconiq.jpg">
</a>
</div>
  </div><br>

  <h3>GOLD PARTNERS</h3>
  <div class="row">
    <div class="col-md-4">
    <a href="https://www.facebook.com/McDoOverijse/">
      <img class="fullwidth" alt="Partner Mcdo" src="assets/img/sponsors/mcdo.jpg">
</a>
</div>
<div class="col-md-4">
<a href="https://www.amplifon.com/nl-be/hoorcentrum/hoorapparaten-vlaams-brabant/amplifon-tervuren-s693">
<img class="fullwidth" alt="Partner Amplifon" src="assets/img/sponsors/amplifon.jpg">
</a>
</div>
<div class="col-md-4">
<a href="https://www.kevinbeeckman.be/">
<img class="fullwidth" alt="Partner Beeckman" src="assets/img/sponsors/beeckman.png">
</a>
</div>
  </div><br>
  <div class="row">
    <div class="col-md-4">
    <a href="https://www.colora.be/">
      <img class="fullwidth" alt="Partner Colora" src="assets/img/sponsors/colora.jpg">
</a>
</div>
<div class="col-md-4">
<a href="https://www.evdw.be/">
<img class="fullwidth" alt="Partner Ericx" src="assets/img/sponsors/ericx.jpg">
</a>
</div>
<div class="col-md-4">
<a href="https://www.furassur.be/">
<img class="fullwidth" alt="Partner KBC" src="assets/img/sponsors/kbc.jpg">
</a>
</div>
  </div><br>
  <div class="row">
    <div class="col-md-4">
    <a href="https://www.lambrechts-tuinmachines.be/">
      <img class="fullwidth" alt="Partner Lambrechts" src="assets/img/sponsors/lambrechts.jpg">
</a>
</div>
<div class="col-md-4">
<a href="https://partner.volvocars.be/nl/acb">
<img class="fullwidth" alt="Partner ACB" src="assets/img/sponsors/acb.jpg">
</a>
</div>
<div class="col-md-4">
<a href="https://bestcarwash.be/">
<img class="fullwidth" alt="Partner Best" src="assets/img/sponsors/best.jpg">
</a>
</div>
  </div><br>
  <div class="row">
    <div class="col-md-4">
    <a href="https://www.colora.be/">
      <img class="fullwidth" alt="Partner Colora" src="assets/img/sponsors/colora.jpg">
</a>
</div>
<div class="col-md-4">
<a href="https://www.evdw.be/">
<img class="fullwidth" alt="Partner Ericx" src="assets/img/sponsors/ericx.jpg">
</a>
</div>
<div class="col-md-4">
<a href="https://www.furassur.be/">
<img class="fullwidth" alt="Partner KBC" src="assets/img/sponsors/kbc.jpg">
</a>
</div>
  </div><br>
  <div class="row">
    <div class="col-md-4">
    <a href="https://krivaro-technics.be/">
      <img class="fullwidth" alt="Partner Krivaro" src="assets/img/sponsors/krivaro.jpg">
</a>
</div>
<div class="col-md-4">
<a href="https://tompie.be/">
<img class="fullwidth" alt="Tompie" src="assets/img/sponsors/tompie.jpg">
</a>
</div>
  </div><br>
  
  <h3>SILVER PARTNERS</h3>
  <div class="row">
    <div class="col-md-4">
    <a href="https://www.isftervuren.org/">
      <img class="fullwidth" alt="Partner ISF" src="assets/img/sponsors/isf.jpg">
</a>
</div>
<div class="col-md-4">
<a href="https://www.nic-assur.be/">
<img class="fullwidth" alt="Partner Nicassur" src="assets/img/sponsors/nicassur.png">
</a>
</div>
<div class="col-md-4">
<a href="https://www.atelierlanaux.be/">
<img class="fullwidth" alt="Partner Lanaux" src="assets/img/sponsors/lanaux.jpg">
</a>
</div>
  </div><br>

    <div class="col-md-4">
    <a href="https://www.tfestival.be/#">
      <img class="fullwidth" alt="Partner Newspaint" src="assets/img/sponsors/newspaint.jpg">
</a>
</div>
<div class="col-md-4">
</div>
<div class="col-md-4">
</div>
  </div><br>
</div>
  </div><br>

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