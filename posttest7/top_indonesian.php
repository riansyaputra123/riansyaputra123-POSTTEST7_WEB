<?php
session_start();
require "koneksi.php";

$result = mysqli_query($conn, "SELECT * FROM top_indonesian");

$top_indonesian = [];

while ($row = mysqli_fetch_assoc($result)) {
    $top_indonesian[] = $row;
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
    <title>Top Indonesian</title>
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
        <th colspan="7" style="background-color: #293462 ;">Top Indonesian</th>
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
        <?php $i = 1; foreach ($top_indonesian as $indo):?>
        <tr>
            <td><?php echo $i ;?></td>
            <td><?php echo $indo["id"]; ?></td>
            <td><?php echo $indo["judul"] ;?></td>
            <td><?php echo $indo["genre"] ;?></td>
            <td><img src="gambar/all_song/<?= $indo['cover'] ?>" width="70" height="60"><br><?php echo $indo["cover"] ;?></td>
            <td><?php echo $indo["waktu"] ;?></td>
            <td><i class='bx bx-edit'></i><a href="update_admin.php?id=<?php echo $indo["id"]; ?>&section=top_indonesian">Edit</a> 
            |<i class='bx bx-trash'></i><a href="hapus.php?id=<?php echo $indo["id"]; ?>&section=top_indonesian" onclick = "return confirm('And yakin ingin menghapus data ini ?')">Hapus</a></td>
        </tr>
        <?php $i++; endforeach;?>
        <tr>
        <th colspan="7" style="background-color: #293462 ;">Cancel view playlist? <a  class="daftar" href="admin.php" style="text-decoration:none">Back</a></th>
        </tr>
    </table>
    
</body>
</html>