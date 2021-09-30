<!DOCTYPE html>
<html lang="tr">
<head>

    @include('backend-layouts.header')
    @yield('css')
    @toastr_css
</head>

<body class="menubar-left menubar-unfold menubar-light theme-primary">
<!--============= start main area -->

<!-- APP NAVBAR ==========-->
@include('backend-layouts.navbar')
<!--========== END app navbar -->

<!-- APP ASIDE ==========-->
@include('backend-layouts.aside')
<!--========== END app aside -->

<!-- navbar search -->
@include('backend-layouts.search')
<!-- .navbar-search -->

<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
    <div class="wrap">
        <section class="app-content">
            @yield('content')
        </section><!-- #dash-content -->
    </div><!-- .wrap -->
    <!-- APP FOOTER -->
@include('backend-layouts.footer')
<!-- /#app-footer -->
</main>
<!--========== END app main -->



<!-- SIDE PANEL -->
@include('backend-layouts.panel')
<!-- /#side-panel -->
@jquery
@toastr_js
@toastr_render
@yield('js')
@include('backend-layouts.script')

</body>
</html>
