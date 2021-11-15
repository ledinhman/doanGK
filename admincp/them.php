<?php
    include '../pdo.php';
    $ma = isset($_POST['DH51802640_masach'])?$_POST['DH51802640_masach']:'';
    $manxb = isset($_POST['DH51802640_manxb'])?$_POST['DH51802640_manxb']:'';
    $maloai = isset($_POST['DH51802640_maloai'])?$_POST['DH51802640_maloai']:'';

    if($ma != ''){
        $ten = isset($_POST['DH51802640_tensach'])?$_POST['DH51802640_tensach']:'';
        $gia = isset($_POST['DH51802640_gia'])?$_POST['DH51802640_gia']:0;
        $mota = isset($_POST['DH51802640_mota'])?$_POST['DH51802640_mota']:'';
        $nhaxb = isset($_POST['DH51802640_manxb'])?$_POST['DH51802640_manxb']:'';
        $loai = isset($_POST['DH51802640_maloai'])?$_POST['DH51802640_maloai']:'';
        if(isset($_FILES['DH51802640_hinh'])){
            if($_FILES['DH51802640_hinh']['error']==0){
                $h = $_FILES['DH51802640_hinh']['name'];
                move_uploaded_file($_FILES['DH51802640_hinh']['tmp_name'], "img/$h");
            }
        }
        $sql = "insert into sach (masach, tensach, gia, hinh, mota, manxb, maloai) values (?, ?, ?, ?, ?, ?, ?)";
        $a = [$ma, $ten, $gia, $h, $mota, $nhaxb, $loai];
        $opdStatement = $pdo->prepare($sql);
        $opdStatement->execute($a);
        header('location:index.php');                
    }

    if($manxb != ''){
        $tennxb = isset($_POST['DH51802640_tennxb'])?$_POST['DH51802640_tennxb']:'';
        $sql = "insert into nhaxb (manxb, tennxb) values (?, ?)";
        $b = [$manxb, $tennxb];
        $opdStatement = $pdo->prepare($sql);
        $opdStatement->execute($b);
        header('location:index.php');
    }

    if($maloai != ''){
        $tenloai = isset($_POST['DH51802640_tenloai'])?$_POST['DH51802640_tenloai']:'';
        $sql = "insert into loai (maloai, tenloai) values (?, ?)";
        $b = [$maloai, $tenloai];
        $opdStatement = $pdo->prepare($sql);
        $opdStatement->execute($b);
        header('location:index.php');
    }

    header('location:index.php');
    
?>