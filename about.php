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
               
                    <div class = "about-body-text">
                        <div class = "title">
                            <h2>ABOUT BOOKS HUB</h2> 
                        </div>

                        <div class="about-img">
                            <img src = "./img/about.png" alt = "about">
                        </div>

                        <div class="box1">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id totam voluptatem saepe eius ipsum nam provident sapiente, natus et vel eligendi laboriosam odit eos temporibus impedit veritatis ut, illo deserunt illum voluptate quis beatae quod. Necessitatibus provident dicta consectetur labore!</p>
                        </div>
                    </div>
              
            </div>
        </section>


        <?php @include 'footer.php'; ?>

    
    </body>

</html>