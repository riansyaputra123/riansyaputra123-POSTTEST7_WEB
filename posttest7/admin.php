<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    if($_SESSION['priv'] == 'user'){
        header("Location: user.php");
    }
    elseif ($_SESSION['priv'] != 'admin'){
        header('Location: proses_login.php');
    }

    // $_SESSION['username'] = "riannscarlezt";
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
                <a href="#beranda" class="nav-link">
                    <i class="bx bx-home"></i>
                    <span class="nav-link-title">Home</span>
                </a>
                <a href="input_admin.php" class="nav-link">
                    <i class='bx bx-list-plus'></i>
                    <span class="nav-link-title">Manage</span>
                </a>
                <a href="pilih_list.php" class="nav-link">
                    <i class='bx bxs-playlist'></i>
                    <span class="nav-link-title">List Song</span>
                </a>
                <a href="#m" class="nav-link">
                    <i class='bx bx-line-chart'></i>
                    <span class="nav-link-title">Statistic</span>
                </a>
                <a href="#m" class="nav-link">
                    <i class='bx bx-cog'></i>
                    <span class="nav-link-title">Settings</span>
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
        <img src="gambar/avicii.jpg" alt="" class="beranda-img" id="gambar1">
        <div class="beranda-teks">
            <h1 class="judul-beranda">Avicii - The Night</h1>
            <p>“Figure out what you’re most passionate about in life and what you’re good at. 
                <br>
                And the mixture between those two and then you should give it your all, all the time.” – Avicii</p>
            <a href="#" class="tombol-ntn">
                <i class="bx bx-caret-right-circle"></i>
                <span>Play Music</span>
            </a>
        </div>
    </section>

    <!--Section popular-->
    <section class="populer container" id="populer">
        <div class="head">
            <h2 class="judul-populer">List Genre</h2>
        </div>
        

        <div class="list-music container">
            <a href="#">
                <div class="music">
                    <div class="music-image">
                        <img src="gambar/pop.jpg" alt="">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h1>POP</h1>
                        </div>
                        <div class="genre">
                            <p>18.6K Song</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image">
                        <img src="gambar/rock.jpg" alt="">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h1>ROCK</h1>
                        </div>
                        <div class="genre">
                            <p>9.4K Song</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image">
                        <img src="gambar/r&b.jpg" alt="">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h1>R&B</h1>
                        </div>
                        <div class="genre">
                            <p>12.1K Song</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image">
                        <img src="gambar/indie.png" alt="">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h1>Indie Pop & Chill</h1>
                        </div>
                        <div class="genre">
                            <p>5.91K Song</p>
                        </div>
                    </div>
                </div>
            </div>
      
        

        <div class="more">
            <a href="#" >Lainnya</a>
        </div>
    </section>

    <!--Section Top Indo-->
    <section class="populer container" id="populer">
        <div class="head">
            <h2 class="judul-populer">User Favorite</h2>
        </div>
        

        <div class="list-music container">
            <a href="#">
                <div class="music">
                    <div class="music-image pic-29">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h1>Tulus - Hati - Hati Dijalan</h1>
                        </div>
                        <div class="genre">
                            <p>6.99M Likes</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image pic-30">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h1>Yiruma - Rivers Flow In You</h1>
                        </div>
                        <div class="genre">
                            <p>5.8M Likes</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image pic-31">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h1>Twice - What Is Love</h1>
                        </div>
                        <div class="genre">
                            <p>4.4M Likes</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image pic-32">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h1>Bruno Mars - It Will Rain</h1>
                        </div>
                        <div class="genre">
                            <p>1.2M Likes</p>
                        </div>
                    </div>
                </div>
            </div>
                    
        

        <div class="more">
            <a href="#" >Lainnya</a>
        </div>
    </section>


    <!--Section Best K-Pop -->
    <section class="populer container" id="populer">
        <div class="head">
            <h2 class="judul-populer">Asian Most Bookmark</h2>
        </div>
        

        <div class="list-music container">
            <a href="#">
                <div class="music">
                    <div class="music-image pic-33">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h1>Blackpink - DUDDUDU</h1>
                        </div>
                        <div class="genre">
                            <p>11K Saved</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image pic-10">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h1>Shaun - Way Back Home</h1>
                        </div>
                        <div class="genre">
                            <p>9.5K Saved</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image pic-11">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h1>BlackPink - Boombayah</h1>
                        </div>
                        <div class="genre">
                            <p>7.44K Saved</p>
                        </div>
                    </div>
                </div>

                <div class="music">
                    <div class="music-image pic-12">
                    </div>
                    <div class="music-text">
                        <div class="judul">
                            <span> <i class='bx bx-play'></i></span>
                            <h1>Wanna.B (워너비) - Why? (왜요?)</h1>
                        </div>
                        <div class="genre">
                            <p>5.2K Saved</p>
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