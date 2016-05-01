<?php
require ('../config.php');
require('../Models/DatabaseConnexion.php');
require('../Models/HotelManager.php');
require('../Models/CustomerManager.php');
require ('../Controllers/process-display-hotel.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <title><?php echo WEB_TITLE; ?></title>
    <link rel="stylesheet" href="css/style.css" media="screen" />
</head>
<body>

<?php require_once('partials/header.php'); ?>
<?php require_once('partials/form.php'); ?>

</body>
</html>