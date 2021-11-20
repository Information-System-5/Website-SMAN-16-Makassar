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
                                    <th width="200px">Kode Artikel</th>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <th width="200px">Nama Penulis</th>
                                    <td>Reinhart</td>
                                </tr>
                                <tr>
                                    <th width="200px">Judul Artikel</th>
                                    <td>Bicara Generasi Emas Tanpa Pemberdayaan Perempuan, Nyimah Aliah: Nonsense!</td>
                                </tr>
                                <tr>
                                    <th width="200px">Waktu</th>
                                    <td>2010/10/10</td>
                                </tr>
                                <tr>
                                    <th width="200px">Gambar</th>
                                    <td>Gambarrrrr</td>
                                </tr>
                                <tr>
                                    <th width="200px">Isi Artikel</th>
                                    <td>Perempuan memiliki potensi yang sama untuk berkarya dan berdaya. Kodrat perempuan seharusnya bukan menjadi halangan, sebaliknya justru diperlukan untuk memperkuat sistem kemasyarakatan. Bukankah generasi hebat berawal dari seorang ibu?
                                        Ketua Umum Pengurus Pusat Srikandi Tenaga Pembangunan Sriwijaya (Srikandi TP Sriwijaya), Nyimas Aliah menyebut bahwa perempuan harus berdaya karena mereka punya potensi. Dia pun mendorong para perempuan untuk tidak menyerah menjadi perempuan sejati yang mandiri dan produktif.
                                        "Perempuan sekarang pendidikan sudah tinggi itu adalah aset kalau ada tantangan tantangan atau hambatan itu adalah tantangan terutama perempuan punya Casepro hamil, melahirkan, menstruasi. Perempuan harus menjadi tangguh harus bisa menghadapi semua itu. Yakinlah Allah pasti membukakan jalan, pasti menolong," kata Nyimas dalam wawancara, Selasa (19/10/2021).</td>
                                </tr>
                            </table>
                        </div>
                    </div>


@endsection