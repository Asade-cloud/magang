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


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Our Services</h6>
                <h1 class="mb-4">We Are Pioneers In The World Of Renewable Energy</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid"
                            src="https://www.suarasurabaya.net/wp-content/uploads/2014/08/kk139795_clip10.jpg"
                            alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="bi bi-person-video2" style="font-size: xx-large"></i>
                            </div>
                            <h4 class="mb-3">Solar Panels</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="img/img-600x400-2.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-wind fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Wind Turbines</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="small fw-medium" href="">Read More<i
                                    class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="img/img-600x400-3.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-lightbulb fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Hydropower Plants</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="small fw-medium" href="">Read More<i
                                    class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    {{-- Awward --}}
    <section id="awward">
        <div class="container">
            <div class="row align-items-center justify-content-between g-5">
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
                <div class="col-lg-6">
                    <div class="image-holder">
                        <img src="https://www.mitravisualgroup.co.id/sitepad-data/uploads/2023/12/Screenshot-2023-12-24-at-22-53-38-GRAND-LAUNCHING-MITRA-VISUAL-GROUP-Google-Drive.png"
                            alt="single" class="img-fluid jarallax-img">
                    </div>
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
