<!DOCTYPE html>
<html lang="en">
<head>
    <meta chatset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pemrograman Berbasis Web Lanjutan">
    <meta name="author" content="CICI ARMAYANI">
    <meta name="keywords" content="Pemrograman,Berbasis, Web, Lanjutan">
    <title>Album Photo</title>
    <link rel="stylesheet" href="<?php echo ASSET; ?>css/style.css">
</head>
 <body>

    <main>
        <header>
            <img src="<?php echo ASSET; ?>image/Album.jpg" alt="[IMG]">
            </header>

            <nav>
                <ul>
                     <li>
                        <a href="index.php" class="active">Dashboard</a>
                    </li>
                    <li>
                        <a href="index.php?page=album_tampil">Album</a>
                    </li>
                    <li>
                        <a href="index.php?page=photo_tampil">Photos</a>
                    </li>
                    <li>
                        <a href="index.php?page=post_tampil">Post</a>
                    </li>
                    <li>
                        <a href="index.php?page=category_tampil">Category</a>
                    </li>
                    <li>
                        <a href="login_logout.php">Logout</a>
                    </li>
                </ul>
            </nav>

            <section>
                <?php
                    if (isset($_GET['page'])) {
                        include $_GET['page'] . ".php";
                    } else {
                        include "main_dashboard.php";
                    }
                ?>
            </section>

            <footer>
                Copyright &copy; 2021
            </footer>

        </main>

    </body>
    </html>