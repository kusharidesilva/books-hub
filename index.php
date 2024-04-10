<?php
session_start();

include("./config.php");
if (!isset($_SESSION['valid'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Hub</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./img/logo.jpg" type="image/jpg">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script src="./main.js" defer></script>

</head>

<body>

    <?php @include 'header.php'; ?>


    <main>

        <section id="header">

            <h1>WELCOME TO THE BOOKS HUB</h1>
            <p>
                "Exploring worlds within pages: Dive into captivating stories and timeless knowledge at Books Hub." 
            </p>
            <br>

        </section>


    </main>


    <!-- book-cover -->
    <section class="book-cover" id="book-cover">
        <div class="container">
            <div class="title">
                <h2>LIBRARY</h2>
            </div>
 
            <div class="book-container">
                <div class="book-cover-content">

                    <a href="./books.php?type=ShortStory" class="book-cover-item">
                        <div class="book-cover-img">
                            <img src="./img/mermaid.png" alt="mermaid">
                        </div>
                        <div class="book-cover-title">
                            <p>SHORT STORIES</p> 

                        </div>
                    </a>
                </div>

                <div class="book-cover-content">

                    <a href="./books.php?type=adventure" class="book-cover-item">
                        <div class="book-cover-img">
                            <img src="./img/adventure2.png" alt="adventure">
                        </div>
                        <div class="book-cover-title">
                            <p>ADVENTURE</p>
                        </div>
                    </a>
                </div>

                <div class="book-cover-content">

                    <a href="./books.php?type=fantasy" class="book-cover-item">
                        <div class="book-cover-img">
                            <img src="./img/fantacy2.png" alt="fantacy">
                        </div>
                        <div class="book-cover-title">
                            <p>FANTASY</p>
                        </div>
                    </a>
                </div>

                <div class="book-cover-content">

                    <a href="./books.php?type=horror" class="book-cover-item">
                        <div class="book-cover-img">
                            <img src="./img/horror2.png" alt="horror">
                        </div>
                        <div class="book-cover-title">
                            <p>HORROR</p>
                        </div>
                    </a>
                </div>

                <div class="book-cover-content">

                    <a href="./books.php?type=mystery" class="book-cover-item">
                        <div class="book-cover-img">
                            <img src="./img/mystery2.png" alt="mystery">
                        </div>
                        <div class="book-cover-title">
                            <p>MYSTERY</p>
                        </div>
                    </a>
                </div>



            </div>

        </div>
    </section>


<!-- about -->

    <section class = "about-body" id = "about-body">
            <div class = "about-body-container">
                <div class = "title">
                    <h2>ABOUT BOOKS HUB</h2>
                    <img src = "./img/about.png" alt = "about">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id totam voluptatem saepe eius ipsum nam provident sapiente, natus et vel eligendi laboriosam odit eos temporibus impedit veritatis ut, illo deserunt illum voluptate quis beatae quod. Necessitatibus provident dicta consectetur labore!</p>
                </div>
            </div>
        </section>

    <?php @include 'footer.php'; ?>


</body>

</html>