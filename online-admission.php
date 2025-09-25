<?php
  include __DIR__ . "/include/header.php";  
?>





<section class="page-title-layout1 page-title-light text-center bg-overlay">
    <div class="bg-img"><img src="assets/images/courses-images/blobid1625822780971.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6 offset-xl-3">
                <h1 class="pagetitle-heading">Online Admission<nav>
                        <ol class="breadcrumb d-flex align-items-center justify-content-center mt-10 mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Online Admission</li>
                        </ol>
                    </nav>
            </div>
        </div>
    </div>
</section>


<section class="admission-section">
    <div class="admission-overlay">
        <div class="admission-container">
            <h2 class="admission-title">Shivglobe Ai and Aviation Academy (OPC) Pvt. Ltd.</h2>
            <form class="admission-form">

                <div class="online-addmisson">
                    <label>Full Name</label>
                    <input type="text" placeholder="Enter your name" required>
                </div>

                <div class="online-addmisson">
                    <label>Mobile Number</label>
                    <input type="tel" placeholder="Enter your number" required>
                </div>

                <div class="online-addmisson">
                    <label>Email ID</label>
                    <input type="email" placeholder="Enter your email" required>
                </div>

                <div class="online-addmisson">
                    <label>Father's Name</label>
                    <input type="text" placeholder="Enter father’s name" required>
                </div>

                <div class="online-addmisson full-width">
                    <label>Address</label>
                    <textarea placeholder="Enter your address" required></textarea>
                </div>

                <div class="online-addmisson">
                    <label>12th Marksheet Upload</label>
                    <input type="file" accept=".jpg,.jpeg,.png,.pdf" required>
                </div>

                <div class="online-addmisson">
                    <label>Passport Size Photo</label>
                    <input type="file" accept=".jpg,.jpeg,.png" required>
                </div>

                <div class="online-addmisson">
                    <label>Gender</label>
                    <select required>
                        <option value="">Select</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </div>

                <div class="online-addmisson">
                    <label>Date</label>
                    <input type="date" required>
                </div>

                <div class="online-addmisson full-width">
                    <label>Aadhaar Number</label>
                    <input type="text" placeholder="Enter Aadhaar number" required>
                </div>

                <button type="submit" class="submit-btn">Submit Admission Form</button>
            </form>
        </div>
    </div>
</section>


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