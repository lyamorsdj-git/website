<?php
/**
 * CONFIGURATION EMAIL - LYAMORS DJ
 * Paramètres SMTP et configuration d'envoi
 * 
 * CONFIDENTIEL - Ne pas partager
 */

// ============================
// CONFIGURATION SMTP
// ============================

define('MAIL_FROM', 'contact@lyamorsdj.fr');
define('MAIL_FROM_NAME', 'Ne Pas Répondre - Lyamors DJ');
define('MAIL_TO', 'contact@lyamorsdj.fr');

// Configuration SMTP (à adapter selon votre serveur)
define('SMTP_HOST', 'smtp.lyamorsdj.fr');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'ne-pas-repondre.mail@lyamorsdj.fr');
define('SMTP_PASSWORD', '36q82ghX$');
define('SMTP_SECURE', 'tls'); // 'tls' ou 'ssl'

// ============================
// TEMPLATES
// ============================

define('TEMPLATE_DIR', __DIR__);
define('TEMPLATE_CONTACT', 'templamail61g3sd1.html');

// ============================
// VALIDATION & LIMITES
// ============================

define('MAX_MESSAGE_LENGTH', 5000);
define('MAX_EMAIL_LENGTH', 255);
define('MAX_NAME_LENGTH', 100);

// ============================
// RÉPONSES & MESSAGES
// ============================

define('RESPONSE_SUCCESS', 'success');
define('RESPONSE_ERROR', 'error');

$MESSAGES = [
    'success' => 'Message envoyé avec succès ! On vous recontactera rapidement.',
    'error_empty' => 'Veuillez remplir tous les champs obligatoires.',
    'error_email' => 'Adresse email invalide.',
    'error_send' => 'Erreur lors de l envoi. Veuillez réessayer ou nous appeler.',
    'error_length' => 'Le message est trop long (maximum 5000 caractères).',
];

// ============================
// SUJETS & CATÉGORIES
// ============================

$SUBJECTS = [
    'benevole' => 'Devenir bénévole',
    'atelier' => 'Demander un atelier DJ',
    'partenariat' => 'Partenariat / Soutien',
    'evenement' => 'Événement à venir',
    'autre' => 'Autre',
];

// ============================
// FONCTIONS UTILITAIRES
// ============================

/**
 * Récupère un sujet par sa clé
 */
function get_subject_label($key) {
    global $SUBJECTS;
    return $SUBJECTS[$key] ?? 'Autre';
}

/**
 * Récupère un message par sa clé
 */
function get_message($key) {
    global $MESSAGES;
    return $MESSAGES[$key] ?? 'Une erreur est survenue.';
}

/**
 * Valide une adresse email
 */
function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * Sanitise une chaîne de caractères
 */
function sanitize_string($str) {
    return htmlspecialchars(trim($str), ENT_QUOTES, 'UTF-8');
}

/**
 * Charge un template de mail
 */
function load_template($template_name, $variables = []) {
    $template_path = TEMPLATE_DIR . '/' . $template_name;
    
    if (!file_exists($template_path)) {
        return false;
    }
    
    // Extract variables pour les rendre disponibles dans le template
    extract($variables, EXTR_SKIP);
    
    ob_start();
    include $template_path;
    $content = ob_get_clean();
    
    return $content;
}

/**
 * Envoie un email SMTP
 */
function send_smtp_mail($to, $subject, $message, $from = MAIL_FROM, $from_name = MAIL_FROM_NAME) {
    $headers = [
        'MIME-Version: 1.0',
        'Content-type: text/html; charset=UTF-8',
        'From: ' . $from_name . ' <' . $from . '>',
        'Reply-To: ' . $from,
        'X-Mailer: LYAMORS DJ Contact System',
    ];
    
    return mail($to, $subject, $message, implode("\r\n", $headers));
}

/**
 * Log une action (pour debugging)
 */
function log_action($action, $data = []) {
    $log_file = __DIR__ . '/mail.log';
    $timestamp = date('Y-m-d H:i:s');
    $log_data = json_encode($data);
    $log_entry = "[$timestamp] $action - $log_data\n";
    
    // Ne pas créer le fichier log en production
    if (defined('DEBUG_MODE') && DEBUG_MODE) {
        error_log($log_entry, 3, $log_file);
    }
}

?>
