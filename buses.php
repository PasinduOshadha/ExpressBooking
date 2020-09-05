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
                                        <li class="list-group-item list-group-item-action">
                                            <div class="row">
                                                <div class="col-md-1 text-right">
                                                    <input class="form-check-input" type="radio" name="bus_no" id="bus_id_1" value="nb-2565">
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-check-label" for="bus_id_1">
                                                        <span class="bus-no">Bus No:NB 2565</span>
                                                        <span class=" ml-3 bus-time">Time: 12:00</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item list-group-item-action">
                                            <div class="row">
                                                <div class="col-md-1 text-right">
                                                    <input class="form-check-input" type="radio" name="bus_no" id="bus_id_2" value="nb-2566">
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-check-label" for="bus_id_2">
                                                        <span class="bus-no">Bus No:NB 2566</span>
                                                        <span class=" ml-3 bus-time">Time: 12:00</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item list-group-item-action">
                                            <div class="row">
                                                <div class="col-md-1 text-right">
                                                    <input class="form-check-input" type="radio" name="bus_no" id="bus_id_3" value="nb-2567">
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-check-label" for="bus_id_3">
                                                        <span class="bus-no">Bus No:NB 2565</span>
                                                        <span class=" ml-3 bus-time">Time: 12:00</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
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