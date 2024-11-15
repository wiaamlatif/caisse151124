<?php
$title ="deconnexion";
ob_start();
?>
    <h1>Deconnexion</h1>



<?php $content = ob_get_clean(); ?>

<?php $role=0;//$role= array(0 => Visitor, 1 => Admin, 2 => Seller)?>
<?php $varSell="Sell";?>
<?php include 'c:/caisse1124/layout.php'?>