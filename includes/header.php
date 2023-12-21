<?php
session_start();
ob_start()
?>
<header class="header-top">
    <nav class="nav-top">
      <a href="index.php" class="nav-link"><img src="assets/img/logo_aangepast.png"></a>
      <a href="index.php" class="nav-link home">Home</a>
      <a href="lineup.php" class="nav-link">Line Up</a>
      <a href="tickets.php" class="nav-link">Tickets</a>
      <a href="informatie.php" class="nav-link">Informatie</a>
      <?php if(isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == 1){ ?>
        <a href="admin/index.php" class="nav-link">Admin</a>
      <?php }?>
      <?php if(isset($_SESSION['firstname'])) { ?>
      <a href="includes/logout.php" class="nav-link accent" id="first-accent">Log out</a>
      <p class="session_user_name"><?php echo $_SESSION['firstname']; ?></p>
      <?php } else { ?>
        <a href="login.php" class="nav-link accent" id="first-accent">Sign in</a>
        <a href="create.php" class="nav-link accent">Sign up</a>
        <?php } ?>
      
    </nav>
  </header>