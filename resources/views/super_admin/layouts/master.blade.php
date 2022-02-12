<!doctype html>

<html lang="en">

@include('super_admin.layouts.head')

<body>
    <div class="page">
        @include('super_admin.layouts.navbar')
        @include('super_admin.layouts.header')
        <div class="page-wrapper">
            @yield('content')
            @include('super_admin.layouts.footer')
        </div>
    </div>
    @include('super_admin.layouts.modal')
    @include('super_admin.layouts.scripts')
</body>

</html>
