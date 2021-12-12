@extends('layout.adminLayout')

@section('main')
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Admin</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Prestasi</li>
                        </ol>
                        
                        <div class="row">
                            <div class="col-xl">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Formulir Prestasi
                                    </div>
                                    {{-- Form Input Prestasi --}}
                                    <form class="px-4" method="POST" action="/admin/prestasi" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mt-3 mb-3">
                                          <label for="title" class="form-label">Judul Prestasi</label>
                                          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{old('title')}}">
                                          @error('title')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <img class="img-preview img-fluid col-sm-4">
                                            <label for="picture" class="form-label"></label>
                                            <input onchange="previewImage()" class="form-control @error('picture') is-invalid @enderror" type="file"  id="picture" name="picture" required autofocus>
                                            @error('picture')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="body" class="form-label">Isi Prestasi</label>
                                                @error('body')
                                                    <p class="text-danger">$message</p>
                                                @enderror
                                            <input id="body" type="hidden" name="body" value="{{old('body')}}">
                                            <trix-editor input="body"></trix-editor>
                                        </div>                                         
                                        <button type="submit" class="btn btn-primary mb-3">Submit</button>
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
@endsection

@push('prepend-style')
    {{-- trix editor --}}
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/dist/css/trix.css') }}">
    <script type="text/javascript" src="{{URL::asset('/dist/js/trix.js') }}"></script>
@endpush

@push('addon-script')
    <script>
        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })
    </script>
    <script>
        function previewImage() {
            const image = document.querySelector('#picture');
            const imgPreview = document.querySelector('.img-preview');
            imgPreview.style.display = 'block';
    
            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0])
    
            ofReader.onload = function(oFREevent){
                imgPreview.src = oFREevent.target.result;
            }
        }
        
        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })
    </script>
@endpush