<?php
session_start();
require "koneksi.php";

$result = mysqli_query($conn, "SELECT * FROM best_kpop");

$best_kpop = [];

while ($row = mysqli_fetch_assoc($result)) {
    $best_kpop[] = $row;
}
?>

<script>
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
</script>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="list.css">
    <link rel="icon" href="gambar/icons-dessert.ico">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <title>Best K-Pop</title>
</head>
<body>

    <div class="filter">
        <div class="logo-container">
            <a href="" class="logo" id="warna">
            <span>x</span>treme<span>musi</span><span>x</span>
            </a>
        </div>
    </div>

    <table class="container">
        <tr>
            <th colspan="7" style="background-color: #293462 ;">Best K-Pop</th>
        </tr>
        <tr>
            <th>NO</th>
            <th>ID</th>
            <th>Judul</th>
            <th>Genre</th>
            <th>Cover</th>
            <th>Waktu</th>
            <th>Action</th>
        </tr>
        <?php $i = 1; foreach ($best_kpop as $kpop):?>
        <tr>
            <td><?php echo $i ;?></td>
            <td><?php echo $kpop["id"]; ?></td>
            <td><?php echo $kpop["judul"] ;?></td>
            <td><?php echo $kpop["genre"] ;?></td>
            <td><img src="gambar/all_song/<?= $kpop['cover'] ?>" width="70" height="60"><br><?php echo $kpop["cover"] ;?></td>
            <td><?php echo $kpop["waktu"] ;?></td>
            <td><i class='bx bx-edit'></i><a href="update_admin.php?id=<?php echo $kpop["id"]; ?>&section=best_kpop">Edit</a> 
            |<i class='bx bx-trash'></i><a href="hapus.php?id=<?php echo $kpop["id"]; ?>&section=best_kpop" onclick = "return confirm('And yakin ingin menghapus data ini ?')">Hapus</a></td>
        </tr>
        <?php $i++; endforeach;?>
        <tr>
        <th colspan="7" style="background-color: #293462 ;">Cancel view playlist? <a  class="daftar" href="admin.php" style="text-decoration:none">Back</a></th>
        </tr>
    </table>
    
</body>
</html>