<!DOCTYPE  html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> <?php echo $judul; ?> </title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
 </head>
 <body>
    <!-- membuat papan menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
              <a class="navbar-brand" href="#">Middle school Cijati</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarku" aria-controls="navbarku" aria-expanded="false" aria-label="toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarku">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url(); ?>index.php/mysite/index">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>index.php/mysite/about">About SMK</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Work From Home</a>
                  </li>
                </ul>
                  <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="search" placeholder="search" aria-label="search">
                      <button class="btn btn-outline-succes my-2 my-sm-0" type="submit">search</button>
                  </form>
              </div>
        </div>
      </nav>

      <!-- membuat picture slide-->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo base_url('images/picture-1.png') ?>" class="d-block w-100" alt="foto">
          </div>
           <div class="carousel-item">
            <img src="<?php echo base_url('images/picture-2.png') ?>" class="d-block w-100" alt="foto">
          </div>
           <div class="carousel-item">
            <img src="<?php echo base_url('images/picture-3.png') ?>" class="d-block w-100" alt="foto">
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <!-- memanggil library javascriit -->
      <script src="<?php echo base_url('assets/js/jquery-3.5.1.min.js') ?>"></script>
      <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
      <script src="<?php echo base_url('assets/js/util.js') ?>"></script>
    </body>
    </html>
      