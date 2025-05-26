<?php
/* Template Name: Contact Us */
get_header();
?>
<!--  -->
<main>
    <!-- Inner-banner -->
    <section class="inner-banner" style="background-image: url('http://49.249.236.30:3131/michael/wp-content/themes/micheal-S/assets/images/about-hero.png');">
        <div class="container">
            <div class="heading-text typography">
                <h1>Contact us</h1>
            </div>
        </div>
    </section>
    <!-- Contact form -->
    <div class="contact-form border-shape" style="background-color:#EE322E;">
        <div class="container">
            <div class="form-wraper">
                <h3>Send us a message</h3>
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
                            <label for="confirmEmail" class="form-label">Email Address*</label>
                            <input type="email" class="form-control" id="confirmEmail" placeholder="Confirm Email Address" required>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <label for="phoneNumber" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter Phone Number">
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="message" class="form-label">Message*</label>
                            <textarea class="form-control" id="message" rows="3" placeholder="Enter Message" required></textarea>
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