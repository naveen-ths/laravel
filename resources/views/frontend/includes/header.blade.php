<!-- Start Header -->
<nav class="navbar nav-down" data-fullwidth="true" data-menu-style="transparent" data-animation="shrink">
    <!-- Styles: light, dark, transparent, transparent-to-dark | Animation: hiding, shrink -->
    <div class="container">

        <div class="navbar-header">
            <div class="container">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
                <a class="navbar-brand to-top" href="{{ url('/') }}"><img src="{{ asset('img/assets/logo-light.png') }}" class="logo-light" alt="#"><img src="{{ asset('img/assets/logo-dark.png') }}" class="logo-dark" alt="#"></a>
            </div>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <div class="container">
                <ul class="nav navbar-nav menu-right">

                    <!-- Each section must have corresponding ID ( #hero -> id="hero" ) -->
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#works">Work</a></li>
                    <li class="dropdown megamenu vos">
                        <a class="dropdown-toggle">Elements<i class="ion-ios-arrow-down"></i></a>
                        <ul class="dropdown-menu fullwidth">
                            <li class="megamenu-content withdesc">
                                <div class="col-md-3 mg-col">
                                    <ul>
                                        <li><a href="elements.html#elements-accordion">Accordion</a></li>
                                        <li><a href="elements.html#elements-buttons">Buttons</a></li>
                                        <li><a href="elements.html#elements-features">Icon Features</a></li>
                                        <li><a href="elements.html#elements-bars">Progress Bars</a></li>
                                        <li><a href="elements.html#elements-pricing">Pricing Options</a></li>
                                        <li><a href="elements.html#elements-lists">Lists</a></li>
                                        <li><a href="elements.html#elements-typography">Typography</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3 mg-col">
                                    <ul>
                                        <li><a href="elements.html#elements-tabs">Tabs</a></li>
                                        <li><a href="elements.html#elements-circles">Progress Circles</a></li>
                                        <li><a href="elements.html#elements-icons">Icon Fonts</a></li>
                                        <li><a href="elements.html#elements-maps">Google Maps</a></li>
                                        <li><a href="elements.html#elements-grid">Grid Columns</a></li>
                                        <li><a href="elements.html#elements-countdown">Countdowns</a></li>
                                        <li><a href="elements.html#elements-testimonials">Testimonials</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3 mg-col">
                                    <ul>
                                        <li><a href="elements.html#elements-subscribe">Subscription</a></li>
                                        <li><a href="elements.html#elements-videos">Video Embeds</a></li>
                                        <li><a href="elements.html#elements-twitter">Twitter Feed</a></li>
                                        <li><a href="elements.html#elements-callouts">Callouts</a></li>
                                        <li><a href="portfolio-contained.html">Portfolio</a></li>
                                        <li><a href="portfolio-fullwidth.html">Portfolio Fullwidth</a></li>
                                        <li><a href="project-wide-gallery.html">Project Wide Gallery</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3 mg-col">
                                    <ul>
                                        <li><a href="project-slides.html">Project Slides</a></li>
                                        <li><a href="project-gallery.html">Projects Gallery</a></li>
                                        <li><a href="project-video.html">Projects Video</a></li>
                                        <li><a href="project-wide-slides.html">Project Wide Slides</a></li>
                                        <li><a href="project-wide-video.html">Project Wide Video</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle">Blog<i class="ion-ios-arrow-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="blog-standard.html">Standard Layout</a></li>
                            <li><a href="blog-list.html">List Layout</a></li>
                            <li><a href="blog-grid.html">Grid Layout</a></li>
                            <li><a href="blog-post-standard.html">Standard Post</a></li>
                            <li><a href="blog-post-gallery.html">Gallery Post</a></li>
                            <li><a href="blog-post-video.html">Video Post</a></li>
                            <li><a href="blog-post-fullwidth.html">Fullwidth Post</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li>

                    <li class="nav-separator"></li>
                    <li  class="nav-icon"><a href="http://facebook.com" target="_blank"><i class="ion-social-facebook"></i></a></li>
                    <li  class="nav-icon"><a href="http://twitter.com" target="_blank"><i class="ion-social-twitter"></i></a></li>
                    <li  class="nav-icon"><a href="#" target="_blank"><i class="ion-help-buoy"></i></a></li>
                </ul>

            </div>
        </div>
    </div>
</nav>
<!-- End Header -->