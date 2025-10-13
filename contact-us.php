<?php
  include __DIR__ . "/include/header.php";  
?>

<section class="page-title-layout1 page-title-light text-center bg-overlay">
    <div class="bg-img"><img src="assets/images/page-titles/1.webp" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6 offset-xl-3">
                <h1 class="pagetitle-heading">Contact Us</h1>
                <nav>
                    <ol class="breadcrumb d-flex align-items-center justify-content-center mt-10 mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<section class="contact-layout1 py-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                <div class="heading-layout2 pt-130 mb-50">
                    <h3 class="heading-title">Get In Touch With Shivglobe Ai and Aviation Academy (opc) Pvt.ltd.
                    </h3>
                    <p class="heading-desc">We are here to guide you on your career journey. Whether you have questions
                        about
                        our courses, need counseling, or want to request more details, our team is ready to assist you
                        every step of the way.
                    </p>
                </div>
                <div class="offset-xl-2">
                    <ul class="contact-list list-unstyled">
                        <li>
                            <i class="icon-email color-secondary"></i>
                            <a href="tel:+201161145741">
                                <span class="color-secondary"> Helpline no :- </span> <span>+91 9211018618</span>
                            </a>
                        </li>
                        <li>
                            <i class="icon-location color-secondary"></i>
                            <a href="https://maps.app.goo.gl/giovV1LyYx5evBnZ7" target="_blank">
                                <span class="color-secondary">Location: </span> <span>  B- 113, B- Block, Sector- 64, Noida Gautam Buddha Nagar- 201301</span>
                            </a>
                        </li>
                        <li>
                            <i class="icon-clock color-secondary"></i>
                            <a href="contact-us.html">
                                <span class="color-secondary">Mon - Fri: </span> <span>10:00 am - 7:00 pm</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!-- /.col-xl-5 -->
            <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7 d-flex justify-content-xl-end">
                <div class="contact-panel">
                    <form class="contact-panel-form" method="post" action="mail_send.php" id="contactForm">
    <h4 class="contact-panel-title">Send A Message</h4>
    <p class="contact-panel-desc mb-30">
        Please complete the form below, to request a quote, and we’ll be in touch. Or you can call us
        <a href="tel:+201161145741" class="fw-600 underlined-text-primary">+91 9211018618</a>
        and our specialists will provide the necessary help!
    </p>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="contact-name">First Name</label>
                <input type="text" class="form-control" placeholder="Shiv" id="contact-name"
                       name="contact-name" required>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label for="contact-lastName">Last Name</label>
                <input type="text" class="form-control" placeholder="Globe" id="contact-lastName"
                       name="contact-lastName">
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label for="contact-email">Email Address</label>
                <input type="email" class="form-control" placeholder="Krishna98@gmail.com"
                       id="contact-email" name="contact-email" required>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label for="contact-phone">Phone</label>
                <input type="text" class="form-control" placeholder="Phone Number"
                       id="contact-phone" name="contact-phone" required>
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label for="contact-message">How We Can Help You?</label>
                <textarea class="form-control" placeholder="Your Message" id="contact-message"
                          name="contact-message"></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-block btn-xhight mt-10">
                <span>Submit Request</span> <i class="icon-arrow-right-up"></i>
            </button>
            <div class="contact-result"></div>
        </div>
    </div>
</form>

                </div><!-- /.contact-panel -->
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact layout 1 -->




<section class="clients pt-40 pb-40 border-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="slick-carousel"
                    data-slick='{"slidesToShow": 6, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                    <div class="client">
                        <img src="assets/images/clients/1.svg" alt="client">
                    </div><!-- /.client -->
                    <div class="client">
                        <img src="assets/images/clients/2.webp" alt="client">
                    </div><!-- /.client -->
                    <div class="client">
                        <img src="assets/images/clients/3.svg" alt="client">
                    </div><!-- /.client -->
                    <div class="client">
                        <img src="assets/images/clients/4.webp" alt="client">
                    </div><!-- /.client -->
                    <div class="client">
                        <img src="assets/images/clients/5.svg" alt="client">
                    </div><!-- /.client -->
                    <div class="client">
                        <img src="assets/images/clients/6.svg" alt="client">
                    </div><!-- /.client -->
                    <div class="client">
                        <img src="assets/images/clients/7.png" alt="client">
                    </div><!-- /.client -->
                </div><!-- /.carousel -->
            </div><!-- /.col-xl-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>


<?php include __DIR__ . "/include/footer.php"; ?>