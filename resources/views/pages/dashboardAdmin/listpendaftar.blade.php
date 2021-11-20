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
                                            <th>Checkbox</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Nomor Telepon</th>
                                            <th>Detail</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr align="center">
                                            <td><input type="checkbox"></td>
                                            <td>Tiger Nixon</td>
                                            <td>lalala@gmai.com</td>
                                            <td>086493939209</td>
                                            <td><a href="{{url('/detailpendaftar')}}">Lebih detail</a></td>
                                            <td><a href=""><i class="fa fa-trash" color="red"></i></a></td>
                                        </tr>
                                        <tr align="center">
                                            <td><input type="checkbox"></td>
                                            <td>Tiger Nixon</td>
                                            <td>lalala@gmai.com</td>
                                            <td>086493939209</td>
                                            <td><a href="{{url('/detailpendaftar')}}">Lebih detail</a></td>
                                            <td><a href=""><i class="fa fa-trash" color="red"></i></a></td>
                                        </tr>
                                        <tr align="center">
                                            <td><input type="checkbox"></td>
                                            <td>Tiger Nixon</td>
                                            <td>lalala@gmai.com</td>
                                            <td>086493939209</td>
                                            <td><a href="{{url('/detailpendaftar')}}">Lebih detail</a></td>
                                            <td><a href=""><i class="fa fa-trash" color="red"></i></a></td>
                                        </tr>
                                        <tr align="center">
                                            <td><input type="checkbox"></td>
                                            <td>Tiger Nixon</td>
                                            <td>lalala@gmai.com</td>
                                            <td>086493939209</td>
                                            <td><a href="{{url('/detailpendaftar')}}">Lebih detail</a></td>
                                            <td><a href=""><i class="fa fa-trash" color="red"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
@endsection