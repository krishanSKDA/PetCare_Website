@include('Libraries.libraries')  
<div class="checkout_container">
    <div class="checkoutLayout">    
     <div class="returnCart">
            <!-- <a href="/">keep shopping</a> -->
            <h1>List Product in Cart</h1>
            <div class="list">

                <div class="item">
                    <img src="images/1.webp">
                    <div class="info">
                        <div class="name">Product 01</div>
                        <div class="price">$22/1 product</div>
                    </div>
                    <div class="quantity">5</div>
                    <div class="returnPrice">$433.3</div>
                </div>

            </div>
        </div>


        <div class="right">
            <h1>Checkout</h1>

            <div class="form">
                <div class="group">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" required>
                </div>
    
                <div class="group">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" id="phone" required>
                </div>
    
                <div class="group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address">
                </div>
                <div class="group">
                    <label for="city">City</label>
                    <input type="text">
                </div>
            </div>
            <div class="return">
                <div class="row">
                    <div>Total Quantity</div>
                    <div class="totalQuantity">70</div>
                </div>
                <div class="row">
                    <div>Total Price</div>
                    <div class="totalPrice">$900</div>
                </div>
            </div>
            <a href="/sucess"><button class="buttonCheckout" >CHECKOUT</button></a>
            
            </div>
    </div>
</div>
<script src="./assets/js/checkout.js"></script>