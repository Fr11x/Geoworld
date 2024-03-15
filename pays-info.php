<?php  require_once 'header.php'; ?>
<?php
require_once 'inc/manager-db.php';
$pays = $_GET['pays'];
print_r(paysInfo());
?>
