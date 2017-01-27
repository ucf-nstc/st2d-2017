<?php 
// Get header.php and set page title
require_once('includes/header.php');
$page_title = 'Program';
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
        <h4>Program</h4>
        <p><em>Below is a PDF version of the Program.</em></p>
        <a href="./files/program.pdf"><button class="button">Download PDF</button>
    </div>

</section>

<?php 
// Get footer.php
require_once('includes/footer.php');
?>