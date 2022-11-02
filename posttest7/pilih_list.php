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
    <link rel="stylesheet" type="text/css" href="list.css">
    <link rel="icon" href="gambar/icons-dessert.ico">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <title>Choice song</title>
</head>
<body>
<form action= "" method="POST" enctype="multipart/form-data">
            <div class="login-box container">
                <div class="logo-container">
                <a href="" class="logo" id="warna">
                <span>x</span>treme<span>musi</span><span>x</span>
                </a>
                </div>
                <h2>List Song</h2>

                <button name="submit" class="btn">POPULAR NOW</button>
                <button name="submit2" class="btn">TOP INDONESIAN</button>
                <button name="submit3" class="btn">BEST K-POP</button>
            
        </form>
        <?php
                if (isset($_POST['submit'])) {
                    header("Location: popular_now.php");
                }
                elseif (isset($_POST['submit2'])) {
                    header("Location: top_indonesian.php");
                }
                elseif (isset($_POST['submit3'])) {
                    header("Location: best_kpop.php");
                }
            ?>
</body>
</html