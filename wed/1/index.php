<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="format-detection" content="telephone=yes">

    <meta name="title" content="SARAH &amp; NURJAMAN - nu-sa.my.id">
    <meta name="description" content="Dear, You're invited to our wedding ceremony. - SARAH &amp; NURJAMAN Wedding - Sunday, December 18th 2022">

    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="nu-sa.my.id">
    <meta property="og:url" content="index.html" />
    <meta property="og:title" content="SARAH &amp; NURJAMAN - nu-sa.my.id" />
    <meta property="og:description" content="Dear, You're invited to our wedding ceremony. - SARAH &amp; NURJAMAN Wedding - Sunday, December 18th 2022" />
    <meta property="og:image" content="../assets/media/public/70/9789/cover/thumb_md_55402_1646188196_720_720.jpg" />
    <meta property="og:locale" content="in_ID">

    <meta property="twitter:card" content="../assets/media/public/70/9789/cover/thumb_md_55402_1646188196_720_720.jpg">
    <meta property="twitter:url" content="index.html">
    <meta property="twitter:title" content="SARAH &amp; NURJAMAN - nu-sa.my.id">
    <meta property="twitter:description" content="Dear, You're invited to our wedding ceremony. - SARAH &amp; NURJAMAN Wedding - Sunday, December 18th 2022">
    <meta property="twitter:image" content="../assets/media/public/70/9789/cover/thumb_md_55402_1646188196_720_720.jpg">

    <script type="125b896156da7f40fe37751d-text/javascript">
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-W36JSMK')
    </script>

    <script src="../assets/src/jquery.js" type="125b896156da7f40fe37751d-text/javascript"></script>
    <title>SARAH &amp; NURJAMAN</title>
    <link rel="icon" href="../assets/media/kat/icon_128_128.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/plugin/selectize/dist/css/selectize.default.css">
    <link rel="stylesheet" href="../assets/plugin/flexbin/flexbin.css" media="all">
    <link rel="stylesheet" href="../assets/plugin/aos/dist/aos.css">
    <link rel="stylesheet" href="../assets/plugin/lightgallery/dist/css/lightgallery.css">
    <link rel="stylesheet" href="../assets/plugin/fontawesome/css/all.css">
    <link rel="stylesheet" href="../assets/plugin/slick/slick.css">
    <link rel="stylesheet" href="../assets/plugin/modal-video/css/modal-video.min.css">
    <link rel="stylesheet" href="../assets/src/universal039d.css?1666284645">
    <link rel="stylesheet" href="../assets/src/template/global039d.css?1666284645">
    <link rel="stylesheet" href="../assets/src/template/exclusive-10039d.css?1666284645">


    <?php
    require_once('koneksi.php');
    ?>


</head>

