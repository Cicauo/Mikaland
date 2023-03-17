@extends('Layouts.Index')
@section('Pages')
{{-- <section class="page-header padding"> --}}
<section class="page-headers padding" style="background-image: url(../img/fotoutama.jpg">
    <div class="container">
        <div class="page-content text-center">
            <h2>Savana Park Resident</h2>
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
                    <p>Cluster Savana Park adalah kawasan hunian modern dan terjangkau yang mengusung konsep green living dan dilengkapi dengan fasilitas lengkap. Terletak di daerah strategis dengan akses mudah ke pusat kota, cocok bagi keluarga muda atau pasangan yang baru menikah yang mencari hunian yang layak dengan budget terbatas.</p>
                    <ul class="about-list">
                        <li><i class="fas fa-check"></i>4 Menit Ke Pasar Gudang Tigaraksa</li>
                        <li><i class="fas fa-check"></i>8 Menit Ke Pusat Pemerintahan Kab.Tangerang</li>
                        <li><i class="fas fa-check"></i>10 Menit Ke Rencana Tol Balaraja - Serpong</li>
                        <li><i class="fas fa-check"></i>10 Menit Ke Universitas Tangerang Raya</li>
                        <li><i class="fas fa-check"></i>16 Menit Ke fasilitas Kesehatan / Rumah Sakit </li>
                        <li><i class="fas fa-check"></i>18 Menit Ke Stasiun Commuter Line Tigaraksa</li>
                        <li><i class="fas fa-check"></i>Domisili Perusahaan, No. 593/33/DS-CHN/IX/2014</li>
                        <li><i class="fas fa-check"></i>23 Menit Ke Tol Balaraja Timur / Cikupa</li>
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
            <span>Savana Park Resident</span>
            <h2>Pilihan Tipe Rumah</h2>
        </div>
        <!--/.section-heading-->
        <div id="project-carousel-2" class="project-carousel-2 owl-carousel">
            <div class="project-item">
                <div class="project-thumb">
                    <img src="img/savana-home-primary-project.jpg" alt="">
                </div>
                <div class="project-content">
                    <h3><a href="#">Type 50/60</a></h3>
                    <p>Cluster Savana Park type 50/60 adalah hunian 2 lantai dengan 3 kamar tidur dan 2 kamar mandi yang berlokasi di kawasan yang mengusung konsep green living. Dilengkapi dengan fasilitas taman bermain anak, jogging track,dan keamanan 24 jam, cluster ini cocok bagi keluarga muda atau pasangan yang baru menikah yang ingin memiliki hunian modern dengan budget terjangkau.</p>
                    <a href="#" class="default-btn">Lihat Detail</a>
                </div>
            </div>

            <div class="project-item">
                <div class="project-thumb">
                    <img src="img/savana-home-primary-project.jpg" alt="">
                </div>
                <div class="project-content">
                    <h3><a href="#">Type 50/60</a></h3>
                    <p>Cluster Savana Park type 50/60 adalah hunian 2 lantai dengan 3 kamar tidur dan 2 kamar mandi yang berlokasi di kawasan yang mengusung konsep green living. Dilengkapi dengan fasilitas taman bermain anak, jogging track,dan keamanan 24 jam, cluster ini cocok bagi keluarga muda atau pasangan yang baru menikah yang ingin memiliki hunian modern dengan budget terjangkau.</p>
                    <a href="#" class="default-btn">Lihat Detail</a>
                </div>
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
            <h3>Savana Park Resident</h3>
        </div>
        <br>
        <div class="row project-item">
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="project-item">
                    <img src="img/project-1.jpg" alt="projects">
                    <div class="overlay"></div>
                    <a href="img/project-1.jpg" class="view-icon img-popup"> <i class="fas fa-expand"></i></a>
                    <div class="projects-content">
                        <a href="#" class="category">Interior</a>
                        <h3><a href="project-single.html" class="tittle">Rectangular house near italy</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="project-item">
                    <img src="img/project-2.jpg" alt="projects">
                    <div class="overlay"></div>
                    <a href="img/project-2.jpg" class="view-icon img-popup"> <i class="fas fa-expand"></i></a>
                    <div class="projects-content">
                        <a href="#" class="category">Architecture</a>
                        <h3><a href="project-single.html" class="tittle">Cathedral of brasilia brasilia</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="project-item">
                    <img src="img/project-2.jpg" alt="projects">
                    <div class="overlay"></div>
                    <a href="img/project-2.jpg" class="view-icon img-popup"> <i class="fas fa-expand"></i></a>
                    <div class="projects-content">
                        <a href="#" class="category">Architecture</a>
                        <h3><a href="project-single.html" class="tittle">Cathedral of brasilia brasilia</a></h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--/.Fasilitas-section-->

{{-- Promotion-Section  --}}
<section class="projects-section padding">
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
</section>
<!--/.Promotion-section-->

{{-- /.cta-section --}}
<section class="cta-section padding">
    <div class="container">
        <div class="cta-content text-center">
            <h2>We know that good <br>design means good business!</h2>
            <p>We offer a fully integrated service that complements the architectural <br> concept, we ensure all projects.</p>
            <a href="#" class="default-btn">Get Appointment</a>
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
