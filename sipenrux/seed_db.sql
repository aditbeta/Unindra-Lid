USE pweb;

INSERT INTO User (username, password, email, fullname, no_telpon, bagian, role) VALUES
('admin', 'admin', 'admin@mail.com', 'Admin', '080000000000', 'SUPER ADMIN', 0),
('user', 'user', 'user@mail.com', 'User', '080000000001', 'Mahasiswa Teknik Informatika', 1);

INSERT INTO Ruangan (kode, nama, deskripsi) VALUES
('111', '111', 'Gedung 1 Lantai 1 Ruangan 1'),
('112', '112', 'Gedung 1 Lantai 1 Ruangan 2'),
('113', '113', 'Gedung 1 Lantai 1 Ruangan 3'),
('114', '114', 'Gedung 1 Lantai 1 Ruangan 4'),
('115', '115', 'Gedung 1 Lantai 1 Ruangan 5');

INSERT INTO KetersediaanRuangan (kode_ruangan, jam_masuk, jam_keluar, status) VALUES
('111', '08:00:00', '09:50:00', 0),
('111', '10:00:00', '11:50:00', 0),
('112', '12:00:00', '15:00:00', 1),
('112', '16:00:00', '18:00:00', 0),
('113', '10:00:00', '11:50:00', 2);

INSERT INTO PenggunaanRuangan (id_ketersediaan, id_user, tanggal, tanggal_pengajuan, keterangan) VALUES
(2, 2, '2019-03-31', now(), 'Kelas Pengganti PWEB'),
(4, 1, '2019-03-31', now(), 'Rapat Persiapan UTS'),
(4, 2, '2019-03-31', now(), 'Pertemuan Mahasiswa Kelas S6G');