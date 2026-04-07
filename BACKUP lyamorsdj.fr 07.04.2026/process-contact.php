<?php
/**
 * TRAITEMENT FORMULAIRE CONTACT - LYAMORS DJ
 * Envoi de mail via SMTP en HTML
 */

// Charger la configuration
require_once 'configmail.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

// Récupération et sanitisation des données
$prenom = sanitize_string($_POST['prenom'] ?? '');
$nom = sanitize_string($_POST['nom'] ?? '');
$email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
$telephone = sanitize_string($_POST['telephone'] ?? '');
$sujet = sanitize_string($_POST['sujet'] ?? 'autre');
$message = sanitize_string($_POST['message'] ?? '');

// Validation
$errors = [];

if (empty($prenom)) $errors[] = get_message('error_empty');
if (empty($nom)) $errors[] = get_message('error_empty');
if (empty($email) || !validate_email($email)) $errors[] = get_message('error_email');
if (empty($message)) $errors[] = get_message('error_empty');
if (strlen($message) > MAX_MESSAGE_LENGTH) $errors[] = get_message('error_length');

// Si erreurs, redirection
if (!empty($errors)) {
    log_action('contact_form_error', ['errors' => $errors]);
    header('Location: contact.php?error=1');
    exit;
}

// Traduction du sujet
$sujet_libelle = get_subject_label($sujet);

// Récupération de la date
$date = date('d/m/Y à H:i');

// Préparation des variables pour le template
$template_vars = [
    'title' => 'Nouveau message reçu',
    'subtitle' => 'via le formulaire de contact',
    'icon' => '✉️',
    'prenom' => $prenom,
    'nom' => $nom,
    'email' => $email,
    'telephone' => $telephone,
    'sujet' => $sujet_libelle,
    'message' => $message,
    'date' => $date,
];

// Génération du mail HTML
$mail_html = load_template(TEMPLATE_CONTACT, $template_vars);

if ($mail_html === false) {
    log_action('contact_template_error', ['template' => TEMPLATE_CONTACT]);
    header('Location: contact.php?error=1');
    exit;
}

// Configuration du mail
$mail_to = MAIL_TO;
$mail_subject = '[LYAMORS DJ] Nouveau message - ' . $sujet_libelle;

// Envoi du mail à l'association
$send_result = send_smtp_mail($mail_to, $mail_subject, $mail_html, MAIL_FROM, MAIL_FROM_NAME);

if ($send_result) {
    log_action('contact_form_sent', [
        'from' => $email,
        'to' => $mail_to,
        'subject' => $sujet_libelle,
        'date' => $date
    ]);
    
    // Envoi d'une confirmation à l'utilisateur
    $confirmation_vars = [
        'title' => 'Message reçu !',
        'subtitle' => 'Merci de nous avoir contactés',
        'icon' => '✓',
        'prenom' => $prenom,
    ];
    
    $confirmation_html = load_template(TEMPLATE_CONTACT, $confirmation_vars);
    
    if ($confirmation_html !== false) {
        send_smtp_mail($email, 'Nous avons reçu votre message - LYAMORS DJ', $confirmation_html, MAIL_FROM, MAIL_FROM_NAME);
    }
    
    header('Location: contact.php?success=1');
    exit;
} else {
    log_action('contact_form_send_failed', ['to' => $email, 'subject' => $sujet_libelle]);
    header('Location: contact.php?error=1');
    exit;
}
?>
