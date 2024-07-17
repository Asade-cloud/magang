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



    <!-- Shop Start -->
    <div class="container-fluid" style="padding-top:50px">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-4">

                <!-- Color Start -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Kategori</span></h5>
                <div class="bg-light p-4 mb-30">
                    <form>
                        @foreach ($kategoris as $kategori)
                            <li class="dropdown-item">
                                <a href="{{ route('Produk', ['kategori_id' => $kategori->id]) }}"
                                    class="custom-control-a">{{ $kategori->nama_kategori }}</a>
                                @if ($kategori->subkategoris->isNotEmpty())
                                    <a class="dropdown-collapsed" data-bs-target="#forms-dropdown"
                                        data-bs-toggle="collapse" style="float: right">
                                        <i class="bi bi-chevron-down ms-auto"></i>
                                    </a>

                                    <ul id="forms-dropdown" class="dropdown-content collapse"
                                        data-bs-parent="#sidebar-nav">
                                        @foreach ($kategori->subkategoris as $subkategori)
                                            <li class="dropdowns"><a href="{{ route('Produk', ['kategoris_id' => $kategori->id, 'subkategori_id' => $subkategori->id]) }}"
                                                    class="dropdown-item">{{ $subkategori->nama_subkategori }}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </form>
                </div>

                <!-- Color End -->


            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-8">
                <div class="row pb-3">
                    @forelse ($produks as $produk)
                        <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                            <div class="product-item bg-light mb-4">
                                <div class="product-img position-relative overflow-hidden ">
                                    <img class="img-fluid " src="{{ asset('storage/' . $produk->img) }}"
                                        alt="{{ $produk->nama_produk }}" style="height: 250px" width="100%">

                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-truncate"
                                        href="{{ route('Produk_detail', $produk->id) }}">{{ $produk->nama_produk }}</a>
                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                        <h5>Rp.{{ $produk->harga }}</h5>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No products found.</p>
                    @endforelse



                    <div class="col-12">
                        <nav>

                            <ul class="pagination justify-content-center">
                                {{ $produks->links() }}


                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->



    <footer>
        @include('layouts.footer')
    </footer>

    @vite('resources/js/app.js')
    {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> --}}
</body>

</html>
