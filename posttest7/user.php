<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    if ($_SESSION['priv'] != 'user'){
        header('Location: proses_login.php');
    }
    // session_destroy();
    // header('proses_login.php');
    // $_SESSION['username'] = "riannscarlezt";
    require "koneksi.php";
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Xtrememusix
    </title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="icon" href="gambar/icons-dessert.ico">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="nav container">
            <a href="" class="logo" id="warna">
            <span>x</span>treme<span>musi</span><span>x</span>
            </a>
            <form action="searching.php" method="GET">
                <div class="search-box">
                    <input type="search" name="search" id="search-input" placeholder="Search music" autocomplete="off">
                    <button type="submit" name="cari"> <i class="bx bx-search"></i></button>
                </div>
            </form>
            <?php
                // if (isset($_GET['cari'])){
                //     $keyword = $_GET['search'];
                //     $result = mysqli_query($conn, "SELECT * FROM popular_now WHERE judul LIKE '%$keyword%' or genre LIKE '%$keyword%'");
                // } else {
                //     $result = mysqli_query($conn, "SELECT * FROM popular_now");
                // }
                // $pencarian = [];
                // while ($row = mysqli_fetch_array($result)) {
                //     $pencarian[] = $row;
                // }
            ?>
            <a href="#about-me" class="user">
                <img src="gambar/logo-dessertskuy.jpg" alt="" class="user-img">
            </a>
            <div class="navbar">
                <a href="" class="nav-link">
                    <i class="bx bx-home"></i>
                    <span class="nav-link-title">Home</span>
                </a>
                <a href="#based" class="nav-link">
                <i class='bx bx-library' ></i>
                    <span class="nav-link-title">Library</span>
                </a>
                <a href="#sadsong" class="nav-link">
                    <i class="bx bxs-hot"></i>
                    <span class="nav-link-title">Popular</span>
                </a>
                <a href="#throwback" class="nav-link">
                    <i class='bx bxs-playlist'></i>
                    <span class="nav-link-title">Playlist</span>
                </a>
                <a href="" class="nav-link">
                    <i class='bx bx-bookmark'></i>
                    <span class="nav-link-title">Bookmark</span>
                </a>
                
                    <?php if (!isset($_SESSION["username"])){
                        echo(
                            '<a href="proses_login.php" class= "nav-link" id= "login">
                    <i class="bx bx-user-circle"></i><span class="nav-link-title">Login</span>');
                    } else {
                        echo(
                            '<a href="proses_keluar.php" class= "nav-link" id= "lgout">
                    <i class="bx bx-user-circle"></i><span class="nav-link-title">Logout</span>');
                    }?>
                    
                </a>
                <label>
                    <input type="checkbox" class="checkbox" id="tombol">
                    <span class="check"></span>
                </label>
            </div>
        </div>
    </header>
    <!--Section Beranda-->
    <section class="beranda container" id="beranda">
        <img src="gambar/just.png" alt="" class="beranda-img" id="gambar1">
        <div class="beranda-teks">
            <h1 class="judul-beranda">The Chainsmokers & Coldplay - Something Just Like This</h1>
            <p>“Something Just Like This” is a song recorded and performed by The Chainsmokers (an American EDM-pop duo)
                <br>
                and the British rock band Coldplay. According to the Chainsmokers, the lyrics of the song are about
                <br>
                a romantic relationship between two people that does not necessarily have to be “superhumanly perfect” to work.
                </p>
            <a href="#" class="tombol-ntn">
                <i class="bx bx-caret-right-circle"></i>
                <span>Play Music</span>
            </a>
        </div>
    </section>

    <!--Section Sad Song-->
    <section class="populer container" id="based">
        <div class="head">
            <h2 class="judul-populer">Based on your recent listening</h2>
        </div>
        

        <div class="list-music container">
            <a href="">
                <div class="music">
                    <div class="music-image pic-13">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h3>Oasis - Don't Look Back In Anger</h3>
                        </div>
                        <div class="genre">
                            <p>Britpop, Rock</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image pic-14">
                    <!-- <img src="gambar/twoofus.jpg" alt="" class="beranda-img" id="gambar1"> -->
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h3>One Direction - Strong</h3>
                        </div>
                        <div class="genre">
                            <p>Pop</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image pic-15">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h3>Lil Nas X - That's What I Want</h3>
                        </div>
                        <div class="genre">
                            <p>Pop</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image pic-16">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h3>The Chainsmokers - All We Know</h3>
                        </div>
                        <div class="genre">
                            <p>EDM, Indie</p>
                        </div>
                    </div>
                </div>
            </div>
      
        

        <div class="more">
            <a href="#movies" >Lainnya</a>
        </div>
    </section>

    <!--Section #ThrowbackThursday-->
    <section class="populer container" id="sadsong">
        <div class="head">
            <h2 class="judul-populer">Sad Song</h2>
        </div>
        

        <div class="list-music container">
            <a href="">
                <div class="music">
                    <div class="music-image pic-17">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h3>Glass Animals - Heat Waves</h3>
                        </div>
                        <div class="genre">
                            <p>R&B, Indie</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image pic-18">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h3>Song So Hee(송소희) - Spring Day</h3>
                        </div>
                        <div class="genre">
                            <p>Pop, Jazz</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image pic-19">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h3>Virgoun - Duka</h3>
                        </div>
                        <div class="genre">
                            <p>Pop Rock</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image pic-20">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h3>Neckdeep - Wish You Were Here</h3>
                        </div>
                        <div class="genre">
                            <p>Art Rock, Rock Experimental</p>
                        </div>
                    </div>
                </div>
            </div>
                    
        

        <div class="more">
            <a href="#movies" >Lainnya</a>
        </div>
    </section>


    <!--Section #ThrowbackThursday -->
    <section class="populer container" id="throwback">
        <div class="head">
            <h2 class="judul-populer">#ThrowbackThursday</h2>
        </div>
        

        <div class="list-music container">
            <a href="">
                <div class="music">
                    <div class="music-image pic-21">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h3>Green Day - American Idiot</h3>
                        </div>
                        <div class="genre">
                            <p>Alternative/Indie</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image pic-22">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h3>Queen - Bohemian Rhapsody</h3>
                        </div>
                        <div class="genre">
                            <p>Hard Rock, Alternative/Indie</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image pic-23">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h3>Gun N Roses - Sweet Child O' Mine</h3>
                        </div>
                        <div class="genre">
                            <p>Hard Rock, Glam Metal</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image pic-24">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h3>Avenged Sevenfold - Dear God</h3>
                        </div>
                        <div class="genre">
                            <p>Metal, Rock Country</p>
                        </div>
                    </div>
                </div>
            </div>
                    
        

        <div class="more">
            <a href="#movies" >Lainnya</a>
        </div>
    </section>

    <footer id="about-me">
        <div class="footer container">
            <h1 align="center">About Us</h1><br>
            <div class="img"></div>
            <div class="text">Rian Syaputra<span> Ainun Naim</span></div</div>
        <p class="desc"> Hallo!, nama saya Rian. Saya adalah CEO website ini, silahkan dukung website ini dengan cara menon-aktifkan AdBlock browser kalian. Enjoy the music!.</p>
        </div>
        <div class="sosmed-footer" align="center">
            <div><a target="blank" href="https://www.instagram.com/riannscarlezt/" class="nav-link">
                <i class="bx bxl-instagram" ></i>
                <span class="sosmed-range">Instagram  </span>
            </a>
            </div>
            <div><a target="blank" href="https://wa.wizard.id/913782" class="nav-link">
                <i class="bx bxl-whatsapp"></i>
                <span class="sosmed-range">  WhatsApp</span>
                <a/>
            </div>
        </div>
    </footer>
    <script src="javascript.js"></script>
    <script>
        var tombol = document.getElementById("tombol");

        tombol.onclick = function(){
            document.body.classList.toggle("white-mode");
        }

    </script>


    </body>
</html>