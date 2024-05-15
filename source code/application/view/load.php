<?php
class Load {
    // Defaults to constructor as no specific constructor is defined

    // Function to load the view file and pass data to it
    function view($file_name, $data = null) {
        // Check for data
        if(is_array($data)) {
            // Extract data array to variables
            extract($data);
        }

        // Concatenate the view file with .php extension to include the view as a PHP file
        include $file_name . '.php';
    }
}
?>