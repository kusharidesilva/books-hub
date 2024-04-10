<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo.jpg" type="image/jpg">
    <link rel="stylesheet" href="style.css">
    <script src="./main.js" defer></script>
    <title>BOOKS HUB</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <?php @include 'header.php'; ?>


    <main>

        <section id="books"> 

            <div class="books-main-container">

                <h1>LIBRARY</h1>

            </div>

            <!-- </div> -->

        </section>

    </main>


    <!-- books -->
    <section class="book-cover" id="book-cover">
        <div class="container">
            <div class="title">
                <h2>LIBRARY</h2>
            </div>


            <div class="book-container">
                <?php
                include_once('./config.php');
                $filter = isset($_GET['type']) ? "WHERE book_type = '" . $_GET['type'] . "'" : "";
                $sql = "SELECT b_id, book_name, img, title, LEFT(story, 200) AS story_short, book_type FROM books $filter";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="book-card">
                            <a href="./admin/book-add.php $row['b_id'] ?>">
                                <img src="./img/<?= $row['img'] ?>" alt="<?= $row['book_name'] ?>">
                                <h1><?= $row['book_name'] ?></h1>
                                <p><?= $row['story_short'] ?>...</p>
                            </a>
                        </div>
                <?php
                    }
                } else {
                    echo "No results found";
                }
                $conn->close();
                ?>
            </div>

        </div>


    </section>


    <?php @include 'footer.php'; ?>


</body>

</html>