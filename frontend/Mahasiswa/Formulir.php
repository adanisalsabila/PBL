<?php
session_start();
include '../../backend/config_db.php';

//user login as dosen
if (!isset($_SESSION['username'])) {
    header('Location: ./login.php');
    exit();
}

$username = $_SESSION['username'];

// Query to get student information based on NIM or Username
$query = "SELECT m.NIM, m.Nama, m.Email, m.NoTelepon, p.Prodi
          FROM Mahasiswa m
          INNER JOIN ProgramStudi p ON m.ProdiID = p.ProdiID
          WHERE m.NIM = :username"; // Assuming session stores NIM
$stmt = $conn->prepare($query);
$stmt->bindParam(':username', $username, PDO::PARAM_STR);
$stmt->execute();

// Fetch result
$mahasiswa = $stmt->fetch(PDO::FETCH_ASSOC);

// If no student data found, use default placeholder data
if (!$mahasiswa) {
    $mahasiswa = ['Nama' => 'Data tidak tersedia', 'Email' => 'Data tidak tersedia', 'NoTelepon' => 'Data tidak tersedia', 'Prodi' => 'Data tidak tersedia'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/myWeb/PBL/frontend/style/style.css">
    <title>PolinemaTertib</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <div class="sidebar">
                <div class="d-flex flex-column align-items-center">
                    <div class="d-flex align-items-center">
                        <img src="/myWeb/PBL/frontend/img/logoPoltib.png" alt="Logo JTI" class="img-sidebar">
                        <h1 class="fs-5 ms-2 d-none d-sm-inline title-sidebar mid-pixel-hide">Polinema<br>Tertib</h1>
                    </div>

                    <!-- Menu Sidebar -->
                    <ul class="nav nav-pills flex-column mb-auto align-items-center align-items-sm-start">
                        <li class="nav-item d-flex align-items-center list-space">
                            <a href="Dashboard.php" class="align-middle">
                                <img src="/myWeb/PBL/frontend/img/home.svg" alt="Home Icon" class="img-white">
                                <span class="ms-1 d-none d-sm-inline white-text"><Strong>Beranda</Strong></span>
                            </a>
                        </li>
                        <li class="nav-item d-flex align-items-center list-space">
                            <a href="#" class="align-middle bg-white">
                                <img src="/myWeb/PBL/frontend/img/reading.svg" alt="" class="img-purple">
                                <span class="ms-1 d-none d-sm-inline purple-text"><strong>Formulir</strong></span>
                            </a>
                        </li>
                        <li class="nav-item d-flex align-items-center list-space">
                            <a href="PolinemaToday.php" class="align-middle">
                                <img src="/myWeb/PBL/frontend/img/news.svg" alt="" class="img-white">
                                <span class="ms-1 d-none d-sm-inline white-text"><strong>PolinemaToday</strong></span>
                            </a>
                        </li>
                        <li class="nav-item d-flex align-items-center list-space">
                            <a href="Pelanggaran.php" class="align-middle">
                                <img src="/myWeb/PBL/frontend/img/illegal.svg" alt="" class="img-white">
                                <span class="ms-1 d-none d-sm-inline white-text"><strong>Pelanggaran</strong></span>
                            </a>
                        </li>
                        <li class="nav-item d-flex align-items-center list-space">
                            <a href="Profile.php" class="align-middle">
                                <img src="/myWeb/PBL/frontend/img/user.svg" alt="" class="img-white">
                                <span class="ms-1 d-none d-sm-inline white-text"><strong>Profile</strong></span>
                            </a>
                        </li>
                        <li class="nav-item d-flex align-items-center list-space">
                            <a href="Notifikasi.php" class="align-middle">
                                <img src="/myWeb/PBL/frontend/img/activity.svg" alt="" class="img-white">
                                <span class="ms-1 d-none d-sm-inline white-text"><strong>Notifikasi</strong></span>
                            </a>
                        </li>
                        <li class="nav-item d-flex align-items-center list-space">
                            <a href="/myWeb/PBL/frontend/Login.php" class="align-middle">
                                <img src="/myWeb/PBL/frontend/img/logout.png" alt="" class="img-white">
                                <span class="ms-1 d-none d-sm-inline white-text"><strong>Logout</strong></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div  class="col-12 offset-md-3 offset-xl-2 main-content">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="purple-text title-font"><strong>Form Sanksi</strong></h1>
                    <div class="d-flex flex-column purple-text">
                        <h5><?php echo $mahasiswa['Nama']; ?></h5>
                        <p><?php echo $mahasiswa['Prodi']; ?></p>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm content-placeholder">
                    <div class="card-header text-white purple-card-header">
                        <h5 class="mb-0 ">Bukti Melakukan Pelanggaran</h5>
                    </div>
                    <div class=" card-body">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="buktiFoto">Bukti Foto</label>
                                        <input type="file" class="form-control-file" id="buktiFoto" accept="image/*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="namaLengkap">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="namaLengkap" placeholder="Samantha">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tanggalPelanggaran">Tanggal Pelanggaran & Tempat</label>
                                        <div class="input-group gap-2">
                                            <input type="text" class="form-control" id="tanggalPelanggaran" placeholder="24 November 2024">
                                            <div class="input-group-append">
                                                <input type="text" class="form-control" placeholder="LSI 1">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group"> <label for="jenisPelanggaran">Jenis Pelanggaran</label>
                                        <select class="form-control" id="jenisPelanggaran">
                                            <option value="">Pilih Jenis Pelanggaran</option>
                                            <option value="ringan">Pelanggaran Ringan</option>
                                            <option value="sedang">Pelanggaran Sedang</option>
                                            <option value="berat">Pelanggaran Berat</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group d-flex gap-3">
                                        <div>
                                            <label for="poin">Poin</label>
                                            <input type="text" name="poin" id="poin" placeholder="10" class="form-control">
                                        </div>
                                        <div>
                                            <label for="tingkat">Tingkat</label>
                                            <input type="text" name="tingkat" id="tingkat" placeholder="3" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nim">NIM</label>
                                        <input type="text" name="nim" id="nim" placeholder="Masukkan NIM mahasiswa" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="tugas">Tugas Yang Diberikan</label>
                                <textarea class="form-control" id="tugas" rows="10" placeholder="Deskripsikan tugas yang diberikan..."></textarea>
                            </div>
                            <button type="submit" class="btn text-white purple-card-header">Terima</button>
                            <button type="submit" class="btn text-white purple-card-header">Tolak</button>                            
                        </div>
                </div>
             </div>

        </div>
    </div>
</body>

</html>