@extends('web.main')


@section('main-section')

<div class="hero_area">
  <div class="hero_bg_box">
    <img src="images/hero-bg.jpg" alt="">
  </div>
  <!-- header section strats -->
  <header class="header_section">
    <div class="header_top">
      <div class="container-fluid header_top_container">

        <div class="contact_nav">
          <a href="">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <span>
              Location
            </span>
          </a>
          <a href="">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <span>
              Call : +01 123455678990
            </span>
          </a>
          <a href="">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span>
              demo@gmail.com
            </span>
          </a>
        </div>
        <div class="social_box">
          <a href="">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="header_bottom">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand " href="home"> Finter </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="team"> Team </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    Login
                  </span>
                </a>
              </li>
              <form class="form-inline justify-content-center">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- end header section -->
  <!-- slider section -->
  <section class="slider_section ">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container ">
            <div class="row">
              <div class="col-lg-10 col-md-11 mx-auto">
                <div class="detail-box">
                  <h1>
                    We Provide <br>
                    Welding Services
                  </h1>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio omnis fugit, sed tempora praesentium commodi error, hic recusandae repudiandae neque ad molestias, atque veritatis labore quae eveniet autem in
                  </p>
                  <div class="btn-box">
                    <a href="" class="btn1">
                      Contact Us
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container ">
            <div class="row">
              <div class="col-lg-10 col-md-11 mx-auto">
                <div class="detail-box">
                  <h1>
                    We Provide <br>
                    Welding Services
                  </h1>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio omnis fugit, sed tempora praesentium commodi error, hic recusandae repudiandae neque ad molestias, atque veritatis labore quae eveniet autem in
                  </p>
                  <div class="btn-box">
                    <a href="" class="btn1">
                      Contact Us
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container ">
            <div class="row">
              <div class="col-lg-10 col-md-11 mx-auto">
                <div class="detail-box">
                  <h1>
                    We Provide <br>
                    Welding Services
                  </h1>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio omnis fugit, sed tempora praesentium commodi error, hic recusandae repudiandae neque ad molestias, atque veritatis labore quae eveniet autem in
                  </p>
                  <div class="btn-box">
                    <a href="" class="btn1">
                      Contact Us
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel_btn-box">
        <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
          <i class="fa fa-arrow-left" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
          <i class="fa fa-arrow-right" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  <!-- end slider section -->
</div>


<!-- service section -->

<section class="service_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center ">
      <h2 class="">
        Our Services
      </h2>
      <p class="col-lg-8 px-0">
        If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
      </p>
    </div>
    <div class="service_container">
      <div class="carousel-wrap ">
        <div class="service_owl-carousel owl-carousel">
          <div class="item">
            <div class="box ">
              <div class="img-box">
                <img src="images/s1.png" alt="" />
              </div>
              <div class="detail-box">
                <h5>
                  Home Welding
                </h5>
                <p>
                  when looking at its layout. The point of using Lorem Ipsum is
                  that it has a more-or-less normal
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box ">
              <div class="img-box">
                <img src="images/s4.png" alt="" />
              </div>
              <div class="detail-box">
                <h5>
                  Machine Welding
                </h5>
                <p>
                  when looking at its layout. The point of using Lorem Ipsum is
                  that it has a more-or-less normal
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box ">
              <div class="img-box">
                <img src="images/s6.png" alt="" />
              </div>
              <div class="detail-box">
                <h5>
                  Car Welding
                </h5>
                <p>
                  when looking at its layout. The point of using Lorem Ipsum is
                  that it has a more-or-less normal
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box ">
              <div class="img-box">
                <img src="images/s1.png" alt="" />
              </div>
              <div class="detail-box">
                <h5>
                  Home Welding
                </h5>
                <p>
                  when looking at its layout. The point of using Lorem Ipsum is
                  that it has a more-or-less normal
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box ">
              <div class="img-box">
                <img src="images/s4.png" alt="" />
              </div>
              <div class="detail-box">
                <h5>
                  Machine Welding
                </h5>
                <p>
                  when looking at its layout. The point of using Lorem Ipsum is
                  that it has a more-or-less normal
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box ">
              <div class="img-box">
                <img src="images/s6.png" alt="" />
              </div>
              <div class="detail-box">
                <h5>
                  Car Welding
                </h5>
                <p>
                  when looking at its layout. The point of using Lorem Ipsum is
                  that it has a more-or-less normal
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="btn-box">
      <a href="">
        Read More
      </a>
    </div>
  </div>
</section>

<!-- service section ends -->

<!-- about section -->

