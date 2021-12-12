@extends('layout.adminLayout')

@section('main')
                    <div class="container mt-3">
                        <div class="dashboard-heading">
                            <h2 class="dashboard-title">
                                Detail Artikel
                            </h2>
                            <a class="btn btn-primary mb-3" href="{{url("/admin/prestasi/{$datas->title}/edit")}}">Edit Prestasi</a>
                        
                        </div>
                    </div>

                    <div class="detail-artikel">
                        <div class="container table-responsive">
                            <table class=" table">
                                {{-- <tr>
                                    <th width="200px">Id</th>
                                    <td>1</td>
                                </tr> --}}
                                <tr>
                                    <th width="200px">Judul Prestasi</th>
                                    <td>{{$datas->title}}</td>
                                </tr>
                                <tr>
                                    <th width="200px">Gambar</th>
                                    {{-- <td>{{$datas -> gambar_artikel}}</td> --}}
                                    <td><img src="{{asset('storage/'. $datas->picture)}}" class="img-preview img-fluid col-sm-4 d-block"></td>
                                </tr>
                                <tr>
                                    <th width="200px">Isi Prestasi</th>
                                    <td>{!!$datas->body!!}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
@endsection

@push('addon-script')
<script>
    function previewImage() {
    const image = document.querySelector('#picture');
    const imgPreview = document.querySelector('.img-preview');
    imgPreview.style.display = 'block';

    const ofReader = new FileReader();
    ofReader.readAsDataURL(image.files[0])

    // const blob = URL.createObjectURL(image.files[0]);
    // imgPreview.src = blob;

    ofReader.onload = function(oFREevent){
        imgPreview.src = oFREevent.target.result;
    }
}
</script>
@endpush