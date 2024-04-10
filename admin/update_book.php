<?php

@include '../config.php';

session_start();

$admin_id = $_SESSION['id'];

if (!isset($admin_id)) {
   header('location: ../login.php');
};


if (isset($_POST['update_book'])) {

   $update_p_id = $_POST['update_p_id'];
   $name = mysqli_real_escape_string($conn, $_POST['name']);

   $details = mysqli_real_escape_string($conn, $_POST['details']);

   mysqli_query($conn, "UPDATE `books` SET book_name = '$name', story = '$details' WHERE b_id = '$update_p_id'") or die('query failed');

   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folter = '../img/' . $image;
   $old_image = $_POST['update_p_image'];

   if (!empty($image)) {
      if ($image_size > 2000000) {
         $message[] = 'image file size is too large!';
      } else {
         mysqli_query($conn, "UPDATE `books` SET img = '$image' WHERE b_id = '$update_p_id'") or die('query failed');
         move_uploaded_file($image_tmp_name, $image_folter);
         unlink('../img/' . $old_image);
         $message[] = 'image updated successfully!';
      }
   }

   $message[] = 'product updated successfully!';
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

      <section class="update-book">

         <?php

         $update_id = $_GET['update'];
         $select_products = mysqli_query($conn, "SELECT * FROM `books` WHERE b_id = '$update_id'") or die('query failed');
         if (mysqli_num_rows($select_products) > 0) {
            while ($fetch_products = mysqli_fetch_assoc($select_products)) {
         ?>

               <form action="update_book.php?update=<?php echo $fetch_products['b_id']; ?>" method="post" enctype="multipart/form-data">
                  <img src="../img/<?php echo $fetch_products['img']; ?>" class="image" alt="">
                  <input type="hidden" value="<?php echo $fetch_products['b_id']; ?>" name="update_p_id">
                  <input type="hidden" value="<?php echo $fetch_products['img']; ?>" name="update_p_image">
                  <input type="text" class="box" value="<?php echo $fetch_products['book_name']; ?>" required placeholder="update book name" name="name">

                  <textarea name="details" class="box" required placeholder="update book details" cols="30" rows="10"><?php echo $fetch_products['story']; ?></textarea>
                  <input type="file" accept="image/jpg, image/jpeg, image/png" class="box" name="image">
                  <input type="submit" value="update book" name="update_book" class="btn">
                  <!-- <a href="book_add.php" class="option-btn">go back</a> -->
                  <a href="javascript:history.go(-1)" class="option-btn">Go Back</a>
               </form>

         <?php
            }
         } else {
            echo '<p class="empty">no update product select</p>';
         }
         ?>

      </section>

      <script src="js/admin_script.js"></script>

   </body>

</html>