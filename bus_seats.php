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
        <div id="" class="">
            <div class="section-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="booking-form-wrapper">
                                <div id="step-1">
                                    <div class="row">
                                        <div class="col-md-12 mt-5">
                                            <h1 class="routes-title">
                                                <b>Bus No: NB-0000</b>
                                            </h1>
                                            <hr class="" style="opacity: 0;">
                                            <h3>
                                                From [start] To [destination]
                                            </h3>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <input type="checkbox" name="a1" id="a1" class="css-checkbox" /><label for="a1" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="b1" id="b1" class="css-checkbox" /><label for="b1" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="c1" id="c1" class="css-checkbox" /><label for="c1" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="d1" id="d1" class="css-checkbox" /><label for="d1" class="css-label"></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <input type="checkbox" name="a2" id="a2" class="css-checkbox" /><label for="a2" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="b2" id="b2" class="css-checkbox" /><label for="b2" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="c2" id="c2" class="css-checkbox" /><label for="c2" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="d2" id="d2" class="css-checkbox" /><label for="d2" class="css-label"></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <input type="checkbox" name="a3" id="a3" class="css-checkbox" /><label for="a3" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="b3" id="b3" class="css-checkbox" /><label for="b3" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="c3" id="c3" class="css-checkbox" /><label for="c3" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="d3" id="d3" class="css-checkbox" /><label for="d3" class="css-label"></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <input type="checkbox" name="a4" id="a4" class="css-checkbox" /><label for="a4" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="b4" id="b4" class="css-checkbox" /><label for="b4" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="c4" id="c4" class="css-checkbox" /><label for="c4" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="d4" id="d4" class="css-checkbox" /><label for="d4" class="css-label"></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <input type="checkbox" name="a5" id="a5" class="css-checkbox" /><label for="a5" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="b5" id="b5" class="css-checkbox" /><label for="b5" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="c5" id="c5" class="css-checkbox" /><label for="c5" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="d5" id="d5" class="css-checkbox" /><label for="d5" class="css-label"></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <input type="checkbox" name="a6" id="a6" class="css-checkbox" /><label for="a6" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="b6" id="b6" class="css-checkbox" /><label for="b6" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="c6" id="c6" class="css-checkbox" /><label for="c6" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="d6" id="d6" class="css-checkbox" /><label for="d6" class="css-label"></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <input type="checkbox" name="a7" id="a7" class="css-checkbox" /><label for="a7" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="b7" id="b7" class="css-checkbox" /><label for="b7" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="c7" id="c7" class="css-checkbox" /><label for="c7" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="d7" id="d7" class="css-checkbox" /><label for="d7" class="css-label"></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <input type="checkbox" name="a8" id="a8" class="css-checkbox" /><label for="a8" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="b8" id="b8" class="css-checkbox" /><label for="b8" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="c8" id="c8" class="css-checkbox" /><label for="c8" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="d8" id="d8" class="css-checkbox" /><label for="d8" class="css-label"></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <input type="checkbox" name="a9" id="a9" class="css-checkbox" /><label for="a9" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="b9" id="b9" class="css-checkbox" /><label for="b9" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="c9" id="c9" class="css-checkbox" /><label for="c9" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="d9" id="d9" class="css-checkbox" /><label for="d9" class="css-label"></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <input type="checkbox" name="a10" id="a10" class="css-checkbox" /><label for="a10" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="b10" id="b10" class="css-checkbox" /><label for="b10" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="c10" id="c10" class="css-checkbox" /><label for="c10" class="css-label"></label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="checkbox" name="d10" id="d10" class="css-checkbox" /><label for="d10" class="css-label"></label>
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
    </div>
    </div>

    <!-- content end -->


    <!-- footer -->
    <?php
    include_once 'template_parts/footer.php';
    ?>
</body>

</html>