

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
                <div class="col-lg-10">
                    <h1 class="text-light">Profil Yayasan</h1>
                </div>
                <div class="col-lg-2">
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
                    
                    <h1 class="display-6 fw-bold">Yayasan Darul Hufadz Jatinangor.</h1>
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

    <!-- Tingkat section -->
    <div class="section features" id="tingkat">
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-5">
                        <h6 class="mb-0 fw-bold text-primary">Yayasan Darul Hufadz Jatinangor</h6>
                        <h2 class="f-40">Tingkat Pendidikan</h2>
                        <p class="text-muted">Pilih tingkat pendidikan yang ada di Yayasan Darul Hufadz sesuai yang dibutuhkan.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-maspdh-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-maspdh" type="button" role="tab" aria-controls="pills-maspdh"
                                aria-selected="true">Madrasah Aliyah</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-mtsspdh-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-mtsspdh" type="button" role="tab" aria-controls="pills-mtsspdh"
                                aria-selected="false">Madrasah Tsanawiyah</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-mispdh-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-mispdh" type="button" role="tab" aria-controls="pills-mispdh"
                                aria-selected="false">Madrasah Ibtidaiyah</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-ponpes-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-ponpes" type="button" role="tab" aria-controls="pills-ponpes"
                                aria-selected="false">Pondok Pesantren</button>
                        </li>
                    </ul>
                    <div class="tab-content mt-5" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-maspdh" role="tabpanel"
                            aria-labelledby="pills-maspdh-tab">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <img src="assets/images/features/phone2.png" alt="" class="img-fluid">
                                </div>

                                <div class="col-lg-6">
                                    <h2 class="mb-4">Madrasah Aliyah</h2>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Fast Messaging</h6>
                                                        <p class="text-muted">Soluta velit sint, esse quis tempora
                                                            impedit corrupti in recusandae tenetur dignissimos
                                                            voluptates..</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">User Freindly</h6>
                                                        <p class="text-muted">Amet repudiandae illo quasi enim iusto
                                                            corporis ratione? Laudantium reprehenderit sint provident.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Minimal Interface</h6>
                                                        <p class="text-muted">Repellat ad in autem, odio quos ex eum
                                                            recusandae cupiditate assumenda nihil incidunt dolorem qui
                                                            soluta.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Notification</h6>
                                                        <p class="text-muted">Ipsam nisi quam velit maxime corrupti ut
                                                            quos, ad eum laudantium voluptatibus, facilis numquam
                                                            repellendus.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-mtsspdh" role="tabpanel"
                            aria-labelledby="pills-mtsspdh-tab">

                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <img src="assets/images/features/phone2.png" alt="" class="img-fluid">
                                </div>

                                <div class="col-lg-6">
                                    <h2 class="mb-4">Madrasah Tsanawiyah</h2>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Fast Messaging</h6>
                                                        <p class="text-muted">Soluta velit sint, esse quis tempora
                                                            impedit corrupti in recusandae tenetur dignissimos
                                                            voluptates..</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">User Freindly</h6>
                                                        <p class="text-muted">Amet repudiandae illo quasi enim iusto
                                                            corporis ratione? Laudantium reprehenderit sint provident.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Minimal Interface</h6>
                                                        <p class="text-muted">Repellat ad in autem, odio quos ex eum
                                                            recusandae cupiditate assumenda nihil incidunt dolorem qui
                                                            soluta.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Notification</h6>
                                                        <p class="text-muted">Ipsam nisi quam velit maxime corrupti ut
                                                            quos, ad eum laudantium voluptatibus, facilis numquam
                                                            repellendus.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-mispdh" role="tabpanel"
                            aria-labelledby="pills-mispdh-tab">

                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <img src="assets/images/features/phone2.png" alt="" class="img-fluid">
                                </div>

                                <div class="col-lg-6">
                                    <h2 class="mb-4">Madrasah Ibtidaiyah</h2>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Fast Messaging</h6>
                                                        <p class="text-muted">Soluta velit sint, esse quis tempora
                                                            impedit corrupti in recusandae tenetur dignissimos
                                                            voluptates..</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">User Freindly</h6>
                                                        <p class="text-muted">Amet repudiandae illo quasi enim iusto
                                                            corporis ratione? Laudantium reprehenderit sint provident.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Minimal Interface</h6>
                                                        <p class="text-muted">Repellat ad in autem, odio quos ex eum
                                                            recusandae cupiditate assumenda nihil incidunt dolorem qui
                                                            soluta.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Notification</h6>
                                                        <p class="text-muted">Ipsam nisi quam velit maxime corrupti ut
                                                            quos, ad eum laudantium voluptatibus, facilis numquam
                                                            repellendus.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-ponpes" role="tabpanel"
                            aria-labelledby="pills-ponpes-tab">

                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <img src="assets/images/features/phone2.png" alt="" class="img-fluid">
                                </div>

                                <div class="col-lg-6">
                                    <h2 class="mb-4">Pondok Pesantren</h2>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Fast Messaging</h6>
                                                        <p class="text-muted">Soluta velit sint, esse quis tempora
                                                            impedit corrupti in recusandae tenetur dignissimos
                                                            voluptates..</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">User Freindly</h6>
                                                        <p class="text-muted">Amet repudiandae illo quasi enim iusto
                                                            corporis ratione? Laudantium reprehenderit sint provident.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Minimal Interface</h6>
                                                        <p class="text-muted">Repellat ad in autem, odio quos ex eum
                                                            recusandae cupiditate assumenda nihil incidunt dolorem qui
                                                            soluta.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Notification</h6>
                                                        <p class="text-muted">Ipsam nisi quam velit maxime corrupti ut
                                                            quos, ad eum laudantium voluptatibus, facilis numquam
                                                            repellendus.</p>
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
    <!-- end Tingkat section -->



    <!-- start testimonial -->
    
    <!-- end testimonial -->

    <!-- pricing section -->
    
    <!-- end pricing -->

    <!-- Informasi section -->
    <section class="section bg-light testimonial" id="informasi">
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-5">
                        <h6 class="mb-0 fw-bold text-primary">Yayasan Darul Hufadz Jatinangor</h6>
                        <h2 class="f-40">Daftar Informasi</h2>
                        <p class="text-muted">Menyajikan informasi seputar Yayasan Darul Hufadz Jatinangor.</p>

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
    <!-- end Informasi section -->

    <!-- Agenda section -->
    <section class="section pricing" id="agenda">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-5">
                        <h6 class="mb-0 fw-bold text-primary">Yayasan Darul Hufadz Jatinangor</h6>
                        <h2 class="f-40">Daftar Agenda Kegiatan</h2>
                        <p class="text-muted">Menyajikan agenda kegiatan yang ada di Yayasan Darul Hufadz Jatinangor.</p>

                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="price-item shadow-sm overflow-hidden">
                        <div class="price-up-box active p-4">
                            <div class="badge bg-primary fw-normal f-14">Basic</div>
                            <div class="price-tag mt-2">
                                <h2 class="text-white mb-0 f-40"><sup class="f-22 fw-normal">$</sup>09<sup
                                        class="f-16 fw-normal"> /month</sup></h2>
                            </div>
                            <p class="text-white-50 mb-1">17 to 19 user</p>
                            <p class="text-white-50 mb-0">For most businesses that want to optimize web query.</p>
                        </div>
                        <div class="border border-3"></div>

                        <div class="price-down-box p-4">
                            <ul class="list-unstyled ">
                                <li><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>2 App and
                                    project</li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>400 Gb/s
                                    storange</li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Free
                                    coustom domain
                                </li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Chat
                                    Support
                                </li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>No
                                    transaction fees
                                </li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Unlimited
                                    Storage
                                </li>

                            </ul>
                            <a href="" class="btn btn-sm text-primary mt-3"><i class="mdi mdi-check-all me-2"></i>your
                                plane</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="price-item shadow-sm overflow-hidden mt-4 mt-lg-0">
                        <div class="topbar-header bg-primary py-2 text-center">
                            <h6 class="mb-0 text-white fw-normal">Recommended For You</h6>
                        </div>
                        <div class="price-up-box p-4">
                            <div class="badge bg-primary fw-normal f-14">Startup</div>
                            <div class="price-tag mt-2">
                                <h2 class="text-dark mb-0 f-40"><sup class="f-22 fw-normal">$</sup>19
                                    <sup class="f-16 fw-normal"> /month</sup>
                                </h2>
                            </div>
                            <p class="text-muted mb-1">20 to 40 user</p>
                            <p class="text-muted mb-0">For most businesses that want to optimize web query.</p>
                        </div>
                        <div class="border border-3"></div>

                        <div class="price-down-box p-4">
                            <ul class="list-unstyled ">
                                <li><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>15 App and
                                    project</li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>800 Gb/s
                                    storange</li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Free
                                    coustom domain
                                </li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Chat
                                    Support
                                </li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>No
                                    transaction fees
                                </li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Unlimited
                                    Storage
                                </li>
                            </ul>
                            <a href="" class="btn btn-sm btn-primary mt-3"><i class="mdi mdi-check-all me-2"></i>Buy
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="price-item shadow-sm overflow-hidden mt-4 mt-lg-0">
                        <div class="price-up-box p-4">
                            <div class="badge bg-primary fw-normal f-14">Enterprise</div>
                            <div class="price-tag mt-2">
                                <h2 class="text-dark mb-0 f-40"><sup class="f-22 fw-normal">$</sup>29<sup
                                        class="f-16 fw-normal"> /month</sup></h2>
                            </div>
                            <p class="text-muted mb-1">17 to 19 user</p>
                            <p class="text-muted mb-0">For most businesses that want to optimize web query.</p>
                        </div>
                        <div class="border border-3"></div>

                        <div class="price-down-box p-4">
                            <ul class="list-unstyled ">
                                <li><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Unlimited
                                    App and
                                    project</li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>1000 Gb/s
                                    storange</li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Free
                                    coustom domain
                                </li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Chat
                                    Support
                                </li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>No
                                    transaction fees
                                </li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Unlimited
                                    Storage
                                </li>
                            </ul>
                            <a href="" class="btn btn-sm btn-primary mt-3"><i class="mdi mdi-check-all me-2"></i>Buy
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center mt-2">
                    <a href="" class="btn btn-sm btn-primary mt-3">Lihat Semua Agenda</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end Agenda section -->



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
<?php echo $__env->make('layouts.temp-pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\SIYASDA\resources\views/pages/profil-yasda.blade.php ENDPATH**/ ?>