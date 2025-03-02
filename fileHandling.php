<!-- Create a script that reads from a text file and displays its content on a web page. -->

<?php

$filename = "sample.txt"; // Specify the text file

// Check if the file exists
if (file_exists($filename)) {
    // Read the file content
    $content = file_get_contents($filename);

    // Display the content on the webpage
    echo "<h2>File Content:</h2>";
    echo "<pre>$content</pre>"; // Use <pre> to keep formatting
} else {
    echo "File not found!";
}

?>