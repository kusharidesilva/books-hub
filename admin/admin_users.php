<?php

@include '../config.php';

session_start();

$admin_id = $_SESSION['id'];

if (!isset($admin_id)) {
   header('location: ../login.php');
};

if (isset($_GET['delete'])) {
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `users` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_users.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="../img/logo.jpg" type="image/jpg">
   <link rel="stylesheet" href="../admin/admin_style.css">
   <script src="../main.js" defer></script>
   <title>BOOKS HUB</title>
   <!-- font awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

   <body>

      <?php @include 'admin_header.php'; ?>

      <section class="users">

         <h1 class="title">users account</h1>

         <div class="box-container">
            <?php
            $select_users = mysqli_query($conn, "SELECT * FROM `users`") or die('query failed');
            if (mysqli_num_rows($select_users) > 0) {
               while ($fetch_users = mysqli_fetch_assoc($select_users)) {
            ?>
                  <div class="box">
                     <p>user id : <span><?php echo $fetch_users['Id']; ?></span></p>
                     <p>username : <span><?php echo $fetch_users['Username']; ?></span></p>
                     <p>email : <span><?php echo $fetch_users['Email']; ?></span></p>
                    
                     <a href="admin_users.php?delete=<?php echo $fetch_users['Id']; ?>" onclick="return confirm('delete this user?');" class="delete-btn">delete</a>
                  </div>
            <?php
               }
            }
            ?>
         </div>

      </section>

      <script src="js/admin_script.js"></script>

   </body>

</html>