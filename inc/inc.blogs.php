<?php
    $header_id=7;
    $user = new DBObject;
    $query1 = array(
    'table' => "`headers` where header_id=$header_id"
    );
    $row = $user->select($query1);
    foreach ($row as $rows){
        $header_image4=$rows['header_image'];
        $header_title4=$rows['header_title'];
        $header_subtitle4=$rows['header_subtitle'];
    } 
?>
<main id="main">
    <section id="breadcrumbs" class="breadcrumbs header-bg  d-flex align-items-center" style="background-image: url('<?=$image_path;?><?=$header_image4;?>')">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-light mt-4" style="font-weight: 600px; ">
          </div>
          <div class="col-md-12 text-light" style="font-weight: 900px; font-size: 52px;">
            <?=$header_title4;?>
          </div>
          <div class="col-md-6 text-light" style="font-weight: 600px; ">
            <?=$header_subtitle4;?>
          </div>
          <div class="col-md-12">
            <div class="text-light w-100 d-flex justify-content-center font-weight-bold my-5" style="font-size: 32px;">
                Have a project for us?
            </div>
        </div>
        </div>
      </div>
    </section>
    <section id="speakToAnExpert" style="margin-top:-184px;">
        <form action="function/contact.php" method="post" role="form" class="php-email-form">
            <div class="container pt-5 pb-4  w-100" style="background: #f2f3f7;  position:relative; border-radius:10px; z-index: 9999 !important">
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
            </div>
        </form>
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
                            <!--<p><?=substr($rows['content'],-50);?>...</p>-->
                            <div class="read-more">
                                <a href="blog-single.php?id=<?=$rows['id'];?>"  >Read</a>
                            </div>
                        </div>
                    </article>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
</main>