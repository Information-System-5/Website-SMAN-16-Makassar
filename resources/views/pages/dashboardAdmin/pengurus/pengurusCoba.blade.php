@extends('layout.adminLayout')

@section('main')
    <div class="container">
        <!-- MABIGUS -->
        <div class="mb-3 mt-3 row">
        <label for="" class="col-sm-4 col-form-label">MABIGUS</label>
        <div class="col-sm-8">
            <input type="text" class="p-2" id="" value="{{$pengurus[0]->mabigus}}">
        </div>
        </div>
        <!-- PEMBINA UTAMA -->
        <div class="mb-3 mt-3 row">
        <label for="" class="col-sm-4 col-form-label">PEMBINA UTAMA</label>
        <div class="col-sm-8">
            <input type="text" class="p-2" id="" value="JANE DOE">
        </div>
        </div>
        <!-- KETUA DEWAN PUTRA -->
        <div class="mb-3 mt-3 row">
        <label for="" class="col-sm-4 col-form-label">KETUA DEWAN PUTRA</label>
        <div class="col-sm-8">
            <input type="text" class="p-2" id="" value="JANE DOE">
        </div>
        </div>
        <!-- KETUA DEWAN PUTRI -->
        <div class="mb-3 mt-3 row">
        <label for="" class="col-sm-4 col-form-label">KETUA DEWAN PUTRI</label>
        <div class="col-sm-8">
            <input type="text" class="p-2" id="" value="JANE DOE">
        </div>
        </div>
        <!-- BENDHARA PUTRA -->
        <div class="mb-3 mt-3 row">
        <label for="" class="col-sm-4 col-form-label">BENDHARA PUTRA</label>
        <div class="col-sm-8">
            <input type="text" class="p-2" id="" value="JANE DOE">
        </div>
        </div>
        <!-- BENDHARA PUTRI -->
        <div class="mb-3 mt-3 row">
        <label for="" class="col-sm-4 col-form-label">BENDHARA PUTRI</label>
        <div class="col-sm-8">
            <input type="text" class="p-2" id="" value="JANE DOE">
        </div>
        </div>
        <!-- PEMANGKU ADAT PUTRA -->
        <div class="mb-3 mt-3 row">
        <label for="" class="col-sm-4 col-form-label">PEMANGKU ADAT PUTRA</label>
        <div class="col-sm-8">
            <input type="text" class="p-2" id="" value="JANE DOE">
        </div>
        </div>
        <!-- PEMANGKU ADAT PUTRI-->
        <div class="mb-3 mt-3 row">
        <label for="" class="col-sm-4 col-form-label">PEMANGKU ADAT PUTRI</label>
        <div class="col-sm-8">
            <input type="text" class="p-2" id="" value="JANE DOE">
        </div>
        </div>

        <!-- Button Save -->
        <button type="button" class="btn btn-primary mt-3">Simpan</button>
    </div>
@endsection