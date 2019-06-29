<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add icon library -->
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body bgcolor="#F4F4F5">
    <div class="box">
        <form action="login-process.php" method="post" style="max-width:500px;margin:auto">
            <p>
                <?php 
                if(isset($_GET['pesan'])){
                    if($_GET['pesan'] == "gagal"){
                        echo "<center><b>Login gagal! username dan password salah!</b></center>";
                    }else if($_GET['pesan'] == "logout"){
                        echo "<center><b>Anda telah berhasil logout</b></center>";
                    }
                }
                ?>
            </p>
            <div class="sign">
                <a href="register.php"><p>SIGNUP</p></a>
            </div>
            <br>
            <div class="input-container">
                <i class="fa fa-envelope icon"></i>
                <input class="input-field" type="text" placeholder="Email" name="email">
            </div>

            <div class="input-container">
                <i class="fa fa-lock icon"></i>
                <input class="input-field" type="password" placeholder="Password" name="pass">
            </div>

            <div class="reset">
                <a href="#" align="right"><p>Request a Password reset</p></a>
            </div>
            
            <div class="remember">
            <input type="checkbox" name="" value="">Remember Me
            </div>
            <br>
            
            <button type="submit" class="btn" name="btn_login">Login</button>
        </form>
    </div>
    </div>

    

</body>

</html>
 