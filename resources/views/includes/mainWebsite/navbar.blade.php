<!-- ==HEADER== -->
<div class="wrapper-navbar">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-logo" href="#">
          <img src="../dist/img/logo.jpeg" width="60" height="60" class="d-inline-block align-top" alt="">
        </a>
        <a class="navbar-brand pl-5" href="../index.php">PARAGA SCOUT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item  mr-4">
                <a class="nav-link {{Request::is('/') ? 'active' : ''}}" href="/">Home</a>
              </li>
              <li class="nav-item dropdown  mr-4">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Organisasi
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item {{Request::is('pengurus') ? 'active' : ''}}" href="/pengurus">Struktur Organisasi</a>
                  <a class="dropdown-item {{Request::is('visi-misi') ? 'active' : ''}}" href="/visi-misi">Visi misi</a>
                </div>
              </li>
              <li class="nav-item {{Request::is('prestasi') ? 'active' : ''}} mr-4">
                <a class="nav-link" href="/prestasi">Prestasi</a>
              </li>
              <li class="nav-item {{Request::is('artikel') ? 'active' : ''}}">
                <a class="nav-link" href="/artikel">Artikel</a>
              </li>
            </ul>
          </div>
        </div>
      <div>
    </nav>  
  </div>
  <!-- ==END OF HEADER== -->