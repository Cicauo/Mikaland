@extends('Layouts.Index')
@section('Pages')
{{-- <section class="page-header padding"> --}}
<section class="page-headers padding" style="background-image: url(img/fotoutama.jpg">
    <div class="container">
        <div class="page-content text-center">
            <h2>Rajawali Residence</h2>
            <p>Green living to make it better the future</p>
        </div>
    </div>
</section>
<!--/.page-header-->

<section class="about-section padding">
    <div class="container">
        <div class="row about-wrap d-flex align-items-center">
            <div class="col-md-6 xs-padding">
                <div class="about-content">
                    <h2>Hunian modern dengan <br>kualitas hidup lebih baik.</h2>
                    <p>cluster hunian yang dibangun secara exclusive dengan memperhatikan keseimbangan antara lingkungan yang asri,desain yang modern serta dapat memberikan kenyamanan tinggal bagi keluarga sehingga dapat menghadirkan sebuah harmoni bagi penghuni cluster.
                    </p>
                    <ul class="about-list">
                        <li><i class="fas fa-check"></i>25 Menit Ke Taman Mangrove</li>
                        <li><i class="fas fa-check"></i>30 Menit Ke Gerbang Tol Cikupa</li>
                        <li><i class="fas fa-check"></i>40 Menit Ke Pelabuhan Cituis</li>
                        <li><i class="fas fa-check"></i>60 Meni Ket Bandara Soekarno Hatta</li>
                        <li><i class="fas fa-check"></i>60 Menit Ke Pantai Indah Kapuk</li>
                    </ul>
                    <a href="#" class="default-btn">Download Browsur</a>
                </div>
            </div>
            <div class="col-md-6 xs-padding">
                <div class="about-projects">
                    <div class="about-projects"></div>
                    <div class="dots"></div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--/.about-section-->

