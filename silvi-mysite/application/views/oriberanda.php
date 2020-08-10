<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title> <?php echo $judul; ?> </title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
    
    <!--Membuat papan menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
            <a class="navbar-brand" href="#">Middle School Cijati</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarKu" aria-controls="navbarKu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarKu">
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
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
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

    <div class="container" style="margin-top: 20px;">
        <!-- membuat alert -->
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Welcome, Silvi!</strong> Anda sedang berada di area sekolah.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <!-- card -->
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col mb-4">
                <div class="card">
                <img src="<?php echo base_url('images/card-picture-rpl.png') ?>" class="card-img-top" alt="foto">
                <div class="card-body">
                    <h5 class="card-title">Rekayasa Perangkat Lunak</h5>
                    <p class="card-text">Programmer, seseorang yang memiliki kemampuan atau skill menulis dan merancang kode program-program (syntax) komputer menggunakan bahasa-bahasa pemrograman komputer (Java, Php, Javascript dll)</p>
                </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card">
                <img src="<?php echo base_url('images/card-picture-bdp.png') ?>" class="card-img-top" alt="foto">
                <div class="card-body">
                    <h5 class="card-title">Bisnis Daring Pemasaran</h5>
                    <p class="card-text">Pemasaran adalah suatu proses sosial dan manajerial yang didalamnya individu dan kelompok mendapatkan apa yang mereka butuhkan dan inginkan dengan menciptakan, menawarkan, dan mempertukarkan produk yang bernilai kepada pihak lain</p>
                </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card">
                <img src="<?php echo base_url('images/card-picture-aphp.png') ?>" class="card-img-top" alt="foto">
                <div class="card-body">
                    <h5 class="card-title">Agribisnis Pengolahan Hasil Pertanian</h5>
                    <p class="card-text">agribisnis adalah suatu kelompuk industri di bidang pertanian atau layanan yang dibutuhkan dalam pertanian yang menjalankan usahanya berdasarkan prinsip komersial, terutama menggunakan teknologi canggih</p>
                </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card">
                <img src="<?php echo base_url('images/card-picture-tkro.png') ?>" class="card-img-top" alt="foto">
                <div class="card-body">
                    <h5 class="card-title">Teknik Kendaraan Ringan Otomotif</h5>
                    <p class="card-text">Teknik Kendaraan Ringan adalah ilmu yang mempelajari tentang alat-alat transportasi darat yang menggunakan mesin, terutama mobil yang mulai berkembang sebagai cabang ilmu seiring dengan diciptakannya mesin mobil</p>
                </div>
                </div>
            </div>
        </div>

    </div> <!--penutup container line ke 66 -->

    <div class="container">
        <p>
        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
        </p>

        <p>
        <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
        </p>
    </div>

    <!-- Membuat footer -->
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md">
                    <img class="mb-2" src="<?php echo base_url('images/logo-smk.png') ?>" alt="" width="24" height="24">
                    <small class="d-block mb-3 text-muted">&copy; SMK Negeri 1 Cijati 2019-2020</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Kompetensi Keahlian</h5>
                    <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Software Engineering</a></li>
                    <li><a class="text-muted" href="#">Bisnis Daring Pemasaran</a></li>
                    <li><a class="text-muted" href="#">Agribisnis Pengolahan Hasil Pertanian</a></li>
                    <li><a class="text-muted" href="#">Otomotif</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Portal Sekolah</h5>
                    <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Karya Tulis Ilmiah</a></li>
                    <li><a class="text-muted" href="#">Guru & Tata Usaha</a></li>
                    <li><a class="text-muted" href="#">Repositori</a></li>
                    <li><a class="text-muted" href="#">Teaching Factory</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Team</a></li>
                    <li><a class="text-muted" href="#">Locations</a></li>
                    <li><a class="text-muted" href="#">Privacy</a></li>
                    <li><a class="text-muted" href="#">Terms</a></li>
                    </ul>
                </div>
            </div>
        </div>
  </footer>


    <!-- memanggil library javascript -->
    <script src="<?php echo base_url('assets/js/jquery-3.5.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- <script src="<?php echo base_url('assets/js/util.js') ?>"></script> -->
    <!-- <script src="<?php echo base_url('assets/js/dropdown.js') ?>"></script> -->
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    
</body>
</html>