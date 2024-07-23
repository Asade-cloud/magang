<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title>xx</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    @vite('resources/sass/app.scss')
    @vite('resources/css/app.css')
</head>

<body>
    @include('layouts.header')
        <!-- Shop Detail Start -->
        <div class="container-fluid pb-5" style="padding-top: 30px">
            <div class="row px-xl-5">
                <div class="col-lg-5 mb-30">
                    <div id="product-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner bg-light">
                            @foreach ($produks->gambar as $key => $gambar)
                                <div class="carousel-item @if ($key == 0) active @endif">
                                    <img class="d-block w-100 h-100" src="{{ asset('storage/' . $gambar->gambar) }}"
                                        alt="{{ $produks->nama_produk }}">
                                </div>
                            @endforeach
                        </div>
                        @if ($produks->gambar->count() > 1)
                        <button class="carousel-control-prev" type="button" data-bs-target="#product-carousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#product-carousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    @endif
            
                    </div>
                </div>

                <div class="col-lg-7 h-auto mb-30">
                    <h3 style="color: blue">{{ $produks->nama_produk }}</h3>
                    <div class="row xl-5" style="margin-top: 20px">
                        <div class="col">
                            <div class="bg-light p-30">
                                <div class="nav nav-tabs mb-4">
                                    <a class="nav-item nav-link text-dark active" data-toggle="tab"
                                        href="#tab-pane-1">Description</a>
                                    <a class="nav-item nav-link text-dark" data-toggle="tab"
                                        href="#tab-pane-2">Information</a>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab-pane-1">
                                        <h4 class="mb-3">Product Description</h4>
                                        <p>{{ $produks->deskripsi }}</p>
                                    </div>
                                    <div class="tab-pane fade" id="tab-pane-2">
                                        <h4 class="mb-3">Additional Information</h4>
                                        <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur
                                            vero
                                            aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum,
                                            dolor
                                            rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr,
                                            sadipscing kasd
                                            ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata
                                            kasd ipsum
                                            accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit
                                            sanctus
                                            diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos
                                            consetetur at
                                            sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod
                                            takimata dolor ea invidunt.</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item px-0">
                                                        Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                                    </li>
                                                    <li class="list-group-item px-0">
                                                        Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                                    </li>
                                                    <li class="list-group-item px-0">
                                                        Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                                    </li>
                                                    <li class="list-group-item px-0">
                                                        Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item px-0">
                                                        Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                                    </li>
                                                    <li class="list-group-item px-0">
                                                        Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                                    </li>
                                                    <li class="list-group-item px-0">
                                                        Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                                    </li>
                                                    <li class="list-group-item px-0">
                                                        Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-detail bg-primary">
                <div class="xl-5" style="text-align: center">
                    <h1>{{ $kategoris->nama_kategori }} {{ optional($subkategoris)->nama_subkategori ?? '' }}</h1>
                </div>
            </div>

        </div>
        <!-- Shop Detail End -->

       <!-- <-produk terkait-> -->
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        @if ($relatedProducts->count() > 0)
        <h2>Produk Terkait</h2>
        <div>
            <div>
                <button class="btn btn-primary" type="button" data-bs-target="#related-product-carousel" data-bs-slide="prev">Sebelumnya</button>
                <button class="btn btn-primary" type="button" data-bs-target="#related-product-carousel" data-bs-slide="next">Berikutnya</button>
            </div>
        @endif
        </div>
    </div>
    <div id="related-product-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($relatedProducts->chunk(4) as $chunk)
                <div class="carousel-item @if ($loop->first) active @endif">
                    <div class="row">
                        @foreach ($chunk as $relatedProduct)
                            <div class="col-md-6 col-lg-3">
                                <div class="product">
                                    <a href="#" class="img-prod">
                                        <img class="img-fluid" src="{{ asset('storage/' . $relatedProduct->img) }}" alt="{{ $relatedProduct->nama_produk }}">
                                        <div class="overlay"></div>
                                    </a>
                                    <div class="text py-3 pb-4 px-3 text-center">
                                        <h3><a href="#">{{ $relatedProduct->nama_produk }}</a></h3>
                                        <div class="d-flex">
                                            <div class="pricing">
                                                <p class="price"><span class="mr-2 price">Rp.{{ $relatedProduct->harga }}</span></p>
                                            </div>
                                        </div>
                                        <div class="bottom-area d-flex px-3">
                                            <div class="m-auto d-flex">
                                                <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                                    <span><i class="ion-ios-menu"></i></span>
                                                </a>
                                                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                    <span><i class="ion-ios-cart"></i></span>
                                                </a>
                                                <a href="#" class="heart d-flex justify-content-center align-items-center">
                                                    <span><i class="ion-ios-heart"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- <-end produk terkait-> -->


    <footer>
        @include('layouts.footer')
    </footer>

    @vite('resources/js/app.js')
    <script>
        $(document).ready(function() {
            $('#related-product-carousel').carousel();
        });
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


</body>

</html>
