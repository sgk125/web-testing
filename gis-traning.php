<?php $title = ' | GIS Training';
 include "template/header.php";
?>

        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs gis">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">GIS Training</h1>

            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- paragraph Section Start -->
        <div class="rs-about pt-80 pb-30 md-pt-60 md-pb-30">
            <div class="container">
                <div class="sec-title2 text-center mb-30">
                    <div class="row align-items-center text-justify md-pr-30 md-pl-30">
                        <p>
                            Expertise in Geographic Information Systems (GIS) is becoming an important sought after skill in industries from IT sector to government agencies. Our GIS Specialization training, offered by experts in the field of GIS. we will teach you the skills required
                            to leverage GIS technology in your professional career. We have divided our entire GIS training in different categories, this is done for the students to choose the level of difficulty from their perspective.
                        </p>
                    </div>
                </div>
                <div class="sec-title2 text-center mb-30 services-box-custom">
                    <div class="container">
                        <div class="row align-items-center flex-md-row">
                            <div class="col-sm-4 md-mb-15 pl-60 md-pl-15">
                                <div class="custom_images">
                                    <img src="assets/images/training/gis/promotion.svg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-8 pr-60 md-pr-15">
                                <h3>GIS Beginner</h3>
                                <p class="margin-0 text-justify">
                                    This course is aimed at introducing the professionals to the basic concepts of GIS technology. This GIS training course covers principles of GIS and technologies associated with such as GPS (global positioning system), Lidar (Light Detection and Ranging),
                                    remote sensing, Digital Photogrammetry and more. As for career oriented direction, topics such as Functions of GIS, Data representation in GIS, and Applications of GIS are discussed at length.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sec-title2 text-center mb-30 services-box-custom">
                    <div class="container">
                        <div class="row align-items-center  flex-column-reverse flex-md-row">
                            <div class="col-sm-8 pl-60 md-pl-15 md-pb-15">
                                    <h3>GIS Intermediate
                                    </h3>
                                    <p class="margin-0 text-justify">
                                        This GIS training course is for professionals who are ready to develop applications with GIS, we introduce the professionals to technologies like QGIS, GRASS (Geographic Resources Analysis Support System) and GIS APIs. Basically here professionals are
                                    trained to develop applications using the GIS technology. Training is given to manage PostGIS DB, spatial analysis using Spatial DB, plugin development using C++, understanding the code and API of QGIS, and Developing
                                    standalone GIS applications using QGIS API.
                                    </p>
                            </div>
                            <div class="col-sm-4 md-mb-10 pr-60 md-pr-15 md-pb-15">
                                <div class="custom_images">
                                    <img src="assets/images/training/gis/promotion_1.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="sec-title2 text-center mb-30 services-box-custom">
                    <div class="container">
                        <div class="row align-items-center flex-md-row">
                            <div class="col-sm-4 md-mb-15 pl-60 md-pl-15">
                                <div class="custom_images">
                                    <img src="assets/images/training/gis/startup.svg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-8 pr-60 md-pr-15">
                                <h3>GIS advanced</h3>
                                <p class="margin-0 text-justify">
                                    This GIS training covers advanced topics such as Mobile Mapping with GPS, Electromagnetic Spectrum, Image Pre-Processing Techniques, Raster Data Structures, Map Layout & Printing, Types of Errors and their Resolutions and post processing. In this GIS
                                    training, professionals are taught to develop GIS application from scratch to finish. This training also helps professionals to understand and solve the problems and bugs associated with the GIS development process.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
        <!-- paragraph Section End -->
        <!-- Services Section Start -->
        <div class="rs-services style2 pb-60 md-pt-10 md-pb-10 ">
            <div class="container ">
                <div class="sec-title2 text-center mb-30">
                    <span class="sub-text style-bg">Syllabus</span>
                    <h2 class="title">
                        Detailed Syllabus
                    </h2>
                </div>
                <div class="row ">
                    <?php 
                    $syllabus = array(
                        array("image"=>"laptop.svg", "heading"=>"Introduction to GIS","points"=>
                            array("History of GIS","What is GIS?","GIS Functions","Components of GIS","GIS Capabilities","Advantages of GIS","pplications of GIS")
                        ),
                        array("image"=>"map.svg", "heading"=>"Mapping Concepts and Map projection","points"=>
                            array("What is a Map?","Elements of a Map","Map Characteristics","The shape of the earth","Measurements on the Globe","Map projection Concepts","Projection Types Based on Projection Surface","Determining a Coordinate System")
                        ),
                        array("image"=>"dimensions.svg", "heading"=>"Spatial Data Models","points"=>
                            array("Basis data models","Vector Data Models","Raster Data Models","Triangulated Irregular Network data Model","Choosing a Spatial data Representation")
                        ),
                        array("image"=>"database.svg", "heading"=>"Database Concepts in GIS","points"=>
                            array("Information Management","Application Oriented approach","The Database Approach","Database Terms","Types of Database Management Systems","Relational Database Management Systems (RDBMS)","Database Design","Database Implementation")
                        ),
                        array("image"=>"research.svg", "heading"=>"Overview of GIS Software","points"=>
                            array("Software Introduction","Data Inputting and Georeferencing","Working with attributes","Digitizing map data","Vector Styling and Symbolization","Making a map","Usage of Plugins")
                        ),
                        array("image"=>"fusion.svg", "heading"=>"Vector Analysis","points"=>
                            array("Geoprocessing","Geoprocessing Tools","Performing Geoprocessing Tasks","Factors affecting the analysis","Types of Geographic features")
                        ),
                        array("image"=>"raster-graphics.svg", "heading"=>"Raster Analysis","points"=>
                            array("Cell Based Modelling with Raster","Data Integration","The Raster Calculator","Cell Distribution and Statistics","Surface Analysis","Spatial Modelling","Interpolation Methods","Conversion")
                        ),
                        array("image"=>"global-network.svg", "heading"=>"Network Analysis","points"=>
                            array("Types of Network Features","Network Flow","Network Weights","Analysis on a Network","How Networks are Built","Network Snapping Models","Network Build Errors","Linear referencing")
                        ),
                        array("image"=>"3d-modeling.svg", "heading"=>"3D Analysis ","points"=>
                            array("Three Dimensional Visualization Techniques","Data Exporting","Conversion")
                        ),
                        array("image"=>"globe-grid.svg", "heading"=>"Geo Statistical Analysis","points"=>
                            array("Deterministic Methods","Geostatistical methods","Deterministic Methods for Spatial Interpolation")
                        ),
                        array("image"=>"satellite.svg", "heading"=>"Remote Sensing Principles and Applications","points"=>
                            array("Processes of Remote Sensing","Electromagnetic Radiation (EMR)","Interaction of EMR With Atmosphere and Earth","Spectral Reflectance and Spectral Signature","Remote Sensing Systems","Why Remote Sensing?","Sensors","Resolution","Remote Sensing Data","Remote sensing Data Utilization","Remote sensing Applications")
                        ),
                        array("image"=>"photography.svg", "heading"=>"Aerial Photography and photogrammetry","points"=>
                            array("Advantages and Limitations of Aerial Photographs","Aerial Cameras","Basic Characteristics of Aerial Photographs","Geometry of Vertical Photographs","Photogrammetric Elements","Measurements of aerial photos","Photogrammetric Instruments","Orthophotos","Digital Photogrammetry")
                        ),
                        array("image"=>"processing.svg", "heading"=>"Image Interpretation","points"=>
                            array("Who is an Interpreter?","Factors Governing Image Quality","Image Characteristics","Interpretation Keys or Elements of Interpretation","Feature Types Interpreted from Images","Steps in image Interpretation","Thematic Mapping Through Visual interpretation","Spectral Signatures of Objects","Concept of Multi-Images")
                        ),
                        array("image"=>"image-editor.svg", "heading"=>"Digital Image Processing","points"=>
                            array("Image Statistics and Histograms","Image Restoration","Image Enhancement","Digital Image classification")
                        ),
                        array("image"=>"map.svg", "heading"=>"Global Positioning System","points"=>
                            array("Components of a GPS","Types of Receivers by application","How GPS works","Factors that affect GPS","GPS Positioning Types","GPS Applications")
                        ),
                        array("image"=>"location.svg", "heading"=>"WEBGIS","points"=>
                            array("The Potential Of WebGis","Server side Strategies","Client Side Strategies")
                        ),

                    );
                    $i=0;
                    $count = count($syllabus);// assets/images/flipbox/
                    while($i<$count){
                    ?>
                        <div class="col-lg-4 col-md-6 mb-25 ">
                                <div class="flip-box-inner ">
                                    <div class="flip-box-wrap ">
                                        <div class="front-part ">
                                            <div class="front-content-part1 " style="height: 585px;">
                                                <div class="front-icon-part ">
                                                    <div class="icon-part ">
                                                        <img src="assets/images/training/<?php echo $syllabus[$i]['image']; ?>" alt="web design">
                                                    </div>
                                                </div>
                                                <div class="front-title-part ">
                                                    <h3 class="title "><a href="# "><?php echo $syllabus[$i]['heading']; ?></a></h3>
                                                </div>
                                                <div class="front-desc-part ">
                                                    <ul class="dots"><?php foreach($syllabus[$i]['points'] as $point){ ?>
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