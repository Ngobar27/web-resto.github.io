@extends('master/main')
@section('title')
Resto Culinary
@endsection

@section('content')
<!-- ! Navbar Start -->
<nav>
  <a href="index.html" class="brand">Logo</a>
  <div class="toggle"></div>
  <ul class="menu">
    <li class="btn-active"><a href="#home">Home</a></li>
    <li><a href="#dishes">Dishes</a></li>
    <li><a href="#gallery">Gallery</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</nav>
<!-- ! Navbar Finish -->

<!-- ! Image Slider Start -->
<div id="home" class="hero-image">
  <div class="slider">
    <div class="slides">
      <!-- * Input Radio Start -->
      <input type="radio" name="radio-btn" id="radio1">
      <input type="radio" name="radio-btn" id="radio2">
      <input type="radio" name="radio-btn" id="radio3">
      <input type="radio" name="radio-btn" id="radio4">
      <!-- * Input Radio Finish -->
      
      <!-- * Images Start -->
      <div class="slide first">
        <img src="img/slider/1.png" alt="Sliders">
      </div>
      <div class="slide">
        <img src="img/slider/2.png" alt="Sliders">
      </div>
      <div class="slide">
        <img src="img/slider/3.png" alt="Sliders">
      </div>
      <div class="slide">
        <img src="img/slider/4.png" alt="Sliders">
      </div>
      <!-- * Images Finish -->
      
      <!-- * Automatic Navigation Start -->
      <div class="navigation-auto">
        <div class="auto-btn1"></div>
        <div class="auto-btn2"></div>
        <div class="auto-btn3"></div>
        <div class="auto-btn4"></div>
      </div>
      <!-- * Automatic Navigation Finish -->
    </div>
    <!-- * Manual Navigation Start -->
    <div class="navigation-manual">
      <label for="radio1" class="manual-btn"></label>
      <label for="radio2" class="manual-btn"></label>
      <label for="radio3" class="manual-btn"></label>
      <label for="radio4" class="manual-btn"></label>
    </div>
    <!-- * Manual Navigation Finish -->
  </div>
</div>
<!-- ! Image Slider Finish -->

<!-- ! Dishes Start -->
<section id="dishes" class="dishes">
  <div class="heading">
    <h2>Our Dishes</h2>
  </div>
  <div class="content">
    <div class="imgBx thumbnail">
      <img src="img/cewe/cewe1.png" alt="...">
      <div class="overlay"></div>
    </div>
    <div class="imgBx thumbnail">
      <img src="img/cewe/cewe2.png" alt="...">
      <div class="overlay"></div>
    </div>
    <div class="imgBx thumbnail">
      <img src="img/cewe/cewe3.png" alt="...">
      <div class="overlay"></div>
    </div>
    <div class="imgBx thumbnail">
      <img src="img/cewe/cewe4.png" alt="...">
      <div class="overlay"></div>
    </div>
    <div class="imgBx thumbnail">
      <img src="img/cewe/cewe5.png" alt="...">
      <div class="overlay"></div>
    </div>
    <div class="imgBx thumbnail">
      <img src="img/cewe/cewe6.png" alt="...">
      <div class="overlay"></div>
    </div>
  </div>
  <div class="btn">
    <a href="#">View All</a>
  </div>
</section>
<!-- ! Dishes Finish -->

<!-- ! Gallery Start -->
<section id="gallery" class="gallery">
  <div class="heading">
    <h2>Gallery</h2>
  </div>

  <div class="contentGallery">
    <div class="img-left">
      <img src="img/kom/1.png" alt="..." class="mega-img">
    </div>
    <div class="img-right">
      <img src="img/kom/1.png" alt="..." class="thumb">
      <img src="img/kom/2.png" alt="..." class="thumb">
      <img src="img/kom/3.png" alt="..." class="thumb">
      <img src="img/kom/4.png" alt="..." class="thumb">
      <img src="img/kom/5.png" alt="..." class="thumb">
      <img src="img/kom/6.png" alt="..." class="thumb">
      <!-- <img src="img/kom/7.jpg" alt="..." class="thumb"> -->
      <!-- <img src="img/kom/8.jpg" alt="..." class="thumb"> -->
      <!-- <img src="img/kom/9.jpg" alt="..." class="thumb"> -->
      <!-- <img src="img/kom/10.jpg" alt="..." class="thumb"> -->
    </div>
  </div>
</section>
<!-- ! Gallery Finish -->

<!-- ! About Start -->
<section id="about" class="about">
  <div class="heading">
    <h2>About Us</h2>
  </div>
  <div class="row">
    <div class="col-left slider-left">
      <h3>Visi:</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime enim rerum nemo accusantium ipsam, temporibus natus? Ullam doloribus odit nemo maxime. Deserunt illo necessitatibus reprehenderit.
      </p>
      <h3>Misi:</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, doloremque cupiditate deleniti voluptates explicabo commodi aperiam, recusandae quia officiis veniam distinctio totam error repellendus. Nostrum.
      </p>
    </div>
    <div class="col-right slider-right">
      <div class="imgBx">
        <img src="img/kom/7.jpg" alt="...">
      </div>
    </div>
  </div>
</section>
<!-- ! About Finish -->

<!-- ! Contact Start -->
<section id="contact" class="contact">
  <div class="heading">
    <h2>Contact Us</h2>
  </div>

  <div class="contentInfo">
    <div class="contact-left">
      <h3>Contact Info</h3>
      <div class="contactBx">
        <div class="box">
          <div class="icon">
            <i class='bx bxs-map'></i>
          </div>
          <div class="text">
            <h3>Address</h3>
            <p>Jl. Kemanggisan 22 Rt.05/03 Komplek Citra Lestari Baru Blok N nomor 6 Tangerang Kota, Karawaci, Banten 14155</p>
          </div>
        </div>
        <div class="box">
          <div class="icon">
            <i class='bx bxs-phone'></i>
          </div>
          <div class="text">
            <h3>Phone Number</h3>
            <p>+62 812-5569-2202</p>
          </div>
        </div>
        <div class="box">
          <div class="icon">
            <i class='bx bxs-envelope'></i>
          </div>
          <div class="text">
            <h3>Email</h3>
            <p>resto_culiner@gmail.com</p>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-right">
      <h3>Maps Location</h3>
      <div class="maps">
        <a href="#" class="map">
          <img src="img/cewe/cewe2.png" alt="...">
        </a>
      </div>
    </div>
  </div>

  <div class="formBx">
    <div class="form-left">
      <form>
        <input type="text" name="" placeholder="Full Name">
        <input type="email" name="" placeholder="Email">
      </form>
    </div>
    <div class="form-right">
      <form>
        <textarea placeholder="Your Message"></textarea>
      </form>
    </div>
  </div>

  <form class="outSide">
    <input type="submit" value="send">
  </form>
</section>
<!-- ! Contact Finish -->

<!-- ! Footer Start -->
<footer>
  <ul class="sosmed">
    <li>
      <a href="#">
        <img src="img/facebook.png" alt="...">
      </a>
    </li>
    <li>
      <a href="#">
        <img src="img/instagram.png" alt="...">
      </a>
    </li>
    <li>
      <a href="#">
        <img src="img/twitter.png" alt="...">
      </a>
    </li>
  </ul>
  <div class="copy">Copyright &copy 2021. All Right Reserved.</div>
</footer>
<!-- ! Footer Finish -->
@endsection