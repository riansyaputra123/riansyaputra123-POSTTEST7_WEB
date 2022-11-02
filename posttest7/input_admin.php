<?php
session_start();
require "koneksi.php";
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
    <link rel="stylesheet" type="text/css" href="style3.css">
    <link rel="icon" href="gambar/icons-dessert.ico">
    <title>Manage Song</title>
</head>
<body>

            <form action= "" method="POST" enctype="multipart/form-data">
            <div class="login-box container">
                <div class="logo-container">
                <a href="" class="logo" id="warna">
                <span>x</span>treme<span>musi</span><span>x</span>
                </a>
                </div>
                <h2>Add Song</h2>

                <div class="textbox">
                    <i class='bx bx-lock-alt'></i>
                    <span>Playlist Lagu</span>
                    <select name="playlist" required="" >
                        <option value="popular_now">Popular Now</option>
                        <option value="top_indonesian">Top Indonesian</option>
                        <option value="best_kpop">Best K-Pop</option>
                    </select>
                </div>

                <div class="textbox">
                    <i class='bx bx-user'></i>
                    <span >Judul Lagu</span>
                    <input type="text" placeholder="title" name="title" value="" required>
                </div>

                <div class="textbox">
                    <i class='bx bx-lock-alt'></i>
                    <span>Genre Lagu</span>
                    <select name="genre" required="">
                        <option value="Classic">Classic</option>
                        <option value="Blues">Blues</option>
                        <option value="Jazz">Jazz</option>
                        <option value="Country">Country</option>
                        <option value="Rock">Rock</option>
                        <option value="Pop">Pop</option>
                        <option value="Techno">Techno</option>
                        <option value="Balada">Balada</option>
                        <option value="Reggae">Reggae</option>
                        <option value="R&B">R&B</option>
                        <option value="Dangdut">Dangdut</option>
                        <option value="Death Metal">Death Metal</option>
                        <option value="Rap">Rap</option>
                        <option value="Hip Hop">Hip Hop</option>
                        <option value="Punk">Punk</option>
                        <option value="Electronics">Electronic</option>
                        <option value="Indie">Indie</option>
                    </select>
                </div>
                
                <div class="textbox">
                    <i class='bx bx-user'></i>
                    <span >Nama File</span>
                    <input type="text" placeholder="file name" name="nama_cover" value="" required>
                </div>

                <div class="textbox">
                    <i class='bx bx-user'></i>
                    <span>Cover Lagu</span>
                    <input type="file" id="file" name="cover" required>
                </div>

                <div class="textbox">
                    <i class='bx bx-user'></i>
                    <span >Waktu Upload</span>
                    <input type="datetime-local" name="waktu" value="" required>
                </div>

                <button name="submit" class="btn">Add</button>
            
        </form>

        <?php
            if (isset($_POST['submit'])) {
                $playlist = $_POST['playlist'];
                $title = $_POST['title'];
                $genre = $_POST['genre'];
                $waktu = $_POST['waktu'];
                $nama = $_POST['nama_cover'];
                $cover = $_FILES['cover']['name'];
                $x = explode('.', $cover);
                $extensi = strtolower(end($x));
                $gambar_baru = "$nama.$extensi";
                $temp = $_FILES['cover']['tmp_name'];
                if(move_uploaded_file($temp, 'gambar/all_song/' .$gambar_baru)){
                    $query = mysqli_query($conn, "INSERT INTO `$playlist` VALUES (NULL,'$title','$genre','$gambar_baru', '$waktu')");
                    $query = mysqli_query($conn, "INSERT INTO `all_song` VALUES (NULL,'$title','$genre','$gambar_baru')");
                    if($query){
                        echo "<script>alert('berhasil menambahkan lagu')
                                document.location.href = 'admin.php';
                        </script>";
                    }
                    else{
                        echo error_log($query);
                    }
                }
                else{
                    echo "<script>alert('terdapat kesalahan ketika menambahkan lagu')</script>";
                }
            }
        ?> 
        <br>Cancel add song? <a  class="daftar" href="admin.php" style="text-decoration:none">Back</a>
    </div>



</body>
</html>