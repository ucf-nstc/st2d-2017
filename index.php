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
        <h4>February 3-4, 2017 | Orlando, FL</h4>
        <p>2D materials beyond graphene are receiving enormous attention due to their potential in revolutionizing our understanding of fundamental sciences as well as our ability to push the limits of electronics for applications in nanodevices and smart materials. This <strong>2nd International Symposium on Science and Technology of 2D materials</strong> aims to create an environment where leading experts in the field, young researchers and students involved in all aspects of 2D materials research can start a dialog, develop new knowledge and foster new ideas that will shape the future of 2D materials research. The workshop will feature Lectures by leading scientists in the field of 2D materials to present advances at the forefront of the field.</p>
    </div>

    <div class="three columns">
        <h6>Important dates</h6>
        <p>Early bird registration: Jan 20, 2017</p>
        <p>Abstract Submission: Jan 2, 2017</p>

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