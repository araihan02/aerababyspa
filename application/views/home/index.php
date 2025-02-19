<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Aera Baby Spa</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="<?php echo base_url(); ?>assets/template/Impact/assets/img/aeralogo.png" rel="icon">
    <link href="<?php echo base_url(); ?>assets/template/Impact/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url(); ?>assets/template/Impact/assets/vendor/bootstrap/css/bootstrap.min.css"
        rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/template/Impact/assets/vendor/bootstrap-icons/bootstrap-icons.css"
        rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/template/Impact/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/template/Impact/assets/vendor/glightbox/css/glightbox.min.css"
        rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/template/Impact/assets/vendor/swiper/swiper-bundle.min.css"
        rel="stylesheet">

    <!-- Main CSS File -->
    <link href="<?php echo base_url(); ?>assets/template/Impact/assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Impact
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        .description {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            /* number of lines to show */
            line-clamp: 3;
            -webkit-box-orient: vertical;
        }

        .bg-red {
            background-color: #1D3461;
            border: none;
        }

        .bg-red:hover {
            opacity: 0.7;
        }
    </style>
</head>

<body class="index-page">

    <header id="header" class="header fixed-top">

        <!-- <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a
                            href="mailto:contact@example.com">contact@example.com</a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div> -->
        <!-- End Top Bar -->

        <div class="branding d-flex align-items-cente">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="<?= base_url(); ?>" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="<?php echo base_url(); ?>assets/template/Impact/assets/img/aeralogo.png" alt="">
                    <h1 class="sitename">Aera</h1>
                    <span>.</span>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="<?= base_url('Home'); ?>" class="active">Home<br></a></li>
                        <li><a href="<?= base_url('Home'); ?>#about">About</a></li>
                        <li><a href="<?= base_url('Home'); ?>#services">Services & Pricing</a></li>
                        <li><a href="<?= base_url('Home'); ?>#team">Team</a></li>
                        <li><a href="<?= base_url('Home'); ?>#contact">Contact</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </div>

        </div>

    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section accent-background">

            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-5 justify-content-between">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h2><span>Welcome to </span><br><span class="accent">Aera Baby Spa</span></h2>
                        <p>Rumah perawatan bayi yang berkomitmen untuk memberikan perawatan terbaik bagi bayi Anda,
                            sehingga mereka dapat tumbuh sehat dan bahagia.</p>
                        <div class="d-flex">
                            <a href="<?= base_url('Home/reservasi') . '?choose=' ?>" class="btn-get-started">Reservasi
                                Sekarang</a>
                            <!-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                class="glightbox btn-watch-video d-flex align-items-center"><i
                                    class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2">
                        <img src="<?php echo base_url(); ?>assets/template/Impact/assets/img/vpict1.png"
                            class="img-fluid" alt="">
                    </div>
                </div>
            </div>

            <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
                <!-- <div class="container position-relative">
                    <div class="row gy-4 mt-5">

                        <div class="col-xl-3 col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-easel"></i></div>
                                <h4 class="title"><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-gem"></i></div>
                                <h4 class="title"><a href="" class="stretched-link">Sed ut perspiciatis</a></h4>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-geo-alt"></i></div>
                                <h4 class="title"><a href="" class="stretched-link">Magni Dolores</a></h4>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-command"></i></div>
                                <h4 class="title"><a href="" class="stretched-link">Nemo Enim</a></h4>
                            </div>
                        </div>

                    </div>
                </div> -->
            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About Us<br></h2>
                <p>Percayakan perawatan bayi Anda pada para ahli. Aera Baby Spa memiliki tim perawat profesional yang
                    terlatih dan bersertifikat. Kami menyediakan berbagai layanan perawatan bayi, mulai dari memandikan,
                    mengganti popok, hingga memberikan pijatan bayi. Dengan pendekatan yang holistik, kami memastikan
                    bayi Anda tumbuh sehat dan bahagia.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3>Aera Baby Spa: Tumbuh kembang optimal untuk masa depan yang cerah.</h3>
                        <img src="<?php echo base_url(); ?>assets/template/Impact/assets/img/about.jpg"
                            class="img-fluid rounded-4 mb-4" alt="">
                        <p>Stimulasi tumbuh kembang bayi sejak dini. Selain memberikan perawatan dasar, Aera Baby Spa
                            juga menyediakan program stimulasi untuk merangsang perkembangan motorik, kognitif, dan
                            sosial emosional bayi. Kami percaya bahwa setiap anak memiliki potensi yang luar biasa, dan
                            kami berkomitmen untuk membantu mereka mencapai potensi tersebut.</p>

                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                                Layanan Perawatan Bayi.
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Pijat Bayi: Pijat bayi
                                        bukan hanya sekadar relaksasi, tetapi juga memiliki banyak manfaat untuk tumbuh
                                        kembang si kecil. Perawat kami yang terlatih akan memberikan pijatan bayi yang
                                        lembut dan menenangkan, membantu meningkatkan sirkulasi darah, meredakan kolik,
                                        dan mempererat ikatan antara Anda dan bayi.</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Perawatan Bayi Harian: Kami
                                        menyediakan perawat berpengalaman yang akan menjaga bayi Anda dengan penuh kasih
                                        sayang dan perhatian. Layanan ini sangat cocok bagi ibu bekerja atau ibu yang
                                        membutuhkan waktu untuk diri sendiri.</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Babysitting: Butuh seseorang untuk
                                        menjaga bayi Anda saat Anda bepergian? Kami menyediakan jasa babysitting yang
                                        dapat diandalkan dan fleksibel.</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Stimulasi Dini: Kami menawarkan
                                        program stimulasi dini yang dirancang untuk merangsang perkembangan otak,
                                        motorik, dan sosial emosional bayi Anda.</span></li>
                            </ul>

                            <div class="position-relative mt-4">
                                <img src="<?php echo base_url(); ?>assets/template/Impact/assets/img/about-2.jpg"
                                    class="img-fluid rounded-4" alt="">
                                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                    class="glightbox pulsating-play-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Services and Pricing</h2>
                <p>Aera Baby Spa menyediakan banyak perawatan bayi</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">
                    <?php foreach ($product as $pd) { ?>
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item  position-relative" style="height:270px">
                                <!-- <div class="icon">
                                    <i class="bi bi-activity"></i>
                                </div> -->
                                <h3><?= $pd->name ?></h3>
                                <p class="description"><?= $pd->description ?></p>
                                <br>
                                <div class="price" style="display:flex;justify-content:space-between;align-items:center">
                                    <span style="font-weight:600;font-size:16px;">Rp.
                                        <?= number_format($pd->price, 0) ?></span>
                                    <a href="<?= base_url('Home/reservasi') . '?choose=' . $pd->productcode ?>"
                                        class="btn btn-primary bg-red">Reservasi</a>
                                </div>
                            </div>
                        </div><!-- End Service Item -->
                    <?php } ?>
                </div>

            </div>

        </section><!-- /Services Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Testimonials</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                        {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                                "delay": 5000
                            },
                            "slidesPerView": "auto",
                            "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                            },
                            "breakpoints": {
                                "320": {
                                    "slidesPerView": 1,
                                    "spaceBetween": 40
                                },
                                "1200": {
                                    "slidesPerView": 3,
                                    "spaceBetween": 10
                                }
                            }
                        }
                    </script>
                    <div class="swiper-wrapper">
                        <?php foreach ($testimoni as $data) { ?>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <h3><?= $data->namecustomer ?></h3>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span><?= $data->description ?></span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->
                        <?php } ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Testimonials Section -->

        <!-- Team Section -->
        <section id="team" class="team section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Team</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <img src="<?php echo base_url(); ?>assets/template/Impact/assets/img/team/team-4.jpg"
                                class="img-fluid" alt="">
                            <h4>Hafshah Qurotun Aini</h4>
                            <span>Bidan</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <img src="<?php echo base_url(); ?>assets/template/Impact/assets/img/team/team-2.jpg"
                                class="img-fluid" alt="">
                            <h4>Jamilah Zahra</h4>
                            <span>Admin</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section><!-- /Team Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gx-lg-0 gy-4 d-flex flex-column align-items-center justify-content-center">

                    <div class="col-lg-12">
                        <div class="info-container d-flex flex-column align-items-center justify-content-center">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Address</h3>
                                    <p>A108 Adam Street, New York, NY 535022</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Call Us</h3>
                                    <p>+1 5589 55488 55</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Email Us</h3>
                                    <p>info@example.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                                <i class="bi bi-clock flex-shrink-0"></i>
                                <div>
                                    <h3>Open Hours:</h3>
                                    <p>Mon-Sat: 11AM - 23PM</p>
                                </div>
                            </div><!-- End Info Item -->

                        </div>

                    </div>


                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer accent-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Aera</span>
                    </a>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                        valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="<?= base_url('Home'); ?>">Home</a></li>
                        <li><a href="<?= base_url('Home'); ?>#about">About us</a></li>
                        <li><a href="<?= base_url('Home'); ?>#services">Services</a></li>
                        <li><a href="<?= base_url('Home'); ?>#services">Price</a></li>
                        <li><a href="<?= base_url('Home'); ?>#team">Team</a></li>
                    </ul>
                </div>

                <!-- <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div> -->

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>A108 Adam Street</p>
                    <p>New York, NY 535022</p>
                    <p>United States</p>
                    <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                    <p><strong>Email:</strong> <span>info@example.com</span></p>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Aera</strong>
            </p>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url(); ?>assets/template/Impact/assets/vendor/bootstrap/js/bootstrap.bundle.min.js">
    </script>
    <script src="<?php echo base_url(); ?>assets/template/Impact/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/Impact/assets/vendor/aos/aos.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/Impact/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/Impact/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/Impact/assets/vendor/purecounter/purecounter_vanilla.js">
    </script>
    <script src="<?php echo base_url(); ?>assets/template/Impact/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js">
    </script>
    <script src="<?php echo base_url(); ?>assets/template/Impact/assets/vendor/isotope-layout/isotope.pkgd.min.js">
    </script>

    <!-- Main JS File -->
    <script src="<?php echo base_url(); ?>assets/template/Impact/assets/js/main.js"></script>

</body>

</html>