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

    <?php @include 'admin_header.php'; ?>
 
    <?php
    include_once('./config.php');
    if (isset($_GET['book_id']) && is_numeric($_GET['book_id'])) {
        $book_id = $_GET['book_id'];
        $sql = "SELECT * FROM books WHERE b_id = $book_id";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
    ?>
            <main>
                <section id="books">
                    <div class="books-main-container">
                        <h1><?= $row['book_name'] ?></h1>
                    </div>
                </section>
            </main>
            <section class="book-cover" id="book-cover">
                <div class="container">
                    <img src="./img/<?= $row['img'] ?>" alt="<?= $row['book_name'] ?>">
                    <h1><?= $row['book_name'] ?></h1>
                    <p><?= $row['story'] ?></p>
                </div>
            </section>
    <?php
        } else {
            echo "No book found with the provided ID";
        }
    } else {
        echo "No book ID provided in the URL";
    }

    $conn->close();
    ?>



    <?php @include 'footer.php'; ?>


</body>

</html>