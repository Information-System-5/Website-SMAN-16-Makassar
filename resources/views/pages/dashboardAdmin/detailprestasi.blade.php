@extends('layout.adminLayout')

@section('main')
                    <div class="container mt-3">
                        <div class="dashboard-heading">
                            <h2 class="dashboard-title">
                                Detail Artikel
                            </h2>
                            <form action="">
                                <button type="submit" class="btn btn-primary mb-3">Edit</button>
                            </form>
                        </div>
                    </div>

                    <div class="detail-artikel">
                        <div class="container table-responsive">
                            <table class=" table">
                                <tr>
                                    <th width="200px">Id</th>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <th width="200px">Judul Prestasi</th>
                                    <td>Juara satu sepak bola tingkat kecamatan</td>
                                </tr>
                                <tr>
                                    <th width="200px">Isi Prestasi</th>
                                    <td>Tim NAGA dari pramuka SMAN 16 makassar memperoleh kemenangan setelah melawan Tim MACAN dari SMAN 17 Makassar dengan skor 100-0.9</td>
                                </tr>
                            </table>
                        </div>
                    </div>


@endsection