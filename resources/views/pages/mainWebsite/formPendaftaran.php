<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/stylesheet/style.css" type="text/css">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/54218bd639.js" crossorigin="anonymous"></script>
  </head>
  <body>

    <!-- ==HEADER== -->
    <div class="wrapper-navbar">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-logo" href="#">
            <img src="../assets/image/logo.jpeg" width="60" height="60" class="d-inline-block align-top" alt="">
          </a>
          <a class="navbar-brand pl-5" href="../index.php">PARAGA SCOUT</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
          </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item  mr-4">
                  <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item dropdown active mr-4">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Organisasi
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="pengurus.php">Struktur Organisasi</a>
                    <a class="dropdown-item" href="visi-misi.php">Visi misi</a>
                  </div>
                </li>
                <li class="nav-item  mr-4">
                  <a class="nav-link" href="prestasi.php">Prestasi</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="artikel.php">Artikel</a>
                </li>
              </ul>
            </div>
          </div>
        <div>
      </nav>  
    </div>
    <!-- ==END OF HEADER== -->

    <!-- ==MAIN CONTENT== -->
    <div class="wrapper-pendaftaran">
      <div class="title">Form Pendaftaran</div>
      <hr class="hr-gold">
      <form>
        <div class="form">
          <div class="input-field">
            <div class="token">
              <label> Token </label>
              <input type="text" class="input" />
            </div>
          </div>

          <div class="input-field">
            <label> Nama Lengkap </label>
            <input type="text" class="input" />
          </div>

          <div class="input-field">
            <label> Kelas </label>
            <input type="text" class="input" />
          </div>

          <div class="input-field">
            <label> Jenis Kelamin </label>
            <div class="radio">
              <input type="radio" name="jenis-kelamin" value="Laki-laki" />
              <label>Laki-laki</label>
              <input type="radio" name="jenis-kelamin" value="Perempuan" />
              <label>Perempuan</label>
            </div>
          </div>
  
          <div class="input-field">
            <label> Tempat Lahir </label>
            <input type="text" class="input" />
          </div>

          <div class="input-field">
            <label> Tanggal Lahir </label>
            <input type="text" class="input" />
          </div>

          <div class="input-field">
            <label> Alamat Rumah </label>
            <input type="text" class="input" />
          </div>

          <div class="input-field">
            <label> Hobi </label>
            <input type="text" class="input" />
          </div>

          <div class="input-field">
            <label> E-mail </label>
            <input type="email" class="input" />
          </div>

          <div class="input-field">
            <label> No. Telefon (WA) </label>
            <input type="text" class="input" />
          </div>

          <div class="input-field">
            <label> Pengalaman Organisasi </label>
            <textarea class="textarea"></textarea>
          </div>

          <div class="input-field">
            <label> Alasan Masuk Organisasi </label>
            <textarea class="textarea"></textarea>
          </div>

          <div class="input-field">
            <input type="reset" value="clear" />
            <input type="submit" value="Daftar" class="btn" />
          </div>
        </div>
      </form>
    </div>
    <!-- ==END OF MAIN CONTENT== -->

    <!-- ==FOOTER== -->
    <footer class="container-footer mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md">
            <div class="title mb-3">Lokasi</div>
            <p>Jl. Amanagappa No.8, Baru, Kec. Ujung Pandang, Kota Makassar, Sulawesi Selatan 90115</p>
          </div>
          <div class="col-md">
            <div class="title mb-3">Tentang</div>
            <p>PARAGA SCOUT merupakan salah satu ekstrakulikuler di SMAN 16 Makassar </p>
          </div>
          <div class="col-md">
            <div class="title mb-3">Kontak</div>
            <a href="https://www.instagram.com/paraga_scout" target=”_blank”><i class="fab fa-instagram mr-4"></i></a>
            <a href="https://twitter.com/paraga_scout" target=”_blank”><i class="fab fa-twitter mr-4"></i></a>
            <a href="https://id-id.facebook.com/paraga.scout.61.62" target=”_blank”><i class="fab fa-facebook-f mr-4"></i></a>
          </div>
        </div>
      </div>
      <hr>
      <div class="container text-center copyright pt-3">
        <p>Copyright by &copy; BRAW 2021</p>
      </div>
    </footer>
    <!-- ==END OF FOOTER== -->



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>