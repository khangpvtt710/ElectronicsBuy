<?php
// Sử dụng require_once để đảm bảo database.php chỉ được nhúng một lần
// brand-class.php nằm trong admin/class/, database.php nằm cùng cấp.
require_once "database.php";
?>
<?php
class brandclass{
    private $db; // Biến lưu trữ đối tượng Database

    // Hàm khởi tạo
    public function __construct(){
        $this -> db = new Database(); // Tạo đối tượng Database khi lớp được khởi tạo
    }

    // Phương thức thêm thương hiệu mới vào database
    public function insert_brand($cartegory_id, $brand_name){
        // Làm sạch dữ liệu đầu vào để tránh SQL Injection
        $cleaned_cartegory_id = $this->db->link->real_escape_string($cartegory_id);
        $cleaned_brand_name = $this->db->link->real_escape_string($brand_name);

        // Câu truy vấn INSERT
        $query = "INSERT INTO tbl_brand(cartegory_id, brand_name) VALUES('$cleaned_cartegory_id','$cleaned_brand_name')";
        $result = $this->db->insert($query); // Thực thi truy vấn INSERT

        // Xử lý kết quả và trả về thông báo
        if ($result) {
            return "Thêm loại sản phẩm thành công!";
        } else {
            // Có thể log lỗi chi tiết hơn ở đây nếu cần
            error_log("Error inserting brand: " . $this->db->link->error . " Query: " . $query);
            return "Thêm loại sản phẩm thất bại!";
        }
    }

    // Phương thức hiển thị tất cả danh mục (được sử dụng trong brandadd.php và brandedit.php)
    public function show_cartegory(){
        $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC"; // Câu truy vấn SELECT tất cả danh mục
        $result = $this->db->select($query); // Thực thi truy vấn SELECT
        return $result; // Trả về kết quả
    }

    // Phương thức hiển thị tất cả thương hiệu cùng với tên danh mục
    public function show_brand(){
        // Câu truy vấn JOIN để lấy tên danh mục tương ứng với mỗi thương hiệu
        $query = "SELECT tbl_brand.*,tbl_cartegory.cartegory_name FROM tbl_brand INNER JOIN tbl_cartegory ON tbl_brand.cartegory_id = tbl_cartegory.cartegory_id ORDER BY tbl_brand.brand_id DESC";
        $result = $this->db->select($query); // Thực thi truy vấn
        return $result; // Trả về kết quả
    }

    // Phương thức lấy thông tin một thương hiệu dựa trên ID
    public function get_brand($brand_id){
        // Làm sạch dữ liệu đầu vào
        $cleaned_brand_id = $this->db->link->real_escape_string($brand_id);
        $query = "SELECT * FROM tbl_brand WHERE brand_id = '$cleaned_brand_id'"; // Câu truy vấn SELECT theo ID
        $result = $this->db->select($query); // Thực thi truy vấn
        return $result; // Trả về kết quả
    }

    // Phương thức cập nhật thông tin thương hiệu
    public function update_brand($cartegory_id, $brand_name,$brand_id){
        // Làm sạch dữ liệu đầu vào
        $cleaned_cartegory_id = $this->db->link->real_escape_string($cartegory_id);
        $cleaned_brand_name = $this->db->link->real_escape_string($brand_name);
        $cleaned_brand_id = $this->db->link->real_escape_string($brand_id);

        // Câu truy vấn UPDATE
        $query = "UPDATE tbl_brand SET cartegory_id = '$cleaned_cartegory_id',brand_name = '$cleaned_brand_name' WHERE brand_id='$cleaned_brand_id'";
        $result = $this->db->update($query); // Thực thi truy vấn UPDATE

         if ($result) {
            return "Cập nhật loại sản phẩm thành công!";
        } else {
             // Có thể log lỗi chi tiết hơn ở đây nếu cần
            error_log("Error updating brand: " . $this->db->link->error . " Query: " . $query);
            return "Cập nhật loại sản phẩm thất bại!";
        }
    }

    // Phương thức xóa thương hiệu
    public function delete_brand($brand_id){
        // Làm sạch dữ liệu đầu vào
        $cleaned_brand_id = $this->db->link->real_escape_string($brand_id);

        // Câu truy vấn DELETE
        $query = "DELETE FROM tbl_brand WHERE brand_id = '$cleaned_brand_id'";
        $result = $this->db->delete($query); // Thực thi truy vấn DELETE

         if ($result) {
            return "Xóa loại sản phẩm thành công!";
        } else {
             // Có thể log lỗi chi tiết hơn ở đây nếu cần
             error_log("Error deleting brand: " . $this->db->link->error . " Query: " . $query);
            return "Xóa loại sản phẩm thất bại!";
        }
    }

    // Phương thức lấy danh sách thương hiệu theo ID danh mục (Dùng cho menu và AJAX)
    public function get_brands_by_cartegory($cartegory_id){
        // Làm sạch dữ liệu đầu vào
        $cleaned_cartegory_id = $this->db->link->real_escape_string($cartegory_id);

        // Câu truy vấn SELECT thương hiệu theo cartegory_id
        $query = "SELECT * FROM tbl_brand WHERE cartegory_id = '$cleaned_cartegory_id' ORDER BY brand_id DESC";
        $result = $this->db->select($query); // Thực thi truy vấn
        return $result; // Trả về kết quả
    }

    // Lưu ý: Các phương thức get_cartegory, update_cartegory, delete_cartegory
    // đang bị trùng lặp với cartegory-class.php.
    // Nên giữ các phương thức này trong cartegory-class.php và xóa khỏi đây
    // nếu brandclass không cần quản lý danh mục trực tiếp.
    // Tôi giữ lại trong mã này để không làm mất code của bạn, nhưng khuyến cáo nên refactor.

    public function get_cartegory($cartegory_id){
         // Làm sạch dữ liệu đầu vào
        $cleaned_cartegory_id = $this->db->link->real_escape_string($cartegory_id);
        $query = "SELECT * FROM tbl_cartegory WHERE cartegory_id = '$cleaned_cartegory_id'";
        $result = $this->db->select($query);
        return $result;
    }
    public function update_cartegory($cartegory_name,$cartegory_id){
         // Làm sạch dữ liệu đầu vào
        $cleaned_cartegory_name = $this->db->link->real_escape_string($cartegory_name);
        $cleaned_cartegory_id = $this->db->link->real_escape_string($cartegory_id);
        $query = "UPDATE tbl_cartegory SET cartegory_name = '$cleaned_cartegory_name' WHERE cartegory_id='$cleaned_cartegory_id'";
        $result = $this->db->update($query);
        return $result;
    }
    public function delete_cartegory($cartegory_id){
         // Làm sạch dữ liệu đầu vào
        $cleaned_cartegory_id = $this->db->link->real_escape_string($cartegory_id);
        $query = "DELETE FROM tbl_cartegory WHERE cartegory_id = '$cleaned_cartegory_id'";
        $result = $this->db->delete($query);
        return $result;
    }
    public function show_cartegory_main($cartegory_id){
        $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id = $cartegory_id DESC";
        $result = $this->db->select($query);
        return $result;
    }
}
?>