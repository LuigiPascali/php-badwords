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
        <link rel="stylesheet" href="./css/general.css">

        <title> PHP Badwords </title>
        
    </head>

    <body>

        <!-- ! Main Start -->
        <main>

            <div class="container mt-5">

                <div class="row">

                    <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">

                        <h2 class="mt-3 mb-4 text-center"> 
                            <i class="fas fa-pencil-alt"></i>
                            Inserisci il paragrafo e la parola da censurare
                        </h2>

                        <form action="process.php" method="post">

                            <div class="form-group">

                                <label for="paragraph" class="mb-2">
                                    <i class="fas fa-align-left"></i>
                                    Paragrafo:
                                </label>

                                <textarea class="form-control" name="paragraph" id="paragraph" cols="4" rows="50"></textarea>

                            </div>

                            <div class="form-group mb-2">

                                <label for="word" class="mt-2 mb-2">
                                    <i class="fas fa-filter"></i>
                                    Parola da censurare:
                                </label>

                                <input type="text" class="form-control" name="word" id="word">

                            </div>

                            <button type="submit" class="btn btn-primary mt-2 mb-2">
                                <i class="fas fa-paper-plane"></i>
                                Invia
                            </button>

                        </form>

                    </div>

                </div>

            </div>
                                    
        </main>

        <!-- ! Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    </body>
    
</html>