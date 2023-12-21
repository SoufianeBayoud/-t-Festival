<?php
session_start();
include("../includes/db_connection.php");
include "functions.php";
if (isset($_SESSION["isAdmin"]) && $_SESSION['isAdmin'] != 1){
	header("Location: ../index.php");
}

if (isset($_SESSION["isAdmin"]) != 1){
	header("Location: ../index.php");
}
if(isset($_GET['delete'])){
  $query = "SELECT isAdmin FROM users WHERE user_id = " . $_GET['delete'];;
  $result = mysqli_query($connection, $query);
  while($row = mysqli_fetch_assoc($result)){
    $admin_status = $row['isAdmin'];
  }
  
}

if (isset($_GET['delete']) && $admin_status != 1) {
   
  $query = "DELETE FROM users WHERE user_id =" . $_GET['delete'];
  $result = mysqli_query($connection, $query);
  //echo $query;
  header("Location: show_user.php");
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
  <?php
  include("includes/admin_header.php");
  ?>
	<div class="container form">
    <hr>
		<p>Show all users</p>
        <div>
          <?php
          if (isset($_GET['delete']) && $admin_status == 1) {
            echo "<div  class='container alert alert-danger'>DENIED: You can't delete an Admin user!</div>";
          }
          
          ?>
        <table id="showTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>email</th>
                        <th>Admin</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
            <?php
                global $connection;
                $query = "SELECT * FROM users";
                $result = mysqli_query($connection, $query);
            
                while($row = mysqli_fetch_assoc($result)){
            ?>
                    <tr>
                        <td><?php echo $row['user_id']?></td>
                        <td><?php echo $row['firstname']?></td>
                        <td><?php echo $row['lastname']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php if($row['isAdmin'] == 1){echo "Yes";} else{echo "No";}?></td>
                        <td><?php echo "<a href='show_user.php?delete=" . $row['user_id'] . "'onclick=\"return confirm('Are you sure you want to delete this user?');\">✖  DELETE</a>"; ?></td>
                        <td><?php echo "<a href='edit_user.php?user_id=" . $row['user_id'] . "'>✎ EDIT</a>"; ?></td>
                        <!--onclick="return confirm('Are you sure you want to delete this item?');  -->                      
                    </tr>
            <?php } ?>
            </tbody>
            </table>
            </div> 
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
    <script src="../assets/bootstrap/bootstrap-js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../assets/bootstrap/bootstrap-js/bootstrap.js" crossorigin="anonymous"></script>
    <script src="../assets/bootstrap/bootstrap-js/bootstrap.min.js" crossorigin="anonymous"></script>
    <!--Dit is de link naar onze Javascript file.-->
    <script src="../assets/js/javascript.js"></script>

    
</body>

</html>