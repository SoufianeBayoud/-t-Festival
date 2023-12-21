<?php
session_start();
include("../includes/db_connection.php");
include("functions.php");
if (isset($_SESSION["isAdmin"]) && $_SESSION['isAdmin'] != 1){
	header("Location: ../index.php");
}

if (isset($_SESSION["isAdmin"]) != 1){
	header("Location: ../index.php");
}
    
if (isset($_POST['edit_user'])) {
    editUsers();
} else if (isset($_POST['add_user']) AND $_POST['password'] != $_POST['password_check']) {
    echo "<div  class='container alert alert-danger'>Fout in passwoord, probeer opnieuw</div>";
}
    $query = "SELECT * FROM users WHERE user_id =" . $_GET['user_id'];
    $result = mysqli_query($connection, $query);
     while($row = mysqli_fetch_assoc($result)) { 
?>
<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Dit is de CSS die bij Bootstrap hoort.
    Pas deze NIET aan, dat zorgt alleen maar voor problemen.-->
  <!--Dit is de main stylesheet. Deze mogen we aanpassen.-->
  <link rel="stylesheet" href="../assets/css/trends.css">
  <link rel="stylesheet" href="../assets/css/navigatie.css">
  <!--Dit is de link naar de JQuery library.-->
  <script src="../assets/jquery/jquery-3.3.1.min.js"></script>
  <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
   crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"
    crossorigin="anonymous">

  <title>'t Festival - Admin</title>
</head>
<body>
<?php include("includes/admin_header.php"); ?>
    <div class="container form">
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="user_id" value="<?php echo $row['user_id']?>">
            <div class="form-group">
                <label for="firstname">Voornaam</label>
                <input class="form-control login" type="text" name="firstname" value="<?php echo $row['firstname']?>" required >
            </div>
            <div class="form-group">
                <label for="lastname">Achternaam</label>
                <input class="form-control login" type="text" name="lastname" value="<?php echo $row['lastname']?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control login" type="email" name="email" value="<?php echo $row['email']?>">
            </div>
            <div class="form-group">
                <label for="password">Wachtwoord</label> <input type="checkbox" onclick="showPassword()">
                <input class="form-control login" type="password" name="password" id="password">
            </div>
             <div class="form-group">
                <label for="password_check">Wachtwoord (Check)</label>
                <input class="form-control login" type="password" name="password_check">
            </div>
            <div class="form-group">
                <label for="isAdmin">Admin</label>
                <input type="checkbox" name="isAdmin" id="isAdmin" <?php if($row['isAdmin'] == 1){ echo "checked";}?>>
            </div>
            <div class="form-group">
                <input class="btn btn-primary login" type="submit" name="edit_user" value="Edit">
            </div>
        </form>
     </div>
     </body>
     <script src="https://kit.fontawesome.com/150d9cdc3a.js" crossorigin="anonymous"></script>
    <!--Dit is het Javascriptje van de navigatie.
    Hier gaan we niet zomaar in sleutelen!-->
    <script src="../assets/js/navigatie.js" crossorigin="anonymous"></script>
    <!--Dit zijn alle links naar Javascriptjes die ook bij Bootstrap horen. 
    Ook hier dient men van af te blijven!-->
    <script src="../assets/bootstrap/bootstrap-js/bootstrap.bundle.js" crossorigin="anonymous"></script>
    <script src="../assets/bootstrap/bootstrap-js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../assets/bootstrap/bootstrap-js/bootstrap.js" crossorigin="anonymous"></script>
    <script src="../assets/bootstrap/bootstrap-js/bootstrap.min.js" crossorigin="anonymous"></script>
    <!--Dit is de link naar onze Javascript file.-->
    <script src="../assets/js/javascript.js"></script>
    </html>
<?php } ?>