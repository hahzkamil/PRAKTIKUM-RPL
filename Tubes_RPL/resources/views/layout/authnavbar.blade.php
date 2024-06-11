
<nav class="navbar nav-underline navbar-expand-lg navbar-black" style="background-color: #6AB4DD;">
    <a class="navbar-brand" href="#">
        <!-- Your logo here -->
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
                    <a class="nav-link" href="#"><strong>Catalog</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sellerlist"><strong>Daftar Mitra</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><strong>Perkiraan cuaca</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><strong>About Us</strong></a>
                </li>
            </ul>
        </div>
    </div>

    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link" href="#">
                <img src="{{ URL('img/cart_icon.png') }}" style="width: 30px; height: 30px; margin-right: 10px;"></a>
        </li>
        <li class="nav-item">
            <a href="profile" class="btn btn-primary mx-3">
                <i class="bi bi-person-circle"></i> Profile
            </a>
        </li>
    </ul>
</nav>


