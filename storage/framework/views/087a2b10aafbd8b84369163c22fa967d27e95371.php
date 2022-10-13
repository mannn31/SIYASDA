

<?php $__env->startSection('content'); ?>

    <!-- light-dark mode button -->
    <a href="javascript: void(0);" id="mode" class="mode-btn text-white rounded-end">
        <i class="uil uil-brightness mode-dark mx-auto"></i>
        <i class="uil uil-moon bx-spin mode-light"></i>
    </a>



    <!-- Beranda section -->
    <section class="section footer bg-dark overflow-hidden" id="beranda">
        <div class="bg-overlay-gradiant"></div>
        <!-- start container -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <h1 class="text-light">Profil Madrasah Ibtidaiyah</h1>
                </div>
                <div class="col-lg-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="/" class="text-light"><i class="mdi mdi-home"></i> Beranda</a></li>
                          <li class="breadcrumb-item active text-light" aria-current="page"><?php echo e($title); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- end container -->

        <div class="background-line"></div>
    </section>
    <!-- end Beranda section -->

    <!-- Profil section -->
    <section class="section service bg-light" id="profil">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img src="assets/images/logo-yasda.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-7">
                    
                    <h1 class="display-6 fw-bold">Madrasah Ibtidaiyah Swasta Plus Darul Hufadz.</h1>
                    <p class="mt-4 text-muted" style="text-align: justify">
                        <?php echo e($about); ?>

                    </p>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end Profil section -->


    <!-- start features -->
    
    <!-- end features -->

    <!-- Visi Misi section -->
    <div class="section features" id="visi-misi">
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-3">
                        <h6 class="mb-0 fw-bold text-primary">Madrasah Ibtidaiyah Swasta Plus Hufadz Jatinangor</h6>
                        <h2 class="f-40">Visi dan Misi</h2>
                        <p class="text-muted">Berikut adalah visi dan misi Madrasah Ibtidaiyah Swasta Plus Darul Hufadz.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-visi-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-visi" type="button" role="tab" aria-controls="pills-visi"
                                aria-selected="true">VISI</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-misi-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-misi" type="button" role="tab" aria-controls="pills-misi"
                                aria-selected="false">MISI</button>
                        </li>
                    </ul>
                    <div class="tab-content mt-5" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-visi" role="tabpanel"
                            aria-labelledby="pills-visi-tab">
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <h2 class="mb-4 text-center">"Mencetak Generasi Qur'ani"</h2>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-misi" role="tabpanel"
                            aria-labelledby="pills-misi-tab">

                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="features-box mt-4">
                                                <div class="d-flex justify-content-center">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Memurnikan Tauhid</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="features-box mt-4">
                                                <div class="d-flex justify-content-center">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Mencerdaskan Akal</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="features-box mt-4">
                                                <div class="d-flex justify-content-center">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Memuliakan Akhlaq</h6>
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
        <!-- end container -->
    </div>
    <!-- end Visi Misi section -->

    <!-- Struktur section -->
    <section class="section bg-light testimonial" id="struktur">
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="title text-center mb-5">
                        <h6 class="mb-0 fw-bold text-primary">Madrasah Ibtidaiyah Swasta Plus Darul Hufadz Jatinangor</h6>
                        <h2 class="f-40">Struktur Organigram</h2>
                        <p class="text-muted">Berikut adalah struktur organigram Madrasah Ibtidaiyah Swasta Plus Darul Hufadz.</p>

                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="testi-slider" id="testi-slider">
                        <div class="item">
                            <div class="testi-box position-relative overflow-hidden">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <img src="assets/images/testi/img-1.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar">
                                                        <img src="assets/images/user/img-1.jpg" alt=""
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="f-14 mb-0 text-dark fw-bold"><span
                                                            class="text-muted fw-normal">Review By </span> Freanki Fabel
                                                    </p>
                                                    <div class="date">
                                                        <p class="text-muted mb-0 f-14">28 jan, 2021 <span>10:25
                                                                AM</span></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <h5 class="fw-bold">Bulid The App That Everyone Love.</h5>
                                                <p class="text-muted f-14">Start working with Styza that can provide
                                                    everything you need to generate awareness, drive traffic, connect.
                                                </p>
                                                <button class="btn btn-sm bg-gradiant"><i
                                                        class="mdi mdi-plus f-16 align-middle"></i>
                                                    Follow</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- slider item -->

                        <div class="item">
                            <div class="testi-box position-relative overflow-hidden">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <img src="assets/images/testi/img-2.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar">
                                                        <img src="images/user/img-2.jpg" alt=""
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="f-14 mb-0 text-dark fw-bold"><span
                                                            class="text-muted fw-normal">Review By </span> Freanki Fabel
                                                    </p>
                                                    <div class="date">
                                                        <p class="text-muted mb-0 f-14">28 jan, 2021 <span>10:25
                                                                AM</span></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <h5 class="fw-bold">Easy and prefect solution</h5>
                                                <p class="text-muted f-14">Start working with Styza that can provide
                                                    everything you need to generate awareness, drive traffic, connect.
                                                </p>
                                                <button class="btn btn-sm bg-gradiant"><i
                                                        class="mdi mdi-plus f-16 align-middle"></i>
                                                    Follow</button>
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
        <!-- end container -->
    </section>
    <!-- end Struktur section -->

    <!-- Pengajar section -->
    <section class="section bg-light team" id="pengajar">
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="title text-center mb-5">
                        <h6 class="mb-0 fw-bold text-primary">Madrasah Ibtidaiyah Swasta Plus Darul Hufadz Jatinangor</h6>
                        <h2 class="f-40">Daftar Pendidik dan Tenaga Kependidikan</h2>
                        <p class="text-muted">Berikut adalah daftar pendidik dan tenaga kependidikan Madrasah Ibtidaiyah Swasta Plus Darul Hufadz.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-lg-3 col-md-6">
                    <div class="team-box text-end">
                        <div class="row justify-content-end">
                            <div class="col-lg-9 col-10">
                                <div class="team-image">
                                    <img src="assets/images/team/img1.png" alt="" class="img-fluid">
                                </div>
                                <div class="team-icon ">
                                    <div class="d-flex mt-2">
                                        <div class="social-icon facebook mx-2">
                                            <a href=""> <i class="mdi mdi-facebook f-20"></i></a>
                                        </div>
                                        <div class="social-icon instagram mx-2">
                                            <a href=""><i class="mdi mdi-instagram f-20"></i></a>
                                        </div>
                                        <div class="social-icon twitter mx-2">
                                            <a href=""><i class="mdi mdi-twitter f-20"></i></a>
                                        </div>
                                        <div class="social-icon linkedin mx-2">
                                            <a href=""><i class="mdi mdi-linkedin f-20"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-info position-absolute">
                            <h6>Cody Fisher <span class="f-14 text-muted fw-normal">/ owner</span></h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-box">
                        <div class="row justify-content-end">
                            <div class="col-lg-9 col-10">
                                <div class="team-image text-end">
                                    <img src="assets/images/team/img4.png" alt="" class="img-fluid">
                                </div>
                                <div class="team-icon">
                                    <div class="d-flex mt-2">
                                        <div class="social-icon facebook mx-2">
                                            <a href=""> <i class="mdi mdi-facebook f-20"></i></a>
                                        </div>
                                        <div class="social-icon instagram mx-2">
                                            <a href=""><i class="mdi mdi-instagram f-20"></i></a>
                                        </div>
                                        <div class="social-icon twitter mx-2">
                                            <a href=""><i class="mdi mdi-twitter f-20"></i></a>
                                        </div>
                                        <div class="social-icon linkedin mx-2">
                                            <a href=""><i class="mdi mdi-linkedin f-20"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-info position-absolute">
                            <h6>Emily Coper <span class="f-14 text-muted fw-normal">/ Desiger</span></h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-box">
                        <div class="row justify-content-end">
                            <div class="col-lg-9 col-10">
                                <div class="team-image text-end">
                                    <img src="assets/images/team/img3.png" alt="" class="img-fluid">
                                </div>
                                <div class="team-icon">
                                    <div class="d-flex mt-2">
                                        <div class="social-icon facebook mx-2">
                                            <a href=""> <i class="mdi mdi-facebook f-20"></i></a>
                                        </div>
                                        <div class="social-icon instagram mx-2">
                                            <a href=""><i class="mdi mdi-instagram f-20"></i></a>
                                        </div>
                                        <div class="social-icon twitter mx-2">
                                            <a href=""><i class="mdi mdi-twitter f-20"></i></a>
                                        </div>
                                        <div class="social-icon linkedin mx-2">
                                            <a href=""><i class="mdi mdi-linkedin f-20"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-info position-absolute">
                            <h6>Nick Obron <span class="f-14 text-muted fw-normal">/ Devloper</span></h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-box">
                        <div class="row justify-content-end">
                            <div class="col-lg-9 col-10">
                                <div class="team-image text-end">
                                    <img src="assets/images/team/img2.png" alt="" class="img-fluid">
                                </div>
                                <div class="team-icon">
                                    <div class="d-flex mt-2">
                                        <div class="social-icon facebook mx-2">
                                            <a href=""> <i class="mdi mdi-facebook f-20"></i></a>
                                        </div>
                                        <div class="social-icon instagram mx-2">
                                            <a href=""><i class="mdi mdi-instagram f-20"></i></a>
                                        </div>
                                        <div class="social-icon twitter mx-2">
                                            <a href=""><i class="mdi mdi-twitter f-20"></i></a>
                                        </div>
                                        <div class="social-icon linkedin mx-2">
                                            <a href=""><i class="mdi mdi-linkedin f-20"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-info position-absolute">
                            <h6>Simmy roy <span class="f-14 text-muted fw-normal">/ Manager</span></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-box text-end">
                        <div class="row justify-content-end">
                            <div class="col-lg-9 col-10">
                                <div class="team-image">
                                    <img src="assets/images/team/img1.png" alt="" class="img-fluid">
                                </div>
                                <div class="team-icon ">
                                    <div class="d-flex mt-2">
                                        <div class="social-icon facebook mx-2">
                                            <a href=""> <i class="mdi mdi-facebook f-20"></i></a>
                                        </div>
                                        <div class="social-icon instagram mx-2">
                                            <a href=""><i class="mdi mdi-instagram f-20"></i></a>
                                        </div>
                                        <div class="social-icon twitter mx-2">
                                            <a href=""><i class="mdi mdi-twitter f-20"></i></a>
                                        </div>
                                        <div class="social-icon linkedin mx-2">
                                            <a href=""><i class="mdi mdi-linkedin f-20"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-info position-absolute">
                            <h6>Cody Fisher <span class="f-14 text-muted fw-normal">/ owner</span></h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-box">
                        <div class="row justify-content-end">
                            <div class="col-lg-9 col-10">
                                <div class="team-image text-end">
                                    <img src="assets/images/team/img4.png" alt="" class="img-fluid">
                                </div>
                                <div class="team-icon">
                                    <div class="d-flex mt-2">
                                        <div class="social-icon facebook mx-2">
                                            <a href=""> <i class="mdi mdi-facebook f-20"></i></a>
                                        </div>
                                        <div class="social-icon instagram mx-2">
                                            <a href=""><i class="mdi mdi-instagram f-20"></i></a>
                                        </div>
                                        <div class="social-icon twitter mx-2">
                                            <a href=""><i class="mdi mdi-twitter f-20"></i></a>
                                        </div>
                                        <div class="social-icon linkedin mx-2">
                                            <a href=""><i class="mdi mdi-linkedin f-20"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-info position-absolute">
                            <h6>Emily Coper <span class="f-14 text-muted fw-normal">/ Desiger</span></h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-box">
                        <div class="row justify-content-end">
                            <div class="col-lg-9 col-10">
                                <div class="team-image text-end">
                                    <img src="assets/images/team/img3.png" alt="" class="img-fluid">
                                </div>
                                <div class="team-icon">
                                    <div class="d-flex mt-2">
                                        <div class="social-icon facebook mx-2">
                                            <a href=""> <i class="mdi mdi-facebook f-20"></i></a>
                                        </div>
                                        <div class="social-icon instagram mx-2">
                                            <a href=""><i class="mdi mdi-instagram f-20"></i></a>
                                        </div>
                                        <div class="social-icon twitter mx-2">
                                            <a href=""><i class="mdi mdi-twitter f-20"></i></a>
                                        </div>
                                        <div class="social-icon linkedin mx-2">
                                            <a href=""><i class="mdi mdi-linkedin f-20"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-info position-absolute">
                            <h6>Nick Obron <span class="f-14 text-muted fw-normal">/ Devloper</span></h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-box">
                        <div class="row justify-content-end">
                            <div class="col-lg-9 col-10">
                                <div class="team-image text-end">
                                    <img src="assets/images/team/img2.png" alt="" class="img-fluid">
                                </div>
                                <div class="team-icon">
                                    <div class="d-flex mt-2">
                                        <div class="social-icon facebook mx-2">
                                            <a href=""> <i class="mdi mdi-facebook f-20"></i></a>
                                        </div>
                                        <div class="social-icon instagram mx-2">
                                            <a href=""><i class="mdi mdi-instagram f-20"></i></a>
                                        </div>
                                        <div class="social-icon twitter mx-2">
                                            <a href=""><i class="mdi mdi-twitter f-20"></i></a>
                                        </div>
                                        <div class="social-icon linkedin mx-2">
                                            <a href=""><i class="mdi mdi-linkedin f-20"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-info position-absolute">
                            <h6>Simmy roy <span class="f-14 text-muted fw-normal">/ Manager</span></h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end Pengajar section -->

    <!-- slider section -->
    
    <!-- end section -->


    <!-- Galeri section -->
    <section class="section app-slider bg-light" id="galeri">
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title text-center mb-5">
                        <h6 class="mb-0 fw-bold text-primary">Yayasan Darul Hufadz Jatinangor</h6>
                        <h2 class="f-40">Galeri Kegiatan</h2>
                        <p class="text-muted">Berikut dokumentasi kegiatan yang dilakukan di Yayasan Darul Hufadz Jatinangor</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-container">
                        <div class="fream-phone ">
                            <img src="assets/images/testi/phone-fream.png" alt="" class="img-fluid">
                        </div>

                        <div class="swiper-wrapper">
                            <div class="swiper-slide border-radius">
                                <img src="assets/images/testi/ss/s-1.png" alt="" class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="assets/images/testi/ss/s-2.png" alt="" class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="assets/images/testi/ss/s-3.png" alt="" class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="assets/images/testi/ss/s-4.png" alt="" class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="assets/images/testi/ss/s-5.png" alt="" class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="assets/images/testi/ss/s-6.png" alt="" class="img-fluid">
                            </div>
                        </div>

                        <!-- navigation buttons -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <!-- end container -->
        </div>
    </section>
    <!-- end Galeri section -->



    <!-- team section -->
    
    <!-- end section -->



    <!-- cta section -->
    <section class="section cta" id="cta">
        <div class="bg-overlay-gradiant"></div>
        <!-- start container -->
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-6">
                    <div class="py-5">
                        <h1 class="display-4 text-white">Build Your ideal workspace today.</h1>
                        <p class="text-white-50 mt-3 f-18">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Iure assetsinctio vero facilis numquam sapiente! Eaque inventore eveniet repellendus quod
                            maiores nulla.</p>
                        <div class="d-flex mt-4 ">
                            <div class="app-store">
                                <a href=""><img src="assets/images/img-appstore.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="googleplay">
                                <a href=""><img src="assets/images/img-googleplay.png " alt="" class="img-fluid ms-3"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cta-phone-image">
                        <img src="assets/images/cta-bg.png" alt="" class=" img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end section -->


    <!-- contact section -->
    <section class="section contact features overflow-hidden" id="kontak">
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-5">
                        <h6 class="mb-0 fw-bold text-primary">Yayasan Darul Hufadz Jatinangor</h6>
                        <h2 class="f-40">Kontak Kami</h2>
                        <p class="text-muted">Berikut adalah kontak tiap-tiap tingkat pendidikan.</p>

                    </div>
                </div>
            </div>


            <div class="row justify-content center">
                <div class="col-lg-12">
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-konma-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-konma" type="button" role="tab" aria-controls="pills-konma"
                                aria-selected="true">Madrasah Aliyah</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-konmts-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-konmts" type="button" role="tab" aria-controls="pills-konmts"
                                aria-selected="false">Madrasah Tsanawiyah</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-konmi-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-konmi" type="button" role="tab" aria-controls="pills-konmi"
                                aria-selected="false">Madrasah Ibtidaiyah</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-konpp-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-konpp" type="button" role="tab" aria-controls="pills-konpp"
                                aria-selected="false">Pondok Pesantren</button>
                        </li>
                    </ul>
                    <div class="tab-content mt-5" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-konma" role="tabpanel"
                            aria-labelledby="pills-konma-tab">
                            <div class="row align-items-center"> 
                                <div class="col-md-3">
                                    <div class="d-flex align-items-center mt-4 mt-lg-0">
                                        <div class="flex-shrink-0">
                                            <i class="mdi mdi-email f-50 text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-1">Email</h5>
                                            <p class="f-14 mb-0 text-muted">masplusdarulhufadz@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex align-items-center mt-4 mt-lg-0">
                                        <div class="flex-shrink-0">
                                            <i class="mdi mdi-phone f-50 text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-1">Phone</h5>
                                            <p class="f-14 mb-0 text-muted">2276 Lynn Ogden Lane Beaumont</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="mdi mdi-facebook f-50 text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-1">Facebook</h5>
                                            <p class="f-14 mb-0 text-muted">2276 Lynn Ogden Lane Beaumont</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="mdi mdi-instagram f-50 text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-1">Instagram</h5>
                                            <p class="f-14 mb-0 text-muted">2276 Lynn Ogden Lane Beaumont</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-konmts" role="tabpanel"
                            aria-labelledby="pills-konmts-tab">
    
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <div class="d-flex align-items-center mt-4 mt-lg-0">
                                        <div class="flex-shrink-0">
                                            <i class="mdi mdi-email f-50 text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-1">Email</h5>
                                            <p class="f-14 mb-0 text-muted">mtssplusdarulhufadz@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex align-items-center mt-4 mt-lg-0">
                                        <div class="flex-shrink-0">
                                            <i class="mdi mdi-phone f-50 text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-1">Phone</h5>
                                            <p class="f-14 mb-0 text-muted">2276 Lynn Ogden Lane Beaumont</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="mdi mdi-facebook f-50 text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-1">Facebook</h5>
                                            <p class="f-14 mb-0 text-muted">2276 Lynn Ogden Lane Beaumont</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="mdi mdi-instagram f-50 text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-1">Instagram</h5>
                                            <p class="f-14 mb-0 text-muted">2276 Lynn Ogden Lane Beaumont</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-konmi" role="tabpanel"
                            aria-labelledby="pills-konmi-tab">
    
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <div class="d-flex align-items-center mt-4 mt-lg-0">
                                        <div class="flex-shrink-0">
                                            <i class="mdi mdi-email f-50 text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-1">Email</h5>
                                            <p class="f-14 mb-0 text-muted">misplusdarulhufadz@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex align-items-center mt-4 mt-lg-0">
                                        <div class="flex-shrink-0">
                                            <i class="mdi mdi-phone f-50 text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-1">Phone</h5>
                                            <p class="f-14 mb-0 text-muted">2276 Lynn Ogden Lane Beaumont</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="mdi mdi-facebook f-50 text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-1">Facebook</h5>
                                            <p class="f-14 mb-0 text-muted">2276 Lynn Ogden Lane Beaumont</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="mdi mdi-instagram f-50 text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-1">Instagram</h5>
                                            <p class="f-14 mb-0 text-muted">2276 Lynn Ogden Lane Beaumont</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-konpp" role="tabpanel"
                            aria-labelledby="pills-konpp-tab">
    
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <div class="d-flex align-items-center mt-4 mt-lg-0">
                                        <div class="flex-shrink-0">
                                            <i class="mdi mdi-email f-50 text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-1">Email</h5>
                                            <p class="f-14 mb-0 text-muted">ppdarulhufadz@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex align-items-center mt-4 mt-lg-0">
                                        <div class="flex-shrink-0">
                                            <i class="mdi mdi-phone f-50 text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-1">Phone</h5>
                                            <p class="f-14 mb-0 text-muted">2276 Lynn Ogden Lane Beaumont</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="mdi mdi-facebook f-50 text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-1">Facebook</h5>
                                            <p class="f-14 mb-0 text-muted">2276 Lynn Ogden Lane Beaumont</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="mdi mdi-instagram f-50 text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-1">Instagram</h5>
                                            <p class="f-14 mb-0 text-muted">2276 Lynn Ogden Lane Beaumont</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end section -->
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.temp-pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\SIYASDA\resources\views/pages/profil-mi.blade.php ENDPATH**/ ?>