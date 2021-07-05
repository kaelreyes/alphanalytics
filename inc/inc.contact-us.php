<?php
    $header_id=8;
    $service = new DBObject;
    $query1 = array(
    'table' => "headers where header_id=$header_id"
    );
    $row = $service->select($query1);
    foreach ($row as $rows){
        $header_image=$rows['header_image'];
        $header_title=$rows['header_title'];
        $header_subtitle=$rows['header_subtitle'];
    } 
?>
<main id="main">
    <section id="breadcrumbs" class="breadcrumbs header-bg  d-flex align-items-center" style="background-image: url('<?=$image_path;?><?=$header_image;?>')">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-light mt-4" style="font-weight: 600px; ">
          </div>
          <div class="col-md-12 text-light" style="font-weight: 900px; font-size: 52px;">
            <?=$header_title;?>
          </div>
          <div class="col-md-6 text-light" style="font-weight: 600px; ">
            <?=$header_subtitle;?>
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
    <section id="contact" class="contact">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Unit 1206 12th Floor Trade & Financial Tower 7th Ave. & 32nd Street, Bonifacio Global City Fort Bonifacio, Taguig City, NCR 4th District 1634</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>hello@alphanalytix.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>Mobile: (+63) 917-311-9156</p>
              <p>Mobile: (+63) 995-541-8760</p>
              <p>Mobile: (+63) 967-580-6823</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d965.4510090442441!2d121.050258!3d14.5531961!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8f1580fffd5%3A0x9ed9ec11067bc57f!2sMyOffice%20Bonifacio%20Global%20City!5e0!3m2!1sen!2sph!4v1624289588013!5m2!1sen!2sph" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="function/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
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
