<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
@include('layouts.head')
				
<body class="header-fixed">

    <div class="wrapper">
        <!--=== Header ===-->    

        @include('layouts.header')

        <!--=== End Header ===-->    


        <!--=== Content ===-->
        @yield('content')
        <!-- End Content Part -->

        <!--=== Footer ===-->

        @include('layouts.footer')
        <!--=== End Footer ===-->

</div><!--/wrapper-->

        <!-- Scripts -->           
        @include('layouts.scripts')
<!-- JS Global Compulsory -->           
</body>
</html> 
