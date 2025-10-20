<form action="confirmation.php" method="GET">
    <div>
        <label for="nom">nom</label>
        <input type="nom" name="nom">
    </div>
    <div>
        <label for="email">email</label>
        <input type="email" name="email">
    </div>
    <div>
        <label for="message">Votre message</label>
        <textarea placeholder="Exprimez vous" name="message"></textarea>
    </div>
    <button type="submit">Envoyer</button>
</form>            
<?php
$to = "joycendurance@gmail.com"; // Adresse du destinataire
$subject = "Sujet de l'e-mail"; // Sujet de l'e-mail
$message = "Bonjour,\nCeci est le corps de l'e-mail.\nCordialement."; // Corps de l'e-mail

// En-têtes (facultatif mais recommandé)
$headers = "From: joycendurance@gmail.com\r\n"; // Adresse de l'expéditeur
$headers .= "Reply-To: joycendurance@gmail.com\r\n"; // Adresse pour les réponses
$headers .= "Content-Type: text/plain; charset=utf-8\r\n"; // Type de contenu et encodage

// Envoi de l'e-mail
if (mail($to, $subject, $message, $headers)) {
    echo "L'e-mail a été envoyé avec succès !";
} else {
    echo "L'e-mail n'a pas pu être envoyé.";
}
?>
