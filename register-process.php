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

    $secretKey = '6Lc5u6sUAAAAAKCcau77W2Hu-ddQhL7ecaLnKCOC';
    $captcha = $_POST['g-recaptcha-response'];
    $remoteip = $_SERVER['REMOTE_ADDR'];

    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captcha&remoteip=$remoteip";

    $response = file_get_contents($url);
    $response = json_decode($response);

    
    if ($pass != $cpass){
        header('location: register.php?pesan=password-failed');
    }if($_POST['check'] != 'checked'){
        header('location: register.php?pesan=checked');
    }if($response->success==false){
        header('location: register.php?pesan=captcha');
    }if ($response->success && $pass == $cpass && $_POST['check'] == 'checked') {
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
        header ('location: login.php?pesan=register-success');
    }
}
?>
