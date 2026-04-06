<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPV</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
        // apply saved theme before paint to avoid flash
        (function() {
            var t = localStorage.getItem('spv-theme');
            if (t) document.documentElement.setAttribute('data-theme', t);
        })();
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/styles.css">

    <!-- favicons
    ================================================== -->
    <link  rel="apple-touch-icon" sizes="180x180" href="try.png">
    <link rel="icon" type="image/png" sizes="32x32" href="try.png">
    <link rel="icon" type="image/png" sizes="16x16" href="try.png">
    <link rel="manifest" href="/site.webmanifest">

</head>


<body id="top">
    
    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap ss-home">


        <!-- # site header 
        ================================================== -->
        <header class="s-header">

            <div class="container s-header__content">
                
                <div class="s-header__block">
                    <div class="header-logo">
                        <a class="logo" href="/">
                            <img src="images/try.png" alt="Homepage">
                        </a>
                    </div>
                    <a class="header-menu-toggle" href="#0"><span>Menu</span></a>
                </div> <!-- end s-header__block -->
            
                <nav class="header-nav">    
                    <ul class="header-nav__links">
                        <li class="current"><a class="smoothscroll" href="#intro">Home</a></li>
                        <li><a class="smoothscroll" href="#about">About</a></li>
                        <li><a class="smoothscroll" href="#menu">Packages</a></li>                                                
                        <li><a class="smoothscroll" href="#gallery">Gallery</a></li>
                        <li><a class="smoothscroll" href="#casket">Casket</a></li>
                        <li><a class="smoothscroll" href="#gallery">Facilities & Amenities</a></li>
                        <li><a class="smoothscroll" href="#testimonials">Obituaries</a></li>
                        <li><a class="smoothscroll" href="#contact">Contact Us</a></li>
                        <?php if (session()->get('isLoggedIn')): ?>
                            <li><a class="smoothscroll" href="#account">My Account</a></li>
                            <li><a class="smoothscroll" href="#account">Transactions</a></li>
                        <?php endif; ?>
                        <li>
                            <button class="theme-toggle" id="theme-toggle" aria-label="Toggle light/dark mode">
                                <!-- crescent moon (shown in dark mode) -->
                                <svg class="theme-toggle__icon theme-toggle__icon--moon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M12 3a9 9 0 1 0 9 9c0-.46-.04-.92-.1-1.36a5.389 5.389 0 0 1-4.4 2.26 5.403 5.403 0 0 1-3.14-9.8c-.44-.06-.9-.1-1.36-.1z" fill="currentColor"/>
                                </svg>
                                <!-- sun (shown in light mode) -->
                                <svg class="theme-toggle__icon theme-toggle__icon--sun" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="4.5" fill="currentColor"/>
                                    <g stroke="currentColor" stroke-width="2" stroke-linecap="round">
                                        <line x1="12" y1="2"   x2="12" y2="5"/>
                                        <line x1="12" y1="19"  x2="12" y2="22"/>
                                        <line x1="2"  y1="12"  x2="5"  y2="12"/>
                                        <line x1="19" y1="12"  x2="22" y2="12"/>
                                        <line x1="4.93" y1="4.93"   x2="7.05" y2="7.05"/>
                                        <line x1="16.95" y1="16.95" x2="19.07" y2="19.07"/>
                                        <line x1="4.93" y1="19.07"  x2="7.05" y2="16.95"/>
                                        <line x1="16.95" y1="7.05"  x2="19.07" y2="4.93"/>
                                    </g>
                                </svg>
                            </button>
                        </li>
                    </ul> <!-- end header-nav__links -->
                    
                    <div class="header-contact">
                        <?php if (session()->get('isLoggedIn') == FALSE): ?>
                            <a class="header-contact__num btn" id="login-btn">
                                Login
                            </a>
                        <?php else: ?>
                            <a href="<?php echo base_url("Home/logout")?>" class="header-contact__num btn">
                                Logout
                            </a>
                        <?php endif; ?>
                    </div> <!-- end header-contact -->
                </nav> <!-- end header-nav -->         
            
            </div> <!-- end s-header__content -->

        </header> <!-- end s-header -->


        <!-- # intro
        ================================================== -->
        <?php
            $introBgStyle = !empty($cms_images[0])
                ? 'style="background-image: url(\'data:image/jpeg;base64,' . $cms_images[0]['fld_Image'] . '\')"'
                : 'style="background-image: url(\'images/intro-try2.png\')"';
        ?>
        <section id="intro" class="s-intro target-section intro-has-cover" <?= $introBgStyle ?>>

            <!-- original content grid -->
            <div class="container s-intro__below">
                <div class="grid-block s-intro__content">

                    <div class="intro-header">
                        <?php
                            $titleItems = array_values(array_filter($cms_content ?? [], fn($i) => strtolower($i['fld_Type']) === 'title'));
                        ?>
                        <div class="intro-header__overline"><?= !empty($titleItems[0]) && $titleItems == "Title" ? esc($titleItems[0]['fld_Content']) : 'Welcome to' ?></div>
                        <h1 class="intro-header__big-type">
                            <?= !empty($titleItems[1]) && $titleItems == "Title" ? esc($titleItems[1]['fld_Content']) : 'Sñra de Porta Vaga' ?>
                        </h1>
                    </div> <!-- end intro-header -->

                    <div class="intro-block-content">

                        <figure class="intro-block-content__pic">
                            <?php if (!empty($cms_images[1])): ?>
                                <img src="data:image/jpeg;base64,<?= $cms_images[1]['fld_Image'] ?>"
                                     alt="<?= esc($cms_images[1]['fld_Alt']) ?>">
                            <?php else: ?>
                                <img src="images/intro-try3.png" alt="">
                            <?php endif; ?>
                        </figure>

                        <div class="intro-block-content__text-wrap">
                            <?php
                                $paraItems = array_values(array_filter($cms_content ?? [], fn($i) => strtolower($i['fld_Type']) === 'paragraph'));
                            ?>
                            <?php if (!empty($paraItems)): ?>
                                <?php foreach ($paraItems as $item): ?>
                                    <p class="intro-block-content__text"><?= esc($item['fld_Content']) ?></p>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p class="intro-block-content__text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                            <?php endif; ?>

                            <ul class="intro-block-content__social">
                                <?php if (!empty($cms_socials)): ?>
                                    <?php foreach ($cms_socials as $social): ?>
                                        <li><a href="<?= esc($social['fld_URL']) ?>" target="_blank" rel="noopener"><?= esc($social['fld_SocialMedia']) ?></a></li>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <li><a href="#0">FB</a></li>
                                    <li><a href="#0">IG</a></li>
                                <?php endif; ?>
                            </ul>
                        </div>

                    </div> <!-- end intro-block-content -->

                    <div class="intro-scroll">
                        <a class="smoothscroll" href="#about">
                            <span class="intro-scroll__circle-text"></span>
                            <span class="intro-scroll__text u-screen-reader-text">Scroll Down</span>
                            <div class="intro-scroll__icon">
                                <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m5.214 14.522s4.505 4.502 6.259 6.255c.146.147.338.22.53.22s.384-.073.53-.22c1.754-1.752 6.249-6.244 6.249-6.244.144-.144.216-.334.217-.523 0-.193-.074-.386-.221-.534-.293-.293-.766-.294-1.057-.004l-4.968 4.968v-14.692c0-.414-.336-.75-.75-.75s-.75.336-.75.75v14.692l-4.979-4.978c-.289-.289-.761-.287-1.054.006-.148.148-.222.341-.221.534 0 .189.071.377.215.52z" fill-rule="nonzero"/></svg>
                            </div>
                        </a>
                    </div>

                </div> <!-- end grid-block -->
            </div> <!-- end s-intro__below -->

        </section> <!-- end s-intro -->


        <!-- # about
        ================================================== -->
        <section id="about" class="container s-about target-section">

            <div class="row s-about__content">

                <div class="column xl-4 lg-5 md-12 s-about__content-start">

                    <div class="section-header" data-num="01">
                        <h2 class="text-display-title">Our Story</h2>
                    </div>  

                    <figure class="about-pic-primary">
                        <?php if (!empty($cms_about_images[0])): ?>
                            <img src="data:image/jpeg;base64,<?= $cms_about_images[0]['fld_Image'] ?>"
                                 alt="<?= esc($cms_about_images[0]['fld_Alt']) ?>">
                        <?php else: ?>
                            <img src="images/intro-try4.png" alt="">
                        <?php endif; ?>
                    </figure>

                </div> <!-- end s-about__content-start -->

                <div class="column xl-6 lg-6 md-12 s-about__content-end">       
                    <div id="about_content_paragraph">
                        <?php if (!empty($cms_about)): ?>
                            <?php foreach ($cms_about as $item): ?>
                                <p><?= esc($item['fld_Content']) ?></p>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>Señora de Porta Vaga Funeral Homes is a trusted provider of funeral services in Cavite, Philippines.</p>
                        <?php endif; ?>
                    </div>
                    <?php if (!empty($cms_mission_vision)): ?>
                        <?php foreach ($cms_mission_vision as $item): ?>
                            <h2><?= esc(ucfirst($item['fld_Type'])) ?></h2>
                            <p><?= esc($item['fld_Content']) ?></p>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <h2>Mission</h2>
                        <p>To deliver innovative and personalized funeral services through the use of modern technology, eco-friendly practices, and efficient management systems, while providing compassionate support that respects cultural traditions and meets the evolving needs of families.</p>
                        <h2>Vision</h2>
                        <p>To be a leading modern funeral service provider that integrates innovation, sustainability, and compassionate care, setting new standards in honoring life and supporting families.</p>
                    <?php endif; ?>

                </div> <!--end column -->
                
            </div> <!-- end s-about__content-end -->
            
        </section> <!-- end s-about -->   


        <!-- # menu
        ================================================== -->
        <section id="menu" class="container s-menu target-section">

            <div class="row s-menu__content">
                
                <div class="column xl-4 lg-5 md-12 s-menu__content-start">

                    <div class="section-header" data-num="02">
                        <h2 class="text-display-title">Our Packages</h2>
                    </div>  

                    <nav class="tab-nav">
                        <ul class="tab-nav__list"> 
                            <li>
                                <a href="tab-signature-blends">
                                    <span>Indigent Package</span>
                                    <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m14.523 18.787s4.501-4.505 6.255-6.26c.146-.146.219-.338.219-.53s-.073-.383-.219-.53c-1.753-1.754-6.255-6.258-6.255-6.258-.144-.145-.334-.217-.524-.217-.193 0-.385.074-.532.221-.293.292-.295.766-.004 1.056l4.978 4.978h-14.692c-.414 0-.75.336-.75.75s.336.75.75.75h14.692l-4.979 4.979c-.289.289-.286.762.006 1.054.148.148.341.222.533.222.19 0 .378-.072.522-.215z" fill-rule="nonzero"/></svg>
                                </a>
                            </li>
                            <li>
                                <a href="#tab-pastries">
                                    <span>Regular Service Package</span>
                                    <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m14.523 18.787s4.501-4.505 6.255-6.26c.146-.146.219-.338.219-.53s-.073-.383-.219-.53c-1.753-1.754-6.255-6.258-6.255-6.258-.144-.145-.334-.217-.524-.217-.193 0-.385.074-.532.221-.293.292-.295.766-.004 1.056l4.978 4.978h-14.692c-.414 0-.75.336-.75.75s.336.75.75.75h14.692l-4.979 4.979c-.289.289-.286.762.006 1.054.148.148.341.222.533.222.19 0 .378-.072.522-.215z" fill-rule="nonzero"/></svg>
                                </a>
                            </li>
                            <li>
                                <a href="#tab-gourmet-treats">
                                    <span>Special Service Package</span>
                                    <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m14.523 18.787s4.501-4.505 6.255-6.26c.146-.146.219-.338.219-.53s-.073-.383-.219-.53c-1.753-1.754-6.255-6.258-6.255-6.258-.144-.145-.334-.217-.524-.217-.193 0-.385.074-.532.221-.293.292-.295.766-.004 1.056l4.978 4.978h-14.692c-.414 0-.75.336-.75.75s.336.75.75.75h14.692l-4.979 4.979c-.289.289-.286.762.006 1.054.148.148.341.222.533.222.19 0 .378-.072.522-.215z" fill-rule="nonzero"/></svg>
                                </a>
                            </li>
                        </ul>
                    </nav> <!-- end tab-nav -->

                </div> <!-- end s-menu__content-start -->

                <div class="column xl-6 lg-6 md-12 s-menu__content-end">

                    <div class="tab-content menu-block">

                        <div id="tab-signature-blends" class="menu-block__group tab-content__item">

                            <h6 class="menu-block__cat-name">
                                Indigent Package
                            </h6>

                            <ul class="menu-list">
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">                                            
                                        <h4>Indigent Package</h4>
                                        <p>
                                            Inclusion : 
                                        </p>
                                        <ul>
                                            <li>Funeral Service</li>
                                            <li>Stucko Casket</li>
                                            <li>Flower Stand courtesy Mayor Denver Chua</li>
                                            <li>Flower Stand courtesy Mayor Cong Jolo Revilla</li>
                                            <li>1 Flower (front)</li>
                                            <li>Water Dispenser and 1 Bottle of watter (round)</li>
                                            <li>20 Chairs</li>
                                            <li>2 Bundle Flower Offering (Church Mass)</li>
                                            <li>Tarpaulin</li>
                                        </ul>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>₱</span>25,000.00
                                    </div>
                                </li>
                            </ul> <!-- end menu-list -->

                        </div> <!-- end tab-content__item -->


                        <div id="tab-pastries" class="menu-block__group tab-content__item">

                            <h6 class="menu-block__cat-name">
                                Regular Service Package
                            </h6>

                            <ul class="menu-list">
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">                                            
                                        <h4>OMS Half Glass Casket</h4>
                                        <p>
                                            Inclusion : 
                                        </p>
                                        <ul>
                                            <li>2pcs Stand Flower</li>
                                            <li>1 Flower (front)</li>
                                            <li>Water Dispenser and 2 Bottle of watter (round)</li>
                                            <li>20 Chairs</li>
                                            <li>2 Bundle Flower Offering (Church Mass)</li>
                                            <li>1 Pair Candle</li>
                                        </ul>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>₱</span>45,000.00
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">                                            
                                        <h4>OMS Half Glass Casket</h4>
                                        <p>
                                            Inclusion : 
                                        </p>
                                        <ul>
                                            <li>4pcs Stand Flower</li>
                                            <li>2 Flower (front)</li>
                                            <li>Water Dispenser and 5 Bottle of watter (round)</li>
                                            <li>40 Chairs</li>
                                            <li>2 Bundle Flower Offering (Church Mass)</li>
                                            <li>Flower Arrangement</li>
                                            <li>6pcs Stand Flower</li>
                                            <li>1 Flower (front)</li>
                                            <li>2 Pair Candle</li>
                                            <li>Tarpaulin</li>
                                        </ul>
                                        <br>
                                        <ul>
                                            <li>Goldilocks Pasalubong for Last Night</li>
                                        </ul>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>₱</span>65,000.00
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">                                            
                                        <h4>Junior Full Cap Casket</h4>
                                        <p>
                                            Inclusion : 
                                        </p>
                                        <ul>
                                            <li>4pcs Stand Flower (Change Flower)</li>
                                            <li>3 Flower (front) (Change Flower)</li>
                                            <li>Water Dispenser and 5 Bottle of watter (round)</li>
                                            <li>40 Chairs</li>
                                            <li>2 Bundle Flower Offering (Church Mass)</li>
                                            <li>Flower Arrangement</li>
                                            <li>6pcs Stand Flower</li>
                                            <li>1 Flower (front)</li>
                                            <li>2 Pair Candle</li>
                                            <li>Tarpaulin</li>
                                            <li>Picture with Frame</li>
                                        </ul>
                                        <br>
                                        <ul>
                                            <li>Goldilocks Pasalubong for Last Night</li>
                                        </ul>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>₱</span>85,000.00
                                    </div>
                                </li>
                            </ul> <!-- end menu-list -->

                        </div> <!-- end tab-content__item -->


                        <div id="tab-gourmet-treats" class="menu-block__group tab-content__item">

                            <h6 class="menu-block__cat-name">
                                Special Service Package
                            </h6>

                            <ul class="menu-list">
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">                                            
                                        <h4>Junior Full Cap Casket</h4>
                                        <p>
                                            Inclusion : 
                                        </p>
                                        <ul>
                                            <li>4pcs Stand Flower (Change Flower)</li>
                                            <li>1 Flower (front) (Change Flower)</li>
                                            <li>1 Flower (top) (Change Flower)</li>
                                            <li>Water Dispenser and 5 Bottle of watter (round)</li>
                                            <li>40 Chairs</li>
                                            <li>2 Bundle Flower Offering (Church Mass)</li>
                                            <li>Flower Arrangement</li>
                                            <li>12pcs Stand Flower</li>
                                            <li>1 Flower (front)</li>
                                            <li>2 Pair Candle</li>
                                            <li>Tarpaulin</li>
                                            <li>Flower Stand Picture with Frame</li>
                                            <li>Tent</li>
                                        </ul>
                                        <br>
                                        <ul>
                                            <li>Goldilocks Pasalubong for Last Night</li>
                                        </ul>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>₱</span>180,000.00
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">                                            
                                        <h4>Junior Full Cap Casket</h4>
                                        <p>
                                            Inclusion : 
                                        </p>
                                        <ul>
                                            <li>4pcs Stand Flower (Change Flower)</li>
                                            <li>1 Flower (front) (Change Flower)</li>
                                            <li>1 Flower (top) (Change Flower)</li>
                                            <li>Water Dispenser and 5 Bottle of watter (round)</li>
                                            <li>40 Chairs</li>
                                            <li>2 Bundle Flower Offering (Church Mass)</li>
                                            <li>Flower Arrangement</li>
                                            <li>20pcs Stand Flower</li>
                                            <li>1 Flower (front)</li>
                                            <li>3 Pair Candle</li>
                                            <li>Tarpaulin</li>
                                            <li>Flower Stand Picture with Frame</li>
                                            <li>Tent</li>
                                        </ul>
                                        <br>
                                        <ul>
                                            <li>Goldilocks Pasalubong & Serenata Band for Last Night</li>
                                        </ul>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>₱</span>280,000.00
                                    </div>
                                </li>
                            </ul> <!-- end menu-list -->
                            
                        </div> <!-- end tab-content__item -->

                    </div> <!-- menu-block -->

                </div> <!-- end s-menu__content-end -->

            </div> <!-- end s-menu__content -->

        </section> <!-- end s-menu -->  


        <!-- # casket
        ================================================== -->
        <section id="casket" class="container s-gallery target-section">

            <div class="row s-gallery__header">
                <div class="column xl-12 section-header-wrap">
                    <div class="section-header" data-num="03">
                        <h2 class="text-display-title">Casket</h2>
                    </div>               
                </div> <!-- end section-header-wrap -->   
            </div> <!-- end s-gallery__header -->   

            <div class="gallery-items grid-cols grid-cols--wrap">

                <div class="gallery-items__item grid-cols__column">
                    <a href="images/gallery/large/1.jpeg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/1.jpeg" 
                            srcset="images/gallery/large/1.jpeg" alt="">                                
                    </a>
                </div> <!-- end casket-items__item-->
    
                <div class="gallery-items__item grid-cols__column">
                    <a href="images/gallery/large/2.jpeg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/2.jpeg" 
                            srcset="images/gallery/large/2.jpeg" alt="">                               
                    </a>
                </div> <!-- end casket-items__item -->
    
                <div class="gallery-items__item grid-cols__column">
                    <a href="images/gallery/large/3.jpeg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/3.jpeg" 
                            srcset="images/gallery/large/3.jpeg" alt="">                             
                    </a>
                </div> <!-- end casket-items__item -->
    
                <div class="gallery-items__item grid-cols__column">
                    <a href="images/gallery/large/4.jpeg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/4.jpeg" 
                            srcset="images/gallery/large/4.jpeg" alt="">                        
                    </a>
                </div> <!-- end casket-items__item -->
    
                <div class="gallery-items__item grid-cols__column">
                    <a href="images/gallery/large/5.jpeg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/5.jpeg" 
                            srcset="images/gallery/large/5.jpeg" alt="">                                    
                    </a>
                </div> <!-- end casket-items__item -->
                
            </div> <!-- end grid-list-items -->

        </section> <!-- end s-casket -->  


        <!-- # gallery
        ================================================== -->
        <section id="gallery" class="container s-gallery target-section">

            <div class="row s-gallery__header">
                <div class="column xl-12 section-header-wrap">
                    <div class="section-header" data-num="04">
                        <h2 class="text-display-title">Gallery</h2>
                    </div>               
                </div> <!-- end section-header-wrap -->   
            </div> <!-- end s-gallery__header -->   

            <div class="gallery-items grid-cols grid-cols--wrap">

                <div class="gallery-items__item grid-cols__column">
                    <a href="images/gallery/large/6.jpeg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/6.jpeg" 
                            srcset="images/gallery/large/6.jpeg" alt="">                          
                    </a>
                </div> <!-- end gallery-items__item-->
    
                <div class="gallery-items__item grid-cols__column">
                    <a href="images/gallery/large/7.jpeg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/7.jpeg" 
                            srcset="images/gallery/large/7.jpeg" alt="">                          
                    </a>
                </div> <!-- end gallery-items__item -->

                <div class="gallery-items__item grid-cols__column">
                    <a href="images/gallery/large/8.jpeg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/8.jpeg" 
                            srcset="images/gallery/large/8.jpeg" alt="">                           
                    </a>
                </div> <!-- end gallery-items__item -->
    
                <div class="gallery-items__item grid-cols__column">
                    <a href="images/gallery/large/9.jpeg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/9.jpeg" 
                            srcset="images/gallery/large/9.jpeg" alt="">                           
                    </a>
                </div> <!-- end gallery-items__item -->
    
                <div class="gallery-items__item grid-cols__column">
                    <a href="images/gallery/large/10.jpeg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/10.jpeg" 
                            srcset="images/gallery/large/10.jpeg" alt="">                           
                    </a>
                </div> <!-- end gallery-items__item -->
                
            </div> <!-- end grid-list-items -->

        </section> <!-- end s-gallery -->  


        <!-- # obituaries
        ================================================== -->
        <section id="testimonials" class="s-obituaries">

            <div class="container">
                <div class="obituaries-header">
                    <div class="obituaries-header__line"></div>
                    <h2 class="obituaries-header__title">In Memoriam</h2>
                    <p class="obituaries-header__sub">Honoring those who have passed</p>
                    <div class="obituaries-header__line"></div>
                </div>

                <?php if (!empty($obituaries)): ?>
                <div class="swiper-container obituaries-slider">
                    <div class="swiper-wrapper">

                        <?php foreach ($obituaries as $ob): ?>
                        <div class="obituary-card swiper-slide">

                            <div class="obituary-card__photo-wrap">
                                <?php if (!empty($ob['fld_ObituaryImage'])): ?>
                                    <img src="data:image/jpeg;base64,<?= $ob['fld_ObituaryImage'] ?>"
                                         alt="<?= esc($ob['fld_FirstName'] . ' ' . $ob['fld_LastName']) ?>"
                                         class="obituary-card__photo">
                                <?php else: ?>
                                    <div class="obituary-card__photo obituary-card__photo--placeholder">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
                                        </svg>
                                    </div>
                                <?php endif; ?>
                                <div class="obituary-card__candle">&#x1F56F;</div>
                            </div>

                            <div class="obituary-card__body">
                                <h3 class="obituary-card__name">
                                    <?= esc($ob['fld_FirstName'] . ' ' . ($ob['fld_MiddleName'] ? $ob['fld_MiddleName'] . ' ' : '') . $ob['fld_LastName']) ?>
                                </h3>

                                <?php if (!empty($ob['fld_DateOfBirth']) || !empty($ob['fld_DateOfDeath'])): ?>
                                <p class="obituary-card__dates">
                                    <?= !empty($ob['fld_DateOfBirth']) ? esc(date('F j, Y', strtotime($ob['fld_DateOfBirth']))) : '?' ?>
                                    &nbsp;&mdash;&nbsp;
                                    <?= !empty($ob['fld_DateOfDeath']) ? esc(date('F j, Y', strtotime($ob['fld_DateOfDeath']))) : '?' ?>
                                </p>
                                <?php endif; ?>

                                <div class="obituary-card__divider"></div>

                                <?php if (!empty($ob['fld_BurialDate'])): ?>
                                <div class="obituary-card__detail">
                                    <span class="obituary-card__detail-icon">&#x26B0;</span>
                                    <span>
                                        <strong>Burial:</strong>
                                        <?= esc(date('F j, Y', strtotime($ob['fld_BurialDate']))) ?>
                                        <?php if (!empty($ob['fld_BurialTime'])): ?>
                                            at <?= esc(date('g:i A', strtotime($ob['fld_BurialTime']))) ?>
                                        <?php endif; ?>
                                    </span>
                                </div>
                                <?php endif; ?>

                                <?php if (!empty($ob['fld_Cemetery'])): ?>
                                <div class="obituary-card__detail">
                                    <span class="obituary-card__detail-icon">&#x1F4CD;</span>
                                    <span><?= esc($ob['fld_Cemetery']) ?></span>
                                </div>
                                <?php endif; ?>
                            </div>

                        </div> <!-- end obituary-card -->
                        <?php endforeach; ?>

                    </div> <!-- end swiper-wrapper -->
                    <div class="swiper-pagination obituaries-pagination"></div>
                </div> <!-- end obituaries-slider -->

                <?php else: ?>
                    <p class="obituaries-empty">No obituaries to display at this time.</p>
                <?php endif; ?>
            </div>

        </section> <!-- end s-obituaries --> 

        
        <!-- # contact
        ================================================== -->
        <section id="contact" class="container s-contact target-section">

            <div class="row s-contact__content">

                <div class="column xl-4 lg-5 md-12 s-contact__info">

                    <div class="section-header" data-num="05">
                        <h2 class="text-display-title">Contact Us</h2>
                    </div>

                    <p>
                        We're here to help and answer any questions you may have.
                        Reach out and we'll respond as soon as we can.
                    </p>

                </div> <!-- end s-contact__info -->

                <div class="column xl-7 lg-6 md-12 s-contact__form-wrap">

                    <form id="contact-form" class="s-contact__form" novalidate>

                        <div class="row">
                            <div class="column xl-6 md-12">
                                <div class="s-contact__field">
                                    <label for="contact-name">Full Name</label>
                                    <input type="text" id="contact-name" name="name" placeholder="Juan dela Cruz" required>
                                </div>
                            </div>
                            <div class="column xl-6 md-12">
                                <div class="s-contact__field">
                                    <label for="contact-email">Email</label>
                                    <input type="email" id="contact-email" name="email" placeholder="your@email.com" required>
                                </div>
                            </div>
                        </div>

                        <div class="s-contact__field">
                            <label for="contact-subject">Subject</label>
                            <input type="text" id="contact-subject" name="subject" placeholder="How can we help?">
                        </div>

                        <div class="s-contact__field">
                            <label for="contact-message">Message</label>
                            <textarea id="contact-message" name="message" rows="6" placeholder="Your message..." required></textarea>
                        </div>

                        <button type="submit" class="btn s-contact__submit">Send Message</button>

                        <div class="s-contact__status" id="contact-status" aria-live="polite"></div>

                    </form>

                </div> <!-- end s-contact__form-wrap -->

            </div> <!-- end s-contact__content -->

        </section> <!-- end s-contact -->


        <!-- # footer 
        ================================================== -->
        <footer id="footer" class="container s-footer">  
            
            <div class="row s-footer__top row-x-center">
                <div class="column xl-6 lg-8 md-10 footer-block footer-newsletter">                  
    
                    <h5>
                    Subscribe to our mailing list for <br>
                    updates, news, and exclusive offers.
                    </h5>
    
                    <div class="subscribe-form">
                        <form id="mc-form" class="mc-form">
                            <div class="mc-input-wrap">
                                <input type="email" name="EMAIL" id="mce-EMAIL" placeholder="Your Email Address" title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" required>
                                <input type="submit" name="subscribe" value="Subscribe" class="btn btn--primary">
                                <!-- <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cdb7b577e41181934ed6a6a44_9a91cfe7b3" tabindex="-1" value=""></div> -->
                            </div> 
                            <div class="mc-status"></div>
                        </form>
                    </div> <!-- end subscribe-form -->

                </div> <!-- end footer-newsletter -->
            </div> <!-- end s-footer__top -->         

            <div class="row s-footer__main">             
                <div class="column xl-3 lg-12 footer-block s-footer__main-start">     

                    <div class="s-footer__logo">
                        <a class="logo" href="index.html">
                            <!-- <img src="images/logo.svg" alt="Homepage"> -->
                        </a>
                    </div>  

                    <ul class="s-footer__social social-list">
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path></svg>
                                <span class="u-screen-reader-text">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m20.665 3.717-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42 10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15 4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434z"></path></svg>
                                <span class="u-screen-reader-text">Telegram</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                                <span class="u-screen-reader-text">Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M8.31 10.28a2.5 2.5 0 1 0 2.5 2.49 2.5 2.5 0 0 0-2.5-2.49zm0 3.8a1.31 1.31 0 1 1 0-2.61 1.31 1.31 0 1 1 0 2.61zm7.38-3.8a2.5 2.5 0 1 0 2.5 2.49 2.5 2.5 0 0 0-2.5-2.49zM17 12.77a1.31 1.31 0 1 1-1.31-1.3 1.31 1.31 0 0 1 1.31 1.3z"></path><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm7.38 10.77a3.69 3.69 0 0 1-6.2 2.71L12 16.77l-1.18-1.29a3.69 3.69 0 1 1-5-5.44l-1.2-1.3H7.3a8.33 8.33 0 0 1 9.41 0h2.67l-1.2 1.31a3.71 3.71 0 0 1 1.2 2.72z"></path><path d="M14.77 9.05a7.19 7.19 0 0 0-5.54 0A4.06 4.06 0 0 1 12 12.7a4.08 4.08 0 0 1 2.77-3.65z"></path></svg>
                                <span class="u-screen-reader-text">Tripadvisor</span>
                            </a>
                        </li>
                    </ul> <!--end s-footer__social -->

                </div> <!-- end s-footer__main-start -->
                

                <div class="column xl-9 lg-12 s-footer__main-end grid-cols grid-cols--wrap">

                    <div class="grid-cols__column footer-block">
                        <h6>Location</h6>
                        <p>
                        867 Dra. Salamanca St. San Roque, Cavite City, Cavite,
                        Philippines, 4100
                        </p>
                    </div>
                    
                    <div class="grid-cols__column footer-block">     
                        <h6>Contacts</h6>
                        <ul class="link-list">
                            <li><a href="mailto:#0">contact@test.com</a></li>
                            <li><a href="tel:+2135551212">(213) 555-123-3456</a></li>
                        </ul> 
                    </div>
                    
                    <div class="grid-cols__column footer-block">                   
                        <h6>Opening Hours</h6>
                        <ul class="opening-hours">
                            <li><span class="opening-hours__days">Weekdays</span><span class="opening-hours__time">10:00am - 9:00pm</span></li>
                            <li><span class="opening-hours__days">Weekends</span><span class="opening-hours__time">9:00am - 10:00pm</span></li>
                        </ul> 
                    </div>  

                </div> <!-- s-footer__main-end -->                  

            </div> <!-- end  s-footer__main-content -->                 
            
            <div class="row s-footer__bottom">       
               
                <div class="column xl-6 lg-12">
                    <p class="ss-copyright">
                        <span>© SPV 2026</span> 
                    </p>
                </div>
                

            </div> <!-- end s-footer__bottom -->         

            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top">                 
                    <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m14.523 18.787s4.501-4.505 6.255-6.26c.146-.146.219-.338.219-.53s-.073-.383-.219-.53c-1.753-1.754-6.255-6.258-6.255-6.258-.144-.145-.334-.217-.524-.217-.193 0-.385.074-.532.221-.293.292-.295.766-.004 1.056l4.978 4.978h-14.692c-.414 0-.75.336-.75.75s.336.75.75.75h14.692l-4.979 4.979c-.289.289-.286.762.006 1.054.148.148.341.222.533.222.19 0 .378-.072.522-.215z" fill-rule="nonzero"/></svg>
                </a>                                
                <span>Back To Top</span>   
            </div> <!-- end ss-go-top -->
            
        </footer> <!-- end s-footer -->

    </div> <!-- end page-wrap -->


    <!-- Java Script
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <!-- # login modal
    ================================================== -->
    <div id="login-modal" class="login-modal" role="dialog" aria-modal="true" aria-labelledby="login-modal-title" hidden>
        <div class="login-modal__overlay" id="login-modal-overlay"></div>
        <div class="login-modal__box">
            <button class="login-modal__close" id="login-modal-close" aria-label="Close login modal">&times;</button>
            <h2 id="login-modal-title" class="login-modal__title">Login</h2>
            <form class="login-modal__form" id="login-form" action="/" method="post" novalidate>
                <div class="login-modal__field">
                    <label for="login-email">Email</label>
                    <input type="email" id="login-email" name="login-email" placeholder="your@email.com" required autocomplete="email">
                </div>
                <div class="login-modal__field">
                    <label for="login-password">Password</label>
                    <input type="password" id="login-password" name="login-password" placeholder="••••••••" required autocomplete="current-password">
                </div>
                <button type="submit" class="btn login-modal__submit">Sign In</button>
                <p class="login-modal__forgot"><a href="#0" id="open-forgot">Forgot password?</a></p>
                <p class="login-modal__create"><a href="#0">Create Account?</a></p>
            </form>
        </div>
    </div>

    <!-- # forgot password modal — step 1: email
    ================================================== -->
    <div id="forgot-modal" class="login-modal" role="dialog" aria-modal="true" aria-labelledby="forgot-modal-title" hidden>
        <div class="login-modal__overlay" id="forgot-modal-overlay"></div>
        <div class="login-modal__box">
            <button class="login-modal__close" id="forgot-modal-close" aria-label="Close">&times;</button>
            <h2 id="forgot-modal-title" class="login-modal__title">Forgot Password</h2>
            <p class="login-modal__subtitle">Enter your email address and we'll send you an OTP to reset your password.</p>
            <form class="login-modal__form" id="forgot-form" novalidate>
                <div class="login-modal__field">
                    <label for="forgot-email">Email Address</label>
                    <input type="email" id="forgot-email" name="email" placeholder="your@email.com" required autocomplete="email">
                </div>
                <div class="login-modal__status" id="forgot-status" aria-live="polite"></div>
                <button type="submit" class="btn login-modal__submit" id="forgot-submit">Send OTP</button>
                <p class="login-modal__forgot"><a href="#0" id="back-to-login">&larr; Back to Login</a></p>
            </form>
        </div>
    </div>

    <!-- # forgot password modal — step 2: OTP
    ================================================== -->
    <div id="otp-modal" class="login-modal" role="dialog" aria-modal="true" aria-labelledby="otp-modal-title" hidden>
        <div class="login-modal__overlay" id="otp-modal-overlay"></div>
        <div class="login-modal__box">
            <button class="login-modal__close" id="otp-modal-close" aria-label="Close">&times;</button>
            <h2 id="otp-modal-title" class="login-modal__title">Enter OTP</h2>
            <p class="login-modal__subtitle" id="otp-modal-subtitle">We sent a 6-digit code to your email.</p>
            <form class="login-modal__form" id="otp-form" novalidate>
                <div class="login-modal__otp-wrap">
                    <input class="login-modal__otp-input" type="text" maxlength="1" inputmode="numeric" pattern="[0-9]" aria-label="OTP digit 1">
                    <input class="login-modal__otp-input" type="text" maxlength="1" inputmode="numeric" pattern="[0-9]" aria-label="OTP digit 2">
                    <input class="login-modal__otp-input" type="text" maxlength="1" inputmode="numeric" pattern="[0-9]" aria-label="OTP digit 3">
                    <input class="login-modal__otp-input" type="text" maxlength="1" inputmode="numeric" pattern="[0-9]" aria-label="OTP digit 4">
                    <input class="login-modal__otp-input" type="text" maxlength="1" inputmode="numeric" pattern="[0-9]" aria-label="OTP digit 5">
                    <input class="login-modal__otp-input" type="text" maxlength="1" inputmode="numeric" pattern="[0-9]" aria-label="OTP digit 6">
                </div>
                <div class="login-modal__status" id="otp-status" aria-live="polite"></div>
                <button type="submit" class="btn login-modal__submit">Verify OTP</button>
                <p class="login-modal__forgot">
                    Didn't receive it? <a href="#0" id="resend-otp">Resend OTP</a>
                </p>
            </form>
        </div>
    </div>

    <!-- # reset password modal — step 3
    ================================================== -->
    <div id="reset-modal" class="login-modal" role="dialog" aria-modal="true" aria-labelledby="reset-modal-title" hidden>
        <div class="login-modal__overlay" id="reset-modal-overlay"></div>
        <div class="login-modal__box">
            <button class="login-modal__close" id="reset-modal-close" aria-label="Close">&times;</button>
            <h2 id="reset-modal-title" class="login-modal__title">New Password</h2>
            <p class="login-modal__subtitle">Choose a strong password for your account.</p>
            <form class="login-modal__form" id="reset-form" novalidate>
                <div class="login-modal__field">
                    <label for="reset-password">New Password</label>
                    <div class="login-modal__input-wrap">
                        <input type="password" id="reset-password" name="password"
                               placeholder="Min. 8 characters" required autocomplete="new-password">
                        <button type="button" class="login-modal__eye" data-target="reset-password" aria-label="Toggle password visibility">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </button>
                    </div>
                    <div class="login-modal__strength" id="pwd-strength-bar">
                        <span></span><span></span><span></span><span></span>
                    </div>
                    <small class="login-modal__strength-label" id="pwd-strength-label"></small>
                </div>
                <div class="login-modal__field">
                    <label for="reset-confirm">Confirm Password</label>
                    <div class="login-modal__input-wrap">
                        <input type="password" id="reset-confirm" name="confirm_password"
                               placeholder="Repeat your password" required autocomplete="new-password">
                        <button type="button" class="login-modal__eye" data-target="reset-confirm" aria-label="Toggle confirm password visibility">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="login-modal__status" id="reset-status" aria-live="polite"></div>
                <button type="submit" class="btn login-modal__submit" id="reset-submit">Update Password</button>
            </form>
        </div>
    </div>

    <!-- # deceased registration modal
    ================================================== -->
    <div id="deceased-modal" class="login-modal deceased-modal" role="dialog" aria-modal="true" aria-labelledby="deceased-modal-title" hidden>
        <div class="login-modal__overlay" id="deceased-modal-overlay"></div>
        <div class="login-modal__box deceased-modal__box">
            <button class="login-modal__close" id="deceased-modal-close" aria-label="Close">&times;</button>

            <div class="deceased-modal__header">
                <h2 id="deceased-modal-title" class="login-modal__title">Deceased Registration</h2>
                <p class="login-modal__subtitle">Señora De Porta Vaga Funeral Homes</p>
            </div>

            <form class="deceased-modal__form" id="deceased-form" novalidate>
                <!-- Transaction number -->
                <fieldset class="deceased-modal__fieldset">
                    <legend>Transaction</legend>
                    <div class="login-modal__field">
                        <label for="transaction-number">Transaction No.</label>
                        <input type="text" id="transaction-number" name="transaction_number" readonly>
                    </div>
                </fieldset>

                <!-- Name -->
                <fieldset class="deceased-modal__fieldset">
                    <legend>Name of Deceased</legend>
                    <div class="deceased-modal__row deceased-modal__row--3">
                        <div class="login-modal__field">
                            <label for="dec-first">First Name</label>
                            <input type="text" id="dec-first" name="first_name" placeholder="First" required>
                        </div>
                        <div class="login-modal__field">
                            <label for="dec-middle">Middle Name</label>
                            <input type="text" id="dec-middle" name="middle_name" placeholder="Middle">
                        </div>
                        <div class="login-modal__field">
                            <label for="dec-last">Last Name</label>
                            <input type="text" id="dec-last" name="last_name" placeholder="Last" required>
                        </div>
                    </div>
                </fieldset>

                <!-- Vital info -->
                <fieldset class="deceased-modal__fieldset">
                    <legend>Vital Information</legend>
                    <div class="deceased-modal__row deceased-modal__row--3">
                        <div class="login-modal__field">
                            <label for="dec-dob">Date of Birth</label>
                            <input type="date" id="dec-dob" name="date_of_birth" required>
                        </div>
                        <div class="login-modal__field">
                            <label for="dec-dod">Date of Death</label>
                            <input type="date" id="dec-dod" name="date_of_death" required>
                        </div>
                        <div class="login-modal__field">
                            <label for="dec-tod">Time of Death</label>
                            <input type="time" id="dec-tod" name="time_of_death">
                        </div>
                    </div>
                    <div class="deceased-modal__row deceased-modal__row--2">
                        <div class="login-modal__field">
                            <label for="dec-burial-date">Burial Date</label>
                            <input type="date" id="dec-burial-date" name="burial_date">
                        </div>
                        <div class="login-modal__field">
                            <label for="dec-burial-time">Burial Time</label>
                            <input type="time" id="dec-burial-time" name="burial_time">
                        </div>
                    </div>
                    <div class="deceased-modal__row deceased-modal__row--vital">
                        <div class="login-modal__field">
                            <label for="dec-age">Age</label>
                            <input type="number" id="dec-age" name="age" placeholder="0" min="0" max="150">
                        </div>
                        <div class="login-modal__field">
                            <label for="dec-sex">Sex</label>
                            <select id="dec-sex" name="sex">
                                <option value="">— Select —</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="login-modal__field">
                            <label for="dec-religion">Religion</label>
                            <input type="text" id="dec-religion" name="religion" placeholder="e.g. Roman Catholic">
                        </div>
                        <div class="login-modal__field">
                            <label for="dec-citizenship">Citizenship</label>
                            <input type="text" id="dec-citizenship" name="citizenship" placeholder="e.g. Filipino">
                        </div>
                    </div>
                    <div class="login-modal__field">
                        <label for="dec-civil">Civil Status</label>
                        <div class="deceased-modal__radio-group">
                            <label class="deceased-modal__radio">
                                <input type="radio" name="civil_status" value="Single"> Single
                            </label>
                            <label class="deceased-modal__radio">
                                <input type="radio" name="civil_status" value="Married"> Married
                            </label>
                            <label class="deceased-modal__radio">
                                <input type="radio" name="civil_status" value="Widowed"> Widowed
                            </label>
                        </div>
                    </div>
                </fieldset>

                <!-- Background -->
                <fieldset class="deceased-modal__fieldset">
                    <legend>Background</legend>
                    <div class="login-modal__field">
                        <label for="dec-occupation">Occupation</label>
                        <input type="text" id="dec-occupation" name="occupation" placeholder="Occupation">
                    </div>
                    <div class="login-modal__field">
                        <label for="dec-address">Address &amp; Barangay</label>
                        <input type="text" id="dec-address" name="address" placeholder="Street, Barangay, City">
                    </div>
                    <div class="deceased-modal__row deceased-modal__row--2">
                        <div class="login-modal__field">
                            <label for="dec-father">Name of Father</label>
                            <input type="text" id="dec-father" name="father_name" placeholder="Father's full name">
                        </div>
                        <div class="login-modal__field">
                            <label for="dec-mother">Name of Mother <span class="deceased-modal__note">(Maiden Name)</span></label>
                            <input type="text" id="dec-mother" name="mother_name" placeholder="Mother's maiden name">
                        </div>
                    </div>
                    <div class="login-modal__field">
                        <label for="dec-cemetery">Address and Place of Cemetery</label>
                        <input type="text" id="dec-cemetery" name="cemetery" placeholder="Cemetery name and address">
                    </div>
                </fieldset>

                <!-- Informant -->
                <fieldset class="deceased-modal__fieldset">
                    <legend>Informant Details</legend>
                    <div class="deceased-modal__row deceased-modal__row--2">
                        <div class="login-modal__field">
                            <label for="dec-informant">Informant</label>
                            <input type="text" id="dec-informant" name="informant" placeholder="Full name" required>
                        </div>
                        <div class="login-modal__field">
                            <label for="dec-relationship">Relationship to Deceased</label>
                            <input type="text" id="dec-relationship" name="relationship" placeholder="e.g. Son, Daughter">
                        </div>
                    </div>
                    <div class="deceased-modal__row deceased-modal__row--2">
                        <div class="login-modal__field">
                            <label for="dec-inf-address">Address</label>
                            <input type="text" id="dec-inf-address" name="informant_address" placeholder="Informant's address">
                        </div>
                        <div class="login-modal__field">
                            <label for="dec-contact">Contact No.</label>
                            <input type="tel" id="dec-contact" name="contact_number" placeholder="09XX XXX XXXX">
                        </div>
                    </div>
                </fieldset>

                <fieldset class="deceased-modal__fieldset">
                    <legend>Package</legend>
                    <div class="deceased-modal__row deceased-modal__row--2">
                        <div class="login-modal__field">
                            <label for="package">Package</label>
                            <input type="text" id="package" name="package" readonly>
                        </div>
                        <div class="login-modal__field">
                            <label for="package-price">Price</label>
                            <input type="text" id="package-price" name="package_price" readonly>
                        </div>
                    </div>
                </fieldset>

                <!-- Body pickup address -->
                <fieldset class="deceased-modal__fieldset">
                    <legend>Body Pickup</legend>
                    <div class="login-modal__field">
                        <label for="dec-pickup-address">Address Where Body Will Be Picked Up</label>
                        <input type="text" id="dec-pickup-address" name="pickup_address"
                               placeholder="Street, Barangay, City, Province" required>
                    </div>
                </fieldset>

                <!-- Obituary image -->
                <fieldset class="deceased-modal__fieldset">
                    <legend>Obituary Photo</legend>
                    <div class="login-modal__field">
                        <label for="dec-obituary">Photo for Obituary <span class="deceased-modal__note">(JPG or PNG — max 5MB)</span></label>
                        <div class="deceased-modal__upload-wrap" id="obituary-wrap">
                            <input type="file" id="dec-obituary" name="obituary_image"
                                   accept=".jpg,.jpeg,.png">
                            <div class="deceased-modal__upload-ui" id="obituary-ui">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="1.5"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/>
                                    <polyline points="21 15 16 10 5 21"/>
                                </svg>
                                <span id="obituary-label">Click or drag a photo here</span>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <!-- Payment receipt -->
                <fieldset class="deceased-modal__fieldset">
                    <legend>Payment</legend>
                    <div class="deceased-modal__payment-wrap">

                        <div class="deceased-modal__qr-block">
                            <p class="deceased-modal__qr-label">Scan to pay via InstaPay</p>
                            <div class="deceased-modal__qr-frame">
                                <button type="button" class="deceased-modal__qr-btn" id="qr-open" aria-label="View larger QR code">
                                    <img src="images/qr-instapay.png" alt="InstaPay QR Code" class="deceased-modal__qr-img">
                                    <span class="deceased-modal__qr-hint">Click to enlarge</span>
                                </button>
                            </div>
                            <p class="deceased-modal__qr-note">After payment, attach your receipt below.</p>
                        </div>

                        <div class="deceased-modal__upload-block">
                            <div class="login-modal__field">
                                <label for="payment">Attach Receipt <span class="deceased-modal__note">(JPG, PNG or PDF — max 5MB)</span></label>
                                <div class="deceased-modal__upload-wrap" id="upload-wrap">
                                    <input type="file" id="payment" name="payment" accept=".jpg,.jpeg,.png,.pdf" required>
                                    <div class="deceased-modal__upload-ui" id="upload-ui">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                            <polyline points="17 8 12 3 7 8"/>
                                            <line x1="12" y1="3" x2="12" y2="15"/>
                                        </svg>
                                        <span id="upload-label">Click or drag a file here</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </fieldset>

                <div class="login-modal__status" id="deceased-status" aria-live="polite"></div>

                <!-- Terms & Conditions checkbox -->
                <div class="deceased-modal__terms">
                    <label class="deceased-modal__terms-label">
                        <input type="checkbox" id="terms-agree" name="terms_agree">
                        <span>I have read and agree to the
                            <a href="#0" id="open-terms" class="deceased-modal__terms-link">Terms and Conditions</a>
                        </span>
                    </label>
                </div>

                <div class="deceased-modal__actions">
                    <button type="button" class="btn deceased-modal__btn--cancel" id="deceased-cancel">Cancel</button>
                    <button type="submit" class="btn deceased-modal__btn--submit" id="deceased-submit" disabled>Submit Registration</button>
                </div>

            </form>
        </div>
    </div>

    <!-- # Terms and Conditions modal
    ================================================== -->
    <div id="terms-modal" class="login-modal" role="dialog" aria-modal="true" aria-labelledby="terms-modal-title" hidden>
        <div class="login-modal__overlay" id="terms-modal-overlay"></div>
        <div class="login-modal__box terms-modal__box">
            <button class="login-modal__close" id="terms-modal-close" aria-label="Close">&times;</button>
            <h2 id="terms-modal-title" class="login-modal__title">Terms and Conditions</h2>
            <div class="terms-modal__body">
                <p class="terms-modal__subtitle">Funeral Home Services</p>
                <ol class="terms-modal__list">
                    <li>Clients are not allowed to avail of a casket only. All services must be availed as part of a complete funeral package.</li>
                    <li>No down payment is required; however, full payment must be settled at least one (1) day prior to the burial. The funeral service and burial will not proceed unless full payment has been completed.</li>
                    <li>Any lost or damaged items must be paid for accordingly. If the item is later returned in good condition, the payment made will be refunded.</li>
                    <li>For oversized cases, an additional fee will be required for the casket.</li>
                    <li>If the wake or service extends beyond the scheduled burial date, additional charges will apply.</li>
                </ol>
            </div>
            <div class="terms-modal__footer">
                <button type="button" class="btn deceased-modal__btn--submit" id="terms-accept">I Agree</button>
            </div>
        </div>
    </div>

    <!-- # QR lightbox
    ================================================== -->
    <div id="qr-lightbox" class="qr-lightbox" hidden aria-modal="true" role="dialog" aria-label="QR Code enlarged">
        <div class="qr-lightbox__overlay" id="qr-lightbox-overlay"></div>
        <div class="qr-lightbox__box">
            <button class="qr-lightbox__close" id="qr-lightbox-close" aria-label="Close">&times;</button>
            <img src="images/qr-instapay.png" alt="InstaPay QR Code" class="qr-lightbox__img">
            <p class="qr-lightbox__caption">Scan with your banking app to pay via InstaPay</p>
        </div>
    </div>

    <script>
    (function () {
            const modalLogin    = document.getElementById('login-modal');
            const openBtnLogin  = document.getElementById('login-btn');
            const closeBtnLogin = document.getElementById('login-modal-close');
            const overlayLogin  = document.getElementById('login-modal-overlay');

            function openLoginModal() {
                if (!modalLogin) return;
                modalLogin.hidden = false;
                document.body.style.overflow = 'hidden';
                if (closeBtnLogin) closeBtnLogin.focus();
            }
            window.openLoginModal = openLoginModal;

            function closeLoginModal() {
                if (!modalLogin) return;
                modalLogin.hidden = true;
                document.body.style.overflow = '';
                if (openBtnLogin) openBtnLogin.focus();
            }

            if (openBtnLogin)  openBtnLogin.addEventListener('click',  function (e) { e.preventDefault(); openLoginModal(); });
            if (closeBtnLogin) closeBtnLogin.addEventListener('click', closeLoginModal);
            if (overlayLogin)  overlayLogin.addEventListener('click',  closeLoginModal);

            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape' && modalLogin && !modalLogin.hidden) closeLoginModal();
            });

            // ── Forgot password flow ──────────────────────────────────────
            const forgotModal   = document.getElementById('forgot-modal');
            const forgotClose   = document.getElementById('forgot-modal-close');
            const forgotOverlay = document.getElementById('forgot-modal-overlay');
            const forgotForm    = document.getElementById('forgot-form');
            const forgotStatus  = document.getElementById('forgot-status');
            const forgotSubmit  = document.getElementById('forgot-submit');

            const otpModal      = document.getElementById('otp-modal');
            const otpClose      = document.getElementById('otp-modal-close');
            const otpOverlay    = document.getElementById('otp-modal-overlay');
            const otpForm       = document.getElementById('otp-form');
            const otpStatus     = document.getElementById('otp-status');
            const otpSubtitle   = document.getElementById('otp-modal-subtitle');
            const otpInputs     = document.querySelectorAll('.login-modal__otp-input');

            let _serverOtp = null;

            function showModal(modal) {
                modal.hidden = false;
                document.body.style.overflow = 'hidden';
                modal.querySelector('button, input').focus();
            }

            function hideModal(modal) {
                modal.hidden = true;
                document.body.style.overflow = '';
            }

            function setStatus(el, msg, type) {
                el.textContent = msg;
                el.className = 'login-modal__status ' + (type || '');
            }

            // open forgot from login
            document.getElementById('open-forgot').addEventListener('click', function (e) {
                e.preventDefault();
                hideModal(modalLogin);
                showModal(forgotModal);
            });

            // back to login
            document.getElementById('back-to-login').addEventListener('click', function (e) {
                e.preventDefault();
                hideModal(forgotModal);
                showModal(modalLogin);
            });

            forgotClose.addEventListener('click', function () { hideModal(forgotModal); document.body.style.overflow = ''; });
            forgotOverlay.addEventListener('click', function () { hideModal(forgotModal); document.body.style.overflow = ''; });

            otpClose.addEventListener('click', function () { hideModal(otpModal); document.body.style.overflow = ''; });
            otpOverlay.addEventListener('click', function () { hideModal(otpModal); document.body.style.overflow = ''; });

            // send OTP request
            async function sendOtp(email) {
                forgotSubmit.disabled = true;
                forgotSubmit.textContent = 'Sending…';
                setStatus(forgotStatus, '', '');

                try {
                    const res = await fetch('/api/forgotPassword/otp', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({ username: email })
                    });
                    const json = await res.json();

                    if (json.status === 'success') {
                        _serverOtp = json.data.otp;
                        otpSubtitle.textContent = 'We sent a 6-digit code to ' + email + '.';
                        hideModal(forgotModal);
                        showModal(otpModal);
                        otpInputs[0].focus();
                        setStatus(otpStatus, '', '');
                    } else {
                        const msg = typeof json.message === 'object'
                            ? Object.values(json.message).join(' ')
                            : json.message;
                        setStatus(forgotStatus, msg, 'error');
                    }
                } catch (err) {
                    setStatus(forgotStatus, 'Something went wrong. Please try again.', 'error');
                } finally {
                    forgotSubmit.disabled = false;
                    forgotSubmit.textContent = 'Send OTP';
                }
            }

            forgotForm.addEventListener('submit', function (e) {
                e.preventDefault();
                const email = document.getElementById('forgot-email').value.trim();
                if (!email) return setStatus(forgotStatus, 'Please enter your email.', 'error');
                sendOtp(email);
            });

            document.getElementById('resend-otp').addEventListener('click', function (e) {
                e.preventDefault();
                const email = document.getElementById('forgot-email').value.trim();
                if (email) sendOtp(email);
            });

            // OTP input — auto-advance & backspace
            otpInputs.forEach(function (input, i) {
                input.addEventListener('input', function () {
                    this.value = this.value.replace(/\D/g, '');
                    if (this.value && i < otpInputs.length - 1) otpInputs[i + 1].focus();
                });
                input.addEventListener('keydown', function (e) {
                    if (e.key === 'Backspace' && !this.value && i > 0) otpInputs[i - 1].focus();
                });
                input.addEventListener('paste', function (e) {
                    e.preventDefault();
                    const digits = (e.clipboardData.getData('text') || '').replace(/\D/g, '').slice(0, 6);
                    digits.split('').forEach(function (d, j) {
                        if (otpInputs[j]) otpInputs[j].value = d;
                    });
                    const next = Math.min(digits.length, otpInputs.length - 1);
                    otpInputs[next].focus();
                });
            });

            // verify OTP
            otpForm.addEventListener('submit', function (e) {
                e.preventDefault();
                const entered = Array.from(otpInputs).map(function (i) { return i.value; }).join('');
                if (entered.length < 6) return setStatus(otpStatus, 'Please enter all 6 digits.', 'error');

                if (entered === _serverOtp) {
                    setStatus(otpStatus, 'OTP verified!', 'success');
                    setTimeout(function () {
                        hideModal(otpModal);
                        showModal(resetModal);
                        document.getElementById('reset-password').focus();
                        setStatus(resetStatus, '', '');
                    }, 600);
                } else {
                    setStatus(otpStatus, 'Incorrect OTP. Please try again.', 'error');
                    otpInputs.forEach(function (i) { i.value = ''; });
                    otpInputs[0].focus();
                }
            });

            // ── Reset password flow ───────────────────────────────────────
            const resetModal  = document.getElementById('reset-modal');
            const resetStatus = document.getElementById('reset-status');
            const resetSubmit = document.getElementById('reset-submit');

            document.getElementById('reset-modal-close').addEventListener('click', function () { hideModal(resetModal); });
            document.getElementById('reset-modal-overlay').addEventListener('click', function () { hideModal(resetModal); });

            // toggle password visibility
            document.querySelectorAll('.login-modal__eye').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    const input = document.getElementById(this.dataset.target);
                    input.type = input.type === 'password' ? 'text' : 'password';
                    this.classList.toggle('is-active');
                });
            });

            // password strength meter
            const pwdInput      = document.getElementById('reset-password');
            const strengthBar   = document.querySelectorAll('#pwd-strength-bar span');
            const strengthLabel = document.getElementById('pwd-strength-label');
            const levels        = ['', 'Weak', 'Fair', 'Good', 'Strong'];
            const colors        = ['', '#e07070', '#e0a870', '#a8c070', 'var(--color-1-400)'];

            pwdInput.addEventListener('input', function () {
                const v = this.value;
                let score = 0;
                if (v.length >= 8)            score++;
                if (/[A-Z]/.test(v))          score++;
                if (/[0-9]/.test(v))          score++;
                if (/[^A-Za-z0-9]/.test(v))   score++;
                strengthBar.forEach(function (s, i) {
                    s.style.background = i < score ? colors[score] : '';
                });
                strengthLabel.textContent = v.length ? levels[score] : '';
                strengthLabel.style.color = colors[score];
            });

            // submit reset
            document.getElementById('reset-form').addEventListener('submit', async function (e) {
                e.preventDefault();
                const pwd     = document.getElementById('reset-password').value;
                const confirm = document.getElementById('reset-confirm').value;
                const email   = document.getElementById('forgot-email').value.trim();

                if (pwd.length < 8) return setStatus(resetStatus, 'Password must be at least 8 characters.', 'error');
                if (pwd !== confirm) return setStatus(resetStatus, 'Passwords do not match.', 'error');

                resetSubmit.disabled = true;
                resetSubmit.textContent = 'Updating…';
                setStatus(resetStatus, '', '');

                try {
                    const res  = await fetch('/api/forgotPassword/resets', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({ username: email, password: pwd, confirm_password: confirm })
                    });
                    const json = await res.json();

                    if (json.status === 'success') {
                        setStatus(resetStatus, 'Password updated! You can now log in.', 'success');
                        document.getElementById('reset-form').reset();
                        strengthBar.forEach(function (s) { s.style.background = ''; });
                        strengthLabel.textContent = '';
                        setTimeout(function () {
                            hideModal(resetModal);
                            showModal(modalLogin);
                        }, 1800);
                    } else {
                        const msg = typeof json.message === 'object'
                            ? Object.values(json.message).join(' ')
                            : json.message;
                        setStatus(resetStatus, msg, 'error');
                    }
                } catch (err) {
                    setStatus(resetStatus, 'Something went wrong. Please try again.', 'error');
                } finally {
                    resetSubmit.disabled = false;
                    resetSubmit.textContent = 'Update Password';
                }
            });

            // ── Package items → open deceased registration modal ──────────
            var isLoggedIn = <?php echo session()->get('isLoggedIn') ? 'true' : 'false'; ?>;

            document.querySelectorAll('.menu-list__item').forEach(function (item) {
                item.style.cursor = 'pointer';
                item.addEventListener('click', function () {
                    if (!isLoggedIn) {
                        openLoginModal();
                        return;
                    }
                    var packageName = item.querySelector('h4') ? item.querySelector('h4').textContent.trim() : '';
                    var priceEl     = item.querySelector('.menu-list__item-price');
                    var price       = priceEl ? priceEl.textContent.trim() : '';
                    document.getElementById('package').value       = packageName;
                    document.getElementById('package-price').value = price;
                    window.openDeceasedModal();
                });
            });

            // ── Deceased registration modal ───────────────────────────────
            const deceasedModal   = document.getElementById('deceased-modal');
            const deceasedOverlay = document.getElementById('deceased-modal-overlay');
            const deceasedClose   = document.getElementById('deceased-modal-close');
            const deceasedCancel  = document.getElementById('deceased-cancel');
            const deceasedStatus  = document.getElementById('deceased-status');
            const deceasedSubmit  = document.getElementById('deceased-submit');

            // expose opener globally so other parts of the page can call it
            window.openDeceasedModal = function () {
                // reset form and UI state
                document.getElementById('deceased-form').reset();
                document.getElementById('deceased-submit').disabled = true;
                document.getElementById('upload-label').textContent  = 'Click or drag a file here';
                document.getElementById('upload-ui').classList.remove('has-file');
                document.getElementById('obituary-label').textContent = 'Click or drag a photo here';
                document.getElementById('obituary-ui').classList.remove('has-file');
                setStatus(deceasedStatus, '', '');

                // generate fresh transaction number: YYYYMMddHHmmssms
                var now = new Date();
                var pad = function (n, len) { return String(n).padStart(len || 2, '0'); };
                var txn = String(now.getFullYear())
                    + pad(now.getMonth() + 1)
                    + pad(now.getDate())
                    + pad(now.getHours())
                    + pad(now.getMinutes())
                    + pad(now.getSeconds())
                    + pad(now.getMilliseconds(), 3);
                document.getElementById('transaction-number').value = txn;
                showModal(deceasedModal);
            };

            // file upload UI — payment receipt
            var fileInput   = document.getElementById('payment');
            var uploadLabel = document.getElementById('upload-label');
            var uploadUi    = document.getElementById('upload-ui');

            fileInput.addEventListener('change', function () {
                uploadLabel.textContent = this.files[0] ? this.files[0].name : 'Click or drag a file here';
                uploadUi.classList.toggle('has-file', !!this.files[0]);
            });

            ['dragover', 'dragleave', 'drop'].forEach(function (evt) {
                document.getElementById('upload-wrap').addEventListener(evt, function (e) {
                    e.preventDefault();
                    if (evt === 'dragover') uploadUi.classList.add('drag-over');
                    if (evt === 'dragleave') uploadUi.classList.remove('drag-over');
                    if (evt === 'drop') {
                        uploadUi.classList.remove('drag-over');
                        fileInput.files = e.dataTransfer.files;
                        uploadLabel.textContent = fileInput.files[0] ? fileInput.files[0].name : 'Click or drag a file here';
                        uploadUi.classList.toggle('has-file', !!fileInput.files[0]);
                    }
                });
            });

            // file upload UI — obituary photo
            var obituaryInput = document.getElementById('dec-obituary');
            var obituaryLabel = document.getElementById('obituary-label');
            var obituaryUi    = document.getElementById('obituary-ui');

            obituaryInput.addEventListener('change', function () {
                obituaryLabel.textContent = this.files[0] ? this.files[0].name : 'Click or drag a photo here';
                obituaryUi.classList.toggle('has-file', !!this.files[0]);
            });

            ['dragover', 'dragleave', 'drop'].forEach(function (evt) {
                document.getElementById('obituary-wrap').addEventListener(evt, function (e) {
                    e.preventDefault();
                    if (evt === 'dragover') obituaryUi.classList.add('drag-over');
                    if (evt === 'dragleave') obituaryUi.classList.remove('drag-over');
                    if (evt === 'drop') {
                        obituaryUi.classList.remove('drag-over');
                        obituaryInput.files = e.dataTransfer.files;
                        obituaryLabel.textContent = obituaryInput.files[0] ? obituaryInput.files[0].name : 'Click or drag a photo here';
                        obituaryUi.classList.toggle('has-file', !!obituaryInput.files[0]);
                    }
                });
            });

            deceasedClose.addEventListener('click',   function () { hideModal(deceasedModal); });
            deceasedOverlay.addEventListener('click', function () { hideModal(deceasedModal); });
            deceasedCancel.addEventListener('click',  function () { hideModal(deceasedModal); });

            document.getElementById('deceased-form').addEventListener('submit', async function (e) {
                e.preventDefault();
                deceasedSubmit.disabled = true;
                deceasedSubmit.textContent = 'Submitting…';
                setStatus(deceasedStatus, '', '');

                const form     = e.target;
                const formData = new FormData(form);
                formData.set('user_id', '<?php echo (int) session()->get('user_id'); ?>');

                try {
                    const res  = await fetch('/api/deceased/register', {
                        method: 'POST',
                        body  : formData
                    });
                    const json = await res.json();

                    if (json.status === 'success') {
                        setStatus(deceasedStatus, 'Registration submitted successfully.', 'success');
                        setTimeout(function () {
                            form.reset();
                            document.getElementById('deceased-submit').disabled = true;
                            hideModal(deceasedModal);
                            setStatus(deceasedStatus, '', '');
                        }, 2000);
                    } else {
                        const msg = typeof json.message === 'object'
                            ? Object.values(json.message).join(' ')
                            : json.message;
                        setStatus(deceasedStatus, msg, 'error');
                    }
                } catch (err) {
                    setStatus(deceasedStatus, 'Something went wrong. Please try again.', 'error');
                } finally {
                    deceasedSubmit.disabled = false;
                    deceasedSubmit.textContent = 'Submit Registration';
                }
            });

            // ── Terms & Conditions ────────────────────────────────────────
            var termsModal   = document.getElementById('terms-modal');
            var termsCheckbox = document.getElementById('terms-agree');
            var submitBtn    = document.getElementById('deceased-submit');

            // checkbox toggles submit button
            termsCheckbox.addEventListener('change', function () {
                submitBtn.disabled = !this.checked;
            });

            // open terms modal
            document.getElementById('open-terms').addEventListener('click', function (e) {
                e.preventDefault();
                termsModal.hidden = false;
                document.body.style.overflow = 'hidden';
            });

            // close terms modal
            document.getElementById('terms-modal-close').addEventListener('click', function () {
                termsModal.hidden = true;
                document.body.style.overflow = '';
            });
            document.getElementById('terms-modal-overlay').addEventListener('click', function () {
                termsModal.hidden = true;
                document.body.style.overflow = '';
            });

            // "I Agree" — check the box and close
            document.getElementById('terms-accept').addEventListener('click', function () {
                termsCheckbox.checked  = true;
                submitBtn.disabled     = false;
                termsModal.hidden      = true;
                document.body.style.overflow = '';
            });

            // ── QR lightbox ───────────────────────────────────────────────
            var qrLightbox = document.getElementById('qr-lightbox');
            document.getElementById('qr-open').addEventListener('click', function () {
                qrLightbox.hidden = false;
                document.getElementById('qr-lightbox-close').focus();
            });
            document.getElementById('qr-lightbox-close').addEventListener('click', function () {
                qrLightbox.hidden = true;
            });
            document.getElementById('qr-lightbox-overlay').addEventListener('click', function () {
                qrLightbox.hidden = true;
            });
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape' && !qrLightbox.hidden) qrLightbox.hidden = true;
            });

            // ── Theme toggle ──────────────────────────────────────────────
            var html   = document.documentElement;
            var themeBtn = document.getElementById('theme-toggle');

            themeBtn.addEventListener('click', function () {
                var next = html.getAttribute('data-theme') === 'light' ? 'dark' : 'light';
                html.setAttribute('data-theme', next);
                localStorage.setItem('spv-theme', next);
            });
        })();
    </script>

    <?php
        $session = \Config\Services::session();
        $errorData = $session->getFlashdata('error');
        if ($errorData) {
            $errorMessages = '';
        if (is_array($errorData)) {
            foreach ($errorData as $error) {
            $errorMessages .= ' ' . $error;
            }
        }
        else {
            $errorMessages = $errorData;
        }
            echo '<script type="text/javascript">alert("' . $errorMessages . '")</script>';
        }
        else{
            if ($session->getFlashdata('success')) {
                echo '<script type="text/javascript">alert("' . $session->getFlashdata('success') . '")</script>';
            }
        }
    ?>

</body>
</html>
