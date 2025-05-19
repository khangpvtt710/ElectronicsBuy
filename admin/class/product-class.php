<?php
// Sử dụng require_once để đảm bảo database.php chỉ được nhúng một lần
// product-class.php nằm trong admin/class/, database.php nằm cùng cấp.
require_once "database.php";
?>
<?php
class productclass{
    private $db; // Biến lưu trữ đối tượng Database

    // Hàm khởi tạo
    public function __construct(){
        $this -> db = new Database(); // Tạo đối tượng Database khi lớp được khởi tạo
    }

    // Phương thức hiển thị tất cả danh mục
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

    // Phương thức thêm sản phẩm mới
    // Nhận dữ liệu POST và FILES làm tham số
    public function insert_product($data, $files){
        // Lấy dữ liệu từ mảng $data (từ $_POST)
        $product_name = $this->db->link->real_escape_string($data['product_name']);
        $cartegory_id = $this->db->link->real_escape_string($data['cartegory_id']);
        $brand_id = $this->db->link->real_escape_string($data['brand_id']);
        $product_price = $this->db->link->real_escape_string($data['product_price']);
        $product_sale = $this->db->link->real_escape_string($data['product_sale']);
        $product_desc = $this->db->link->real_escape_string($data['product_desc']);

        // Xử lý ảnh đại diện (product_img)
        $product_img_name = $files['product_img']['name'];
        $product_img_tmp = $files['product_img']['tmp_name'];
        $product_img_error = $files['product_img']['error'];
        $product_img_size = $files['product_img']['size'];

        // Giả định thư mục uploads/ và uploaddesc/ nằm trong thư mục admin/
        $base_upload_dir = dirname(__DIR__) . "/uploads/"; // Đi ra khỏi class/ và vào admin/uploads/
        $base_uploaddesc_dir = dirname(__DIR__) . "/uploaddesc/"; // Đi ra khỏi class/ và vào admin/uploaddesc/

        $uploaded_img_path_abs = $base_upload_dir . basename($product_img_name);


        // Kiểm tra lỗi upload ảnh đại diện
        if ($product_img_error !== UPLOAD_ERR_OK) {
            return "Lỗi upload ảnh đại diện: Mã lỗi " . $product_img_error;
        }

        // Kiểm tra loại file ảnh đại diện
        $allowed_extensions = array("jpg", "jpeg", "png", "gif");
        $file_extension = strtolower(pathinfo($product_img_name, PATHINFO_EXTENSION));
        if (!in_array($file_extension, $allowed_extensions)) {
            return "Chỉ cho phép file JPG, JPEG, PNG, GIF cho ảnh đại diện.";
        }

        // Kiểm tra kích thước file ảnh đại diện (ví dụ: dưới 10MB)
        if ($product_img_size > 10000000) { // 10MB
            return "Kích thước ảnh đại diện không được lớn hơn 10MB.";
        }

        // Kiểm tra file đã tồn tại chưa (tránh ghi đè không mong muốn)
        // Bạn có thể thêm logic đổi tên file nếu muốn cho phép cùng tên
        // if (file_exists($uploaded_img_path_abs)) {
        //     return "File ảnh đại diện đã tồn tại.";
        // }

        // Đảm bảo thư mục upload tồn tại
        if (!is_dir($base_upload_dir)) {
            mkdir($base_upload_dir, 0777, true); // Tạo thư mục nếu chưa có
        }

        // Di chuyển file ảnh đại diện tạm thời vào thư mục upload
        if (!move_uploaded_file($product_img_tmp, $uploaded_img_path_abs)) {
            error_log("Error moving uploaded main image: " . $product_img_name . " to " . $uploaded_img_path_abs);
            return "Có lỗi khi di chuyển ảnh đại diện.";
        }
        if( $product_sale<0){
            return "Giảm giá không được âm";
        }
        if($product_price <0 ){
            return "Giá sản phẩm không được âm";
        }

        // Câu truy vấn INSERT sản phẩm
        $query_product = "INSERT INTO tbl_product(
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
            '$product_img_name')"; // Lưu tên file ảnh vào database

        $result_product = $this->db->insert($query_product); // Thực thi truy vấn INSERT sản phẩm

