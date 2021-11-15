<?php
    include_once '../pdo.php';
    $sql = 'select * from sach';
    $obj = $pdo->prepare('$sql');
    $obj->execute();
    $n = $obj->rowCount();
    echo $n;
?>
<?php 
    if(!isset($_SESSION)) session_start();
    if(!isset($_SESSION['admin']))
    {
        header('location: login.html');
        exit;
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
 <?php include './subadmin/head.php' ?>
  
	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		<?php include './subadmin/sliderbar.php' ?>
		 <!-- End #sidebar -->
		<?php include './subadmin/maincontent.php' ?>
		 <!-- End #main-content -->
		
	</div></body>
  

<!-- Download From www.exet.tk-->
</html>
