@extends('layout.adminLayout')

@section('main')
                    <div class="container mt-3">
                        <div class="dashboard-heading">
                            <h2 class="dashboard-title">
                                Detail Pendaftar
                            </h2>
                        </div>
                    </div>

                    <div class="detail-pendaftar">
                        <div class="container table-responsive">

                            <table class=" table">
                                <tr>
                                    <th width="200px">Nama Lengkap</th>
                                    <td>{{$pendaftar->namaLengkap}}</td>
                                </tr>
                                <tr>
                                    <th width="200px">Kelas</th>
                                    <td>{{$pendaftar->kelas}}</td>
                                </tr>
                                <tr>
                                    <th width="200px">Jenis Kelamin</th>
                                    <td>{{$pendaftar->jenisKelamin}}</td>
                                </tr>
                                <tr>
                                    <th width="200px">Tempat Lahir</th>
                                    <td>{{$pendaftar->tempatLahir}}</td>
                                </tr>
                                <tr>
                                    <th width="200px">Tanggal Lahir</th>
                                    <td>{{$pendaftar->tanggalLahir}}</td>
                                </tr>
                                <tr>
                                    <th width="200px">Alamat Rumah</th>
                                    <td>{{$pendaftar->alamatRumah}}</td>
                                </tr>
                                <tr>
                                    <th width="200px">Hobi</th>
                                    <td>{{$pendaftar->hobi}}</td>
                                </tr>
                                <tr>
                                    <th width="200px">Email</th>
                                    <td>{{$pendaftar->email}}</td>
                                </tr>
                                <tr>
                                    <th width="200px">No.Telefon(WA)</th>
                                    <td>{{$pendaftar->nomorTelepon}}</td>
                                </tr>
                                <tr>
                                    <th width="200px">Pengalaman Organisasi</th>
                                    <td>{{$pendaftar->pengalamanOrganisasi}}</td>
                                </tr>
                                <tr>
                                    <th width="200px">Alasan MAsuk Organisasi</th>
                                    <td>{{$pendaftar->alasanMasukOrganisasi}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
@endsection