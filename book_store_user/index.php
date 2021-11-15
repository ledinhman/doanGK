<?php
    include '../pdo.php';
    $sql = "select * from loai";
    $obj = $pdo->prepare($sql);
    $obj->execute();
    $dataLoai = $obj->fetchAll(PDO::FETCH_OBJ);

    $sql = "select * from nhaxb";
    $obj = $pdo->prepare($sql);
    $obj->execute();
    $dataNXB = $obj->fetchAll(PDO::FETCH_OBJ);

    $tk = isset($_GET['timkiem'])?$_GET['timkiem']:'';
    $sql = "select * from sach where tensach like ?";
    $a = ["%$tk%"];
    $obj = $pdo->prepare($sql);
    $obj->execute($a);
    $dataSach = $obj->fetchAll(PDO::FETCH_OBJ);



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>DinhMan Book Store</title>
    <meta name="keywords" content="Book Store Template, Free CSS Template, CSS Website Layout, CSS, HTML" />
    <meta name="description" content="Book Store Template, Free CSS Template, Download CSS Website" />
    <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!--  Free CSS Templates from www.templatemo.com -->
    <div id="templatemo_container">
        <div id="templatemo_menu">
            <ul>
                <li><a href="index.html" class="current">Trang chủ</a></li>
                <li><a href="#">Sách</a></li>               
                <li><a href="#">Giỏ hàng</a></li>
                <li><form action = "index.php"><input type="text" name = "timkiem"><input type="submit" value="Tìm kiếm"></form></li>
            </ul>
        </div>
        <!-- end of menu -->

        <div id="templatemo_header">
            <div id="templatemo_special_offers">
                <p>
                    <span>Giảm 10%</span> cho hóa đơn trên 1.000.000 vnd
                </p>

            </div>


            <div id="templatemo_new_books">
                <ul>
                    <li>Thực hành php</li>
                    <li>Toán rời rạc</li>
                    <li>Văn học hiện đại</li>
                </ul>

            </div>
        </div>
        <!-- end of header -->
        <?php include 'content_left.php' ?>
        
            <!-- end of content left -->

            <?php include 'content_right.php'?>
            <!-- end of content right -->

            <div class="cleaner_with_height">&nbsp;</div>
        </div>
        <!-- end of content -->

        <div id="templatemo_footer">

            <a href="index.php">Home</a> | <a href="index.php">Books</a> | <a href="#">FAQs</a> | <a href="#">Contact Us</a><br /> Copyright © 2022 <a href="#"><strong>LeDinhMan</strong></a> | Designed by <a href="http://www.templatemo.com" target="_parent" title="free css templates">Free CSS Templates</a> </div>
        <!-- end of footer -->
        <!--  Free CSS Template www.templatemo.com -->
    </div>
    <!-- end of container -->
</body>

</html>