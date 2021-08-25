<?php $title = ' | Wed Development Training';
 include "template/header.php";
?>
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs webdevtr">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Web Development Training</h1>

            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- paragraph Section Start -->
        <div class="rs-about pt-60  md-pt-45 md-pb-30 md-pr-10 md-pl-10">
            <div class="container">
                <div class="sec-title2 text-center mb-30">
                    <div class="row align-items-center md-pr-30 md-pl-30 text-justify">
                        <p>
                            We provide on-the-job training for Web Development, trainees get to work on active projects while technologies such as PHP, Python, HTML, and more. Trainees learn advanced concepts of web development, client requirement, limitations of various technologies,
                            and more.
                        </p>
                        
                    </div>
                </div>
                <div class="sec-title2 text-center mb-30">
                    <div class="row align-items-center md-pr-30 md-pl-30 text-justify">
                        <h2 class="title text-center pb-15 md-pb-10">
                            About Web Designing Training
                        </h2>
                        <p>
                            Our Web Designing Training consists of learning about user experience (UX) design, user interface (UI), graphic design, standardized code, proprietary software, authoring, and search engine optimization (SEO). These are findamententals of a website which
                            can attract visitors and business. The scope of web designing is growing day by day, so it is important to learn to meet the demands of search engines, clients and the end customers as well. We provide on the job training in
                            Kochi, by training our students to approach web development in a holistic way, we offer mentorship from experienced individuals from the industry.
                        </p>
                    </div>
                </div>
                <div class="sec-title2 text-center mb-45">

                    <h2 class="title">
                        Our On the training at A glance </h2>
                </div>
            
                <?php $training = array(
                    array("image" => "ux.png", "heading"=>"Web Designing Fundamentals","para"=>"Each and every website is different, the expectation of a client from the website may be different as well. An e-commerce client will want a website to smooth, easy to navigate and adaptive to multiple devices. A travel website will need media and precise
                                        information to attract customers. So even before understanding and mastering the technology related to web development it is important to understand the demands and expectations of the client first."),
                    array("image" => "marketing.png", "heading"=>"Marketing And Communication","para"=>"A website is the digital identity of a brand, and it is an important foundation for all their marketing and sales activities in the future. So, as a web developer you will not only build a website but you will be a platform for the brand's future as well.
                                        Web developers need to work with SEO analysts, content writers, designers and UI/UX developers to get the desired output."),
                    array("image" => "function.png", "heading"=>"Form and Function","para"=>"A web developer needs to be an artist as well, while there will be designers and UX/UI developers to help reach the goal. The web developer will develop the canvas where there has to be a balance between artistic and technical aspects of the website.
                                        A web developer will need to come up with a web page layout which will consist of screen resolutions, page pixels, aligning individual objects, and compressing texts."),
                    array("image" => "quality.png", "heading"=>"Quality Coding","para"=>"Any developer has to follow high standards of coding, this is helpful for everyone involved, from UI/UX developers, on page SEO experts, and developers making future upgrades to the web site. Quality coding consists of high page loading speeds, Information
                                        Accessibility, easy navigation, seamless interactions, good readability, responsive and adaptive across different devices and resolutions. All of this has to be made on a solid foundation with solid basics of web development
                                        principles."),
                );
                $i=0;
                while($i<4){ //********************CHANGE THE VALUE IF ADDING MORE ROWS************** */
                ?>
                <div class="sec-title2 text-center mb-30 services-box-custom">
                    <!-- <div class="container"> -->
                        <div class="row align-items-center flex-sm-row">
                            <div class="col-sm-4 md-mb-15 pl-60 md-pl-15">
                                <div class="custom_images">
                                    <img  src="assets/images/training/web/<?php echo $training[$i]['image']; ?>" alt="">
                                </div>
                            </div>
                            <div class="col-sm-8 pr-60 md-pr-15">
                                <h3><?php echo $training[$i]['heading']; ?></h3>
                                <p class="margin-0 text-justify"><?php echo $training[$i]['para']; ?>
                                </p>
                            </div>
                        </div><?php $i++; ?>
                    <!-- </div> -->
                </div>
                <div class="sec-title2 text-center mb-30 services-box-custom">
                    <!-- <div class="container"> -->
                        <div class="row align-items-center flex-column-reverse flex-sm-row">
                            <div class="col-sm-8 pl-60 md-pl-15 md-pb-15">
                                        <h3><?php echo $training[$i]['heading']; ?>
                                        </h3>
                                        <p class="margin-0 text-justify"><?php echo $training[$i]['para']; ?>
                                    </p>
                            </div>
                            <div class="col-sm-4 md-mb-10 pr-60 md-pr-15 md-pb-15">
                                <div class="custom_images">
                                    <img src="assets/images/training/web/<?php echo $training[$i]['image']; ?>" alt="">
                                </div>
                            </div>
                        </div>
                    <!-- </div> -->
                </div> 
                
                <?php $i++; }?>
                </div>
        </div>
        <!-- paragraph Section End -->
        <!-- Services Section Start -->
        <div class="rs-services style2 pb-60 md-pt-10 md-pb-10 ">
            <div class="container ">
                <div class="sec-title2 text-center pt-30 mb-30">
                    <span class="sub-text style-bg">Industries</span>
                    <h2 class="title">
                        Web Designing Synopsis
                    </h2>
                </div>
                <div class="row ">
                    <?php $synopsys = array(
                    array("image"=>"web-design-2.svg","heading"=>"Web Design","points"=>array("Introduction to Web Design","Client and Server","Domain Names & DNS","Static & Dynamic")),
                    array("image"=>"multimedia.svg","heading"=>"Web Media And Web Assets","points"=>array("Introduction of Stock Photos and videos","Types of Images and videos","Design Complex and simple website Layout","Creating Custom Effects")),
                    array("image"=>"desktop.svg","heading"=>"HTML","points"=>array("Structure of HTML","Basic and Advanced HTML Tags","Creating Simple HTML Pages","Introduction to Doc Types")),
                    array("image"=>"coding.svg","heading"=>"CSS","points"=>array("Introduction to CSS","Types of style sheets and CSS Selectors","Custom CSS Layout Design","CSS Tips and Tricks with Hacks")),
                    array("image"=>"coding_1.svg","heading"=>"Java Script",
                                            "points"=>array("Client and Server-side scripting","Introduction to Java Scripting","Types of Java Scripts","javascript functions")),
                    array("image"=>"data.svg","heading"=>"PHP",
                                            "points"=>array("Introduction to PHP, HTML, Client-Server communication, Web basics","Embedding PHP in HTML, Using Dynamic Data, Database, Local Storage, Sessions","API integration, Javascript, AJAX, JQuery basics","Website Deployment")),
                    array("image"=>"pencil.svg","heading"=>"Functional Websites",
                                            "points"=>array("Client Requirements/Specifications","Creating a concept, color Schemes and layout","Design a Professional Layout","Implementing JavaScript, ECommerce and more")),
                    array("image"=>"server.svg","heading"=>"Web Hosting",
                                            "points"=>array("Basics of Web Hosting","Linux and Windows CP","Using FTP functionalities","Maintaining a Website")),
                    array("image"=>"testing.svg","heading"=>"Testing",
                                            "points"=>array("Responsive and adaptive testing","Functionality and interface testing","Performance and security testing","Compatibility and usability testing"))
                );
                $i=0;
                $count = count($synopsys);
                while($i<$count){
                ?>
                    <div class="col-lg-4 col-md-6 mb-25 ">
                        <div class="flip-box-inner ">
                            <div class="flip-box-wrap ">
                                <div class="front-part ">
                                    <div class="front-content-part1 " style="height: 450px;">
                                        <div class="front-icon-part ">
                                            <div class="icon-part ">
                                                <img src="assets/images/training/<?php echo $synopsys[$i]['image']; ?>" alt="web design">
                                            </div>
                                        </div>
                                        <div class="front-title-part ">
                                            <h3 class="title "><a href="# "><?php echo $synopsys[$i]['heading']; ?></a></h3>
                                        </div>
                                        <div class="front-desc-part ">
                                            <ul class="dots"><?php foreach($synopsys[$i]['points'] as $point){ ?>
                                                <li><?php echo "$point"; ?>
                                            </li><?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $i++; 
            } ?>
                </div>
            </div>
        </div>
        <!-- Services Section End -->
		
		<div id="scrollUp" class="orange-color">
			<a class="readon learn-more" href="course-enrollment.php">
				<h6 class="title-view-more">Enroll Now</h6>
			</a>
		</div>
		
<?php 
 include "template/footer.php";
?>