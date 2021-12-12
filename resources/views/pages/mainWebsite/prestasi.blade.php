@extends('layout.mainLayout2')

@section('main')
    <!-- ==MAIN CONTENT== -->
    <div class="wrapper-prestasi">
        <div class="konten">
          <!-- Jumbotron -->
          <div class="jumbotron">
            <div class="container">
              <div class="jumbotron-text">
                <h1 class="display-4">Prestasi</h1>
                <p>Paraga Scout sejak tahun 2009</p>
              </div>
            </div>
          </div>
          <!-- ==END OF JUMBOTRON== -->
  
  
          <div class="container">
            <div class="search-bar mt-5">
              <form action="/prestasi">
                <input type="text" placeholder="Pencarian" name="search" value="{{request('search')}}">
                <button class="bg-transparent border-0" type="submit"><i class="fas fa-search"></i></button>
              </form>
            </div>
            @forelse ($datas as $data)
            <!-- Prestasi kontent 1 -->
            <div class="prestasi">
                <div class="card mb-12">
                  <div class="row g-0 pt-2 pl-2">
                    <div class="col-md-4">
                      <img
                          src="../dist/img/header-jumbotron.jpg"
                          alt="Trendy Pants and Shoes"
                          class=""
                      />
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <button type="button" class="btn rounded-pill mb-2">Prestasi</button>
                        <h3 class="card-title">{{$data->title}}</h3>
                        <p class="card-text">
                            {!!Str::limit($data->body, 150, '...')!!}
                        </p>
                        <div class="link-prestasi">
                          {{-- <a href="">{{url("/detail-prestasi/{$data->title}")}}<i class="fas fa-arrow-right pl-2"></i></a> --}}
                          <a href="">Baca Selengkapnya disini<i class="fas fa-arrow-right pl-2"></i></a>  
                        </div>
                      </div>
                    </div>
                  </div><hr>
                  </div> 
                </div> 
              </div>
              
            @empty
                <h3 class="card-title">Tidak ada postingan</h3>
            @endforelse
            <div class="container-button">
              <div class=" text-center mt-4 ">
                {{$datas -> links()}}
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ==END OF MAIN CONTENT== -->
@endsection