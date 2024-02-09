    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <?php $location = $_SERVER['REQUEST_URI']; ?>

    <!-- header
    ================================================== -->
    <header class="s-header <?php echo $location == "/phpmvc-portfolio/" ? "" : "sticky offset scrolling"  ?>">

        <div class="header-logo">
            <a href="<?php echo URLROOT; ?>/">
                <img src="<?php echo URLROOT; ?>/images/logo.svg" alt="Homepage">
            </a>
        </div>

        <div class="header-content">
    
            <nav class="row header-nav-wrap">
                <ul class="header-nav">
                    <li><a href="<?php echo URLROOT; ?>/" title="Intro">Home</a></li>
                    <li><a href="<?php echo URLROOT; ?>/pages/about">About</a>
                    <li><a class="smoothscroll" href="#services" title="Services">Services</a></li>
                    <li><a class="smoothscroll" href="#portfolio" title="Works">Works</a></li>
                    <li><a href="mailto:#0" title="Contact us">Say Hello</a></li>
                </ul>
            </nav> <!-- end header-nav-wrap -->

            <a href="#0" class="btn btn--stroke btn--small">Download CV</a>

        </div> <!-- end header-content -->

        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>

    </header>
    
