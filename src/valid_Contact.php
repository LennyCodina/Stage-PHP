<?php
require_once(__DIR__ . '/../includes/variables.php');
require_once(__DIR__ . '/../includes/functions.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <?php 
            session_start();
            $curErrors = verifyForm($_GET);
            if(!empty($curErrors)){
                $_SESSION['curErrors'] = $curErrors;
                header("location: Contact.php");
                exit;
            }
        ?>
        <h1>
            <h2>Formulaire envoyé avec succès !</h2>
            <h3> vos informations sont :</h3>
            <p>Email : <?php echo $_GET['email']; ?></p>
            <p>Message : <?php echo $_GET['message']; ?></p>
        </h1>
    </div>
    <?php require_once(__DIR__ . '/footer.php'); ?>
</body>

</html>