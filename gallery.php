<?php 
// Get header.php and set page title
require_once('includes/header.php');
$page_title = 'Gallery';
?>

<!-- Page content -->
<section class="row">
    <div class="two columns">
        <?php
        // Insert the sidebar
        require_once('includes/sidebar.php');
        ?>
    </div>

    <div class="ten columns gallery">
    <?php 
        // check if string has a valid image filename

        // Scan directory for image files and return array of image filename strings
        // takes a string representing the directory to scan
        function get_image_array($directory) {
            // Filter the images in the directory to make sure they have a valid filename
            $image_array = array_filter(scandir($directory), function($image_name) {
                $valid_extensions = array('jpg', 'png');
                $path_parts = pathinfo($directory . $image_name);

                foreach ($valid_extensions as $ext) {
                    if ($path_parts['extension'] == $ext) {
                        return true;
                    }
                }
                return false;
            });

            return $image_array;
        }
        
        // Displays an image gallery, using an array of filenames and a directory
        function display_image_gallery($image_array, $directory) {
            foreach ($image_array as $image) {
                $out  = '<div>';
                $out .= '<a href="' . $directory.$image . '">';
                $out .= '<img src="' . $directory.$image . '">';
                $out .= '</a>';
                $out .= '</div>';
                echo $out;
            }
        }

        // 'images/gallery' for live
        // 'images/sponsors' to test locally
        $directory = 'images/gallery';
        $image_array = get_image_array($directory);
        display_image_gallery($image_array, $directory);
    ?>
    </div>

</section>

<?php 
// Get footer.php
require_once('includes/footer.php');
?>