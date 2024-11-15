<?php
// Initialize variables for error and success messages
$error = null;
$success = null;

// Include the database connection
$mysqli = require(__DIR__ . "/mail/database.php");

if (isset($_POST['send'])) {
    if (isset($_POST['email'])) {
        $email = htmlspecialchars($_POST['email']);
        $query = $mysqli->prepare("SELECT * FROM admins WHERE email = ?");
        $query->bind_param("s", $email);
        $query->execute();
        $mail_query = $query->get_result()->fetch_assoc();

        // Validate the email input and database query
        if (empty($email)) {
            $error = "Veuillez entrer votre adresse e-mail";
        } elseif (!$mail_query) {
            $error = "Nous n'avons trouvé aucun compte avec cet e-mail";
        } else {
            // Generate token and expiry
            $token = bin2hex(random_bytes(16));
            $token_hash = hash("sha256", $token);
            $expiry = date("Y-m-d H:i:s", time() + 60 * 30); // Token valid for 30 minutes

            // Update the database with the token and expiry
            $sql = "UPDATE admins
                    SET reset_token_hash = ?, 
                        reset_token_expires_at = ?
                    WHERE email = ?";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("sss", $token_hash, $expiry, $email);
            $stmt->execute();

            if ($mysqli->affected_rows) {
                // Load PHPMailer
                $mail = require __DIR__ . "/mail/mailer.php";

                // Configure the mail sender and receiver
                $mail->setFrom("noreply@example.com", "HOLY SPIRIT ACADEMIA CHURCH");
                $mail->addAddress($email);
                $mail->Subject = "Réinitialisation du mot de passe";
                $mail->CharSet = 'UTF-8';

                // Generate the token URL
                $token_url = "https://hollyspiritacademiachurch.com/pages/reset-password.php?token=$token";

                $mail->Body = <<<END
                <html>
                <head>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            background-color: #f5f5f5;
                            padding: 20px;
                            font-size: 1rem;
                        }
                        .container {
                            width: 100%;
                            padding: 40px 60px;
                            background-color: #fff;
                            box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.1);
                        }
                        .button {
                            padding: 10px 20px;
                            font-size: 16px;
                            background-color: #141b1f;
                            color: white;
                            text-decoration: none;
                            border-radius: 5px;
                        }
                    </style>
                </head>
                <body>
                    <div class="container">
                        <p>Bonjour,</p>
                        <p>Nous avons reçu une demande pour réinitialiser votre mot de passe. Cliquez sur le bouton ci-dessous pour continuer :</p>
                        <a class="button" href="$token_url">Réinitialiser le mot de passe</a>
                        <p>Si vous n'avez pas fait cette demande, veuillez ignorer cet e-mail.</p>
                    </div>
                </body>
                </html>
                END;

                // Try to send the email
                try {
                    $mail->send();
                    $success = "Message envoyé à cet e-mail, veuillez vérifier votre boîte de réception.";
                } catch (Exception $e) {
                    $error = "Le message n'a pas pu être envoyé. Erreur : {$mail->ErrorInfo}";
                }
            }
        }
    }
}
?>
