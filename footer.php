<!-- FOOTER -->
<section class="fullwidth-layout">
        <div class="footer-top">
            <div class="container footer-top-content">
                <p>Get Connected With Us On Social Network</p>
                <ul class="social-media-footer">
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-middle">
            <div class="container">
                <div class="row footer-middle-content">
                        <div class="col">
                            <h3>company name</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum sequi accusantium commodi, pariatur odio facere, mollitia, perferendis voluptates nemo magni obcaecati debitis maiores? Maxime maiores alias fugiat minus, delectus voluptates! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, quas ipsa quod nisi, sequi, quis ipsam ducimus ea mollitia sapiente rem odio asperiores ex nihil quibusdam? Totam quo fugiat fuga!
                            </p>
                        </div>
                        <div class="col">
                            <h3>Using Product</h3>
                            <ul>
                                <li> <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a></li>
                                <li> <a href="https://sass-lang.com/"    target="_blank">Sass</a></li>
                                <li> <a href="https://code.visualstudio.com/" target="_blank">Visual Studio Code</a></li>
                                <li> <a href="https://www.apachefriends.org/" target="_blank">Xampp</a> </li>
                            </ul>
                        </div>
                        <div class="col">
                            <h3>Address</h3>
                            <ul>
                                <li><i class="fas fa-home"></i> Jl. Nusa Indah II no.57 - Condong Catur - Depok - Sleman - Yogyakarta</li>
                                <li><i class="fas fa-phone"></i> +62 877 5853 2425</li>
                                <li><i class="fas fa-envelope"></i> anang.pradana@students.amikom.ac.id</li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p><strong>anang wahyu pradana </strong>&copy; 2019 - Universitas Amikom Yogyakarta</p>
            </div>
        </div>
    </section>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js" ></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script>
        function initMap() {
        var location = {lat: -7.759827,lng: 110.408346};
        var map = new google.maps.Map(document.getElementById("googleMap"), {
            zoom: 12,
            center: location,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        });
        var marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }

    // event jendela di-load  
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2GA8PB8r4KQzFKAlA8Ps53igW6IvN4Ks&callback=initMap"
    type="text/javascript"></script>
</body>
</html>