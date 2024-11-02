<?php
require 'functions.php';

// hapus data salah
$email = $_GET["email"];

if(hapusData($email) > 0){
    echo "
        <script>
            alert('data berhasil dihapus');
            document.location.href = 'proses.php';
        </script>
    ";
}else {
    echo "
        <script>
            alert('data tidak ada yang dihapus');
            document.location.href = 'proses.php';
        </script>
    ";
}


?>



