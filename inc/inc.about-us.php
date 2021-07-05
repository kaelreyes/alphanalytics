<?php
    $header_id=4;
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
    $section_id1=1;
    $user = new DBObject;
    $query2 = array(
    'table' => "`section` where section_id=$section_id1"
    );
    $row2 = $user->select($query2);
    foreach ($row2 as $rows2){
        $section_title1=$rows2['section_title'];
        $section_content1=$rows2['section_content'];
    }
    
    $section_id2=2;
    $user = new DBObject;
    $query3 = array(
    'table' => "`section` where section_id=$section_id2"
    );
    $row3 = $user->select($query3);
    foreach ($row3 as $rows3){
        $section_title2=$rows3['section_title'];
        $section_content2=$rows3['section_content'];
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
    <section id="featured" class="featured">
        <div class="container">
            <div class="d-flex flex-column align-items-center display-4 my-5 text-center">
                <div class="font-weight-bold" style="font-size:30px !important"><?=$section_title1;?></div>
            </div>
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <?=$section_content1;?>
                    </div>
                </div>
            </div>    
        </div>
    </section>
    <section id="featured" class="featured">
        <div class="container">
            <div class="d-flex flex-column align-items-center display-4 my-5 text-center">
                <div class="font-weight-bold" style="font-size:30px !important"><?=$section_title2;?></div>
            </div>
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <?=$section_content2;?>
                    </div>
                </div>
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