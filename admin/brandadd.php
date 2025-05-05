<?php

include "header.php";
include "slider.php";
include "class/brand-class.php";
?>
<?php
$brand = new brandclass;
if($_SERVER['REQUEST_METHOD']==='POST'){
    $cartegory_name = $_POST['cartegory_name'];
    $insert_cartegory = $cartegory->insert_cartegory($cartegory_name);
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
            <select name="" id="">
                <option value="">Chọn Danh Mục</option>
                <?php $show_cartegory = $brand->show_cartegory();
                if($show_cartegory){while($result = $show_cartegory -> fetch_assoc()){
                    
                
                ?>
                <option value="<?php echo $result['cartegory_id']?>"><?php echo $result['cartegory_name']?></option>
                <?php
                }}
                ?>
            </select> <br>
            <input required name="brand_name" type="text" placeholder="nhập tên sản phẩm">
            <button type="submit">Thêm</button>
        </form>
    </div>
</div>
</section>
</body>

</html>