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
                                    
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="row">
                                                <div class="col-md-2">Route No. 231</div>
                                                <div class="col-md-6">From <code>start</code> To <code>destination</code></div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="row">
                                                <div class="col-md-2">Route No. 231</div>
                                                <div class="col-md-6">From <code>start</code> To <code>destination</code></div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="row">
                                                <div class="col-md-2">Route No. 231</div>
                                                <div class="col-md-6">From <code>start</code> To <code>destination</code></div>
                                            </div>
                                        </a>
                                        
                                    </div>

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