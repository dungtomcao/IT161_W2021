<?php 
include('includes/config.php');
include('includes/header.php'); ?>

<div class='wrapper'>
    
    <div class="row">
    <h1>Shopping Cart</h1>

    <main class="main_cart">

<table>
    <tr>
        <th>Item</th>
        <th>Description</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Subtotal</th>
    </tr>
    <tr>
        <td><img src="images/card3.png" alt="curved tree and fern"></td>
        <td>curved tree and fern</td>
        <td>$5</td>
        <td><input type="number" value="4" min="1" class="quantity"></td>
        <td>$20</td>
    </tr>
    <tr>
        <td><img src="images/card1.png" alt="bird house hang on tree branch"></td>
        <td>bird house hang on tree branch</td>
        <td>$5</td>
        <td><input type="number" value="1" min="1" class="quantity"></td>
        <td>$5</td>
    </tr>
    <tr>
        <td><img src="images/card4.png" alt="bird house and a pine tree"></td>
        <td>bird house and a pine tree</td>
        <td>$5</td>
        <td><input type="number" value="2" min="1" class="quantity"></td>
        <td>$10</td>
    </tr>
</table>

    </main>
    <aside class="aside_cart">
<h2>Total: $35</h2>
    <select name="delivery">
              <option value="0" selected="selected">Select Collection or Delivery</option>
             <option value="collect">Collection</option>
             <option value="first-class">FedEx First Class Mail</option>
             <option value="second-class">FedEx Standard Mail</option>
             <option value="signed-for">USPS Standard Mail</option>
          </select>
          <button class="checkout" type="submit">Go to Secure Checkout</button>
    </aside>
</div>
</div>

<?php 
include('includes/footer.php'); ?>