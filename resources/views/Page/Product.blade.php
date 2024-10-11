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
        <div class="slider-area3 slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>Products</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->
      
    </main>
   
   <!-- Product list  -->
   <div class="Product_container">
    <div class="icon-group">
      <div class="icon-item">
        <img src="https://openui.fly.dev/openui/64x64.svg?text=🍲" alt="Food icon" class="icon-image">
        <span class="icon-text">Food</span>
      </div>
      <div class="icon-item">
        <img src="https://openui.fly.dev/openui/64x64.svg?text=🧴" alt="Care icon" class="icon-image">
        <span class="icon-text">Care</span>
      </div>
      <div class="icon-item">
        <img src="https://openui.fly.dev/openui/64x64.svg?text=🪢" alt="Accessories icon" class="icon-image">
        <span class="icon-text">Accessories</span>
      </div>
      <div class="icon-item">
        <img src="https://openui.fly.dev/openui/64x64.svg?text=🐶" alt="Clothing icon" class="icon-image">
        <span class="icon-text">Clothing</span>
      </div>
      <div class="icon-item">
        <img src="https://openui.fly.dev/openui/64x64.svg?text=🛋️" alt="Decor icon" class="icon-image">
        <span class="icon-text">Decor</span>
      </div>
      <div class="icon-item">
        <img src="https://openui.fly.dev/openui/64x64.svg?text=🪥" alt="Grooming icon" class="icon-image">
        <span class="icon-text">Grooming</span>
      </div>
      <div class="icon-item">
        <img src="https://openui.fly.dev/openui/64x64.svg?text=💊" alt="Medicine icon" class="icon-image">
        <span class="icon-text">Medicine</span>
      </div>
      <div class="icon-item">
        <img src="https://openui.fly.dev/openui/64x64.svg?text=🚽" alt="Lavatory icon" class="icon-image">
        <span class="icon-text">Lavatory</span>
      </div>
    </div>
  </div>
    <!-- Product list end -->

    <!-- filter products list -->
    <section id="vertical_product">
        <div class="container">
            <div class="controls">
                <button type="button" class="control" data-filter="all">All Products</button>
                <button type="button" class="control" data-filter=".petfood">Pet Food</button>
                <button type="button" class="control" data-filter=".petToys">Pet Toys</button>
                <button type="button" class="control" data-filter=".medicine">Medicine</button>
                <button type="button" class="control" data-filter=".accessories">Accessories</button>
                <button type="button" class="control" data-filter=".clothing">Clothing</button>
            </div>
            <div class="products">
                <div class="mix petfood">
                    <img src="assets/img/hero/petfood.jpg" alt="product" />
                </div>
                <div class="mix petfood">
                    <img src="assets/img/hero/petfood6.jpg" alt="product" />
                </div>
                <div class="mix petfood">
                    <img src="assets/img/hero/petfood2.jpg" alt="product" />
                </div>
                <div class="mix petfood">
                    <img src="assets/img/hero/petfood3.jpg" alt="product" />
                </div>
                <div class="mix petfood">
                    <img src="assets/img/hero/petfood4.jpg" alt="product" />
                </div>
                <div class="mix petfood">
                    <img src="assets/img/hero/petfood7.jpg" alt="product" />
                </div>
                <div class="mix petToys">
                    <img src="assets/img/hero/pettoy1.webp" alt="product" />
                </div>
                <div class="mix petToys">
                    <img src="assets/img/hero/pettoy2.webp" alt="product" />
                </div>
                <div class="mix petToys">
                    <img src="assets/img/hero/pettoy3.webp" alt="product" />
                </div>
                <div class="mix petToys">
                    <img src="assets/img/hero/pettoy4.jpg" alt="product" />
                </div>
                <div class="mix medicine">
                    <img src="assets/img/hero/petmed1.webp" alt="product" />
                </div>
                <div class="mix medicine">
                    <img src="assets/img/hero/petmed2.jpg" alt="product" />
                </div>
                <div class="mix medicine">
                    <img src="assets/img/hero/petmed3.webp" alt="product" />
                </div>
                <div class="mix accessories">
                    <img src="assets/img/hero/acc1.jpg" alt="product" />
                </div>
                <div class="mix accessories">
                    <img src="assets/img/hero/acc2.webp" alt="product" />
                </div>
                <div class="mix accessories">
                    <img src="assets/img/hero/acc3.png" alt="product" />
                </div>
                <div class="mix clothing">
                    <img src="assets/img/hero/cloth1.jpg" alt="product" />
                </div>
                <div class="mix clothing">
                    <img src="assets/img/hero/cloth2.webp" alt="product" />
                </div>
                <div class="mix clothing">
                    <img src="assets/img/hero/cloth3.webp" alt="product" />
                </div>
            </div>
        </div>
    </section>
     <!-- filter product list end -->

     <!-- gallery of products -->
      <section class ="gallery">
        <h1>Product of gallery</h1>
     <div class="gallery_container">
      <div class="product_image_gallery">
        <div class="product-img">
          <img
            src="assets/img/hero/petfood.jpg"
            alt="Product Image"
            class="product-main-img"
            data-index="1"
          />
        </div>
        <div class="product-thumbnail-container">
          <div class="product-thumbnail active">
            <img
              src="assets/img/hero/pettoy1.webp"
              alt="thumbnail Image"
              data-index="1"
            />
          </div>
          <div class="product-thumbnail">
            <img
              src="assets/img/hero/acc1.jpg"
              alt="thumbnail Image"
              data-index="2"
            />
          </div>
          <div class="product-thumbnail">
            <img
              src="assets/img/hero/petfood4.jpg"
              alt="thumbnail Image"
              data-index="3"
            />
          </div>
          <div class="product-thumbnail">
            <img
              src="assets/img/hero/petmed2.jpg"
              alt="thumbnail Image"
              data-index="4"
            />
          </div>
          
        </div>
      </div>
    </div>
    </section> 
    <!-- gallery of products end -->
     <!-- checkout page -->
     <div class="checkout_container">
        <header>
            <h1>List Of Products</h1>
            <div class="iconCart">
                <img src="assets/img/hero/icon.png">
                <div class="totalQuantity">0</div>
            </div>
        </header>

        <div class="listProduct">

            <div class="item">
                <img src="images/1.webp" alt="">
                <h2>CoPilot / Black / Automatic</h2>
                <div class="price">Rs 550</div>
                <button>Add To Cart</button>
            </div>
        </div>
    </div>

    <div class="cart">
        <h2>Cart Section</h2>
        <div class="listCart">
            <div class="item">
                <img src="images/1.webp">
                <div class="content">
                    <div class="name">CoPilot / Black / Automatic</div>
                    <div class="price">Rs550 / 1 product</div>
                </div>
                <div class="quantity">
                    <button>-</button>
                    <span class="value">3</span>
                    <button>+</button>
                </div>
            </div>
        </div>

        <div class="buttons">
            <div class="close">
                Close
            </div>
            <div class="checkout">
                <a href="/checkout">Checkout</a>
            </div>
        </div>
    </div>
      <!-- checkout page end -->
  
   @include('components.partners')
    <footer>
        <!-- Footer Start-->
    @include('components.footer')
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="/checkout"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
    @include('Scripts.scripts')
    <script src="https://cdn.jsdelivr.net/npm/mixitup@3.3.1/dist/mixitup.min.js"></script>
       
  </body>
</html>