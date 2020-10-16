<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="fr">

<?php
    $blog_title = get_bloginfo();
?>

<head>
    <title>
    <?php
    echo $blog_title;
    ?>
    </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/main.css?version=<?php echo rand(1, 1000); ?>" />
    <noscript>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/noscript.css?version=<?php echo rand(1, 1000); ?>" /></noscript>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/slider/style.css?version=<?php echo rand(1, 1000); ?>" />
</head>

<body class="is-preload landing" style="width: 100%; background:white">
    <div id="page-wrapper" style="width: 100% !important;">

        <!-- Header -->
        <header id="header">

            <?php
            $blog_title = get_bloginfo();
            $site_icon_id = get_option('site_icon');
            $icon_url_data = wp_get_attachment_image_src($site_icon_id,  'thumbnail', true);

            if (has_site_icon()){
                echo '<img  id="logo"  src="' . get_site_icon_url() . '" alt="Site Icon" />';
            }
                
            ?>


            <span class="site_title"><?php echo $blog_title;?></span>
 
                <?php
                wp_nav_menu(array(
                    'menu' => 'Principal',
                    'container' => 'nav',
                    'container_id' => 'nav'
                ));
                ?>

            <div class="icons-container">
                <ul class="icons">
                   
                    <li><a href="https://www.facebook.com/Eglisecmp" title="facebook" target="_blank" class="icon brands alt fa-facebook-f"></a></li>
                    <li><a href="https://twitter.com/EgliseCMP" title="twitter" target="_blank" class="icon brands alt fa-twitter"></a></li>
                    <li><a href="#" title="linkedin" class="icon brands alt fa-linkedin-in"></a></li>
                    <li><a href="https://www.instagram.com/explore/locations/761846341/centre-missionnaire-philadelphie"  target="_blank" title="instagram" class="icon brands alt fa-instagram"></a></li>
                    <li><a href="https://www.youtube.com/channel/UCBIVcaYtQHKDbfvD2sh-AJw"  target="_blank"  title="youtube" class="icon brands alt fa-youtube"></a></li>
                    <li><a href="#" title="whatsapp" class="icon brands alt fa-whatsapp"></a></li>
                </ul>
            </div>
        </header>