<?php
$title ="Dashboard";
ob_start();
?>
    <h1>Ici Dashboard</h1>
 

<?php $content = ob_get_clean(); ?>

<?php $role=1; //$role= array(0 => Visitor, 1 => Admin, 2 => Seller)?>
<?php $varSell="Sell";$varData="Data";?>
<?php include 'c:/caisse1124/layout.php'?>





