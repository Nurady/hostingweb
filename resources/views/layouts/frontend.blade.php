<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    @include('includes.style')
    @stack('after-style')
</head>
<body>
    <div class="container-xxl bg-white p-0">
        <div class="container-xxl position-relative p-0">
            @include('includes.nav')
            @include('includes.hero')           
        </div>

        @yield('content')
        @include('includes.footer') 

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

        <!-- Kode Tambahan -->
        <x-helpdesk/>
        <x-promo/>
    </div>

    @include('includes.script') 
    @stack('after-script')
</body>
</html>