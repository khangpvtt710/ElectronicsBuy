<?php
include "header.php";
include "slider.php";
include "class/product-class.php"
?>
<?php
$product = new productclass;
if($_SERVER['REQUEST_METHOD']==='POST'){
    //var_dump($_POST, $_FILES);
    // echo '<pre>';
    // echo print_r($_FILES['product_imgdesc']['name']);
    // echo '</pre>';
    $insert_product = $product->insert_product($_POST, $_FILES);
}
?>

<div class="admin-content-right">
    <div class="admin-content-right-product-add">
        <h1>Thêm Sản Phẩm</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="">Nhập Tên Sản Phẩm <span style="color: red;">*</span></label>
            <input name="product_name" required type="text" placeholder="----Nhập----">
            <label for="">Chọn Danh Mục <span style="color: red;">*</span></label>
            <select name="cartegory_id" id="">
                <option value="#">----Chọn----</option>
                <?php
                $show_cartegory = $product->show_cartegory();
                    if($show_cartegory){
                        while ($result = $show_cartegory -> fetch_assoc()){

                    
                ?>
                <option value="<?php echo $result['cartegory_id']?>"><?php echo $result['cartegory_name']?>
                </option>
                <?php
                    }
                }
                ?>
            </select>
            <label for="">Chọn Loại Sản Phẩm <span style="color: red;">*</span></label>
            <select name="brand_id" id="">
                <option value="#">----Chọn----</option>
                <?php
                $show_brand = $product->show_brand();
                    if($show_brand){
                        while ($result = $show_brand -> fetch_assoc()){

                    
                ?>
                <option value="<?php echo $result['brand_id']?>"><?php echo $result['brand_name']?>
                </option>
                <?php
                    }
                }
                ?>
            </select>
            <label for="">Giá Sản Phẩm <span style="color: red;">*</span></label>
            <input name="product_price" required type="text">
            <label for="">Giá Khuyến Mãi <span style="color: red;">*</span></label>
            <input name="product_sale" required type="text">
            <label for="">Mô Tả Sản Phẩm<span style="color: red;">*</span></label>
            <textarea name="product_desc" id="editor1" cols="30" rows="10" placeholder="Mô tả sản phẩm"></textarea>
            <label for="">Ảnh Đại Diện Sản Phẩm <span style="color: red;">*</span></label>
            <input name="product_img" required type="file" placeholder="Ảnh đại diện">
            <label for="">Ảnh Mô Tả Sản Phẩm<span style="color: red;">*</span></label>
            <input name="product_imgdesc[]" required multiple type="file" placeholder="Ảnh mô tả">
            <button type="submit">Thêm</button>
        </form>
    </div>
</div>
</section>
</body>
<script>
// Replace the <textarea id="editor1"> with a CKEditor 4
// instance, using default configuration.
CKEDITOR.replace('editor1');
</script>

</html>