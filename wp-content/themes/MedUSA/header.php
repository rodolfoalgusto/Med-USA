<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name')?> <?php wp_title('|'); ?>
    </title>

    <meta name="description" content=".">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php bloginfo('name'); ?>" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="http://medusa.com" />

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/css/uikit.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <!-- inicio wordpress Header -->
    <?php wp_head(); ?>
    <!-- fim wordpress Header -->
</head>

<body <?php body_class(); ?>
><!-- comando para puxar url do diretorio -->
    <?php
    $img_url = get_stylesheet_directory_uri() . '/img';
?>

    <!-- login e busca -->
    <div class=" container " style="background:#000">
        <div class="uk-container login-busca uk-flex uk-flex-right" sytle="padding-right:">
            <div class="caixa-login">
                <div class="uk-margin-medium-right"><a href="#" class="login">Login</a></div>
            </div>
            <div class="busca">
                <form class="uk-search-toggle" href="uk-search-icon" action="<?php bloginfo('url');?>//" method="get">
                    <input type="text" name="#" id="#" placeholder="Buscar" value="<?php the_search_query(); ?>">
                    <input type="submit" id="#" value="Buscar">
                </form>
            </div>
        </div>
    </div>
    <!-- fim login e busca -->

    <!-- CABECALHO -->
    <header class="header">
        <div class="logo-menu uk-container uk-flex">
            <div>
                <a  href="home"><img class="img-logo" src="<?= $img_url; ?>/logo-medusa.svg " alt="logo"></a>
            </div>
            <nav class="nav uk-navbar-right ">
                <div class="menu uk-navbar-right">
                    <ul class="uk-subnav   uk-nav " id="menu-ul">
                        <li class="uk-active  "><a href="about"></a>About</li>
                        <li class=" "><a href="service"></a>Service</li>
                        <li class=""><a href="software"></a>Software</li>
                        <li class=" "><a href="contact"></a>Contact Us</li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- fim cabecalho -->