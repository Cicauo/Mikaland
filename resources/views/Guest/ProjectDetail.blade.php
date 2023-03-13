@extends('Layouts/Index')
@section('Pages')
<section class="page-header padding">
    <div class="container">
        <div class="page-content text-center">
            <h2>Architectural projects</h2>
            <p>Architecture & Interior Html Template.</p>
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
                        <img src="img/project-s-1.jpg" alt="img">
                    </div>
                    <div class="single-carousel">
                        <img src="img/project-s-2.jpg" alt="img">
                    </div>
                    <div class="single-carousel">
                        <img src="img/project-s-3.jpg" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 padding-15">
                <div class="project-single-content">
                    <h2>Rectangular house near italy</h2>
                    <p>Arkit is a different kind of architecture practice. Founded by LoganCee in 1991, we’re an employee-owned firm pursuing a democratic design process that values everyone’s input.</p>
                    <ul class="project-details">
                        <li><span>Architects</span>: José Carpio, Valentin Lacoste, Kyle Frederick</li>
                        <li><span>Location</span>: 962 Fifth Avenue, 3rd Floor New York.</li>
                        <li><span>Category</span>: Architecture, Interior.</li>
                        <li><span>Area</span>: 119.0.563</li>
                        <li><span>Project Year</span>: 2018/2019</li>
                        <li><span>Manufactures</span>: Dynamiclayers architect company.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/.project-single-section-->

<section class="about-section section-2 padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto text-center">
                <h2>about project</h2>
                <p>Isi konten kolom rata tengah di sini</p>
            </div>
        </div>
    </div>
</section>
<!--/.about-section-->

<section class="projects-section padding">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <span>Projects</span>
            <h2>Related works</h2>
        </div>
        <!--/.section-heading-->
        <div id="projects-carousel" class="projects-carousel owl-carousel">
            <div class="project-item">
                <img src="img/project-1.jpg" alt="projects">
                <div class="overlay"></div>
                <a href="#" class="view-icon ajax-popup-link"> <i class="fas fa-expand"></i></a>
                <div class="projects-content">
                    <a href="#" class="category">Interior</a>
                    <h3><a href="#" class="tittle">Rectangular house near italy</a></h3>
                </div>
            </div>
            <div class="project-item">
                <img src="img/project-2.jpg" alt="projects">
                <div class="overlay"></div>
                <a href="#" class="view-icon"> <i class="fas fa-expand"></i></a>
                <div class="projects-content">
                    <a href="#" class="category">Architecture</a>
                    <h3><a href="#" class="tittle">Cathedral of brasilia brasilia</a></h3>
                </div>
            </div>
            <div class="project-item">
                <img src="img/project-3.jpg" alt="projects">
                <div class="overlay"></div>
                <a href="#" class="view-icon"> <i class="fas fa-expand"></i></a>
                <div class="projects-content">
                    <a href="#" class="category">Design</a>
                    <h3><a href="#" class="tittle">Harpa concert hall reykjavik</a></h3>
                </div>
            </div>
            <div class="project-item">
                <img src="img/project-4.jpg" alt="projects">
                <div class="overlay"></div>
                <a href="#" class="view-icon"> <i class="fas fa-expand"></i></a>
                <div class="projects-content">
                    <a href="#" class="category">Architecture</a>
                    <h3><a href="#" class="tittle">Milwauke museum wisconsin</a></h3>
                </div>
            </div>
            <div class="project-item">
                <img src="img/project-5.jpg" alt="projects">
                <div class="overlay"></div>
                <a href="#" class="view-icon"> <i class="fas fa-expand"></i></a>
                <div class="projects-content">
                    <a href="#" class="category">Design</a>
                    <h3><a href="#" class="tittle">The dancing house prague</a></h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/.projects-section-->



<section class="sponsor-section bg-grey">
    <div class="dots"></div>
    <div class="container">
        <div id="sponsor-carousel" class="sponsor-carousel owl-carousel">
            <div class="sponsor-item">
                <img src="img/sponsor1.png" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="img/sponsor2.png" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="img/sponsor3.png" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="img/sponsor4.png" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="img/sponsor5.png" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="img/sponsor6.png" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="img/sponsor7.png" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="img/sponsor8.png" alt="sponsor">
            </div>
        </div>
    </div>
</section>
<!--/.sponsor-section-->
@endsection
