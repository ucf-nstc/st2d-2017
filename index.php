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