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
        <h4>Organizers</h4>
        <h6>Steering committee</h6>
        <ul>
            <li>Saiful Khondaker, Chair (University of Central Florida)</li>
            <li>Yeonwoong (Eric) Jung, Co-Chair (University of Central Florida)</li>
        </ul>

        <h6>Organizing committee</h6>
        <ul>
            <li>Luis Balicas (Florida State University)</li>
            <li>Matthias Batzill (University of South Florida)</li>
            <li>Humberto Rodriguez Gutierrez (University of South Florida)</li>
            <li>Jing Guo (University of Florida)</li>
            <li>Chang-Yong Nam (Brookhaven National Lab)</li>
            <li>Gwan-Hyoung Lee (Yonsei University, Korea)</li>
            <li>Saiful Khondaker (University of Central Florida)</li>
            <li>Yeonwoong (Eric) Jung (University of Central Florida)</li>
        </ul>
    </div>

</section>

<?php 
// Get footer.php
require_once('includes/footer.php');
?>