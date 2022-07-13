<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Tom Coomber Art</title>
    <?php
    wp_head();
    ?>
<body>
    <!-- Nav -->
    <header>
        <nav class="navbar">
            <?php
                the_custom_logo();
            ?>
            <!-- <a href="index.html" class="nav-link hover-underline-animation">Tom Coomber Art</a> -->

            <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary', 
                        'container' => '', 
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul id="" class="nav-menu">%3$s</ul>'
                    )
                );
            ?>

            <!-- <ul class="nav-menu">
                <li class="nav-item">
                    <a href="artwork.html" class="nav-link hover-underline-animation">Artwork</a>
                </li>
                <li class="nav-item">
                    <a href="about.html" class="nav-link hover-underline-animation">About</a>
                </li>
                <li class="nav-item">
                    <a href="exhibitions.html" class="nav-link hover-underline-animation">Exhibitions</a>
                </li>
                <li class="nav-item">
                    <a href="contact.html" class="nav-link hover-underline-animation">Contact</a>
                </li>
            </ul> -->
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>