<?php
    $header_id=1;
    $user = new DBObject;
    $query1 = array(
    'table' => "`headers` where header_id=$header_id"
    );
    $row = $user->select($query1);
    foreach ($row as $rows){
        $header_image=$rows['header_image'];
        $header_title=$rows['header_title'];
        $header_subtitle=$rows['header_subtitle'];
    }
    $header_id=2;
    $user = new DBObject;
    $query1 = array(
    'table' => "`headers` where header_id=$header_id"
    );
    $row = $user->select($query1);
    foreach ($row as $rows){
        $header_image2=$rows['header_image'];
        $header_title2=$rows['header_title'];
        $header_subtitle2=$rows['header_subtitle'];
    }
    $header_id=3;
    $user = new DBObject;
    $query1 = array(
    'table' => "`headers` where header_id=$header_id"
    );
    $row = $user->select($query1);
    foreach ($row as $rows){
        $header_image3=$rows['header_image'];
        $header_title3=$rows['header_title'];
        $header_subtitle3=$rows['header_subtitle'];
    }
?>
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox">
                Slide 1
                <div class="carousel-item active">
                    <img src="<?=$image_path;?><?=$header_image;?>" class="d-block w-100 carousel-bg" alt="...">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown" style="color:#fff;font-size:70px;padding:20px"><?=$header_title;?></h2>
                            <p class="animate__animated animate__fadeInUp" style="color:#fff; font-size:30px"><?=$header_subtitle;?></p>
                            <a href="" class="btn-main-pink animate__animated animate__fadeInUp">Read More</a>
                        </div>
                    </div>
                </div>
                Slide 2
                <div class="carousel-item">
                    <img src="<?=$image_path;?><?=$header_image2;?>" class="d-block w-100 carousel-bg" alt="...">
                    <div class="carousel-container">
                        <div class="carousel-content">
                        <h2 class="animate__animated animate__fadeInDown" style="color:#fff;font-size:70px;padding:20px"><?=$header_title2;?></h2>
                            <p class="animate__animated animate__fadeInUp" style="color:#fff;font-size:30px"><?=$header_subtitle2;?></p>
                            <a href="" class="btn-main-pink animate__animated animate__fadeInUp">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?=$image_path;?><?=$header_image3;?>" class="d-block w-100 carousel-bg" alt="...">
                    <div class="carousel-container">
                        <div class="carousel-content">
                        <h2 class="animate__animated animate__fadeInDown" style="color:#fff;font-size:70px;padding:20px"><?=$header_title3;?></h2>
                            <p class="animate__animated animate__fadeInUp" style="color:#fff;font-size:30px"><?=$header_subtitle3;?></p>
                            <a href="" class="btn-main-pink animate__animated animate__fadeInUp">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section>
