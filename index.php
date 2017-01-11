<?php 
// Get header.php and set page title
require_once('includes/header.php');
$page_title = 'Home';
?>

<!-- Page content -->
<section class="row">
    <div class="two columns">
        <?php
        // Insert the sidebar
        require_once('includes/sidebar.php');
        ?>
    </div>

    <div class="seven columns">
        <!-- Overview -->
        <h4>February 3-4, 2017 | Orlando, FL</h4>
        <p>2D materials beyond graphene are receiving enormous attention due to their potential in revolutionizing our understanding of fundamental sciences as well as our ability to push the limits of electronics for applications in nanodevices and smart materials. This <strong>2nd International Symposium on Science and Technology of 2D materials</strong> aims to create an environment where leading experts in the field, young researchers and students involved in all aspects of 2D materials research can start a dialog, develop new knowledge and foster new ideas that will shape the future of 2D materials research. The workshop will feature Lectures by leading scientists in the field of 2D materials to present advances at the forefront of the field.</p>

        <div class="sponsors">
            <!-- Sponsors -->
            <h4>Our Sponsors</h4>

            <!-- Diamond -->
            <div class="platinum">
                <h5>Diamond Sponsors</h5>

                 <!-- Research and Commercialization -->
                <a href="http://www.research.ucf.edu/">
                    <img src="images/sponsors/research.png">
                </a>
                <!-- Graduate Studies -->
                <a href="http://www.graduate.ucf.edu/">
                    <img src="images/sponsors/gradstudies.png">
                </a>
                <!-- College of Sciences -->
                <a href="http://www.sciences.ucf.edu/">
                    <img src="images/sponsors/sciences.png">
                </a>
                <!-- CREOL -->
                <a href="http://www.creol.ucf.edu/">
                    <img src="images/sponsors/creol.png">
                </a>

            </div>

            <!-- Platinum -->
            <div class="platinum">
                <h5>Platinum Sponsors</h5>

                <!-- Nova -->
                <a href="http://www.novawafers.com/">
                    <img src="images/sponsors/nova.png">
                </a>
                <!-- Ultratech -->
                <a href="http://www.cambridgenanotechald.com/">
                    <img src="images/sponsors/ultratech.png">
                </a>
                <!-- Park Systems -->
                <a href="http://www.parkafm.com/">
                    <img src="images/sponsors/park.png">
                </a>
            </div>

            <!-- Silver -->
            <div class="silver">
                <h5>Silver Sponsors</h5>
                
                <!-- Engineering and Compsci -->
                <a href="http://www.cecs.ucf.edu/">
                    <img src="images/sponsors/compsci.png">
                </a>
                <!-- Thorlabs -->
                <a href="https://www.thorlabs.com/">
                    <img src="images/sponsors/thorlabs.png">
                </a>
                <!-- Itechu -->
                <a href="">
                    <img src="images/sponsors/itechu.png">
                </a>
                <!-- Mantis Sigma -->
                <a href="http://www.sigma-surface-science.com/about-us/">
                    <img src="images/sponsors/mantissigma.png">
                </a>
                <!-- Femto Science -->
                <a href="http://www.femtoscience.co.kr/gnuboard4/">
                    <img src="images/sponsors/femtoscience.png">
                </a>
                <!-- Scienta Omicron -->
                <a href="http://www.scientaomicron.com/en/home">
                    <img src="images/sponsors/scientaomicron.png">
                </a>
                <!-- 2D Materials Journal -->
                <a href="http://iopscience.iop.org/journal/2053-1583;jsessionid=2400C8796557B6D0157805B0CEA4C2EF.c1.iopscience.cld.iop.org">
                    <img src="images/sponsors/2dmaterials.png">
                </a>
                <!-- Zeiss -->
                <a href="https://www.zeiss.com/global/home.html">
                    <img src="images/sponsors/zeiss.png">
                </a>
            </div>

        </div>
    </div>

    <div class="three columns">
        <h6>Important dates</h6>
        <p>Early bird registration: Jan 20, 2017</p>
        <p>Abstract Submission: <i>Deadline extended to Jan 13, 2017</i></p>

        <h6>News</h6>
        <p><a href="program.php">Scientific program and book of abstracts</a> is published</p>

        <h6>Gallery</h6>
        <p><a href="gallery.php">View photos from the workshop</a></p>

        <h6>Symposium Archive</h6>
        <p><a href="http://nanoscience.ucf.edu/st2dflorida2015/">View past Symposium websites</a></p>
    </div>
</section>


<?php 
// Get footer.php
require_once('includes/footer.php');
?>