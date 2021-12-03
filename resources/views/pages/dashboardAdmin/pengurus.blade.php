@extends('layout.adminLayout')

@section('main')

    <!-- ==MAIN CONTENT== -->
    <div class="wrapper-pengurus">
      <div class="jumbotron">
        <div class="container">
          <h3 class="display-4 text-center"> Struktur Organisasi </h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col pengurus"></div>
        <div class="col-md-6">
          <ul class="tree">
            <li class="mabigus"> 
              <span>MABIGUS
                <hr>
                <b>Jane Doe</b>
              </span>
              <ul>
                <li class="pembina"> 
                  <span>PEMBINA UTAMA
                    <hr>
                    <b>Jane Doe</b>
                  </span>
                  <ul class="space-ketua">
                    <li class="ketua"> 
                      <span >KETUA DEWAN PUTRA
                        <hr>
                        <b>Jane Doe</b>
                      </span>
                      <ul>
                        <li class="sekertaris">
                          <span>SEKERTARIS PUTRA
                            <hr>
                            <b>Jane Doe</b>
                          </span></li>
                      </ul>
                      <ul>
                        <li class="bendhara">
                          <span>BENDAHARA PUTRA
                            <hr>
                            <b>Jane Doe</b>
                          </span></li>
                      </ul>
                      <ul>
                        <li class="pemangku">
                          <span>PEMANGKU ADAT PUTRA
                            <hr>
                            <b>Jane Doe</b>
                          </span></li>
                      </ul>
                      <ul>
                        <li class="anggota">
                          <span><b>ANGGOTA</b>
                          </span></li>
                      </ul>
                    </li>
                    <li class="ketua"> 
                      <span>KETUA DEWAN PUTRI
                        <hr>
                        <b>Jane Doe</b>
                    </span>
                    <ul>
                      <li class="sekertaris">
                        <span>SEKERTARIS PUTRI
                          <hr>
                          <b>Jane Doe</b>
                        </span></li>
                    </ul>
                    <ul>
                      <li class="bendhara">
                        <span>BENDAHARA PUTRI
                          <hr>
                          <b>Jane Doe</b>
                        </span></li>
                    </ul>
                    <ul>
                      <l class="pemangku">
                        <span>PEMANGKU ADAT PUTRI
                          <hr>
                          <b>Jane Doe</b>
                        </span></li>
                    </ul>
                    <ul>
                      <li class="anggota">
                        <span><b>ANGGOTA</b>
                        </span></li>
                    </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="col-md-3 col-pengurus"></div>
      </div>

    </div>
    <!-- ==END OF MAIN CONTENT== -->

    @endsection