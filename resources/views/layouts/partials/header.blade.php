<aside class="nav-secondary text-center   bg-rd-global-header header-alt-menu aside-height" data-plugin-sticky  data-plugin-options="{'offset_top': 135}">
    <div class="container">
        <div class="row ">
            <div class="col">
                <ul class="nav nav-light justify-content-center ">

                    <li class="nav-item ">
                        <a class="yazi-bg-header" href="#">For May Celebrationdays: <span id="redbar-bold">15% Off* Aquamarine Styles</span> with Code MAY2021. Ends 5/25.
                            <span id="shop-link"> Shop Now</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>

<header class="header-area">
    <!-- main header start -->
    <div class="main-header d-none d-lg-block">
        <!-- header top start -->
        <!-- header top end -->
        <!-- header middle area start -->
        <header class="header-area">
            <!-- main header start -->
            <div class="main-header d-none d-lg-block">

                <!-- header middle area start -->
                <div class="header-main-area">
                    <div style="padding-left: 200px; padding-right:  200px;" class="container-fluid">
                        <div class="row align-items-center ptb-30">
                            <!-- header social area start -->
                            <div class="col-lg-4">
                                <div class="header-social-link">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>

                            <!-- header social area end -->
                            <!-- start logo area -->
                            <div class="col-lg-4">
                                <div class="logo text-center">
                                 <a href="/">
                                    <img  class="img-fluid" src="/frontend/assets/img/logo/logo-perlantz.jpg" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <!-- start logo area -->
                            <!-- mini cart area start -->
                            <div class="col-lg-4">
                                <div class="header-right d-flex align-items-center justify-content-end">
                                    <div class="header-configure-area">
                                        <ul class="nav justify-content-end ">
                                            <li class="header-search-container mr-0">
                                                <button class="search-trigger d-block"><i class="pe-7s-search"></i></button>
                                                <form class="header-search-box d-none  jackInTheBox">
                                                    <input type="text" placeholder="Search.." class="header-search-field">
                                                    <button class="header-search-btn"><i class="pe-7s-search"></i></button>
                                                </form>
                                            </li>
                                            <li class="user-hover">
                                                <a href="#">
                                                    <i class="pe-7s-user"></i>
                                                </a>
                                                <ul class="dropdown-list">
                                                    @guest
                                                        <li><a href="{{route('login')}}">login</a></li>
                                                        <li><a href="{{route('register')}}">register</a></li>
                                                    @else
                                                        <li><a href="{{route('home')}}">{{ Auth::user()->name }} {{ Auth::user()->surname }}</a></li>
                                                        <li>
                                                            <a href="{{route('user.email')}}" class="nav-link">Change Email</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('user.password')}}" class="nav-link">Change Password</a>
                                                        </li>
                                                       <li> <a href="{{ route('logout') }}" class="nav-link"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
                                                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                   @csrf
                                                               </form>
                                                           </a>
                                                       </li>


                                                    @endguest
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="{{route('wishlist')}}">
                                                    <i class="pe-7s-like"></i>
                                                    <div class="notification">{{Cart::instance('wishlist')->count()}}</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('cart')}}"  class="minicart-btn">
                                                    <i class="pe-7s-shopbag"></i>
                                                    <div class="notification">{{Cart::instance('default')->count()}}</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- mini cart area end -->
                        </div>

                        <div class="row">
                            <!-- main menu area start -->
                            <div class="col-12">
                                <div class="main-menu-area sticky header-cizgi">
                                    <div class="main-menu">
                                        <!-- main menu navbar start -->
                                        <nav class="desktop-menu header-font-size">
                                            <ul class="justify-content-center header-style-4">
                                                <li class="active"><a  href="{{route('anasayfa')}}">HOME </a></li>

                                                <li>
                                                    <a href="{{url('/category/jewelry')}}">JEWELRY<i class="fa fa-angle-down"></i></a>

                                                    <ul class="dropdown">
                                                        <li><a href="{{url('/category/j-rings')}}">Rings</a></li>
                                                        <li><a href="{{url('/category/j-necklaces')}}">Necklaces</a></li>
                                                        <li><a href="{{url('/category/j-bracelets')}}">Bracelets</a></li>
                                                        <li><a href="{{url('/category/j-earrings')}}">Earrings</a></li>
                                                        <li><a href="{{url('/category/j-pendants')}}">Pendants</a></li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <a href="{{url('/category/wedding')}}">WEDDING<i class="fa fa-angle-down"></i></a>

                                                    <ul class="dropdown">

                                                        <li><a href="{{url('/category/wedding-rings-couple')}}">Couple</a></li>
                                                        <li><a href="{{url('/category/wedding-rings-women')}}">Women</a></li>
                                                        <li><a href="{{url('/category/wedding-rings-men')}}">Men</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="{{url('/category/less-is-more')}}">LESS IS MORE<i class="fa fa-angle-down"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="{{url('/category/less-is-more-rings')}}">Rings</a></li>
                                                        <li><a href="{{url('/category/less-is-more-necklaces')}}">Necklaces</a></li>
                                                        <li><a href="{{url('/category/less-is-more-bracelets')}}">Bracelets</a></li>
                                                        <li><a href="{{url('/category/less-is-more-earrings')}}">Earrings</a></li>
                                                        <li><a href="{{url('/category/less-is-more-pendants')}}">Pendants</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{route('test')}}">3D</a></li>
                                                </li>
                                            </ul>
                                        </nav>
                                        <!-- main menu navbar end -->
                                    </div>
                                </div>
                            </div>
                            <!-- main menu area end -->
                        </div>

                    </div>
                </div>
                <!-- header middle area end -->
            </div>
            <!-- main header start -->
            <!-- mobile header start -->
            <!-- mobile header start -->
            <div class="mobile-header d-lg-none d-md-block sticky">
                <!--mobile header top start -->
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="mobile-main-header">
                                <div class="mobile-logo">
                                    <a href="/">
                                        <img src="/frontend/assets/img/logo/logo.png" alt="Brand Logo">
                                    </a>
                                </div>
                                <div class="mobile-menu-toggler">
                                    <div class="mini-cart-wrap">
                                        <a href="{{route('cart')}}"  class="minicart-btn">
                                            <i class="pe-7s-shopbag"></i>
                                            <div class="notification">{{Cart::count()}}</div>
                                        </a>
                                    </div>
                                    <button class="mobile-menu-btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mobile header top start -->
            </div>
            <!-- mobile header end -->
            <!-- mobile header end -->
            <!-- offcanvas mobile menu start -->
            <!-- off-canvas menu start -->
            <aside class="off-canvas-wrapper">
                <div class="off-canvas-overlay"></div>
                <div class="off-canvas-inner-content">
                    <div class="btn-close-off-canvas">
                        <i class="pe-7s-close"></i>
                    </div>

                    <div class="off-canvas-inner">
                        <!-- search box start -->
                        <div class="search-box-offcanvas">
                            <form>
                                <input type="text" placeholder="Search Here...">
                                <button class="search-btn"><i class="pe-7s-search"></i></button>
                            </form>
                        </div>
                        <!-- search box end -->
                        <!-- mobile menu start -->
                        <div class="mobile-navigation">

                            <!-- mobile menu navigation start -->
                            <nav>
                                <ul class="mobile-menu">
                                    <li class="active"><a href="{{route('anasayfa')}}">Home </a></li>
                                    <li><a href="{{route('test')}}">3D</a></li>
                                    <li class="position-static">
                                        <a href="#">Engagement rings <i class="fa fa-angle-down"></i></a>
                                        <ul class="megamenu dropdown">
                                            <li class="mega-title">
                                                <span>DIAMONDS</span>
                                                <ul>
                                                    <li><a href="">Diamond Engagement Rings</a></li>
                                                    <li><a href="">Black Diamond Engagement Rings</a></li>

                                                </ul>
                                            </li>
                                            <li class="mega-title">
                                                <span>PRECIOUS STONES</span>
                                                <ul>
                                                    <li><a href="">Emerald Engagement Rings</a></li>
                                                    <li><a href="">Sapphire Engagement Rings</a></li>
                                                    <li><a href="">Ruby Engagement Rings</a></li>
                                                    <li><a href="">White Sapphire Engagement Rings</a></li>
                                                    <li><a href="">Yellow Sapphire Engagement Rings</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-title">
                                                <span>SEMI PRECIOUS</span>
                                                <ul>
                                                    <li><a href="cart.html">Amethyst Engagement Rings</a></li>
                                                    <li><a href="checkout.html">Garnet Engagement Rings</a></li>
                                                    <li><a href="compare.html">Aquamarine Engagement Rings</a></li>
                                                    <li><a href="wishlist.html">Blue Topaz Engagement Rings</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-title">
                                                <span>STYLE</span>
                                                <ul>
                                                    <li><a href="my-account.html">Classic Solitaire Engagement Rings</a></li>
                                                    <li><a href="login-register.html">Halo Engagement Rings</a></li>
                                                    <li><a href="about-us.html">Flower Engagement Rings</a></li>
                                                    <li><a href="contact-us.html">Fashion Engagement Rings</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-banners d-none d-lg-block">
                                                <a href="product-details.html">
                                                    <img src="assets/img/banner/img1-static-menu.jpg" alt="">
                                                </a>
                                            </li>
                                            <li class="megamenu-banners d-none d-lg-block">
                                                <a href="product-details.html">
                                                    <img src="assets/img/banner/img2-static-menu.jpg" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="position-static">
                                        <a href="#">Wedding Rings <i class="fa fa-angle-down"></i></a>
                                        <ul class="megamenu dropdown">
                                            <li class="mega-title">
                                                <span>Style #1</span>
                                                <ul>
                                                    <li><a href="">Celtic Wedding Rings</a></li>
                                                    <li><a href="">Classic Wedding Rings</a></li>
                                                    <li><a href="">Simple Wedding Rings</a></li>
                                                    <li><a href="">Twinset Wedding Rings</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-title">
                                                <span>Style #2</span>
                                                <ul>
                                                    <li><a href="">Wood & Carbon Wedding Rings</a></li>
                                                    <li><a href="">Memoire Wedding Rings</a></li>
                                                    <li><a href="">Exclusive Wedding Rings</a></li>
                                                    <li><a href="">Ceramic & Gold Wedding Rings</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-title">
                                                <span>Style #3</span>
                                                <ul>
                                                    <li><a href="">Fancy Wedding Rings</a></li>
                                                    <li><a href="">Twist Wedding Rings</a></li>
                                                    <li><a href="">Vintage Wedding Rings</a></li>
                                                    <li><a href="">Steel & Gold Wedding Rings</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-title">
                                                <span>COLOUR & ALLOY</span>
                                                <ul>
                                                    <li><a href="">White Gold Wedding Rings</a></li>
                                                    <li><a href="">Yellow Gold Wedding Rings</a></li>
                                                    <li><a href="">Rose Gold Wedding Rings</a></li>
                                                    <li><a href="">Palladium Wedding Rings</a></li>
                                                    <li><a href="">Silver Wedding Rings</a></li>
                                                    <li><a href="">Platinum Wedding Rings</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-banners d-none d-lg-block">
                                                <a href="product-details.html">
                                                    <img src="assets/img/banner/img1-static-menu.jpg" alt="">
                                                </a>
                                            </li>
                                            <li class="megamenu-banners d-none d-lg-block">
                                                <a href="product-details.html">
                                                    <img src="assets/img/banner/img2-static-menu.jpg" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="position-static">
                                        <a href="#">Gemstones & Metals <i class="fa fa-angle-down"></i></a>
                                        <ul class="megamenu dropdown">
                                            <li class="mega-title">
                                                <span>column 01</span>
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            shop grid left
                                                            sidebar
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-grid-right-sidebar.html">
                                                            shop grid right
                                                            sidebar
                                                        </a>
                                                    </li>
                                                    <li><a href="shop-list-left-sidebar.html">shop list left sidebar</a></li>
                                                    <li><a href="shop-list-right-sidebar.html">shop list right sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-title">
                                                <span>column 02</span>
                                                <ul>
                                                    <li><a href="product-details.html">product details</a></li>
                                                    <li>
                                                        <a href="product-details-affiliate.html">
                                                            product
                                                            details
                                                            affiliate
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-variable.html">
                                                            product details
                                                            variable
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-group.html">
                                                            product details
                                                            group
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-title">
                                                <span>column 03</span>
                                                <ul>
                                                    <li><a href="cart.html">cart</a></li>
                                                    <li><a href="checkout.html">checkout</a></li>
                                                    <li><a href="compare.html">compare</a></li>
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-title">
                                                <span>column 04</span>
                                                <ul>
                                                    <li><a href="my-account.html">my-account</a></li>
                                                    <li><a href="login-register.html">login-register</a></li>
                                                    <li><a href="about-us.html">about us</a></li>
                                                    <li><a href="contact-us.html">contact us</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-banners d-none d-lg-block">
                                                <a href="product-details.html">
                                                    <img src="assets/img/banner/img1-static-menu.jpg" alt="">
                                                </a>
                                            </li>
                                            <li class="megamenu-banners d-none d-lg-block">
                                                <a href="product-details.html">
                                                    <img src="assets/img/banner/img2-static-menu.jpg" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="position-static">
                                        <a href="#">Men<i class="fa fa-angle-down"></i></a>
                                        <ul class="megamenu dropdown">
                                            <li class="mega-title">
                                                <span>column 01</span>
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            shop grid left
                                                            sidebar
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-grid-right-sidebar.html">
                                                            shop grid right
                                                            sidebar
                                                        </a>
                                                    </li>
                                                    <li><a href="shop-list-left-sidebar.html">shop list left sidebar</a></li>
                                                    <li><a href="shop-list-right-sidebar.html">shop list right sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-title">
                                                <span>column 02</span>
                                                <ul>
                                                    <li><a href="product-details.html">product details</a></li>
                                                    <li>
                                                        <a href="product-details-affiliate.html">
                                                            product
                                                            details
                                                            affiliate
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-variable.html">
                                                            product details
                                                            variable
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-group.html">
                                                            product details
                                                            group
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-title">
                                                <span>column 03</span>
                                                <ul>
                                                    <li><a href="cart.html">cart</a></li>
                                                    <li><a href="checkout.html">checkout</a></li>
                                                    <li><a href="compare.html">compare</a></li>
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-title">
                                                <span>column 04</span>
                                                <ul>
                                                    <li><a href="my-account.html">my-account</a></li>
                                                    <li><a href="login-register.html">login-register</a></li>
                                                    <li><a href="about-us.html">about us</a></li>
                                                    <li><a href="contact-us.html">contact us</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-banners d-none d-lg-block">
                                                <a href="product-details.html">
                                                    <img src="assets/img/banner/img1-static-menu.jpg" alt="">
                                                </a>
                                            </li>
                                            <li class="megamenu-banners d-none d-lg-block">
                                                <a href="product-details.html">
                                                    <img src="assets/img/banner/img2-static-menu.jpg" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="">
                                        <a href="{{route('blog')}}">Blog </a>

                                    </li>
                                    <li><a href="{{route('contact-us')}}">contact us</a></li>

                                    </li>
                                </ul>
                            </nav>
                            <!-- mobile menu navigation end -->
                        </div>
                        <!-- mobile menu end -->

                        <div class="mobile-settings">
                            <ul class="nav">

                                <li>
                                    <div class="dropdown mobile-top-dropdown">
                                        <a href="#" class="dropdown-toggle" id="myaccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             Account
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="myaccount">

                                            @guest
                                            <a class="dropdown-item" href="{{route('login')}}"> login</a>
                                            <a class="dropdown-item" href="{{route('register')}}">register</a>
                                            @else
                                                <a class="dropdown-item" href="{{route('home')}}">{{ Auth::user()->name }} {{ Auth::user()->surname }}</a>
                                                <a class="dropdown-item" href="{{route('user.email')}}">Change Email</a>
                                                <a class="dropdown-item" href="{{route('user.password')}}">Change Password</a>
                                                <a href="{{ route('logout') }}" class="nav-link"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </a>
                                            @endguest
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- offcanvas widget area start -->
                        <div class="offcanvas-widget-area">
                            <div class="off-canvas-contact-widget">
                                <ul>
                                    <li>
                                        <i class="fa fa-mobile"></i>
                                        <a href="#">0123456789</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i>
                                        <a href="#">info@PerlantzJewelry.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="off-canvas-social-widget">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                        <!-- offcanvas widget area end -->
                    </div>
                </div>
            </aside>
            <!-- off-canvas menu end -->
            <!-- offcanvas mobile menu end -->
        </header>

        <!-- header middle area end -->
    </div>
    <!-- main header start -->
    <!-- mobile header start -->
    <!-- mobile header start -->
    <div class="mobile-header d-lg-none d-md-block sticky">
        <!--mobile header top start -->
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="mobile-main-header">
                        <div class="mobile-logo">
                            <a href="/">
                                <img src="/frontend/assets/img/logo/logo.png" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="mobile-menu-toggler">
                            <div class="mini-cart-wrap">
                                <a href="{{route('cart')}}"  class="minicart-btn">
                                    <i class="pe-7s-shopbag"></i>
                                    <div class="notification">{{Cart::count()}}</div>
                                </a>
                            </div>
                            <button class="mobile-menu-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile header top start -->
    </div>
    <!-- mobile header end -->
    <!-- mobile header end -->
    <!-- offcanvas mobile menu start -->
    <!-- off-canvas menu start -->
    <aside class="off-canvas-wrapper">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="pe-7s-close"></i>
            </div>

            <div class="off-canvas-inner">
                <!-- search box start -->
                <div class="search-box-offcanvas">
                    <form>
                        <input type="text" placeholder="Search Here...">
                        <button class="search-btn"><i class="pe-7s-search"></i></button>
                    </form>
                </div>
                <!-- search box end -->
                <!-- mobile menu start -->
                <div class="mobile-navigation">

                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children">
                            <li class="active"><a href="{{route('anasayfa')}}">Home </a></li>
                            <li class="active"><a href="{{route('test')}}">3D </a></li>

                            <li class="menu-item-has-children">
                                <a href="#">Jewelry</a>
                                <ul class="megamenu dropdown">
                                    <li class="mega-title menu-item-has-children">





                                    </li>
                                    <li class="mega-title menu-item-has-children"><a href="{{url('/category/j-rings')}}">Rings</a></li>
                                    <li class="mega-title menu-item-has-children">  <a href="{{url('/category/j-necklaces')}}">Necklaces</a></li>
                                    <li class="mega-title menu-item-has-children">  <a href="{{url('/category/j-bracelet')}}">Bracelets</a></li>
                                    <li class="mega-title menu-item-has-children">  <a href="{{url('/category/j-earrings')}}">Earrings</a></li>
                                    <li class="mega-title menu-item-has-children">  <a href="{{url('/category/j-pendants')}}">Pendants</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Wedding</a>
                                <ul class="megamenu dropdown">

                                    <li class="mega-title menu-item-has-children">   <a href="{{url('/category/wedding-rings-couple')}}">Couple</a></li>
                                    <li class="mega-title menu-item-has-children">          <a href="{{url('/category/wedding-rings-women')}}">Women</a></li>
                                    <li class="mega-title menu-item-has-children">     <a href="{{url('/category/wedding-rings-men')}}">Men</a></li>


                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Less is more</a>
                                <ul class="megamenu dropdown">
                                    <li class="mega-title menu-item-has-children">       <a href="{{url('/category/wedding-rings-couple')}}">Rings</a></li>
                                    <li class="mega-title menu-item-has-children">    <a href="{{url('/category/less-is-more-necklaces')}}">Necklaces</a></li>
                                    <li class="mega-title menu-item-has-children">   <a href="{{url('/category/less-is-more-necklaces')}}">Necklaces</a></li>
                                    <li class="mega-title menu-item-has-children">    <a href="{{url('/category/less-is-more-bracelets')}}">Bracelets</a></li>
                                    <li class="mega-title menu-item-has-children">       <a href="{{url('/category/less-is-more-earrings')}}">Earrings</a></li>
                                    <li class="mega-title menu-item-has-children">    <a href="{{url('/category/less-is-more-pendants')}}">Pendants</a></li>

                                </ul>
                            </li>

                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->

                <div class="mobile-settings">
                    <ul class="nav">

                        <li>
                            <div class="dropdown mobile-top-dropdown">
                                <a href="#" class="dropdown-toggle" id="myaccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Account
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="myaccount">
                                    @guest
                                        <a class="dropdown-item" href="{{route('login')}}"> login</a>
                                        <a class="dropdown-item" href="{{route('register')}}">register</a>
                                    @else
                                        <a class="dropdown-item" href="{{route('home')}}">{{ Auth::user()->name }} {{ Auth::user()->surname }}</a>
                                        <a class="dropdown-item" href="{{route('user.email')}}">Change Email</a>
                                        <a class="dropdown-item" href="{{route('user.password')}}">Change Password</a>
                                        <a href="{{ route('logout') }}" class="nav-link"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </a>
                                    @endguest
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- offcanvas widget area start -->
                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <ul>
                            <li>
                                <i class="fa fa-mobile"></i>
                                <a href="#">0123456789</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <a href="#">info@yourdomain.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="off-canvas-social-widget">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
                <!-- offcanvas widget area end -->
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->
    <!-- offcanvas mobile menu end -->
</header>


