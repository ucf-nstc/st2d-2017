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
        <h4>General Information</h4>
		<h5>Orlando</h5>
        <p>Orlando is one of the world’s renowned travel destination and home of several theme parks: Walt Disney World, Universal Studios, SeaWorld, LEGOLAND and many others. There are several world famous beaches within one to two hours’ drive. Nearby airports are Orlando International Airport · Orlando Sanford International Airport· More details about Orlando can be found in the <a href="http://www.visitorlando.com/">visit Orlando page</a>.</p>

		<h5>University of Central Florida (UCF)</h5>
        <p>The University of Central Florida, commonly referred to as UCF, is a metropolitan public research university located in Orlando, Florida, United States. It is America's second largest university with a student population of <a href="http://www.ucf.edu/ucf-facts-2014-2015">about 60,000</a>.</p>

		<h5>Directions to the UCF <a href="https://map.ucf.edu/directions">Main Campus</a></h5>
		<p><i>From Orlando International Airport:</i>
        <br>Go east on 528 to 417 north. Take 417 North to University Blvd. Exit east onto University Blvd. Continue east on University Blvd. for approximately two miles and it will take you to the main entrance to the campus. Make a right turn at the first light, Gemini Blvd. Follow the signs to the Visitor’s Information Center.</p>
        <p><i>From Orlando Sanford Airport:</i>
        <br>Take Lake Mary Blvd. to 417 South. Take 417 South to the University Blvd. exit. Exit east onto University Blvd. Continue east on University Blvd. for approximately two miles and it will take you to the main entrance to the campus. Make a right turn at the first light, Gemini Blvd. At the first stop sign you will see directions to the visitor’s information booth.</p>

		<h5>Venue</h5>
        <p>The workshop will take place in Harris Engineering Corporation (HEC in the pap) building room 101. Transportation to and from the conference hotel to the venue will be provided. If you come with your own car, you can park in garage C (PGC in the map)</p>
    </div>

</section>

<?php 
// Get footer.php
require_once('includes/footer.php');
?>