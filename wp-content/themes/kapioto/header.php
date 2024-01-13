<!DOCTYPE html>
<html lang=de>
    <head>
        <meta charset=UTF-8>
        <meta name="robots" content="noindex, nofollow">
        <meta name=viewport content="width=device-width, initial-scale=1.0">
        <title>Kapioto</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <a href="#" class="logo">Kapioto</a>
            
            <div class="menubar">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <ul class="menu">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Reviews</a>
                </li>
                <li>
                    <a href="#">Pricing</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>

            <ul class="actions">
                <li>
                    <a href="tel:+44987065908">+44 987 065 908</a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?= get_bloginfo('template_directory')?>/dist/img/facebook.png" alt="facebook"/>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?= get_bloginfo('template_directory')?>/dist/img/twitter.png" alt="twitter"/>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?= get_bloginfo('template_directory')?>/dist/img/instagram.png" alt="instagram"/>
                    </a>
                </li>
            </ul>
        </header>