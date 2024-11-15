<?php
$title ="X/Z ";
ob_start();
?>
    <h1>Ici Index Commande</h1>
 

<?php $content = ob_get_clean(); ?>

<?php $role=1; //$role= array(0 => Visitor, 1 => Admin, 2 => Seller)?>
<?php $varSell="X/Z";$varData="Data";?>
<?php include 'c:/caisse1124/layout.php'?>