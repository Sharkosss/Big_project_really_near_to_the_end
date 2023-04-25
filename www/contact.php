<?php
//Traitement du formulaire
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Connexion à la base de données
    $pdo = new PDO(
        'mysql:host=localhost;dbname=contact;',
        'root',
        'root',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    // Insertion des données du formulaire
    $stmt = $pdo->prepare("INSERT INTO contact (name, email, message) VALUES (:name, :email, :message)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);
    $stmt->execute();

    $pdo = null;
    $message_envoye = "Votre message a été envoyé avec succès !";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Me contacter</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/stylepage.css">
    <meta charset="UTF-8">
</head>
<body>
    <?php require_once "Config/config.php"?>
    <?php require_once "Config/navbar2.php"?>>
    <div id="main">
        <section>
            <h1>Me contacter</h1>
            <?php if (isset($message_envoye)) { ?>
                <div class="success-message"><?php echo $message_envoye; ?></div>
                    <?php unset($message_envoye); } ?>
 

            <form action="" method="post">
                <input type="text" name="name" placeholder="Nom" required /><br />
                <input type="email" name="email" placeholder="Email" required /><br />
                <textarea name="message" placeholder="Votre message" required></textarea><br />
                <input type="submit" name="submit" value="Envoyer" class="oval-button" />
            </form>
        </section>
    
    
        <footer class="footer">
            © Mon site web - Tous droits réservés
        </footer>
    </div>

</body>
</html>
<script src="js/jqueryjsmin.js" ></script>
<script src="js/materialize.js"></script>
<script src="js/contact.js"></script>
