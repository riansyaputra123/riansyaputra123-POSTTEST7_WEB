
<?php
session_start();





$title = $_POST['title'];
$name = $_POST['name'];
$genre = $_POST['genre'];
$release = $_POST['release'];
$code = $_POST['code'];
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
    <title>Result</title>
</head>
<body>

            <form action= "" method="POST" enctype="multipart/form-data">
            <div class="login-box">
                <div class="logo-container">
                <a href="" class="logo" id="warna">
                <span>x</span>treme<span>musi</span><span>x</span>
                </a>
                </div>
                <h1>Add Result</h1>
                <div class="textbox">
                    <i class='bx bx-user'></i>
                    <span>Song Title</span>
                    <input name="title" value="<?php echo $title; ?>" readonly>
                </div>

                <div class="textbox">
                    <i class='bx bx-user'></i>
                    <span>Song Title</span>
                    <input name="name" value="<?php echo $name; ?>" readonly>
                </div>

                <div class="textbox">
                    <i class='bx bx-envelope'></i>
                    <span>Song Genre</span>
                    <input name="genre" value="<?php echo $genre; ?>" readonly>
                </div>

                <div class="textbox">
                    <i class='bx bx-phone'></i>
                    <span>Song Release</span>
                    <input name="release" value="<?php echo $release; ?>" readonly>
                </div>

                <div class="textbox">
                    <i class='bx bx-lock-alt'></i>
                    <span>Song ID</span>
                    <input name="id" value="<?php echo $code; ?>" readonly>
                </div>

                <button name="submit" class="btn">Continue</button>
                <?php
            if (isset($_POST['submit'])) {
                header("Location: admin.php");
            }
        ?> 
        </form>
    </div>
</body>
</html>