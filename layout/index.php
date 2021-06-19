<!DOCTYPE html>
<html lang="en">
<head>
    <meta chatset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pemrograman Berbasis Web Lanjutan">
    <meta name="author" content="CICI ARMAYANI">
    <meta name="keywords" content="Pemrograman Berbasis Web Lanjutan">
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
                        <a href="index.php" class="active">Home</a>
                    </li>
                    <li>
                        <a href="index.php?page=login_form">Login</a>
                    </li>
                </ul>
            </nav>

            <section>
                <?php
                    if (isset($_GET['page'])) {
                        include $_GET['page'] . ".php";
                    } else {
                        include "main_index.php";
                    }
                ?>
            </section>

            <footer>
                Copyright &copy; 2021
            </footer>

        </main>

    </body>
    </html>