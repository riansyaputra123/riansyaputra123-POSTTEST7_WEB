<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    $_SESSION['priv'] = "riannscarlezt";
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
            <a href="#about-me" class="user">
                <img src="gambar/logo-dessertskuy.jpg" alt="" class="user-img">
            </a>
            <div class="navbar">
                <a href="" class="nav-link">
                    <i class="bx bx-home"></i>
                    <span class="nav-link-title">Home</span>
                </a>
                <a href="#populer" class="nav-link">
                    <i class="bx bxs-hot"></i>
                    <span class="nav-link-title">Popular</span>
                </a>
                <a href="#indo" class="nav-link">
                    <i class='bx bx-music'></i>
                    <span class="nav-link-title">Genre</span>
                </a>
                <a href="#about-me" class="nav-link">
                    <i class="bx bx-user"></i>
                    <span class="nav-link-title">About Us</span>
                </a>
                    <a href="proses_login.php" class= "nav-link" id= "login">
                    <i class="bx bx-user-circle"></i><span class="nav-link-title">Login</span>
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
        <img src="gambar/neckdeep.jpg" alt="" class="beranda-img" id="gambar1">
        <div class="beranda-teks">
            <h1 class="judul-beranda">Neck Deep - December</h1>
            <p>“December” is a slow, acoustic song about a breakup in the month of December.
                <br>
                It has become one of Neck Deep’s most successful tracks.</p>
            <a href="#" class="tombol-ntn">
                <i class="bx bx-caret-right-circle"></i>
                <span>Play Music</span>
            </a>
        </div>
    </section>

    <!--Section popular-->
    <section class="populer container" id="populer">
        <div class="head">
            <h2 class="judul-populer">Popular Now</h2>
        </div>
        

        <div class="list-music container">
            <a href="#">
                <div class="music">
                    <div class="music-image">
                        <img src="gambar/twoofus.jpg" alt="">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h3>Bill Withers - Just the Two of Us</h3>
                        </div>
                        <div class="genre">
                            <p>Jazz, R&B, Music Soul</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image">
                        <img src="gambar/stephen.jpg" alt="">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h3>Stephen Sanchez - Until I Found You</h3>
                        </div>
                        <div class="genre">
                            <p>Indie</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image">
                        <img src="gambar/sempurna.jpg" alt="">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h3>Andra & The Backbone - Sempurna</h3>
                        </div>
                        <div class="genre">
                            <p>Pop, Pop Rock</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image">
                        <img src="gambar/on7.jpg" alt="">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h3>Sheila on 7 - Mudah Saja</h3>
                        </div>
                        <div class="genre">
                            <p>Pop</p>
                        </div>
                    </div>
                </div>
            </div>
      
        

        <div class="more">
            <a href="#" >Lainnya</a>
        </div>
    </section>

    <!--Section Top Indo-->
    <section class="populer container" id="indo">
        <div class="head">
            <h2 class="judul-populer">Top Indonesian</h2>
        </div>
        

        <div class="list-music container">
            <a href="#">
                <div class="music">
                    <div class="music-image">
                        <img src="gambar/andmesh.jpg" alt="">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h3>Andmesh - Andaikan Kau Datang</h3>
                        </div>
                        <div class="genre">
                            <p>Pop</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image">
                        <img src="gambar/lev.jpeg" alt="" >
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h3>Kesya Levronka - Tak Ingin usai</h3>
                        </div>
                        <div class="genre">
                            <p>Pop, Dance</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image">
                        <img src="gambar/fiersa.jpg" alt="">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h3>Fiersa Besari - Pelukku Untuk Pelikmu</h3>
                        </div>
                        <div class="genre">
                            <p>Pop</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image">
                        <img src="gambar/doremi.jpg" alt="">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h3>Budi Doremi - Mesin Waktu</h3>
                        </div>
                        <div class="genre">
                            <p>Pop</p>
                        </div>
                    </div>
                </div>
            </div>
                    
        

        <div class="more">
            <a href="#" >Lainnya</a>
        </div>
    </section>


    <!--Section Best K-Pop -->
    <section class="populer container" id="kpop">
        <div class="head">
            <h2 class="judul-populer">Best K-Pop</h2>
        </div>
        

        <div class="list-music container">
            <a href="#">
                <div class="music">
                    <div class="music-image pic-9">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h3>Twice - Likely</h3>
                        </div>
                        <div class="genre">
                            <p>K-Pop, Dance</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image pic-10">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h3>Shaun - Way Back Home</h3>
                        </div>
                        <div class="genre">
                            <p>Dance/Electronics</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image pic-11">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h3>Blackpink - Boombayah</h3>
                        </div>
                        <div class="genre">
                            <p>K-Pop, Dance</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image pic-12">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h3>Wanna.B (워너비) - Why? (왜요?)</h3>
                        </div>
                        <div class="genre">
                            <p>Dance/Electronics</p>
                        </div>
                    </div>
                </div>
            </div>
                    
        

        <div class="more">
            <a href="#" >Lainnya</a>
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