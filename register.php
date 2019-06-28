<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="./assets/css/register.css">
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<div class="col-md-12">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">

                <form class="Form" action="register-process.php" method="post">
                    <!--Batas-->

                    <div class="box">
                        <p>Sign Up</p>
                        <input class="btn-grad btn-grad-1" type="button" value="Dashboard" onclick="window.location.href='index.php'">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <b>First Name</b><br>
                                    <input type="text" id="fname" name="firstname" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <b>Last Name</b><br>
                                    <input type="text" id="lname" name="lastname" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <b>Username</b><br>
                                    <input type="text" id="cname" name="username" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <b>Phone Address</b><br>
                                    <input type="text" id="paddress" name="phone" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <b>Email Address</b><br>
                                    <input type="text" id="email" name="email" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <b>Password</b><br>
                                    <input type="text" id="psswd" name="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <b>Confirm Password</b><br>
                                    <input type="text" id="cpasswd" name="confirmpassword" class="form-control">
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="tips">
                                    <div class="tips-sm">
                                        <div class="tips tips-sm">
                                            <strong>Tips for a good password</strong>
                                            <br>
                                            "Use both upper and lowercase characters"
                                            <br>
                                            "Include at least one symbol (# $ ! % & etc...)"
                                            <br>
                                            "Don't use dictionary words"
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <b>Address 1</b><br />
                                    <input type="text" id="Address 1" name="address" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <b>Address 2</b><br>
                                    <input type="text" id="Address 2" name="address2" class="form-control">
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <b>Country</b><br />
                                    <select id="country" name="country" class="form-control">
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Filipina">Filipina</option>
                                        <option value="">Thailand</option>
                                        <option value="">Laos</option>
                                        <option value="">Vietnam</option>
                                        <option value="">Cambodia</option>
                                        <option value="">Myanmar</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <b>City</b><br />
                                    <input type="text" id="Address 1" name="city" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <b>Region</b><br />
                                    <input type="text" id="Address 1" name="region" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <b>Zip Code</b><br />
                                    <input type="text" id="Address 1" name="zipcode" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="otong">
                                        <b>Notifikasi</b><br />
                                        <input type="checkbox" name="" value=""> centang untuk menerima notifikasi
                                    </div>
                                </div>


                                <div class="form-group">
                                    <b> Whatsapp Number</b><br />
                                    <input type="text" id="Whatsapp Number" name="Whatsapp Number" class="form-control"> Ex : +62 xxx xxx xxx xx
                                </div>

                                <div class="form-group">
                                    <b>How did you find us?</b><br />
                                    <select id="country" name="country" class="form-control">
                                        <option value="">None</option>
                                        <option value="">Google</option>
                                        <option value="">Bing</option>
                                        <option value="">Other Search Engine</option>
                                        <option value="">Web Hosting Talk</option>
                                        <option value="">Friend</option>
                                        <option value="">Advertisment</option>
                                        <option value="">Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <b>Coose Currency</b><br />
                                    <select id="country" name="country" class="form-control">
                                        <option value="">IDR</option>
                                        <option value="">USD</option>
                                        <option value="">BitCoin</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="box">
                            <p>We would like to send you occasional news, information and special offers by email. To join our mailing list, simply tick the box below. You can unsubscribe at any time.</p>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="agree" value="agree"> centang untuk menerima notifikasi
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mt-2">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="" value=""> I have read and agree to the<a href="#" target="_blank">Terms of Service</a>
                            </label>
                        </div>
                    </div>
                    <input class="btn btn-lg btn-block btn-primary" type="submit" value="Register" name="btn_register" > 
                    <!--Batas-->
                </form>


            </div>
        </div>
    </div>
</div>
</body>

</html>
