@extends('layouts.index')
@section('pages')
<section class="blog-section padding">
    <div class="container">
        <div class="blog-wrap row">
            <div class="col-md-8 padding-15">
                <div class="blog-single-wrap">
                    <div class="blog-thumb">
                        <img src="img/blogsrh-4.png" alt="img">
                    </div>
                    <div class="blog-single-content">
                        <h2><a href="">Savana Park 2 Lantai, Solusi Hunian Modern dan Nyaman</a></h2>
                        <ul class="single-post-meta">
                            <li><i class="fa fa-user"></i> <a href="">Admin</a></li>
                            <li><i class="fa fa-calendar"></i> <a href="">17 Maret 2023</a></li>
                            {{-- <li><i class="fa fa-comments"></i> <a href="">0 Comments</a></li> --}}
                        </ul>

                        <p>
                            Savana Park kembali hadir dengan solusi hunian modern dan nyaman, yaitu perumahan Savana Park 2 Lantai. Terletak di kawasan strategis di tengah kota, perumahan ini menawarkan pengalaman hunian yang nyaman, aman, dan modern bagi setiap penghuninya.</p>
                        <p>
                           Dibangun oleh tim profesional dan berpengalaman, setiap unit perumahan Savana Park 2 Lantai didesain dengan sangat detail dan memperhatikan setiap aspek kenyamanan penghuninya. Dengan luas tanah yang lebih besar dan desain yang lebih modern, rumah Savana Park 2 Lantai memberikan ruang yang lebih luas dan memaksimalkan penggunaan setiap sudut rumah.</p>
                        <p>
                            Selain itu, perumahan Savana Park 2 Lantai dilengkapi dengan berbagai fasilitas yang memanjakan penghuninya. Mulai dari taman yang asri dan sejuk, area bermain anak-anak, hingga keamanan yang terjamin, semua fasilitas tersebut hadir untuk memberikan kenyamanan dan keamanan bagi setiap penghuni.</p>
                        <p>
                            Launching pembangunan rumah Savana Park 2 Lantai merupakan langkah yang diambil oleh Savana Park untuk memenuhi kebutuhan masyarakat akan hunian yang modern dan nyaman. Dalam proses pembangunan, tim dari Savana Park akan memastikan setiap unit perumahan dibangun dengan kualitas terbaik dan memperhatikan setiap detail untuk memberikan pengalaman hunian yang optimal bagi penghuninya.</p>
                        
                        <div>
                            <img src="/img/blogsrh-5.png" class="img-fluid" alt="Responsive image">
                        </div>



                        <!--/.post-tags-->
                        {{-- <div class="author-box bg-grey">
                            <img src="img/testi-1.jpg" alt="img">
                            <div class="author-info">
                                <h3>Albert Nouwen</h3>
                                <p>Arkit is a different kind of architecture practice. Founded by LoganCee in 1991, we’re an employee-owned firm pursuing a democratic design.</p>
                                <ul class="social-icon">
                                    <li><a href=""><i class="ti-facebook"></i></a></li>
                                    <li><a href=""><i class="ti-twitter"></i></a></li>
                                    <li><a href=""><i class="ti-instagram"></i></a></li>
                                    <li><a href=""><i class="ti-pinterest"></i></a></li>
                                    <li><a href=""><i class="ti-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div> --}}
                        <!--/.author-box-->
                        {{-- <div class="post-navigation row">
                            <div class="col prev-post">
                                <a href=""><i class="ti-arrow-left"></i>Prev Post</a>
                            </div>
                            <div class="col next-post">
                                <a href="">Next Post <i class="ti-arrow-right"></i></a>
                            </div>
                        </div> --}}
                        <!--.post-navigation-->
                        {{-- <div class="comments-area">
                            <div class="comments-section">
                                <h3 class="comments-title">Posts Comments</h3>
                                <ol class="comments">
                                    <li class="comment even thread-even depth-1" id="comment-1">
                                        <div id="div-comment-1">
                                            <div class="comment-thumb">
                                                <div class="comment-img"><img src="img/comment-1.png" alt=""></div>
                                            </div>
                                            <div class="comment-main-area">
                                                <div class="comment-wrapper">
                                                    <div class="comments-meta">
                                                        <h4>Jhon Castellon <span class="comments-date">jan 05, 2020 at 8:00</span></h4>
                                                    </div>
                                                    <div class="comment-area">
                                                        <p>Home renovations, especially those involving plentiful of demolition can be a very dusty affair. This nasty dust can easily free flow through your house.</p>
                                                        <div class="comments-reply">
                                                            <a class="comment-reply-link" href=""><span>Reply</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="children">
                                            <li class="comment">
                                                <div>
                                                    <div class="comment-thumb">
                                                        <div class="comment-img"><img src="img/comment-2.png" alt=""></div>
                                                    </div>
                                                    <div class="comment-main-area">
                                                        <div class="comment-wrapper">
                                                            <div class="comments-meta">
                                                                <h4>José Carpio <span class="comments-date">jan 15, 2020 at 8:00</span></h4>
                                                            </div>
                                                            <div class="comment-area">
                                                                <p>Home renovations, especially those involving plentiful of demolition can be a very dusty affair. This nasty dust can easily free flow through your house.</p>
                                                                <div class="comments-reply">
                                                                    <a class="comment-reply-link" href=""><span>Reply</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li class="comment">
                                                        <div>
                                                            <div class="comment-thumb">
                                                                <div class="comment-img"><img src="img/comment-3.png" alt=""></div>
                                                            </div>
                                                            <div class="comment-main-area">
                                                                <div class="comment-wrapper">
                                                                    <div class="comments-meta">
                                                                        <h4>Valentin Lacoste <span class="comments-date">jan 25, 2020 at 8:00</span></h4>
                                                                    </div>
                                                                    <div class="comment-area">
                                                                        <p>Home renovations, especially those involving plentiful of demolition can be a very dusty affair. This nasty dust can easily free flow through your house.</p>
                                                                        <div class="comments-reply">
                                                                            <a class="comment-reply-link" href=""><span>Reply</span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="comment">
                                        <div>
                                            <div class="comment-thumb">
                                                <div class="comment-img"><img src="img/comment-4.png" alt=""></div>
                                            </div>
                                            <div class="comment-main-area">
                                                <div class="comment-wrapper">
                                                    <div class="comments-meta">
                                                        <h4>Kyle Frederick <span class="comments-date">jan 02, 2020 at 8:00</span></h4>
                                                    </div>
                                                    <div class="comment-area">
                                                        <p>Home renovations, especially those involving plentiful of demolition can be a very dusty affair. This nasty dust can easily free flow through your house.</p>
                                                        <div class="comments-reply">
                                                            <a class="comment-reply-link" href=""><span>Reply</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </div> <!-- end comments-section -->

                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Write a Comment</h3>
                                <form method="post" id="commentform" class="comment-form">
                                    <div class="form-textarea">
                                        <textarea id="comment" placeholder="Write Your Comments..."></textarea>
                                    </div>
                                    <div class="form-inputs">
                                        <input placeholder="Website" type="url">
                                        <input placeholder="Name" type="text">
                                        <input placeholder="Email" type="email">
                                    </div>
                                    <div class="form-submit">
                                        <input id="submit" value="Post Comment" type="submit">
                                    </div>
                                </form>
                            </div>
                        </div><!-- /.comments-area --> --}}
                    </div>
                </div>
                <!--/.blog-single-->
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
                            <li><a href="">Serah Terima</a></li>
                            <li><a href="">Pembangunan</a></li>
                            <li><a href="">Informasi</a></li>
                        </ul>
                    </div>
                     <!--categories-->
                    <div class="widget-content">
                        <h4>Recent Posts</h4>
                        <ul class="thumb-post">
                            <li><img src="img/blogsrh1.png" alt="post"><a href="blog-detail">Serah Terima Unit Konsumen | Tahap ke-1</a></li>
                            <li><img src="img/blogsrh-4.png" alt="post"><a href="blog-detail-2">Savana Park 2 Lantai, Solusi Hunian Modern dan Nyaman</a></li>
                            <li><img src="img/gate1.png" alt="post"><a href="blog-detail-3">Savana Park mulai merealisasikan kampanye one-gate system</a></li>
                        </ul>
                    </div>
                    </div>
                    <!--tag clouds-->
                    <div class="widget-content">
                        <h4>Tag Clouds</h4>
                        <ul class="tags">
                            <li><a href="">Serah Terima</a></li>
                            <li><a href="">Pembangunan</a></li>
                            <li><a href="">Informasi</a></li>
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
@extends('layouts.index')
@section('pages')
<section class="blog-section padding">
    <div class="container">
        <div class="blog-wrap row">
            <div class="col-md-8 padding-15">
                <div class="blog-single-wrap">
                    <div class="blog-thumb">
                        <img src="img/blogsrh-4.png" alt="img">
                    </div>
                    <div class="blog-single-content">
                        <h2><a href="">Savana Park 2 Lantai, Solusi Hunian Modern dan Nyaman</a></h2>
                        <ul class="single-post-meta">
                            <li><i class="fa fa-user"></i> <a href="">Admin</a></li>
                            <li><i class="fa fa-calendar"></i> <a href="">17 Maret 2023</a></li>
                            {{-- <li><i class="fa fa-comments"></i> <a href="">0 Comments</a></li> --}}
                        </ul>

                        <p>
                            Savana Park kembali hadir dengan solusi hunian modern dan nyaman, yaitu perumahan Savana Park 2 Lantai. Terletak di kawasan strategis di tengah kota, perumahan ini menawarkan pengalaman hunian yang nyaman, aman, dan modern bagi setiap penghuninya.</p>
                        <p>
                           Dibangun oleh tim profesional dan berpengalaman, setiap unit perumahan Savana Park 2 Lantai didesain dengan sangat detail dan memperhatikan setiap aspek kenyamanan penghuninya. Dengan luas tanah yang lebih besar dan desain yang lebih modern, rumah Savana Park 2 Lantai memberikan ruang yang lebih luas dan memaksimalkan penggunaan setiap sudut rumah.</p>
                        <p>
                            Selain itu, perumahan Savana Park 2 Lantai dilengkapi dengan berbagai fasilitas yang memanjakan penghuninya. Mulai dari taman yang asri dan sejuk, area bermain anak-anak, hingga keamanan yang terjamin, semua fasilitas tersebut hadir untuk memberikan kenyamanan dan keamanan bagi setiap penghuni.</p>
                        <p>
                            Launching pembangunan rumah Savana Park 2 Lantai merupakan langkah yang diambil oleh Savana Park untuk memenuhi kebutuhan masyarakat akan hunian yang modern dan nyaman. Dalam proses pembangunan, tim dari Savana Park akan memastikan setiap unit perumahan dibangun dengan kualitas terbaik dan memperhatikan setiap detail untuk memberikan pengalaman hunian yang optimal bagi penghuninya.</p>
                        
                        <div>
                            <img src="/img/blogsrh-5.png" class="img-fluid" alt="Responsive image">
                        </div>



                        <!--/.post-tags-->
                        {{-- <div class="author-box bg-grey">
                            <img src="img/testi-1.jpg" alt="img">
                            <div class="author-info">
                                <h3>Albert Nouwen</h3>
                                <p>Arkit is a different kind of architecture practice. Founded by LoganCee in 1991, we’re an employee-owned firm pursuing a democratic design.</p>
                                <ul class="social-icon">
                                    <li><a href=""><i class="ti-facebook"></i></a></li>
                                    <li><a href=""><i class="ti-twitter"></i></a></li>
                                    <li><a href=""><i class="ti-instagram"></i></a></li>
                                    <li><a href=""><i class="ti-pinterest"></i></a></li>
                                    <li><a href=""><i class="ti-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div> --}}
                        <!--/.author-box-->
                        {{-- <div class="post-navigation row">
                            <div class="col prev-post">
                                <a href=""><i class="ti-arrow-left"></i>Prev Post</a>
                            </div>
                            <div class="col next-post">
                                <a href="">Next Post <i class="ti-arrow-right"></i></a>
                            </div>
                        </div> --}}
                        <!--.post-navigation-->
                        {{-- <div class="comments-area">
                            <div class="comments-section">
                                <h3 class="comments-title">Posts Comments</h3>
                                <ol class="comments">
                                    <li class="comment even thread-even depth-1" id="comment-1">
                                        <div id="div-comment-1">
                                            <div class="comment-thumb">
                                                <div class="comment-img"><img src="img/comment-1.png" alt=""></div>
                                            </div>
                                            <div class="comment-main-area">
                                                <div class="comment-wrapper">
                                                    <div class="comments-meta">
                                                        <h4>Jhon Castellon <span class="comments-date">jan 05, 2020 at 8:00</span></h4>
                                                    </div>
                                                    <div class="comment-area">
                                                        <p>Home renovations, especially those involving plentiful of demolition can be a very dusty affair. This nasty dust can easily free flow through your house.</p>
                                                        <div class="comments-reply">
                                                            <a class="comment-reply-link" href=""><span>Reply</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="children">
                                            <li class="comment">
                                                <div>
                                                    <div class="comment-thumb">
                                                        <div class="comment-img"><img src="img/comment-2.png" alt=""></div>
                                                    </div>
                                                    <div class="comment-main-area">
                                                        <div class="comment-wrapper">
                                                            <div class="comments-meta">
                                                                <h4>José Carpio <span class="comments-date">jan 15, 2020 at 8:00</span></h4>
                                                            </div>
                                                            <div class="comment-area">
                                                                <p>Home renovations, especially those involving plentiful of demolition can be a very dusty affair. This nasty dust can easily free flow through your house.</p>
                                                                <div class="comments-reply">
                                                                    <a class="comment-reply-link" href=""><span>Reply</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li class="comment">
                                                        <div>
                                                            <div class="comment-thumb">
                                                                <div class="comment-img"><img src="img/comment-3.png" alt=""></div>
                                                            </div>
                                                            <div class="comment-main-area">
                                                                <div class="comment-wrapper">
                                                                    <div class="comments-meta">
                                                                        <h4>Valentin Lacoste <span class="comments-date">jan 25, 2020 at 8:00</span></h4>
                                                                    </div>
                                                                    <div class="comment-area">
                                                                        <p>Home renovations, especially those involving plentiful of demolition can be a very dusty affair. This nasty dust can easily free flow through your house.</p>
                                                                        <div class="comments-reply">
                                                                            <a class="comment-reply-link" href=""><span>Reply</span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="comment">
                                        <div>
                                            <div class="comment-thumb">
                                                <div class="comment-img"><img src="img/comment-4.png" alt=""></div>
                                            </div>
                                            <div class="comment-main-area">
                                                <div class="comment-wrapper">
                                                    <div class="comments-meta">
                                                        <h4>Kyle Frederick <span class="comments-date">jan 02, 2020 at 8:00</span></h4>
                                                    </div>
                                                    <div class="comment-area">
                                                        <p>Home renovations, especially those involving plentiful of demolition can be a very dusty affair. This nasty dust can easily free flow through your house.</p>
                                                        <div class="comments-reply">
                                                            <a class="comment-reply-link" href=""><span>Reply</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </div> <!-- end comments-section -->

                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Write a Comment</h3>
                                <form method="post" id="commentform" class="comment-form">
                                    <div class="form-textarea">
                                        <textarea id="comment" placeholder="Write Your Comments..."></textarea>
                                    </div>
                                    <div class="form-inputs">
                                        <input placeholder="Website" type="url">
                                        <input placeholder="Name" type="text">
                                        <input placeholder="Email" type="email">
                                    </div>
                                    <div class="form-submit">
                                        <input id="submit" value="Post Comment" type="submit">
                                    </div>
                                </form>
                            </div>
                        </div><!-- /.comments-area --> --}}
                    </div>
                </div>
                <!--/.blog-single-->
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
                            <li><a href="">Serah Terima</a></li>
                            <li><a href="">Pembangunan</a></li>
                            <li><a href="">Informasi</a></li>
                        </ul>
                    </div>
                     <!--categories-->
                    <div class="widget-content">
                        <h4>Recent Posts</h4>
                        <ul class="thumb-post">
                            <li><img src="img/blogsrh1.png" alt="post"><a href="blog-detail">Serah Terima Unit Konsumen | Tahap ke-1</a></li>
                            <li><img src="img/blogsrh-4.png" alt="post"><a href="blog-detail-2">Savana Park 2 Lantai, Solusi Hunian Modern dan Nyaman</a></li>
                            <li><img src="img/gate1.png" alt="post"><a href="blog-detail-3">Savana Park mulai merealisasikan kampanye one-gate system</a></li>
                        </ul>
                    </div>
                    </div>
                    <!--tag clouds-->
                    <div class="widget-content">
                        <h4>Tag Clouds</h4>
                        <ul class="tags">
                            <li><a href="">Serah Terima</a></li>
                            <li><a href="">Pembangunan</a></li>
                            <li><a href="">Informasi</a></li>
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
