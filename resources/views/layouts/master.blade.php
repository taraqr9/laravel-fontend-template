<html lang="en">

<head>
    @include('partials.header')
</head>

<body>
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

        @include('partials.left_side_navbar')

        <!-- Layout container -->
        <div class="layout-page">
            @include('partials.search_bar_with_user')
            <!-- Content wrapper -->
            <div class="content-wrapper">
                @yield('content')
                @include('partials.footer')
            </div>
            <!-- Content wrapper -->

        </div>

    </div>
</div>
@include('partials.scripts')
</body>

</html>
