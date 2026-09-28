<?php
//include('./config.php');
include('./backend/config.php');

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $options = $_POST['options'];
    $date = $_POST['date'];
    $notes = $_POST['notes'];
};

$sql = "INSERT INTO customers (fullname, tel, email, gender, options, date, notes) VALUES ($fullname, $tel, '$email', '$gender', '$options', '$date', '$notes')";

if (mysqli_query($conn, $sql)) {
    echo "Appointment booked successfully";
} else {
    echo "Error" . mysqli_error($conn);
}
