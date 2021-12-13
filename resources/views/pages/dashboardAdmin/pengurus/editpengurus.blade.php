@extends('layout.adminLayout')

@section('main')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Pengurus</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Paraga Scout</li>
    </ol>
    <form action="/admin/pengurus/{{$pengurus->id}}" method="post">
        @method('put')
        @csrf
        <div class="container">
            <!-- MABIGUS -->
            <div class="mb-3 mt-3 row">
                <label for="" class="col-sm-4 col-form-label">MABIGUS</label>
                <div class="col-sm-8">
                    <input type="text" class="p-2" id="" value="{{$pengurus->mabigus}}" name="mabigus">
                </div>
            </div>
            <!-- PEMBINA UTAMA -->
            <div class="mb-3 mt-3 row">
                <label for="" class="col-sm-4 col-form-label">PEMBINA UTAMA</label>
                <div class="col-sm-8">
                    <input type="text" class="p-2" id="" value="{{$pengurus->pembinaUtama}}" name="pembinaUtama">
                </div>
            </div>
            <!-- KETUA DEWAN PUTRA -->
            <div class="mb-3 mt-3 row">
                <label for="" class="col-sm-4 col-form-label">KETUA DEWAN PUTRA</label>
                <div class="col-sm-8">
                    <input type="text" class="p-2" id="" value="{{$pengurus->ketuaDewanPutra}}" name="ketuaDewanPutra">
                </div>
            </div>
            <!-- KETUA DEWAN PUTRI -->
            <div class="mb-3 mt-3 row">
                <label for="" class="col-sm-4 col-form-label">KETUA DEWAN PUTRI</label>
                <div class="col-sm-8">
                    <input type="text" class="p-2" id="" value="{{$pengurus->ketuaDewanPutri}}" name="ketuaDewanPutri">
                </div>
            </div>
            <!-- BENDHARA PUTRA -->
            <div class="mb-3 mt-3 row">
            <label for="" class="col-sm-4 col-form-label">BENDHARA PUTRA</label>
                <div class="col-sm-8">
                    <input type="text" class="p-2" id="" value="{{$pengurus->bendaharaPutra}}" name="bendaharaPutra">
                </div>
            </div>
            <!-- BENDHARA PUTRI -->
            <div class="mb-3 mt-3 row">
                <label for="" class="col-sm-4 col-form-label">BENDHARA PUTRI</label>
                <div class="col-sm-8">
                    <input type="text" class="p-2" id="" value="{{$pengurus->bendaharaPutri}}" name="bendaharaPutri">
                </div>
            </div>
            <!-- PEMANGKU ADAT PUTRA -->
            <div class="mb-3 mt-3 row">
                <label for="" class="col-sm-4 col-form-label">PEMANGKU ADAT PUTRA</label>
                <div class="col-sm-8">
                    <input type="text" class="p-2" id="" value="{{$pengurus->pemangkuAdatPutra}}" name="pemangkuAdatPutra">
                </div>
            </div>
            <!-- PEMANGKU ADAT PUTRI-->
            <div class="mb-3 mt-3 row">
                <label for="" class="col-sm-4 col-form-label">PEMANGKU ADAT PUTRI</label>
                <div class="col-sm-8">
                    <input type="text" class="p-2" id="" value="{{$pengurus->pemangkuAdatPutri}}" name="pemangkuAdatPutri">
                </div>
            </div>
            <!-- Button Save -->
            <button type="submit" value="submit" class="btn btn-primary mt-3">Simpan</button>
        </div>
    </form>
</div>
@endsection