        if ($result_product) {
            // Lấy ID sản phẩm vừa thêm
            $product_id = $this->db->link->insert_id;

            // Xử lý ảnh mô tả (product_imgdesc)
            $img_desc_names = $files['product_imgdesc']['name'];
            $img_desc_tmps = $files['product_imgdesc']['tmp_name'];
            $img_desc_errors = $files['product_imgdesc']['error'];
            $img_desc_sizes = $files['product_imgdesc']['size'];


             // Đảm bảo thư mục upload mô tả tồn tại
            if (!is_dir($base_uploaddesc_dir)) {
                mkdir($base_uploaddesc_dir, 0777, true); // Tạo thư mục nếu chưa có
            }


            // Kiểm tra xem có ảnh mô tả nào được upload không
            if (is_array($img_desc_names)) {
                 foreach($img_desc_names as $key => $img_desc_name){
                    
                    // Bỏ qua nếu không có file được chọn cho input này hoặc có lỗi upload
                    if ($img_desc_errors[$key] !== UPLOAD_ERR_OK && $img_desc_errors[$key] !== UPLOAD_ERR_NO_FILE) {
                         // Xử lý lỗi upload cho từng file mô tả
                         // Có thể log lỗi hoặc trả về thông báo
                         error_log("Upload error for image description file " . ($img_desc_name ?? 'N/A') . ": Code " . $img_desc_errors[$key]);
                         continue; // Bỏ qua file này và tiếp tục với file khác
                    }
                     if ($img_desc_errors[$key] === UPLOAD_ERR_NO_FILE) {
                         continue; // Bỏ qua nếu không có file nào được chọn
                    }

                    $uploaded_desc_path_abs = $base_uploaddesc_dir . basename($img_desc_name);

                    // Kiểm tra loại file ảnh mô tả (có thể dùng chung hoặc khác ảnh đại diện)
                    $allowed_extensions_desc = array("jpg", "jpeg", "png", "gif"); // Có thể cấu hình riêng
                    $desc_file_extension = strtolower(pathinfo($img_desc_name, PATHINFO_EXTENSION));
                    if (!in_array($desc_file_extension, $allowed_extensions_desc)) {
                         // Xử lý lỗi loại file
                          error_log("Invalid file extension for image description file: " . $img_desc_name);
                         continue; // Bỏ qua file này
                    }

                     // Kiểm tra kích thước file ảnh mô tả
                    if ($img_desc_sizes[$key] > 10000000) { // 10MB
                         // Xử lý lỗi kích thước file
                         error_log("File size too large for image description file: " . $img_desc_name);
                         continue; // Bỏ qua file này
                    }

                    // Kiểm tra file đã tồn tại chưa (tùy chọn)
                    // if (file_exists($uploaded_desc_path_abs)) {
                    //      continue; // Bỏ qua file này nếu đã tồn tại
                    // }


                    // Di chuyển file ảnh mô tả tạm thời vào thư mục upload
                    if (move_uploaded_file($img_desc_tmps[$key], $uploaded_desc_path_abs)) {
                        // Chèn thông tin ảnh mô tả vào database
                        $query_desc = "INSERT INTO tbl_product_imgdesc(product_id, product_imgdesc) VALUE('$product_id','$img_desc_name')";
                        $insert_desc_result = $this->db->insert($query_desc); // Thực thi truy vấn INSERT ảnh mô tả
                         if (!$insert_desc_result) {
                             error_log("Error inserting image description into database: " . $this->db->link->error . " Query: " . $query_desc);
                         }
                    } else {
                         // Xử lý lỗi di chuyển file
                         error_log("Error moving uploaded image description file: " . $img_desc_name);
                    }
                    
                }
            }


            return "Thêm sản phẩm thành công!";
        } else {
            // Nếu thêm sản phẩm thất bại, có thể log lỗi chi tiết hơn
            error_log("Error inserting main product: " . $this->db->link->error . " Query: " . $query_product);
            return "Thêm sản phẩm thất bại!";
        }
    }

    // Phương thức lấy danh sách thương hiệu theo ID danh mục (Dùng cho menu và AJAX)
    public function show_brand_ajax($cartegory_id){
        // Làm sạch dữ liệu đầu vào để tránh SQL Injection
        $cleaned_cartegory_id = $this->db->link->real_escape_string($cartegory_id);

        // Sửa câu truy vấn: Chọn từ tbl_brand và lọc theo cartegory_id
        $query = "SELECT * FROM tbl_brand WHERE cartegory_id = '$cleaned_cartegory_id' ORDER BY brand_id DESC";

        $result = $this->db->select($query); // Sử dụng phương thức select của lớp Database
        return $result; // Trả về kết quả
    }

    // Phương thức lấy danh sách sản phẩm theo ID danh mục
    public function show_products_by_cartegory($cartegory_id){
         // Làm sạch dữ liệu đầu vào
        $cleaned_cartegory_id = $this->db->link->real_escape_string($cartegory_id);

        // Câu truy vấn SELECT sản phẩm theo cartegory_id
        // Có thể cần JOIN với tbl_brand nếu muốn hiển thị tên thương hiệu
        $query = "SELECT * FROM tbl_product WHERE cartegory_id = '$cleaned_cartegory_id' ORDER BY product_id DESC";

        $result = $this->db->select($query); // Thực thi truy vấn
        return $result; // Trả về kết quả
    }


    // Các phương thức get, update, delete cartegory (có thể di chuyển sang cartegory-class.php nếu muốn)
    // Hiện tại đang bị trùng lặp với cartegory-class.php
    // Nên giữ các phương thức này trong cartegory-class.php và xóa khỏi đây
    // nếu productclass không cần quản lý danh mục trực tiếp.
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
    public function get_product_by_brand($brand_id) {
        $query = "SELECT * FROM tbl_product WHERE brand_id = '$brand_id'";
        $result = $this->db->select($query);
        return $result;
    }
    
}
?>