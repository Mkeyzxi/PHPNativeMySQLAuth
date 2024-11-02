<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "formmbul");

if (isset($_POST['submit'])) {
    $namaLengkap = htmlspecialchars($_POST['namaLengkap']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $noTelepon = htmlspecialchars($_POST['nomorTelepon']);  // Sesuaikan dengan nama kolom di tabel
    $jenisKelamin = htmlspecialchars($_POST['jenisKelamin']);
    $tanggalLahir = htmlspecialchars($_POST['tanggalLahir']);
    $submit = htmlspecialchars($_POST['submit']);

    // Memeriksa duplikasi email
    $checkEmailQuery = "SELECT * FROM form WHERE email = '$email'";
    $result = mysqli_query($koneksi, $checkEmailQuery);

    if (mysqli_num_rows($result) > 0) {
        echo "
        <script>
            alert('Email sudah terdaftar, silakan gunakan email lain.');
            window.location.href = 'index.php';
        </script>
        ";
        exit;
    }

    // Hashing password
    $hash = password_hash($password, PASSWORD_DEFAULT);

    // Memasukkan data ke dalam database
    $query = "INSERT INTO form (namaLengkap, email, password, passwordHash, noTelepon, jenisKelamin, tanggalLahir, waktuSubmit) VALUES ('$namaLengkap', '$email', '$password','$hash', '$noTelepon', '$jenisKelamin', '$tanggalLahir', '$submit')";
    
    if (mysqli_query($koneksi, $query)) {
        echo "
        <script>
            alert('Data berhasil ditambahkan');
            window.location.href = 'proses.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal ditambahkan');
            window.location.href = 'index.php';
        </script>
        ";
    }
}

function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

// Menulis data ke file registrasi
function menulis($result){
    global $koneksi;
    if (mysqli_num_rows($result) > 0) {
        $file = fopen("registrasi.txt", "w");
        
        // Menuliskan data ke dalam file
        while ($row = mysqli_fetch_assoc($result)) {
            fwrite($file, "Nama Lengkap: " . $row['namaLengkap'] . PHP_EOL);
            fwrite($file, "Email: " . $row['email'] . PHP_EOL);
            fwrite($file, "Password: " . $row['password'] . PHP_EOL);
            fwrite($file, "Nomor Telepon: " . $row['noTelepon'] . PHP_EOL);
            fwrite($file, "Jenis Kelamin: " . $row['jenisKelamin'] . PHP_EOL);
            fwrite($file, "Tanggal Lahir: " . $row['tanggalLahir'] . PHP_EOL);
            fwrite($file, "Waktu Submit: " . $row['waktuSubmit'] . PHP_EOL);
            fwrite($file, PHP_EOL); // Baris kosong sebagai pemisah antara entri
        }
        fclose($file);
        
        // Menampilkan pesan berhasil
        echo "
        <script>
            alert('Data berhasil ditambahkan!');
            document.location.href('proses.php');
        </script>
        ";
    } else {
        // Menampilkan pesan jika tidak ada data
        echo "
        <script>
            alert('Tidak ada data ditambahkan!');
            document.location.href('index.php');
        </script>
        ";
    }
    mysqli_close($koneksi);
}

// Menghapus data berdasarkan email
function hapusData($email) {
    global $koneksi;

    // Membersihkan input untuk mencegah SQL Injection
    $email = mysqli_real_escape_string($koneksi, $email);

    // Menghapus data berdasarkan email
    $resultHapus = mysqli_query($koneksi, "DELETE FROM form WHERE email = '$email'");

    return mysqli_affected_rows($koneksi);
}
?>
