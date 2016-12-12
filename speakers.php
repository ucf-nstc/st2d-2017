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
        <h4>Invited Speakers</h4>
        <ul>
        	<li><b>Pulickel Ajayan</b>, Rice University</li>
        	<li><b>James Hone</b>, Columbia University</li>
        	<li><b>Eric Pop</b>, Stanford University</li>
        	<li><b>C.N. (Jennie) Lau</b>, UC Riverside</li>
        	<li><b>Ali Javey</b>, UC Berkley</li>
        	<li><b>Deji Akinwande</b>, UT Austin</li>
        	<li><b>Sefaattin Tongay</b>, Arizona State University</li>
        	<li><b>Changgu Lee</b>, SKKU, Korea</li>
        	<li><b>Philip Hofmann</b>, Aarhus University, Denmark</li>
        	<li><b>Gwan-Hyoung Lee</b>, Yonsei University, Korea</li>
        	<li><b>David Geohegan</b>, Oak Ridge National Lab</li>
        	<li><b>Koray Aydin</b>, Northwestern University</li>
        	<li><b>Nikhil Koratkar</b>, Rensselaer Polytechnic Institute</li>
        	<li><b>Richard Hennig</b>, University of Florida</li>
		</ul>
    </div>

</section>

<?php 
// Get footer.php
require_once('includes/footer.php');
?>