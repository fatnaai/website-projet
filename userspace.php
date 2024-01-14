<body>
        <header class="container">
       <div class="logo">
        <a href=""><h1 style="font-family: 'Arial', sans-serif; color: #a39494;"><span>TOTAMA</span></h1></a>
       </div>
       <div class="search">
        <input type="search" placeholder="tap to search">
        <input type="button" value=" search">
       </div>
       <div class="list">
       <ul class="menu">
        <li><a href="Home.php">Home</a></li>
        <li><a href="Hp.php">HP</a></li>
        <li><a href="Dell.php">Dell</a></li>
        <li><a href="">Contact us</a></li>
        <li><a href="">About us</a></li>
        
        
      <main>
    
      
      </main>
      <h3 align="center">Our Products<h3>
      <section class=" Product">
      <div class="content">
       <div class="product1">
               <img src="images/product/dell-7410.jpg" alt="">  
               <h4>Dell 7410</h4>
               <p>I5 11 eme generation</p>
               <input type="button" value="Add to card" onclick="addToCart">
      </div>
      <div class="product2">
               <img src="images/product/dell-7670.jpg" alt="">  
               <h4>Dell 7670</h4>
               <p>I7 8eme generation</p>
               <input type="button" value="Add to card" onclick="addToCart">
      </div>
      <div class="product3">
               <img src="images/product/hp-probook.jpg" alt="">  
               <h4>HP PROBOOK</h4>
               <p>I6 8eme generation</p>
               <input type="button" value="Add to card" onclick="addToCart">
      </div>

      </section>
      <footer>
      <section class="grid">

<div class="box">
   <h3>principal links</h3>
   <a href="accuel.php"> <i class="fas fa-angle-right"></i> home</a>
   <a href="a_propos.php"> <i class="fas fa-angle-right"></i> about us</a>
   <a href="magasin.php"> <i class="fas fa-angle-right"></i> Hp</a>
   <a href="contact.php"> <i class="fas fa-angle-right"></i> Dell</a>
</div>

<div class="box">
   <h3>another links</h3>
   <a href="utilisateur_login.php"> <i class="fas fa-angle-right"></i> log in </a>
   <a href="utilisateur_registre.php"> <i class="fas fa-angle-right"></i> register</a>
   <a href="panier.php"> <i class="fas fa-angle-right"></i> panier</a>
   <a href="ordres.php"> <i class="fas fa-angle-right"></i> ordres</a>
</div>

<div class="box">
   <h3>contact us</h3>
   <a href="tel:9313377651"><i class="fas fa-phone"></i> +212 702995547</a>
   <a href="tel:7304273313"><i class="fas fa-phone"></i> +212 702995537</a>
   <a href="mailto:elkhalidifatna@gmail.com"><i class="fas fa-envelope"></i> elkhalidifatna@gmail.com</a>
   <a href="https://www.google.com/maps/@33.0003128,-7.6229298,17.14z"><i class="fas fa-map-marker-alt"></i> settat - 26000</a>
</div>

<div class="box">
   <h3>following us</h3>
   <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
   <a href="#"><i class="fab fa-twitter"></i>twitter</a>
   <a href="#"><i class="fab fa-instagram"></i>instagram</a>
   <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
</div>

</section>

<div class="credit">&copy; copyright @<?= date('Y'); ?> | <span>Totama ordinateur</span> | all rights reserved!</div>

      </footer>
      <script>
         
         function addToCart(productName) {
             alert('Product "' + productName + '" added to cart!');
             
         }
     </script>
</body>
<style>
   body, h1, h2, h3, p, ul, li {
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    color: #333;
}

.container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}


.logo a {
    text-decoration: none;
    color: #333;
}

.search {
    display: flex;
}

.search input[type="search"] {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px 0 0 5px;
}

.search input[type="button"] {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 0 5px 5px 0;
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
}

.menu {
    list-style: none;
    display: flex;
}

.menu li {
    margin-right: 20px;
}

.menu a {
    text-decoration: none;
    color: #333;
}

.sign-up input[type="button"] {
    padding: 10px 15px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-left: 10px;
}

.mainbar {
    text-align: center;
    padding: 50px;
}

.mainbar h2 {
    font-size: 28px;
    color: #333;
}

.mainbar span {
    color: #007bff;
}

.mainbar input[type="button"] {
    padding: 15px 30px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    cursor: pointer;
    font-size: 16px;
    margin-top: 20px;
}

.photo img {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.Product {
    display: flex;
    justify-content: space-around;
    margin: 50px 0;
}

.Product div {
    text-align: center;
}

.Product img {
    width:20%;
    height: auto;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 10px;
    
}

.Product h4 {
    font-size: 18px;
    color: #333;
    margin-bottom: 5px;
}

.Product p {
    font-size: 16px;
    color: #888;
    margin-bottom: 10px;
}

.Product input[type="button"] {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

footer {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
}

.grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
}

.box {
    margin-bottom: 20px;
}

.box h3 {
    font-size: 18px;
    margin-bottom: 10px;
    color: #fff;
}

.box a {
    text-decoration: none;
    color: #ccc;
    display: block;
    margin-bottom: 5px;
}

.credit {
    background-color: #222;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}

   </style>
</html>
<?php

?>