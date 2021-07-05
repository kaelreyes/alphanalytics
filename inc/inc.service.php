<?php
    $service_id=$_GET['id'];
    $service = new DBObject;
    $query1 = array(
    'table' => "services where service_id=$service_id"
    );
    $row = $service->select($query1);
    foreach ($row as $rows){
        $service_image=$rows['service_image'];
        $service_name=$rows['service_name'];
        $service_subtitle=$rows['service_subtitle'];
        $service_description=$rows['service_description'];
    } 
?>
<main id="main">
    <section id="breadcrumbs" class="breadcrumbs header-bg  d-flex align-items-center" style="background-image: url('<?=$image_path;?><?=$service_image;?>')">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-light mt-4" style="font-weight: 600px; ">
          </div>
          <div class="col-md-12 text-light" style="font-weight: 900px; font-size: 52px;">
            <?=$service_name;?>
          </div>
          <div class="col-md-6 text-light" style="font-weight: 600px; ">
            <?=$service_subtitle;?>
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
    <section id="featured" class="featured">
        <div class="container">
            <div class="d-flex flex-column align-items-center display-4 my-5 text-center">
                <div class="font-weight-bold" style="font-size:30px !important"><?=$service_description;?></div>
            </div>
        </div>
    </section>
    <section id="services" class="services">
      <div class="container">
        <div class="row">
            <?php
                $specific_service = new DBObject;
                $query1 = array(
                'table' => "specific_services where service_id=$service_id"
                );
                $row = $specific_service->select($query1);
                foreach ($row as $rows){
                $specific_service_image=$rows['specific_service_image'];
            ?>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="icon-box">
                    <div class="icon"><img src="<?=$image_path;?><?=$specific_service_image;?>" width="40"></div>
                    <h4 style="text-align:center !important;"><a href=""><?=$rows['specific_service_name'];?></a></h4>
                    <?=$rows['specific_service_description'];?>
                </div>
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
