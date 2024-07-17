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

    <section class="bg-custom">
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image-holder">
                        <img src="https://www.mitravisualgroup.co.id/sitepad-data/uploads/2023/12/Screenshot-2023-12-24-at-22-53-38-GRAND-LAUNCHING-MITRA-VISUAL-GROUP-Google-Drive.png"
                            alt="single" class="img-fluid jarallax-img" style="padding:30px">
                    </div>
                </div>
            </div>
        </div>
    </section>





{{-- 
    <footer>
        @include('layouts.footer')
    </footer> --}}

    @vite('resources/js/app.js')
    {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> --}}
</body>

</html>
