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
        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>BOOKS HUB</title>
    </head>

    <body>

       <?php @include 'header.php'; ?>


        <main>

            <section id="about" class="dd">

                <div class="about-main-container">
                <h1>ABOUT BOOKS HUB</h1>
                <br> 
                </div>

            </section>

        </main>

        
        <!-- body -->
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