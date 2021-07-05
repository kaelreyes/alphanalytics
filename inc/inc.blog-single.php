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
    <div class="container pt-3 pb-4  w-100" style="background: #f2f3f7;  position:relative; border-radius:10px; z-index: 9999 !important">
        <div class="row pb-4">
            <div class="col-md-2 d-flex align-items-end">
                <div class="white-bg-n w-100">
                    <input type="text" placeholder="Your name" class="invisible-input" spellcheck="false" style="width: 146px;">
                </div>
            </div>
            <div class="col-md-2 d-flex align-items-end">
                <div class="white-bg-n w-100">
                    <input type="text" placeholder="Your email" class="invisible-input" spellcheck="false" style="width: 146px;">
                </div>
            </div>
            <div class="col-md-2 d-flex align-items-end">
                <div class="white-bg-n w-100">
                    <span style="padding: 0px 10px; color: #11131c; font-size: 14px;" class="font-weight-bold">
                        interested in
                    </span>
                </div>
            </div>
            <div class="col-md-2 d-flex align-items-end">
                <div class="white-bg-n w-100">
                    <span style="padding: 0px 10px; color: #11131c; font-size: 14px;" class="font-weight-bold">
                        Budget
                    </span>
                </div>
            </div>
            <div class="col-md-2">
                <label for="" class="w-100 d-flex justify-content-center default-text-color">What is 2+2</label>
                <div class="white-bg-n w-100">
                    <input type="text" placeholder="Answer" class="invisible-input" spellcheck="false" style="width: 146px;">
                </div>
            </div>
            <div class="col-md-2 d-flex align-items-end">
                <button class="btn-pink-black">Speak to an expert</button>
            </div>
        </div>
      </div>
    </section>
    <section id="blog" class="blog">
    <?php
        $id=$_GET['id'];
        $user = new DBObject;
        $query1 = array(
        'table' => "`news_and_event` where id=$id"
        );
        $row = $user->select($query1);
        foreach ($row as $rows){
            $content=$rows['content'];
            $title=$rows['title'];
            $image=$rows['image'];
            $date_posted=$rows['date_posted'];
        }
    ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 entries">
                    <article class="entry entry-single">
                        <div class="entry-img">
                            <img src="<?=$image_path;?><?=$image;?>" alt="" class="img-fluid" style="display: block !important;max-height:500px; margin-left: auto !important;margin-right: auto !important;">
                        </div>
                        <h2 class="entry-title">
                            <a href="blog-single.php?id=<?=$id;?>"><?=$title;?></a>
                        </h2>
                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.php?id=<?=$id;?>"><time datetime="2020-01-01"><?=$date_posted;?></time></a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p><?=$content;?></p>
                        </div>
                </article>
            </div>
        </div>
    </section>
</main>