<?php  require_once 'header.php'; ?>
<?php
require_once 'inc/manager-db.php';
$pays = $_GET['pays'];
$info = paysInfo($pays);
?>

<table>
    <tr>
        <th>Nom du pays</th>
        <th> Langue officiel</th>
        <th>Population</th>
        <th>Esperance de vie</th>
        <th>Produit national brut du pays</th>
        <th>Chef d'Etat</th>
    </tr>

        <?php foreach ($info as $infos): ?>
            <tr>
                <td><?php echo $infos-> Name ?> </td>
                <td><?php echo getLanguage($infos-> id) ?> </td>
                <td><?php echo $infos-> Population ?> </td> 
                <td><?php echo $infos-> LifeExpectancy ?> ans </td> 
                <td><?php echo $infos-> GNP ?> </td>       
                <td><?php echo $infos-> HeadOfState ?> </td>     
            </tr>
        <?php endforeach; ?>
</table>
<!-- 
<form action="update.php" method="GET">
    <input type="hidden" name="pays" value="<?php echo $pays; ?>">
    <input type="submit" value="Mise à jour">
</form> -->

</table>
<?php require_once("javascripts.php") ?>
<?php require_once("footer.php") ?>

