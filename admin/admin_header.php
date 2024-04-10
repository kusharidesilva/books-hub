<?php
if (isset($message)) {
   foreach ($message as $message) {
      echo '
      <div class="message">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="flex">

      <a href="dashboard.php" class="logo">BOOKS HUB <span>Admin Panel</span></a>

      <nav class="navbar">
         <a href="dashboard.php">dashboard</a>
         <a href="book-add.php">add book</a>
         <a href="admin_users.php">users</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>


      <div id="account-box" class="account-box">
         <p>username: <span><?php echo $_SESSION['username']; ?></span></p>
         <p>email: <span><?php echo $_SESSION['valid']; ?></span></p>
         <div><a href="../logout.php">logout</a></div>
      </div>


   </div>

</header>