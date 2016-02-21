<?php
require_once("../inc/config.php");
include(ROOT_PATH . 'inc/header.php');
?>

<h2>Your Cart is empty </style></h2>
<form method='POST' action="<?php echo BASE_URL; ?>shirts.php">
<input type="submit" text="Continue Shopping" value="Continue Shopping">
</form>

<?php require(ROOT_PATH . "inc/database.php");
$sku_id=$_POST["sku"];
try {
    $results = $db->prepare("delete from orders_details where sku = $sku_id and trim(status) = 'Shopping in process' ");
    $results->execute();

} catch (Exception $e) {
    exit;
}
?>


<?php include(ROOT_PATH . 'inc/footer.php') ?>
