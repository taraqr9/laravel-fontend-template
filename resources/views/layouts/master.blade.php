<html lang="en">

<head>
    @include('partials.header')
</head>

<body>
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

        @include('partials.left_side_navbar')

        @yield('content')

        @include('partials.footer')

    </div>
</div>
@include('partials.scripts')
</body>

</html>
