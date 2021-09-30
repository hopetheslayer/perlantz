<aside id="menubar" class="menubar light">
    <div class="app-user">
        <div class="media">
            <div class="media-left">
                <div class="avatar avatar-md avatar-circle">
                    <a href="#"><img class="img-responsive" src="/assets/assets/images/221.jpg" alt="avatar"/></a>
                </div><!-- .avatar -->
            </div>
            <div class="media-body">
                <div class="foldable">
                    <h5><a href="#" class="username">{{ Auth::user()->name }}</a></h5>
                    <ul>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <small>{{ Auth::user()->title }}</small>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu animated flipInY">



                                <li>
                                    <a class="dropdown-item" href="{{ route('admin.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span class="m-r-xs"><i class="fa fa-power-off"></i> </span> {{ __('Çıkış') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- .media-body -->
        </div><!-- .media -->
    </div><!-- .app-user -->

    <div class="menubar-scroll">
        <div class="menubar-scroll-inner">
            <ul class="app-menu">
                <li>
                    <a href="{{route('admin.dashboard')}}">
                        <i class="menu-icon fa fa-home"></i>
                        <span class="menu-text">Anasayfa</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.siparis.index')}}">
                        <i class="menu-icon fa fa-newspaper-o"></i>
                        <span class="menu-text">Siparis</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.urun')}}">
                        <i class="menu-icon fa fa-newspaper-o"></i>
                        <span class="menu-text">Ürünler</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.urunkategori.index')}}">
                        <i class="menu-icon fa fa-newspaper-o"></i>
                        <span class="menu-text">Ürün Kategoriler</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.user')}}">
                        <i class="menu-icon fa fa-user-plus"></i>
                        <span class="menu-text">Kullanıcılar</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.ticket')}}">
                        <i class="menu-icon fa fa-envelope"></i>
                        <span class="menu-text">Support Tickets</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.blog.index')}}">
                        <i class="menu-icon zmdi zmdi-view-web zmdi-hc-lg"></i>
                        <span class="menu-text">Blog</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.blogkategori.index')}}">
                        <i class="menu-icon fa fa-users"></i>
                        <span class="menu-text">Blog Kategoriler</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.faq.index')}}">
                        <i class="menu-icon zmdi zmdi-view-web zmdi-hc-lg"></i>
                        <span class="menu-text">F.A.Q Yazılar</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.faqkategori.index')}}">
                        <i class="menu-icon fa fa-users"></i>
                        <span class="menu-text">F.A.Q Kategoriler</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.contact.index')}}">
                        <i class="menu-icon fa fa-book"></i>
                        <span class="menu-text">İletişim Liste</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.reqform.index')}}">
                        <i class="menu-icon fa fa-book"></i>
                        <span class="menu-text">Request Form</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('subscriber.index')}}">
                        <i class="menu-icon fa fa-book"></i>
                        <span class="menu-text">Aboneler</span>
                    </a>
                </li>

                <li class="has-submenu">
                    <a href="#" class="submenu-toggle">
                        <i class="menu-icon fa fa-server"></i>
                        <span class="menu-text">Tema Ayarları</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">

                        <li><a href="{{route('admin.diamonds.getir')}}"><span class="menu-text">Diamond Sayfa Ayarları</span></a></li>
                        <li><a href="{{route('admin.gemstone.getir')}}"><span class="menu-text">Gemstone Sayfa Ayarları</span></a></li>
                        <li><a href="{{route('admin.pearls.getir')}}"><span class="menu-text">Pearls Sayfa Ayarları</span></a></li>
                        <li><a href="{{route('admin.braceletsize.getir')}}"><span class="menu-text">Bracelet Size Sayfa Ayarları</span></a></li>
                        <li><a href="{{route('admin.engagementrings.getir')}}"><span class="menu-text">Engagement Rings Sayfa Ayarları</span></a></li>
                        <li><a href="{{route('admin.weddingrings.getir')}}"><span class="menu-text">Wedding Rings Sayfa Ayarları</span></a></li>
                        <li><a href="{{route('admin.engraving.getir')}}"><span class="menu-text">Engraving Sayfa Ayarları</span></a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="#" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-settings zmdi-hc-lg"></i>
                        <span class="menu-text">Ayarlar</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">


                        <li><a href="{{route('admin.sifre.getir')}}"><span class="menu-text">Şifre Değiştirme</span></a></li>
                        <li><a href="{{route('admin.mail.getir')}}"><span class="menu-text">Email Değiştirme</span></a></li>
                    </ul>
                </li>
            </ul><!-- .app-menu -->
        </div><!-- .menubar-scroll-inner -->
    </div><!-- .menubar-scroll -->
</aside>
