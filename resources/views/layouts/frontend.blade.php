<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    @include('includes.style')
    @stack('after-style')
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            @include('includes.nav')
            @include('includes.hero')           
        </div>
        <!-- Navbar & Hero End -->

        @yield('content')        

        <!-- Footer Start -->
        @include('includes.footer') 
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

        <div class="BottomButton_icon__Yjla4"></div>

        <div class="container-promo-img">
            {{-- <marquee behavior="scroll" direction="up"> --}}
                <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/illustrations/promo-sign.webp" class="promo-sign entered litespeed-loaded" alt="promo-sign.webp">
            {{-- </marquee>  --}}
            <div class="container-promo"> 
                    <img class="imgpromo" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/illustrations/promo-text.webp" class="promo-text entered litespeed-loaded" alt="cek diskon hosting sekarang!">
                <img class="imgstoresection" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/illustrations/storesection.webp" class="promo-illustration entered litespeed-loaded" alt="cek promo hosting Indonesia terbaru">
            </div>
        </div>
    </div>

    @include('includes.script') 
    @stack('after-script')
</body>

</html>