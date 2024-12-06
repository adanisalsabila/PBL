<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <script src="script/script.js"></script>
    <title>PolinemaTertib</title>
</head>

<body style="background-color: #483D8B;">
    <div class="container-fluid">
        <div class="row flex-nowrap">

            <!-- Sidebar -->
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 sidebarColor">
                <div
                    class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 position-fixed">
                    <div class="d-flex align-items-center mb-3">
                        <img src="/myWeb/PBL/frontend/img/logoJti.svg" alt="Logo JTI" class="me-2"
                            style="width: 60px; height: 60px;">
                        <h1 class="fs-4 text-white m-0 d-none d-sm-inline">Polinema<br>Tertib</h1>
                    </div>

                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item d-flex align-items-center mt-2 mb-2">
                            <a href="Dashboard.php" class="nav-link align-middle"
                                onmouseover="this.style.backgroundColor='rgba(255,255,255,0.1)';"
                                onmouseout="this.style.backgroundColor='transparent';">
                                <img src="/myWeb/PBL/frontend/img/home.svg" alt="Home Icon" class="nav-icon me-2"
                                    style="filter:invert(100%); width: 25px; height: 25px;">

                                <span class="ms-1 d-none d-sm-inline text-white"><Strong>Beranda</Strong></span>
                            </a>
                        </li>
                        <li class="nav-item d-flex align-items-center mt-2 mb-2">
                            <a href="Formulir.php" class="nav-link align-middle"
                                onmouseover="this.style.backgroundColor='rgba(255,255,255,0.1)';"
                                onmouseout="this.style.backgroundColor='transparent';">
                                <img src="/myWeb/PBL/frontend/img/teacher.svg" alt="" class="nav-icon me-2"
                                    style="filter:invert(100%); width: 25px; height: 25px;">
                                <span class="ms-1 d-none d-sm-inline text-white"><strong>Formulir</strong></span>
                            </a>
                        </li>
                        <li class="nav-item d-flex align-items-center mt-2 mb-2">
                            <a href="PolinemaToday.php" class="nav-link align-middle"
                                onmouseover="this.style.backgroundColor='rgba(255,255,255,0.1)';"
                                onmouseout="this.style.backgroundColor='transparent';">
                                <img src="/myWeb/PBL/frontend/img/news.svg" alt="" class="nav-icon me-2"
                                    style="filter:invert(100%); width: 25px; height: 25px;">
                                <span class="ms-1 d-none d-sm-inline text-white"><strong>PolinemaToday</strong></span>
                            </a>
                        </li>
                        <li class="nav-item d-flex align-items-center mt-2 mb-2">
                            <a href="Pelanggaran.php" class="nav-link align-middle bg-white">
                                <img src="/myWeb/PBL/frontend/img/illegal.svg" alt="" class="nav-icon me-2"
                                    style="filter: invert(26%) sepia(10%) saturate(5129%) hue-rotate(215deg) brightness(91%) contrast(91%); width: 25px; height: 25px;">

                                <span class="ms-1 d-none d-sm-inline" style="color: #483D8B;"><strong>Pelanggaran</strong></span>
                            </a>
                        </li>
                        <li class="nav-item d-flex align-items-center mt-2 mb-2">
                            <a href="Profile.php" class="nav-link align-middle"
                                onmouseover="this.style.backgroundColor='rgba(255,255,255,0.1)';"
                                onmouseout="this.style.backgroundColor='transparent';">
                                <img src="/myWeb/PBL/frontend/img/user.svg" alt="" class="nav-icon me-2"
                                    style="filter:invert(100%); width: 25px; height: 25px;">
                                <span class="ms-1 d-none d-sm-inline text-white"
                                    ><strong>Profile</strong></span>
                            </a>
                        </li>
                        <li class="nav-item d-flex align-items-center mt-2 mb-2">
                            <a href="Notifikasi.php" class="nav-link align-middle"
                                onmouseover="this.style.backgroundColor='rgba(255,255,255,0.1)';"
                                onmouseout="this.style.backgroundColor='transparent';">
                                <img src="/myWeb/PBL/frontend/img/activity.svg" alt="" class="nav-icon me-2"
                                    style="filter:invert(100%); width: 25px; height: 25px;">
                                <span class="ms-1 d-none d-sm-inline text-white"><strong>Notifikasi</strong></span>
                            </a>
                        </li>
                        <li class="nav-item d-flex align-items-center mt-2 mb-2">
                            <a href="/myWeb/PBL/frontend/Login.php" class="nav-link align-middle"
                                onmouseover="this.style.backgroundColor='rgba(255,255,255,0.1)';"
                                onmouseout="this.style.backgroundColor='transparent';">
                                <img src="/myWeb/PBL/frontend/img/logout.png" alt="" class="nav-icon me-2"
                                    style="filter:invert(100%); width: 25px; height: 25px;">
                                <span class="ms-1 d-none d-sm-inline text-white"><strong>Logout</strong></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col py-3 min-vh-100" style="background-color: #e9e6fd;" id="kodeEtik">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 style="color: #483D8B"><strong>Kode Etik Mahasiswa</strong></h1>
                    <div class="d-flex flex-column" style="color: #483D8B;">
                        <h5>Nama Dosen</h5>
                        <p>Dosen</p>
                    </div>
                </div>

                <!-- isi -->
                <div class="col-md-8">
                    <!-- kode Etik -->
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header text-white" style="background-color: #483D8B;">
                            <h5 class="mb-0">Etika Berkomunikasi Secara Langsung dengan Dosen</h5>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>Bertemu dengan dosen pada saat jam kerja di lingkungan kampus Politeknik Negeri
                                    Malang.</li>
                                <li>Jika di luar waktu tersebut, harus ada kesepakatan terlebih dahulu.</li>
                                <li>Pastikan bertemu dosen pada kondisi yang tepat.</li>
                                <li>Sebelum bertemu, pastikan ponsel dalam kondisi "silent" atau "flight mode".</li>
                                <li>Ketuk pintu ruangan dan ucapkan salam sebelum masuk.</li>
                                <li>Jika dipersilakan masuk, sampaikan tujuan dengan jelas dan urut.</li>
                                <li>Setelah selesai, ucapkan terima kasih dan salam.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header text-white" style="background-color: #483D8B;">
                            <h5 class="mb-0">Etika Mengirim Pesan Kepada Dosen</h5>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>Kirim pesan pada hari dan jam kerja.</li>
                                <li>Gunakan Bahasa Indonesia yang baik dan benar, bukan bahasa gaul.</li>
                                <li>Awali pesan dengan salam yang sesuai.</li>
                                <li>Sertakan identitas (Nama, Kelas, dan Program Studi).</li>
                                <li>Tulis keperluan secara jelas dan singkat.</li>
                                <li>Ucapkan terima kasih dan tutup dengan salam.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header text-white" style="background-color: #483D8B;">
                            <h5 class="mb-0">Etika Berpakaian Mahasiswa Laki-laki</h5>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>Memakai baju yang sopan, rapi, dan bersih.</li>
                                <li>Gunakan kemeja atau kaos berkerah.</li>
                                <li>Memakai celana panjang yang rapi dan formal, bukan jeans robek-robek.</li>
                                <li>Memakai sepatu, bukan sandal atau selop.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header text-white" style="background-color: #483D8B;">
                            <h5 class="mb-0">Etika Berpakaian Mahasiswa Perempuan</h5>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>Memakai baju yang sopan, rapi, dan bersih.</li>
                                <li>Tidak ketat, terbuka, atau transparan.</li>
                                <li>Gunakan kemeja atau kaos berkerah.</li>
                                <li>Memakai celana panjang atau rok yang sopan dan tidak transparan.</li>
                                <li>Memakai sepatu, bukan sandal atau selop.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header text-white" style="background-color: #483D8B;">
                            <h5 class="mb-0">Etika di Dalam Kelas</h5>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>Sebelum dosen masuk, pastikan whiteboard bersih.</li>
                                <li>Setelah perkuliahan, pastikan whiteboard dan proyektor dalam kondisi mati.</li>
                                <li>Tidak memakai topi atau sejenisnya.</li>
                                <li>Dilarang makan dan minum di dalam kelas.</li>
                                <li>Gunakan seragam di hari Senin, Selasa, dan Jumat.</li>
                                <li>Pakai baju bebas sesuai aturan di hari Rabu dan Kamis.</li>
                                <li>Matikan ponsel selama perkuliahan.</li>
                                <li>Bicara dan bertingkah laku sopan selama perkuliahan.</li>
                                <li>Letakkan tas di bawah atau di samping meja.</li>
                                <li>Minta izin jika akan keluar kelas.</li>
                                <li>Persilakan dosen keluar lebih dahulu saat perkuliahan berakhir.</li>
                                <li>Jangan gaduh saat menunggu atau selesai perkuliahan.</li>
                            </ul>
                        </div>
                    </div>
                    <button onclick="showKlasifikasi()" class="btn text-white"
                        style="background-color: #483D8B;">Selanjutnya</button>
                        <a href="Formulir.php" class="btn text-white" style="background-color: #483D8B;">Cetak Surat</a>
                </div>
            </div>
            
            <!-- Klasifikasi -->
            <div class="col py-3 min-vh-100" style="background-color: #e9e6fd; display: none;" id="klasifikasi">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 style="color: #483D8B"><strong>klasifikasi Pelanggaran Tata Tertib</strong></h1>
                    <div class="d-flex flex-column" style="color: #483D8B;">
                        <h5>Nama Admin</h5>
                        <p>Admin</p>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header text-white" style="background-color: #483D8B;">
                        <h5 class="mb-0">Pelanggaran Tingkat V</h5>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Berkomunikasi dengan tidak sopan, baik tertulis atau tidak tertulis kepada mahasiswa,
                                dosen, karyawan, atau orang lain</li>
                        </ul>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header text-white" style="background-color: #483D8B;">
                        <h5 class="mb-0">Pelanggaran Tingkat IV</h5>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Berbusana tidak sopan dan tidak rapi. Yaitu antara lain adalah: berpakaian ketat,
                                transparan, memakai t-shirt (baju kaos tidak berkerah), tank top, hipster, you can see,
                                rok mini, backless, celana pendek, celana tiga per empat, legging, model celana atau
                                baju koyak, sandal, sepatu sandal di lingkungan kampus</li>
                            <li>Mahasiswa laki-laki berambut tidak rapi, gondrong yaitu panjang rambutnya melewati batas
                                alis mata di bagian depan, telinga di bagian samping atau menyentuh kerah baju di bagian
                                leher</li>
                            <li>Mahasiswa berambut dengan model punk, dicat selain hitam dan/atau skinned.</li>
                            <li>Makan, atau minum di dalam ruang kuliah/ laboratorium/ bengkel.</li>
                            <li>Melanggar peraturan/ ketentuan yang berlaku di Polinema baik di Jurusan/ Program Studi
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header text-white" style="background-color: #483D8B;">
                        <h5 class="mb-0">Pelanggaran Tingkat III</h5>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Tidak menjaga kebersihan di seluruh area Polinema</li>
                            <li>Membuat kegaduhan yang mengganggu pelaksanaan perkuliahan atau praktikum yang sedang
                                berlangsung.</li>
                            <li>Merokok di luar area kawasan merokok</li>
                            <li>Bermain kartu, game online di area kampus</li>
                            <li>Mengotori atau mencoret-coret meja, kursi, tembok, dan lain-lain di lingkungan Polinema
                            </li>
                            <li>Bertingkah laku kasar atau tidak sopan kepada mahasiswa, dosen, dan/atau karyawan.</li>
                            <li>Merusak sarana dan prasarana yang ada di area Polinema</li>
                        </ul>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header text-white" style="background-color: #483D8B;">
                        <h5 class="mb-0">Pelanggaran Tingkat II</h5>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Tidak menjaga ketertiban dan keamanan di seluruh area Polinema (misalnya: parkir tidak
                                pada tempatnya, konvoi selebrasi wisuda dll)</li>
                            <li>Melakukan pengotoran/ pengrusakan barang milik orang lain termasuk milik Politeknik
                                Negeri Malang</li>
                            <li>Mengakses materi pornografi di kelas atau area kampus</li>
                            <li>Membawa dan/atau menggunakan senjata tajam dan/atau senjata api untuk hal kriminal</li>
                            <li>Melakukan perkelahian, serta membentuk geng/ kelompok yang bertujuan negatif.</li>
                            <li>Melakukan kegiatan politik praktis di dalam kampus</li>
                            <li>Melakukan tindakan kekerasan atau perkelahian di dalam kampus.</li>
                            <li>Melakukan penyalahgunaan identitas untuk perbuatan negatif</li>
                            <li>Mengancam, baik tertulis atau tidak tertulis kepada mahasiswa, dosen, dan/atau karyawan.
                            </li>
                            <li>Mencuri dalam bentuk apapun</li>
                            <li>Melakukan kecurangan dalam bidang akademik, administratif, dan keuangan.</li>
                            <li>Melakukan pemerasan dan/atau penipuan</li>
                            <li>Melakukan pelecehan dan/atau tindakan asusila dalam segala bentuk di dalam dan di luar
                                kampus</li>
                            <li>Berjudi, mengkonsumsi minum-minuman keras, dan/ atau bermabuk-mabukan di lingkungan dan
                                di luar lingkungan Kampus Polinema</li>
                            <li>Mengikuti organisasi dan atau menyebarkan faham-faham yang dilarang oleh Pemerintah.
                            </li>
                            <li>Melakukan pemalsuan data / dokumen / tanda tangan.</li>
                            <li>Melakukan plagiasi (copy paste) dalam tugas-tugas atau karya ilmiah</li>
                        </ul>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header text-white" style="background-color: #483D8B;">
                        <h5 class="mb-0">Pelanggaran Tingkat I</h5>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Tidak menjaga nama baik Polinema di masyarakat dan/ atau mencemarkan nama baik Polinema
                                melalui media apapun</li>
                            <li>Melakukan kegiatan atau sejenisnya yang dapat menurunkan kehormatan atau martabat
                                Negara, Bangsa dan Polinema.</li>
                            <li>Menggunakan barang-barang psikotropika dan/ atau zat-zat Adiktif lainnya</li>
                            <li>Mengedarkan serta menjual barang-barang psikotropika dan/ atau zat-zat Adiktif lainnya
                            </li>
                            <li>Terlibat dalam tindakan kriminal dan dinyatakan bersalah oleh Pengadilan</li>
                        </ul>
                    </div>
                </div>
                <button onclick="showKodeEtik()" class="btn text-white" style="background-color: #483D8B;">kembali</button>
                <button onclick="showSanksi()" class="btn text-white" style="background-color: #483D8B;">Selanjutnya</button>
                <a href="Formulir.php" class="btn text-white" style="background-color: #483D8B;">Cetak Surat</a>

            </div> 

            <!-- Sanksi -->
            <div class="col py-3 min-vh-100" style="background-color: #e9e6fd; display: none;" id="sanksi">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 style="color: #483D8B"><strong>Sanksi Pelanggaran</strong></h1>
                    <div class="d-flex flex-column" style="color: #483D8B;">
                        <h5>Nama Admin</h5>
                        <p>Admin</p>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header text-white" style="background-color: #483D8B;">
                        <h5 class="mb-0">Klasifikasi dan Prosedur Kenaikan Tingkat Pelanggaran</h5>
                    </div>
                    <div class="card-body">
                        <p>Perbuatan atau tindakan pelanggaran Tata Tertib Kehidupan Kampus akan diakumulasikan untuk
                            setiap kategori pelanggaran dan berlaku sepanjang mahasiswa masih tercatat sebagai mahasiswa
                            di Polinema.</p>
                        <p>Adapun klasifikasi dan prosedur kenaikan tingkat pelanggaran adalah sebagai berikut:</p>
                        <ul>
                            <li><strong>Pelanggaran Tingkat V</strong><br>
                                Apabila pelanggaran tingkat V dilakukan sebanyak 3 (tiga) kali, maka klasifikasi
                                pelanggaran tersebut akan ditingkatkan menjadi pelanggaran tingkat IV.
                            </li>
                            <li><strong>Pelanggaran Tingkat IV</strong><br>
                                Apabila pelanggaran tingkat IV dilakukan sebanyak 3 (tiga) kali, maka klasifikasi
                                pelanggaran tersebut akan ditingkatkan menjadi pelanggaran tingkat III.
                            </li>
                            <li><strong>Pelanggaran Tingkat III</strong><br>
                                Apabila pelanggaran tingkat III dilakukan sebanyak 3 (tiga) kali, maka klasifikasi
                                pelanggaran tersebut akan ditingkatkan menjadi pelanggaran tingkat II.
                            </li>
                            <li><strong>Pelanggaran Tingkat II</strong><br>
                                Apabila pelanggaran tingkat II dilakukan sebanyak 3 (tiga) kali, maka klasifikasi
                                pelanggaran tersebut akan ditingkatkan menjadi pelanggaran tingkat I.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header text-white" style="background-color: #483D8B;">
                        <h5 class="mb-0">Sanksi Berdasarkan Tingkat Pelanggaran</h5>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><strong>Pelanggaran Tingkat V</strong><br>
                                Sanksi atas pelanggaran tingkat V yang dilakukan oleh mahasiswa berupa:
                                <ul>
                                    <li>Teguran lisan disertai dengan surat pernyataan untuk tidak mengulangi perbuatan
                                        tersebut, yang dibubuhi materai, dan ditandatangani oleh mahasiswa yang
                                        bersangkutan serta DPA.</li>
                                </ul>
                            </li>
                            <li><strong>Pelanggaran Tingkat IV</strong><br>
                                Sanksi atas pelanggaran tingkat IV yang dilakukan oleh mahasiswa berupa:
                                <ul>
                                    <li>Teguran tertulis disertai dengan pemanggilan orang tua/wali.</li>
                                    <li>Membuat surat pernyataan untuk tidak mengulangi perbuatan tersebut, yang
                                        dibubuhi materai dan ditandatangani oleh mahasiswa, orang tua/wali, dan DPA.
                                    </li>
                                </ul>
                            </li>
                            <li><strong>Pelanggaran Tingkat III</strong><br>
                                Sanksi atas pelanggaran tingkat III yang dilakukan oleh mahasiswa berupa:
                                <ul>
                                    <li>Membuat surat pernyataan untuk tidak mengulangi perbuatan tersebut, yang
                                        dibubuhi materai dan ditandatangani oleh mahasiswa, orang tua/wali, dan DPA.
                                    </li>
                                    <li>Melakukan tugas khusus seperti bertanggung jawab untuk memperbaiki atau
                                        membersihkan kembali, serta tugas-tugas lainnya yang ditentukan oleh pihak yang
                                        berwenang.</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <button onclick="showKlasifikasi()" class="btn text-white"
                    style="background-color: #483D8B;">kembali</button>
                    <a href="Formulir.php" class="btn text-white" style="background-color: #483D8B;">Cetak Surat</a>

            </div>
            <script>
                function showKlasifikasi() {
                    document.getElementById("kodeEtik").style.display = "none";
                    document.getElementById("klasifikasi").style.display = "block";
                    document.getElementById("sanksi").style.display = "none";
                }

                function showKodeEtik() {
                    document.getElementById("kodeEtik").style.display = "block";
                    document.getElementById("klasifikasi").style.display = "none";
                    document.getElementById("sanksi").style.display = "none";
                }
                function showSanksi() {
                    document.getElementById("kodeEtik").style.display = "none";
                    document.getElementById("klasifikasi").style.display = "none";
                    document.getElementById("sanksi").style.display = "block";
                }
            </script>

        </div>
    </div>
</body>

</html>