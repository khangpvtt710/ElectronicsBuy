<?php
include "headermain.php"
?>
<!---------------------------Payment------------------------------------------------->
<section class="payment brick">
    <div class="container">
        <div class="payment-top-swap">
            <div class="payment-top">
                <div class="payment-top-payment payment-top-item">
                    <a href="cartmain.php"><i class="fas fa-shopping-cart "></i></a>
                </div>
                <div class="payment-top-adress payment-top-item">
                    <a href="deliverymain.php"><i class="fas fa-map-marker-alt"></i></a>
                </div>
                <div class="payment-top-payments payment-top-item">
                    <a href="paymentmain.php"><i class="fas fa-money-check-alt "></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="payment-content row">
            <div class="payment-content-left">
                <div class="payment-content-left-method-delivery">
                    <p style="font-weight: bold; font-size: 20px;">Phương Thức Giao Hàng</p>
                    <div class="payment-content-left-method-delivery-item">
                        <input type="radio" checked>
                        <label for="" style="font-size: 15px">Giao hàng chuyển phát nhanh</label>
                    </div>
                </div>
                <div class="payment-content-left-method-payment">
                    <p style="font-weight: bold;">Phương Thức Thanh Toán</p>
                    <p>Mọi giao dịch đều được bảo mật và mã hóa.</p>
                    <div class="payment-content-left-method-payment-item">
                        <input name="method-payment" type="radio">
                        <label for="">Thanh tóan qua thẻ tín dụng </label>
                    </div>
                    <div class="payment-content-left-method-payment-item-img1">
                        <img src="img/visa.jpg" alt="">
                    </div>
                    <div class="payment-content-left-method-payment-item">
                        <input name="method-payment" type="radio" checked>
                        <label for="">Thanh tóa qua thẻ ATM </label>
                    </div>
                    <div class="payment-content-left-method-payment-item-img2">
                        <img src="img/atm.png" alt="">
                    </div>
                    <div class="payment-content-left-method-payment-item">
                        <input name="method-payment" type="radio">
                        <label for="">Thanh tóan qua MoMo </label>
                    </div>
                    <div class="payment-content-left-method-payment-item-img3">
                        <img src="img/momo.jpg" alt="">
                    </div>
                    <div class="payment-content-left-method-payment-item">
                        <input name="method-payment" type="radio">
                        <label for="">Thanh tóan khi giao hàng </label>
                    </div>
                </div>
            </div>
            <div class="payment-content-right">
                <div class="payment-content-right-button">
                    <input type="text" placeholder="Mã Giảm Giá/Quà Tặng">
                    <button><i class="fas fa-check"></i></button>
                </div>
                <div class="payment-content-right-button">
                    <input type="text" placeholder="Mã Cộng Tác Viên">
                    <button><i class="fas fa-check"></i></button>
                </div>
                <div class="payment-content-right-mnv">
                    <select name="" id="">
                        <option value="">Chọn mã nhân viên thân thiết</option>
                        <option value="">TG237</option>
                        <option value="">TG227</option>
                        <option value="">TG127</option>
                        <option value="">TG233</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="payment-content-right-payment">
            <button>
                Tiếp Tục Thanh Toán
            </button>
            <br><br><br>
        </div>
    </div>
</section>


<!---------------------------------------------------------------------------->
<?php
include "footermain.php"
?>
</body>
<script src="js/index.js"></script>

</html>