<?php
include "database.php";
?>
<?php
class productclass{
    private $db;
    public function __construct(){
        $this -> db = new Database();
    }
    public function show_cartegory(){
        $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_brand(){
        //$query = "SELECT * FROM tbl_brand ORDER BY brand_id DESC";
        $query = "SELECT tbl_brand.*,tbl_cartegory.cartegory_name FROM tbl_brand INNER JOIN tbl_cartegory ON tbl_brand.cartegory_id = tbl_cartegory.cartegory_id ORDER BY tbl_brand.brand_id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    public function insert_product(){
        $product_name = $_POST['product_name'];
        $cartegory_id = $_POST['cartegory_id'];
        $brand_id = $_POST['brand_id'];
        $product_price = $_POST['product_price'];
        $product_sale = $_POST['product_sale'];
        $product_desc = $_POST['product_desc'];
        $product_img = $_FILES['product_img']['name'];
        move_uploaded_file($_FILES['product_img']['tmp_name'], "uploads/".$_FILES['product_img']['name']);
        $query = "INSERT INTO tbl_product(
        product_name,
        cartegory_id,
        brand_id,
        product_price,
        product_sale,
        product_desc,
        product_img)
         VALUES(
         '$product_name',
         '$cartegory_id',
         '$brand_id',
         '$product_price',
         '$product_sale',
         '$product_desc',
         '$product_img')";
        $result = $this->db->insert($query);
        if($result){
            $query = "SELECT * FROM tbl_product ORDER BY product_id DESC LIMIT 1";
            $result = $this->db->select($query)->fetch_assoc();
            $product_id = $result['product_id'];
            $filename = $_FILES['product_imgdesc']['name'];
            $filetmp = $_FILES['product_imgdesc']['tmp_name'];
            foreach($filename as $key => $value){
                move_uploaded_file($filetmp[$key], "uploaddesc/".$value);
                $query = "INSERT INTO tbl_product_imgdesc(product_id, product_imgdesc) VALUE('$product_id','$value')";
                $result = $this->db->insert($query);
            }
        } 
        
        //header('Location:cartegorylist.php');
        return $result;
    }































    
    

    public function get_cartegory($cartegory_id){
        $query = "SELECT * FROM tbl_cartegory WHERE cartegory_id = '$cartegory_id'";
        $result = $this->db->select($query);
        return $result;
    }
    public function update_cartegory($cartegory_name,$cartegory_id){
        $query = "UPDATE tbl_cartegory SET cartegory_name = '$cartegory_name' WHERE cartegory_id='$cartegory_id'";
        $result = $this->db->update($query);
        header('Location:cartegorylist.php');
        return $result;
    }
    public function delete_cartegory($cartegory_id){
        $query = "DELETE FROM tbl_cartegory WHERE cartegory_id = '$cartegory_id'";
        $result = $this->db->delete($query);
        header('Location:cartegorylist.php');
        return $result;
    }
}?>