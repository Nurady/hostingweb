@extends('layouts.frontend')

@section('title', 'Qwords.com: Cloud Web Hosting Indonesia Akses Cepat Aman')

@section('content')
    <x-domain/>

    <x-service/>
    
    <x-other-service/>

    <x-solution/>

    <x-commitment/>
    
    <x-iklan/>

    <x-pelanggan/>

    <x-garansi/>

    <x-testimonial/>

    <x-liputan/>

    <x-payment/>
   
    <x-faqs/>
   
    <x-bantuan/>

    <x-member/>
@endsection

@push('after-script')
    <script>
        function hideAndShowDiv() {
            document.querySelector(".container-promo-img").style.display = 'none';

            setTimeout(showHide, 5000);

            function showHide() {
                document.querySelector(".container-promo-img").style.display = "block";
            }
        }
    </script>

    <script src="{{ asset('js/lazysizes.min.js') }}"></script>
@endpush