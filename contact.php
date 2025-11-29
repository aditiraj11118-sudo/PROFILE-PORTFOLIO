<?php
// Path to your PDF file
$filePath = "resume.pdf"; // make sure your PDF is in the same folder
$resumeName = "resume.pdf";

// Check if file exists
if (file_exists($filePath)) {

    // Clean any previous output
    if (ob_get_length()) {
        ob_end_clean();
    }

    // Set headers to force download
    header("Content-Type: application/pdf");
    header("Content-Disposition: attachment; filename=\"$resumeName\"");
    header("Content-Length: " . filesize($filePath));

    // Read the file and send to browser
    readfile($filePath);
    exit;

} else {
    echo "<p style='color:red; text-align:center; margin-top:50px;'>Error: Resume file not found!</p>";
}
?>
