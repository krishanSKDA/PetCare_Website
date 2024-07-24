<!doctype html>
<html class="no-js" lang="zxx">
<head>
@include('components.meta')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- CSS here -->
    @include("Libraries.libraries")
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
    @include('components.Preloader')
    </div>
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
       @include('components.header')
        <!-- Header End -->
    </header>
    <main> 
        <!-- Hero Area Start -->
        <div class="slider-area4 slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>Services</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->
         <!-- Book Appointment -->
  <section class="appointment">
         <div class="appointment_container">
    <div class="left-section">
        <img src="assets/img/logo/Newlogo.png" alt="Pet Care Logo">
    </div>
    <div class="right-section">
       <div class="head">
       <h1>Welcome to Pet Care</h1>
       <p>Schedule your pet's appointment</p>
       </div>
        <form id="appointment-form">
           <div class="content">
           <div class="input-group">
                <label for="owner-name">Owner's Full Name</label>
                <input type="text" id="owner-name" name="owner-name" required placeholder="Enter your name">
            </div>
            <div class="input-group">
                <label for="pet-name">Pet's Name</label>
                <input type="text" id="pet-name" name="pet-name" required placeholder="Enter your pet's name">
            </div>
           </div>
           <div class="content">
           <div class="input-group">
                <label for="pet-type" >Pet Type</label>
                <input type="text" id="pet-type" name="pet-type" required>
            </div>
            <div class="input-group">
                <label for="appointment-date">Appointment Date</label>
                <input type="date" id="appointment-date" name="appointment-date" required>
            </div>
           </div>
            <div class="content">
            <div class="input-group">
                <label for="appointment-time">Appointment Time</label>
                
                <input type="time" id="appointment-time" name="appointment-time" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="Enter your Email address">
            </div>
            </div>
            <div class="content">
            <div class="input-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required placeholder="Enter your phone number">
            </div>
            <div class="input-group">
                <label for="service">Service Required</label>
                <select id="service" name="service" required>
                    <option value="grooming">Grooming</option>
                    <option value="vaccination">Vaccination</option>
                    <option value="checkup">Checkup</option>
                    <option value="surgery">Surgery</option>
                </select>
            </div>
            </div>
            <button class="app_btn" type="submit">Schedule Appointment</button>
        </form>
        <p>Already have an appointment? <a href="#">Check Status</a></p>
    </div>
</div>
</section>

          <!-- End Appoinment -->
        <!--? Our Services Start -->
        <div class="our-services section-padding30">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <span>Our Professional Services</span>
                            <h2>Best Pet Care Services</h2>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-animal-kingdom"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Pet Boarding</a></h5>
                                <p>consectetur adipiscing elit, serfd dgo eiusmod tempor incididunt ut ore et dolore magna aliqua.</p>
                                <a href="" style="color:black">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                 <span class="flaticon-animals"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Pet Treatment</a></h5>
                                <p>consectetur adipiscing elit, serfd dgo eiusmod tempor incididunt ut ore et dolore magna aliqua.</p>
                                <a href="" style="color:black">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                               <span class="flaticon-animals-1"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Vaccinations</a></h5>
                                <p>consectetur adipiscing elit, serfd dgo eiusmod tempor incididunt ut ore et dolore magna aliqua.</p>
                                <a href="" style="color:black">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                 <span class="flaticon-animals"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Pet Treatment</a></h5>
                                <p>consectetur adipiscing elit, serfd dgo eiusmod tempor incididunt ut ore et dolore magna aliqua.</p>
                                <a href="" style="color:black">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                               <span class="flaticon-animals-1"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Vaccinations</a></h5>
                                <p>consectetur adipiscing elit, serfd dgo eiusmod tempor incididunt ut ore et dolore magna aliqua.</p>
                                <a href="" style="color:black">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-animal-kingdom"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Pet Boarding</a></h5>
                                <p>consectetur adipiscing elit, serfd dgo eiusmod tempor incididunt ut ore et dolore magna aliqua.</p>
                                <a href="" style="color:black">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Services End -->
         <!-- FAQ -->

    <div class="wrapper">
      <p>FAQ</p>
      <h1>Frequently Asked Questions</h1>

      <div class="faq">
        <button class="accordion">
          Add content 01
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
           add..................
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
        Add content 02
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
            saepe molestiae distinctio asperiores cupiditate consequuntur dolor
            ullam, iure eligendi harum eaque hic corporis debitis porro
            consectetur voluptate rem officiis architecto.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
        Add content 03
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
            saepe molestiae distinctio asperiores cupiditate consequuntur dolor
            ullam, iure eligendi harum eaque hic corporis debitis porro
            consectetur voluptate rem officiis architecto.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
        Add content 04
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
            saepe molestiae distinctio asperiores cupiditate consequuntur dolor
            ullam, iure eligendi harum eaque hic corporis debitis porro
            consectetur voluptate rem officiis architecto.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
        Add content 05
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
            saepe molestiae distinctio asperiores cupiditate consequuntur dolor
            ullam, iure eligendi harum eaque hic corporis debitis porro
            consectetur voluptate rem officiis architecto.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
        Add content 06
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
            saepe molestiae distinctio asperiores cupiditate consequuntur dolor
            ullam, iure eligendi harum eaque hic corporis debitis porro
            consectetur voluptate rem officiis architecto.
          </p>
        </div>
      </div>
    </div>
          <!-- End FAQ -->

         
        <!--? contact-animal-owner Start -->
        <div class="contact-animal-owner section-bg" style="background: linear-gradient(to bottom, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('assets/img/hero/call.jpg') no-repeat center center/cover;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact_text text-center">
                    <div class="section_title text-center">
                        <h3 style="color: white;">Any time you can call us!</h3>
                        <p style="color: white;">Because we know that even the best technology is only as good as the people behind it. 24/7 tech support.</p>
                    </div>
                    <div class="contact_btn d-flex align-items-center justify-content-center">
                        <a href="contact.html" class="btn white-btn">Contact Us</a>
                        <p style="color: white;">Or<a href="#"> +880 4664 216</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- contact-animal-owner End -->
    </main>
        
<div class="spon_container">
  <div class="header">
    <h2>Partner With Us</h2>
  </div>
  <div class="partners">
    <img src="#" alt="AMGEN logo" class="partner-logo">
    <img src="#" alt="Allergan logo" class="partner-logo">
    <img src="#" alt="Abbott logo" class="partner-logo">
    <img src="#" alt="Sanofi logo" class="partner-logo">
  </div>
  <div class="newsletter-header">
    <h3>Subscribe to our newsletter</h3>
  </div>
  <div class="newsletter-form">
    <input type="email" placeholder="Enter your email" class="email-input">
    <button class="subscribe-button">Subscribe</button>
  </div>
</div>
    <footer>
        <!-- Footer Start-->
    @include('components.footer')
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
    @include('Scripts.scripts')
        
    </body>
</html>