@extends('layouts.index')
@section('pages')
<section class="blog-section padding">
    <div class="container">
        <div class="blog-wrap row">
            <div class="col-md-8 sm-padding">
                <div class="row">
                    <div class="col-sm-6 padding-15">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="img/blogsrh1.png" alt="post">
                                <span class="category"><a href=" ">Serah Terima</a></span>
                            </div>
                            <div class="blog-content">
                                <h3><a href="blog-detail">Serah Terima Unit Konsumen | Tahap ke-1</a></h3>
                                <p>Setelah melalui proses yang panjang dan penuh antisipasi, akhirnya Cluster Savana Park siap menyerahkan unit...</p>
                                <a href="blog-detail" class="read-more">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 padding-15">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="img/blogsrh-4.png" alt="post">
                                <span class="category"><a href=" ">Pembangunan</a></span>
                            </div>
                            <div class="blog-content">
                                <h3><a href="blog-detail-2">Savana Park 2 Lantai, Solusi Hunian Modern dan Nyaman</a></h3>Savana Park kembali hadir dengan solusi hunian modern dan nyaman, yaitu perumahan Sava...</p>
                                <a href="blog-detail-2" class="read-more">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 padding-15">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="img/gate1.png" alt="post">
                                <span class="category"><a href=" ">Information</a></span>
                            </div>
                            <div class="blog-content">
                                <h3><a href="blog-detail-3">Savana Park mulai merealisasikan kampanye one-gate system.</a></h3>
                                <p>Keamanan adalah salah satu aspek penting yang menjadi pertimbangan utama dalam memilih hunian. Sa...</p>
                                <a href="blog-detail-3" class="read-more">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <ul class="pagination-wrap text-center mt-30">
                    <li><a href=" "><i class="ti-arrow-left"></i></a></li>
                    <li><a href=" " class="active">1</a></li>
                    <li><a href=" " >2</a></li>
                    <li><a href=" ">3</a></li>
                    <li><a href=" "><i class="ti-arrow-right"></i></a></li>
                </ul><!-- Pagination -->
            </div>
            <!--/.col-md-8-->
            <div class="col-md-4 padding-15">
                <div class="sidebar-wrap">
                    <div class="widget-content">
                        <form action="" class="search-form">
                            <input type="text" class="form-control" placeholder="Type here">
                            <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget-content">
                        <h4>Categories</h4>
                        <ul class="widget-links">
                            <li><a href=" ">Serah Terima</a></li>
                            <li><a href=" ">Pembangunan</a></li>
                            <li><a href=" ">Informasi</a></li>
                        </ul>
                    </div>
                    <!--categories-->
                    {{-- <div class="widget-content">
                        <h4>Recent Posts</h4>
                        <ul class="thumb-post">
                            <li><img src="img/post-1.jpg" alt="post"><a href=" ">Serah Terima Unit Konsumen | Tahap ke-1</a></li>
                            <li><img src="img/post-2.jpg" alt="post"><a href=" ">Terrace in the town kentaro design workshop.</a></li>
                            <li><img src="img/post-3.jpg" alt="post"><a href=" ">W270 house são arquitetos fabio architeqture.</a></li>
                        </ul>
                    </div> --}}
                    <!--tag clouds-->
                    <div class="widget-content">
                        <h4>Tag Clouds</h4>
                        <ul class="tags">
                            <li><a href=" ">Serah Terima</a></li>
                            <li><a href=" ">Pembangunan</a></li>
                            <li><a href=" ">Informasi</a></li>
                        </ul>
                    </div>
                    <!--tag clouds-->
                </div>
                <!--/.sidebar-wrap-->
            </div>
            <!--/.col-md-4-->
        </div>
        <!--/.blog-wrap-->
    </div>
</section>
<!--/.blog-section-->
@endsection
