<?php
$title ="Home";
ob_start();
?>

    <h1>Ici Home</h1>
 

<?php $content = ob_get_clean(); ?>

<?php $role=0;//$role= array(0 => Visitor, 1 => Admin, 2 => Seller)?>
<?php $varSell="Sell";$varData="Data";?>
<?php require_once 'layout.php';?>