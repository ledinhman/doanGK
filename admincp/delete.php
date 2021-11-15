<?php
    include '../pdo.php';
    $ma = isset($_GET['masach'])?$_GET['masach']:'';

    if($ma != ''){
        $sql = "delete from sach where masach = ? ";
        $a = [$ma];
        $stm = $pdo->prepare($sql);
        $stm->execute($a);
        header('location: index.php');
    }
    

    $manxb = isset($_GET['manxb'])?$_GET['manxb']:'';

    if($manxb != ''){
        $sql = "delete from nhaxb where manxb = ? ";
        $a = [$manxb];
        $stm = $pdo->prepare($sql);
        $stm->execute($a);
        header('location: index.php');
    }
    

    $maloai = isset($_GET['maloai'])?$_GET['maloai']:'';

    if($maloai != ''){
        $sql = "delete from loai where maloai = ? ";
        $a = [$maloai];
        $stm = $pdo->prepare($sql);
        $stm->execute($a);
        header('location: index.php');
        
    }
    header('location: index.php');
?>