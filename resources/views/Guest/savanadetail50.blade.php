@extends('layouts/index')
@section('pages')
<section class="page-headers padding" style="background-image: url(../img/fotoutama.jpg">
    <div class="container">
        <div class="page-content text-center">
            <h2>Savana Park Residential</h2>
            <p>Green living to make it better the future</p>
        </div>
    </div>
</section>
<!--/.page-header-->

<section class="project-single-section bg-grey padding">
    <div class="dots"></div>
    <div class="container">
        <div class="row project-single-wrap">
            <div class="col-sm-6 padding-15">
                <div id="project-single-carousel" class="project-single-carousel owl-carousel">
                    <div class="single-carousel">
                        <img src="img/savana-home-primary-project.jpg" alt="img">
                    </div>
                    <div class="single-carousel">
                        <img src="img/savana-home-primary.jpg" alt="img">
                    </div>
                    <div class="single-carousel">
                        <img src="img/denah-50-bawah.jpg" alt="img">
                    </div>
                     <div class="single-carousel">
                        <img src="img/lantai1.jpg" alt="img">
                    </div>
                     <div class="single-carousel">
                        <img src="img/lantai2.jpg" alt="img">
                    </div>
                     <div class="single-carousel">
                        <img src="img/lantai3.jpg" alt="img">
                    </div>
                     <div class="single-carousel">
                        <img src="img/lantai4.jpg" alt="img">
                    </div>
                    <div class="single-carousel">
                        <img src="img/birdview.png" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 padding-15">
                <div class="project-single-content">
                    <h2>Savana Park Tipe 50/60</h2>
                    <p>Rumah Savana Park tipe 50/60 menawarkan rumah dengan 2 lantai, 3 kamar tidur, dan 2 kamar mandi. Desainnya yang modern dan hijau membuat rumah ini tidak hanya nyaman dan fungsional, tetapi juga memberikan kesan yang estetik dan berkelas. Savana Park memastikan bahwa setiap aspek dari hunian ini memperhatikan keberlanjutan, sehingga memberikan nilai dan manfaat yang positif bagi penghuninya dan lingkungan sekitar.</p>
                    <ul class="project-details">
                        <li><span>Luas Tanah</span>: 60 m2</li>
                        <li><span>Luas Bangunan</span>: 50 m2</li>
                        <li><span>Harga</span>: 400 Juta-an</li>
                        <li><span>Booking + DP</span>: 3 Juta</li>
                        <li><span>Angsuran Mualai</span>: 3,4 Juta / Bulan</li>
                    </ul><br>
                    <a href="https://api.whatsapp.com/send?phone=6282122620425" style="display: inline-block; padding:16px; border-radius: 8px; background-color: #25D366; color: #fff; text-decoration: none; font-family: sans-serif; font-size: 16px;">WhatsApp Kami</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/.project-single-section-->
<br>
<section class="section" id="section-spesifikasi">
    <div class="container">
        <h2 class="heading">Spesifikasi</h2>
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Pondasi</th>
                            <td>Batu Kali, Cakar Ayam</td>
                        </tr>
                        <tr>
                            <th>Struktur</th>
                            <td>Beton Bertulang</td>
                        </tr>
                        <tr>
                            <th>Dinding</th>
                            <td>Plester Aci, Finishing Cat</td>
                        </tr>
                        <tr>
                            <th>Kusen</th>
                            <td>Alumunium Coating</td>
                        </tr>
                        <tr>
                            <th>Pintu</th>
                            <td>Double Triplek</td>
                        </tr>
                        <tr>
                            <th>Atap</th>
                            <td>Baja Ringan, Genteng Metal</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table">
                    <tbody>

                        <tr>
                            <th>Sanitasi Air</th>
                            <td>Closet Duduk + Shower</td>
                        </tr>
                        <tr>
                            <th>Plafond</th>
                            <td>Rangka Hollow, Gypsum GRC</td>
                        </tr>
                        <tr>
                            <th>Keramik</th>
                            <td>Homogenious 60x60</td>
                        </tr>
                        <tr>
                            <th>Listrik</th>
                            <td>PLN 2200 watt / 220 Volt</td>
                        </tr>
                        <tr>
                            <th>Air</th>
                            <td>Available</td>
                        </tr>

                    </tbody>
                </table>
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
            <h2>Tipe Rumah Lainnya</h2>
        </div>
        <!--/.section-heading-->
        <div id="project-carousel-2" class="project-carousel-2 owl-carousel">
            <div class="project-item">
                <div class="project-thumb">
                    <img src="img/savana-home-primary-project.jpg" alt="">
                </div>
                <div class="project-content">
                    <h3><a href="savana-type-33">Type 33/60</a></h3>
                    <p>Cluster Savana Park type 33/60 adalah hunian 1 lantai dengan 2 kamar tidur dan 1 kamar mandi yang berlokasi di kawasan yang mengusung konsep green living. Dilengkapi dengan fasilitas taman bermain anak, jogging track,dan keamanan 24 jam, cluster ini cocok bagi keluarga muda atau pasangan yang baru menikah yang ingin memiliki hunian modern dengan budget terjangkau.</p>
                    <a href="savana-type-33" class="default-btn">Lihat Detail</a>
                </div>
            </div>

            <div class="project-item">
                {{-- <div class="project-thumb">
                    <img src="img/savana-home-primary-project.jpg" alt="">
                </div>
                <div class="project-content">
                    <h3><a href="#">Type 50/60</a></h3>
                    <p>Cluster Savana Park type 50/60 adalah hunian 2 lantai dengan 3 kamar tidur dan 2 kamar mandi yang berlokasi di kawasan yang mengusung konsep green living. Dilengkapi dengan fasilitas taman bermain anak, jogging track,dan keamanan 24 jam, cluster ini cocok bagi keluarga muda atau pasangan yang baru menikah yang ingin memiliki hunian modern dengan budget terjangkau.</p>
                    <a href="#" class="default-btn">Lihat Detail</a>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!--/.project-section-->



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
</section>
<!--/.sponsor-section-->
@endsection
