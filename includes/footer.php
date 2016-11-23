<?php
	// Set contents of buffer to a intermediary variable
	$page_contents = ob_get_contents();
	ob_end_clean();

	// Replace <!--TITLE--> with $page_title, and print HTML
	echo str_replace('<!--TITLE-->', $page_title, $page_contents);
?>

<footer>
	<p>Science and Technology of 2D Materials <em>hosted by</em> the <a href="http://www.ucf.edu/">University of Central Florida</a>
	<br />Phone: 407-882-1578 &nbsp;&bull;&nbsp; Email: <a href="mailto:st2dflorida@gmail.com">st2dflorida@gmail.com</a></p>
</footer>

</div>
</body>
</html>
