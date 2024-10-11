<!doctype html>
<html class="no-js" lang="zxx">
<head>
@include('components.meta')
    <!-- CSS here -->
   @include("Libraries.libraries")
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
       @include('components.Preloader')
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
  @include('components.header')
  </header>
    <main>
        <!--? Slider Area Start-->
        <div class="slider-area">
            <div class="slider-active dot-style">
                <!-- Slider Single -->
                <div class="single-slider d-flex align-items-center slider-height">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-8 col-md-10 ">
                                <!-- Video icon -->
                                <div class="video-icon">
                                    <a class="popup-video btn-icon" href="assets/video/petcarevideo.mp4" data-animation="bounceIn" data-delay=".4s">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay=".3s">We help to groom your pet</span>
                                    <h1 data-animation="fadeInUp" data-delay=".3s">We Care Your Pets.</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">Our team of dedicated veterinarians prioritizes providing quality pet healthcare, including routine check-ups, vaccinations,
                                         advanced diagnostics, and surgical procedures, ensuring your furry family members receive comprehensive and compassionate care.</p>
                                    <a href="/ContactUs" class="hero-btn" data-animation="fadeInLeft" data-delay=".3s">Contact Now<i class="ti-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Single -->
                <div class="single-slider d-flex align-items-center slider-height">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-8 col-md-10 ">
                                <!-- Video icon -->
                                <div class="video-icon">
                                    <a class="popup-video btn-icon" href="assets/video/petcarevideo.mp4" data-animation="bounceIn" data-delay=".4s">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay=".3s">We help to groom your pet</span>
                                    <h1 data-animation="fadeInUp" data-delay=".3s">We Care Your Pets.</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">Our veterinary clinic is dedicated to exceptional pet healthcare, offering wellness exams, vaccinations, advanced diagnostics, and surgeries.
                                        We ensure compassionate and supportive care for your beloved pets.</p>
                                    <a href="/ContactUs" class="hero-btn" data-animation="fadeInLeft" data-delay=".3s">Contact Now<i class="ti-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider Social -->
            <div class="button-text d-none d-md-block">
            <span>Scroll</span>
            </div>
        </div>
        <!-- Slider Area End -->
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
                                <h5><a href="">Regular Check-ups</a></h5>
                                <p>Routine health exams to  monitor your pet’s well-being.</p>
                                <a href="/Service" style="color:black">Book Now <i class="fa-solid fa-arrow-right"></i></a>
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
                                <a href="/Service" style="color:black">Book Now <i class="fa-solid fa-arrow-right"></i></a>
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
                                <a href="/Service" style="color:black">Book Now <i class="fa-solid fa-arrow-right"></i></a>
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
                                <a href="/Service" style="color:black">Book Now <i class="fa-solid fa-arrow-right"></i></a>
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
                                <a href="/Service" style="color:black">Book Now<i class="fa-solid fa-arrow-right"></i></a>
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
                                <a href="/Service" style="color:black">Book Now <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Services End -->
        <!--? About Area Start-->
