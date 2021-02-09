@extends('master/main')
@section('title')
Resto Culinary
@endsection

@section('content')
<!-- ! Navbar - Start -->
<div class="navbar-fixed">
    <nav class="light-blue darken-2">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Logo</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#dishes">Dishes</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<!-- * Sidenav -->
<ul class="sidenav" id="mobile-demo">
    <li><a href="#dishes">Dishes</a></li>
    <li><a href="#gallery">Gallery</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#contact">Contact</a></li>
</ul>
<!-- ! Navbar - Finish -->

<!-- ! Image Opening - Start -->
<div class="slider">
    <ul class="slides">
        <li>
            <img src="img/slider/1.png">
            <div class="caption left-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
        </li>
        <li>
            <img src="img/slider/2.png">
            <div class="caption center-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
        </li>
        <li>
            <img src="img/slider/3.png">
            <div class="caption right-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
        </li>
    </ul>
</div>
<!-- ! Image Opening - Finish -->

<!-- ! Dishes - Start -->
<section id="dishes" class="dishes scrollspy">
    <div class="container">
        <h3 class="light center grey-text text-darken-3">Our <span>Dishes</span></h3>
        <hr class="hr">
        <div class="row">
            <div class="col m4 s12">
                <img src="img/cewe/cewe1.png" alt="Dishes" class="responsive-img materialboxed">
            </div>
            <div class="col m4 s12">
                <img src="img/cewe/cewe2.png" alt="Dishes" class="responsive-img materialboxed">
            </div>
            <div class="col m4 s12">
                <img src="img/cewe/cewe3.png" alt="Dishes" class="responsive-img materialboxed">
            </div>
        </div>

        <div class="row">
            <div class="col m4 s12">
                <img src="img/cewe/cewe4.png" alt="Dishes" class="responsive-img materialboxed">
            </div>
            <div class="col m4 s12">
                <img src="img/cewe/cewe5.png" alt="Dishes" class="responsive-img materialboxed">
            </div>
            <div class="col m4 s12">
                <img src="img/cewe/cewe6.png" alt="Dishes" class="responsive-img materialboxed">
            </div>
        </div>

        <div class="heading">
            <a href="#" class="btn blue darken-3">View More</a>
        </div>
    </div>
</section>
<!-- ! Dishes - Finish -->

<!-- ! Gallery - Start -->
<section id="gallery" class="gallery scrollspy">
    <div class="container">
        <h3 class="light center grey-text text-darken-3">Gallery</h3>
        <hr class="hr">
        <div class="row">
            <div class="col m3 s12">
                <img src="img/portfolio/1.png" alt="Gallery" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
                <img src="img/portfolio/2.png" alt="Gallery" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
                <img src="img/portfolio/3.png" alt="Gallery" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
                <img src="img/portfolio/4.png" alt="Gallery" class="responsive-img materialboxed">
            </div>
        </div>

        <div class="row">
            <div class="col m3 s12">
                <img src="img/portfolio/5.png" alt="Gallery" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
                <img src="img/portfolio/6.png" alt="Gallery" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
                <img src="img/portfolio/7.jpg" alt="Gallery" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
                <img src="img/portfolio/8.jpg" alt="Gallery" class="responsive-img materialboxed">
            </div>
        </div>

        <div class="row">
            <div class="col m3 s12"></div>
            <div class="col m3 s12">
                <img src="img/portfolio/9.jpg" alt="Gallery" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
                <img src="img/portfolio/10.jpg" alt="Gallery" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12"></div>
        </div>
    </div>
</section>
<!-- ! Gallery - Finish -->

<!-- ! About - Start -->
<section id="about" class="about">
    <div class="container">
        <h3 class="light center grey-text text-darken-3">About Us</h3>
        <hr class="hr">
        <div class="row">
            <div class="col m6">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus sunt iusto dolores aliquid enim dolorem aut veniam, adipisci asperiores nemo quia quaerat magni voluptate quas possimus ad at ut cum, repellendus optio. Tempore eum pariatur delectus dicta ab, odit quam, possimus culpa aliquam eligendi asperiores nesciunt illum? Magnam, fugiat natus?
                    <br><br>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. In facere accusantium debitis corporis ullam ad, nihil illo aspernatur eum nobis, commodi corrupti minima, impedit consequatur magnam provident. Ipsum porro, repellat nihil voluptatibus illum accusamus nam necessitatibus recusandae itaque neque natus doloremque iusto quod esse eaque quam rem fugit! Corporis, harum.
                </p>
            </div>
            <div class="col m6">
                <img src="img/portfolio/3.png" alt="Gallery" class="responsive-img materialboxed">
            </div>
        </div>
    </div>
</section>
<!-- ! About - Finish -->
@endsection