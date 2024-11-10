<?php
$titulo = "Hola desde PHP";
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="https://instructure-uploads.s3.amazonaws.com/account_90530000000000001/attachments/435/favicon.png?AWSAccessKeyId=AKIAJFNFXH2V2O7RPCAA&amp;Expires=1942307095&amp;Signature=rjpLn8fyqfhhTO8f5k%2FoeGIk8VQ%3D&amp;response-cache-control=Cache-Control%3Amax-age%3D473364000.0%2C%20public&amp;response-expires=473364000.0">
    <link rel="stylesheet" href="styles/style.css" />

    <title>
        <?php
        echo $titulo;
        ?>
    </title>
</head>

<body>
    <h1>Hello, world!</h1>

    <main>

        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div>
                        <p>Parrafo 1</p>
                    </div>
                    <div>
                        <p>Parrafo 2</p>
                    </div>
                    <div>
                        <p>Parrafo 3</p>
                    </div>
                    <div>
                        <p>Parrafo 4</p>
                    </div>
                    <div>
                        <p>Parrafo 5</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <img class="rounded imagen" src="https://www.w3schools.com/bootstrap4/paris.jpg" />
                </div>
                <div class="col-4">
                    <img class="rounded w-100" src="https://www.w3schools.com/bootstrap4/paris.jpg" />
                </div>
                <div class="col-4">
                    <img class="rounded w-100" src="https://www.w3schools.com/bootstrap4/paris.jpg" />
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#" onclick="alert('Hola')">Ir a la pagina de ejemplo</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="scripts/main.js"></script>
</body>

</html>