<section class="about_section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5 offset-md-1">
        <div class="detail-box pr-md-2">
          <div class="heading_container">
            <h2 class="">
              About Us
            </h2>
          </div>
          <p class="detail_p_mt">
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, orThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, orThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or
          </p>
          <a href="about.html" class="">
            Read More
          </a>
        </div>
      </div>
      <div class="col-md-6 px-0">
        <div class="img-box ">
          <img src="images/about-img.jpg" class="box_img" alt="about img">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- about section ends -->

<!-- team section -->

<section class="team_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Our Team
      </h2>
      <p>
        Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a euismod suspendisse vel, sed quam nulla mauris
        iaculis. Erat eget vitae malesuada, tortor tincidunt porta lorem lectus.
      </p>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6 mx-auto">
        <div class="box">
          <div class="img-box">
            <img src="images/t1.jpg" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Martin Anderson
            </h5>
            <h6 class="">
              supervisor
            </h6>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mx-auto">
        <div class="box">
          <div class="img-box">
            <img src="images/t2.jpg" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Denny Butler
            </h5>
            <h6 class="">
              supervisor
            </h6>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mx-auto">
        <div class="box">
          <div class="img-box">
            <img src="images/t3.jpg" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Nathan Mcpherson
            </h5>
            <h6 class="">
              supervisor
            </h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end team section -->

<!-- contact section -->
<section class="contact_section ">
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-6 px-0">
        <div class="img-box ">
          <img src="images/contact-img.jpg" class="box_img" alt="about img">
        </div>
      </div>
      <div class="col-md-5 mx-auto">
        <div class="form_container">
          <div class="heading_container heading_center">
            <h2>Get In Touch</h2>
          </div>
          <form action="">
            <div class="form-row">
              <div class="form-group col">
                <input type="text" class="form-control" placeholder="Your Name" />
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-lg-6">
                <input type="text" class="form-control" placeholder="Phone Number" />
              </div>
              <div class="form-group col-lg-6">
                <select name="" id="" class="form-control wide">
                  <option value="">Select Service</option>
                  <option value="">Service 1</option>
                  <option value="">Service 2</option>
                  <option value="">Service 3</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <input type="email" class="form-control" placeholder="Email" />
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <input type="text" class="message-box form-control" placeholder="Message" />
              </div>
            </div>
            <div class="btn_box">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end contact section -->

<!-- client section -->

<section class="client_section layout_padding">
  <div class="container ">
    <div class="heading_container heading_center">
      <h2>
        Testimonial
      </h2>
      <hr>
    </div>
    <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
              <div class="client_container ">
                <div class="img-box">
                  <img src="images/client.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Jone Mark
                  </h5>
                  <p>
                    Editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by
                  </p>
                  <span>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
              <div class="client_container ">
                <div class="img-box">
                  <img src="images/client.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Jone Mark
                  </h5>
                  <p>
                    Editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by
                  </p>
                  <span>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
              <div class="client_container ">
                <div class="img-box">
                  <img src="images/client.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Jone Mark
                  </h5>
                  <p>
                    Editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by
                  </p>
                  <span>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel_btn-box">
        <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
          <span>
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
          </span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
          <span>
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
          </span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- end client section -->

<!-- info section -->
<section class="info_section ">
  <div class="container">
    <div class="info_top">
      <div class="row">
        <div class="col-md-3 ">
          <a class="navbar-brand" href="index.html">
            Finter
          </a>
        </div>
        <div class="col-md-5 ">
          <div class="info_contact">
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                +01 1234567890
              </span>
            </a>
          </div>
        </div>
        <div class="col-md-4 ">
          <div class="social_box">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="info_bottom">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="info_detail">
            <h5>
              Company
            </h5>
            <p>
              Randomised words which don't look even slightly believable. If you are going to use a passage of
              Lorem
              Ipsum, you need to be sure
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="info_form">
            <h5>
              NEWSLETTER
            </h5>
            <form action="">
              <input type="text" placeholder="Enter Your Email" />
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="info_detail">
            <h5>
              Services
            </h5>
            <p>
              Randomised words which don't look even slightly believable. If you are going to use a passage of
              Lorem
              Ipsum, you need to be sure
            </p>
          </div>
        </div>
        <div class="col-lg-2 col-md-6">
          <div class="">
            <h5>
              Useful links
            </h5>
            <ul class="info_menu">
              <li>
                <a href="home">
                  Home
                </a>
              </li>
              <li>
                <a href="about">
                  About
                </a>
              </li>
              <li>
                <a href="service">
                  Services
                </a>
              </li>
              <li>
                <a href="team">
                  Team
                </a>
              </li>
              <li class="mb-0">
                <a href="contact">
                  Contact Us
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end info_section -->


@endsection