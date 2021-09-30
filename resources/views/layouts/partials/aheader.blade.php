<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 0}">
    <div class="header-body">
        @foreach($temaayar as $tx)
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column justify-content-start">
                    <div class="header-logo">
                        <a href="{{route('anasayfa')}}">

                            <img alt="EZ" width="180"  src="/frontend/uploads/theme/anasayfa/{{$tx->logo}}">
                        </a>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-nav">
                        <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                            <nav class="collapse">
                                <ul class="nav flex-column flex-lg-row" id="mainNav">
                                    <li class="dropdown ">
                                        <a href="{{route('home')}}" class="dropdown-item dropdown-toggle " >
                                            Dashboard
                                        </a>
                                    </li>
                                    <li class="dropdown ">
                                        <a href="{{route('siparisler')}}" class="dropdown-item dropdown-toggle " >
                                            Orders
                                        </a>
                                    </li>
                                    <li class="dropdown ">
                                        <a href="{{route('user.address')}}" class="dropdown-item dropdown-toggle " >
                                            Addresses
                                        </a>
                                    </li>
                                    @guest
                                        <li class="dropdown dropdown-mega dropdown-mega-signin signin ml-lg-3" id="headerAccount">
                                            <a href="{{route('login')}}" class="dropdown-item pl-lg-4" >Sign In</a>

                                        </li>
                                    @else
                                        <li class="dropdown dropdown-mega dropdown-mega-signin signin logged ml-lg-3" id="headerAccount">
                                            <a  class="dropdown-item pl-lg-4" href="{{route('home')}}">My Account</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="dropdown-mega-content">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="row align-items-center mb-4">
                                                                    <div class="col">
                                                                        <span class="top-sub-title text-color-light-3">SIGNED IN AS</span>
                                                                        <h2 class="font-weight-bold text-4 mb-0">{{ Auth::user()->name }} {{ Auth::user()->surname }}  </h2>
                                                                    </div>
                                                                    <div class="col text-right">
                                                                        <img src="/frontend/uploads/profile/{{Auth::user()->detay->imageb}}" class="img-fluid rounded-circle" alt="" width="48" />
                                                                    </div>
                                                                </div>

                                                                <ul class="nav flex-column">
                                                                    <li class="nav-item">
                                                                        <a href="{{route('user.profile')}}" class="nav-link border border-left-0 border-top-0 border-right-0">Your Profile</a>
                                                                    </li>

                                                                    <li class="nav-item">
                                                                        <a href="{{route('user.email')}}" class="nav-link">Change Email</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a href="{{route('user.password')}}" class="nav-link">Change Password</a>
                                                                    </li>

                                                                    <li class="nav-item">
                                                                        <a href="{{ route('logout') }}" class="nav-link"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
                                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                                @csrf
                                                                            </form>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    @endguest
                                </ul>
                            </nav>
                        </div>
                        <div style="margin-left: 50px;" class="header-button d-none d-sm-flex ">
                            <div class="mini-cart order-4">
                                <span class="font-weight-bold font-primary">Cart / <span class="cart-total">€{{Cart::total()}}</span></span>
                                <div class="mini-cart-icon">
                                    <img src="/frontend/img/icons/cart-bag.svg" class="img-fluid" alt="" />
                                    <span class="badge badge-primary rounded-circle">{{Cart::count()}}</span>
                                </div>
                                <div class="mini-cart-content">
                                    <div class="inner-wrapper bg-light rounded">
                                        @foreach(Cart::content() as $urunCartItem)

                                            <div class="mini-cart-product">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="text-color-default font-secondary text-1 mt-3 mb-0"><a href="{{route('urun',$urunCartItem->options->slug)}}">{{$urunCartItem->name}}</a></h2>
                                                        <strong class="text-color-dark">
                                                            <span class="qty">{{$urunCartItem->qty}}x</span>
                                                            <span class="product-price">€{{$urunCartItem->price}}</span>
                                                        </strong>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="product-image">
                                                            <a href="{{ route('cart.anasayfa.kaldir',$urunCartItem->rowId) }}" class="btn btn-light btn-rounded justify-content-center align-items-center"><i class="fas fa-times"></i></a>
                                                            <img src="/frontend/uploads/product/{{$urunCartItem->options->urun_resmi}}" class="img-fluid rounded" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        @if(Cart::total() == 0)
                                            <div class="dropdown-cart-total text-center">
                                                <h5 style="margin-top: 10px; margin-bottom: 10px;">you didn't add any products</h5>
                                            </div><!-- End .dropdown-cart-total -->

                                        @else
                                            <div class="mini-cart-total">
                                                <div class="row">
                                                    <div class="col">
                                                        <strong class="text-color-dark">TOTAL:</strong>
                                                    </div>
                                                    <div class="col text-right">
                                                        <strong class="total-value text-color-dark">€{{Cart::total()}}</strong>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mini-cart-actions">
                                                <div class="row">
                                                    <div class="col pr-1">
                                                        <a href="{{route('cart')}}" class="btn btn-dark font-weight-bold rounded text-0">VIEW CART</a>
                                                    </div>
                                                    <div class="col pl-1">
                                                        <a href="{{route('odeme')}}" class="btn btn-primary font-weight-bold rounded text-0">CHECKOUT</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="header-btn-collapse-nav ml-3" data-toggle="collapse" data-target=".header-nav-main nav">
										<span class="hamburguer">
											<span></span>
											<span></span>
											<span></span>
										</span>
                            <span class="close">
											<span></span>
											<span></span>
										</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endforeach
