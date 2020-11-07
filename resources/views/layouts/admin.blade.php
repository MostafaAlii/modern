<!-- begin tpl_start -->
@include('dashboard.includes.tpl_start')
<!-- end tpl_start -->

    <!-- begin header -->
    @include('dashboard.includes.header')
    <!-- end header -->

    <!-- begin sidebar -->
    @include('dashboard.includes.sidebar')
    <!-- end sidebar -->

    @yield('content')

    <!-- begin footer html -->
    @include('dashboard.includes.footer')
    <!-- end footer -->

    {{-- @notify_js --}}
    {{-- @notify_render --}} 

<!-- begin tpl_end -->
@include('dashboard.includes.tpl_end')
<!-- end tpl_end -->