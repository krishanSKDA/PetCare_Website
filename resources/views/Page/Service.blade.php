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
                                <h5><a href="#">Regular Check-ups</a></h5>
                                <p>Routine health exams to  monitor your pet’s well-being.</p>
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
                                <h5><a href="#">Vaccination</a></h5>
                                <p>Immunizations to protect  against common diseases </p>
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
                                <h5><a href="#">Dental Care</a></h5>
                                <p>Teeth cleaning and oral health checks.</p>
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
                                <h5><a href="#">Nutrition Concealing </a></h5>
                                <p>Dial plans and advice  to ensure proper  nutrition.</p>
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
                                <h5><a href="#">Surgical Service </a></h5>
                                <p>Comprehensive surgical care, routine to emergency and compassionate.</p>
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
                                <h5><a href="#">Specialized care </a></h5>
                                <p>Treatment for chronic conditions  and specialized veterinary care.</p>
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
            What vaccination does  my pet need?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Vaccinations against contagious and deadly diseases (such as rabies, canine
            parvovirus, canine distemper, canine bordetella, feline leukemia, feline panleukopenia,
             and other serious diseases) are important to protect your pet's health.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
            How can I prevent my pet  from getting  fleas and  ticks?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Collars such as Seresto will repel fleas and ticks, and even prevent ticks from attaching,
            but they must be applied tightly enough to have skin contact. Many topical options containing
            permethrin (e.g. K9 Advantix II, Vectra 3D) will repel and prevent tick attachment.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
            How often should I groom my pet?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Dogs with long, thick fur may need to be groomed every 4-6 weeks, while dogs with short or
            fine hair may only need to go every 8-12 weeks. It's important to keep up with your dog's
            grooming program as if left too long, their hair may become matted and cause irritation or
            infection and need to be shaven.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
            What should I do if my pet gets sick?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Report any worsening symptoms or new symptoms to your veterinarian immediately, as these could
            indicate that your pet's illness has become more serious. New symptoms could also be side effects
            of your pet's medication. Your veterinarian may want to re-examine your pet, or simply change your pet's medication.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
            How often should I feed my pet?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            You can feed your dog one or two times a day. It's best to do it twice daily at 8-12 hour intervals.
            If you're doing it this way, split the suggested amount found on the bag or you'll feed it double what it needs.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
            How can I train my pet?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Give your pet a lot of attention and a variety of rewards for each correct response. Only reinforce a
            behavior you want your pet to repeat; don't call attention to incorrect behavior. With a little know-how and
            a lot of patience, you can train your pet to perform many behaviors.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
            How much exercise does my pet need?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            A general rule of thumb is that dogs should get between 30 minutes and 2 hours of exercise every day. Larger breed dogs,
            like retrievers, collies, and shepherds will need the most exercise; while smaller and toy breed dogs, like terriers and
            Maltese, don't require as much daily physical activity.A general rule of thumb is that dogs should get between 30 minutes
            and 2 hours of exercise every day. Larger breed dogs, like retrievers, collies, and shepherds will need the most exercise;
            while smaller and toy breed dogs, like terriers and Maltese, don't require as much daily physical activity.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
            How do  I keep my pet’s teeth clean?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            <b>Maintaining healthy teeth</b><br>
                1.Feed them the right food - some owners favour wet foods for their dog over dry.<br>
                2.Every dog is unique, so there's never one diet that will suit all dogs.<br>
                3.Brush your dog's teeth regularly.<br>
                4.Dental chews and treats are also a good way of helping to keep your dog's teeth clean.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
            How can I prepare for emergencies?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Prepare to be self-sufficient for at least three days by putting together an emergency kit,
            including: non-perishable food, water, a flashlight, a portable, battery-operated radio or television,
            batteries, medicines, anti-bacterial hand wipes or gel, first aid kit, money, seasonal clothing, and sanitation supplies.
          </p>
        </div>
      </div>
    </div>
          <!-- End FAQ -->


        <!--? contact-animal-owner Start -->
        @include('components.Anytimetocall')
        <!-- contact-animal-owner End -->
    </main>

<div class="spon_container">
  <div class="header">
    <h2>Partner With Us</h2>
  </div>
  <div class="partners">
    <img src="./assets/img/logo/amgen.png" alt="AMGEN logo" class="partner-logo">
    <img src="./assets/img/logo/Allergan_Logo.png" alt="Allergan logo" class="partner-logo">
    <img src="./assets/img/logo/abbott.png" alt="Abbott logo" class="partner-logo">
    <img src="./assets/img/logo/Logo_Sanofi_(2022).png" alt="Sanofi logo" class="partner-logo">
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
