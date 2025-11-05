<?php
include 'config.php';

$to_email = "merlinjose51@gmail.com"; // Change to your email
$subject_prefix = "New Application - ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);
    $cover_letter = mysqli_real_escape_string($conn, $_POST['cover_letter']);

    // File upload
    $resume = "";
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == 0) {
        $allowed_types = array('pdf', 'doc', 'docx');
        $file_name = $_FILES['resume']['name'];
        $file_tmp = $_FILES['resume']['tmp_name'];
        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (in_array($file_type, $allowed_types)) {
            $new_file_name = uniqid() . '_' . $file_name;
            $upload_dir = "uploads/";

            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0755, true);
            }

            $resume = $upload_dir . $new_file_name;
            move_uploaded_file($file_tmp, $resume);
        }
    }

    // Insert into database (IMPORTANT FIX)
    $sql = "INSERT INTO career_application (full_name, email, phone, position, cover_letter, resume, created_at) 
            VALUES ('$full_name', '$email', '$phone', '$position', '$cover_letter', '$resume', NOW())";

    if ($conn->query($sql) === TRUE) {

        $email_subject = $subject_prefix . $position;
        $email_message = "New Career Application Received:\n\n";
        $email_message .= "Full Name: $full_name\n";
        $email_message .= "Email: $email\n";
        $email_message .= "Phone: $phone\n";
        $email_message .= "Position: $position\n";
        $email_message .= "Cover Letter:\n$cover_letter\n";

        $headers = "From: $email\r\nReply-To: $email\r\n";

        mail($to_email, $email_subject, $email_message, $headers);

        echo "<script>alert('Application submitted successfully!'); window.location.href='index.html#careers';</script>";
    } else {
        echo "<script>alert('Something went wrong. Try again.'); window.location.href='index.html#careers';</script>";
    }

    $conn->close();
}
?>
