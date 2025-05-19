<?php
include "headermain.php"
?>

<!-----------------------------------cart---------------------------------------->
<section class="cart brick">
    <div class="container">
        <div class="cart-top-swap">
            <div class="cart-top">
                <div class="cart-top-cart card-top-item">
                    <a href="cartmain.php"><i class="fas fa-shopping-cart "></i></a>
                </div>
                <div class="cart-top-adress card-top-item">
                    <a href="deliverymain.php"><i class="fas fa-map-marker-alt"></i></a>
                </div>
                <div class="cart-top-payment card-top-item">
                    <a href="paymentmain.php"><i class="fas fa-money-check-alt "></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="cart-content row">
            <div class="cart-content-left">
                <table>
                    <tr>
                        <th>Sản Phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Màu</th>
                        <th>Size</th>
                        <th>Số Lượng</th>
                        <th>Thành Tiền</th>
                        <th>Xóa</th>
                    </tr>
                    <tr>
                        <td>
                            <img src="imgR/Ram PC Kingston Fury Beast 8GB DDR4 3200Mhz 490k.webp" alt="">
                        </td>
                        <td>
                            <p>Ram PC Kingston Fury Beast 8GB DDR4 3200Mhz</p>
                        </td>
                        <td>
                            <img src="img-color/black.jpg" alt="">
                        </td>
                        <td>
                            <p>8G</p>
                        </td>
                        <td>
                            <input type="number" value="1" min="1">
                        </td>
                        <td>
                            <p>490.000 <sup>đ</sup></p>
                        </td>
                        <td>
                            <span>X</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="imgR/Ram 4 16G Bus 3200 Corsair Ddr4 Vengeance Lpx Black Heat Spreader 720k.webp"
                                alt="">
                        </td>
                        <td>
                            <p>Ram 4 16G Bus 3200 Corsair Ddr4 Vengeance Lpx Black Heat Spreader</p>
                        </td>
                        <td>
                            <img src="img-color/black.jpg" alt="">
                        </td>
                        <td>
                            <p>16G</p>
                        </td>
                        <td>
                            <input type="number" value="1" min="1">
                        </td>
                        <td>
                            <p>720.000 <sup>đ</sup></p>
                        </td>
                        <td>
                            <span>X</span>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="cart-content-right">
                <table>
                    <tr>
                        <th colspan="2">Tổng Tiền Giỏ Hàng</th>
                    </tr>
                    <tr>
                        <td>Tổng Sản Phẩm</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Tổng Tiền Hàng</td>
                        <td>
                            <p>490.000 <sup>đ</sup></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Tạm Tính</td>
                        <td style="color: black; font-weight: bold;">
                            <p>490.000 <sup>đ</sup></p>
                        </td>
                    </tr>
                </table>
                <div class="cart-content-right-text">
                    <p>Giảm 30.000đ phí vận chuyển cho đơn hàng có giá trị từ 500.000đ</p>
                    <p style="color: red; font-weight: bold;"> Giảm <span style="font-size: 18px;">50.000đ</span>
                        phí vận chuyển cho đơn hàng PC (máy bộ) dưới 10.000.000đ</p>
                </div>
                <div class="cart-content-right-button">
                    <button><a href="cartegorymain.php">Tiếp Tục Mua</a></button>
                    <button> <a href="deliverymain.php">Thanh Toán</a></button>
                </div>
                <div class="cart-content-right-dangnhap">
                    <p>Tài Khoản Google</p> <br>
                    <p>Hãy <a href="">đăng nhập</a> để tích điểm thành viên</p>
                </div>
            </div>
        </div>
    </div>
</section>




<!-----------------------------------footer---------------------------------------->
<?php
include "footermain.php"
?>
</body>
<script src="js/index.js"></script>

</html>