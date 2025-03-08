<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);
    $notes = htmlspecialchars($_POST['notes']);

    // Define the email recipient (your email address)
    $to = "darkwoodbargewi@gmail.com"; // Replace with your email

    // Subject of the email
    $subject = "Nouvelle réservation de rendez-vous - Barbershop Haut de Gamme";

    // Message body of the email
    $message = "
    Nouveau rendez-vous réservé :

    Nom: $name
    Email: $email
    Téléphone: $phone
    Date: $date
    Heure: $time
    Notes: $notes
    ";

    // Headers to send the email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8" . "\r\n";
    $headers .= "From: $email" . "\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Merci pour votre réservation, nous vous contacterons bientôt!";
    } else {
        echo "Désolé, une erreur est survenue. Veuillez réessayer plus tard.";
    }
} else {
    echo "Formulaire soumis de manière incorrecte.";
}
?>
