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
                                    <form class="px-4">
                                        <div class="mt-3 mb-3">
                                          <label for="judulPrestasi" class="form-label">Judul Prestasi</label>
                                          <input type="text" class="form-control" id="judulPrestasi">
                                          {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3">
                                          <label for="isiPrestasi" class="form-label">Isi Prestasi</label>
                                          <textarea class="form-control" id="isiPrestasi"></textarea>
                                        </div>                                        
                                        <button type="submit" class="btn btn-primary mb-3">Submit</button>
                                      </form>
                                </div>
                            </div>
                            {{-- <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div> --}}
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
                                            <th>Id</th>
                                            <th>Judul Prestasi</th>
                                            <th>Isi Prestasi</th>
                                            <th>Detail</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Juara satu sepak bola tingkat kecamatan</td>
                                            <td class="block-with-text">Tim NAGA dari pramuka SMAN 16 makassar memperoleh kemenangan setelah melawan Tim MACAN dari SMAN 17 Makassar dengan skor 100-0.9</td>
                                            <td><a href="{{url('/detailprestasi')}}">Lebih detail</a></td>
                                            <td><a href=""><i class="fa fa-trash" color="red"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Juara tiga harapan pramuka festival</td>
                                            <td class="block-with-text">Pramuka dari SMAN 16Makassar memperoleh juara tiga harapan dari kegiatan Pramuka Festival</td>
                                            <td><a href="{{url('/detailprestasi')}}">Lebih detail</a></td>
                                            <td><a href=""><i class="fa fa-trash" color="red"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Juara dua lomba menari balet </td>
                                            <td class="block-with-text">Tim NAGA dari pramuka SMAN 16 makassar memperoleh juara dua lomba menari balet dalam ajang Balerina Cup Indonesia</td>
                                            <td><a href="{{url('/detailprestasi')}}">Lebih detail</a></td>
                                            <td><a href=""><i class="fa fa-trash" color="red"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('dist/css/articel.css') }}">
@endpush