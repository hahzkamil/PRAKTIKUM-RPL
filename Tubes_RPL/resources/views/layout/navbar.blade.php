<nav class="navbar nav-underline navbar-expand-lg navbar-black" style="background-color: #6AB4DD;">
<a class="navbar-brand" href="#" style="font-weight: bold; font-size: 23px;">
        <img src="{{ URL('img/fishon.jpeg') }}" alt="FishOn Logo" style="height: 50px; margin-right: 10px; margin-left: 20px;">
        FishOn!
    </a>
    <div class="container justify-content-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
            <ul class="navbar-nav text-center">
                <li class="nav-item">
                    <a class="nav-link" href="/"><strong>Home</strong></a>
                </li>    
                <li class="nav-item">
                    <a class="nav-link" href="catalogproduk"><strong>Catalog</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sellerlist"><strong>Daftar Mitra</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus"><strong>About Us</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/show-artikel"><strong>News</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/events"><strong>Events</strong></a>
                </li>
            </ul>
        </div>
    </div>

    <ul class="nav justify-content-end flex-wrap">
        <li class="nav-item">
            <a class="nav-link" href="cart">
                <img src="{{ URL('img/cart_icon.png') }}" style="width: 30px; height: 30px; margin-right: 10px;">
            </a>
        </li>
        @guest
            <li class="nav-item">
                <a href="signup" class="btn btn-light mx-2 my-1">Join Us</a>
            </li>
            <li class="nav-item">
                <a href="login" class="btn btn-primary mx-2 my-1">Login</a>
            </li>
        @else
            <li class="nav-item">
                <a href="profile" class="btn btn-primary mx-2 my-1">Profile</a>
            </li>
        @endguest
    </ul>
</nav>
