<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laundry Services</title>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet"> 

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Libraries Stylesheet -->
    <link href="http://localhost/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="http://localhost/css/style.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ url('assets/css/heroic-features.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('style')
</head>
<body>

@include('front.layouts.nav')

<!-- Page Content -->
<div class="container">


    @yield('content')
    <!-- Page Features -->
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer Start -->
<div class="container-fluid bg-primary text-white mt-5 pt-5 px-sm-3 px-md-5">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <a href=""><h1 class="text-secondary mb-3"><span class="text-white">Laundry</span>Services</h1></a>
            <p>People can accomplish a smart and convenient, stressless solution for doing complete Laundry for their outfits, repairing their clothes, shoes, and lots more by leaving these necessary daily tasks to experts at affordable cost.</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white mb-4">Get In Touch</h4>
            <!-- <p>Dolor clita stet nonumy clita diam vero, et et ipsum diam labore</p> -->
            <p><i class="fa fa-map-marker mr-2"></i>Uttar Badda, Dhaka, Bangladesh</p>
            <p><i class="fa fa-phone mr-2"></i>+880 1515577844</p>
            <p><i class="fa fa-envelope mr-2"></i>dhuyefeli@gmail.com</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white mb-4">Quick Links</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Pricing</a>
                <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white mb-4">Newsletter</h4>
            <form action="">
                <div class="form-group">
                    <input type="text" class="form-control border-0" placeholder="Your Name" required="required" />
                </div>
                <div class="form-group">
                    <input type="email" class="form-control border-0" placeholder="Your Email" required="required" />
                </div>
                <div>
                    <button class="btn btn-lg btn-secondary btn-block border-0" type="submit">Submit Now</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

@yield('script')

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="http://localhost/lib/easing/easing.min.js"></script>
<script src="http://localhost/lib/waypoints/waypoints.min.js"></script>
<script src="http://localhost/lib/counterup/counterup.min.js"></script>
<script src="http://localhost/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="http://localhost/js/main.js"></script>
</body>

</html>
