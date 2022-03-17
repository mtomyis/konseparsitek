<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>

<div class="top-shadow"></div>

<div id="divhidden1">
<section class="home-slider owl-carousel">

    <?php
    foreach ($carosel as $value) { ?>
        <div class="slider-item" style="background-image: url('http://ds.konseparsitek.com/images/<?= $value['gambar'] ?>');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-lg-7 text-center col-sm-12 element-animate">
                    <?php if ($value['video'] != "") { ?>
                        <div class="btn-play-wrap mx-auto">
                            <p class="mb-4"><a href="<?= $value['video'] ?>" data-fancybox data-ratio="2" class="btn-play"><span class="ion ion-ios-play"></span></a></p>
                        </div>
                    <?php } ?>
                        <h1 class="mb-4"><span><?= $value['judul'] ?></h1>
                        <p class="mb-5 w-75"><?= $value['keterangan'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- <td><img src="<?= 'http://ds.konseparsitek.com/images/' . $value['gambar']; ?>" alt="" width="50"></td> -->
    <?php } ?>

    <!-- <div class="slider-item" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
                <div class="col-lg-7 text-center col-sm-12 element-animate">
                    <div class="btn-play-wrap mx-auto">
                        <p class="mb-4"><a href="https://vimeo.com/59256790" data-fancybox data-ratio="2" class="btn-play"><span class="ion ion-ios-play"></span></a></p>
                    </div>
                    <h1 class="mb-4"><span>Concept Design</h1>
                    <p class="mb-5 w-75">Menangani proyek proyek pembangunan mulai dari perencanaan sampai selesai pembangunan</p>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-item" style="background-image: url('images/hero_2.jpg');">
        <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
                <div class="col-lg-7 text-center col-sm-12 element-animate">
                    <div class="btn-play-wrap mx-auto">
                        <p class="mb-4"><a href="https://vimeo.com/59256790" data-fancybox data-ratio="2" class="btn-play"><span class="ion ion-ios-play"></span></a></p>
                    </div>
                    <h1><span></span></h1>
                    <p class="mb-5 w-75">
                    </p>
                </div>
            </div>
        </div>
    </div> -->

</section>
</div>

<!-- END slider -->
</div>

<div id="divhidden2">
<section class="section bg-light">
    <div class="container">
        <div class="row">

            <?php
            foreach ($bidang as $value) { ?>

                <div class="col-md-6 col-lg-6 element-animate ">
                    <div class="media block-6 d-block text-center">
                        <div class="icon mb-3"><span class="ion-bookmark text-primary"></span></div>
                        <div class="media-body">
                            <h3 class="heading"><?= $value['judul'] ?></h3>
                            <p><?= $value['keterangan'] ?></p>
                        </div>
                    </div>
                </div>

            <?php } ?>

            <!-- <div class="col-md-6 col-lg-4 element-animate ">
                <div class="media block-6 d-block text-center">
                    <div class="icon mb-3"><span class="ion-heart text-primary"></span></div>
                    <div class="media-body">
                        <h3 class="heading"></h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 element-animate ">
                <div class="media block-6 d-block text-center">
                    <div class="icon mb-3"><span class="ion-leaf text-primary"></span></div>
                    <div class="media-body">
                        <h3 class="heading">Pengawasan</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
</div>
<!-- END section -->

<div id="aahilf" >
<section class="section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2>Proyek Terbaru</h2>
            </div>
        </div>
        <div class="row align-items-stretch">
            <div class="col-lg-4 order-lg-1">
                <div class="h-100">
                
                    <div class="frame h-100" id="lightgallery">
                        <a href="http://ds.konseparsitek.com/images/<?= $gambar_pekerjaan['gambar'] ?>">
                            <div class="feature-img-bg h-100" style="background-image: url('http://ds.konseparsitek.com/images/<?= $gambar_pekerjaan['gambar'] ?>');"></div>
                        </a>
                    </div>

                </div>
            </div>

            <div class="col-md-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1">

                <?php
                foreach ($pekerjaan as $key => $value) { ?>
                    <?php if ($key == 0) {
                        echo
                            '<div class="feature-1 d-md-flex">
                                <div class="align-self-center">
                                    <span class="ion ion-leaf display-4 text-primary"></span>
                                    <h3>' . $value['judul'] . '</h3>
                                    <p>' . $value['keterangan'] . '</p>
                                </div>
                            </div>';
                    } else {
                        echo "";
                    } ?>
                <?php } ?>

                <?php
                foreach ($pekerjaan as $key => $value) { ?>
                    <?php if ($key == 1) {
                        echo
                            '<div class="feature-1 d-md-flex">
                                <div class="align-self-center">
                                    <span class="ion ion-android-bulb display-4 text-primary"></span>
                                    <h3>' . $value['judul'] . '</h3>
                                    <p>' . $value['keterangan'] . '</p>
                                </div>
                            </div>';
                    } else {
                        echo "";
                    } ?>
                <?php } ?>

            </div>

            <div class="col-md-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3">

                <?php
                foreach ($pekerjaan as $key => $value) { ?>
                    <?php if ($key == 2) {
                        echo
                            '<div class="feature-1 d-md-flex">
                                <div class="align-self-center">
                                    <span class="ion ion-alert-circled display-4 text-primary"></span>
                                    <h3>' . $value['judul'] . '</h3>
                                    <p>' . $value['keterangan'] . '</p>
                                </div>
                            </div>';
                    } else {
                        echo "";
                    } ?>
                <?php } ?>

                <?php
                foreach ($pekerjaan as $key => $value) { ?>
                    <?php if ($key == 3) {
                        echo
                            '<div class="feature-1 d-md-flex">
                                <div class="align-self-center">
                                    <span class="ion ion-android-happy display-4 text-primary"></span>
                                    <h3>' . $value['judul'] . '</h3>
                                    <p>' . $value['keterangan'] . '</p>
                                </div>
                            </div>';
                    } else {
                        echo "";
                    } ?>
                <?php } ?>

            </div>

        </div>
    </div>
</section>
</div>

<div id="divhidden3">
<section class="section element-animate">
    <?php
    foreach ($ringkasan as $value) { ?>
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-7 order-md-2">
                    <div id="lightgallery2">
                        <a href="http://ds.konseparsitek.com/images/<?= $value['gambar'] ?>">
                            <div class="frame"><img src="<?= 'http://ds.konseparsitek.com/images/' . $value['gambar']; ?>" alt="Image" class="img-fluid"></div>
                        </a>
                    </div>
                </div>
                <div class="col-md-5 pr-md-5 mb-5">
                    <div class="block-41">
                        <h2 class="block-41-heading mb-5"><?= $value['judul'] ?></h2>
                        <div class="block-41-text">
                            <p><?= $value['keterangan'] ?></p>
                            <p><a href="<?= base_url('/about') ?>" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    <?php } ?>
</section>
</div>

<div id="divhidden4">
<section class="section border-t pb-0">
    <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
            <div class="col-md-8 text-center">
                <h2 class=" heading mb-4">Proyek Lainnya</h2>
                <p class="mb-5 lead"></p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row no-gutters">

            <?php
            foreach ($pekerjaan_lain as $value) { ?>
            <!-- <div style="position: relative; width: 300px; height: 300px; overflow: hidden;"> -->
            <!-- style="position: absolute; top: -9999px; left: -9999px; right: -9999px; bottom: -9999px; margin: auto;" -->
                <div class="col-md-4 element-animate" >
                    <a href="<?= base_url('/detail/'.$value['id']) ?>" class="link-thumbnail">
                        <h3><?= $value['judul']; ?></h3>
                        <div style="position: relative; width: 400px; height: 250px; overflow: hidden; margin: 0 auto;">
                            <img style="position: absolute; left: 50%; margin-left: -200px;" src="<?= 'http://ds.konseparsitek.com/images/' . $value['gambar']; ?>" alt="Image" class="img-fluid">
                        </div>
                    </a>
                </div>
            <!-- </div> -->
            <?php } ?>

            <!-- <div class="col-md-4 element-animate">
                <a href="project-single.html" class="link-thumbnail">
                    <h3>Tanks Project In California</h3>
                    <span class="ion-plus icon"></span>
                    <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4 element-animate">
                <a href="project-single.html" class="link-thumbnail">
                    <h3>Structural Design in New York</h3>
                    <span class="ion-plus icon"></span>
                    <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4 element-animate">
                <a href="project-single.html" class="link-thumbnail">
                    <h3>Stacks Design</h3>
                    <span class="ion-plus icon"></span>
                    <img src="images/img_4.jpg" alt="Image" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4 element-animate">
                <a href="project-single.html" class="link-thumbnail">
                    <h3>Intercate Custom</h3>
                    <span class="ion-plus icon"></span>
                    <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4 element-animate">
                <a href="project-single.html" class="link-thumbnail">
                    <h3>Banker Design</h3>
                    <span class="ion-plus icon"></span>
                    <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                </a>
            </div> -->

        </div>

    </div>
</section>
</div>
<!-- END section -->

<style type="text/css">
    #container {
    overflow: hidden;
    width: 100%;
    margin: 0 auto;
    cursor: pointer;
    margin-top:0px;
    }

    #imgs {
    display: block;
    padding: 0;
    width: 200%;
    }

    #imgs li {
    padding-right: 10px;
    display: inline-block;
    *display:inline;
    }

    #imgs img {
    width: 260px;
    /* heigth: 80px; */
    }