<div class="about-area fix">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Main Content -->
            <div class="col-lg-8 text-center">
                <div class="about-details">
                    <!-- Section Title -->
                    <div class="section-tittle mb-50">
                        <h2>We are committed for<br>better service</h2>
                    </div>
                    <div class="about-more">
                        <p class="pera-top" >we prioritize the well-being and happiness of your pets. <br>you can trust us to provide the best care possible for your beloved companion.</p>
                        <p class="mb-65 pera-bottom">Our commitment extends beyond just providing products; it’s about creating a supportive community and delivering exceptional service.</p>
                        <a href="/About" class="btn">Read More</a>
                    </div>
                </div>
                <!-- Info Boxes -->
                <div class="row justify-content-center">
                    <div class="col-md-4 text-center">
                        <div class="info-box">
                            <!-- <h3>354</h3>
                            <p>Success<br>Treatment</p> -->
                            <h3 class="count" data-count="354">0</h3>
                            <p>Success<br>Treatment</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="info-box">
                            <!-- <h3>250+</h3>
                            <p>Success<br>Surgery</p> -->
                            <h3 class="count" data-count="250">0</h3>
                            <p>Success<br>Surgery</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- About Area End-->
        <!--? Gallery Area Start -->
        <div class="gallery-area section-padding30">
            <div class="container fix">
                <div class="row justify-content-sm-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <span>Our Recent Photos</span>
                            <h2>Pets Photo Gallery</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-gallery mb-30">
                            <!-- <a href="assets/img/gallery/gallery1.png" class="img-pop-up">View Project</a> -->
                            <div class="gallery-img size-img" style="background-image: url(assets/img/gallery/gallery1.png);"></div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-6">
                        <div class="single-gallery mb-30">
                            <div class="gallery-img size-img" style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-6">
                        <div class="single-gallery mb-30">
                            <div class="gallery-img size-img" style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-gallery mb-30">
                            <div class="gallery-img size-img" style="background-image: url(assets/img/gallery/gallery4.png);"></div>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-gallery mb-30">
                            <div class="gallery-img size-img" style="background-image: url(assets/img/gallery/gallery4.png);"></div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-6">
                        <div class="single-gallery mb-30">
                            <div class="gallery-img size-img" style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery Area End -->
        <!--? Contact form Start -->
        <!-- <div class="contact-form-main pb-top">
            <div class="container">
                <div class="row justify-content-md-end">
                    <div class="col-xl-7 col-lg-7">
                        <div class="form-wrapper">
                            
                            <div class="form-tittle">
                                <div class="row ">
                                    <div class="col-xl-12">
                                        <div class="section-tittle section-tittle2 mb-70">
                                            <h2>World's Leading Law Consultency Agency !</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <form id="contact-form" action="#" method="POST">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box user-icon mb-30">
                                            <input type="text" name="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box email-icon mb-30">
                                            <input type="text" name="email" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-30">
                                        <div class="select-itms">
                                            <select name="select" id="select2">
                                                <option value="">Health Law</option>
                                                <option value="">saiful islam</option>
                                                <option value="">Arafath Miya</option>
                                                <option value="">Shakil Miya</option>
                                                <option value="">Tamim Sharker</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box subject-icon mb-30">
                                            <input type="Email" name="subject" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-box message-icon mb-65">
                                            <textarea name="message" id="message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="submit-info">
                                            <button class="btn submit-btn2" type="submit">Submit Now</button>
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="shape-dog">
                                    <img src="assets/img/hero/shape1.png" alt="">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="from-left d-none d-lg-block">
                <img src="assets/img/hero/contact_form.jpg" alt="">
            </div>
        </div> -->
        <!-- Contact form End -->
        <!--? Team Start -->
        <!-- <div class="team-area section-padding30">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!- Section Tittle -->
                        <!-- <div class="section-tittle text-center mb-70">
                            <span>Our Professional members </span>
                            <h2>Our Team Mambers</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!- single Tem -->

                    <!--<div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="assets/img/gallery/team1.png" alt="">
                            </div>
                            <div class="team-caption">
                                <span>Mike Janathon</span>
                                <h3><a href="#">Doctor</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="assets/img/gallery/team2.png" alt="">
                            </div>
                            <div class="team-caption">
                                <span>Mike J Smith</span>
                                <h3><a href="#">Doctor</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="assets/img/gallery/team3.png" alt="">
                            </div>
                            <div class="team-caption">
                                <span>Pule W Smith</span>
                                <h3><a href="#">Doctor</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Team End -->
        <!--? Testimonial Start -->
        

         <div class="testimonial-area testimonial-padding section-bg" >
         
            <div class="container">
            
                <!--Testimonial contents -->
                <div class="row d-flex justify-content-center">
            
                
                    <div class="col-xl-8 col-lg-8 col-md-10">
                        <div class="h1-testimonial-active dot-style">
                            <!--Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <div class="testimonial-caption ">
                                   
                                    <!-- founder -->
                                    <div class="testimonial-founder">
                                        <div class="founder-img mb-40">
                                            <img src="assets/img/gallery/cus1.jpeg" alt="">
                                            <span>Sandeepa Dasanayaka</span>
                                            <p>Lawyer</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“I can't say enough good things about PetCare! My dog, Bella, always comes back happy and well-groomed. The staff is incredibly friendly and genuinely cares about the pets. They offer a variety of services, from grooming to overnight stays, and I've been impressed with all of them. I highly recommend PetCare to any pet owner looking for reliable and loving care for their furry friends”</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                             <div class="single-testimonial text-center">
                                <div class="testimonial-caption ">

                                    <div class="testimonial-founder">
                                        <div class="founder-img mb-40">
                                            <img src="assets/img/gallery/cus2.png" alt="">
                                            <span>Gayani Perera</span>
                                            <p>Artist</p>
                                        </div>
                                    </div>
                                     <div class="testimonial-top-cap">
                                        <p>“PetCare has been a lifesaver for my busy schedule. I often have to travel for work, and knowing that my cat, Whiskers, is in good hands gives me peace of mind. The facility is clean and well-maintained, and the staff is attentive. My only minor complaint is that sometimes it's hard to get an appointment during peak times, but the quality of care is worth the wait. ”</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial text-center">
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder">
                                        <div class="founder-img mb-40">
                                            <img src="assets/img/gallery/team2.png" alt="">
                                            <span>Vijay Rathna</span>
                                            <p>Doctor</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“Absolutely fantastic service! My dog, Max, is usually anxious when I'm away, but the team at PetCare made him feel right at home. They sent me regular updates and pictures, which I really appreciated. Max looked so happy in all the photos! Their grooming service is top-notch too. Max came back looking great and smelling fresh. I highly recommend PetCare!”</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                     <div class="testimonial-founder">
                                        <div class="founder-img mb-40">
                                            <img src="assets/img/gallery/team3.png" alt="">
                                            <span>Shalika</span>
                                            <p>Doctor</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“PetCare is wonderful. My cat, Thumper, needed a place to stay while I was on vacation, and I was worried about finding a place that understood how to care for rabbits. The staff here was knowledgeable and took great care of Thumper. He was happy and healthy when I returned. The only downside is that the prices are a bit higher than some other places, but the quality of care justifies the cost.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        <!--? Blog start -->
        <div class="home_blog-area section-padding30">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <span>Our recent news</span>
                            <h2>Our Recent Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-blogs mb-30">
                            <div class="blog-img">
                                <img src="assets/img/gallery/blog1.png" alt="">
                            </div>
                            <div class="blogs-cap">
                                <div class="date-info">
                                    <span>Pet Surgery</span>
                                    <p>March 20, 2024</p>
                                </div>
                                <h4>Routine  and emergency surgeries</h4>
                                <a href="/Blog" class="read-more1">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-blogs mb-30">
                            <div class="blog-img">
                                <img src="assets/img/gallery/blog2.png" alt="">
                            </div>
                            <div class="blogs-cap">
                                <div class="date-info">
                                    <span>Pet Vaccination</span>
                                    <p>May 10, 2024</p>
                                </div>
                                <h4>Immunizations to protect  against common diseases</h4>
                                <a href="/Blog" class="read-more1">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-blogs mb-30">
                            <div class="blog-img">
                                <img src="assets/img/gallery/blog3.png" alt="">
                            </div>
                            <div class="blogs-cap">
                                <div class="date-info">
                                    <span>Pet Specialized care</span>
                                    <p>June 26, 2020</p>
                                </div>
                                <h4>Specialized chronic condition treatment</h4>
                                <a href="/Blog" class="read-more1">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->
        <!--? contact-animal-owner Start -->
        @include('components.Anytimetocall')
        <!-- contact-animal-owner End -->
    </main>

    @include('components.partners')


    <footer >
        <!-- Footer Start-->
        @include('components.footer')
        <!-- footer-bottom area -->
        <!-- <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex align-items-center">
                         <div class="col-xl-12 ">

                         </div>
                     </div>
                </div>
            </div>
        </div> -->
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
