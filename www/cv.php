<!DOCTYPE html>
<html>
    <head>
        <title>Mon CV</title>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/cv.css">

    </head>

    
    <body>

    <?php require_once "Config/config.php"?>
    <?php require_once "Config/navbar1.php"?>
    <div class="container">
        <div class="center-align">
            <img src="img/cv/cv.jpg" id="image" width="40%" height="auto" class="cv-image" />
            <div class="buttons-container">
                <button class="zoom-button" id="zoom-in">+</button>
                <button class="zoom-button" id="zoom-out">-</button>
            </div>
            <br><br>
            <a href="img/cv/cv2023.pdf" download class="waves-effect waves-light btn btn-download" id="btn-download">Télécharger mon CV</a>
        </div>
    </div>
    </body>
</html>

<script src="js/jqueryjsmin.js" ></script>
<script src="js/materialize.js"></script>
<script src="js/cv.js"></script>
