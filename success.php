<?php
session_start();
if($_SESSION['first_name']=='')
{
    header("location:login.php");
}
?>
 
<html>
    <head>
        <style type="text/css">
            h1, a {
                text-align: center;
                margin: 10px 0;
            }
        </style>
    </head>
    <body>
    <h1>Selamat Datang Users <b><?php echo $_SESSION['first_name']?></b> </h1>
    <br>
    <a href="logout.php">Logout</a>

    </body>
</html>