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
                        <a class="logo" href="index.html">
                            <img src="images/try.png" alt="Homepage">
                        </a>
                    </div>
                    <a class="header-menu-toggle" href="#0"><span>Menu</span></a>
                </div> <!-- end s-header__block -->
            
                <nav class="header-nav">    
                    <ul class="header-nav__links">
                        <li class="current"><a class="smoothscroll" href="#intro">Intro</a></li>
                        <li><a class="smoothscroll" href="#about">About</a></li>
                        <li><a class="smoothscroll" href="#menu">Packages</a></li>                                                
                        <li><a class="smoothscroll" href="#gallery">Gallery</a></li>
                        <li><a class="smoothscroll" href="#casket">Casket</a></li>
                        <li><a class="smoothscroll" href="#gallery">Facilities & Amenities</a></li>
                        <li><a class="smoothscroll" href="#contact">Contact Us</a></li>
                        <?php if (session()->get('isLoggedIn')): ?>
                            <li><a class="smoothscroll" href="#account">My Account</a></li>
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
        <section id="intro" class="container s-intro target-section">

            <div class="grid-block s-intro__content">

                <div class="intro-header">
                    <div class="intro-header__overline">Welcome to</div>
                    <h1 class="intro-header__big-type">
                        Sñra de <br>
                        Porta Vaga
                    </h1>
                </div> <!-- end intro-header -->

                <figure class="intro-pic-primary">
                    <img src="images/intro-try2.png" 
                         srcset="images/intro-try2.png, 
                         images/intro-try2.png" alt="">  
                </figure> <!-- end intro-pic-primary -->    
                    
                <div class="intro-block-content">

                    <figure class="intro-block-content__pic">
                        <img src="images/intro-try3.png" 
                             srcset="images/intro-try3.png, 
                             images/intro-try3.png" alt=""> 
                    </figure> <!-- end intro-pic-secondary -->   

                    <div class="intro-block-content__text-wrap">
                        <p class="intro-block-content__text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit lorem.
                        </p>
                        
                        <ul class="intro-block-content__social">
                            <li><a href="#0">FB</a></li>
                            <li><a href="#0">IG</a></li>
                            <li><a href="#0">PI</a></li>
                            <li><a href="#0">X</a></li>
                        </ul>
                    </div> <!-- end intro-block-content__social -->   

                </div> <!-- end intro-block-content -->

                <div class="intro-scroll">
                    <a class="smoothscroll" href="#about">                            
                        <span class="intro-scroll__circle-text"></span>
                        <span class="intro-scroll__text u-screen-reader-text">Scroll Down</span>
                        <div class="intro-scroll__icon">
                            <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m5.214 14.522s4.505 4.502 6.259 6.255c.146.147.338.22.53.22s.384-.073.53-.22c1.754-1.752 6.249-6.244 6.249-6.244.144-.144.216-.334.217-.523 0-.193-.074-.386-.221-.534-.293-.293-.766-.294-1.057-.004l-4.968 4.968v-14.692c0-.414-.336-.75-.75-.75s-.75.336-.75.75v14.692l-4.979-4.978c-.289-.289-.761-.287-1.054.006-.148.148-.222.341-.221.534 0 .189.071.377.215.52z" fill-rule="nonzero"/></svg>
                        </div>
                    </a>
                </div> <!-- end intro-scroll -->

            </div> <!-- grid-block -->            

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
                        <img src="images/about-try.png" alt=""> 
                    </figure>

                </div> <!-- end s-about__content-start -->

                <div class="column xl-6 lg-6 md-12 s-about__content-end">                   
                    <p>
                        Señora de Porta Vaga Funeral Homes is a trusted provider of funeral services in Cavite, Philippines, known for offering compassionate and professional assistance to families during times of loss. Established on July 10, 2010, Porta Vaga Funeral Homes has been serving the community for over 15 years, demonstrating stability, experience, and unwavering dedication to dignified and reliable funeral care.
                    </p>

                    <p>
                        The story of Porta Vaga Funeral Homes is deeply intertwined with the history, faith, and traditions of the people of Cavite. Its name, “Porta Vaga,” is derived from the historic gateway of Cavite Puerto, a significant port city during the Spanish colonial era. This site is especially notable for its connection to the miraculous image of Our Lady of Porta Vaga, the revered Marian icon and patroness of Cavite.
                    </p>

                    <p>
                        With multiple branches, Porta Vaga Funeral Homes ensures that families have accessible and compassionate support for all funeral arrangements. Each branch is thoughtfully designed to guide families through the memorial process with care, respect, and professionalism.
                    </p>

                    <p>
                        Through its years of service, Porta Vaga Funeral Homes continues to uphold its mission of providing comfort and dignity to families during their most difficult moments.
                    </p>
                    <h2>Mission</h2>
                    <p>
                        To deliver innovative and personalized funeral services through the use of modern technology, eco-friendly practices, and efficient management systems, while providing compassionate support that respects cultural traditions and meets the evolving needs of families.
                    </p>
                    <h2>Vision</h2>
                    <p>
                        To be a leading modern funeral service provider that integrates innovation, sustainability, and compassionate care, setting new standards in honoring life and supporting families.
                    </p>

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
                                    <span>Test 1</span>
                                    <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m14.523 18.787s4.501-4.505 6.255-6.26c.146-.146.219-.338.219-.53s-.073-.383-.219-.53c-1.753-1.754-6.255-6.258-6.255-6.258-.144-.145-.334-.217-.524-.217-.193 0-.385.074-.532.221-.293.292-.295.766-.004 1.056l4.978 4.978h-14.692c-.414 0-.75.336-.75.75s.336.75.75.75h14.692l-4.979 4.979c-.289.289-.286.762.006 1.054.148.148.341.222.533.222.19 0 .378-.072.522-.215z" fill-rule="nonzero"/></svg>
                                </a>
                            </li>
                            <li>
                                <a href="#tab-pastries">
                                    <span>Test 2</span>
                                    <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m14.523 18.787s4.501-4.505 6.255-6.26c.146-.146.219-.338.219-.53s-.073-.383-.219-.53c-1.753-1.754-6.255-6.258-6.255-6.258-.144-.145-.334-.217-.524-.217-.193 0-.385.074-.532.221-.293.292-.295.766-.004 1.056l4.978 4.978h-14.692c-.414 0-.75.336-.75.75s.336.75.75.75h14.692l-4.979 4.979c-.289.289-.286.762.006 1.054.148.148.341.222.533.222.19 0 .378-.072.522-.215z" fill-rule="nonzero"/></svg>
                                </a>
                            </li>
                            <li>
                                <a href="#tab-gourmet-treats">
                                    <span>Test 3</span>
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
                                Test 1
                            </h6>

                            <ul class="menu-list">
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">                                            
                                        <h4>Test 1 S 1</h4>
                                        <p>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>₱</span>3.50
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">                                            
                                        <h4>Test 1 S 2</h4>
                                        <p>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>₱</span>4.25
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">                                            
                                        <h4>Test 1 S 3</h4>
                                        <p>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>₱</span>4.00
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">                                            
                                        <h4>Test 1 S 4</h4>
                                        <p>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>₱</span>4.50
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">                                            
                                        <h4>Test 1 S 5</h4>
                                        <p>
                                           Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>₱</span>4.25
                                    </div>
                                </li>
                            </ul> <!-- end menu-list -->

                        </div> <!-- end tab-content__item -->


                        <div id="tab-pastries" class="menu-block__group tab-content__item">

                            <h6 class="menu-block__cat-name">
                                Test 2
                            </h6>

                            <ul class="menu-list">
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">                                            
                                        <h4>Test 2 S 1</h4>
                                        <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>₱</span>2.50
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">                                            
                                        <h4>Test 2 S 2</h4>
                                        <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>₱</span>3.00
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">                                            
                                        <h4>Test 2 S 3</h4>
                                        <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>₱</span>2.75
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">                                            
                                        <h4>Test 2 S 4</h4>
                                        <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>₱</span>3.25
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">                                            
                                        <h4>Test 2 S 5</h4>
                                        <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>₱</span>3.25
                                    </div>
                                </li>
                            </ul> <!-- end menu-list -->

                        </div> <!-- end tab-content__item -->


                        <div id="tab-gourmet-treats" class="menu-block__group tab-content__item">

                            <h6 class="menu-block__cat-name">
                                Gourmet Treats
                            </h6>

                            <ul class="menu-list">
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">                                            
                                        <h4>Artisanal Dark Chocolate Truffles</h4>
                                        <p>
                                        Luxurious dark chocolate truffles dusted with cocoa powder.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>$</span>2.75
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">                                            
                                        <h4>Handcrafted Praline Bonbons</h4>
                                        <p>
                                        Praline-filled bonbons topped with a caramelized nut.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>$</span>3.00
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">                                            
                                        <h4>Pistachio and Sea Salt Toffee</h4>
                                        <p>
                                        Crunchy toffee coated in pistachios and sea salt.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>$</span>4.00
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">                                            
                                        <h4>Raspberry White Chocolate Bark</h4>
                                        <p>
                                        Creamy white chocolate with swirls of raspberry and a sprinkle of almonds. 
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>$</span>3.50
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">                                            
                                        <h4>Salted Caramel Brownie Bites</h4>
                                        <p>
                                        Fudgy brownie bites with a caramel drizzle and a touch of sea salt.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>$</span>2.50
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
                    <a href="images/gallery/large/l-gallery-01.jpg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/gallery-01.jpg" 
                            srcset="images/gallery/large/l-gallery-01.jpg, 
                                    images/gallery/gallery-01@2x.jpg" alt="">                                
                    </a>
                </div> <!-- end casket-items__item-->
    
                <div class="gallery-items__item grid-cols__column">
                    <a href="images/gallery/large/l-gallery-01.jpg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/gallery-01.jpg" 
                            srcset="images/gallery/large/l-gallery-01.jpg, 
                                    images/gallery/gallery-01@2x.jpg" alt="">                                
                    </a>
                </div> <!-- end casket-items__item -->
    
                <div class="gallery-items__item grid-cols__column">
                    <a href="images/gallery/large/l-gallery-01.jpg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/gallery-01.jpg" 
                            srcset="images/gallery/large/l-gallery-01.jpg, 
                                    images/gallery/gallery-01@2x.jpg" alt="">                                
                    </a>
                </div> <!-- end casket-items__item -->
    
                <div class="gallery-items__item grid-cols__column">
                    <a href="images/gallery/large/l-gallery-01.jpg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/gallery-01.jpg" 
                            srcset="images/gallery/large/l-gallery-01.jpg, 
                                    images/gallery/gallery-01@2x.jpg" alt="">                                
                    </a>
                </div> <!-- end casket-items__item -->
    
                <div class="gallery-items__item grid-cols__column">
                    <a href="images/gallery/large/l-gallery-01.jpg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/gallery-01.jpg" 
                            srcset="images/gallery/large/l-gallery-01.jpg, 
                                    images/gallery/gallery-01@2x.jpg" alt="">                                
                    </a>
                </div> <!-- end casket-items__item -->
    
                <div class="gallery-items__item grid-cols__column">
                   <a href="images/gallery/large/l-gallery-01.jpg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/gallery-01.jpg" 
                            srcset="images/gallery/large/l-gallery-01.jpg, 
                                    images/gallery/gallery-01@2x.jpg" alt="">                                
                    </a>
                </div> <!-- end casket-items__item -->
    
                <div class="gallery-items__item grid-cols__column">
                    <a href="images/gallery/large/l-gallery-01.jpg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/gallery-01.jpg" 
                            srcset="images/gallery/large/l-gallery-01.jpg, 
                                    images/gallery/gallery-01@2x.jpg" alt="">                                
                    </a>
                </div> <!-- end casket-items__item -->
    
                <div class="gallery-items__item grid-cols__column">
                    <a href="images/gallery/large/l-gallery-01.jpg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/gallery-01.jpg" 
                            srcset="images/gallery/large/l-gallery-01.jpg, 
                                    images/gallery/gallery-01@2x.jpg" alt="">                                
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
                    <a href="images/gallery/large/l-gallery-01.jpg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/gallery-01.jpg" 
                            srcset="images/gallery/large/l-gallery-01.jpg, 
                                    images/gallery/gallery-01@2x.jpg" alt="">                                
                    </a>
                </div> <!-- end gallery-items__item-->
    
                <div class="gallery-items__item grid-cols__column">
                    <a href="images/gallery/large/l-gallery-01.jpg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/gallery-01.jpg" 
                            srcset="images/gallery/large/l-gallery-01.jpg, 
                                    images/gallery/gallery-01@2x.jpg" alt="">                                
                    </a>
                </div> <!-- end gallery-items__item -->
    
                <div class="gallery-items__item grid-cols__column">
                    <a href="images/gallery/large/l-gallery-01.jpg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/gallery-01.jpg" 
                            srcset="images/gallery/large/l-gallery-01.jpg, 
                                    images/gallery/gallery-01@2x.jpg" alt="">                                
                    </a>
                </div> <!-- end gallery-items__item -->
    
                <div class="gallery-items__item grid-cols__column">
                    <a href="images/gallery/large/l-gallery-01.jpg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/gallery-01.jpg" 
                            srcset="images/gallery/large/l-gallery-01.jpg, 
                                    images/gallery/gallery-01@2x.jpg" alt="">                                
                    </a>
                </div> <!-- end gallery-items__item -->
    
                <div class="gallery-items__item grid-cols__column">
                    <a href="images/gallery/large/l-gallery-01.jpg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/gallery-01.jpg" 
                            srcset="images/gallery/large/l-gallery-01.jpg, 
                                    images/gallery/gallery-01@2x.jpg" alt="">                                
                    </a>
                </div> <!-- end gallery-items__item -->
    
                <div class="gallery-items__item grid-cols__column">
                   <a href="images/gallery/large/l-gallery-01.jpg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/gallery-01.jpg" 
                            srcset="images/gallery/large/l-gallery-01.jpg, 
                                    images/gallery/gallery-01@2x.jpg" alt="">                                
                    </a>
                </div> <!-- end gallery-items__item -->
    
                <div class="gallery-items__item grid-cols__column">
                    <a href="images/gallery/large/l-gallery-01.jpg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/gallery-01.jpg" 
                            srcset="images/gallery/large/l-gallery-01.jpg, 
                                    images/gallery/gallery-01@2x.jpg" alt="">                                
                    </a>
                </div> <!-- end gallery-items__item -->
    
                <div class="gallery-items__item grid-cols__column">
                    <a href="images/gallery/large/l-gallery-01.jpg" class="gallery-items__item-thumb glightbox">
                        <img src="images/gallery/gallery-01.jpg" 
                            srcset="images/gallery/large/l-gallery-01.jpg, 
                                    images/gallery/gallery-01@2x.jpg" alt="">                                
                    </a>
                </div> <!-- end gallery-items__item -->
                
            </div> <!-- end grid-list-items -->

        </section> <!-- end s-gallery -->  


        <!-- # testimonials
        ================================================== -->
        <section id="testimonials" class="container s-testimonials">

            <div class="row s-testimonials__content">
                <div class="column xl-12">

                    <h3 class="testimonials-title u-text-center">What Our Clients Say</h3>
    
                    <div class="swiper-container testimonials-slider">    
                        <div class="swiper-wrapper">

                            <div class="testimonials-slider__slide swiper-slide">
                                <div class="testimonials-slider__author">
                                    <img src="images/avatars/user-02.jpg" alt="Author image" class="testimonials-slider__avatar">
                                    <cite class="testimonials-slider__cite">
                                        John Rockefeller
                                        <span>Cleveland, Ohio</span>
                                    </cite>
                                </div>
                                <p>
                                Molestiae incidunt consequatur quis ipsa autem nam sit enim magni. Voluptas tempore rem. 
                                Explicabo a quaerat sint autem dolore ducimus ut consequatur neque. Nisi dolores quaerat fuga rem nihil nostrum.
                                Laudantium quia consequatur molestias.
                                </p>
                            </div> <!-- end testimonials-slider__slide -->
            
                            <div class="testimonials-slider__slide swiper-slide">
                                <div class="testimonials-slider__author">
                                    <img src="images/avatars/user-03.jpg" alt="Author image" class="testimonials-slider__avatar">
                                    <cite class="testimonials-slider__cite">
                                        Andrew Carnegie
                                        <span>Pittsburgh, Pennsylvania</span>
                                    </cite>
                                </div>
                                <p>
                                Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci.
                                Nisi eaque consequatur. Voluptatem dignissimos ut ducimus accusantium perspiciatis.
                                Quasi voluptas eius distinctio. Atque eos maxime.
                                </p>
                            </div> <!-- end testimonials-slider__slide -->
            
                            <div class="testimonials-slider__slide swiper-slide">
                                <div class="testimonials-slider__author">
                                    <img src="images/avatars/user-01.jpg" alt="Author image" class="testimonials-slider__avatar">
                                    <cite class="testimonials-slider__cite">
                                        John Morgan
                                        <span>New York City</span>
                                    </cite>
                                </div>
                                <p>
                                Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia nesciunt. Ducimus aut sed ipsam.  
                                Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius distinctio.
                                Voluptatem dignissimos ut.
                                </p>
                            </div> <!-- end testimonials-slider__slide -->
    
                            <div class="testimonials-slider__slide swiper-slide">
                                <div class="testimonials-slider__author">
                                    <img src="images/avatars/user-06.jpg" alt="Author image" class="testimonials-slider__avatar">
                                    <cite class="testimonials-slider__cite">
                                        Henry Ford
                                        <span>Dearborn, Michigan</span>
                                    </cite>
                                </div>
                                <p>
                                Nunc interdum lacus sit amet orci. Vestibulum dapibus nunc ac augue. Fusce vel dui. In ac felis 
                                quis tortor malesuada pretium. Curabitur vestibulum aliquam leo. Qui sed at corrupti expedita voluptas odit. 
                                Nihil ea quia nesciunt. Ducimus aut sed ipsam.
                                </p>
                            </div> <!-- end testimonials-slider__slide -->
        
                        </div> <!-- end swiper-wrapper -->
    
                        <div class="swiper-pagination"></div>
    
                    </div> <!-- end testimonials-slider -->
    
                </div> <!-- end column -->
            </div> <!-- end s-testimonials__content -->

        </section> <!-- end s-testimonials --> 

        
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

    <script>
    (function () {
            const modalLogin   = document.getElementById('login-modal');
            const openBtnLogin = document.getElementById('login-btn');
            const closeBtnLogin = document.getElementById('login-modal-close');
            const overlayLogin = document.getElementById('login-modal-overlay');

            function openLoginModal() {
                modalLogin.hidden = false;
                document.body.style.overflow = 'hidden';
                closeBtnLogin.focus();
            }

            function closeLoginModal() {
                modalLogin.hidden = true;
                document.body.style.overflow = '';
                openBtnLogin.focus();
            }

            openBtnLogin.addEventListener('click', function (e) { e.preventDefault(); openLoginModal(); });
            closeBtnLogin.addEventListener('click', closeLoginModal);
            overlayLogin.addEventListener('click', closeLoginModal);

            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape' && !modalLogin.hidden) closeLoginModal();
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