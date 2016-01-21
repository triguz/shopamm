<!-- Header -->
<div id="header">
    <h1 id="logo"><a href="./index.php?page=home">ShopAMM</a></h1>
    <!-- Cart -->
    <!--<div id="cart"> <a href="#" class="cart-link">Your Shopping Cart</a>
        <div class="cl">&nbsp;</div>
        <span>Articles: <strong>4</strong></span> &nbsp;&nbsp; <span>Cost: <strong>$250.99</strong></span> </div> -->
    <!-- End Cart -->
    <!-- Navigation -->
    <div id="navigation">
        <ul>
            <li <?php echo ((isset($_GET['page']) && $_GET['page'] == 'home') || empty($_GET)) ? 'class="active"' : false; ?>><a href="./index.php?page=home">Home</a></li>
            <li <?php echo (isset($_GET['page']) && $_GET['page'] == 'myprofile') ? 'class="active"' : false; ?>><a href="./index.php?page=signup">Il mio profilo</a></li>
            <li <?php echo (isset($_GET['page']) && $_GET['page'] == 'thestore') ? 'class="active"' : false; ?>><a href="./index.php?page=thestore">The store</a></li>
            <li <?php echo (isset($_GET['page']) && $_GET['page'] == 'contact') ? 'class="active"' : false; ?>><a href="./index.php?page=contact">Contact</a></li>
        </ul>
    </div>
    <!-- End Navigation -->
</div>
<!-- End Header -->