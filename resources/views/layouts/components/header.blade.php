    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
           <ul>
                <li class="{{request()->is('/') ? 'active' : ''}}"><a href="{{route('beranda')}}">Home</a></li>
                <li class="{{request()->is('product*') ? 'active' : ''}}"><a href="{{route('product')}}">Products</a></li>
                <li class="{{request()->is('blogs*') ? 'active' : ''}}"><a href="{{route('blogs')}}">Blog</a></li>
                <li class="{{request()->is('carts*') ? 'active' : ''}}"><a href="{{route('carts')}}">Keranjang</a></li>
                <li class="{{request()->is('contacts*') ? 'active' : ''}}"><a href="{{route('contacts')}}">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> dwi.putra.si.22@cic.ac.id</li>
                <li>Belanja Sayuran Jadi Lebih Mudah</li>
            </ul>
        </div>
    </div>