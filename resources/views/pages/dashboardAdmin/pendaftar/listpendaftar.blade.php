@extends('layout.adminLayout')

@section('main')
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">List Pendaftar</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Paraga Scout</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Pendaftar Paraga Scout
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" cellspacing="0" width="100%">
                                    <thead>
                                        <tr align="center">
                                            <th>No</th>
                                            <th>Checkbox</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Nomor Telepon</th>
                                            <th>Detail</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pendaftar as $pdftr)
                                            <tr>
                                                <th scope="row" align="center">{{$loop->iteration}}</th>
                                                <td align="center"><input type="checkbox"></td>
                                                <td>{{$pdftr->namaLengkap}}</td>
                                                <td>{{$pdftr->email}}</td>
                                                <td>{{$pdftr->nomorTelepon}}</td>
                                                <td><a href="/admin/detailpendaftar/{{$pdftr->id}}">Lebih detail</a></td>
                                                <td><form action="/admin/listpendaftar/{{$pdftr->id}}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button><div class="fa fa-trash" color="red"></div></button>
                                                </form></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
@endsection