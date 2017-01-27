<?php 
// Get header.php and set page title
require_once('includes/header.php');
$page_title = 'Organizers';
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
        <h4>Organizing Committee</h4>
        <ul>
        	<li><b>Saiful Khondaker</b>, <i>Chair</i>, University of Central Florida</li>
            <li><b>Yeonwoong (Eric) Jung</b>, <i>Co-Chair</i>, University of Central Florida</li>
            <li><b>Luis Balicas</b>, Florida State University</li>
            <li><b>Matthias Batzill</b>, University of South Florida</li>
            <li><b>Humberto Rodriguez Gutierrez</b>, University of South Florida</li>
            <li><b>Jing Guo</b>, University of Florida</li>
            <li><b>Chang-Yong Nam</b>, Brookhaven National Lab</li>
            <li><b>Gwan-Hyoung Lee</b>, Yonsei University</b>, Korea</li>
        </ul>
    </div>

</section>

<?php 
// Get footer.php
require_once('includes/footer.php');
?>