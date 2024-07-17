<nav class="navbar navbar-expand-lg sticky-top" style="background-color:bisque">
    <div class="container-fluid" >
        <a class="navbar-brand" href="#">

            <img src="https://www.mitravisualgroup.co.id/sitepad-data/uploads/2023/12/MVG-Logo-03.png"
                style="height: 50px"></img>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav flex-grow-1 pe-3 justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2 active" aria-current="page" href="{{ route('Home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="{{ route('Produk') }}">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="#">Link</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
