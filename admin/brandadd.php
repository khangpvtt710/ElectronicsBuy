<?php

include "header.php";
include "slider.php";
include "class/brand-class.php";
?>
<?php
$brand = new brandclass;
if($_SERVER['REQUEST_METHOD']==='POST'){
    $cartegory_id = $_POST['cartegory_id'];
    $brand_name = $_POST['brand_name'];
    $insert_brand = $brand->insert_brand($cartegory_id, $brand_name);
}
?>
<style>
select {
    height: 30px;
    width: 200px;

}
</style>

<div class="admin-content-right">
    <div class="admin-content-right-cartegory-add">
        <h1>Thêm Loại Sản Phẩm</h1>
        <form action="" method="POST">
            <select name="cartegory_id" id="">
                <option value="">Chọn Danh Mục</option>
                <?php $show_cartegory = $brand->show_cartegory();
                if($show_cartegory){while($result = $show_cartegory -> fetch_assoc()){
                    
                
                ?>
                <option value="<?php echo $result['cartegory_id']?>"><?php echo $result['cartegory_name']?></option>
                <?php
                }}
                ?>
            </select> <br>
            <input style="margin-left: 12px;" required name="brand_name" type="text" placeholder="nhập tên sản phẩm">
            <button style="margin-left: 12px;" type="submit">Thêm</button>
        </form>
    </div>
</div>
</section>
</body>

</html>