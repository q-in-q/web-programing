<?php 

require_once("db_connection.php");

if(isset($_POST['btn_register'])){
    $fname = mysqli_real_escape_string($conn, trim($_POST['firstname']));
    $lname = mysqli_real_escape_string($conn, trim($_POST['lastname']));
    $username = mysqli_real_escape_string($conn, trim($_POST['username']));
    $phone = mysqli_real_escape_string($conn, trim($_POST['phone']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $pass = mysqli_real_escape_string($conn, md5(trim($_POST['password'])));
    $cpass = mysqli_real_escape_string($conn, md5(trim($_POST['confirmpassword'])));
    $address = mysqli_real_escape_string($conn, trim($_POST['address']));
    $country = mysqli_real_escape_string($conn, trim($_POST['country']));
    $city = mysqli_real_escape_string($conn, trim($_POST['city']));
    $region = mysqli_real_escape_string($conn, trim($_POST['region']));
    $zipcode = mysqli_real_escape_string($conn, trim($_POST['zipcode']));

    if ($pass != $cpass){
        header('location: login.php');
    }else {
        $sql = 'insert into tb_user values(
            "'.$fname.'",
            "'.$lname.'",
            "'.$username.'",
            "'.$phone.'",
            "'.$email.'",
            "'.$pass.'",
            "'.$cpass.'",
            "'.$address.'",
            "'.$country.'",
            "'.$city.'",
            "'.$region.'",
            "'.$zipcode.'"

        )';
        mysqli_query($conn, $sql);
        header ('location: login.php?login-success');
    }
    
}

?>
