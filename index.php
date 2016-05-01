<?php
require ('config.php');
require('Models/DatabaseConnexion.php');
require('Models/HotelManager.php');

$datahotel = new HotelManager();
$connexion= new DatabaseConnexion();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <title><?php echo WEB_TITLE; ?></title>
    <link rel="stylesheet" href="Views/css/style.css" media="screen" />
</head>
<body>
<?php require_once('Views/partials/header.php'); ?>
<?php require_once('Views/partials/content.php'); ?>

</body>
</html>
