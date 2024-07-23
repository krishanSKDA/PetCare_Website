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
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
      @include('components.header')
        <!-- Header End -->
    </header>
    <main>
        <!-- Hero Area Start -->
        <div class="slider-area5 slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>Blog</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->
        <!--================Blog Area =================-->

        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="assets/img/our_blog/blog.jpg" alt="">

                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="single-blog.html">
                                        <h2>Let's get your pet the care it deserves</h2>
                                    </a>
                                    <p> Our dedicated team is here to provide exceptional medical attention and compassionate support.
                                        Together, we'll ensure your furry friend receives the best possible care and attention.</p>
                                </div>
                            </article>

                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="assets/img/our_blog/dc.jpg" alt="">
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="single-blog.html">
                                        <h2>How Much Does a Dog MRI Cost?</h2>
                                    </a>
                                    <p>Understanding the cost of an MRI for dogs is crucial for pet owners who want to
                                        ensure the best possible care for their furry friends. Whether your dog is showing
                                        signs of a serious health issue or your vet has recommended an MRI for a thorough diagnosis,
                                        knowing what to expect financially can help you prepare.</p>
                                        <a href="#" class="blog_item_date">
                                            <h6>Learn More</h6>
                                        </a>
                                </div>
                            </article>

                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="assets/img/our_blog/ACL.jpg" alt="">
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="single-blog.html">
                                        <h2>How Much Is ACL Surgery For Dogs?</h2>
                                    </a>
                                    <p>When a dog suffers a torn ACL, it's not just a physical injury
                                        — it's an emotional and financial whirlwind for the pet's loving owner.
                                        The heartache of seeing your beloved companion in distress is often compounded
                                        by stress over the cost of care that they so rightly deserve.</p>
                                        <a href="#" class="blog_item_date">
                                            <h6>Learn More</h6>
                                        </a>
                                </div>
                            </article>


                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="assets/img/our_blog/Lipoma.jpg" alt="">
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="single-blog.html">
                                        <h2>How Much Does it Cost to Remove a Lipoma in Dogs?</h2>
                                    </a>
                                    <p>As pet owners, we often face various health concerns for our beloved dogs, one of which is lipomas in dogs.
                                        Lipomas are benign tumors composed of fatty tissue that can develop under the skin.</p>
                                        <a href="#" class="blog_item_date">
                                            <h6>Learn More</h6>
                                        </a>
                                </div>
                            </article>


                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="assets/img/our_blog/feed.jpg" alt="">
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="single-blog.html">
                                        <h2>How Much To Feed A Puppy: Chart By Weight & Age</h2>
                                    </a>
                                    <p>Nutrition and diet are crucial for optimal health at every stage of your pet’s life,
                                        but especially during their early stages of development. Learning how much to feed a
                                        puppy and how often to feed a puppy can significantly impact their growth and behavior for years to come.</p>
                                        <a href="#" class="blog_item_date">
                                            <h6>Learn More</h6>
                                        </a>
                                </div>
                            </article>

                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Previous">
                                            <i class="ti-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Next">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <form action="#">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder='Search Keyword'
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'Search Keyword'">
                                            <div class="input-group-append">
                                                <button class="btns" type="button"><i class="ti-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                        type="submit">Search</button>
                                </form>
                            </aside>

                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">Category</h4>
                                <ul class="list cat-list">
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Resaurant food</p>
                                            <p>(37)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Travel news</p>
                                            <p>(10)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Modern technology</p>
                                            <p>(03)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Product</p>
                                            <p>(11)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Inspiration</p>
                                            <p>21</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Health Care (21)</p>
                                            <p>09</p>
                                        </a>
                                    </li>
                                </ul>
                            </aside>

                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Recent Post</h3>
                                <div class="media post_item">
                                    <img src="assets/img/post/post_1.png" alt="post">
                                    <div class="media-body">
                                        <a href="single-blog.html">
                                            <h3>From life was you fish...</h3>
                                        </a>
                                        <p>January 12, 2019</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="assets/img/post/post_2.png" alt="post">
                                    <div class="media-body">
                                        <a href="single-blog.html">
                                            <h3>The Amazing Hubble</h3>
                                        </a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="assets/img/post/post_3.png" alt="post">
                                    <div class="media-body">
                                        <a href="single-blog.html">
                                            <h3>Astronomy Or Astrology</h3>
                                        </a>
                                        <p>03 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="assets/img/post/post_4.png" alt="post">
                                    <div class="media-body">
                                        <a href="single-blog.html">
                                            <h3>Asteroids telescope</h3>
                                        </a>
                                        <p>01 Hours ago</p>
                                    </div>
                                </div>
                            </aside>
                            <aside class="single_sidebar_widget tag_cloud_widget">
                                <h4 class="widget_title">Tag Clouds</h4>
                                <ul class="list">
                                    <li>
                                        <a href="#">project</a>
                                    </li>
                                    <li>
                                        <a href="#">love</a>
                                    </li>
                                    <li>
                                        <a href="#">technology</a>
                                    </li>
                                    <li>
                                        <a href="#">travel</a>
                                    </li>
                                    <li>
                                        <a href="#">restaurant</a>
                                    </li>
                                    <li>
                                        <a href="#">life style</a>
                                    </li>
                                    <li>
                                        <a href="#">design</a>
                                    </li>
                                    <li>
                                        <a href="#">illustration</a>
                                    </li>
                                </ul>
                            </aside>

                            <aside class="single_sidebar_widget instagram_feeds">
                                <h4 class="widget_title">Instagram Feeds</h4>
                                <ul class="instagram_row flex-wrap">
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="assets/img/post/post_5.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="assets/img/post/post_6.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="assets/img/post/post_7.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="assets/img/post/post_8.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="assets/img/post/post_9.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="assets/img/post/post_10.png" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </aside>


                            <aside class="single_sidebar_widget newsletter_widget">
                                <h4 class="widget_title">Newsletter</h4>

                                <form action="#">
                                    <div class="form-group">
                                        <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                    </div>
                                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                        type="submit">Subscribe</button>
                                </form>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
    </main>
    @include('components.partners')
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
