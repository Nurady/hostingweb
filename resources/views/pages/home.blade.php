@extends('layouts.frontend')

@section('title', '	Qwords.com: Cloud Web Hosting Indonesia Akses Cepat Aman')

@section('content')
    <!-- Domain -->
    <div class="container-xxl domain mb-5 pt-5 pb-5" style="margin-top: 90px;">
        <div class="container px-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title position-relative text-center mx-auto mb-4 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h1 class="mb-3 text-white">
                            Cari Nama Domainmu
                        </h1>
                        <p class="mb-1 text-white font-weight-bold">
                            Nama Domain digunakan untuk mempermudah pengunjung menuju ke situs Anda. Pilih nama domain yang paling mencerminkan bisnis, produk, atau layanan Anda.
                        </p>
                    </div>
                    <div class="row text-center search-domain">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Cari Nama Domain Anda">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select class="form-select" aria-label="Default select example">
                                    <option value="#">.id</option>
                                    <option value="#">.com</option>
                                    <option value="#">.org</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                    <div class="row g-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="col-md-10 text-center">
                            <div class="row mt-4">
                                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                                    <p class="fw-bold text-primary mb-1 text-white">.com</p>
                                    <h4 class="mb-0 text-white">Rp. 165.000</h4>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                                    <p class="fw-bold text-primary mb-1 text-white">.id</p>
                                    <h4 class="mb-0 text-white">Rp. 225.000</h4>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                                    <p class="fw-bold text-primary mb-1 text-white">.info</p>
                                    <h4 class="mb-0 text-white">Rp. 225.000</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Domain End -->

    <!-- About Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="section-title position-relative mb-4 pb-4">
                        <h1 class="mb-2">Welcome to GreenHost</h1>
                    </div>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row g-3">
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="bg-light rounded text-center p-4">
                                <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                <p class="mb-0">Experts</p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="bg-light rounded text-center p-4">
                                <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                <p class="mb-0">Clients</p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="bg-light rounded text-center p-4">
                                <i class="fa fa-check fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                <p class="mb-0">Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="{{ asset('frontend/img/about.png') }}">
                </div>
            </div>
        </div>
    </div> --}}
    <!-- About End -->

    <div class="service container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-3">
                    Cloud Hosting Indonesia <span>Diskon Hingga 50%</span>
                </h1>
                <p class="mb-1">Layanan cloud hosting indonesia terbaik dengan teknologi andal untuk website anda.</p>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="position-relative shadow rounded border-top border-5">
                        <div class="text-center border-bottom p-4 pt-5">
                            <p class="mb-0">Value Cloud Hosting</p>
                            <h4 class="fw-bold">VCH1</h4>
                        </div>
                        <div class="text-center border-bottom p-4">
                            <p class="text-muted mb-1"><del>Rp 24.500</del></p>
                            <h3 class="mb-3">
                                Rp. 14.500
                            </h3>
                            <a class="btn btn-primary px-4 py-2" href="#">
                                Pesan Sekarang
                            </a>
                        </div>
                        <div class="p-4">
                            <div class="row mb-3 justify-content-between">
                                <div class="col-md-2">
                                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp" style="vertical-align: middle !important;">
                                </div>
                                <div class="col-md-9 align-middle">
                                    Disk <br> <span style="font-weight: bold !important;">3 GB</span>
                                </div>
                            </div>
                            <div class="row mb-3 justify-content-between">
                                <div class="col-md-2">
                                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp" style="vertical-align: middle !important;">
                                </div>
                                <div class="col-md-9 align-middle">
                                    Unlimited <br> <span style="font-weight: bold !important;">Bandwith</span>
                                </div>
                            </div>
                            <div class="row mb-3 justify-content-between">
                                <div class="col-md-2">
                                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp" style="vertical-align: middle !important;">
                                </div>
                                <div class="col-md-9 align-middle">
                                    Core CPU <br> <span style="font-weight: bold !important;">0.5 Core</span>
                                </div>
                            </div>
                            <div class="row mb-3 justify-content-between">
                                <div class="col-md-2">
                                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp" style="vertical-align: middle !important;">
                                </div>
                                <div class="col-md-9 align-middle">
                                    Addon / parked domain <br> <span style="font-weight: bold !important;">No</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="position-relative shadow rounded border-top border-5">
                        <div class="text-center border-bottom p-4 pt-5">
                            <p class="mb-0">Unlimited Hosting</p>
                            <h4 class="fw-bold">Signature</h4>
                        </div>
                        <div class="text-center border-bottom p-4">
                            <p class="text-muted mb-1"><del>Rp 109.000</del></p>
                            <h3 class="mb-3">
                                Rp. 89.900
                            </h3>
                            <a class="btn btn-primary px-4 py-2" href="#">
                                Pesan Sekarang
                            </a>
                        </div>
                        <div class="p-4">
                            <div class="row mb-3 justify-content-between">
                                <div class="col-md-2">
                                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp" style="vertical-align: middle !important;">
                                </div>
                                <div class="col-md-9 align-middle">
                                    Disk <br> <span style="font-weight: bold !important;">Unlimited</span>
                                </div>
                            </div>
                            <div class="row mb-3 justify-content-between">
                                <div class="col-md-2">
                                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp" style="vertical-align: middle !important;">
                                </div>
                                <div class="col-md-9 align-middle">
                                    Unlimited <br> <span style="font-weight: bold !important;">Bandwith</span>
                                </div>
                            </div>
                            <div class="row mb-3 justify-content-between">
                                <div class="col-md-2">
                                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp" style="vertical-align: middle !important;">
                                </div>
                                <div class="col-md-9 align-middle">
                                    Core CPU <br> <span style="font-weight: bold !important;">1 Core</span>
                                </div>
                            </div>
                            <div class="row mb-3 justify-content-between">
                                <div class="col-md-2">
                                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp" style="vertical-align: middle !important;">
                                </div>
                                <div class="col-md-9 align-middle">
                                    Addon / parked domain <br> <span style="font-weight: bold !important;">5 / 5</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="position-relative shadow rounded border-top border-5">
                        <div class="text-center border-bottom p-4 pt-5">
                            <p class="mb-0">High Performance</p>
                            <h4 class="fw-bold">HPCH Bisnis 1</h4>
                        </div>
                        <div class="text-center border-bottom p-4">
                            <p class="text-muted mb-1"><del>Rp 90.000</del></p>
                            <h3 class="mb-3">
                                Rp. 79.000
                            </h3>
                            <a class="btn btn-primary px-4 py-2" href="#">
                                Pesan Sekarang
                            </a>
                        </div>
                        <div class="p-4">
                            <div class="row mb-3 justify-content-between">
                                <div class="col-md-2">
                                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp" style="vertical-align: middle !important;">
                                </div>
                                <div class="col-md-9 align-middle">
                                    Disk <br> <span style="font-weight: bold !important;">3 GB</span>
                                </div>
                            </div>
                            <div class="row mb-3 justify-content-between">
                                <div class="col-md-2">
                                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp" style="vertical-align: middle !important;">
                                </div>
                                <div class="col-md-9 align-middle">
                                    Unlimited <br> <span style="font-weight: bold !important;">Bandwith</span>
                                </div>
                            </div>
                            <div class="row mb-3 justify-content-between">
                                <div class="col-md-2">
                                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp" style="vertical-align: middle !important;">
                                </div>
                                <div class="col-md-9 align-middle">
                                    Core CPU <br> <span style="font-weight: bold !important;">1 Core</span>
                                </div>
                            </div>
                            <div class="row mb-3 justify-content-between">
                                <div class="col-md-2">
                                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp" style="vertical-align: middle !important;">
                                </div>
                                <div class="col-md-9 align-middle">
                                    Addon / parked domain <br> <span style="font-weight: bold !important;">-</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="position-relative shadow rounded border-top border-5">
                        <div class="text-center border-bottom p-4 pt-5">
                            <p class="mb-0">Cloud VPS KVM SSD</p>
                            <h4 class="fw-bold">VPS SC1</h4>
                        </div>
                        <div class="text-center border-bottom p-4">
                            <p class="text-muted mb-1"><del>Rp 135.000</del></p>
                            <h3 class="mb-3">
                                Rp. 75.000
                            </h3>
                            <a class="btn btn-primary px-4 py-2" href="#">
                                Pesan Sekarang
                            </a>
                        </div>
                        <div class="p-4">
                            <div class="row mb-3 justify-content-between">
                                <div class="col-md-2">
                                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp" style="vertical-align: middle !important;">
                                </div>
                                <div class="col-md-9 align-middle">
                                    Disk <br> <span style="font-weight: bold !important;">25 GB</span>
                                </div>
                            </div>
                            <div class="row mb-3 justify-content-between">
                                <div class="col-md-2">
                                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp" style="vertical-align: middle !important;">
                                </div>
                                <div class="col-md-9 align-middle">
                                    Unlimited <br> <span style="font-weight: bold !important;">Bandwith</span>
                                </div>
                            </div>
                            <div class="row mb-3 justify-content-between">
                                <div class="col-md-2">
                                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp" style="vertical-align: middle !important;">
                                </div>
                                <div class="col-md-9 align-middle">
                                    Core CPU <br> <span style="font-weight: bold !important;">1 Core</span>
                                </div>
                            </div>
                            <div class="row mb-3 justify-content-between">
                                <div class="col-md-2">
                                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp" style="vertical-align: middle !important;">
                                </div>
                                <div class="col-md-9 align-middle">
                                    Addon / parked domain <br> <span style="font-weight: bold !important;">Unlimited</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-3">
                    Lihat Juga Layanan Kami Yang Lain
                </h1>
                <p class="mb-1">
                    Optimalkan performa website bisnis Anda dengan berbagai layanan berkualitas dari Qwords.
                </p>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="position-relative shadow rounded border-top border-5">
                        <div class="text-center border-bottom p-2">                        
                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/ssl.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/ssl.webp">                    
                            <h4 class="fw-bold mt-2">SSL</h4>
                        </div>
                        <div class="text-center border-bottom p-4">
                            <p class="text-muted mb-1">Jadikan website Anda lebih terpercaya dan disukai oleh search engine dengan menggunakan SSL Certificate.</p>
                            <p class="mb-3 mt-3">
                                Mulai Dari
                            </p>
                            <h3>
                                <span style="color: #ff6d0b; ">
                                    Rp. 112.000
                                </span>
                                <span class="text-muted" style="font-size: 20px !important;">
                                    /tahun
                                </span>
                            </h3>
                            <a class="btn btn-primary px-4 py-2 mt-4 w-100" href="#">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="position-relative shadow rounded border-top border-5">
                        <div class="text-center border-bottom p-2">                        
                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/dbstack.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/dbstack.webp">                    
                            <h4 class="fw-bold mt-2">Dedicated Server</h4>
                        </div>
                        <div class="text-center border-bottom p-4">
                            <p class="text-muted mb-1">Nikmati kelola Dedicated Server sendiri dengan akses remote dari seluruh dunia tanpa batas.</p>
                            <p class="mb-3 mt-3">
                                Mulai Dari
                            </p>
                            <h3>
                                <span style="color: #ff6d0b; ">
                                    Rp. 499.000
                                </span>
                                <span class="text-muted" style="font-size: 20px !important;">
                                    /tahun
                                </span>
                            </h3>
                            <a class="btn btn-primary px-4 py-2 mt-4 w-100" href="#">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="position-relative shadow rounded border-top border-5">
                        <div class="text-center border-bottom p-2">                        
                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp">                    
                            <h4 class="fw-bold mt-2">Colocation Server</h4>
                        </div>
                        <div class="text-center border-bottom p-3">
                            <p class="text-muted mb-1">Akses cepat dari seluruh dunia dengan fasilitas 24x7 full monitoring dengan cooling system terbaik serta fire extinguisher.</p>
                            <p class="mb-3 mt-3">
                                Mulai Dari
                            </p>
                            <h3>
                                <span style="color: #ff6d0b; ">
                                    Rp. 500.000
                                </span>
                                <span class="text-muted" style="font-size: 20px !important;">
                                    /tahun
                                </span>
                            </h3>
                            <a class="btn btn-primary px-4 py-2 mt-3 w-100" href="#">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-3">Lihat Juga Layanan Kami Yang Lain</h1>
                <p class="mb-1">Optimalkan performa website bisnis Anda dengan berbagai layanan berkualitas dari Qwords.</p>
            </div>
            <div class="row g-5 comparison position-relative">
                <div class="col-lg-6 pe-lg-5">
                    <div class="section-title position-relative mx-auto mb-4 pb-4">
                        <h3 class="fw-bold mb-0">Shared Server</h3>
                    </div>
                    <div class="row gy-3 gx-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <i class="fa fa-server fa-3x text-primary mb-3"></i>
                            <h5 class="fw-bold">99.99% Uptime</h5>
                            <p>Ipsum dolor diam stet stet kasd diam sea stet sed rebum dolor ipsum</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
                            <h5 class="fw-bold">100% Secured</h5>
                            <p>Ipsum dolor diam stet stet kasd diam sea stet sed rebum dolor ipsum</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-cog fa-3x text-primary mb-3"></i>
                            <h5 class="fw-bold">Control Panel</h5>
                            <p>Ipsum dolor diam stet stet kasd diam sea stet sed rebum dolor ipsum</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <i class="fa fa-headset fa-3x text-primary mb-3"></i>
                            <h5 class="fw-bold">24/7 Support</h5>
                            <p>Ipsum dolor diam stet stet kasd diam sea stet sed rebum dolor ipsum</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="section-title position-relative mx-auto mb-4 pb-4">
                        <h3 class="fw-bold mb-0">Dedicated Server</h3>
                    </div>
                    <div class="row gy-3 gx-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <i class="fa fa-server fa-3x text-secondary mb-3"></i>
                            <h5 class="fw-bold">99.99% Uptime</h5>
                            <p>Ipsum dolor diam stet stet kasd diam sea stet sed rebum dolor ipsum</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <i class="fa fa-shield-alt fa-3x text-secondary mb-3"></i>
                            <h5 class="fw-bold">100% Secured</h5>
                            <p>Ipsum dolor diam stet stet kasd diam sea stet sed rebum dolor ipsum</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-cog fa-3x text-secondary mb-3"></i>
                            <h5 class="fw-bold">Control Panel</h5>
                            <p>Ipsum dolor diam stet stet kasd diam sea stet sed rebum dolor ipsum</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <i class="fa fa-headset fa-3x text-secondary mb-3"></i>
                            <h5 class="fw-bold">24/7 Support</h5>
                            <p>Ipsum dolor diam stet stet kasd diam sea stet sed rebum dolor ipsum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container px-lg-5">
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 my-4">
                    <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                    <p class="mt-3">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('frontend/img/testimonial-1.jpg') }}" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 my-4">
                    <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                    <p class="mt-3">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('frontend/img/testimonial-2.jpg') }}" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 my-4">
                    <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                    <p class="mt-3">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('frontend/img/testimonial-3.jpg') }}" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 mt-4">
                    <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                    <p class="mt-3">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('frontend/img/testimonial-4.jpg') }}" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Our Team Members</h1>
                <p class="mb-1">Vero justo sed sed vero clita amet. Et justo vero sea diam elitr amet ipsum eos
                    ipsum clita duo sed. Sed vero sea diam erat vero elitr sit clita.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                        <div class="text-center p-4">
                            <img class="img-fluid rounded-circle mb-4" src="{{ asset('frontend/img/team-1.jpg') }}" alt="">
                            <h5 class="fw-bold mb-1">Full Name</h5>
                            <small>Designation</small>
                        </div>
                        <div class="d-flex justify-content-center bg-primary p-3">
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                        <div class="text-center p-4">
                            <img class="img-fluid rounded-circle mb-4" src="{{ asset('frontend/img/team-2.jpg') }}" alt="">
                            <h5 class="fw-bold mb-1">Full Name</h5>
                            <small>Designation</small>
                        </div>
                        <div class="d-flex justify-content-center bg-primary p-3">
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                        <div class="text-center p-4">
                            <img class="img-fluid rounded-circle mb-4" src="{{ asset('frontend/img/team-3.jpg') }}" alt="">
                            <h5 class="fw-bold mb-1">Full Name</h5>
                            <small>Designation</small>
                        </div>
                        <div class="d-flex justify-content-center bg-primary p-3">
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                        <div class="text-center p-4">
                            <img class="img-fluid rounded-circle mb-4" src="{{ asset('frontend/img/team-4.jpg') }}" alt="">
                            <h5 class="fw-bold mb-1">Full Name</h5>
                            <small>Designation</small>
                        </div>
                        <div class="d-flex justify-content-center bg-primary p-3">
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection