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