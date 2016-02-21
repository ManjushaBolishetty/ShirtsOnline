<?php
require_once("../inc/config.php");
include(ROOT_PATH . 'inc/header.php');
?>
          <p>Item Name: <?php echo $_POST["item_name"]; ?> </p>
          <p>Item Id:   <?php echo $_POST["sku"]; ?><br/> </p>
          <p>Price:     <?php echo $_POST["price"]; ?></p>
          <img src="<?php echo BASE_URL; ?>img/shirts/shirt-<?php echo $_POST["sku"]; ?>.jpg" alt="<?php echo $_POST["item_name"]; ?>">
          <form method="post" action="<?php echo BASE_URL; ?>update/">
                <input type="hidden" name="item_name" value="<?php echo $_POST["item_name"]; ?>">
                <input type="hidden" name="sku" value="<?php echo $_POST["sku"]; ?>">
                <input type="hidden" name="price" value="<?php echo $_POST["price"]; ?>">
                <p>Quantity: <input type="text" name="Quantity" value="<?php echo $_POST["Quantity"]; ?>"><br/>
                </br>
                <input type="submit" name="submit" value="Update"></p>
          </form>
          <form method="post" action="<?php echo BASE_URL; ?>delete/">
                <input type="hidden" name="sku" value="<?php echo $_POST["sku"]; ?>">
                <input type="submit" name="submit" value="Remove"><br/>
          </form>
          <form method="post" action="<?php echo BASE_URL; ?>order_confirmation/">
                <input type="hidden" name="sku" value="<?php echo $_POST["sku"]; ?>">
                <input type="submit" name="submit" value="Place order"><br/>
          </form>

          <style>
          p {
              display: block;
              margin-left: 0;
              margin-right: 0;
              margin-top: 1em;
              margin-bottom: 1em;
              text-align: center;
              font-size: 100%;
          }

          img{
            height: 200px;
            width:200px;
            display:inline-table;
            position:absolute;
            border: 2px solid #CCC;
            border-width: thick;
            margin-left: 5em;
          }
          </style>


<?php
$sku_id = $_POST["sku"];
$quantity = $_POST["Quantity"];

require(ROOT_PATH . "inc/database.php");
try {
    $results = $db->prepare("update orders_details set quantity = $quantity where sku = $sku_id and (trim(status) = 'Shopping in process')");
    $results->execute();

} catch (Exception $e) {
    exit;
}
?>



<?php include(ROOT_PATH . 'inc/footer.php') ?>
