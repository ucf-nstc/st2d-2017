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
        <h4>Scope</h4>
        <p>The 2nd International Symposium on  Science and Technology of 2D materials at UCF is a multidisciplinary workshop devoted to exploring the fundamental and applied aspects of the state-of-the-art of 2D materials  to date, and to discussing unresolved challenges. To do so, the workshop will bring together the leaders in the field, as well as researchers and students involved in various aspects of 2D problems.
</p>
		<section class="row">
			<div class="five columns">
				<h3>Topics</h3>
				<ul>
					<li>Materials growth
					<li>Characterization</li>
					<li>Electronics</li>
					<li>Photonics</li>
					<li>Energy and Sensing</li>
					<li>Theory and Modeling</li>
				</ul>
			</div>
			<div class="seven columns">
				<h3>Objectives</h3>
				<ul>
					<li>Promoting multi-institution, multi-disciplinary discussions and collaborations</li>
					<li>Fostering collaborations between universities and industries</li>
					<li>Defining ground breaking initiatives</li>
					<li>Training students with a stronger fundamental understanding and broader view of 2D materials</li>
				</ul>
			</div>
		</div>
    </section>

</section>

<?php 
// Get footer.php
require_once('includes/footer.php');
?>