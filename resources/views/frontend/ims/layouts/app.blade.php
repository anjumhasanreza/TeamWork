<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">


    <!-- Mirrored from themesbrand.com/velzon/html/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Nov 2023 21:38:49 GMT -->

    <head>

        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />



        @include('frontend.ims.components.header_link')



    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <!-- Header  -->
            @include('frontend.ims.layouts.header')


            <!-- removeNotificationModal -->

            @include('frontend.ims.components.remove_notifications')


            <!-- ========== App Menu ========== -->
            @include('frontend.ims.layouts.menu')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            @yield('content')

            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        @include('frontend.ims.components.theam_setting')






        @include('frontend.ws.components.javaScript')

    </body>


    <!-- Mirrored from themesbrand.com/velzon/html/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Nov 2023 21:38:50 GMT -->

</html>