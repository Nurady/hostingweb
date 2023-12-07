@extends('layouts.frontend')

@section('title', '	Qwords.com: Cloud Web Hosting Indonesia Akses Cepat Aman')

@section('content')
    <!-- Cari Domain -->
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
                        <div class="col-md-8 mb-2">
                            <div class="form-group">
                                <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Cari Nama Domain Anda">
                            </div>
                        </div>
                        <div class="col-md-2 mb-2">
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
                            <div class="row mt-4 align-items-center">
                                <div class="col-lg-4 col-md-4 col-sm-6 text-center">
                                    <p class="fw-bold text-primary mb-1 text-white">.com</p>
                                    <h4 class="mb-0 text-white">Rp. 165.000</h4>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 text-center">
                                    <p class="fw-bold text-primary mb-1 text-white">.id</p>
                                    <h4 class="mb-0 text-white">Rp. 225.000</h4>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 text-center">
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

    {{-- Layanan utama --}}
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
                            <a class="btn btn-primary px-4 py-2" href="https://portal.qwords.com/orderv10/orderhosting?pid=528&billingcycle=annually">
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
                            <a class="btn btn-primary px-4 py-2" href="https://portal.qwords.com/orderv10/orderhosting?pid=392&billingcycle=&promocode=FRSTTMESGN">
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
                            <a class="btn btn-primary px-4 py-2" href="https://portal.qwords.com/orderv10/orderhosting?pid=596&billingcycle=annually">
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
                            <a class="btn btn-primary px-4 py-2" href="https://portal.qwords.com/orderv10/ordervps?pid=634&billingcycle=annually">
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

    {{-- Layanan Lain --}}
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
                            <a class="btn btn-primary px-4 py-2 mt-4 w-100" href="https://qwords.com/v2/secured-sockets-layer-certificate/?_gl=1%2A87kryz%2A_gcl_au%2AMTc1MjQyNTI4MC4xNzAxODQzODA3&_ga=2.2238128.1021700938.1701843808-1812367761.1701843808">
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
                            <a class="btn btn-primary px-4 py-2 mt-4 w-100" href="https://qwords.com/v2/dedicated-server/dedicated-box/?_gl=1*13zm0s9*_gcl_au*MTc1MjQyNTI4MC4xNzAxODQzODA3&_ga=2.6778802.1021700938.1701843808-1812367761.1701843808">
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
                            <a class="btn btn-primary px-4 py-2 mt-3 w-100" href="https://qwords.com/v2/dedicated-server/colocation-server/?_gl=1*13zm0s9*_gcl_au*MTc1MjQyNTI4MC4xNzAxODQzODA3&_ga=2.6778802.1021700938.1701843808-1812367761.1701843808">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Solusi --}}
    <div class="solution container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-3">
                    Solusi Paket Hosting Terbaik dari Kami
                </h1>
                <p class="mb-1">
                    Kami menawarkan solusi paket hosting terbaik untuk segala kebutuhan website dan sistem Anda. 
                    <br>
                    Mulai dari blog hingga website bisnis dan perusahaan.
                </p>
            </div>
            <div class="row mt-3">
                <div class="col-md-4 mb-3">
                    <a href="https://qwords.com/v2/hosting-dan-server-perusahaan/" style="text-decoration: none;">
                        <div class="card border-0 p-3">                            
                            <h3>Perusahaan</h3>
                            <p>
                                Wujudkan website perusahaan profesional dan berkelas dengan dukungan web hosting terbaik dan fitur keamanan ekstra
                            </p>                            
                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/company.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/company.webp">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="https://qwords.com/v2/hosting-dan-server-perusahaan/" style="text-decoration: none;">
                        <div class="card border-0 p-3">                            
                            <h3>UMKM dan Toko Online</h3>
                            <p>
								Memberikan hosting terbaik untuk mendukung kebutuhan website pemasaran barang/jasa secara online.
                            </p>                            
                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/umkm.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/umkm.webp">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="https://qwords.com/v2/hosting-dan-server-perusahaan/" style="text-decoration: none;">
                        <div class="card border-0 p-3">                            
                            <h3>Organisasi dan Komunitas</h3>
                            <p>
								Bikin website organisasi atau komunitas Anda dengan paket hosting unggulan yang ramah kantong.
                            </p>                            
                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/orgs.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/orgs.webp">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="https://qwords.com/v2/hosting-dan-server-perusahaan/" style="text-decoration: none;">
                        <div class="card border-0 p-3">                            
                            <h3>Sekolah</h3>
                            <p>
								Infrastruktur web hosting terbaik untuk menunjang kegiatan e-learning. Didukung platform MOODLE khusus pembelajaran daring.
                            </p>                            
                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/school.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/school.webp">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="https://qwords.com/v2/hosting-dan-server-perusahaan/" style="text-decoration: none;">
                        <div class="card border-0 p-3">                            
                            <h3>Developer</h3>
                            <p>
								Tersedia paket hosting Indonesia dengan spesifikasi khusus yang dev-friendly. Ekstra NodeJS dan Git Version Control.
                            </p>                            
                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/dev.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/dev.webp">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="https://qwords.com/v2/hosting-dan-server-perusahaan/" style="text-decoration: none;">
                        <div class="card border-0 p-3">                            
                            <h3>Blogger dan Personal</h3>
                            <p>
								TMemfasilitasi blogger dengan infrastruktur hosting Indonesia terbaik serta template website premium untuk tampil lebih profesional.
                            </p>                            
                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/blog.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/blog.webp">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Komitmen --}}
    <div class="commitment container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-3">
                    Komitmen Qwords
                </h1>
                <p class="mb-1">
                    Berbagai alasan mengapa pelanggan memilih sewa hosting di Qwords. 
                </p>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-md-4 mb-3">
                    <div class="card border-0 p-3">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/call.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/call.webp">                            
                        <h3 class="mt-3">Layanan 24/7</h3>
                        <p>
                            Tim Technical Support dan Customer Service Qwords siap membantu Anda selama 24 jam, 7 hari. Anda dapat menghubungi melalui Live chat, Call Center, dan Support Ticket.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 p-3">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/book.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/book.webp">                            
                        <h3 class="mt-3">Panduan Manual Lengkap</h3>
                        <p>
                            Qwords dilengkapi dengan halaman knowledge base berisi tutorial dan tips seputar pengelolaan website dan hosting. Dapat diakses dengan mudah dan solutif.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 p-3">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/router.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/router.webp">                            
                        <h3 class="mt-3">Up time 99.99%</h3>
                        <p>
                            Uptime Network & Server di atas 99. 99% dengan konfigurasi server yang tepat. Didukung manajemen jaringan dan multiple upstream tier 1 provider network serta multiple peering.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 p-3">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/guard.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/guard.webp">                            
                        <h3 class="mt-3">Jaminan keamanan</h3>
                        <p>
                            Keamanan menjadi fokus utama kami di Qwords. Tindakan pemantauan dan pencegahan yang berstandar & berkelanjutan telah menjadi perhatian utama kami.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 p-3">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/networkAlt.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/networkAlt.webp">                            
                        <h3 class="mt-3">Clustered DNS</h3>
                        <p>
                            DNS Server Cloud Hosting Qwords terhubung satu dengan yang lainnya. Hal ini membuat DNS Server akan selalu dapat di akses karena saling membackup antar server.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 p-3">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/diamond.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/diamond.webp">                            
                        <h3 class="mt-3">High Enterprise Server</h3>
                        <p>
                            Standar server Qwords adalah server kelas enterprise Dual Xeon Octa Core yang merupakan hardware kelas terbaik. Hardware ini biasa digunakan oleh perusahaan terkemuka.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 p-3">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/network.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/network.webp">                            
                        <h3 class="mt-3">Peering Network</h3>
                        <p>
                            Jaringan di Qwords terhubung langsung ke public peering seperti OpenIXP dan CDIX yang membuat latency atau waktu tunggu pengiriman data semakin kecil.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 p-3">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/router.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/router.webp">                            
                        <h3 class="mt-3">Tier 1 Network</h3>
                        <p>
                            Tier 1 Network merupakan jaringan dunia tanpa transit network, yang membuat jaringan lebih cepat serta jalur routing yang lebih pendek dan ketersediaan backup network.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Iklan --}}
    <div class="iklan container-xxl py-5">
        <div class="container">
            <div class="card p-5 border-0">
                <div class="row align-items-center">
                    <div class="col-md-4 mb-2">
                        <img class="w-100" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/illustrations/bw.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/illustrations/bw.webp">
                    </div>
                    <div class="col-md-8 mb-2">
                        <h3><span>Bikin website impian</span> dengan mudah disini hanya 1jutaan</h3>
                        <p>Bikin website impian include paket hosting Indonesia terbaik hanya 1 jutaan Jasa pembuatan website profesional untuk Perusahaan, Bisnis & UKM. Bikin Website Impian dengan mudah di sini, desain website elegan dan mudah dikelola</p>
                        <a href="https://bikin.website/" class="btn btn-primary">
                            Lihat Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Pelanggan Aktif --}}
    <div class="commitment container-xxl py-5">
        <div class="container px-lg-5">
            <div class="position-relative text-center mx-auto mb-3 pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h1>
                    Telah Dipercaya oleh 45.000+ Pelanggan Aktif
                </h1>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-md-2 col-sm-6 mb-2">
                    <img class="w-100" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Cimory.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Cimory.webp">
                </div>
                <div class="col-md-2 col-sm-6 mb-2">
                    <img class="w-100" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Forisa.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Forisa.webp">
                </div>
                <div class="col-md-2 col-sm-6 mb-2">
                    <img class="w-100" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Elsheskin.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Elsheskin.webp">
                </div>
                <div class="col-md-2 col-sm-6 mb-2">
                    <img class="w-100" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Icon.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Icon.webp">
                </div>
                <div class="col-md-2 col-sm-6 mb-2">
                    <img class="w-100" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Horison.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Horison.webp">
                </div>
                <div class="col-md-2 col-sm-6 mb-2">
                    <img class="w-100" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/MD.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/MD.webp">
                </div>
            </div>
            <div class="mt-4 text-center">
                <a class="other" href="#">Dan Masih Banyak Yang Lainnya</a>
                <span>
                    <img style="height: 20px !important; width: 20px !important;" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Right.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Right.webp">
                </span>
            </div>
        </div>
    </div>

    {{-- Partner --}}
    <div class="commitment container-xxl py-5">
        <div class="container px-lg-5">
            <div class="position-relative text-center mx-auto mb-3 pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h1>
                    Partner Kami
                </h1>
            </div>
            <div class="row wow fadeInUp justify-content-center">
                <div class="col-md-2 mb-2">
                    <img class="w-100" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Google.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Google.webp">
                </div>
                <div class="col-md-2 mb-2">
                    <img class="w-100" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Cpanel.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Cpanel.webp">
                </div>
                <div class="col-md-2 mb-2">
                    <img class="w-100" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Idea.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Idea.webp">
                </div>
                <div class="col-md-2 mb-2">
                    <img class="w-100" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Archi.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Archi.webp">
                </div>
                <div class="col-md-2 mb-2">
                    <img class="w-100" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/dotid.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/dotid.webp">
                </div>
            </div>
            <div class="mt-4 text-center">
                <a class="other" href="https://qwords.com/v2/about-qwordscom/partner/">Lihat Semua Partner</a>
                <span>
                    <img style="height: 20px !important; width: 20px !important;" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Right.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Right.webp">
                </span>
            </div>
        </div>
    </div>

    {{-- Garansi --}}
    <div class="mt-5 quarantee p-5">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img class="w-100" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/illustrations/guarantee.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/illustrations/guarantee.webp">
                </div>
                <div class="col-md-6">
                    <h3>Garansi 30 Hari <span>Uang Kembali</span></h3>
                    <p>Untuk menjaga kepuasan pelanggan, kami memberikan garansi uang kembali yang berlaku hingga 30 hari setelah hosting aktif.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Testimonial --}}
    <div class="testimonial container-xxl py-5 mt-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <h1 class="mb-3">
                            Apa Kata Mereka?
                        </h1>
                        <p class="mb-1 mx-auto">
                            Apa kata mereka yang sudah menggunakan layanan web hosting Indonesia dari Qwords? Simak pengalaman mereka yang telah membuktikan sendiri fitur dari layanan kami. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column-reverse flex-md-row flex-xl-row flex-xxl-row align-items-center mb-3">
                <div class="p-2 w-50 quote">                    
                    <div class="header-quote">
                        <h5>
                            Semoga Qwords dapat terus bertahan, sehingga kami dan masyarakat Indonesia bisa mendapatkan layanan yang terbaik dari Qwords.
                        </h5>
                    </div>
                    <div class="quote-details fst-italic">
                        Kami, ID Cert, merupakan sebuah perusahaan yang bergerak dalam bidang penyedia jasa informasi keamanan di Indonesia. Oleh karena itu, kami membutuhkan Qwords untuk mendukung kebutuhan kami terhadap server dan hosting yang selalu up selama 24 jam.
                    </div>
                    <div class="author-name ms-5 pt-3 pb-2">
                        <h6 class="d-inline me-3">Budi Raharjo</h6>
                        <span class="small text-muted">Founder ID Cert</span>
                    </div>
                    <div class="ms-5">
                        <a class="other" href="https://www.youtube.com/watch?v=q2bJogin3eE&feature=youtu.be">
                            Lihat Video Selengkapnya
                        </a>
                        <span>
                            <img style="height: 20px !important; width: 20px !important;" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Right.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Right.webp">
                        </span>
                    </div>                    
                </div>
                <div class="p-2 w-50 quote-profil">
                    <img class="w-100" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/testi1.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/testi1.webp">
                </div>
            </div>
            <div class="d-flex flex-column flex-md-row flex-xl-row flex-xxl-row align-items-center mb-3">
                <div class="p-2 w-50 quote-profil">
                    <img class="w-100" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/testi2.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/testi2.webp">
                </div>
                <div class="p-2 w-50 quote">                    
                    <div class="header-quote">
                        <h5>
                            Pelayanan Qwords sangat cepat dan responsif, sehingga tidak butuh waktu lama untuk membantu website kami kembali normal. Terbaik pokoknya, mah!.
                        </h5>
                    </div>
                    <div class="quote-details fst-italic">
                        Sebagai media penyedia kabar seputar kota Bandung, Info BDG menggunakan website sebagai rumah informasi. Website kami yang sempat down kini menunjukkan traffic yang tinggi setelah menggunakan dukungan dari Qwords.
                    </div>
                    <div class="author-name ms-5 pt-3 pb-2">
                        <h6 class="d-inline me-3">Kuns Kurniawan</h6>
                        <span class="small text-muted"> PR Event Info BDG</span>
                    </div>
                    <div class="ms-5">
                        <a class="other" href="https://www.youtube.com/watch?v=f15zt4C2e4A&feature=youtu.be">
                            Lihat Video Selengkapnya
                        </a>
                        <span>
                            <img style="height: 20px !important; width: 20px !important;" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Right.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Right.webp">
                        </span>
                    </div>                    
                </div>
            </div>
            <div class="d-flex flex-column-reverse flex-md-row flex-xl-row flex-xxl-row align-items-center mb-3">
                <div class="p-2 w-50 quote">                    
                    <div class="header-quote">
                        <h5>
                            Hingga saat ini pula, kami tidak pernah menemukan masalah yang berarti dari layanan yang diberikan Qwords. Layanan Customer Service yang sangat baik, membuat kami tidak ingin berpindah dari Qwords.
                        </h5>
                    </div>
                    <div class="quote-details fst-italic">
                        Penjualan Rumah Kopi Temanggung 90% dilakukan secara online, salah satunya menggunakan website. Semenjak tahun 2015 hingga saat ini, kami menggunakan hosting dan domain dari Qwords.
                    </div>
                    <div class="author-name ms-5 pt-3 pb-2">
                        <h6 class="d-inline me-3">Denden Sofiudin</h6>
                        <span class="small text-muted">Owner Rumah Kopi temanggung</span>
                    </div>
                    <div class="ms-5">
                        <a class="other" href="https://www.youtube.com/watch?v=ftJMF63RznM&feature=youtu.be">
                            Lihat Video Selengkapnya
                        </a>
                        <span>
                            <img style="height: 20px !important; width: 20px !important;" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Right.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Right.webp">
                        </span>
                    </div>                    
                </div>
                <div class="p-2 w-50 quote-profil">
                    <img class="w-100" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/testi3.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/testi3.webp">
                </div>
            </div>
        </div>
    </div>

    {{-- Liputan --}}
    <div class="commitment container-xxl py-5">
        <div class="container px-lg-5">
            <div class="position-relative text-center mx-auto mb-3 pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h1>
                    Diliput oleh
                </h1>
            </div>
            <div class="row wow fadeInUp justify-content-center">
                <div class="col-md-3 mb-2">
                    <img class="w-100" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/liputan/Detikcom.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/liputan/Detikcom.webp">
                </div>
                <div class="col-md-3 mb-2">
                    <img class="w-100" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/liputan/Liputan6.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/liputan/Liputan6.webp">
                </div>
                <div class="col-md-3 mb-2">
                    <img class="w-100" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/liputan/TribunJogja.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/liputan/TribunJogja.webp">
                </div>
                <div class="col-md-3 mb-2">
                    <img class="w-100" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/liputan/antara.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/liputan/antara.webp">
                </div>
                <div class="col-md-3 mb-2">
                    <img class="w-100" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/liputan/RM.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/liputan/RM.webp">
                </div>
                <div class="col-md-3 mb-2">
                    <img class="w-100" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/liputan/KoranBernas.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/liputan/KoranBernas.webp">
                </div>
            </div>
            <div class="mt-4 text-center">
                <a class="other" href="https://qwords.com/v2/media-publication/?_gl=1*ymnyck*_gcl_au*MTc1MjQyNTI4MC4xNzAxODQzODA3&_ga=2.213107476.1021700938.1701843808-1812367761.1701843808">Lihat Semua Liputan</a>
                <span>
                    <img style="height: 20px !important; width: 20px !important;" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Right.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Right.webp">
                </span>
            </div>
        </div>
    </div>

    {{-- metode payment --}}
    <div class="payment container-xxl py-5">
        <div class="container px-lg-5">
            <div class="position-relative text-center mx-auto mb-3 pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h1>
                    Pilih metode e-payment otomatis. Layanan Domain, Hosting, VPS langsung aktif tanpa perlu konfirmasi bayar.
                </h1>
            </div>
            <div class="row wow fadeInUp justify-content-center">
                <div class="col mb-2">
                    <img class="w-100" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/all-payment.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/all-payment.webp">
                </div>
            </div>
            <div class="text-center">
                <a class="other" href="https://qwords.com/v2/order-payment/">Lihat Panduan Pembayaran</a>
                <span>
                    <img style="height: 20px !important; width: 20px !important;" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Right.webp" alt="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Right.webp">
                </span>
            </div>
        </div>
    </div>

    {{-- Faqs --}}
    <div class="faqs container mt-5 py-5">
        <h1 class="text-center mb-5"> Pertanyaan seputar  <span>Layanan Web Hosting</span> <br> Qwords</h1>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button p-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <p class="mb-0">Apa Itu Web Hosting ?</p>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <strong>Hosting adalah tempat penyimpanan file dan data website seperti teks, video dan gambar website. File dan data tersebut di simpan di dalam server yang terkoneksi dengan internet sehingga data tersebut dapat diakses oleh siapa saja, kapan saja dan di mana saja.

                        Penjelasan lebih lanjut dapat Anda baca pada artikel ini : https://qwords.com/blog/apa-itu-hosting/.
                    </div>
                </div>
            </div>
            <div class="accordion-item mt-4">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button p-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <p class="mb-0">
                            Ada Berapa Jenis Hosting di Qwords
                        </p>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <strong>Hosting adalah tempat penyimpanan file dan data website seperti teks, video dan gambar website. File dan data tersebut di simpan di dalam server yang terkoneksi dengan internet sehingga data tersebut dapat diakses oleh siapa saja, kapan saja dan di mana saja.

                        Penjelasan lebih lanjut dapat Anda baca pada artikel ini : https://qwords.com/blog/apa-itu-hosting/.
                    </div>
                </div>
            </div>
            <div class="accordion-item mt-4">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed p-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <p class="mb-0">Apa Kelebihan Cloud Hosting Qwords</p>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <strong>Hosting adalah tempat penyimpanan file dan data website seperti teks, video dan gambar website. File dan data tersebut di simpan di dalam server yang terkoneksi dengan internet sehingga data tersebut dapat diakses oleh siapa saja, kapan saja dan di mana saja.

                        Penjelasan lebih lanjut dapat Anda baca pada artikel ini : https://qwords.com/blog/apa-itu-hosting/.
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- helpdesk --}}
    <div class="helpdesk container-fluid mt-5 py-5">
        <h1 class="text-center"> Butuh  <span>Bantuan?</span> </h1>
        <p class="text-center">Kami siap membantu anda 24 Jam</p>
        <div class="d-flex flex-column-reverse flex-md-row flex-xl-row flex-xxl-row align-items-center">
            <div class="p-1 flex-fill">
                <a href="tel:+628041808888">	
					<div class="contact-col d-flex justify-content-center mb-3">
                        <svg class="img-hover me-1" xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
						<img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/phoneAlt.svg" alt="phone.webp" class="me-2 img-normal" width="30px" height="30px">
						<p class="mb-0 h6home">0804-1-808-888</p>
					</div>
				</a>
            </div>
            <div class="p-1 flex-fill">
                <a href="tel:02139708800">	
					<div class="contact-col d-flex justify-content-center mb-3">
                        <svg class="img-hover me-1" xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
						<img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/phoneAlt.svg" alt="phone.webp" class="me-2 img-normal" width="30px" height="30px">
						<p class="mb-0 h6home">021 39708800</p>
					</div>
				</a>
            </div>
            <div class="p-1 flex-fill">
                <a href="https://api.whatsapp.com/send?phone=62817437111">	
					<div class="contact-col d-flex justify-content-center mb-3">
                        <svg class="img-hover me-1" xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 448 512"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
						<img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/waAlt.svg" alt="wa.webp" class="me-2 img-normal" width="30px" height="30px">
						<p class="mb-0 h6home">+6281 7437 111 ( WhatsApp only )</p>
					</div>
				</a>
            </div>
            <div class="p-1 flex-fill">
                <a href="mailto:info@qwords.com">	
					<div class="contact-col d-flex justify-content-center mb-3">
                        <svg class="img-hover me-1" xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 512 512"><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg>
						<img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/emailAlt.svg" alt="email.webp" class="me-2 img-normal" width="30px" height="30px">
						<p class="mb-0 h6home">info@qwords.com</p>
					</div>
				</a>
            </div>
        </div>
    </div>

    <!-- Team Member -->
    <div class="container-xxl py-5 mt-3">
        <div class="container px-lg-5">
            <div class="position-relative text-center mx-auto mb-2 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Our Team Members</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                        <div class="text-center p-4">
                            <img class="img-fluid rounded-circle mb-4" src="{{ asset('frontend/img/team-1.jpg') }}" alt="">
                            <h5 class="fw-bold mb-1">Full Name</h5>
                            <small>Director</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                        <div class="text-center p-4">
                            <img class="img-fluid rounded-circle mb-4" src="{{ asset('frontend/img/team-2.jpg') }}" alt="">
                            <h5 class="fw-bold mb-1">Full Name</h5>
                            <small>System Analyst</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                        <div class="text-center p-4">
                            <img class="img-fluid rounded-circle mb-4" src="{{ asset('frontend/img/team-3.jpg') }}" alt="">
                            <h5 class="fw-bold mb-1">Full Name</h5>
                            <small>Full Stack Developer</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                        <div class="text-center p-4">
                            <img class="img-fluid rounded-circle mb-4" src="{{ asset('frontend/img/team-4.jpg') }}" alt="">
                            <h5 class="fw-bold mb-1">Full Name</h5>
                            <small>IT Infrastructure</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection