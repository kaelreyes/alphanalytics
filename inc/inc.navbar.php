<header id="header">
    <div class="container d-flex">
        <div class="logo mr-auto">
            <a href="index.php"><img src="<?=$image_path;?>logo-alphanalytix-768x122.png" alt="" class="img-fluid"></a>
        </div>
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="text-uppercase"><a href="about-us.php" class="navbars color-white">About Us</a></li>
                <li class="drop-down text-uppercase"><a href="our-services.php"  class="navbars color-white">Our Services</a>
                    <ul>
                        <?php
                            $services = new DBObject;
                            $query1 = array(
                            'table' => "services"
                            );
                            $row = $services->select($query1);
                            foreach ($row as $rows){
                        ?>
                        <li><a href="service.php?id=<?=$rows['service_id'];?>"><?=$rows['service_name'];?></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="text-uppercase"><a href="our-clients.php" class="navbars color-white">Our Clients</a></li>
                <li class="text-uppercase"><a href="blogs.php" class="navbars color-white">Blog</a></li>
            </ul>
        </nav>
        <div class="d-flex align-items-center ml-3">
            <a href="contact-us.php">
                <button class="btn-main-red font-weight-bold mr-3">CONTACT US</button>
            </a>
            <div style="color: #475D83;" class="font-weight-bold c-pointer">+639-67580-6823</div>
        </div>
    </div>
</header>