<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/styling.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    
    <title>HOME | My Consultant</title>
</head>
<body>
    <section class="navigasi">
        
           <h3>TEST</h3>
        <div class="">
            <nav class="navbar navbar-expand-lg  navbar-dark bg-primary sticky-top">
                <div class="container">
                        <a class="navbar-brand" href="index.php">
                            <img src="./assets/img/white.png" width="100" class="d-inline-block align-top" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    
                        <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto navigasi w-100 justify-content-end">  
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="">
                                    Home
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="./component.html">Component</a>
                                </div>
                                
                            </li>
                            <li class="nav-item"><a class="nav-link"  href="our-team.php">Our Team</a></li>
                        </ul>
                        
                    </div>
                </nav>
            </div>
        </div>    
    </section>

    <!-- SLIDER -->
    <section class="header">
       <!--Carousel Wrapper-->
        <div id="carousel-example-2" class="carousel slide carousel-fade">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-2" data-slide-to="1"></li>
                <li data-target="#carousel-example-2" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="view">
                    <img class="w-100" src="./assets/img/career-consultant-1.jpg">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h3>Light mask</h3>
                    <p>First text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class=" w-100" src="./assets/img/1.jpg" >
                    <div class="mask rgba-black-strong"></div>
                </div>
                <div class="carousel-caption">
                    <h3>Strong mask</h3>
                    <p>Secondary text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="w-100" src="./assets/img/consultant.jpg">
                    <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption">
                    <h3>Slight mask</h3>
                    <p>Third text</p>
                </div>
            </div>
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->
    </section>
