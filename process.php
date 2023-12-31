<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ! FONTAWESOME -->

        <link rel="icon" href="ico/favicon.ico" type="image/x-icon">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous'/>

        <!-- ! FONTS -->
       
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    
        <!-- ! BOOTSTRAP -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        
        <!-- ! CSS -->

        <link rel="stylesheet" href="./css/reset.css">

        <title> PHP Badwords - Process </title>
        
    </head>

    <body>

        <!-- ! Main Start -->
        <main>

        <div class="container mt-5">

            <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $paragraph = $_POST["paragraph"];
                    $wordToCensor = $_POST["word"];

                    echo "<h2 class='mb-3'> Testo inserito:</h2> ";
                    echo "<p class='mb-3'> $paragraph </p>";
                    echo "<p>Lunghezza testo: " . strlen($paragraph) . "</p>";

                    $censoredParagraph = str_ireplace($wordToCensor, '***', $paragraph);

                    echo "<h2 class='mt-5 mb-3'> Testo censurato: </h2>";
                    echo "<p class='mb-3'> $censoredParagraph </p>";
                    echo "<p>Lunghezza testo censurato: " . strlen($censoredParagraph) . "</p>";
                }

            ?>

        </div>
                                    
        </main>

        <!-- ! Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    </body>
    
</html>