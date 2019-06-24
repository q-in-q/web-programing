<?php
    include("header.php");
    include("jumbotron.php");
?>

<section class="form-main footer-form" aria-label="Contact Form">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="head-contact"> 
                            <h2>HUBUNGI KAMI</h2>
                            <p>Jika ada pertanyaan dsilahkan contact</p>
                        </div>
                        
                        
                        <form name="contentForm" enctype="multipart/form-data" method="" action="" role="form" data-toggle="validator" novalidate="true">
                        <div class="form schedule-assessment">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="full_name" class="sr-only">Full Name: </label>
                                    <input name="full_name" id="full_name" placeholder="Full name" type="text" value="" required="required" data-error="Please enter your full name.">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <!-- close col-->

                                <div class="form-group col-md-6">
                                    <label for="email" class="sr-only">Email Address: </label>
                                    <input name="email" id="email" placeholder="Email Address" type="email" value="" required="required" data-error="Please enter a valid email.">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <!-- close col-->
                            </div>
                            <!-- close row-->

                            <div class="row">
                            <div class="form-group col-md-12 field-textarea">
                                <label for="text" class="sr-only">Email Address: </label>
                                <textarea name="text" id="text" cols="30" rows="10" class="col-md-12" required="required" placeholder="Masukkan Pesan"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            </div><!-- close row-->
                            
                            <div class="form-group text-center">
                            <input class="submit center-block btn btn-primary col-md-12" id="btn" value="SUBMIT" type="submit">
                            </div>
                        </div>


                    </div>
                    <div class="col" id="googleMap">
                    </div>
                </div>
            </div>
        </section>

<?php
    include("footer.php");
?>