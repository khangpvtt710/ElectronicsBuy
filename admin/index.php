<?php
include "headermain.php"
?>
<?php
include "class/cartegory-class.php";
?>
<?php
$cartegory = new cartegoryclass;
$show_cartegory = $cartegory->show_cartegory();
?>

<body>

    <header>
        <div class="logo">
            <img src="img/logo.png" alt="">
        </div>
        <div class="menu">

            <li><a href="">RAM</a>
                <ul class="sub-menu">
                    <li><a href="">DDR</a></li>
                    <li><a href="">SDRAM</a></li>
                    <li><a href="">DDR2</a>
                        <ul>
                            <li><a href="">4G</a></li>
                            <li><a href="">8G</a></li>
                        </ul>
                    </li>
                    <li><a href="">DDR3</a>
                        <ul>
                            <li><a href="">4G</a></li>
                            <li><a href="">8G</a></li>
                            <li><a href="">16G</a></li>
                        </ul>
                    </li>
                    <li><a href="">DDR4</a>
                        <ul>
                            <li><a href="">8G</a></li>
                            <li><a href="">16G</a></li>
                            <li><a href="">32G</a></li>
                        </ul>
                    </li>
                    <li><a href="">DDR5</a>
                        <ul>
                            <li><a href="">16G</a></li>
                            <li><a href="">32G</a></li>
                            <li><a href="">64G</a></li>
                        </ul>
                    </li>
                </ul>

            </li>
            <li><a href="">Ổ CỨNG</a>
                <ul class="sub-menu">
                    <li><a href="">HDD</a>
                        <ul>
                            <li><a href="">256G</a></li>
                            <li><a href="">512G</a></li>
                            <li><a href="">1T</a></li>
                        </ul>
                    </li>
                    <li><a href="">SSD</a>
                        <ul>
                            <li><a href="">128G</a></li>
                            <li><a href="">256G</a></li>
                            <li><a href="">512G</a></li>
                        </ul>
                    </li>

                </ul>
            </li>
            <li><a href="">BÀN PHÍM</a>
                <ul class="sub-menu">
                    <li><a href="">Bàn phím cơ</a>
                        <ul>
                            <li><a href="">Bluetooth</a></li>
                            <li><a href="">USB 2.4hz</a></li>
                            <li><a href="">Có dây</a></li>

                        </ul>
                    </li>
                    <li><a href="">Bàn phím giả cơ</a>
                        <ul>
                            <li><a href="">Bluetooth</a></li>
                            <li><a href="">USB 2.4hz</a></li>
                            <li><a href="">Có dây</a></li>
                        </ul>
                    </li>
                    <li><a href="">Bàn phím QWERTY</a>
                    </li>
                    <li><a href="">Bàn phím công thái học</a>

                    </li>
                </ul>
            </li>
            <li><a href="">GPU</a>
                <ul class="sub-menu">
                    <li><a href="">Nvidia</a>
                        <ul>
                            <li><a href="">4G</a></li>
                            <li><a href="">8G</a></li>
                        </ul>
                    </li>
                    <li><a href="">AMD</a>
                        <ul>
                            <li><a href="">4G</a></li>
                            <li><a href="">8G</a></li>
                        </ul>
                    </li>
                    <li><a href="">Intel</a>
                        <ul>
                            <li><a href="">4G</a></li>
                            <li><a href="">8G</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="">MÀN HÌNH</a>
                <ul class="sub-menu">
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
            <li><a href="">LOA</a>
                <ul class="sub-menu">
                    <li><a href="">Điện động</a></li>
                    <li><a href="">Điện tĩnh</a></li>
                    <li><a href="">Nam châm</a></li>
                </ul>
            </li>
            <li><a href="">CHUỘT</a>
                <ul class="sub-menu">
                    <li><a href="">Có dây</a></li>
                    <li><a href="">2.4hz</a></li>
                    <li><a href="">Bluetooth</a></li>
                </ul>
            </li>
            <!--_--------------------------------------------->
            <?php
            if ($show_cartegory) {
                $i = 0;
                while ($result = $show_cartegory->fetch_assoc()){$i++;
            ?>

            <li><a href=""><?php echo $result['cartegory_name']?></a>
                <ul class="sub-menu">
                    <li><a href=""><?php echo $i?></a></li>
                    <li><a href=""><?php echo $result['cartegory_id']?></a></li>
                    <li><a href="">Bluetooth</a></li>
                </ul>


                <?php
                }
            }
            
            ?>

                <!--_-------------------------------------------->
        </div>


        <div class="others">
            <li><input placeholder="Tìm Kiếm" type="text"> <img src="img/search.png"> </li>
            <li><a class="fa fa-paw" href=""></a></li>
            <li><a class="fa fa-user" href=""></a></li>
            <li><a class="fa fa-shopping-bag" href=""></a></li>
        </div>
    </header>

    <section id="Slider">
        <div class="aspect-radio">
            <img src="img/ss1.jpg" alt="Image">
            <img src="img/ss2.jpg" alt="Image">\
            <img src="img/ss3.jpg" alt="Image">
            <img src="img/ss4.jpg" alt="Image">
            <img src="img/ss5.jpg" alt="Image">
            <img src="img/ss6.jpg" alt="Image">
        </div>

        <div class="dot-container">
            <div class="dot active"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </section>
    <!---------------------------------------------------------------------------->
    <section class="app-container">
        <p>Tải ứng dụng moba</p>
        <div class="app-google">
            <img src="img/appstore.jpg">
            <img src="img/chplay.jpg">
        </div>
        <p>Nhận bản tin từ trang web</p>
        <input type="text" placeholder="nhập email của bạn ....">
    </section>
    <?php
include "footermain.php"
?>
    <!-----------------------------------footer---------------------------------------->