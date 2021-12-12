@extends('layout.adminLayout')

@section('main')
    <!-- ==MAIN CONTENT== -->
  <div class="container-fluid px-4">
    <h1 class="mt-4">Pengurus</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Paraga Scout</li>
    </ol>
    <a href="/admin/editPengurus/1" class="btn-warning mt-4 mb-4 text-white float-right mr-5 pt-2 pb-2 pr-3 pl-3"><i class="fas fa-edit"></i></a>
    <div class="wrapper-pengurus">
      <div class="row" id="editable">
        <div class="col-md-3 col pengurus"></div>
        <div class="col-md-6">
          <ul class="tree">
            <li class="mabigus"> 
              <span>MABIGUS
                <hr>
                <b>{{$pengurus[0]->mabigus}}</b>
              </span>
              <ul>
                <li class="pembina"> 
                  <span>PEMBINA UTAMA
                    <hr>
                    <b>{{$pengurus[0]->pembinaUtama}}</b>
                  </span>
                  <ul class="space-ketua">
                    <li class="ketua"> 
                      <span >KETUA DEWAN PUTRA
                        <hr>
                        <b>{{$pengurus[0]->ketuaDewanPutra}}</b>
                      </span>
                      <ul>
                        <li class="sekertaris">
                          <span>SEKERTARIS PUTRA
                            <hr>
                            <b>{{$pengurus[0]->sekretarisPutra}}</b>
                          </span></li>
                      </ul>
                      <ul>
                        <li class="bendhara">
                          <span>BENDAHARA PUTRA
                            <hr>
                            <b>{{$pengurus[0]->bendaharaPutra}}</b>
                          </span></li>
                      </ul>
                      <ul>
                        <li class="pemangku">
                          <span>PEMANGKU ADAT PUTRA
                            <hr>
                            <b>{{$pengurus[0]->pemangkuAdatPutra}}</b>
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
                        <b>{{$pengurus[0]->ketuaDewanPutri}}</b>
                    </span>
                    <ul>
                      <li class="sekertaris">
                        <span>SEKERTARIS PUTRI
                          <hr>
                          <b>{{$pengurus[0]->sekretarisPutri}}</b>
                        </span></li>
                    </ul>
                    <ul>
                      <li class="bendhara">
                        <span>BENDAHARA PUTRI
                          <hr>
                          <b>{{$pengurus[0]->bendaharaPutri}}</b>
                        </span></li>
                    </ul>
                    <ul>
                      <l class="pemangku">
                        <span>PEMANGKU ADAT PUTRI
                          <hr>
                          <b>{{$pengurus[0]->pemangkuAdatPutri}}</b>
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
  </div>
@endsection