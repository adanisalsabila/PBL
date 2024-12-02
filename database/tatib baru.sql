create database tatib;

use tatib;

CREATE TABLE Users (
    UserID INT PRIMARY KEY IDENTITY(1,1),
    Username VARCHAR(50) UNIQUE NOT NULL,
    Password VARCHAR(255) NOT NULL,
    Role VARCHAR(20) CHECK (Role IN ('Mahasiswa', 'Dosen', 'Admin')) NOT NULL,
    Email VARCHAR(100) UNIQUE NOT NULL
);

CREATE TABLE Mahasiswa (
    NIM CHAR(10) PRIMARY KEY,
    Nama VARCHAR(100) NOT NULL,
    ProgramStudi VARCHAR(100),
    Email VARCHAR(100),
    NoTelepon VARCHAR(15),
    Alamat VARCHAR(255),
    TanggalLahir DATE,
    Poin INT DEFAULT 0,
    UserID INT UNIQUE FOREIGN KEY REFERENCES Users(UserID)
);

CREATE TABLE Dosen (
    NIP CHAR(18) PRIMARY KEY,
    Nama VARCHAR(100) NOT NULL,
    Email VARCHAR(100),
    NoTelepon VARCHAR(15),
    Fakultas VARCHAR(100),
    UserID INT UNIQUE FOREIGN KEY REFERENCES Users(UserID)
);

CREATE TABLE Admin (
    AdminID INT PRIMARY KEY IDENTITY(1,1),
    NamaAdmin VARCHAR(100) NOT NULL,
    EmailAdmin VARCHAR(100) UNIQUE NOT NULL,
    NoTelepon VARCHAR(15),
    UserID INT UNIQUE FOREIGN KEY REFERENCES Users(UserID)
);


CREATE TABLE JenisPelanggaran (
    JenisID INT PRIMARY KEY IDENTITY(1,1),
    NamaPelanggaran VARCHAR(100),
    Poin INT
);

CREATE TABLE Pelanggaran (
    PelanggaranID INT PRIMARY KEY IDENTITY(1,1),
    NIM CHAR(10) FOREIGN KEY REFERENCES Mahasiswa(NIM),
    NIP CHAR(18) FOREIGN KEY REFERENCES Dosen(NIP),
    JenisID INT FOREIGN KEY REFERENCES JenisPelanggaran(JenisID),
    TanggalPelanggaran DATE NOT NULL,
    BuktiFoto VARCHAR(255),
    StatusVerifikasi BIT DEFAULT 0
);

CREATE TABLE Tugas (
    TugasID INT PRIMARY KEY IDENTITY(1,1),
    PelanggaranID INT UNIQUE FOREIGN KEY REFERENCES Pelanggaran(PelanggaranID),
    Deskripsi VARCHAR(MAX),
    StatusTugas BIT DEFAULT 0, -- 0: Belum selesai, 1: Selesai
    TanggalSelesai DATE
);

CREATE TABLE RiwayatPoin (
    RiwayatID INT PRIMARY KEY IDENTITY(1,1),
    NIM CHAR(10) FOREIGN KEY REFERENCES Mahasiswa(NIM),
    Poin INT,
    Tanggal DATE,
    Keterangan VARCHAR(255)
);

CREATE TABLE Session (
    SessionID UNIQUEIDENTIFIER PRIMARY KEY DEFAULT NEWID(),
    UserID INT FOREIGN KEY REFERENCES Users(UserID),
    CreatedAt DATETIME DEFAULT GETDATE(),
    ExpiresAt DATETIME
);

drop table Session;

INSERT INTO Users (Username, Password, Role, Email)
VALUES 
('mahasiswa1', 'passwordmhs1', 'Mahasiswa', 'mahasiswa1@email.com'),
('dosen1', 'passworddosen1', 'Dosen', 'dosen1@email.com'),
('admin1', 'passwordadmin1', 'Admin', 'admin1@email.com');

