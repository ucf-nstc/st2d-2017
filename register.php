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

	<div class="eight columns">
        <h4>Registration</h4>
        <h6>Early bird registration by Jan 20, 2017</h6>
        <ul>
        	<li>Regular: $200</li>
        	<li>Student: $100</li>
        </ul>

        <h6>Registration after Jan 20, 2017</h6>
        <ul>
        	<li>Regular: $250</li>
        	<li>Student: $150</li>
        </ul>
    </div>

</section>

<?php 
// Get footer.php
require_once('includes/footer.php');
?>