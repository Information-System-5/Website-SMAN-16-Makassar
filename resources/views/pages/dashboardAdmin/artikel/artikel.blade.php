@extends('layout.adminLayout')

@section('main')
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Admin</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Artikel</li>
                        </ol>
                        @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                {{session('success')}}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-xl">
                                <a href="{{url("/admin/artikel/create")}}" class="btn btn-primary mb-3">Buat Artikel</a>
                            </div>
                            <div class="col-md-4">
                                <form action="/admin/prestasi">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Pencarian" name="search" value="{{request('search')}}">
                                        <div class="input-group-append">
                                          <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tabel Artikel
                            </div>
                            <div class="card-body table-responsive">
                                <table id="datatablesSimple" class="space">
                                    <thead>
                                        <tr>
                                            {{-- <th>No.</th> --}}
                                            <th>Judul Artikel</th>
                                            <th>Isi Artikel</th>
                                            <th>Penulis</th>
                                            {{-- <th>Gambar</th> --}}
                                            <th>Waktu</th>
                                            <th>Detail</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>                                    
                                    <tbody>
                                        @forelse ($datas as $data)
                                            <tr>
                                                {{-- <td>{{$loop -> iteration}}</td> --}}
                                                {{-- <td class="judul_artikel">{{$data -> judul_artikel}}</td> --}}
                                                <td class="judul_artikel">{!!Str::limit($data -> judul_artikel, 50, '...')!!}</td>
                                                {{-- <td class="block-with-text">{!!$data -> isi_artikel!!}</td> --}}
                                                <td>{!!Str::limit($data->isi_artikel, 40, '...')!!}</td>
                                                <td>{{$data -> penulis_artikel}}</td>
                                                <td>{{$data -> waktu_dibuat_artikel}}</td>
                                                <td><a href="{{url("/admin/artikel/{$data->judul_artikel}")}}">Lebih detail</a></td>
                                                <td class="text-center">
                                                    <form action="/admin/artikel/{{$data -> judul_artikel}}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="bg-transparent border-0" onclick="return confirm('Apakah anda yakin ingin menghapus artikel ini?')"><span class="fa fa-trash" color="red"></span></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">
                                                    Tidak ada data
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                <div class="container-button">
                                    <div class=" text-center mt-4 ">
                                        {{$datas -> links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
@endsection

@push('prepend-style')
<style>
    td, th { padding-right: 10px; }
</style>
@endpush

