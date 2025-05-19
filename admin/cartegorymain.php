<?php
include "headermain.php";
include "class/product-class.php";
?>
<?php

$product = new productclass();

if (isset($_GET['brand_id'])) {
    $brand_id = $_GET['brand_id'];
    $get_products = $product->get_product_by_brand($brand_id);
}
?>

<!-----------------------------------cartegory---------------------------------------->
<section class="cartegory brick">
    <div class="container">
        <div class="container-top row">
            <p><b> Trang chủ </b></p> <span>&#10230; </span>
            <p><b> Ram </b></p><span> &#10230; </span>
            <p><b> DDR4 </b></p>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="cartegory-left">
                <ul>
                    <li><a href="" class="cartegory-left-li">Ram</a>
                        <ul>
                            <li><a href="">DDR</a></li>
                            <li><a href="">SDRAM</a></li>
                            <li><a href="">DDR2</a>

                            </li>
                            <li><a href="">DDR3</a>

                            </li>
                            <li><a href="">DDR4</a>

                            </li>
                            <li><a href="">DDR5</a>

                            </li>
                        </ul>
                    </li>
                    <li><a href="" class="cartegory-left-li">Ổ cứng</a>
                        <ul>
                            <li><a href="">HDD</a>

                            </li>
                            <li><a href="">SSD</a>

                            </li>
                        </ul>
                    </li>
                    <li><a href="" class="cartegory-left-li">Bàn Phím</a>
                        <ul>
                            <li><a href="">Bàn phím cơ</a>

                            </li>
                            <li><a href="">Bàn phím giả cơ</a>

                            </li>
                            <li><a href="">Bàn phím QWERTY</a>
                            </li>
                            <li><a href="">Bàn phím công thái học</a>

                            </li>
                        </ul>
                    </li>
                    <li><a href="" class="cartegory-left-li">GPU</a>
                        <ul>
                            <li><a href="">Nvidia</a>

                            </li>
                            <li><a href="">AMD</a>

                            </li>
                            <li><a href="">Intel</a>

                            </li>
                        </ul>
                    </li>
                    <li><a href="" class="cartegory-left-li">Màn hình</a>
                        <ul>
                            <li><a href="">IPS</a>
                            </li>
                            <li><a href="">OLED/AMOLED</a>

                            </li>
                            <li><a href="">RETINA</a>

                            </li>
                            <li><a href="">TN</a>

                            </li>
                            <li><a href="">CCFL</a>

                            </li>
                        </ul>
                    </li>
                    <li><a href="" class="cartegory-left-li">Loa</a>
                        <ul>
                            <li><a href="">Điện động</a></li>
                            <li><a href="">Điện tĩnh</a></li>
                            <li><a href="">Nam châm</a></li>
                        </ul>
                    </li>
                    <li><a href="" class="cartegory-left-li">Chuột</a>
                        <ul>
                            <li><a href="">Có dây</a></li>
                            <li><a href="">2.4hz</a></li>
                            <li><a href="">Bluetooth</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="cartegory-right row">
                <div class="cartegogy-right-top-item">
                    <p>Ram</p>
                </div>
                <div class="cartegogy-right-top-item">
                    <button><span>Bộ lọc</span><i class="fas fa-sort-down"></i></button>
                </div>
                <div class="cartegogy-right-top-item">
                    <select name="" id="">
                        <option value="">sắp xếp</option>
                        <option value="">Giá cao đến thấp</option>
                        <option value="">Giá thấp đến cao </option>
                    </select>
                </div>

                <div class="cartegory-right-content">
                    <a href="productmain.php">
                        <div class="cartegory-right-contant-item">
                            <img src="imgR/Ram PC Kingston Fury Beast 8GB DDR4 3200Mhz 490k.webp" alt="">
                            <h1>Ram PC Kingston Fury Beast 8GB DDR4 3200Mhz</h1>

                            <p>490.000<sup>đ</sup></p>

                        </div>
                    </a>
                    <div class="cartegory-right-contant-item">
                        <img src="imgR/Ram DDR3 8GB 1600Mhz AOSENKE Tản Nhiệt 230k.webp" alt="">
                        <h1>Ram DDR3 8GB 1600Mhz AOSENKE Tản Nhiệt</h1>
                        <a href="productmain.php">
                            <p>490.000<sup>đ</sup></p>
                        </a>
                    </div>
                    <div class="cartegory-right-contant-item">
                        <img src="imgR/Ram DDR4 Billion Reservoir 8GB 3200Mhz (1x8GB) White RGB Tản Thép 550k.webp"
                            alt="">
                        <h1>Ram DDR4 Billion Reservoir 8GB 3200Mhz (1x8GB) White RGB Tản Thép</h1>
                        <a href="productmain.php">
                            <p>490.000<sup>đ</sup></p>
                        </a>
                    </div>
                    <div class="cartegory-right-contant-item">
                        <img src="imgR/Ram DDR4 Colorful 8GB 3200Mhz 400k.webp" alt="">
                        <h1>Ram DDR4 Colorful 8GB 3200Mhz</h1>
                        <a href="productmain.php">
                            <p>490.000<sup>đ</sup></p>
                        </a>
                    </div>
                    <div class="cartegory-right-contant-item">
                        <img src="imgR/Ram DDR4 Kingston 16GB 3200Mhz Fury Beast 850k.webp" alt="">
                        <h1>Ram DDR4 Kingston 16GB 3200Mhz Fury Beast</h1>
                        <a href="productmain.php">
                            <p>490.000<sup>đ</sup></p>
                        </a>
                    </div>
                    <div class="cartegory-right-contant-item">
                        <img src="imgR/Ram DDR4 TeamGroup T-Force Vulcan Z 16GB 3200Mhz Red 700k.webp" alt="">
                        <h1>Ram DDR4 TeamGroup T-Force Vulcan Z 16GB 3200Mhz Red</h1>
                        <a href="productmain.php">
                            <p>490.000<sup>đ</sup></p>
                        </a>
                    </div>
                    <div class="cartegory-right-contant-item">
                        <img src="imgR/Ram DDR4 XLR8 PNY 16GB 3200Mhz 670k.webp" alt="">
                        <h1>Ram DDR4 XLR8 PNY 16GB 3200Mhz</h1>
                        <a href="productmain.php">
                            <p>490.000<sup>đ</sup></p>
                        </a>
                    </div>
                    <div class="cartegory-right-contant-item">
                        <img src="imgR/Ram KingSpec 8GB 290k.webp" alt="">
                        <h1>Ram KingSpec 8GB</h1>
                        <a href="productmain.php">
                            <p>490.000<sup>đ</sup></p>
                        </a>
                    </div>
                    <div class="cartegory-right-contant-item">
                        <img src="imgR/Ram PC Adata XPG Spectrix D50 8GB DDR4 3200Mhz RGB White 540k.webp" alt="">
                        <h1>Ram PC Adata XPG Spectrix D50 8GB DDR4 3200Mhz RGB White</h1>
                        <a href="productmain.php">
                            <p>490.000<sup>đ</sup></p>
                        </a>
                    </div>
                    <div class="cartegory-right-contant-item">
                        <img src="imgR/Ram PC Kingston Fury Beast 8GB DDR4 3200Mhz 490k.webp" alt="">
                        <h1>Ram PC Kingston Fury Beast 8GB DDR4 3200Mhz</h1>
                        <a href="productmain.php">
                            <p>490.000<sup>đ</sup></p>
                        </a>
                    </div>
                    <div class="cartegory-right-contant-item">
                        <img src="imgR/Ram PNY XLR8 8GB DDR4 3200MHz 300k.webp" alt="">
                        <h1>Ram PC Kingston Fury Beast 8GB DDR4 3200Mhz</h1>
                        <a href="productmain.php">
                            <p>490.000<sup>đ</sup></p>
                        </a>
                    </div>
                </div>

                <div class="cartegory-right-bottom row">
                    <div class="cartegory-right-bottom-item">
                        <p>Hiển thị 2 <span>|</span> 4 sản phẩm </p>
                    </div>
                    <div class="cartegory-right-bottom-item">
                        <p><span>&#171;</span>1 2 3 4 5<span>&#187;</span>Trang cuối</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>


<!-----------------------------------footer---------------------------------------->

<?php
include "footermain.php"
?>