{{-- Project-section  --}}
<section class="project-section project-2 bg-grey padding">
    <div class="dots"></div>
    <div class="container">
        <div class="section-heading text-center mb-40">
            <span>Rajawali Residence</span>
            <h2>Pilihan Tipe Rumah</h2>
        </div>
        <!--/.section-heading-->
        <div id="project-carousel-2" class="project-carousel-2 owl-carousel">
            <div class="project-item">
                <div class="project-thumb">
                    <img src="img/rajawali36.jpg" alt="">
                </div>
                <div class="project-content">
                    <h3><a href="rajawali-type-1">Rajawali Type 36</a></h3>
                    <p>Rajawali Type 36 adalah hunian 2 lantai dengan 3 kamar tidur dan 2 kamar mandi yang berlokasi di kawasan yang mengusung konsep green living. Dilengkapi dengan fasilitas taman bermain anak, jogging track,dan keamanan 24 jam, cluster ini cocok bagi keluarga muda atau pasangan yang baru menikah yang ingin memiliki hunian modern dengan budget terjangkau.</p>
                    <a href="rajawali-type-1" class="default-btn">Lihat Detail</a>
                </div>
            </div>

            <div class="project-item">
                {{-- <div class="project-thumb">
                    <img src="img/savana-home-secondary-project.jpg" alt="">
                </div>
                <div class="project-content">
                    <h3><a href="savana-type-33">Type 2</a></h3>
                    <p>Cluster Savana Park type 50/60 adalah hunian 2 lantai dengan 3 kamar tidur dan 2 kamar mandi yang berlokasi di kawasan yang mengusung konsep green living. Dilengkapi dengan fasilitas taman bermain anak, jogging track,dan keamanan 24 jam, cluster ini cocok bagi keluarga muda atau pasangan yang baru menikah yang ingin memiliki hunian modern dengan budget terjangkau.</p>
                    <a href="savana-type-33" class="default-btn">Lihat Detail</a>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!--/.project-section-->

{{-- Fasilitas-section  --}}
<section class="projects-section padding">
    <div class="container ">
        <div class="page-content  text-center">
            <h2 style="color:#263a4f;">Fasilitas</h2>
            <h3>Rajawali Residence</h3>
        </div>
        <br>
        <div class="row project-item">
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="project-item">
                    <img src="img/playgrounds.jpg" alt="projects">
                    <div class="overlay"></div>
                    <a href="" class="view-icon img-popup"> <i class="fas fa-expand"></i></a>
                    <div class="projects-content">
                        <a href="#" class="category">KidZone</a>
                        <h3><a href="" class="tittle">Taman bermain anak</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="project-item">
                    <img src="img/reflexology.jpg" alt="projects">
                    <div class="overlay"></div>
                    <a href="" class="view-icon img-popup"> <i class="fas fa-expand"></i></a>
                    <div class="projects-content">
                        <a href="#" class="category">Health</a>
                        <h3><a href="" class="tittle">Reflexology Path</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="project-item">
                    <img src="img/comunity.jpg" alt="projects">
                    <div class="overlay"></div>
                    <a href="" class="view-icon img-popup"> <i class="fas fa-expand"></i></a>
                    <div class="projects-content">
                        <a href="#" class="category">Connect</a>
                        <h3><a href="" class="tittle">Community Corner</a></h3>
                    </div>
                </div>
            </div>

        </div>
        <div class="row project-item">
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="project-item">
                    <img src="img/cctv.jpg" alt="projects">
                    <div class="overlay"></div>
                    <a href="" class="view-icon img-popup"> <i class="fas fa-expand"></i></a>
                    <div class="projects-content">
                        <a href="#" class="category">Security</a>
                        <h3><a href="" class="tittle">CCTV</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="project-item">
                    <img src="img/sport-field.jpg" alt="projects">
                    <div class="overlay"></div>
                    <a href="" class="view-icon img-popup"> <i class="fas fa-expand"></i></a>
                    <div class="projects-content">
                        <a href="#" class="category">Olahraga</a>
                        <h3><a href="" class="tittle">Sport Field</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="project-item">
                    <img src="img/mushola.jpg" alt="projects">
                    <div class="overlay"></div>
                    <a href="" class="view-icon img-popup"> <i class="fas fa-expand"></i></a>
                    <div class="projects-content">
                        <a href="#" class="category">Tempat Ibadah</a>
                        <h3><a href="" class="tittle">Mushola</a></h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--/.Fasilitas-section-->

<section class="service-section bg-grey bd-bottom padding">
    <div class="dots"></div>
    <div class="container">
        <div class="service-wrap row">
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-refinery"></i>
                    <div class="service-info">
                        <h3>Lokasi</h3>
                        <p>Terletak di kawasan Kab.Tangerang yang menjadi pertemuan 3 provinsi.</p>
                    </div>
                </div>
            </div>
            <!--item-1-->
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-industrial-robot"></i>
                    <div class="service-info">
                        <h3>Konsep</h3>
                        <p>Kawasan hunian bernuansa alami, nyaman, dan dilengkapi fasilitas lengkap.</p>
                    </div>
                </div>
            </div>
            <!--item-2-->
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-worker"></i>
                    <div class="service-info">
                        <h3>Developer</h3>
                        <p>Didukung oleh developer yang handal dan berpengalaman.</p>
                    </div>
                </div>
            </div>
            <!--item-3-->
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-assembly-line"></i>
                    <div class="service-info">
                        <h3>Landscape</h3>
                        <p>Jauh dari mobilitas kendaraan umum dan aman dari banjir.</p>
                    </div>
                </div>
            </div>
            <!--item-4-->
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-tank-truck"></i>
                    <div class="service-info">
                        <h3>Sunrise Property</h3>
                        <p>Lokasi strategis dekat pusat pemerintahan dan akses tol sedang dibangun.</p>
                    </div>
                </div>
            </div>
            <!--item-5-->
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-factory-1"></i>
                    <div class="service-info">
                        <h3>Spesifikasi</h3>
                        <p>Bangunan menggunakan material berkualitas dan konsep terupdate.</p>
                    </div>
                </div>
            </div>
            <!--item-6-->
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-factory-1"></i>
                    <div class="service-info">
                        <h3>Fasilitas</h3>
                        <p>Berbagai fasilitas cluster lengkap seperti Playground, Community Corner, dan Reflexology Path.</p>
                    </div>
                </div>
            </div>
            <!--item-7-->
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-factory-1"></i>
                    <div class="service-info">
                        <h3>Princing & Sales Program</h3>
                        <p>Kemudahan pembelian dengan harga property yang kompetitif.</p>
                    </div>
                </div>
            </div>
            <!--item-8-->
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-factory-1"></i>
                    <div class="service-info">
                        <h3>Investasi</h3>
                        <p>Potensi pertumbuhan nilai properti di masa depan tinggi karena terletak di daerah berkembang.</p>
                    </div>
                </div>
            </div>
            <!--item-9-->
        </div>
    </div>
</section>
<!--/.service-section-->

{{-- Promotion-Section  --}}
{{-- <section class="projects-section padding">
    <div class="container-fluid">
        <div class="section-heading text-center mb-40">
            <span>MikaLand</span>
            <h2>Promo Bulan Ini</h2>
        </div>
        <!--/.section-heading-->
        <div id="projects-carousel" class="projects-carousel owl-carousel">
            <div class="project-item">
                <img src="img/project-1.jpg" alt="projects">
                <div class="overlay"></div>
                <a href="img/project-1.jpg" class="view-icon img-popup" data-gall="myGallery"> <i class="fas fa-expand"></i></a>
                <div class="projects-content">
                    <h3><a href="project-single.html" class="tittle">Rectangular house near italy</a></h3>
                </div>
            </div>
            <div class="project-item">
                <img src="img/project-2.jpg" alt="projects">
                <div class="overlay"></div>
                <a href="img/project-2.jpg" class="view-icon img-popup" data-gall="myGallery"> <i class="fas fa-expand"></i></a>
                <div class="projects-content">
                    <h3><a href="project-single.html" class="tittle">Cathedral of brasilia brasilia</a></h3>
                </div>
            </div>
            <div class="project-item">
                <img src="img/project-3.jpg" alt="projects">
                <div class="overlay"></div>
                <a href="img/project-3.jpg" class="view-icon img-popup" data-gall="myGallery"> <i class="fas fa-expand"></i></a>
                <div class="projects-content">
                    <h3><a href="project-single.html" class="tittle">Harpa concert hall reykjavik</a></h3>
                </div>
            </div>
            <div class="project-item">
                <img src="img/project-4.jpg" alt="projects">
                <div class="overlay"></div>
                <a href="img/project-4.jpg" class="view-icon img-popup" data-gall="myGallery"> <i class="fas fa-expand"></i></a>
                <div class="projects-content">
                    <h3><a href="project-single.html" class="tittle">Milwauke museum wisconsin</a></h3>
                </div>
            </div>
            <div class="project-item">
                <img src="img/project-5.jpg" alt="projects">
                <div class="overlay"></div>
                <a href="img/project-5.jpg" class="view-icon img-popup" data-gall="myGallery"> <i class="fas fa-expand"></i></a>
                <div class="projects-content">
                    <h3><a href="project-single.html" class="tittle">The dancing house prague</a></h3>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--/.Promotion-section-->

{{-- /.cta-section --}}
<section class="cta-section padding">
    <div class="container">
        <div class="cta-content text-center">
            <h2>Dapatkan harga terbaik <br>dan layanan memuaskan</h2>
            <p>Jangan lewatkan kesempatan investasi properti yang <br> menguntungkan di daerah yang sedang berkembang.</p>
            <a href="#" class="default-btn">Hubungi Kami</a>
        </div>
    </div>
</section>
<!--/.cta-section-->

<div class="sponsor-section bg-grey">
    <div class="dots"></div>
    <div class="container">
        <div id="sponsor-carousel" class="sponsor-carousel owl-carousel">
            <div class="sponsor-item">
                <img src="img/logo-apersi.png" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="img/logo-pupr.png" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="img/logo-bank-bni.png" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="img/logo-bank-btn.png" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="img/logo-bank-bsi.png" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="img/logo-bank-bri.png" alt="sponsor">
            </div>

        </div>
    </div>
</div>
<!--/.sponsor-section-->

@endsection
