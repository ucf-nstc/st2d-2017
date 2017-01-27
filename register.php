<?php 
// Get header.php and set page title
require_once('includes/header.php');
$page_title = 'Register';
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
		<h6><i>The registration fee includes coffee, lunch on both days, and reception during the poster presentation</i></h6>
        <h6>Early bird registration by Jan 29, 2017</h6>
        <ul>
        	<li>Regular: $100</li>
        	<li>Student: $50</li>
        </ul>

        <h6>On-site Registration</h6>
        <ul>
        	<li>Regular: $150</li>
        	<li>Student: $75</li>
        </ul>
        <p><i>To register, click below and select ticket type and quantity on the next page.</i></p>
        <a class="button button-primary" href="https://www.eventbrite.com/e/st2d-florida-2017-tickets-30536445330">Register Now</a>
    </div>

</section>

<?php 
// Get footer.php
require_once('includes/footer.php');
?>