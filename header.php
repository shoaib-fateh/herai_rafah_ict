<!doctype html>
<html lang="en-US">

<head>
    <?php wp_head() ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="robots" content="max-image-preview:large" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <style>
        :root {
            --primary-color: #EE4040;
        }
    </style>
</head>

<body>
    <div id="page" class="site">
        <!-- Header -->
        <header id="sticky-header" class="site-header">
            <div class="main-menu default transparent-menu">
                <div class="container">
                    <div class="manu-wrapper">
                        <div class="site-branding">

                            <a href="" class="custom-logo-link"><img src="<?php echo get_theme_file_uri('/assets/images/logo.png'); ?>" alt=""></a>

                        </div>

                        <nav id="site-navigation" class="main-navigation">
                            <div class="header-nav">
                                <div class="menu-main-menu-container">
                                    <ul id="primary-menu" class="menu-ul">
                                        <li id="menu-item-1037" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1037"><a href="#">Home</a></li>

                                        <li id="menu-item-1034" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1034"><a href="#">About</a></li>
                                        <li id="menu-item-1035" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1035"><a href="#">Service</a></li>
                                        <li id="menu-item-1035" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1035"><a href="#">Packages</a></li>
                                        <li id="menu-item-1037" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1037"><a href="#">Contact</a></li>
                                        <li id="menu-item-3507" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3507"><a href="#">More <i class="fa-solid fa-chevron-down"></i></i></a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-3508" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3508"><a href="#">Speed Test</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <div class="menu-element">
                            <div class="search">
                                <div class="search-icon">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Mobile Menu -->
        <div class="mobile-menu">
            <div class="menu-bar">
                <div class="site-logo">

                    <a href="#" class="custom-logo-link"><img src="<?php echo get_theme_file_uri('/assets/images/logo.png'); ?>" alt=""></a>

                </div>
                <div class="menu-toggle">
                    <i class="fa-solid fa-grip-vertical"></i>
                </div>
            </div>

            <div class="menu-content">

                <div class="menu-main-menu-container">
                    <ul id="primary-menu" class="menu-ul">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1034"><a href="#">Home</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1034"><a href="#">About</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1034"><a href="#">Service</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1034"><a href="#">Packages</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1034"><a href="#">Contact</a></li>
                        <!-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1284"><a href="#">More <i class="fa-solid fa-chevron-down"></i></i></a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1971"><a href="#">Speed Test</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </div>


                <div class="info">
                    <h3 class="title">Contact Info</h3>
                    <div class="info-box">
                        <i class="bi bi-geo-alt"></i>
                        Beginning of Telecommunications Road, above Ferdowsi 2
                    </div>
                    <div class="info-box">
                        <i class="bi bi-envelope"></i>
                        <a href="mailto:info@herairafah.com">
                            info@herairafah.com </a>
                    </div>
                </div>

                <div class="component">
                    <div class="search-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search -->

        <div class="search-window search-active">
            <button class="search-close">
                <i class="fa-solid fa-x"></i>
            </button>
            <form method="get" action="">
                <div class="form-group">
                    <input type="search" name="query" value="" placeholder="Search Here" required="">
                    <button type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>
        </div>