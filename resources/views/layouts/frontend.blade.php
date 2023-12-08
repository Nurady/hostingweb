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
        <div class="BottomButton_icon__Yjla4"></div>

        <div class="container-promo-img">
            <div id="promo-sign">
                <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/illustrations/promo-sign.webp" class="promo-sign entered litespeed-loaded" alt="promo-sign.webp">
            </div>
            <div class="container-promo"> 
                    <img class="imgpromo" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/illustrations/promo-text.webp" class="promo-text entered litespeed-loaded" alt="cek diskon hosting sekarang!">
                <img class="imgstoresection" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/illustrations/storesection.webp" class="promo-illustration entered litespeed-loaded" alt="cek promo hosting Indonesia terbaru">
            </div>
            <div id="close" onclick="hideAndShowDiv()" class="me-5 btn" style="margin-top: 80px; color: #CF3B21; font-weight: 800;">Close X</div>
        </div>
    </div>

    @include('includes.script') 
    @stack('after-script')
</body>
</html>