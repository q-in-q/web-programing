<?php
require_once ('db_connection.php');

$email = mysqli_real_escape_string($conn, trim($_POST['email']));
$pass = mysqli_real_escape_string($conn, md5(trim($_POST['pass'])));
 
 
$user = mysqli_query($conn,"select * from tb_user where email='$email' and password='$pass'");
$chek = mysqli_num_rows($user);

if($chek>0)
{
    session_start();
    $row = mysqli_fetch_array($user);
    $_SESSION['first_name'] = $row['first_name'];
    $_SESSION['status'] = "login";
    header("location:dashboard/index.php");

}else
{
    header("location:login.php?pesan=gagal");
}
?>