<?php
// Sử dụng require_once để đảm bảo config.php chỉ được nhúng một lần
require_once "config.php";
?>

<?php
// Định nghĩa lớp Database
class Database {
    public $host = DB_HOST;
    public $user = DB_USER;
    public $pass = DB_PASS;
    public $dbname = DB_NAME;
    public $link;
    public $error;

    // Hàm khởi tạo
    public function __construct() {
        $this->connectDB();
    }

    // Kết nối CSDL
    private function connectDB() {
        $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);

        if ($this->link->connect_error) {
            $this->error = "Connection failed: " . $this->link->connect_error;
            return false;
        }
        // Đặt bộ ký tự cho kết nối
        $this->link->set_charset("utf8");
    }

    // Select or Read data
    public function select($query) {
        $result = $this->link->query($query);
        if ($result === false) {
             die("Error in select query: " . $this->link->error . " at line " . __LINE__);
        }

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    // Insert data
    public function insert($query) {
        $insert_row = $this->link->query($query);
         if ($insert_row === false) {
             die("Error in insert query: " . $this->link->error . " at line " . __LINE__);
         }

        if ($insert_row) {
            return $insert_row;
        } else {
            return false;
        }
    }

    // Update data
    public function update($query) {
        $update_row = $this->link->query($query);
         if ($update_row === false) {
             die("Error in update query: " . $this->link->error . " at line " . __LINE__);
         }

        if ($update_row) {
            return $update_row;
        } else {
            return false;
        }
    }

    // Delete data
    public function delete($query) {
        $delete_row = $this->link->query($query);
         if ($delete_row === false) {
             die("Error in delete query: " . $this->link->error . " at line " . __LINE__);
         }

        if ($delete_row) {
            return $delete_row;
        } else {
            return false;
        }
    }

    // Đóng kết nối (tùy chọn, PHP tự động đóng khi script kết thúc)
    public function __destruct() {
        if ($this->link) {
            $this->link->close();
        }
    }
}
?>