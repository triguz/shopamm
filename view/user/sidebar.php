<!-- Sidebar -->
<div id="sidebar">      
    <!-- Login -->
    <div class="box login">
        <h2> Login <span></span></h2>

        <div class="box-content">
            <center>Sei loggato come: <?php echo (isset($_SESSION['username']) ? ($_SESSION['username']) : false) ?></center>
            <form>
                <center><a href="./index.php?page=logout">Logout</a></center>
        </div>
    </div>
    <!-- End Login -->

    <!-- Categories -->
    <div class="box categories">
        <h2>Categories <span></span></h2>
        <div class="box-content">
            <ul>
                <li><a href="#">Category 1</a></li>
                <li><a href="#">Category 2</a></li>
                <li><a href="#">Category 3</a></li>
                <li><a href="#">Category 4</a></li>
                <li><a href="#">Category 5</a></li>
                <li><a href="#">Category 6</a></li>
                <li><a href="#">Category 7</a></li>
                <li><a href="#">Category 8</a></li>
                <li><a href="#">Category 9</a></li>
                <li><a href="#">Category 10</a></li>
                <li><a href="#">Category 11</a></li>
                <li><a href="#">Category 12</a></li>
                <li class="last"><a href="#">Category 13</a></li>
            </ul>
        </div>
    </div>
    <!-- End Categories -->

</div>
<!-- End Sidebar -->

<!--<div class="cl">&nbsp;</div> -->