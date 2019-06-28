<?php
session_start();
if($_SESSION['first_name']=='')
{
    header("location:login.php");
}
?>
 
Selamat Datang Users <?php echo $_SESSION['first_name']?>
 <br>
<a href="logout.php">Logout</a>