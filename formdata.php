<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $secretcode = $_POST['password'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $jobrole = $_POST['role'];
    $skills = isset($_POST['skill']) ? $_POST['skill'] : [];
    $date = $_POST['date'];
    $experience = $_POST['experience'];
    $resume = $_FILES['resume'];

    // Handle the uploaded file
    if ($resume['error'] == UPLOAD_ERR_OK) {
        $upload_dir = 'uploads/';
        $upload_file = $upload_dir . basename($resume['name']);
        move_uploaded_file($resume['tmp_name'], $upload_file);
        $resume_path = $upload_file;
    } else {
        $resume_path = 'Upload failed.';
    }

    echo "Name: $name</br>";
    echo "Email: $email</br>";
    echo "Secret Code: $secretcode</br>";
    echo "Gender: $gender</br>";
    echo "Address: $address</br>";
    echo "Job Role: $jobrole</br>";
    echo "Skills: " . implode(", ", $skills) . "</br>";
    echo "Date: $date</br>";
    echo "Experience: $experience years</br>";
    echo "Resume: $resume_path</br>";
}
?>