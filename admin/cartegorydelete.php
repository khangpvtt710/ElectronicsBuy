<?php
include "class/cartegory-class.php";
$cartegory = new cartegoryclass;
if (!isset($_GET['cartegory_id']) || $_GET['cartegory_id'] == NULL) {
    echo "<script>window.location='cartegorylist.php'</script>";
} else {
    $cartegory_id = $_GET['cartegory_id'];
}

$delete_cartegory = $cartegory->delete_cartegory($cartegory_id);


?>