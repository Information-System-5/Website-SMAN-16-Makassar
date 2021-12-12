@extends('layout.mainLayout')

@section('main')
        <!-- ==MAIN CONTENT== -->
        <div class="wrapper-artikel mt-5">
          <div class="container">
            <div class="title">
              <h1 class="mb-5">{{$datas->judul_artikel}}</h1>
               <div class="detail-artikel">
                 <ul>
                   <li class="penulis">{{$datas->penulis_artikel}}</li>
                   <li class="pr-1 pl-1">|</li>
                   {{-- <li class="hari-publikasi">Jum'at</li>,   <!-- KOMA JGN DIHAPUS --> --}}
                   <li class="tanggal-publish">{{$datas->waktu_dibuat_artikel}}</li>
                 </ul>
               </div>
            </div>
           </div>
           <div class="konten">
            <div class="jumbotron">
             <!-- foto jumbotron ada di css -->
            </div>
            <div class="container mt-5">
             <p class="isi-konten">
              {!!$datas -> isi_artikel!!}
             </p>
            </div>
           </div>
    
           <div class="artikel-lainnya">
             <div class="container">  
               <ul>
                 <li><p>Artikel Lainnya</p></li>
                 <li><a href="previewArtikel.php">Lihat Artikel Lainnya <i class=" pl-1 far fa-arrow-alt-circle-right"></i></a></li>
               </ul>
               <hr>
    
    
               <div class="card-artikel">
                 <div class="row">
    
                   <div class="col-md-4 col-sm-12 mb-3">
                     <a href="artikel.php">
                       <div class="card">
                         <div class="foto-card">
                           <img src="../dist/img/header-jumbotron.jpg" class="card-img-top" alt="...">
                         </div>
                         <div class="card-body">
                           <p>Mau tau gimana indonesia merdeka Simak sejarahnya...</p>
                           <a href="" class="selengkapnya">Baca Selengkapnya</a><i class="fas fa-arrow-right pl-2"></i>
                         </div>
                       </div>
                     </a>
                   </div>
    
                   <div class="col-md-4 col-sm-12 mb-3">
                     <a href="artikel.php">
                       <div class="card ">
                           <div class="foto-card">
                             <img src="../dist/img/logo.jpeg" class="card-img-top" alt="...">
                           </div>
                         <div class="card-body">
                           <p>Mau tau gimana indonesia merdeka Simak sejarahnya...</p>
                           <a href="" class="selengkapnya">Baca Selengkapnya</a><i class="fas fa-arrow-right pl-2"></i>
                         </div>
                       </div>
                     </a>
                   </div>
    
                   <div class="col-md-4 col-sm-12 mb-3">
                     <a href="artikel.php">
                       <div class="card ">
                           <div class="foto-card">
                             <img src="../dist/img/header-jumbotron.jpg" class="card-img-top" alt="...">
                           </div>
                         <div class="card-body">
                           <p>Mau tau gimana indonesia merdeka Simak sejarahnya...</p>
                           <a href="" class="selengkapnya">Baca Selengkapnya</a><i class="fas fa-arrow-right pl-2"></i>
                         </div>
                       </div>
                     </a>
                   </div>
    
                 </div>
               </div>
    
    
    
    
             </div>
           </div>
       </div>
       <!-- ==END OF MAIN CONTENT== -->
@endsection