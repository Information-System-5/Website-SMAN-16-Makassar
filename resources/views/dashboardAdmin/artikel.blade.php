@extends('layout.adminLayout')

@section('main')
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Kode Artikel</th>
                                            <th>Judul Artikel</th>
                                            <th>Isi Artikel</th>
                                            <th>Penulis</th>
                                            <th>Gambar</th>
                                            <th>Waktu</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Kode Artikel</th>
                                            <th>Judul Artikel</th>
                                            <th>Isi Artikel</th>
                                            <th>Penulis</th>
                                            <th>Gambar</th>
                                            <th>Waktu</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>101010Rein</td>
                                            <td>Bicara Generasi Emas Tanpa Pemberdayaan Perempuan, Nyimah Aliah: Nonsense!</td>
                                            <td>Perempuan memiliki potensi yang sama untuk berkarya dan berdaya. Kodrat perempuan seharusnya bukan menjadi halangan, sebaliknya justru diperlukan untuk memperkuat sistem kemasyarakatan. Bukankah generasi hebat berawal dari seorang ibu?
                                                Ketua Umum Pengurus Pusat Srikandi Tenaga Pembangunan Sriwijaya (Srikandi TP Sriwijaya), Nyimas Aliah menyebut bahwa perempuan harus berdaya karena mereka punya potensi. Dia pun mendorong para perempuan untuk tidak menyerah menjadi perempuan sejati yang mandiri dan produktif.
                                                "Perempuan sekarang pendidikan sudah tinggi itu adalah aset kalau ada tantangan tantangan atau hambatan itu adalah tantangan terutama perempuan punya Casepro hamil, melahirkan, menstruasi. Perempuan harus menjadi tangguh harus bisa menghadapi semua itu. Yakinlah Allah pasti membukakan jalan, pasti menolong," kata Nyimas dalam wawancara, Selasa (19/10/2021).</td>
                                            <td>Reinhart</td>
                                            <td>GAMBARRRRRRRRR</td>
                                            <td>2010/10/10</td>
                                        </tr>
                                        <tr>
                                            <td>110425Arti</td>
                                            <td>Hari Santri Peran Santri bagi Negeri</td>
                                            <td>Peringatan Hari Santri Nasional (HSN) berawal pada tanggal 22 oktober 2015 dengan dasar Keputusan Presiden Nomor 22 Tahun 2015 dan terus diperingati hingga kini setiap tanggal 22 oktober. Lalu apakah yang mendasari peringatan hari santri ini? dan apakah peran santri ini sangat penting sampai-sampai harus siperingati adanya hari santri.
                                                Alasan diperingatinya hari santri nasional yaitu karena peran dan jasa santri pada negeri ini dari dulu hingga sekarang yang tak pernah surut. Mulai dari zaman penjajahan dan perjuangan para ulama dan santri turut berperan aktif dalam membela tanah air ini, salah satu contoh yaitu resolusi jihad yang diserukan oleh KH Hasyim Asyari yang membuat semangat juang bangsa Indonesia khususnya para santri untuk melawan penjajah kian membara. Resolusi jihad tersebut dikemukakakn oleh KH Hasyim Asyari pada 22 Oktober 1945 hal inilah yang menjadi dasar mengapa hari santri diperingati pada tanggal 22 oktober.
                                                Resolusi jihad merupakan salah satu bukti peran penting pesantren untuk negeri. Bahwa kyai, santri, dan pesantren turut menjadi elemen penyusun berdirinya negeri ini. Sejak awal, pesantren menjadi penggerak dan pelopor untuk mengusir penjajah. Resolusi jihad tetaplah menjadi resolusi, sebuah sejarah yang harus dan tetap diingat. 
                                                Jadi perjuangan dalam resolusi jihad di masa ini bukan lagi mengangkat bambu runcing tetapi menghadapi sebuah persoalan kontemporer. Persoalan baru akan terus tumbuh seiring berjalannya waktu, pastinya memerlukan solusi untuk memecahkan persoalan tersebut. Peran santri dalam hal ini akan terus dibutuhkan seiring dengan perkembangan zaman yang semakin jauh dari hakikat agama</td>
                                            <td>Artia</td>
                                            <td>GAMBARRRRRRRRR</td>
                                            <td>2011/04/25</td>
                                        </tr>
                                        <tr>
                                            <td>120331Will</td>
                                            <td>Arti Penting Kemenangan Timnas Garuda U-23 atas Tajikistan</td>
                                            <td>Kemenangan Timnas Indonesia U-23 atas tuan rumah Tajikistan memiliki arti tersendiri bagi moral tim. Walaupun itu hanya laga uji coba.
                                                Skuad Garuda saat itu mencetak dua gol yang sangat mengesankan saat menang 2-1 dalam laga uji coba yang berlangsung di Republican Central Stadium, Dushanbe, Selasa (19/10). 
                                                Meski tertinggal lebih dulu pada laga tersebut, ketika laga baru berlangsung 5 menit, tuan rumah berhasil membobol gawang Ernando Ari Sutaryadi melalui gol yang dicetak Mabatshoev Shervoni.</td>
                                            <td>William</td>
                                            <td>GAMBARRRRRRRRR</td>
                                            <td>2012/03/31</td>
                                        </tr>
                                        <tr>
                                            <td>100101Bril</td>
                                            <td>Potensi Perpustakaan Meningkatkan Minat Baca di Indonesia</td>
                                            <td>Keberadaan perpustakaan tidak dapat dipisahkan dari bagian sekolah atau kampus. Perpustakaan telah dan akan terus memiliki peran yang sangat penting dalam berjalannya aktivitas akademik di suatu lembaga pendidikan. Perpustakaan memiliki kedudukan sebagai tempat sentral karena melayani sebagian fungsi sekolah atau kampus, baik pelayanan yang bersifat mendasar maupun kompleks. Perpustakaan merupakan salah satu instrumen pendidikan yang menyangga para pelajar dalam aktivitas pembelajarannya. Namun sayangnya, keberadaan perpustakaan ini seringkali hanya dianggap sebagai gudang buku.
                                                Rendahnya minat baca di Indonesia menyebabkan perpustakaan hanya dihadiri oleh beberapa pengunjung saja. Semakin berkembangnya teknologi juga memengaruhi jumlah pengunjung di perpustakaan. Terlebih di masa pandemi ini, orang-orang lebih suka memanfaatkan teknologi yang berkembang dengan membaca melalui media handphone, laptop, dan sebagainya. Keberadaan perpustakaan pun seakan terhapuskan. Hal tersebut tentu cukup memprihatinkan dikarenakan secara tak langsung menjadikan masyarakat sangat bergantung pada teknologi yang ada, meskipun dalam hal-hal kecil, seperti membaca. Untuk mengatasi hal itu, adanya perpustakaan seharusnya dimanfaatkan dan dijadikan potensi untuk meningkatkan minat baca di Indonesia.
                                                Perpustakaan sudah saatnya dipandang sebagai kaki dari setiap aktivitas akademik. Hal itu dikarenakan perpustakaan memiliki banyak fungsi yang membantu pelajar agar dapat belajar secara maksimal. Selain itu, perpustakaan dapat dijadikan sebagai tempat alternatif untuk bersantai, mengisi waktu luang, dan mengerjakan tugas. Berubahnya metode pembelajaran di sekolah yang konvensional menjadi metode pembelajaran yang mengharuskan peserta didik untuk belajar lebih aktif dan mandiri juga secara tidak langsung mendukung dari fungsi perpustakaan. Metode pembelajaran di sekolah dan perguruan tinggi saat ini menekankan para pelajar agar lebih aktif untuk mencari sumber ilmu dan informasi secara mandiri. Pencarian ilmu dan informasi ini dalam prosesnya mengharuskan pelajar lebih banyak membaca sumber ilmu pengetahuan. Di sinilah peran dari perpustakaan bekerja, di mana perpustakaan menyediakan sumber-sumber ilmu pengetahuan dalam berbagai jenis buku yang ada. Akan tetapi, peran ini agaknya masih belum dijalankan secara maksimal oleh perpustakaan-perpustakaan di Indonesia.</td>
                                            <td>Brili</td>
                                            <td>GAMBARRRRRRRRR</td>
                                            <td>2010/01/01</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
@endsection