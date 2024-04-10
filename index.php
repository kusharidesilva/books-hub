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
                            <img src="./img/horror1.png" alt="horror">
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
                    <p>"Books Hub" is a great website for people who love books. It has many different kinds of books, 
                        like short stories, adventure stories, fantasy stories, horror stories, and mystery stories. 
                        You can easily find your favorite stories and start reading. The website is designed to make reading easy and enjoyable. 
                    <br><br>
                    With a user-friendly interface, accessing your favorite stories is as easy as logging in. 
                    Once you're in, you can dive into the captivating world of literature and lose yourself in the 
                    pages of our vast collection. Whether you prefer to read on a lazy Sunday afternoon or unwind with a 
                    good book after a long day, "Books Hub" is your go-to place for literary escapades.
                    <br><br>
                    Our website is designed to provide a seamless reading experience, allowing you to immerse yourself in 
                    the stories without any distractions. 
                    <br><br>
                    "Books Hub" is here to make your reading experience more enjoyable and fulfilling.</p>                
                </div>
            </div>
        </section>

    <?php @include 'footer.php'; ?>


</body>

</html>