<main id="main">
    <section id="featured" class="featured">
        <div class="container">
            <div class="w-100">
                <div class="row d-flex align-items-center">
                    <div class="col-md-10 font-weight-bold">
                        <div class="owl-carousel clients-carousel">
                            <?php
                                $clients = new DBObject;
                                $query1 = array(
                                'table' => "client A Left Join services B ON A.client_service = B.service_id"
                                );
                                $row = $clients->select($query1);
                                foreach ($row as $rows){
                                $client_image=$rows['client_image'];
                                $client_id=$rows['client_id'];
                            ?>
                            <img src="<?=$image_path;?><?=$client_image;?>" alt="" style="width:80% !important">
                            <?php
                                }
                            ?>
                        </div>
                    </div>

                    <div class="col-md-2 d-flex justify-content-center w-100">
                        <a href="our-clients.php">
                            <button class="text-uppercase btn-main-red">View all Clients</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column align-items-center display-4 my-5 text-center">
                <?php
                    $header_id=5;
                    $user = new DBObject;
                    $query1 = array(
                    'table' => "`headers` where header_id=$header_id"
                    );
                    $row = $user->select($query1);
                    foreach ($row as $rows){
                        $header_title5=$rows['header_title'];
                    } 
                ?>
                <div class="font-weight-bold "><?=$header_title5;?></div>
            </div>
            <?php
                $i=1;
                $services = new DBObject;
                $query1 = array(
                'table' => "services"
                );
                $row = $clients->select($query1);
                foreach ($row as $rows){
                $service_image=$rows['service_image'];
                $service_id=$rows['service_id'];
                if ($i % 2 != 0) {
            ?>
            <div class="row mb-3">
                <div class="d-flex align-items-center">
                    <div class="col-lg-6">
                        <div>
                            <img src="<?=$image_path;?><?=$service_image;?>" width="500" alt="" style="margin-botom:20px !important;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pl-5 d-flex flex-column">
                            <div class="text-blue font-weight-bold" style="font-size: 30px;"><?=$rows['service_name'];?></div>
                            <div class="my-3" style="font-size: 18px;"><?=$rows['service_description'];?></div>
                            <div class="my-3" style="font-size: 18px;">
                                <a href="service.php?id=<?=$rows['service_id'];?>">
                                    <button class="btn-main-pink p-3">Learn More</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                $i++;
                }else{ 
            ?>
            <div class="row mb-3" style="background: #f8f9fc;">
                <div class="d-flex align-items-center">
                    <div class="col-lg-6">
                        <div class="d-flex flex-column">
                            <div class="text-blue font-weight-bold" style="font-size: 30px;"><?=$rows['service_name'];?></div>
                            <div class="my-3" style="font-size: 18px;"><?=$rows['service_description'];?></div>
                            <div class="my-3" style="font-size: 18px;">
                                <a href="service.php?id=<?=$rows['service_id'];?>">
                                    <button class="btn-main-pink p-3">Learn More</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="<?=$image_path;?><?=$service_image;?>" width="500" alt="" style="margin-botom:20px !important;">
                    </div>
                </div>
            </div>
            <?php 
                    $i++;
                    } 
                }
            ?>
        </div>
    </section>
    <!-- End Featured Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="w-100 py-5" style="background: #11131c; min-height: 400px;">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="text-light w-100 d-flex justify-content-center font-weight-bold my-5" style="font-size: 52px;">
                            have a project for us?
                        </div>
                    </div>
                </div>
                <form action="function/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-row">
                        <div class="col form-group">
                          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="border-radius:100px !important;" />
                          <div class="validate" style="color: red; font-size:12px; padding-left:10px"></div>
                        </div>
                        <div class="col form-group">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" style="border-radius:100px !important;"/>
                          <div class="validate" style="color: red; font-size:12px; padding-left:10px"></div>
                        </div>
                        <div class="col form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars" style="border-radius:100px !important;"/>
                            <div class="validate" style="color: red; font-size:12px; padding-left:10px"></div>
                        </div>
                        <div class="col form-group">
                            <input type="text" class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" style="border-radius:100px !important;"/>
                            <div class="validate" style="color: red; font-size:12px; padding-left:10px"></div>
                        </div>
                        <div class="col form-group">
                            <div class="text-center"><button class="btn-pink-black" type="submit">Speak to an expert</button></div>
                            <div class="validate" id="sent-message2" style="color:green; display: none">Your message has been sent. Thank you!
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <section id="blog" class="blog">
        <div class="container">
            <div class="row">
                <?php
                    $news_and_events = new DBObject;
                    $query1 = array(
                    'table' => "news_and_event"
                    );
                    $row = $news_and_events->select($query1);
                    foreach ($row as $rows){
                ?>
                <div class="col-lg-3 entries">
                    <article class="entry">
                        <div class="entry-img">
                            <img src="<?=$image_path;?><?=$rows['image'];?>" alt="" class="img-fluid">
                        </div>
                        <h2 class="entry-title">
                            <a href="blog-single.php?id=<?=$rows['id'];?>"><?=$rows['title'];?></a>
                        </h2>
                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.php?id=<?=$rows['id'];?>"><time datetime="2020-01-01"><?=$rows['date_posted'];?></time></a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p><?=substr($rows['content'],-50);?>...</p>
                            <div class="read-more">
                                <a href="blog-single.php?id=<?=$rows['id'];?>"  >Read More</a>
                            </div>
                        </div>
                    </article>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section id="clients" class="clients pb-0">
        <div class="w-100 py-5" style="background: #475D83; min-height: 400px;">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="text-light w-100 d-flex justify-content-center font-weight-bold my-4" style="font-size: 52px;">
                            How can we help you?
                        </div><div class="text-light w-100 d-flex justify-content-center font-weight-bold my-4" style="font-size: 20px;">
                            Tell us what you are interested in.
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <button class="btn-white-red">Services</button>
                    <button class="btn-white-red mx-2">Partneship</button>
                    <button class="btn-white-red">Employment</button>
                </div>
            </div>
        </div>
    </section>
</main>