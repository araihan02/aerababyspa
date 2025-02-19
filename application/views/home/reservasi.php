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

        <!-- Page Title -->
        <div class="page-title">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Reservasi</h1>
                            <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio
                                sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus
                                dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="<?= base_url('Home') ?>">Home</a></li>
                        <li class="current">Reservasi</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Service Details Section -->
        <section id="service-details" class="service-details section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <form action="" method="post" data-aos="fade" data-aos-delay="100">
                            <?php if (validation_errors()) : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <p style="padding:0;margin:0;"><?= validation_errors(); ?></p>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            <?php endif; ?>
                            <div class="row gy-4">

                                <div class="col-md-8">
                                    <label for="">Your Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Input yor name"
                                        required="" value="<?= set_value('name'); ?>">
                                </div>

                                <div class="col-md-8">
                                    <label for="">No Handphone</label>
                                    <input type="text" class="form-control" name="handphone" placeholder="08xxxxxxxxxx"
                                        required="" value="<?= set_value('handphone'); ?>">
                                </div>

                                <div class="col-md-8 ">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="example@domain.com" required="" value="<?= set_value('email'); ?>">
                                </div>

                                <div class="col-md-8 ">
                                    <label for="">Treatment</label>
                                    <select class="form-control" name="product" id="product" required="">
                                        <option value="">Pilih Treatment..</option>
                                        <?php foreach ($product as $pd) { ?>
                                            <option value="<?= $pd->productcode ?>" <?php if (set_value('product')) { ?>
                                                <?= $pd->productcode == set_value('product') ? 'selected' : '' ?>
                                                <?php } else { ?> <?= $pd->productcode == $choose ? 'selected' : '' ?>
                                                <?php } ?>>
                                                <?= $pd->name . ' - Rp.' . number_format($pd->price, 0) ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-8 ">
                                    <label for="">Date</label>
                                    <input type="date" class="form-control" name="date" placeholder="Pilih Tanggal"
                                        required="" value="<?= set_value('date'); ?>">
                                </div>

                                <div class="col-md-8 text-center">
                                    <!-- <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div> -->

                                    <button type="submit" class="btn btn-primary bg-red">Submit</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Service Details Section -->

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