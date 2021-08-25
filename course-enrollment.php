<?php $title = ' | Enrollment';
 include "template/header.php";
?>

        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs contact">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Enrollment</h1>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Contact Section Start -->
        <div class="rs-contact pt-120 md-pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 md-mb-60">
                        <div class="contact-box">
                            <div class="sec-title mb-45">
                                <span class="sub-text new-text white-color">Let's Talk</span>
                                <h2 class="title white-color">Get in touch with our team!</h2>
                            </div>
                            <div class="address-box mb-25">
                                <div class="address-icon">
                                    <i class="fa fa-home" style="padding-top: 13px;"></i>
                                </div>
                                <div class="address-text">
                                    <span class="label">Email:</span>
                                    <a href="mailto:gisaxiom@gmail.com">gisaxiom@gmail.com</a>
                                </div>
                            </div>
                            <div class="address-box mb-25">
                                <div class="address-icon">
                                    <i class="fa fa-phone" style="padding-top: 13px;"></i>
                                </div>
                                <div class="address-text">
                                    <span class="label">Phone:</span>
                                    <a href="tel:+91 81380 17386">+91 81380 17386</a>
                                </div>
                            </div>
                            <div class="address-box">
                                <div class="address-icon">
                                    <i class="fa fa-map-marker" style="padding-top: 13px;"></i>
                                </div>
                                <div class="address-text">
                                    <span class="label">Address:</span>
                                    <div class="desc">GISAXIOM, G-3103 2nd floor, Jawaharlal Nehru International Stadium, Kaloor, Ernakulam, Kerala-India 682017</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 pl-70 md-pl-15">
                        <div class="contact-widget">
                            <div class="sec-title2 mb-40">
                                <span class="sub-text contact mb-15">Get In Touch</span>
                                <h2 class="title testi-title">Fill The Form Below</h2>

                            </div>
                            <div id="form-messages"></div>
                            <form id="contact-form"><!--form id="contact-form" method="post" action="https://akeyi.co/contact.php"-->
                               
                                    <div class="row">
                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                        </div>
                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control" type="email" id="email" name="email" placeholder="E-Mail" required="">
                                        </div>
                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                                        </div>
                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control" type="text" id="qualification" name="qualification" placeholder="Qualification">
                                        </div>
										<div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control" type="text" id="experience" name="phone" placeholder="Years of experience">
                                        </div>
                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control" type="text" id="technologies_worked" name="technologies_worked" placeholder="Technologies worked/studied">
                                        </div>
										 <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control" type="text" id="request_for" name="request_for" hidden value = "Training">
                                        </div>

                                        <div class="col-lg-12 mb-30">
                                            <textarea class="from-control" id="message" name="message" placeholder="Your message Here"></textarea>
                                        </div>
                                    </div>
                                    <div class="btn-part" >
                                        <button name="submit" type="submit" id="submitbutton" value="Submit" class="readon learn-more submit">
                                            Send Message
                                        </button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="map-canvas pt-120 md-pt-80">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245.57804314357196!2d76.30140427286621!3d9.996304728778641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080d11518e3ad1%3A0x1dfc9cd558c77889!2sHospitality%20Experts!5e0!3m2!1sen!2sin!4v1616840055105!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
	</div>

<?php 
 include "template/footer.php";
?>