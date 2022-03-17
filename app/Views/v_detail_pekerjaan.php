
<?= $this->extend('layout/templatedetail') ?>

<?= $this->section('content'); ?>

<div class="top-shadow"></div>

<?php
foreach ($carosel as $value) { ?>

    <div class="inner-page">
        <div class="slider-item" style="background-image: url('http://ds.konseparsitek.com/images/<?= $value['gambar'] ?>');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
                        <h1 class="pt-5">Detail Proyek</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<!-- END slider -->
</div>

<section class="section border-t pb-0">
    <div class="card">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center element-animate">
                    <div class="col-lg-8 col-sm-12">
                        <!-- <div class="h-80">
                            <div class="frame h-80"> -->

                            <!-- <script type="text/javascript">
                            google_ad_client = "ca-pub-2783044520727903";
                            google_ad_slot = "2780937993";
                            google_ad_width = 728;
                            google_ad_height = 90;
                            </script>
                            <script type="text/javascript"
                            src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
                            </script>
                            <div id=full-gallery class=content-slideshow>
                                <div class=mibreit-imageElement style=opacity:0>
                                    <img src="http://ds.konseparsitek.com/mibreit-gallery/images/image-placeholder-transparent.png" data-src="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar'] ?>" width=1280 height=853 />
                                </div>
                                <div class=mibreit-imageElement style=opacity:0>
                                    <img src="http://ds.konseparsitek.com/mibreit-gallery/images/image-placeholder-transparent.png" data-title=Fantasia data-src="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar2'] ?>" width=1280 height=853 />
                                </div>
                                <div class=mibreit-imageElement>
                                    <img src="http://ds.konseparsitek.com/mibreit-gallery/images/image-placeholder-transparent.png" data-src="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar3'] ?>" width=1280 height=640 />
                                </div>
                            </div>
                            <div class=mibreit-thumbview>
                                <div class=mibreit-thumbElement> <img src="http://ds.konseparsitek.com/mibreit-gallery/images/image-placeholder-transparent.png" data-src="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar'] ?>" width=100 height=80 alt=thumbnail /> </div>
                                <div class=mibreit-thumbElement> <img src="http://ds.konseparsitek.com/mibreit-gallery/images/image-placeholder-transparent.png" data-src="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar2'] ?>" width=100 height=80 alt=thumbnail /> </div>
                                <div class=mibreit-thumbElement> <img src="http://ds.konseparsitek.com/mibreit-gallery/images/image-placeholder-transparent.png" data-src="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar3'] ?>" width=100 height=50 alt=thumbnail /> </div>
                            </div> -->
                            
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                              <div class="carousel-inner">

                                <div id="lightgallery1" class="carousel-item active">
                                <a href="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar'] ?>">
                                  <img src="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar'] ?>" class="d-block w-100" alt="...">
                                </a>
                                <a href="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar2'] ?>">
                                  <div style="display:none;"><img  src="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar2'] ?>" class="d-block w-100" alt="..."></div>
                                </a>
                                <a href="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar3'] ?>">
                                    <div style="display:none;"><img style="display:none;" src="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar3'] ?>" class="d-block w-100" alt="..."></div>
                                </a>
                                </div>

                                <div id="lightgallery2" class="carousel-item">
                                <a href="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar2'] ?>">
                                  <img src="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar2'] ?>" class="d-block w-100" alt="...">
                                </a>
                                <a href="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar3'] ?>">
                                  <div style="display:none;"><img  src="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar3'] ?>" class="d-block w-100" alt="..."></div>
                                </a>
                                <a href="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar'] ?>">
                                    <div style="display:none;"><img style="display:none;" src="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar'] ?>" class="d-block w-100" alt="..."></div>
                                </a>
                                </div>

                                <div id="lightgallery3" class="carousel-item">
                                <a href="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar3'] ?>">
                                  <img src="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar3'] ?>" class="d-block w-100" alt="...">
                                </a>
                                <a href="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar'] ?>">
                                  <div style="display:none;"><img  src="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar'] ?>" class="d-block w-100" alt="..."></div>
                                </a>
                                <a href="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar2'] ?>">
                                    <div style="display:none;"><img style="display:none;" src="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar2'] ?>" class="d-block w-100" alt="..."></div>
                                </a>
                                </div>

                                <!-- <div id="lightgallery2" class="carousel-item">
                                <a href="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar2'] ?>">
                                  <img src="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar2'] ?>" class="d-block w-100" alt="...">
                                </a>
                                <a href="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar'] ?>">
                                  <div style="display:none;"><img  src="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar'] ?>" class="d-block w-100" alt="..."></div>
                                </a>
                                <a href="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar3'] ?>">
                                    <div style="display:none;"><img style="display:none;" src="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar3'] ?>" class="d-block w-100" alt="..."></div>
                                </a>
                                </div> -->

                                <!-- <div id="lightgallery3" class="carousel-item">
                                <a>
                                  <img src="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar3'] ?>" class="d-block w-100" alt="...">
                                </a>
                                <a href="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar'] ?>">
                                  <div style="display:none;"><img  src="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar'] ?>" class="d-block w-100" alt="..."></div>
                                </a>
                                <a href="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar2'] ?>">
                                    <div style="display:none;"><img style="display:none;" src="http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar3'] ?>" class="d-block w-100" alt="..."></div>
                                </a>
                                </div> -->

                              </div>
                              <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                            
                        <!--<section class="home-slider owl-carousel">-->
                        <!--    <div class="slider-item" style="background-image: url('http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar'] ?>');"></div>-->
                        <!--    <div class="slider-item" style="background-image: url('http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar2'] ?>');"></div>-->
                        <!--    <div class="slider-item" style="background-image: url('http://ds.konseparsitek.com/images/<?= $pekerjaan['gambar3'] ?>');"></div>-->
                        <!--</section>-->
                    </div>
                    <!-- </div>
                    </div> -->
                    <div class="col-lg-4 col-sm-12">
                        <div class="project_details_content">
                            <h3><?= $pekerjaan['judul']; ?></h3>
                            <p><?= $pekerjaan['keterangan']; ?></p>
                        </div>
                        <div class="project_details_widget">
                            <div class="single_project_details_widget">
                                <span class="ti-time"></span>
                                <h5>Waktu Pelaksanaan</h5>
                                <?php function tglindo($date)
                                {
                                    if ($date == "0000-00-00") {
                                        $result = 'On Progress';
                                    } else {
                                        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                                        $tahun = substr($date, 0, 4);
                                        $bulan = substr($date, 5, 2);
                                        $tgl   = substr($date, 8, 2);
                                        $result = $tgl . " " . $BulanIndo[(int)$bulan - 1] . " " . $tahun;
                                    }
                                    return $result;
                                }
                                $tanggal_awal = tglindo($pekerjaan['tanggal_awal']);
                                $tanggal_akhir = tglindo($pekerjaan['tanggal_akhir']);
                                ?>
                                <h6><?= $tanggal_awal ?> Sampai <?= $tanggal_akhir ?></h6>
                            </div>
                            <div class="single_project_details_widget">
                                <span class="ti-check-box"></span>
                                <h5>Nama Client</h5>
                                <h6><?= $pekerjaan['klien']; ?></h6>
                            </div>
                            <div class="single_project_details_widget">
                                <span class="ti-check-box"></span>
                                <h5>Jenis Pekerjaan</h5>
                                <h6><?= $pekerjaan['kategori']; ?></h6>
                            </div>
                            <div class="single_project_details_widget">
                                <span class="ti-check-box"></span>
                                <h5>Lokasi</h5>
                                <h6><?= $pekerjaan['lokasi']; ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- END section -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#lightgallery1").lightGallery({
            thumbnail:true,
            // animateThumb: true,
        });
        $("#lightgallery2").lightGallery({
            thumbnail:true,
            // animateThumb: true,
        });
        $("#lightgallery3").lightGallery({
            thumbnail:true,
            // animateThumb: true,
        });
    });
</script>

<!-- <script type="text/javascript">

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
<script>
try {
fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
  return true;
}).catch(function(e) {
  var carbonScript = document.createElement("script");
  carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
  carbonScript.id = "_carbonads_js";
  document.getElementById("carbon-block").appendChild(carbonScript);
});
} catch (error) {
console.log(error);
}
</script> -->

<?= $this->endSection(); ?>