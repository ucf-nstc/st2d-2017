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

            <!-- Platinum -->
            <div class="platinum">
                <h5>Platinum Sponsors ($1000+)</h5>

                <!-- Research and Commercialization -->
                <img src="images/sponsors/research.png">
                <!-- Graduate Studies -->
                <img src="images/sponsors/gradstudies.png">
                <!-- College of Sciences -->
                <img src="images/sponsors/sciences.png">
                <!-- CREOL -->
                <img src="images/sponsors/creol.png">
                <!-- Nova -->
                <img src="images/sponsors/nova.png">
                <!-- Ultratech -->
                <img src="images/sponsors/ultratech.png">
            </div>

            <!-- Silver -->
            <div class="silver">
                <h5>Silver Sponsors ($500+)</h5>
                
                <!-- Engineering and Compsci -->
                <img src="images/sponsors/research.png">
                <!-- Thorlabs -->
                <img src="images/sponsors/thorlabs.png">
                <!-- Itechu -->
                <img src="images/sponsors/itechu.png">
                <!-- Mantis Sigma -->
                <img src="images/sponsors/mantissigma.png">
                <!-- Femto Science -->
                <img src="images/sponsors/femtoscience.png">
                <!-- Scienta Omicron -->
                <img src="images/sponsors/scientaomicron.png">
                <!-- 2D Materials Journal -->
                <img src="images/sponsors/2dmaterials.png">
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