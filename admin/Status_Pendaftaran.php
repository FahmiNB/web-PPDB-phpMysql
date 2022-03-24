<!doctype html>
<html class="no-js" lang="en">

<?php 
    include '../dbconnect.php';
    include '../cek.php';
    // if($role!=='User'){
    //     header("location:../login.php");
    // };
   // $userid = $_SESSION['userid'];
    $u = $_GET['u'];
    $status = $_GET['status'];

    mysqli_query($conn,"UPDATE userdata SET status='$status' WHERE userid='$u'");
 
    header("location:Kelola_Status.php?pesan=Berhasil update status : $status");
	?>

