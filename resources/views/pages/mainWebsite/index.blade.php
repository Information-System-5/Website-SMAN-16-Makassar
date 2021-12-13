@extends('layout.mainLayout')

@section('main')
<div class="wrapper-homepage">
  <div class="konten">
     <div class="jumbotron">
      <!-- foto jumbotron ada di css -->
     </div>

     <div class="container">
       <h1 class="text-center mt-4 mb-5">PARAGA SCOUT SMAN 16 MAKASSAR</h1>
       <div class="row mb-4">
         <div class="col-md-6 col-sm-12 img-deksripsi">
          <img src="../dist/img/logo.jpeg"  alt="Logo Pramuka SMAN 16 Makassar">
         </div>
         <div class="col-md-6 col-sm-12 text-center mt-3">
           <p class="deskripsi">
           Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at tempor commodo ullamcorper. Et ligula ullamcorper malesuada proin libero. Vel facilisis volutpat est velit egestas dui. Sit amet tellus cras adipiscing enim eu turpis egestas. Vitae tempus quam pellentesque nec nam. Ornare quam viverra orci sagittis eu volutpat. Eget mi proin sed libero enim sed faucibus turpis in. Faucibus in ornare quam viverra orci sagittis eu volutpat. Pellentesque id nibh tortor id. Cras semper auctor neque vitae tempus quam pellentesque. Tempor nec feugiat nisl pretium fusce id velit. Amet risus nullam eget felis eget. At elementum eu facilisis sed odio morbi quis commodo odio. Sit amet justo donec enim diam vulputate. Feugiat in ante metus dictum at tempor commodo. Mattis pellentesque id nibh tortor id.
           </p>
         </div>
       </div>

      <div class="artikel-prestasi-card">
        <!-- artikel -->
        <h4 ml-2 mb-2>ARTIKEL</h4> <hr>
        <div class="wrapper-card mb-2">
          <div class="card-artikel ">
            <div class="row mb-2">
              @forelse ($datas as $data)
              <div class="col-md-4 col-sm-12">
                {{-- <a type="hidden" href="/artikel/{$data->judul_artikel}">Artikel Lainnya </a><i class="fas fa-arrow-right pl-2"></i> --}}
                <a href="{{url("/artikel/{$data->judul_artikel}")}}">
                  <div class="card h-100">
                    <div class="foto-card">
                      {{-- <img src="../dist/img/header-jumbotron.jpg" class="card-img-top" alt="..."> --}}
                      <img src="{{asset('storage/'. $data->gambar_artikel)}}" class="card-img-top">
                    </div>
                    <div class="card-body">
                      <p>{{$data->judul_artikel}}</p>
                    </div>
                    {{-- <a href="/artikel/{$data->judul_artikel}"></a> --}}
                  </div>
                </a>
              </div>

              @empty
                <h3 class="card-title">Tidak ada postingan</h3>
              @endforelse

            </div>
            {{-- <div class="row">

              <div class="col-md-4 col-sm-12">
                <a href="artikel.php">
                  <div class="card h-100">
                    <div class="foto-card">
                      <img src="../dist/img/header-jumbotron.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                      <p>Sejarah Kemerdekaan Indonesia</p>
                    </div>
                  </div>
                </a>
              </div>
            </div> --}}
          
            <div class="text-right lainnya mb-5">
              <a href="/artikel">Artikel Lainnya </a><i class="fas fa-arrow-right pl-2"></i>
            </div>
          </div>
        </div>
        
        <!-- prestasi -->
        <h4 ml-2 mb-2>PRESTASI</h4> <hr>
        <div class="wrapper-card mb-2">
          <div class="card-artikel ">
            <div class="row mb-2">
              @forelse ($datas2 as $data)
              <div class="col-md-4 col-sm-12">
                <a href="{{url("/prestasi/{$data->title}")}}">
                  <div class="card h-100">
                    <div class="foto-card">
                      {{-- <img src="../dist/img/header-jumbotron.jpg" class="card-img-top" alt="..."> --}}
                      <img src="{{asset('storage/'. $data->picture)}}" class="card-img-top">
                    </div>
                    <div class="card-body">
                      <p>{{$data->title}}</p>
                    </div>
                  </div>
                </a>
              </div>
              @empty
                <h3 class="card-title">Tidak ada postingan</h3>
              @endforelse
            </div>
            {{-- <div class="row">

              <div class="col-md-4 col-sm-12">
                <a href="artikel.php">
                  <div class="card h-100">
                    <div class="foto-card">
                      <img src="assets/image/header-jumbotron.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                      <p>Sejarah Kemerdekaan Indonesia</p>
                    </div>
                  </div>
                </a>
              </div>

              

            </div> --}}
          
            <div class="text-right lainnya mb-5">
              <a href="/prestasi">Prestasi Lainnya </a><i class="fas fa-arrow-right pl-2"></i>
            </div>
          </div>
        </div>
       </div>
     </div>
  </div>
</div>

@endsection