<body class="  insan putih ">

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W36JSMK" height="0" width="0"></iframe></noscript>


    <section class="kat-page__side-to-side">

        <section class="primary-pane">
            <div class="inner">
                <div class="details">
                    <h1 data-aos="zoom-out" data-aos-duration="1200">WE GOT MARRIED</h1>
                </div>
                <div class="highlight" data-aos="zoom-out" data-aos-duration="1000">
                    <div class="preview-container cover-show" id="cover-pane">

                    </div>
                </div>
            </div>
        </section>

        <section class="secondary-pane">

            <section class="top-cover">
                <div class="inner">
                    <div class="details">
                        <p data-aos="zoom-out" data-aos-duration="1200">Hi, <?= $_GET['to']; ?></p>
                        <h1 data-aos="zoom-out" data-aos-duration="1200">WE GOT MARRIED</h1>
                        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <a href="javascript:;" onclick="if (!window.__cfRLUnblockHandlers) return false; startTheJourney()" class="link" id="startToExplore" data-cf-modified-125b896156da7f40fe37751d-="">LIHAT
                                UNDANGAN</a>
                        </div>
                    </div>
                    <div class="highlight" data-aos="zoom-out" data-aos-duration="1000">
                        <div class="preview-container cover-show" id="cover-opening">
                        </div>
                    </div>
                </div>
            </section>
            <?php
            $resepsi = mysqli_query($conn, "SELECT * FROM resepsi");
            while ($infoResepsi = mysqli_fetch_array($resepsi)) {
            ?>

                <section class="cover">
                    <div class="inner">
                        <div class="head" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="logo" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
                                <!-- <img src="../assets/media/public/70/9789/logo/thumb_lg_60076_1648716399_400_400.png" alt=""> -->
                            </div>
                            <p data-aos="fade-up" data-aos-duration="1000"></p>
                        </div>
                        <!-- <img src="../assets/media/public/70/9789/logo/thumb_lg_60076_1648716399_400_400.png" alt="">
</div><p data-aos="fade-up" data-aos-duration="1000">#duadjiwayangmenyatu</p> </div> -->
                        <div class="body highlight" data-aos="zoom-out" data-aos-duration="2000">
                            <div class="preview-container cover-show" id="cover-main"></div>
                        </div>
                        <div class="foot">
                            <p data-aos="fade-down" data-aos-duration="1000">The Wedding Of</p>
                            <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                <?php echo $infoResepsi['namaWanita']; ?> &amp; <?php echo $infoResepsi['namaPria']; ?></h1>
                            <p class="date" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">December
                                18<sup>th</sup>, 2022</p>
                        </div>
                    </div>
                </section>
            <?php
            }
            ?>

            <section class="couple">
                <div class="inner">
                    <div class="head">
                        <h1 data-aos="zoom-in" data-aos-duration="1000">The Wedding Of</h1>
                        <p data-aos="fade-up" data-aos-duration="1000">The pleasure of your company is requested at the
                            wedding of</p>
                        <div class="texture-outer top bottom" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">
                            <div class="texture-couple left"></div>
                        </div>
                        <div class="texture-outer top bottom" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="500">
                            <div class="texture-couple right"></div>
                        </div>
                    </div>
                    <div class="body   show-picture  ">
                        <div class="groom">
                            <div class="preview" data-aos="zoom-out" data-aos-duration="1000">
                                <div class="picture lightgallery couple-picture" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="false">
                                    <a href="../assets/media/public/70/9789/couple/groom.jpg" target="_blank">
                                        <img src="../assets/media/public/70/9789/couple/groom.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="details">
                                <h2 data-aos="fade-up" data-aos-duration="1000">Mochamad Nurjaman</h1>
                                    <p data-aos="fade-up" data-aos-duration="1000">Putra dari Bapak R. Dedi Dirja &amp;
                                        Ibu Omah Nuryamah</p>
                                    <a href="https://www.instagram.com/nurjaman96/" target="_blank">
                                        <p data-aos="fade-up" data-aos-duration="1000">
                                            @Nurjaman96</p>
                                    </a>
                            </div>
                        </div>
                        <div class="separator">
                            <div class="separator-ornament" data-aos="zoom-in" data-aos-duration="1500">&amp;</div>
                        </div>
                        <div class="bride">
                            <div class="preview" data-aos="zoom-out" data-aos-duration="1000">
                                <div class="picture lightgallery couple-picture" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="false">
                                    <a href="../assets/media/public/70/9789/couple/bride.jpg" target="_blank">
                                        <img src="../assets/media/public/70/9789/couple/bride.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="details">
                                <h2 data-aos="fade-up" data-aos-duration="1000">Sarah Yunitriani</h2>
                                <p data-aos="fade-up" data-aos-duration="1000">Putri dari Bapak Ate Suratman
                                    <i>(Alm)</i> &amp; Ibu Sukaesih
                                </p>
                                <a href="https://www.instagram.com/sarahyuni/" target="_blank">
                                    <p data-aos="fade-up" data-aos-duration="1000">
                                        @sarahyuni_</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="love-story">
                <div class="texture-outer top" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">
                    <div class="texture-round top left"></div>
                </div>
                <div class="texture-outer top" data-aos="fade-down" data-aos-duration="1200">
                    <div class="texture-round top center"></div>
                </div>
                <div class="texture-outer top" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="500">
                    <div class="texture-round top right"></div>
                </div>
                <div class="inner">
                    <div class="head">
                        <h1 data-aos="zoom-in" data-aos-duration="1000">OUR STORY</h1>
                    </div>
                    <div class="body">
                        <div class="stories">
                            <?php
                            $cerita = mysqli_query($conn, "SELECT * FROM cerita");
                            while ($infoCerita = mysqli_fetch_array($cerita)) {
                            ?>
                                <div class="story-outer">
                                    <div class="story" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="preview">
                                            <div class="picture lightgallery story-picture">
                                                <a href="https:\/\/nu-sa.my.id\/Admin\/fileUpload\/<?php echo $infoCerita['gambarCerita']; ?>">
                                                    <!-- Ukuran foto harus 1400-1400 -->
                                                    <img src="https:\/\/nu-sa.my.id\/Admin\/fileUpload\<?php echo $infoCerita['gambarCerita']; ?>" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <h2 data-aos="fade-up" data-aos-duration="1000"><?php echo $infoCerita['judulCerita']; ?></h2>
                                            <p data-aos="fade-up" data-aos-duration="1000">"<?php echo $infoCerita['isiCerita']; ?>"</p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                </div>
                <div class="texture-outer bottom" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">
                    <div class="texture-round bottom left"></div>
                </div>
                <div class="texture-outer bottom" data-aos="fade-up" data-aos-duration="1200">
                    <div class="texture-round bottom center"></div>
                </div>
                <div class="texture-outer bottom" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="500">
                    <div class="texture-round bottom right"></div>
                </div>
            </section>

            <section class="gallery">
                <div class="inner" data-aos="zoom-out" data-aos-duration="1000">
                    <h1 data-aos="fade-up" data-aos-duration="1000">GALERY PHOTO</h1>
                    <p data-aos="fade-up" data-aos-duration="1000">A memory that we will treasure forever</p>
                </div>

                <div class="body">
                    <div class="gallery__single-slider" data-aos="fade-left" data-aos-duration="1200">
                        <div class="slider-container" id="singleSliderContainer">
                            <?php
                            $galeri = mysqli_query($conn, "SELECT * FROM galery LIMIT 6");
                            while ($infoGaleri = mysqli_fetch_array($galeri)) {
                            ?>
                                <!-- Gambar menggunakan ukuran 1400x1400 -->
                                <div class="slider-item">
                                    <div class="preview singleSliderPicture lightgallery">
                                        <a href="https:\/\/nu-sa.my.id\/Admin/fileUpload/<?php echo $infoGaleri['namaFile']; ?>" class="anchor" target="_blank">
                                            <img src="https:\/\/nu-sa.my.id\/Admin\/fileUpload/<?php echo $infoGaleri['namaFile']; ?>" alt="https:\/\/nu-sa.my.id\/Admin\/fileUpload/<?php echo $infoGaleri['namaFile']; ?>" class="img">
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </section>

            <section class="video-gallery">
                <div class="inner">
                    <div class="title" data-aos="zoom-out" data-aos-duration="1000">
                        <h1 data-aos="zoom-out-up" data-aos-duration="1000">INVITATION VIDEO ONLINE</h1>
                        <!--GALERY VIDEO -->
                        <p data-aos="fade-up" data-aos-duration="1000">Loving you never was an option. Because it is necessity.</p><!-- Life is made of small moment like this-->
                    </div>
                    <div class="video-outer">
                        <div class="video">
                            <div class="preview" data-aos="zoom-in" data-aos-duration="1000">
                                <img src="../img.youtube.com/vi/s3qNL9Iz7HY/imgundangan600x450.jpg" alt="">
                                <button class="play-btn" data-video-id="s3qNL9Iz7HY"><i class="fas fa-play"></i></button>
                            </div>
                            <div class="title">
                                <h2 data-aos="fade-up" data-aos-duration="1000"></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="save-date">
                <div class="inner" data-aos="zoom-out" data-aos-duration="1200">
                    <div class="head">
                        <h1 data-aos="zoom-in" data-aos-duration="1000">Save The Date</h1>
                    </div>
                    <div class="body">
                        <div class="countdown">
                            <div data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                                <h2 class="count-day">0</h2>
                                <small>Days</small>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="100" data-aos-delay="300">
                                <h2 class="count-hour">0</h2>
                                <small>Hours</small>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="100" data-aos-delay="500">
                                <h2 class="count-minute">0</h2>
                                <small>Minutes</small>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="100" data-aos-delay="700">
                                <h2 class="count-second">0</h2>
                                <small>Seconds</small>
                            </div>
                        </div>
                    </div>
                    <p class="date" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">December
                        18<sup>th</sup>, 2022</p>
                    <div class="foot" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1100">
                        <a href="https://calendar.google.com/calendar/event?action=TEMPLATE&tmeid=MWRiYzhuMWs3azhjZ28zdjRtaHEwNmY3NmYgbW9jaGFtYWQubnVyamFtYW5AcGFjdGluZG8uY29t&tmsrc=mochamad.nurjaman%40pactindo.com" target="_blank" rel="nofollow" id="addToCalendar">Add to Calendar</a>
                    </div>
                </div>
                <div class="highlight" data-aos="zoom-out" data-aos-duration="2000">
                    <div class="preview-container cover-show" id="cover-save-date"></div>
                </div>
            </section>

            <section class="event-outer">
                <div class="inner">
                    <div class="head">
                        <h1 data-aos="zoom-out" data-aos-duration="1000">Hari Pernikahan</h1>
                        <p data-aos="fade-up" data-aos-duration="1000">Save the date</p>
                    </div>
                    <div class="body">
                        <div class="event">
                            <div class="title">
                                <div class="texture-outer top" data-aos="fade-right" data-aos-duration="1500">
                                    <div class="texture-line"></div>
                                </div>
                                <h1 data-aos="zoom-in" data-aos-duration="1000">12.18.22</h1>
                                <div class="texture-outer bottom" data-aos="fade-left" data-aos-duration="1500">
                                    <div class="texture-line"></div>
                                </div>
                            </div>
                            <div class="activities">
                                <div class="activity">
                                    <div class="title">
                                        <h1 data-aos="fade-up" data-aos-duration="1000">Akad Nikah</h1>
                                        <p data-aos="fade-up" data-aos-duration="1000">08:00 - 10:00</p>
                                    </div>
                                </div>
                                <div class="activity">
                                    <div class="title">
                                        <h1 data-aos="fade-up" data-aos-duration="1000">Resepsi</h1>
                                        <p data-aos="fade-up" data-aos-duration="1000">11:00 - 15:00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="details">
                                <p class="hall" data-aos="fade-up" data-aos-duration="1000">AULA - YPI Pondok Pesantren Sirnamiskin
                                </p>
                                <p data-aos="fade-up" data-aos-duration="1000">Jl. Raya Kopo No.429-433, Kb. Lega, Kec. Bojongloa Kidul, Kota Bandung, Jawa Barat 40235, Indonesia</p>
                                <!-- <p data-aos="fade-up" data-aos-duration="1000">Kota Bandung</p> -->
                                <div data-aos="fade-up" data-aos-duration="1000"><a href="https://goo.gl/maps/waaMqwVuW73NiSRF6" class="link" target="_blank">View
                                        Maps</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <!-- <section class="protocol protocol-03">
<div class="inner">
<div class="head">
<p data-aos="fade-down" data-aos-duration="1000">To all beloved invited guests, <br> are expected to obey</p>
<h1 data-aos="fade-up" data-aos-duration="1000">Health Protocol</h1>
</div>
<div class="body" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="0">
<div class="slider" id="protocol-slider" data-protocol="03">
<div>
<div class="content">
<div><div class="text-01">Reduce interaction</div></div>
<div><img src="../assets/media/template/protocol/03/mengurangi-interaksi.png" alt="" class="img-01"></div>
</div>
</div>
<div>
<div class="content">
<div><div class="text-01">Use hand sanitizer</div></div>
<div><img src="../assets/media/template/protocol/03/memakai-handsanitizer.png" alt="" class="img-01"></div>
</div>
</div>
<div>
<div class="content">
<div><div class="text-01">Avoiding the crowd</div></div>
<div><img src="../assets/media/template/protocol/03/menghindari-kerumunan.png" alt="" class="img-01"></div>
</div>
</div>
<div>
<div class="content">
<div><div class="text-01">Wearing a mask</div></div>
<div><img src="../assets/media/template/protocol/03/memakai-masker.png" alt="" class="img-01"></div>
</div>
</div>
<div>
<div class="content">
<div><div class="text-01">Social distancing</div></div>
<div><img src="../assets/media/template/protocol/03/menjaga-jarak.png" alt="" class="img-01"></div>
</div>
</div>
</div>
<div class="slider_dots" id="protocol-dots">
<div class="slider_navigator"></div>
<div class="slider_navigator"></div>
<div class="slider_navigator"></div>
<div class="slider_navigator"></div>
<div class="slider_navigator"></div>
</div>
</div>
</div>
</section> -->

            <!-- <section class="live-streaming">
<div class="inner">
<div class="head">
<h1 data-aos="zoom-in" data-aos-duration="1000">Live Streaming</h1>
</div>
<div class="body">
<div class="streaming-info"><div>
<div class="preview  wide  youtube " data-aos="fade-up" data-aos-duration="1000">
<img src="../img.youtube.com/vi/OObOQ2GElhA/hqdefault.jpg" alt="">
<button class="play-btn" data-video-id="OObOQ2GElhA"><i class="fas fa-play"></i></button>
</div>
</div></div>
</div>
</div>
</section> -->

            <section class="ig-filter-wrap">
                <div class="ig-filter">
                    <div class="ig-filter-head">
                        <h2 class="ig-filter-title" data-aos="fade-up" data-aos-duration="1200">Instagram <br> Wedding
                            Filter</h2>
                        <p class="ig-filter-caption" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                            Capture your moment while attending our wedding by using the Instagram filter below.</p>
                    </div>
                    <div class="ig-filter-body">
                        <div class="ig-filter-img-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                            <img class="ig-filter-img" src="../assets/media/public/70/9789/filter/thumb_lg_107405_1600_1600.jpg" alt="Instagram Filter Preview">
                        </div>
                        <div class="ig-filter-link-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                            <a class="ig-filter-link" href="https://www.instagram.com/ar/946647482793534/" target="_blank">Use Filter</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="gift">
                <div class="gift-inner">
                    <div class="gift-title">
                        <h1 data-aos="zoom-in" data-aos-duration="1500">Amplop Digital</h1>
                        <p data-aos="fade-up" data-aos-duration="1000">
                            It's a big honor to see you at our wedding ceremony. If you want to give some of your
                            treasure, you can take a look at my account number. Thank you :)
                        </p>
                    </div>
                    <div class="gift-body">
                        <form action="#" method="POST" id="gift-form" class="gift-form" enctype="multipart/form-data" data-aos="fade-up" data-aos-duration="1500">
                            <div class="gift-details">
                                <div class="bank-detail">
                                    <div class="form-group">
                                        <label class="form-label center">Choose destination bank</label>
                                        <select name="choose_bank" class="form-control"></select>
                                    </div>
                                    <div class="saving-books">

                                        <div class="book" data-book="1151">
                                            <p>BANK BCA (014)</p>
                                            <p>
                                                Account Number :
                                                <span>
                                                    <strong><span class="account-number">1392805162</span></strong>
                                                    <i class="fas fa-copy copy-account" title="Copy number account"></i>
                                                </span>
                                            </p>
                                            <p>a/n Mochamad Nurjaman</p>
                                            <div class="preview">
                                                <div class="preview singleSliderPicture lightgallery">
                                                    <a href="https:\/\/nu-sa.my.id\/wed/assets/media/public/70/9789/book/MY_QR_PAY.png" class="anchor" target="_blank">
                                                        <img src="../assets/media/public/70/9789/book/QR_300_300.png" alt="https:\/\/nu-sa.my.id\/wed/assets/media/public/70/9789/book/QR_300_300.png" class="picture">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="book" data-book="1152">
                                            <p>BPRKS (688)</p>
                                            <p>
                                                Account Number :
                                                <span>
                                                    <strong><span class="account-number">3002562692</span></strong>
                                                    <i class="fas fa-copy copy-account" title="Copy number account"></i>
                                                </span>
                                            </p>
                                            <p>a/n Mochamad Nurjaman</p>
                                            <div class="preview">
                                                <div class="preview singleSliderPicture lightgallery">
                                                    <a href="https:\/\/nu-sa.my.id\/wed/assets/media/public/70/9789/book/MY_QR_PAY.png" class="anchor" target="_blank">
                                                        <img src="../assets/media/public/70/9789/book/QR_300_300.png" alt="https:\/\/nu-sa.my.id\/wed/assets/media/public/70/9789/book/QR_300_300.png" class="picture">
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="bio-detail">
                                    <div class="form-group">
                                        <label class="form-label center"> If you want to give some of your treasure, you can take scan my QRIS :)</label> 
                                        <!-- Fill the form below, pleas -->
                                    </div>
                                    <!-- <div class="form-group">
                                        <label class="form-label">Name :</label>
                                        <input class="form-control" type="text" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Account Owner Name :</label>
                                        <input class="form-control" type="text" name="account_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Message :</label>
                                        <textarea class="form-control" name="message" rows="1" required style="min-height: 50px; max-height: 150px;"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Amount :</label>
                                        <input type="number" name="inserted_nominal" class="form-control">
                                        <input type="radio" name="nominal" value="0" checked style="display: none;">
                                    </div>
                                    <input type="hidden" name="status" value="wedding_gift">
                                    <input type="hidden" name="guest" value="">
                                </div>
                                <button type="button" class="gift-next">Next <i class="fas fa-chevron-right"></i></button> -->
                            </div>

                            <!-- <div class="gift-picture">
                                <div class="picture-detail">
                                    <button type="button" class="gift-back"><i class="fas fa-arrow-left"></i>
                                        Back</button>
                                    <div class="head">
                                        <h2>Upload proof of transfer</h2>
                                        <p>Screen Shoot / Photo Slip Transfer</p>
                                    </div>
                                    <div class="body">
                                        <div data-upload="gift-picture">
                                            <img src="#" alt="" data-image="uploaded-gift">
                                            <i class="fas fa-plus"></i>
                                        </div>
                                        <input type="file" name="picture" style="display: none;">
                                    </div>
                                </div>
                                <button type="submit" class="gift-submit">Confirm</button>
                            </div> -->
                        </form>
                        <?php
                        // if (isset($_POST['submit'])) {
                        //     $name = $_POST['name'];
                        //     $account_name = $_POST['account_name'];
                        //     $message = $_POST['message'];
                        //     $inserted_nominal = $_POST['inserted_nominal'];
                        //     $status = $_POST['status'];
                        //     $guest = $_POST['guest'];
                        //     $picture = $_POST['picture'];
                        //     mysqli_query($conn, "INSERT INTO transfer VALUES ('','$name','$account_name','$message','$inserted_nominal','$status','$guest','$picture')");
                        // }
                        ?>
                    </div>
                </div>
            </section>

            <section class="comment-outer">
                <div class="comment-inner">
                    <div class="head">
                        <h1 data-aos="fade-up" data-aos-duration="1000">UCAPAN &amp; HARAPAN</h1>
                    </div>
                    <form action="#" class="comment-form" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name" data-aos="fade-down" data-aos-duration="1000" value="<?= $_GET['to']; ?>">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="comment" rows="1" placeholder="Give your wish..." style="max-height: 350px;" data-aos="fade-down" data-aos-duration="1000"></textarea>
                        </div>
                        <button data-aos="fade-up" data-aos-duration="1000" class="send-comment" name='kirim'>Send</button>
                        <!-- <button class="btn" name="kirim"><b>Kirim</b></button> -->
                    </form>
                    <?php
                    if (isset($_POST['kirim'])) {
                        $namaPengirim = $_POST['name'];
                        $isi = $_POST['comment'];
                        mysqli_query($conn, "INSERT INTO pesan VALUES ('','$namaPengirim','$isi')");
                    }

                    ?>

                    <div class="comments">

                    </div>
                    <div class="foot" data-aos="fade-up" data-aos-duration="1000">
                    </div>
                </div>
            </section>

            <section class="footnote">
                <div class="inner">

                    <div class="quote">
                        <p data-aos="fade-up" data-aos-duration="1000">"Dan di antara tanda-tanda kekuasaan-Nya ialah
                            Dia menciptakan<br />
                            untukmu isteri-isteri dari jenismu sendiri, supaya kamu<br />
                            cenderung dan merasa tenteram kepadanya,<br />
                            dan dijadikan-Nya diantaramu rasa kasih dan sayang.<br />
                            Sesungguhnya pada yang demikian itu benar-benar<br />
                            terdapat tanda-tanda bagi kaum yang berfikir."<br />
                            <br />
                            (QS Ar-Rum 21)
                        </p>
                    </div>
                    <div class="details">
                        <p data-aos="fade-down" data-aos-duration="1000">#duadjiwayangmenyatu</p>
                        <h1 data-aos="zoom-in" data-aos-duration="1500">
                            <?php
                            $resepsi = mysqli_query($conn, "SELECT * FROM resepsi");
                            while ($infoResepsi = mysqli_fetch_array($resepsi)) {
                                echo $infoResepsi['namaWanita']; ?> &amp; <?php echo $infoResepsi['namaPria'];
                                                                        } ?></h1>
                        <p class="date" data-aos="fade-up" data-aos-duration="1000">December 18<sup>th</sup>, 2022</p>
                    </div>
                </div>
                <div class="highlight" data-aos="zoom-out" data-aos-duration="2000">
                    <div class="preview-container cover-show" id="cover-footer"></div>
                </div>
            </section>

            <section class="footer">
                <div class="footer-inner ">
                    <p>Powered by</p>
                    <a href="https://nu-sa.my.id/" target="_blank">
                    </a>
                </div>
            </section>
        </section>
    </section>

    <section class="music-outer" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
        <div class="music-box auto" id="music-box"></div>
    </section>
    <script type="125b896156da7f40fe37751d-text/javascript">
        // Music
        window.MUSIC = {
            'url': "https:\/\/nu-sa.my.id\/assets\/sound\/nusa.mp3",
            'box': '#music-box'
        };
        // Event
        window.EVENT = 1672459200;
        // Books
        window.BOOKS = [{
            "id": 1151,
            "title": "BANK BCA",
            "credential": "1392805162"
        }, {
            "id": 1152,
            "title": "BPRKS",
            "credential": "3002562692"
        }];
        // RSVP
        window.RSVP = {
            'button_text': {
                'attend': "Will Attend",
                'not_attend': "Unable To Attend"
            }
        };
        // Covers
        window.COVERS = [{
                'position': 'MAIN',
                'details': {
                    'desktop': "<div class=\"picture desktop\">\n                                    <img src=\"https:\/\/nu-sa.my.id\/wed\/assets\/media\/public\/70\/9789\/cover\/m_foto_kanan_1600.jpg\" alt=\"\">\n                                <\/div>",
                    'mobile': "<div class=\"picture mobile\">\n                                    <img src=\"https:\/\/nu-sa.my.id\/wed\/assets\/media\/public\/70\/9789\/cover\/m_foto_kanan_1600.jpg\" alt=\"\">\n                                <\/div>"
                },
                'element': '#cover-main'
            },
            {
                'position': 'OPENING',
                'details': {
                    'desktop': "<div class=\"picture desktop\">\n                                    <img src=\"https:\/\/nu-sa.my.id\/wed\/assets\/media\/public\/70\/9789\/cover\/open_page.jpg\" alt=\"\" class=\"picture\">\n                                <\/div>",
                    'mobile': "<div class=\"picture mobile\">\n                                    <img src=\"https:\/\/nu-sa.my.id\/wed\/assets\/media\/public\/70\/9789\/cover\/open_page.jpg\" alt=\"\" class=\"picture\">\n                                <\/div>"
                },
                'element': '#cover-opening'
            },
            {
                'position': 'PANE',
                'details': {
                    'desktop': "<div class=\"picture desktop\">\n                                <img src=\"https:\/\/nu-sa.my.id\/wed\/assets\/media\/public\/70\/9789\/cover\/open_page.jpg\" alt=\"\" class=\"picture\">\n                            <\/div>",
                    'mobile': "<div class=\"picture mobile\">\n                                  <img src=\"https:\/\/nu-sa.my.id\/wed\/assets\/media\/public\/70\/9789\/cover\/open_page.jpg\" alt=\"\" class=\"picture\">\n                            <\/div>"
                },
                'element': '#cover-pane'
            },
            {
                'position': 'SAVE DATE',
                'details': {
                    'desktop': "<div class=\"picture desktop\">\n                <img src=\"https:\/\/nu-sa.my.id\/wed\/assets\/media\/public\/70\/9789\/cover\/thumb_lg_55392_1646186058_1600_1600.jpeg\" alt=\"\">\n            <\/div>",
                    'mobile': "<div class=\"picture mobile\">\n                <img src=\"https:\/\/nu-sa.my.id\/wed\/assets\/media\/public\/70\/9789\/cover\/thumb_lg_55402_1646188197_1600_1600.jpeg\" alt=\"\">\n            <\/div>"
                },
                'element': '#cover-save-date'
            },
            {
                'position': 'FOOTER',
                'details': {
                    'desktop': "<div class=\"picture desktop\">\n                <img src=\"https:\/\/nu-sa.my.id\/wed\/assets\/media\/public\/70\/9789\/cover\/thumb_lg_55392_1646186058_1600_1600.jpeg\" alt=\"\">\n            <\/div>",
                    'mobile': "<div class=\"picture mobile\">\n                <img src=\"https:\/\/nu-sa.my.id\/wed\/assets\/media\/public\/70\/9789\/cover\/thumb_lg_55402_1646188197_1600_1600.jpeg\" alt=\"\">\n            <\/div>"
                },
                'element': '#cover-footer'
            }
        ];
        // Protocol
        window.PROTOCOL = {
            'slider': '#protocol-slider',
            'dots': '#protocol-dots'
        };
        // Gallery Single Slider
        window.GALLERY_SINGLE_SLIDER = true

        $(document).ready(function() {
            var documentHeight = $('.top-cover').css('height');
            $('body').css('--body-height', documentHeight);

            gallerySingleSlider();
        });

        $('.story-picture').each(function(i, story) {
            var width = $(this).width();
            var height = width + (width / 3);

            $(story).css('--width', width + 'px');
            $(story).css('--height', height + 'px');
        });

        $('.couple-picture').each(function(i, couple) {
            var width = $(this).width();
            var borderRadius = (width * 40) / 100;

            $(couple).css('--border-radius', borderRadius + 'px');
        });
    </script>

    <div class="alert" id="alert">
        <div class="alert-text"></div>
        <div class="alert-close fas fa-times"></div>
    </div>

    <div id="modal" class="modal modal-center"></div>

    <script src="../assets/plugin/aos/dist/aos.js" type="125b896156da7f40fe37751d-text/javascript"></script>
    <script src="../assets/plugin/slick/slick.min.js" type="125b896156da7f40fe37751d-text/javascript"></script>
    <script src="../assets/plugin/selectize/dist/js/standalone/selectize.min.js" type="125b896156da7f40fe37751d-text/javascript"></script>
    <script src="../assets/plugin/modal-video/js/jquery-modal-video.min.js" type="125b896156da7f40fe37751d-text/javascript"></script>
    <script src="../assets/plugin/lightgallery/dist/js/lightgallery.min.js" type="125b896156da7f40fe37751d-text/javascript"></script>
    <script src="../assets/src/universal039d.js?1666284645" type="125b896156da7f40fe37751d-text/javascript"></script>
    <script src="../assets/src/template/template039d.js?1666284645" type="125b896156da7f40fe37751d-text/javascript">
    </script>
    <script src="cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="125b896156da7f40fe37751d-|49" defer=""></script>
</body>

</html>