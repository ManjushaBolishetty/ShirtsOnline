<?php
require_once("../inc/config.php");
include(ROOT_PATH . 'inc/header.php');
?>

<h3> Congratulations! Your Order has been placed successfully. Want to shop more? </h3>
<form method='POST' action="<?php echo BASE_URL; ?>shirts.php">
<input type="submit" text="Continue Shopping" value="Continue Shopping">
</form>

<?php
$sku_id = $_POST["sku"];
$quantity = $_POST["Quantity"];

require(ROOT_PATH . "inc/database.php");
try {
    $results = $db->prepare("update orders_details set status = 'Order Placed Successfully' where sku = $sku_id and (trim(status) = 'Shopping in process')");
    $results->execute();

} catch (Exception $e) {
    echo "Data could not be inserted into the database.";
    exit;
}
?>

<?php include(ROOT_PATH . 'inc/footer.php') ?>
