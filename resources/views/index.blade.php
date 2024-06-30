<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title>xx</title>
    @vite('resources/sass/app.scss')
    @vite('resources/css/app.css')
</head>

<body>
    @include('layouts.header')
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://akcdn.detik.net.id/community/media/visual/2023/02/27/gambar-kartun_169.jpeg?w=700&q=90"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.example.com/path/to/image.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.example.com/path/to/image.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- ser --}}
    <section id="serv">
        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="fs-5 fw-bold text-primary">Our Services</p>
                    <h1 class="display-5 mb-5">Services That We Offer For You</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded d-flex h-100">
                            <div class="service-img rounded">
                                <img class="img-fluid"
                                    src="https://www.mitravisualgroup.co.id/sitepad-data/uploads/2023/12/KATALOG-MAGNUSTEK.png"
                                    alt="">
                            </div>
                            <div class="service-text rounded p-5">
                                <div class="btn-square rounded-circle mx-auto mb-3">
                                    <img class="img-fluid" src="img/icon/icon-3.png" alt="Icon">
                                </div>
                                <h4 class="mb-3">Landscaping</h4>
                                <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed
                                    diam stet diam sed stet.</p>
                                <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded d-flex h-100">
                            <div class="service-img rounded">
                                <img class="img-fluid" src="img/service-2.jpg" alt="">
                            </div>
                            <div class="service-text rounded p-5">
                                <div class="btn-square rounded-circle mx-auto mb-3">
                                    <img class="img-fluid" src="img/icon/icon-6.png" alt="Icon">
                                </div>
                                <h4 class="mb-3">Pruning plants</h4>
                                <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed
                                    diam stet diam sed stet.</p>
                                <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded d-flex h-100">
                            <div class="service-img rounded">
                                <img class="img-fluid" src="img/service-3.jpg" alt="">
                            </div>
                            <div class="service-text rounded p-5">
                                <div class="btn-square rounded-circle mx-auto mb-3">
                                    <img class="img-fluid" src="img/icon/icon-5.png" alt="Icon">
                                </div>
                                <h4 class="mb-3">Irrigation & Drainage</h4>
                                <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed
                                    diam stet diam sed stet.</p>
                                <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded d-flex h-100">
                            <div class="service-img rounded">
                                <img class="img-fluid" src="img/service-4.jpg" alt="">
                            </div>
                            <div class="service-text rounded p-5">
                                <div class="btn-square rounded-circle mx-auto mb-3">
                                    <img class="img-fluid" src="img/icon/icon-4.png" alt="Icon">
                                </div>
                                <h4 class="mb-3">Garden Maintenance </h4>
                                <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed
                                    diam stet diam sed stet.</p>
                                <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Service End -->
    </section>

    <div class="container-lg text-center">
        <div class="row">
            <div class="col-md-4">
                <h2>Recent Activities</h2>
            </div>
            <div class="col-md-6">
                <a>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel unde, modi velit laboriosam pariatur
                    commodi laudantium error eos blanditiis officia veritatis reiciendis aperiam ut deleniti aut
                    aspernatur fugiat nisi eligendi?</a>
            </div>
        </div>
    </div>



    {{-- late --}}
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://media.geeksforgeeks.org/wp-content/uploads/20240110011815/sutterlin-1362879_640-(1).jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below
                                                    as a natural lead-in to
                                                    additional content.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://media.geeksforgeeks.org/wp-content/uploads/20240110011815/sutterlin-1362879_640-(1).jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title
                                                    treatment</h4>
                                                <p class="card-text">With supporting
                                                    text below as a natural
                                                    lead-in to additional
                                                    content.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://media.geeksforgeeks.org/wp-content/uploads/20240110011815/sutterlin-1362879_640-(1).jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below
                                                    as a natural lead-in to
                                                    additional content.</p>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://media.geeksforgeeks.org/wp-content/uploads/20240110011815/sutterlin-1362879_640-(1).jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below
                                                    as a natural lead-in to
                                                    additional content.</p>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src=
"https://media.geeksforgeeks.org/wp-content/uploads/20240110011815/sutterlin-1362879_640-(1).jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below
                                                    as a natural lead-in to
                                                    additional content.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src=
"https://media.geeksforgeeks.org/wp-content/uploads/20240110011815/sutterlin-1362879_640-(1).jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below
                                                    as a natural lead-in to
                                                    additional content.</p>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button"
                        data-slide="prev">
                        <i class="bi bi-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3" href="#carouselExampleIndicators2" role="button"
                        data-slide="next">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="about-us">
        <div class="container">
            <div class="row align-items-center justify-content-between g-5">
                <div class="col-lg-6">
                    <div class="image-holder">
                        <img src="https://www.mitravisualgroup.co.id/sitepad-data/uploads/2023/12/Screenshot-2023-12-24-at-22-53-38-GRAND-LAUNCHING-MITRA-VISUAL-GROUP-Google-Drive.png"
                            alt="single" class="img-fluid jarallax-img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="detail p-5">
                        <div class="display-header">
                            <h2 class="display-2 text-uppercase text-dark pb-2">About Us</h2>
                            <p class="pb-3">Ac varius lectus tellus tellus quisque tristique aenean. Volutpat velit
                                nulla eu iaculis risus in urna. Eu morbi vel purus velit dui vel egestas purus sed. Eget
                                turpis tincidunt faucibus montes arcu in nullam tortor orci. Nulla tellus sed purus
                                vestibulum sagittis pretium donec nec mattis ollis porta sit ut.</p>
                            <p>Facilisi ut vulputate volutpat a aliquet. Facilisis sed quis pretium amet hac. Justo
                                tristique sagittis sodales viverra venenatis integer fringilla. </p>
                            <a href="about-us.html"
                                class="btn btn-medium btn-arrow outline-dark position-relative mt-3">
                                <span class="text-uppercase">About us</span>
                                <svg class="arrow-right position-absolute" width="18" height="20">
                                    <use xlink:href="#arrow-right"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer>
        @include('layouts.footer')
    </footer>

    @vite('resources/js/app.js')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>

</html>
