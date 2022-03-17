<!DOCTYPE html>
<html lang="en">
    
 <!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<!--Floating Action Button-->
<link rel="icon" href="<?= base_url('assets'); ?>/img/1.jpeg" type="image/gif"> 
<div class="fixed-action-btn">
  <a class="btn-floating btn-large" >
      <i class="large material-icons"><img style="margin-top:-6px;" class="img-fluid" src="http://konseparsitek.com/images/pencilbundar.png"></i>
  </a>
  <ul>
    <li><a target="_blank" href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to=concept.designmuda@gmail.com&su=SUBJECT&body=BODY&tf=1" class="btn-floating red"><i class="material-icons"><img style="margin-top:-6px;" class="img-fluid" src="http://konseparsitek.com/images/google-plus.png"></i></a></li>
    <li><a target="_blank" href="https://wa.me/+6282244415543?text=Kirim Pesan" class="btn-floating green"><i class="material-icons"><img style="margin-top:-6px;" class="img-fluid" src="http://konseparsitek.com/images/whatsapp.png"></i></a></li>
    <li><a target="_blank" href="https://www.facebook.com/PT-Concept-Design-Architect-488974991647661/?ref=page_internal" class="btn-floating blue"><i class="material-icons"><img style="margin-top:-6px;" class="img-fluid" src="http://konseparsitek.com/images/facebook.png"></i></a></li>
  </ul>
</div>
<!--Floating Action Button-->
<script>
document.addEventListener('DOMContentLoaded', function() {
var elems = document.querySelectorAll('.fixed-action-btn');
var instances = M.FloatingActionButton.init(elems, {
  direction: 'left'
});
});
</script>

<head>
  <title>PT Concept Design Architect</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700" rel="stylesheet">

  <link rel="stylesheet" href="/css/animate.css">
  <link rel="stylesheet" href="/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="/fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="/fonts/fontawesome/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="/js/light-galery/dist/css/lightgallery.min.css">

  <!-- Theme Style -->
  <link rel="stylesheet" href="/css/style.css">
  
  <link rel="icon" href="<?= base_url('assets'); ?>/img/1.jpeg" type="image/gif"> 
  

</head>

<body>

  <header role="banner">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('/') ?>">Concept Design Architect</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample05">
          <ul class="navbar-nav pl-md-5 ml-auto">
            <li <?= $navlink == 'dashboard' ? 'class="nav-item active"' : 'class="nav-item"' ?>>
              <a class="nav-link " href="<?= base_url('/') ?>">Beranda</a>
            </li>
            <li <?= $navlink == 'about' ? 'class="nav-item active"' : 'class="nav-item"' ?>>
              <a class="nav-link" href="<?= base_url('/about') ?>">Tentang</a>
            </li>
            <li <?= $navlink == 'project' ? 'class="nav-item active"' : 'class="nav-item"' ?>>
              <a class="nav-link" href="<?= base_url('/project') ?>">Proyek</a>
            </li>
            <li <?= $navlink == 'contact' ? 'class="nav-item active"' : 'class="nav-item"' ?>>
              <a class="nav-link" href="<?= base_url('/contact') ?>">Kontak</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/login') ?>">Admin</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- END header -->

  <?= $this->renderSection('content'); ?>

  <footer class="site-footer" role="contentinfo" style="background-color: black;">
    <div class="container">
      <?php
      foreach ($kontak as $value) { ?>
        <div class="row mb-5">
          <div class="col-md-4 mb-5">
            <h3 style="color: white;">About Us</h3>
            <p class="mb-5"><?= $value['about_us'] ?></p>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>

          </div>
          <div class="col-md-5 mb-5 pl-md-5">
            <h3 style="color: white;">Contact Info</h3>
            <ul class="list-unstyled footer-link">
              <li class="d-block">
                <span class="d-block">Address:</span>
                <span><?= $value['alamat'] ?></span></li>
              <li class="d-block"><span class="d-block">Telephone:</span><span><?= $value['nomor'] ?></span></li>
              <li class="d-block"><span class="d-block">Email:</span><span><?= $value['email'] ?></span></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <h3 style="color: white;">Quick Links</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="#">About</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Disclaimers</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3">

          </div>
        </div>
      <?php } ?>
      <div class="row">
        <div class="col-12 text-md-center text-left">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script> 
            All rights reserved | Concept Design Architect
            <!--with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>-->
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- END footer -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214" /></svg></div>

  <script src="/js/jquery-3.2.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/jquery.waypoints.min.js"></script>
  <script src="/js/jquery.fancybox.min.js"></script>
  <script src="/js/main.js"></script>

  <script src="/js/main.js"></script>

  <script type="text/ecmascript" src="/js/light-galery/dist/js/lightgallery.min.js"></script>
  <script type="text/javascript" src="/js/light-galery/dist/js/lg-thumbnail.min.js"></script>
  <script type="text/javascript" src="/js/light-galery/dist/js/lg-fullscreen.min.js"></script>
  <script type="text/javascript" src="/js/light-galery/dist/js/lg-zoom.js"></script>

</body>

</html>