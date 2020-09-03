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
<!-- header -->
<?php
    include_once 'template_parts/navbar.php'
?>

<!-- content begin -->

<div id="banner">
        <div id="booking" class="section">
            <div class="section-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="booking-form-wrapper">
                                <div id="step-1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h1 class="routes-title">
                                                <b>Bus Routes</b>
                                            </h1>
                                            <hr class="" style="opacity: 0;">
                                            <h3>
                                                From [start] To [destination]
                                            </h3>
                                        </div>
                                    </div>
                                    <ul class="list-group">
                                        <li id="" class="list-group-item route-single"><a href="">Cras justo odio</a></li>
                                        <li id="" class="list-group-item route-single"><a href="">Dapibus ac facilisis in</a></li>
                                        <li id="" class="list-group-item route-single"><a href="">Morbi leo risus</a></li>
                                        <li id="" class="list-group-item route-single"><a href="">Porta ac consectetur ac</a></li>
                                        <li id="" class="list-group-item route-single"><a href="">Vestibulum at eros</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- content end -->


<!-- footer -->
<?php
    include_once 'template_parts/footer.php';
?>
</body>

</html>