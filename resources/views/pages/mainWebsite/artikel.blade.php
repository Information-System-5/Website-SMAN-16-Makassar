@extends('layout.mainLayout')

@section('main')
    <!-- ==MAIN CONTENT== -->
    <div class="wrapper-preview">

      <div class="jumbotron">
        <div class="jumbotron-text">
          <h1 class="display-4">Artikel</h1>
          <p>Seputar Paraga Scout </p>
        </div>
      </div>
         <!-- ==END OF JUMBOTRON== -->

         
         <div class="konten">

         <!-- SEARCH BAR -->
           <div class="search-bar">
            <form action="/artikel">
              <input type="text" placeholder="Pencarian" name="search" value="{{request('search')}}">
              <button class="bg-transparent border-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
           </div>

            <div class="preview-card">
              @forelse ($datas as $data)
               <!-- preview content 1 -->
              <div class="container">
                <div class="preview-img">
                  {{-- <img
                    src="../dist/img/header-jumbotron.jpg"
                    alt="Trendy Pants and Shoes"
                    class=""
                  /> --}}
                  <img src="{{asset('storage/'. $data->gambar_artikel)}}" class="img-preview img-fluid col-sm-4 d-block">
                </div>

                <div class="preview-artikel">
                  <h3 class="card-title">{{$data->judul_artikel}}</h3>
                    <p class="card-text">
                      {!!Str::limit($data->isi_artikel, 150, '...')!!}
                    </p>
                    <h4 class="card-author">{{$data->penulis_artikel}}</h4>
                    <h4 class="card-date">{{$data->waktu_dibuat_artikel}}</h4>
                    <div class="link-preview">
                      <a href="{{url("/artikel/{$data->judul_artikel}")}}">Baca Selengkapnya disini<i class="fas fa-arrow-right pl-2"></i></a>
                    </div>
                </div>
              </div><hr>
            </div>
            @empty
              <h3 class="card-title">Tidak ada postingan</h3>
            @endforelse
         </div>
         <div class="container-button">
          <div class=" text-center mt-4 ">
            {{$datas -> links()}}
          </div>
        </div>

  </div>
  <!-- ==END OF MAIN CONTENT== -->
@endsection