<!DOCTYPE html>
<html>

<head>
    <title>R4HA</title>
    <link rel='stylesheet' href='assets/css/bulma.min.css'>
    <link rel="stylesheet" href="assets/css/newstyle.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" />
</head>

<body>
    <header class="header-main">
        <nav class="nav bd-grid">
            <div>
                <a href="" class="nav_logo">R4HA</a>
            </div>
            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list">
                    <li class="nav_item"><a href="newindex.html" class="nav_link">Home</a></li>
                    <li class="nav_item"><a href="lemmeknowu.php" class="nav_link">Let me Know U!</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="hero is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column is-3 is-flex">
                        <div class="column-child sidebar shadow">
                            <div class="sidebar-header has-text-centered">
                                <div class="photo"><img src="assets/img/me.png" /></div>
                                <h2 class="header-name">Rahadina Budiman Sundara</h2>
                                <h5>Someday will be developer</h5>
                                <div class="social-icons">
                                    <a href="https://instagram.com/rahadinabudiman" target="_blank"><i
                                            class="bx bxl-instagram bx-md"></i></a>
                                    <a href="https://www.keyzex.com/" target="_blank"><i
                                            class="bx bxl-blogger bx-md"></i></a>
                                    <a href="https://github.com/rahadinabudiman" target="_blank"><i
                                            class="bx bxl-github bx-md"></i></a>
                                    <a href="https://www.linkedin.com/in/rahadinabudiman/" target="_blank"><i
                                            class="bx bxl-linkedin bx-md"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-flex">
                        <div class="column-child">
                            <div class="home">
                                <div class="lemmeknowu">
                                    <h1>Introduce yourself!</h1>
                                    <form method="POST">
                                        <input type="text" name="namakamu" placeholder="Nama Kamu">
                                        <button class="custom-btn btn" name="introduce">Introduce</button>
                                    </form>
                                    <?php
                                        if(isset($_POST['introduce'])){
                                            echo "Hello, ".$_POST['namakamu']."<br>";
                                            echo "Selamat datang di halaman website ini."."<br>";
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="content has-text-centered">
                <p>
                    r4ha.
                </p>
            </div>
        </footer>
    </section>
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="assets/js/typed.js" type="text/javascript"></script>
</body>

</html>