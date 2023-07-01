
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAR SERVICE</title>
    <link rel="icon" href="{{ asset('frontend/img/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('frontend/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
</head>

<body>
    <!-- <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <img src="./img/logo.png" class="logo" alt="" id="home">
            <div class="p-1 " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white " aria-current="page" href="./index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="./login.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="./signup.html">SingUP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#ourservce">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#AbutUs">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#con us">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
     -->


    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <img src="{{ asset('frontend/img/logo.png') }}" class="logo" alt="#" id="Home">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ds" id="navbarNav">
                <ul class="navbar-nav" style="margin-left: 900px">
                    <li class="nav-item">
                        <a class="nav-link active text-white " aria-current="page" href="{{ route('home', ['id'=>1]) }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="#ourservce">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#AbutUs">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#con us">Contact Us</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link text-white" href="{{ route('register') }}">Register</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="section-1" class="py-6 bg-light-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <p class="text-black fw-bold text-uppercase fs-5"> We will Wash And service your car </p>
                    <h1 class="text-red text-uppercase fw-bold display-3 w-lg-75"> at your doorstep </h1>
                    <p class="w-lg-75"> We provide full-mobilized car washing and workshop services at the chosen time
                        and location,
                        with experienced technicians, high-quality tools, and competitive prices. </p>
                    <a class="btn rounded-4 bg-orange fw-bold text-white p-3 w-100 w-lg-75 my-4"
                        href="#">car service</a>
                    <p>Download our App now and enjoy our services</p>
                    <ul class="d-flex gap-4 py-4" type='none'>
                        <li>
                            <a class="lo" href="#"><img src="{{ asset('frontend/img/Google Play Black.svg') }}" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{ asset('frontend/img/App Store Black.svg') }}" alt=""></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('frontend/img/section-1-img.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="py-6" id="ourservce">
        <section class="container">
            <h2 class="fw-bold text-center fs-4 "> Our Featured <br> <span
                    class="display-4 text-orange fw-bold serv">Services</span></h2>
            <p class="text-center w-lg-75 mx-auto"> We provide full-mobilized car workshop services at the chosen time
                and
                location, with experienced technicians, high-quality tools, and competitive prices. </p>
            <div class="row align-items-center py-5 all">
                <div class="col-lg-3 d-flex flex-column">
                    <div>
                        <h4 class="text-center text-lg-end"> Diagnostics </h4>
                        <p class="text-black text-center text-lg-end"> We provide several checkup services providing
                            accurate
                            assessment for Cars using latest tools. </p>
                    </div>
                    <div>
                        <h4 class="text-center text-lg-end"> Periodic Maintenance </h4>
                        <p class="text-black text-center text-lg-end"> Periodic Maintenance is crucial for the overall
                            health of
                            your car, diagnosing and efficiently fixing the engine problems. </p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-center"><img
                        src="{{ asset('frontend/img/h1-car-services.png.png') }}" loading="lazy" alt="car" class="img-fluid"></div>
                <div class="col-lg-3 d-flex flex-column gap-5">
                    <div>
                        <h4 class="text-center text-lg-start"> Car Washing </h4>
                        <p class="text-black text-center text-lg-start"> Washing the car, which
                            allows the customer to choose the type of washing he wants according to the car’s need for
                            him
                            and his personal desire. </p>
                    </div>
                    <div>
                        <h4 class="text-center text-lg-start"> Coolant System </h4>
                        <p class="text-black text-center text-lg-start"> Periodical Inspection of the Coolant System and
                            checking the concentration of the coolant are critical steps to protect your engine from
                            overheating
                            or freezing. </p>
                    </div>
                </div>
            </div>
        </section>
        <div class="d-flex py-4 justify-content-center align-items-center gap-5 flex-wrap">

            <div class="d-flex flex-column gap-3 align-items-center justify-content-center"><img
                    src="{{ asset('frontend/img/icon/s-1.svg') }}" loading="lazy" alt="">
                <p class="text-black fw-bold text-center"> Oil Changes </p>
            </div>
            <div class="d-flex flex-column gap-3 align-items-center justify-content-center"><img
                    src="{{ asset('frontend/img/icon/car-wash.svg') }}" loading="lazy" class="wash" alt="">
                <p class="text-black fw-bold text-center">Car Washing</p>
            </div>
            <div class="d-flex flex-column gap-3 align-items-center justify-content-center"><img
                    src="{{ asset('frontend/img/icon/s-2.svg') }}" loading="lazy" alt="">
                <p class="text-black fw-bold text-center"> Batteries </p>
            </div>
            <div class="d-flex flex-column gap-3 align-items-center justify-content-center"><img
                    src="{{ asset('frontend/img/icon/s-3.svg') }}" loading="lazy" alt="">
                <p class="text-black fw-bold text-center"> Brakes Repair </p>
            </div>
            <div class="d-flex flex-column gap-3 align-items-center justify-content-center"><img
                    src="{{ asset('frontend/img/icon/s-4.svg') }}" loading="lazy" alt="">
                <p class="text-black fw-bold text-center"> Suspension </p>
            </div>
            <div class="d-flex flex-column gap-3 align-items-center justify-content-center"><img
                    src="{{ asset('frontend/img/icon/s-6.svg') }}" loading="lazy" alt="">
                <p class="text-black fw-bold text-center">DPF & Exhaust

                </p>
            </div>
            <div class="d-flex flex-column gap-3 align-items-center justify-content-center"><img
                    src="{{ asset('frontend/img/icon/s-7.svg') }}" loading="lazy" alt="">
                <p class="text-black fw-bold text-center"> Car Checks </p>
            </div>
            <div class="d-flex flex-column gap-3 align-items-center justify-content-center"><img
                    src="{{ asset('frontend/img/icon/s-8.svg') }}" loading="lazy" alt="">
                <p class="text-black fw-bold text-center"> Air Conditioning </p>
            </div>
        </div>

    </section>
    <section id="guide-section" class="bg-dark-gray h-screen d-flex justify-content-center align-items-center py-6">
        <div class="container">
            <div class="py-5">
                <h5 class="text-white mb-5 text-center w-md-50 mx-auto">
                    <span class="display-5 fw-bold"> Why Choose Car service </span>
                </h5>
                <div class="row">
                    <div class="col-lg-6 align-items-start d-flex gap-4 mb-4">
                        <span
                            class="bg-white rounded-pill d-flex justify-content-center align-items-center d-inline-block my-4 p-3"
                            style="height: 40px !important; width: 40px !important;">
                            <i class="fa-solid fa-briefcase text-brown"></i></span>
                        <div>
                            <h6 class="text-white fs-4 mt-3"> We Make it Easy </h6>
                            <p class="text-white"> We provide 24/7 booking services and our mechanics are available
                                during the day and in the evenings. Whether you're at home,
                                office, or anywhere, we will reach you at the scheduled time. </p>
                        </div>
                    </div>
                    <div class="col-lg-6 align-items-start d-flex gap-4 mb-4">
                        <span
                            class="bg-white rounded-pill d-flex justify-content-center align-items-center d-inline-block my-4 p-3"
                            style="height: 40px !important; width: 40px !important;">
                            <i class="fa-brands fa-servicestack text-brown"></i></span>
                        <div>
                            <h6 class="text-white fs-4 mt-3"> Genuine & Aftermarket Parts
                            </h6>
                            <p class="text-white"> We offer both genuine and aftermarket parts, that are manufactured
                                and provided to our customers upon request, following the industry specifications.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 align-items-start d-flex gap-4 mb-4">
                        <span
                            class="bg-white rounded-pill d-flex justify-content-center align-items-center d-inline-block my-4 p-3"
                            style="height: 40px !important; width: 40px !important;">
                            <i class="fa-solid fa-dollar-sign text-brown"></i></span>
                        <div>
                            <h6 class="text-white fs-4 mt-3"> High-quality

                            </h6>
                            <p class="text-white"> As we don't settle for less, we offer extensive training to our
                                technicians, utilizing high-quality services and tools to achieve customer satisfaction.
                                All you have to do is; book through our application.

                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 align-items-start d-flex gap-4 mb-4">
                        <span
                            class="bg-white rounded-pill d-flex justify-content-center align-items-center d-inline-block my-4 p-3"
                            style="height: 40px !important; width: 40px !important;">
                            <i class="fa-regular fa-circle-check text-brown"></i></span>
                        <div>
                            <h6 class="text-white fs-4 mt-3"> We Make it Easy </h6>
                            <p class="text-white"> We provide 24/7 booking services and our mechanics are available
                                during the day and in the evenings. Whether you're at home,
                                office, or anywhere, we will reach you at the scheduled time. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-5">
                <h2 class="text-white mb-5 text-center w-md-50 mx-auto">
                    <span class="fw-normal fs-4">Do it in just 3 simple steps</span><br>
                    <span class="display-5 fw-bold">Your Guide to Repairing Your Car.</span>
                </h2>
                <div class="row gap-5 gap-md-0 gap-lg-4 justify-content-center align-items-center">
                    <div class="col-md-4 col-lg-3 text-center d-flex flex-column gap-4">
                        <img src="{{ asset('frontend/img/icon/g-1.svg') }}" loading="lazy" alt="" class="d-inline-block mx-auto">
                        <h5 class="text-white text-center"> 1. Choose the services you want and find out their prices.
                        </h5>
                    </div>
                    <div class="col-md-4 col-lg-3 text-center d-flex flex-column gap-4">
                        <img src="{{ asset('frontend/img/icon/g-2.svg') }}" loading="lazy" alt="" class="d-inline-block mx-auto">
                        <h5 class="text-white text-center"> 2. Choose a convenient date and time. </h5>
                    </div>
                    <div class="col-md-4 col-lg-3 text-center d-flex flex-column gap-4">
                        <img src="{{ asset('frontend/img/icon/g-3.svg') }}" loading="lazy" alt="" class="d-inline-block mx-auto">
                        <h5 class="text-white text-center"> 3. Enjoy hassle-free car maintenance in record time, right
                            where you are. </h5>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <footer>
        <section class="bg-black pt-6 py-6 pb-5">
            <div class="container">
                <div class="row gap-5 gap-lg-0">
                    <div class="col-lg-3">
                        <p class="text-gray mb-4 text-white" id="AbutUs">
                            Car Service is a privately owned company that focuses on making car owners life easier to
                            maintain their cars in excellent conditions while having a convenient car service in terms
                            of time and location with the best price possible.
                        </p>
                        <ul class="social-links col-lg-4 d-flex gap-3" type='none'>
                            <li>
                                <a href="#" target="_blank"
                                    class=" justify-content-center align-items-center rounded-pill"><i
                                        class="fa-brands fa-facebook-f fa-lg text-white"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank"
                                    class=" justify-content-center align-items-center rounded-pill"><i
                                        class="fa-brands fa-instagram fa-lg text-white"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h5 class="fw-bold text-uppercase text-white mb-2 fs-6">QUICK LINKS
                        </h5>
                        <ul class="row teno" type="none">
                            <li class="mt-3">
                                <a href="#home" class="text-white active">Home</a>
                            </li>
                            <li class="mt-3">
                                <a href="#ourservce" class="text-white active">Our Services</a>
                            </li>
                            <li class="mt-3">
                                <a href="#AbutUs" class="text-white active">About Us</a>
                            </li>
                            <li class="mt-3">
                                <a href="#con us" class="text-white active">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h5 class="fw-bold text-uppercase text-white mb-2 fs-6 ">GET IN TOUCH
                        </h5>
                        <ul class="row teno" type="none" id="con us">
                            <li class="mt-3">
                                <i class="fa-solid fa-phone text-white "></i>
                                <span class="text-white align-items-center m-3">+01006257353</span>
                            </li>
                            <li class="mt-3">
                                <i class="fa-solid fa-location-arrow text-white "></i>
                                <span class="text-white align-items-center m-3">Car Service company</span>
                            </li>
                            <li class="mt-3">
                                <i class="fa-solid fa-envelopes-bulk text-white"></i>
                                <span class="text-white align-items-center m-3">khalifaamar300@gmail.com</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h5 class="fw-bold text-uppercase text-brown mb-2 fs-6 text-white"> We Accept </h5>
                        <div class="ad">
                            <div class="mt-3 d-flex gap-4">
                                <span><i class="fa-brands fa-cc-visa fa-2xl text-white"></i></span>
                            </div>
                            <div class="mt-3 d-flex gap-4">
                                <span><i class="fa-brands fa-cc-mastercard fa-2xl text-white"></i></span>
                            </div>
                        </div>
                        <h5 class="fw-bold text-uppercase text-brown mt-5 mb-2 fs-6 text-white"> Download App </h5>
                        <ul class="row" type="'none">
                            <li class="mt-3">
                                <a href="#"><img src="{{ asset('frontend/img/Google Play Black.svg') }}" alt=""></a>
                            </li>
                            <li class="mt-3">
                                <a href="#"><img src="{{ asset('frontend/img/App Store Black.svg') }}" alt=""></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>
        <section class="bg-dark py-4">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between gap-4 flex-wrap">
                    <span class="text-white">
                        Copyright © 2023 Car Service. All rights reserved
                    </span>
                    <a href="#" class="text-white df"> Terms and conditions</a>
                </div>
            </div>
        </section>
    </footer>

    <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/index.js') }}"></script>
</body>

</html>