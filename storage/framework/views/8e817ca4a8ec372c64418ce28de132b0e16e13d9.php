<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>SIYASDA | <?php echo e($title); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" " />
    <meta name="keywords" content="" />
    <meta content="Pichforest" name="author" />

    <link rel="shortcut icon" href="dist/images/faviconnew.ico">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css" type="text/css" id="bootstrap-style" />

    <!-- Material Icon Css -->
    <link rel="stylesheet" href="dist/css/materialdesignicons.min.css" type="text/css" />

    <!-- Unicon Css -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <!-- Swiper Css -->
    <link rel="stylesheet" href="dist/css/tiny-slider.css" type="text/css" />
    <link rel="stylesheet" href="dist/css/swiper.min.css" type="text/css" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="dist/css/style.min.css" type="text/css" />

    <!-- colors -->
    <link href="dist/css/colors/default.css" rel="stylesheet" type="text/css" id="color-opt" />

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71">

    <?php echo $__env->yieldContent('content'); ?>
    

    <!-- footer section -->
    <section class=" section footer bg-dark overflow-hidden">
        <div class="bg-arrow">
            
        </div>
        <!-- container -->
        <div class="container">
            <div class="row ">
                <div class="col-lg-2">
                    <a class="navbar-brand logo text-uppercase" href="/">
                        <img src="dist/images/logo-footer.png" class="logo-light" alt="" height="40">
                        <!-- <img src="images/logo-dark.png" class="logo-dark" alt="" height="28"> -->
                    </a>
                    <p class="text-white-50 mt-2 mb-0"><small>Jl. Raya Cipacing No.20, Kp.Bojong, Ds.Cipacing, Kec. Jatinangor, Kabupaten Sumedang, Jawa Barat 45363</small></p>

                    <div class="footer-icon mt-4">
                        <div class=" d-flex align-items-center">
                            <a href="" class="me-2 avatar-sm text-center" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Facebook">
                                <i class="mdi mdi-facebook f-24 align-middle text-primary"></i>
                            </a>
                            <a href="" class="mx-2 avatar-sm text-center" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Instagram">
                                <i class="mdi mdi-instagram f-24 align-middle text-primary"></i>
                            </a>
                            <a href="" class="mx-2 avatar-sm text-center" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Youtube">
                                <i class="mdi mdi-youtube f-24 align-middle text-primary"></i>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="text-start mt-4 mt-lg-0">
                        <h5 class="text-white fw-bold">Tingkat</h5>
                        <ul class="footer-item list-unstyled footer-link mt-3">
                            <li><a href="">Madrasah Aliyah</a></li>
                            <li><a href="">Madrasah Tsanawiyah</a></li>
                            <li><a href="">Madrasah Ibtidaiyah</a></li>
                            <li><a href="">Pondok Pesantren</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="text-start">
                        <h5 class="text-white fw-bold">Comment</h5>
                        <div class="contact-box">
                            <div class="custom-form">
                                <form method="post" name="myForm" onsubmit="return validateForm()">
                                    <p id="error-msg" style="opacity: 1;">
                                        <!-- <div class="alert alert-warning">*Please enter a Name*</div> -->
                                    </p>
    
                                    <div id="simple-msg"></div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="name" id="name" type="text" class="form-control contact-form"
                                                    placeholder="Your name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="email" id="email" type="email"
                                                    class="form-control contact-form" placeholder="Your email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mt-2">
                                                <input type="text" class="form-control contact-form" id="subject"
                                                    placeholder="Your Subject..">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mt-2">
                                                <textarea name="comments" id="comments" rows="3"
                                                    class="form-control contact-form h-auto"
                                                    placeholder="Your message..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-lg-12 d-grid">
                                            <input type="submit" id="submit" name="send"
                                                class="submitBnt btn btn-rounded btn-primary" value="Send Message">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-white">Maps</h5>
                        <div class="position-relative">
                            <div class="contact-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.1241492246047!2d107.7625085398926!3d-6.950597663486156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c36260c4db75%3A0x9827aaead0999d8c!2sMTs.%20Plus%20Darul%20Hufadz!5e0!3m2!1sid!2sid!4v1664757492529!5m2!1sid!2sid"
                                    width="340" height="270" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="map-shape"></div>
                        </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>

    <section class="bottom-footer py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <p class="mb-0 text-center text-muted">©
                        <script>document.write(new Date().getFullYear())</script> SIYASDA. All Rights Reserved <i
                            class="mdi mdi-heart text-danger"></i> by <a
                            href="#" target="_blank" class="text-muted">Tim IT Darul Hufadz.</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end footer -->


    <!-- Style switcher -->
    
    <!-- end switcher-->



    <!--Bootstrap Js-->
    <script src="dist/js/bootstrap.bundle.min.js"></script>

    <!-- Slider Js -->
    <script src="dist/js/tiny-slider.js"></script>
    <script src="dist/js/swiper.min.js"></script>

    

    <!-- counter -->
    <script src="dist/js/counter.init.js"></script>

    <!-- App Js -->
    <script src="dist/js/app.js"></script>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

</body>

</html><?php /**PATH C:\laragon\www\SIYASDA\resources\views/layouts/temp-pages.blade.php ENDPATH**/ ?>