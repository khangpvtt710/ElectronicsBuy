<?php
include "class/brand-class.php";
$brand = new brandclass;
if (!isset($_GET['brand_id']) || $_GET['brand_id'] == NULL) {
    echo "<script>window.location='brandlist.php'</script>";
} else {
    $brand_id = $_GET['brand_id'];
}

$delete_brand = $brand->delete_brand($brand_id);


?>