</style>

<div id="divhidden5">
<section class="section bg-light block-11">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center">
                <h5 class=" heading mb-1">Telah bekerja sama dengan beberapa instansi</h5>
            </div>
        </div>
        <div class="col-md-12 row">
        <div id="container">
        <ul id="imgs">
            <li><img src="http://konseparsitek.com/images/dinaspu.png" alt=""/></li>
            <li><img src="http://konseparsitek.com/images/dinaspertanian.png" alt="" /></li>
            <li><img src="http://konseparsitek.com/images/ristekdikti.png" alt=""/></li>
            <li><img src="http://konseparsitek.com/images/baluran.png" alt=""/></li>
            <!-- <li><div class="col-xs-12 col-md-3"><img src="http://konseparsitek.com/images/baluran.png" alt=""/></div></li>
            <li><div class="col-xs-12 col-md-3"><img src="http://konseparsitek.com/images/baluran.png" alt=""/></div></li>
            <li><div class="col-xs-12 col-md-3"><img src="http://konseparsitek.com/images/baluran.png" alt=""/></div></li> -->
        </ul>
        </div>  
            <!-- <div class="col-xs-12 col-md-3">
                <img src="http://konseparsitek.com/images/dinaspu.png" alt="Image" class="img-fluid">
            </div>
            <div class="col-xs-12 col-md-3">
                <img src="http://konseparsitek.com/images/dinaspertanian.png" alt="Image" class="img-fluid">
            </div>
            <div class="col-xs-12 col-md-3">
                <img src="http://konseparsitek.com/images/ristekdikti.png" alt="Image" class="img-fluid">
            </div>
            <div class="col-xs-12 col-md-3">
                <img src="http://konseparsitek.com/images/baluran.png" alt="Image" class="img-fluid">
            </div> -->
        </div>
    </div>
    </div>
    <!-- END .block-4 -->
</section>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">    
    $(document).ready(function() {

        // document.getElementById('aahilf').style.display = 'none';
        // alert("sdfsa");

        $("#lightgallery").lightGallery({
            thumbnail:true,
            animateThumb: false,
            showThumbByDefault: false
        });
        $("#lightgallery2").lightGallery({
            thumbnail:true,
            animateThumb: false,
            showThumbByDefault: false
        });
    });
</script>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script> 
<script type="text/javascript" src="/assets/ImageScroll.js"></script> 
<script type="text/javascript">

  $('#imgs').imageScroll({
    orientation:"left",
    speed:1000,
    interval:4000,
    hoverPause:true,
    callback:function(){
      var ordinal = $(this).find("img").first().attr("src");
      <!-- console.log(ordinal); -->
      $(this).next("span").text("CallbackDisplay: hidden "+ordinal+"!");
    }
  });

  </script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?= $this->endSection() ?>

