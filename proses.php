
<?php 
    require "functions.php";
    // require "hapus.php";
    include "includes/header.php"; 
    $form = query("SELECT * FROM form");
?>

<div class="container mt-[100px] dark:bg-slate-900">
    <h1 class="text-slate-700 font-bold lg:text-4xl text-[25px] text-center dark:text-slate-300">Table Hasil FORM</h1>
    <table class="table-auto w-full m-5 border-collapse border-2 border-slate-700 dark:border-slate-300 overflow-y-auto">
        <thead>
            <tr>
                <th class="text-left font-semibold dark:text-slate-300 border-2 border-slate-700 p-2">No</th>
                <th class="text-left font-semibold dark:text-slate-300 border-2 border-slate-700 p-2">Data</th>
                <th class="text-left font-semibold dark:text-slate-300 border-y-2 border-slate-700 p-2">Nama Lengkap</th>
                <th class="text-left font-semibold dark:text-slate-300 border-y-2 border-slate-700 p-2">Email</th>
                <th class="text-left font-semibold dark:text-slate-300 border-y-2 border-slate-700 p-2">Password</th>
                <th class="text-left font-semibold dark:text-slate-300 border-y-2 border-slate-700 p-2">Nomor Telepon</th>
                <th class="text-left font-semibold dark:text-slate-300 border-y-2 border-slate-700 p-2">Jenis Kelamin</th>
                <th class="text-left font-semibold dark:text-slate-300 border-y-2 border-slate-700 p-2">Tanggal Lahir</th>
                <th class="text-left font-semibold dark:text-slate-300 border-y-2 border-slate-700 p-2">Waktu Submit</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($form as $row) : ?>
            <tr>
                <td class="dark:text-slate-300 border-2 border-slate-700 p-2 text-center"><?= $i; ?></td>
                <td class="dark:text-slate-300 text-center font-semibold w-[2%] border-2 border-slate-700 p-2"><a href="hapus.php?email=<?= $row["email"]; ?>">Hapus</a></td>
                <td class="dark:text-slate-300 border-y-2 border-slate-700 p-2"><?= $row["namaLengkap"]; ?></td>
                <td class="dark:text-slate-300 border-y-2 border-slate-700 p-2"><?= $row["email"]; ?></td>
                <td class="dark:text-slate-300 border-y-2 border-slate-700 p-2"><?= $row["password"]; ?></td>
                <td class="dark:text-slate-300 border-y-2 border-slate-700 p-2"><?= $row["noTelepon"]; ?></td>
                <td class="dark:text-slate-300 border-y-2 border-slate-700 p-2"><?= $row["jenisKelamin"]; ?></td>
                <td class="dark:text-slate-300 border-y-2 border-slate-700 p-2"><?= $row["tanggalLahir"]; ?></td>
                <td class="dark:text-slate-300 border-y-2 border-slate-700 p-2"><?= $row["waktuSubmit"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; 
            
            ?>
        </tbody>
    </table>
    <button type="submit" value="submit" class="w-full invisible bg-pink-500 text-slate-700 " <?php menulis(mysqli_query($koneksi, "SELECT * FROM form")); ?>">ingin menuliskan tabel?</button>
    
</div>



<?php include "includes/footer.php"; 
    // Menutup koneksi ke database
    
?>


