<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $date = htmlspecialchars($_POST['date']);
    $guests = htmlspecialchars($_POST['guests']);
    $message = htmlspecialchars($_POST['message']);

    // Simulation de succès
    echo "<!DOCTYPE html>
    <html lang='fr'>
    <head>
        <meta charset='UTF-8'>
        <script src='https://cdn.tailwindcss.com'></script>
        <title>Confirmation</title>
    </head>
    <body class='bg-black text-white h-screen flex flex-col items-center justify-center p-4 font-serif'>
        <div class='max-w-md text-center border border-[#d4af37] p-10'>
            <h1 class='text-3xl mb-4 text-[#d4af37]'>Merci, $name.</h1>
            <p class='text-gray-400 mb-8'>Votre demande de réservation pour le $date ($guests personnes) a été bien reçue. Nous vous contacterons par email sous peu.</p>
            <a href='index.php' class='uppercase tracking-widest text-xs border border-white px-6 py-2 hover:bg-white hover:text-black transition-all'>Retour au site</a>
        </div>
    </body>
    </html>";
} else {
    header("Location: index.php");
    exit();
}
?>
