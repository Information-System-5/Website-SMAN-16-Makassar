@extends('layout.adminLayout')

@section('main')
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Admin</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Prestasi</li>
                        </ol>
                        @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                {{session('success')}}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-xl">
                                <a href="{{url("/admin/prestasi/create")}}" class="btn btn-primary mb-3">Buat Prestasi</a>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tabel Prestasi
                            </div>
                            <div class="card-body table-responsive">
                                <table id="datatablesSimple" class="space">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul Prestasi</th>
                                            <th>Isi Prestasi</th>
                                            <th>Detail</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($datas as $data)
                                        <tr>
                                            <td>{{$loop -> iteration}}</td>
                                            <td>{{$data->title}}</td>
                                            <td>{!!Str::limit($data->body, 150, '...')!!}</td>
                                            <td><a href="{{url("/admin/prestasi/{$data->title}")}}">Lebih detail</a></td>
                                            <td>
                                                <form action="/admin/prestasi/{{$data->title}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="bg-transparent border-0" onclick="return confirm('Apakah anda yakin ingin menghapus artikel ini?')"><span class="fa fa-trash" color="red"></span></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">
                                                    Data Kosong
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
@endsection
