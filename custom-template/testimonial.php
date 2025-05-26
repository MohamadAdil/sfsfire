<?php
/* Template Name: Testimonial */
get_header();
?>
<!--  -->
<main>
    <!-- Inner-banner -->
    <section class="inner-banner" style="background-image: url('http://49.249.236.30:3131/michael/wp-content/themes/micheal-S/assets/images/about-hero.png');">
        <div class="container">
            <div class="heading-text typography">
                <h1>Testimonial</h1>
            </div>
        </div>
    </section>
    <!-- Contact form -->
    <div class="contact-form border-shape" style="background-color:#EE322E;">
        <div class="container">
            <div class="form-wraper">
                <h3>Leave a Testimonial</h3>
                <form>
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <label for="fullName" class="form-label">Full Name*</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Enter Full Name" required>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <label for="emailAddress" class="form-label">Email Address*</label>
                            <input type="email" class="form-control" id="emailAddress" placeholder="Enter Email Address" required>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <label for="companyName" class="form-label">Company Name*</label>
                            <input type="text" class="form-control" id="companyName" placeholder="Enter Company Name" required>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <label for="companyWebsite" class="form-label">Company Website</label>
                            <input type="url" class="form-control" id="companyWebsite" placeholder="Enter Company Website">
                        </div>
                        <div class="col-lg-6 mb-4">
                            <label for="heading" class="form-label">Heading</label>
                            <input type="text" class="form-control" id="heading" placeholder="Enter Heading">
                        </div>
                        <div class="col-lg-6 mb-4">
                            <label for="photo" class="form-label">Would you like to include a photo?</label>
                            <input type="file" class="form-control" id="photo" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="testimonial" class="form-label">Testimonial*</label>
                            <textarea class="form-control" id="testimonial" rows="3" placeholder="Enter Testimonial" required></textarea>
                        </div>
                        <div class="col-lg-12 text-center">
                            <button type="submit" class="main-button">Submit</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</main>
<!--  -->
<?php
get_footer();
?>