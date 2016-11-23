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

	<div class="ten columns">
        <h4>Important Dates</h4>

        <div class="row"></div>
            <div class="columns four no-margin">
                <h6>Registration</h6>
                <p>Early registration by Jan 20, 2017</p>
                <a class="button">coming soon</a>
            </div>

            <div class="columns four">
                <h6>Abstract Submission</h6>
                <p>Abstract submission by Jan 2, 2017</p>
                <a class="button">coming soon</a>
            </div>
        </div>

    </div>

</section>

<?php 
// Get footer.php
require_once('includes/footer.php');
?>