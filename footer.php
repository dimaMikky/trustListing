               <!--     *********    BIG WHITE FOOTER     *********      -->
               <footer class="footer footer-white footer-big">
                        <div class="container">
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-2">
                                        <h5>About Us</h5>
                                        <ul class="links-vertical">
                                            <li>
                                                <a href="#pablo">
                                                    Blog
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#pablo">
                                                    About Us
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#pablo">
                                                    Presentation
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#pablo">
                                                    Contact Us
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-2">
                                        <h5>Market</h5>
                                        <ul class="links-vertical">
                                            <li>
                                                <a href="#pablo">
                                                    Sales FAQ
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#pablo">
                                                    How to Register
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#pablo">
                                                    Sell Goods
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#pablo">
                                                    Receive Payment
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#pablo">
                                                    Transactions Issues
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#pablo">
                                                    Affiliates Program
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>Social Feed</h5>
                                        <div class="social-feed">
                                            <div class="feed-line d-flex">
                                                <i class="fa fa-twitter"></i>
                                                <p>How to handle ethical disagreements with your clients.</p>
                                            </div>
                                            <div class="feed-line d-flex">
                                                <i class="fa fa-twitter"></i>
                                                <p>The tangible benefits of designing at 1x pixel density.</p>
                                            </div>
                                            <div class="feed-line d-flex">
                                                <i class="fa fa-facebook-square"></i>
                                                <p>A collection of 25 stunning sites that you can use for inspiration.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>Follow Us</h5>
                                        <ul class="social-buttons">
                                            <li>
                                                <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#pablo" class="btn btn-just-icon btn-link btn-facebook">
                                                    <i class="fa fa-facebook-square"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble">
                                                    <i class="fa fa-dribbble"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#pablo" class="btn btn-just-icon btn-link btn-google">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#pablo" class="btn btn-just-icon btn-link btn-instagram">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <h5>Numbers Don&apos;t Lie</h5>
                                        <h4>14.521
                                            <small>Freelancers</small>
                                        </h4>
                                        <h4>1.423.183
                                            <small>Transactions</small>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="copyright pull-center">
                                Copyright &#xA9;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Trusted All Rights Reserved.
                            </div>
                        </div>
                    </footer>
                    <!--     *********   END BIG WHITE FOOTER     *********      -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-material-design.min.js"></script>
    <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
    <script src="js/material-kit.min.js?v=2.0.0"></script>
    <script>
    // A $( document ).ready() block.
    $(document).ready(function() {
        $('#russian').on('click', function(){
            $.ajax({
                type: "GET",
                url: 'check_lang.php',
                data: "lang=ru",
                async: false,
                success: function(data){
                    $(this).url('window.location.href');
                    console.log(data);
                }
              });
        })   
        $('#english').on('click', function(){
            $.ajax({
                type: "GET",
                url: 'check_lang.php',
                data: "lang=en",
                async: false,
                success: function(data){
                    $(this).url('window.location.href');
                    console.log(data);
                }
              });
        })       
    });
    </script>
</body>

</html>