<?php $title = ' | Contact us';
 include "template/header.php";
  $current_page = "contact";
?>

        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs contact">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Contact</h1>
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
                                            <input class="from-control" type="text" id="company" name="company" placeholder="Your Company">
                                        </div>
										<div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control" type="text" id="request_for" name="request_for" hidden value = "Gis Axiom">
                                        </div>

                                        <div class="col-lg-12 mb-30">
                                            <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15716.997378340278!2d76.3014214!3d9.9962506!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb82da6b85b1c8d71!2sGIS-Axiom!5e0!3m2!1sen!2sin!4v1629799811152!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

 <?php 
 include "template/footer.php";
?>