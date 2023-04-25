<?php
//Traitement du formulaire
if (isset($_POST['submit'])) {
    $text = $_POST['text'];

    // Connexion à la base de données
    $pdo = new PDO(
        'mysql:host=localhost;dbname=livredor;',
        'root',
        'root',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    // Insertion des données du formulaire
    $stmt = $pdo->prepare("INSERT INTO livredor (text) VALUES (:text)");
    $stmt->bindParam(':text', $text);
    $stmt->execute();

    $pdo = null;
    header('Location: livredor.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Livre d'or et de platine</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/stylepage.css">
    <meta charset="UTF-8">
</head>
<body>
    <?php require_once "Config/config.php"?>
    <?php require_once "Config/navbar1.php"?>

    <div id="main">
        <section>
            <h1>Le livre d'or et de platine</h1>

            <form action="" method="post">
                
                <textarea name="text" placeholder="Votre message" required></textarea><br />
                <input type="submit" name="submit" value="Envoyer" class="oval-button" />
            </form>
        </section>
        

        <div class="messageriegitanne">
            <?php
            $sql = "SELECT * FROM livredor";
            $pre = $pdo_livredor-> prepare($sql);
            $pre->execute();
            $messages = $pre->fetchall(PDO::FETCH_ASSOC);

            foreach($messages as $message){
            ?> 
            <?php echo $message['text']?><br>
            <?php
            }
            
            ?>
        
        </div>
      
    
    
        <footer class="footer">
            © Mon site web - Tous droits réservés
        </footer>
    </div>

</body>
</html>
<script src="js/jqueryjsmin.js" ></script>
<script src="js/materialize.js"></script>
<script src="js/contact.js"></script>
