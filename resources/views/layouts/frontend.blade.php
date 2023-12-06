<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    @include('includes.style')

    <style>
        .promo-link {
            display: inline-block;
            animation: promo-color 4s cubic-bezier(.68,-.6,.32,1.6) infinite !important;
            color: #000 !important;
        }

        @keyframes promo-link {
            0% {
                opacity: 0;
                transform: translateX(0px)
            }

            50% {
                opacity: 1;
                transform: translateX(4px);
            }

            100% {
                opacity: 0;
                transform: translateX(0px)
            }
        }

        @keyframes promo-color {
            0% {
                color: #000 !important;
                opacity: 1;
                transform: translateX(0px);
            }

            50% {
                color: #ff6d0b !important;
                opacity: 1;
                transform: translateX(4px);
                text-shadow: 
                    0 0.125em 0 #ff6d0b,
                    0 -0.125em 0 #ff6d0b;
            }

            100% {
                color: #000 !important;
                opacity: 1;
                transform: translateX(0px);
                font-weight : bold !important;
            }
        }
    </style>
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
    </div>

    @include('includes.script') 
</body>

</html>