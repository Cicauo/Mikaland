@extends('Layouts.Index')
@section('Pages')
{{-- <section class="page-header padding"> --}}
<section class="page-headers padding" style="background-image: url(img/mega-pesona-utama.png">
    <div class="container">
        <div class="page-content text-center">
            <h2>Mega Pesona</h2>
            <p>Eerything's has value</p>
        </div>
    </div>
</section>
<!--/.page-header-->

<section class="about-section padding">
    <div class="container">
        <div class="row about-wrap d-flex align-items-center">
            <div class="col-md-6 xs-padding">
                <div class="about-content">
                    <h2>Semua hal, baik besar maupun kecil, memiliki nilai yang tak ternilai</h2>
                    <p>Mega Pesona adalah sebuah perumahan yang dibangun dengan mengutamakan nilai-nilai keberlanjutan dan kenyamanan tinggal bagi penghuninya. Dengan sentuhan desain yang modern, Mega Pesona menawarkan lingkungan asri dan sejuk, sehingga membuat Anda merasakan keharmonisan yang indah di dalamnya.</p>
                    <ul class="about-list">
                        <li><i class="fas fa-check"></i>Selangkah Ke Stadion Mini Leungsir</li>
                        <li><i class="fas fa-check"></i>8 Menit Ke Pasar</li>
                        <li><i class="fas fa-check"></i>8 Menit Ke RSUD</li>
                        <li><i class="fas fa-check"></i>8 Menit Ke Puspemkab</li>
                        <li><i class="fas fa-check"></i>8 Akses Tol Serpong Balaraja</li>
                    </ul>
                    <a class="default-btn" href="img/browsur-megapesona.pdf" class="button">
                        <i class="fa fa-download"></i>
                        Download Browsur
                    </a>
                </div>
            </div>
            <div class="col-md-6 xs-padding">
                <div class="about-projects">
                    <div class="about-projects"><img src="/img/pesona-33.jpg" alt=""></div>
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
            <span>Mega Pesona</span>
            <h2>Pilihan Tipe Rumah</h2>
        </div>
        <!--/.section-heading-->
        <div id="project-carousel-2" class="project-carousel-2 owl-carousel">
            <div class="project-item">
                <div class="project-thumb">
                    <img src="img/pesona-home-33.jpg" alt="">
                </div>
                <div class="project-content">
                    <h3><a href="pesona-type-33">Type 33/66</a></h3>
                    <p>Rumah Mega Pesona tipe 33/66 menawarkan rumah dengan 1 lantai, 2 kamar tidur, dan 1 kamar mandi. Dibangun dengan kualitas bahan yang terbaik dan desain yang modern, rumah ini menawarkan kenyamanan tinggal dan fungsionalitas yang optimal. Di samping itu, setiap detail dari rumah ini memperlihatkan nilai yang tak ternilai, baik itu dari segi estetika maupun keberlangsungan hunian tersebut.</p>
                    <a href="mega-pesona-type-33" class="default-btn">Lihat Detail</a>
                </div>
            </div>
            <div class="project-item">

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
            <h3>Mega Pesona</h3>
        </div>
        <br>
        <div class="row project-item">
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="project-item">
                    <img src="img/sport-field.jpg" alt="projects">
                    <div class="overlay"></div>
                    <a href="" class="view-icon img-popup"> <i class="fas fa-expand"></i></a>
                    <div class="projects-content">
                        <a href="#" class="category">Olahraga</a>
                        <h3><a href="" class="tittle">Lapangan Badminton</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="project-item">
                    <img src="img/masjid.jpg" alt="projects">
                    <div class="overlay"></div>
                    <a href="" class="view-icon img-popup"> <i class="fas fa-expand"></i></a>
                    <div class="projects-content">
                        <a href="#" class="category">Tempat Ibadah</a>
                        <h3><a href="" class="tittle">Masjid</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="project-item">
                    <img src="img/gedung-serbaguna.png" alt="projects">
                    <div class="overlay"></div>
                    <a href="" class="view-icon img-popup"> <i class="fas fa-expand"></i></a>
                    <div class="projects-content">
                        <a href="#" class="category">Community</a>
                        <h3><a href="" class="tittle">Gedung Serba Guna</a></h3>
                    </div>
                </div>
            </div>
            {{-- Site-map  --}}
            <div>
                <img src="/img/siteplan-megapesona.png" class="img-fluid" alt="Responsive image">
            </div>
            {{-- Site-map  --}}
            {{-- Maps Project  --}}
            <div id="google-map">
                {{-- <img src="img/maps-savana.jpg" class="mx-auto d-block" alt="Responsive image"> --}}
                <iframe class="mx-auto d-block" width="100%" height="440" frameborder="0" style="border:0" allowfullscreen="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.8707725073944!2d106.45639330290237!3d-6.272625043988868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4207e6c69d2be1%3A0x6839eae5df427cb4!2sMega%20Pesona%20Leungsir!5e0!3m2!1sid!2sid!4v1679043966337!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- /#google-map -->
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
                        <h3>Desaign</h3>
                        <p>Desaign super premium.</p>
                    </div>
                </div>
            </div>
            <!--item-1-->
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-industrial-robot"></i>
                    <div class="service-info">
                        <h3>Konsep</h3>
                        <p>Nikmati kenyamanan dengan adanya Double Dinding</p>
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
                        <h3>Pagar Pembatas</h3>
                        <p>Pagar belakang dibangun sebagai pembatas</p>
                    </div>
                </div>
            </div>
            <!--item-4-->
            <!--item-5-->
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-factory-1"></i>
                    <div class="service-info">
                        <h3>Bonus</h3>
                        <p>Tersedia ruang dapur dan mendapatkan bonus kitchen sink</p>
                    </div>
                </div>
            </div>
            <!--item-6-->
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-factory-1"></i>
                    <div class="service-info">
                        <h3>Bantuan Pembiayaan</h3>
                        <p>Dapatkan Rumah Impianmu dengan Bantuan Pembiayaan dari pemerintah</p>
                    </div>
                </div>
            </div>
            <!--item-7-->

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
            <a href="https://api.whatsapp.com/send?phone=6282122620425" style="display: inline-block; padding:16px; border-radius: 8px; background-color: #25D366; color: #fff; text-decoration: none; font-family: sans-serif; font-size: 16px;">WhatsApp Kami</a>
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