INSERT INTO Mahasiswa (NIM, Nama, ProgramStudi, Email, NoTelepon, Alamat, TanggalLahir, UserID)
VALUES 
('2200000001', 'Mahasiswa 1', 'Teknik Informatika', 'mahasiswa1@email.com', '081234567890', 'Malang', '2002-01-01', 1);

INSERT INTO Dosen (NIP, Nama, Email, NoTelepon, Fakultas, UserID)
VALUES 
('198012345678901234', 'Dosen 1', 'dosen1@email.com', '081298765432', 'Fakultas Teknologi Informasi', 2);

INSERT INTO Admin (NamaAdmin, EmailAdmin, NoTelepon, UserID)
VALUES 
('Admin 1', 'admin1@email.com', '081223344556', 3);

INSERT INTO JenisPelanggaran (NamaPelanggaran, Poin)
VALUES 
('Tidak memakai kartu identitas', 5),
('Terlambat masuk kelas', 2),
('Melanggar kode etik kampus', 10);


INSERT INTO Pelanggaran (NIM, NIP, JenisID, TanggalPelanggaran, BuktiFoto, StatusVerifikasi)
VALUES 
('2200000001', '198012345678901234', 1, '2024-12-01', 'bukti_foto_1.jpg', 0);

INSERT INTO Tugas (PelanggaranID, Deskripsi, StatusTugas, TanggalSelesai)
VALUES 
(1, 'Melakukan permohonan maaf kepada dosen.', 0, NULL);


INSERT INTO RiwayatPoin (NIM, Poin, Tanggal, Keterangan)
VALUES 
('2200000001', -5, '2024-12-01', 'Pelanggaran: Tidak memakai kartu identitas');

INSERT INTO Users (Username, Password, Role, Email)
VALUES 
('mahasiswa2', 'passwordmhs2', 'Mahasiswa', 'mahasiswa2@email.com'),
('mahasiswa3', 'passwordmhs3', 'Mahasiswa', 'mahasiswa3@email.com'),
('dosen2', 'passworddosen2', 'Dosen', 'dosen2@email.com'),
('dosen3', 'passworddosen3', 'Dosen', 'dosen3@email.com'),
('admin2', 'passwordadmin2', 'Admin', 'admin2@email.com'),
('admin3', 'passwordadmin3', 'Admin', 'admin3@email.com');

INSERT INTO Mahasiswa (NIM, Nama, ProgramStudi, Email, NoTelepon, Alamat, TanggalLahir, UserID)
VALUES 
('2200000002', 'Mahasiswa 2', 'Sistem Informasi', 'mahasiswa2@email.com', '081345678901', 'Surabaya', '2001-02-02', 4),
('2200000003', 'Mahasiswa 3', 'Teknik Komputer', 'mahasiswa3@email.com', '081456789012', 'Jakarta', '2000-03-03', 5);


INSERT INTO Dosen (NIP, Nama, Email, NoTelepon, Fakultas, UserID)
VALUES 
('198012345678901235', 'Dosen 2', 'dosen2@email.com', '081298765433', 'Fakultas Teknik Elektro', 6),
('198012345678901236', 'Dosen 3', 'dosen3@email.com', '081298765434', 'Fakultas Teknik Sipil', 7);


INSERT INTO Admin (NamaAdmin, EmailAdmin, NoTelepon, UserID)
VALUES 
('Admin 2', 'admin2@email.com', '081223344557', 8),
('Admin 3', 'admin3@email.com', '081223344558', 9);


INSERT INTO JenisPelanggaran (NamaPelanggaran, Poin)
VALUES 
('Tidak membawa buku tugas', 3),
('Merokok di area kampus', 15);

CREATE TABLE Notifikasi (
    NotifikasiID INT PRIMARY KEY IDENTITY(1,1),
    UserID INT NULL, -- ID pengguna yang menerima notifikasi
    Role VARCHAR(20) NULL, --pengguna (Mahasiswa/Dosen/Admin)
    Judul VARCHAR(255) NOT NULL,
    Isi TEXT NOT NULL,
    TanggalDibuat DATETIME DEFAULT GETDATE(),
    FOREIGN KEY (UserID) REFERENCES Users(UserID) 
);
