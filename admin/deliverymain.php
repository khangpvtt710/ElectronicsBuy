<?php
include "headermain.php"
?>
<!-----------------------------------delivery----------------------------------------->
<section class="delivery brick">
    <div class="container">
        <div class="delivery-top-swap">
            <div class="delivery-top">
                <div class="delivery-top-delivery delivery-top-item">
                    <a href="cartmain.php"><i class="fas fa-shopping-cart "></i></a>
                </div>
                <div class="delivery-top-adress delivery-top-item">
                    <a href="deliverymain.php"><i class="fas fa-map-marker-alt"></i></a>
                </div>
                <div class="delivery-top-payment delivery-top-item">
                    <a href="paymentmain.php"><i class="fas fa-money-check-alt "></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="delivery-content row">
            <div class="delivery-content-left">
                <p>
                    Vui Lòng Chọn Địa Chỉ Giao Hàng
                </p>
                <div class="delivery-content-left-dangnhap row">
                    <i class="fas fa-sign-in-alt"></i>
                    <p>Đăng Nhập (tài khoản google) </p>
                </div>
                <div class="delivery-content-left-khachle row">
                    <input name="loaikhach" type="radio" checked>
                    <p><span style="font-weight: bold;">Khách lẻ</span> (nếu bạn không muốn lưu lại thông tin)</p>
                </div>
                <div class="delivery-content-left-dangky row">
                    <input name="loaikhach" type="radio">
                    <p><span style="font-weight: bold;">Đăng ký</span> (nếu bạn không muốn lưu lại thông tin)</p>
                </div>
                <div class="delivery-content-left-input-top row">
                    <div class="delivery-content-left-input-top-item">
                        <label for="">Họ Tên <span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                    <div class="delivery-content-left-input-top-item">
                        <label for="">Điện Thoại <span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                    <div class="delivery-content-left-input-top-item">
                        <label for="">Tỉnh/T.Phố <span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                    <div class="delivery-content-left-input-top-item">
                        <label for="">Quận/Huyện <span style="color: red;">*</span></label>
                        <input type="text">
                    </div>

                </div>
                <div class="delivery-content-left-input-botton">
                    <label for="">Địa Chỉ <span style="color: red;">*</span></label>
                    <input type="text">
                </div>
                <div class="delivery-content-left-button">
                    <a href="cartmain.php"><span>&#171;</span>
                        <p>Quay lại giỏ hàng</p>
                    </a>
                    <button>
                        <a href="paymentmain.php">
                            <p>THANH TOÁN VÀ GIAO HÀNG</p>
                        </a>
                    </button>
                </div>
            </div>
            <div class="delivery-content-right ">
                <table>
                    <tr>
                        <th>Tên Sản Phẩm</th>
                        <th>Giảm Giá</th>
                        <th>Số Lượng</th>
                        <th>Thành Tiền</th>
                    </tr>
                    <tr>
                        <td>Ram PC Kingston Fury Beast 8GB DDR4 3200Mhz</td>
                        <td>-30%</td>
                        <td>1</td>
                        <td>490.000 <sup>đ</sup></td>
                    </tr>
                    <tr>
                        <td>Ram 4 16G Bus 3200 Corsair Ddr4 Vengeance Lpx Black Heat Spreader</td>
                        <td>-30%</td>
                        <td>1</td>
                        <td>
                            <p>720.000 <sup>đ</sup></p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="font-weight: bold;">Tổng</td>
                        <td style="font-weight: bold;">
                            <p>1.210.000 <sup>đ</sup></p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="font-weight: bold;">Thuế VAT</td>
                        <td style="font-weight: bold;">
                            <p>1.210.0 <sup>đ</sup></p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="font-weight: bold;">Tổng Tiền Hàng</td>
                        <td style="font-weight: bold;">
                            <p>1.222.100 <sup>đ</sup></p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>




<!---------------------------------------------------------------------------->

<!-----------------------------------footer---------------------------------------->
<?php
include "footermain.php"
?>
</body>
<script src="js/index.js"></script>

</html>