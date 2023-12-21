<?php
session_start();
$user_id = $_SESSION['user_id'];
$user_firstname = $_SESSION['firstname'];
$user_lastname = $_SESSION['lastname'];

include("includes/db_connection.php");
if(isset($_POST['ticket_submit'])){
    $userEmail = $_POST['userEmail'];
    $bezoekDag = $_POST['bezoekDag'];
    $ticketAantal = $_POST['ticketAantal'];

    $query = "INSERT INTO tickets (user_id, user_email, bezoekdag, ticket_aantal)
     VALUES('"
			. $user_id ."', '"
			. $userEmail ."', '"
			. $bezoekDag . "', '"
			. $ticketAantal . "');";
    //echo $query;
    $result = mysqli_query($connection, $query);
    $id = mysqli_insert_id($connection); //ticket_id

    //update het ticket zodat het de qr code bevat (doet wel nog niks nutting maar ze is er)
    $url = 'https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=' . $id;
    $query = "UPDATE tickets SET ticket_qr ='" . $url .  "' WHERE ticket_id=" . $id;
    $result = mysqli_query($connection, $query);
    header('Location: includes/paymentok.php?ticket=' . $id);


} else {
    header("Location: index.php");
}
?>