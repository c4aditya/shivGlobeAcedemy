<?php
  include __DIR__ . "/include/header.php";  
?>





<section class="page-title-layout1 page-title-light text-center bg-overlay">
    <div class="bg-img"><img src="assets/images/page-titles/2222.webp" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6 offset-xl-3">
                <h1 class="pagetitle-heading">IT Software Development</h1>
                <nav>
                    <ol class="breadcrumb d-flex align-items-center justify-content-center mt-10 mb-0">
                        <li class="breadcrumb-item">
                            <a href="About-us.php">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">IT Software Development</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>


<div class="container custom-card-wrapper">
    <div class="row">
        <!-- Row 2 - 4 Cards -->
        <div class="col-3">
            <div class="custom-card">
                <a href="html-css-js.php">
                    <div class="custom-card__image">
                        <img src="assets/images/services/15.jpg" alt="Course">
                    </div>
                    <div class="custom-card__details">
                        <strong class="details__name">HTML, CSS, JavaScript</strong>
                        <div class="details__instructor">Jerad Hill, Photography, Web Designer</div>
                         <div class="details__bottom">
                            <div class="star-rating">
                                <span class="stars">
                                    <span class="full">★</span>
                                    <span class="full">★</span>
                                    <span class="full">★</span>
                                    <span class="full">★</span>
                                    <span class="half">☆</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-3">
            <div class="custom-card">
                <a href="front-End-and-back-End-development.php">
                    <div class="custom-card__image">
                        <img src="assets/images/services/17.jpg" alt="Course">
                    </div>
                    <div class="custom-card__details">
                        <strong class="details__name">front-End & Back-End Development</strong>
                        <div class="details__instructor">Jerad Hill, Photography, Web Designer</div>
                         <div class="details__bottom">
                            <div class="star-rating">
                                <span class="stars">
                                    <span class="full">★</span>
                                    <span class="full">★</span>
                                    <span class="full">★</span>
                                    <span class="full">★</span>
                                    <span class="half">☆</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-3">
            <div class="custom-card">
                <a href="database-management.php">
                    <div class="custom-card__image">
                        <img src="assets/images/services/14.jpg" alt="Course">
                    </div>
                    <div class="custom-card__details">
                        <strong class="details__name">Database Management (MySQL / MongoDB)</strong>
                        <div class="details__instructor">Jerad Hill, Photography, Web Designer</div>
                          <div class="details__bottom">
                            <div class="star-rating">
                                <span class="stars">
                                    <span class="full">★</span>
                                    <span class="full">★</span>
                                    <span class="full">★</span>
                                    <span class="full">★</span>
                                    <span class="half">☆</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-3">
            <div class="custom-card">
                <a href="php-python-java-basics.php">
                    <div class="custom-card__image">
                        <img src="assets/images/services/16.jpg" alt="Course">
                    </div>
                    <div class="custom-card__details">
                        <strong class="details__name">PHP, Python, Java Basics</strong>
                        <div class="details__instructor">Jerad Hill, Photography, Web Designer</div>

                        <div class="details__bottom">
                            <div class="star-rating">
                                <span class="stars">
                                    <span class="full">★</span>
                                    <span class="full">★</span>
                                    <span class="full">★</span>
                                    <span class="full">★</span>
                                    <span class="half">☆</span>
                                </span>
                            </div>
                        </div>
                </a>
            </div>
        </div>
    </div>
    <div class="card-wrapper">
        <!-- Your 8 cards go here -->
    </div>
</div>




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