@extends('layout.adminLayout')
@section('main')
    <main>
        <div class="container-fluid px-4">
            <div class="row mt-4">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            Edit Artikel
                        </div>
                        {{-- Form Input Artikel --}}
                        <form class="px-4" method="post" action="/admin/artikel/{{$datas->judul_artikel}}" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="mt-3 mb-3">
                                <label for="judul_artikel" class="form-label">Judul Artikel</label>
                                <input type="text" class="form-control @error('judul_artikel') is-invalid @enderror" id="judul_artikel" name="judul_artikel" required autofocus value="{{old('judul_artikel', $datas->judul_artikel)}}">
                                @error('judul_artikel')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="penulis_artikel" class="form-label">Penulis</label>
                                <input type="text" class="form-control @error('penulis_artikel') is-invalid @enderror" id="penulis_artikel" name="penulis_artikel" required autofocus value="{{old('penulis_artikel', $datas->penulis_artikel)}}"></input>
                                @error('penulis_artikel')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div> 
                            <div class="mb-3">
                                <label for="waktu_dibuat_artikel" class="form-label">Waktu</label>
                                <input type="text" class="form-control datepicker @error('waktu_dibuat_artikel') is-invalid @enderror" id="waktu_dibuat_artikel" name="waktu_dibuat_artikel" required autofocus value="{{old('waktu_dibuat_artikel', $datas->waktu_dibuat_artikel)}}"></input>
                            </div>  
                            <div class="mb-3">
                                <input type="hidden" name="oldImage" value="{{$datas->gambar_artikel}}">
                                @if ($datas->gambar_artikel)
                                    <img src="{{asset('storage/'. $datas->gambar_artikel)}}" class="img-preview img-fluid col-sm-4 d-block">
                                @else
                                    <img class="img-preview img-fluid col-sm-4">
                                @endif
                                
                                <label for="gambar_artikel" class="form-label"></label>
                                <input onchange="previewImage()" class="form-control @error('gambar_artikel') is-invalid @enderror" type="file" id="gambar_artikel" name="gambar_artikel" required autofocus>
                                @error('gambar_artikel')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="isi_artikel" class="form-label">Isi Artikel</label>
                                    @error('isi_artikel')
                                        <p class="text-danger">{{'Bagian ini harus diisi'}}</p>
                                    @enderror
                                <input id="isi_artikel" type="hidden" name="isi_artikel" value="{{old('isi_artikel', $datas->isi_artikel)}}">
                                <trix-editor input="isi_artikel"></trix-editor>
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
    <link rel="stylesheet" href="{{ url('dist/js/gijgo/css/gijgo.min.css') }}" />
  
    {{-- trix editor --}}
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/dist/css/trix.css') }}">
    <script type="text/javascript" src="{{URL::asset('/dist/js/trix.js') }}"></script>
@endpush

@push('addon-script')
<script src="{{ url('dist/js/gijgo/js/gijgo.min.js') }}"></script>
<script>
    $(document).ready(function() {
      $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
        // uiLibrary: 'bootstrap5'
        // icons: {
        //   rightIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}" />'
        // }
      });
    });

    function previewImage() {
        const image = document.querySelector('#gambar_artikel');
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