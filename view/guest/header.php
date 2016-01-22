<!-- Header -->
<div id="header">
    <h1 id="logo"><a href="./index.php?page=home">ShopAMM</a></h1>
    <!-- Navigation -->
    <div id="navigation">
        <ul>
            <li <?php echo ((isset($_GET['page']) && $_GET['page'] == 'home') || empty($_GET)) ? 'class="active"' : false; ?>><a href="./index.php?page=home">Home</a></li>
            <li <?php echo (isset($_GET['page']) && $_GET['page'] == 'signup') ? 'class="active"' : false; ?>><a href="./index.php?page=signup">Sign Up</a></li>
            <li <?php echo (isset($_GET['page']) && $_GET['page'] == 'thestore') ? 'class="active"' : false; ?>><a href="./index.php?page=thestore">The Store</a></li>
            <li <?php echo (isset($_GET['page']) && $_GET['page'] == 'contact') ? 'class="active"' : false; ?>><a href="./index.php?page=contact">Contact</a></li>
        </ul>
    </div>
    <!-- End Navigation -->
</div>
<!-- End Header -->