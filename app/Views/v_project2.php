<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>

<div class="top-shadow"></div>

<?php
foreach ($carosel as $value) { ?>

  <div class="inner-page">
    <div class="slider-item" style="background-image: url('http://ds.konseparsitek.com/images/<?= $value['gambar'] ?>');">
      <div class="container">
        <div class="row slider-text align-items-center justify-content-center">
          <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
            <h1 class="pt-5"><span><?= $value['judul'] ?></span></h1>
            <p class="mb-5 w-75 pl-0"><?= $value['keterangan'] ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

<!-- END slider -->
</div>

<section class="section border-t pb-0">
  <!-- <div class="container">
    <div class="row justify-content-center mb-5 element-animate">
      <div class="col-md-8 text-center">
        <h2 class=" heading mb-4">Riwayat Proyek CDA</h2>
        <p class="mb-5 lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
      </div>
    </div>
  </div> -->

  <div class="container-fluid mb-5">
    <div class="text-center">
      <h4 class=" heading mb-2 element-animate"><?= $kategori ?></h4>
    </div>
    <div class="row no-gutters">
      <?php
      foreach ($proyek as $value) { ?>

        <div class="col-md-4 element-animate">
          <a href="<?= base_url('/detail/' . $value['id']) ?>" class="link-thumbnail">
            <h3><?= $value['judul']; ?></h3>
            <span class="ion-plus icon"></span>
            <div style="position: relative; width: 400px; height: 250px; overflow: hidden; margin: 0 auto;">
                <img style="position: absolute; left: 50%; margin-left: -200px;" src="<?= 'http://ds.konseparsitek.com/images/' . $value['gambar']; ?>" alt="Image" class="img-fluid">
            </div>
          </a>
        </div>

      <?php } ?>
    </div>
  </div>
</section>
<!-- END section -->

<!-- <section class="section bg-light block-11">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8 text-center">
        <h2 class=" heading mb-4">Testimoni</h2>
      </div>
    </div>
    <div class="nonloop-block-11 owl-carousel">
      <?php
      foreach ($testimoni as $value) { ?>

        <div class="item">
          <div class="block-33 h-100">
            <div class="vcard d-flex mb-3">
              <div class="image align-self-center"><img src="<?= 'http://ds.konseparsitek.com/images/' . $value['gambar']; ?>" alt="Person here"></div>
              <div class="name-text align-self-center">
                <h2 class="heading"><?= $value['nama'] ?></h2>
                <span class="meta"><?= $value['asal'] ?></span>
              </div>
            </div>
            <div class="text">
              <blockquote>
                <p>
                  &rdquo;
                  <?= $value['keterangan'] ?>
                  &ldquo;
                </p>
              </blockquote>
            </div>
          </div>
        </div>

      <?php } ?>
    </div>
  </div>
  </div>
  <!-- END .block-4 -->
</section> -->

<?= $this->endSection(); ?>