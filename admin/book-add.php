<?php

@include '../config.php';

session_start();

$admin_id = $_SESSION['id'];

if (!isset($admin_id)) {
   header('location: ../login.php');
};


if (isset($_POST['add_book'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $story = mysqli_real_escape_string($conn, $_POST['story']);
   $book_type = mysqli_real_escape_string($conn, $_POST['book_type']);
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folter = '../img/' . $image;


   $select_book_name = mysqli_query($conn, "SELECT book_name FROM `books` WHERE book_name = '$name'") or die('query failed');

   if (mysqli_num_rows($select_book_name) > 0) {
      $message[] = 'book name already exist!';
   } else {
      $insert_book = mysqli_query($conn, "INSERT INTO `books`(book_name, story, img, book_type) VALUES('$name', '$story', '$image', '$book_type')") or die('query failed');

      if ($insert_book) {
         if ($image_size > 2000000) {
            $message[] = 'image size is too large!';
         } else {
            move_uploaded_file($image_tmp_name, $image_folter);
            $message[] = 'book added successfully!';
         }
      }
   }
}

if (isset($_GET['delete'])) {

   $delete_id = $_GET['delete'];

   $stmt = $conn->prepare('DELETE FROM `books` WHERE b_id = ?');
   $stmt->bind_param("s", $delete_id);
   $stmt->execute();

   $stmt->close();

   header('location:book-add.php');
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


      <section class="add-book">

         <h1 class="title">ADD NEW STORY</h1>

         <form action="book-add.php" method="POST" enctype="multipart/form-data">
            <div class="flex">
               <div class="inputBox">
                  <input type="text" name="name" class="box" required placeholder="enter book name">
                  <select class="box" required name="book_type">
                     <option value="ShortStory" selected>Short Story</option>
                     <option value="Adventure">Adventure</option>
                     <option value="Fantacy">Fantacy</option>
                     <option value="Horror">Horror</option>
                     <option value="Mystery">Mystery</option>
                  </select>

               </div>
               <input type="file" name="image" required class="box" accept="image/jpg, image/jpeg, image/png">
            </div>
            </div>
            <textarea class="box" name="story" required placeholder="enter book details" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="add book" name="add_book">
         </form>

      </section>


      <section class="dashboard">

         <h1 class="title">Books</h1>

         <div class="box-container">

            <?php
            $sql = "SELECT * FROM books";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
               while ($row = $result->fetch_assoc()) {
            ?>

                  <div class="box">
                     <div class="book-cover-content">
                        <a href="#" class="book-cover-item">
                           <div class="book-cover-img">
                              <img class="image" src="../img/<?= $row['img'] ?>" alt="<?= $row['book_name'] ?>">
                           </div>
                           <div class="book-cover-title">
                              <h1><?php echo $row['book_name']; ?></h1>
                           </div>
                           <div>
                              <a href="update_book.php?update=<?php echo $row['b_id']; ?>" class="option-btn">update</a>
                              <a href="book-add.php?delete=<?php echo $row['b_id']; ?>" class="delete-btn" onclick="return confirm('delete this book?');">delete</a>
                           </div>
                        </a>
                     </div>
                  </div>

            <?php
               }
            } else {
               echo '<p class="empty">No book found </p>';
            }
            ?>



         </div>

      </section>



   </body>

</html>