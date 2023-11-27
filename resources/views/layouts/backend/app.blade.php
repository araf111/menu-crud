
@include('layouts.backend.header')
@include('layouts.backend.top-nav')

<div class="main-container ace-save-state" id="main-container">
    @include('layouts.backend.sidebar')
    <div class="main-content">
        @yield('content')
    </div><!-- /.main-content -->
    @include('layouts.backend.footer-content')
</div><!-- /.main-container -->
@include('layouts.backend.footer')