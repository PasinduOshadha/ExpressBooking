<!DOCTYPE html>
<html>

<head>
    <title>Xpress Highway Bus Booking</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
    <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />
    <script src="js/modernizer.js"></script>
</head>

<body>
    <div id="loader">
        <div id="status"></div>
    </div>
    <?php
    include_once 'template_parts/navbar.php'
    ?>
    <div id="banner">
        <div id="booking" class="section">
            <div class="section-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="booking-cta">
                                <h1>Make your reservation</h1>
                                <p>Leave On Time, Everytime</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-1">
                            <div class="booking-form">
                                <form>
                                    <div class="row mb-3">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <span class="form-label">From</span>
                                                <select class="form-control">
                                                    <option value="0">Select City</option>
                                                    <option>Colombo</option>
                                                    <option>Galle</option>
                                                    <option>Colombo</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <span class="form-label">To</span>
                                                <select class="form-control">
                                                    <option value="0">Select City</option>
                                                    <option>Matara</option>
                                                    <option>Galle</option>
                                                    <option>Colombo</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control" type="date" required>
                                                <span class="form-label">Check In</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="reserve-book-btn text-center">
                                        <button class="hvr-underline-from-center" type="submit" value="SEND" id="submit">Find an Experss </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="about" class="about-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title"> About Us </h2>
                        <h3>IT HAS MORE CHOICES, QUITE SIMPLY, BEST PRICE AND USER FRIENDLY.......</h3>
                        <p>It is ready at 24 hours for you. You can use the system and feel free to make your booking without any difficulties. So make your booking with easy payment methods and user friendly appearance. You are facilitated for choose your place at the bus. We are always caring our customers and make our best for you. So please raise your comments and feel free to contact us for any clarification. </p>

                        <p>It is way to say god buy for the terrible waiting at the highway entrance for buses. You can easily see the available buses and their booking status. So you can easily grab all information in your hand. </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="about-images">
                            <img class="about-main" src="images/about-main.jpg" alt="About Main Image">
                            <img class="about-inset" src="images/about-inset.jpg" alt="About Inset Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="our_team">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="container">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">Why Book with Xpress Booking</h2>
                    </div>
                </div>
                <div class="team-box">
                    <div class="col-md-4 col-sm-6">
                        <div class="sf-team">
                            <div class="thumb">
                                <a href="#"><img src="images/staff-01.jpg" alt=""></a>
                            </div>
                            <div class="text-col">
                                <h3>Shazni</h3>
                                <p>Owner - Xpress Booking</p>
                            </div>
                        </div>
                    </div>
                    <p class="title-caption text-justify">
                        We care you always. Don’t miss the bus at the highway entrance. We are the premier at the bus booking system and we are the only one in Sri Lanka for providing bus booking facility for highways. So Xpress booking is very familiar with your choice. We are always trying to give our best services for our customers. Our best software development teams and developers are used for creating this system. So you are lucky to with us. Make your payment easily. We care your information and don’t worry for them.<br /><br /> It is ready at 24 hours for you. You can use the system and feel free to make your booking without any difficulties. So make your booking with easy payment methods and user friendly appearance. You are facilitated for choose your place at the bus. We are always caring our customers and make our best for you. So please raise your comments and feel free to contact us for any clarification. </p>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="gallery" class="gallery-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
                            Our Gallery
                        </h2>
                        <p class="title-caption text-center">We have lot of buses..... </p>
                    </div>
                    <div class="gal-container clearfix">
                        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                            <div class="box">
                                <img src="images/gallery_01.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="1" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-body">
                                            <img src="images/gallery_01.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <img src="images/gallery_02.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="2" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-body">
                                            <img src="images/gallery_02.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <img src="images/gallery_03.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="3" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-body">
                                            <img src="images/gallery_03.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <img src="images/gallery_04.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="4" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-body">
                                            <img src="images/gallery_04.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <img src="images/gallery_05.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="5" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-body">
                                            <img src="images/gallery_05.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <img src="images/gallery_06.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="9" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-body">
                                            <img src="images/gallery_06.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                            <div class="box">
                                <img src="images/gallery_07.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="10" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-body">
                                            <img src="images/gallery_07.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <img src="images/gallery_08.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="11" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-body">
                                            <img src="images/gallery_08.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <img src="images/gallery_09.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="12" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-body">
                                            <img src="images/gallery_09.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <img src="images/gallery_10.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="13" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-body">
                                            <img src="images/gallery_10.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- footer -->
<?php
include_once 'template_parts/footer.php';
?>
</body>

</html>