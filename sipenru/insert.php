<?php
    function getRuangan($conn, $id) {
        $sql = "SELECT * FROM Ruangan WHERE id='".$id."'";
        $resultRuangan = $conn->query($sql);
        $rowRuangan = $resultRuangan->fetch_assoc();
        return $rowRuangan;
    }

    function tambahUser($conn) {
        echo "Hello world!";
    }

    function tambahRuangan($conn) {
        $kode = $_POST['kode_ruangan'];
        $nama = $_POST['nama_ruangan'];
        $deskripsi = $_POST['deskripsi'];
        $sql = "INSERT INTO Ruangan (kode, nama, deskripsi) VALUES ('".$kode."', '".$nama."', '".$deskripsi."');";

        if ($conn->multi_query($sql) === TRUE) {
            echo mysqli_insert_id($conn);
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }

    function tambahKetersediaan($conn) {
        $ruangan = getRuangan($conn, $_POST['id_ruangan']);
        $tanggal = $_POST['tanggal'];
        $jam_mulai = $_POST['jam_mulai'];
        $jam_selesai = $_POST['jam_selesai'];
        $sql = "INSERT INTO KetersediaanRuangan (kode_ruangan, tanggal, jam_mulai, jam_selesai, status) VALUES ";

        for ($i = 0; $i < count($tanggal); $i++) {
            $sql .= "('".$ruangan["kode"]."', '".$tanggal[$i]."', '".$jam_mulai[$i]."', '".$jam_selesai[$i]."', 0)";
            $sql .= ($i == count($tanggal)-1) ? ";" : ",";
        }

        if ($conn->multi_query($sql) === TRUE) {
            echo mysqli_insert_id($conn);
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }

    function tambahPenggunaan($conn) {
        echo "Hello world!";
    }


    include 'db_connection.php';
    $conn = connectDB();

    // $operasi = $_POST['operasi'];
    switch ($_POST['action']) {
        case 'user':
            tambahUser($conn);
            break;
        
        case 'ruangan':
            tambahRuangan($conn);
            break;
        
        case 'ketersediaan':
            tambahKetersediaan($conn);
            break;
        
        case 'penggunaan':
            tambahPenggunaan($conn);
            break;
        
        default:
            # code...
            break;
    }
?>