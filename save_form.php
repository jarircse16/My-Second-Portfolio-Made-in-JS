<?php
// Set the default timezone to your desired timezone
date_default_timezone_set('Asia/Dhaka');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $projectDetails = $_POST["project_details"];
    $timestamp = date("Y-m-d H:i:s");

    $data = "Name: $name\nEmail: $email\nSubject: $subject\nProject Details: $projectDetails\nTimestamp: $timestamp\n\n";

    // Directory where you want to save the files
    $directory = "messages/";

    if (!is_dir($directory)) {
        // Create the directory if it doesn't exist
        mkdir($directory, 0755, true);
    }

    $filename = $directory . "form_submission_" . strtotime($timestamp) . ".txt";

    if (file_put_contents($filename, $data)) {
        echo "Message Sent Successfully.";
    } else {
        echo "Message Sending Failed.";
    }
}
?>
