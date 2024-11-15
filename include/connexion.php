<?php
//Dans connexion.php on affecte la valeur de role et authentification.
$title ="Connexion";
ob_start();
?>
    <h1>Connexion</h1>



<?php $content = ob_get_clean(); ?>

<?php $role=0;//$role= array(0 => Visitor, 1 => Admin, 2 => Seller)?>
<?php $varSell="Sell";$varData="Data";?>
<?php include 'c:/caisse1124/layout.php'?>