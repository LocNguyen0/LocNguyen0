<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/sales-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 May 2024 07:23:13 GMT -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title')</title>

@yield('style-libs')


@yield('styles')
</head>

<body class="crm_body_bg">


@include('admin.layouts.sidebar');


    <section class="main_content dashboard_part large_header_bg">

        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0">

                   @include('admin.layouts.header');
                   
                </div>
            </div>
        </div>

        @yield('content')
        
@include('admin.layouts.footer');
      
    </section>



  

    @yield('scripts-libs')

    @yield('scripts')
</body>

<!-- Mirrored from demo.dashboardpack.com/sales-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 May 2024 07:24:00 GMT -->

</html>
