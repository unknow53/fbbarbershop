<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name  = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $date  = $_POST['date'];
  $time  = $_POST['time'];
  $notes = $_POST['notes'];

  // Send email notification
  $to      = "your-email@example.com"; // Replace with your email
  $subject = "New Appointment Booking";
  $message = "New booking details:\nName: $name\nEmail: $email\nPhone: $phone\nDate: $date\nTime: $time\nNotes: $notes";
  $headers = "From: webmaster@example.com"; // Replace with an appropriate sender

  mail($to, $subject, $message, $headers);

  // Optionally, save to a database here

  echo "Booking submitted successfully!";
}
?>