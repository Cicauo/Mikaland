@extends('layouts.index')
@section('pages')
{{-- <section class="page-header padding"> --}}
<section class="page-headers padding" style="background-image: url(img/rajawali-utama.png">
    <div class="container">
        <div class="page-content text-center">
            <h2>Rajawali Residence</h2>
            <p>Building a sustainable future with modern futurism</p>
        </div>
    </div>
</section>
<!--/.page-header-->

<section class="about-section padding">
    <div class="container">
        <div class="row about-wrap d-flex align-items-center">
            <div class="col-md-6 xs-padding">
                <div class="about-content">
                    <h2>Membangun masa depan berkelanjutan dengan sentuhan futuristik kontemporer.</h2>
                    <p>Kami mempersembahkan cluster Rajawali hunian eksklusif yang mengutamakan keseimbangan antara lingkungan yang alami, desain modern, dan kenyamanan tinggal bagi keluarga. Harmoni bagi penghuni cluster menjadi prioritas utama dalam pembangunan hunian kami.
                    </p>
                    <ul class="about-list">
                        <li><i class="fas fa-check"></i>25 Menit Ke Taman Mangrove</li>
                        <li><i class="fas fa-check"></i>30 Menit Ke Gerbang Tol Cikupa</li>
                        <li><i class="fas fa-check"></i>40 Menit Ke Pelabuhan Cituis</li>
                        <li><i class="fas fa-check"></i>60 Meni Ket Bandara Soekarno Hatta</li>
                        <li><i class="fas fa-check"></i>60 Menit Ke Pantai Indah Kapuk</li>
                    </ul>
                    <a class="default-btn" href="img/browsur-rajawali.pdf" class="button">
                        <i class="fa fa-download"></i>
                        Download Browsur
                    </a>
                </div>
            </div>
            <div class="col-md-6 xs-padding">
                <div class="about-projects">
                    <div class="about-projects"><img src="img/rajawali36.jpg" alt=""></div>
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
                    <h3><a href="rajawali-type-36">Rajawali Type 36</a></h3>
                    <p>Rumah Rajawali tipe 36/60 adalah salah satu produk hunian yang ditawarkan dengan 2 lantai, 3 kamar tidur, dan 2 kamar mandi. Desainnya yang modern dan futuristik kontemporer membuat rumah ini tidak hanya nyaman, tetapi juga estetik dan berkelas. Dengan konsep keberlanjutan sebagai landasan, Rajawali memastikan bahwa setiap aspek dari hunian ini memberikan nilai dan manfaat bagi penghuninya, serta lingkungan sekitar.</p>
                    <a href="rajawali-type-36" class="default-btn">Lihat Detail</a>
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
                        <a href="" class="category">KidZone</a>
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
                        <a href="" class="category">Health</a>
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
                        <a href="" class="category">Connect</a>
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
                        <a href="" class="category">Security</a>
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
                        <a href="" class="category">Olahraga</a>
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
                        <a href="" class="category">Tempat Ibadah</a>
                        <h3><a href="" class="tittle">Mushola</a></h3>
                    </div>
                </div>
            </div>
            {{-- Site-map  --}}
            <div>
                <img src="/img/siteplan-rajawali.png" class="img-fluid" alt="Responsive image">
            </div>
            {{-- Site-map  --}}
            {{-- Maps Project  --}}
            <div id="google-map">
            
                {{-- <img src="img/maps-savana.jpg" class="mx-auto d-block" alt="Responsive image"> --}}
                <iframe class="mx-auto d-block" width="100%" height="440" frameborder="0" style="border:0" allowfullscreen="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31736.691815848044!2d106.4824104014456!3d-6.1190614044751115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e41ffcf83290911%3A0x52850d9b5e949d16!2sCluster%20Rajawali%20Residence%20Rajeg!5e0!3m2!1sid!2sid!4v1679043677787!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                        <h3>Lokasi</h3>
                        <p>Lokasi strategis di kawasan pertemuan 3 provinsi</p>
                    </div>
                </div>
            </div>
            <!--item-1-->
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-industrial-robot"></i>
                    <div class="service-info">
                        <h3>Konsep</h3>
                        <p>Konsep hunian bernuansa alami dan nyaman dengan fasilitas yang memadai</p>
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
                        <p>Tanah bebas banjir dengan sumber daya air yang baik dan jernih.</p>
                    </div>
                </div>
            </div>
            <!--item-4-->
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-tank-truck"></i>
                    <div class="service-info">
                        <h3>Sunrise Property</h3>
                        <p>Peluang ekonomi dan produktivitas hidup yang tinggi karena dekat dengan kawasan industri.</p>
                    </div>
                </div>
            </div>
            <!--item-5-->
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-factory-1"></i>
                    <div class="service-info">
                        <h3>Spesifikasi</h3>
                        <p>Spesifikasi bangunan berkualitas dengan konsep terbaru.</p>
                    </div>
                </div>
            </div>
            <!--item-6-->
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-factory-1"></i>
                    <div class="service-info">
                        <h3>Fasilitas</h3>
                        <p>Fasilitas lengkap seperti playground, lapangan olahraga, dan keamanan CCTV</p>
                    </div>
                </div>
            </div>
            <!--item-7-->
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-factory-1"></i>
                    <div class="service-info">
                        <h3>Princing & Sales Program</h3>
                        <p>Harga property kompetitif dengan layanan pembelian yang memuaskan.</p>
                    </div>
                </div>
            </div>
            <!--item-8-->
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-factory-1"></i>
                    <div class="service-info">
                        <h3>Legal</h3>
                        <p>Kondisi legal yang jelas dan aman.</p>
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
