<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <link rel="icon" type="image/png" href="images/ACA_LOGO.png">
        @include('home/partials/css')
    </head>

    <body>

        <!-- Spinner Start -->
        
        <!-- Spinner End -->
        @include('home/partials/spinner')
        <!-- Topbar Start -->
        @include('home/partials/topbar')
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        @include('home/partials/navbar')
        <!-- Navbar & Hero End -->

        <!-- Modal Search Start -->
        @include('home/partials/search')
        <!-- Modal Search End -->


        @yield('content')
        @livewireScripts
        


        <!-- Footer Start -->
        @include('home/partials/footer')
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        @include('home/partials/copyright')
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        @include('home/partials/script')
        

        <!-- Template Javascript -->
        <script src="home/js/main.js"></script>
    </body>
</html>