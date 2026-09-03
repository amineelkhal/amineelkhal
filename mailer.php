<?php
/**
 * Contact form handler for amineelkhal.com
 *
 * Called in AJAX by the Form module in js/application.js (~line 3958):
 *   POST name, email, message, lang  ->  200 + plain text on success
 *                                    ->  4xx/5xx + plain text on failure
 * The response body is displayed as-is in .form-message, so keep it short.
 * Messages come from lang/<lang>.php, so the visitor is answered in their
 * own language.
 */

// Honour the language posted by the form before _inc_lang.php falls back to
// the cookie or Accept-Language.
if (isset($_POST['lang'])) {
    $_GET['lang'] = $_POST['lang'];
}
require __DIR__ . '/_inc_lang.php';

// L'hébergeur laisse display_errors actif : une erreur PHP renverrait sa trace
// au visiteur, chemins serveur compris. On journalise sans afficher.
ini_set('display_errors', '0');

header('Content-Type: text/plain; charset=utf-8');

const MAIL_TO      = 'info@amineelkhal.com';
const MAIL_FROM    = 'no-reply@amineelkhal.com'; // must belong to the domain, otherwise SPF/DMARC rejects it
const MIN_INTERVAL = 30; // seconds between two messages from the same visitor

function fail($key, $code = 400, $arg = null)
{
    http_response_code($code);
    $message = t('mailer.' . $key);
    echo $arg === null ? $message : sprintf($message, $arg);
    exit;
}

/**
 * Longueur d'une chaîne. L'extension mbstring n'est pas installée chez
 * l'hébergeur : mb_strlen() y provoque une erreur fatale. strlen() compte des
 * octets et non des caractères, ce qui rend seulement le plafond un peu plus
 * strict sur les textes accentués — sans importance pour un contrôle de taille.
 */
function str_length($value)
{
    return function_exists('mb_strlen') ? mb_strlen($value, 'UTF-8') : strlen($value);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    fail('method', 405);
}

// Simple flood protection, no database needed.
session_start();
$now = time();
if (isset($_SESSION['last_contact']) && ($now - $_SESSION['last_contact']) < MIN_INTERVAL) {
    fail('wait', 429);
}

$name    = trim((string) ($_POST['name'] ?? ''));
$email   = trim((string) ($_POST['email'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));

if ($name === '' || $email === '' || $message === '') {
    fail('fill');
}
if (str_length($name) > 100 || str_length($email) > 150 || str_length($message) > 5000) {
    fail('toolong');
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    fail('email');
}
// Header injection: a legitimate name or address never contains a line break.
if (preg_match('/[\r\n]/', $name . $email)) {
    fail('chars');
}

$subject = 'amineelkhal.com - message from ' . $name;
$body    = "Name    : {$name}\n"
         . "E-mail  : {$email}\n"
         . "Lang    : {$LANG}\n"
         . "Date    : " . date('Y-m-d H:i:s') . "\n"
         . "IP      : " . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . "\n"
         . "-----------------------------------------\n\n"
         . $message . "\n";

$headers = [
    'From: Amine ELKHAL Website <' . MAIL_FROM . '>',
    'Reply-To: ' . $name . ' <' . $email . '>',
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=utf-8',
    'X-Mailer: PHP/' . phpversion(),
];

$sent = mail(
    MAIL_TO,
    '=?UTF-8?B?' . base64_encode($subject) . '?=',
    $body,
    implode("\r\n", $headers),
    '-f' . MAIL_FROM
);

if (!$sent) {
    error_log('mailer.php: mail() failed for ' . $email);
    fail('failed', 500, MAIL_TO);
}

$_SESSION['last_contact'] = $now;
echo sprintf(t('mailer.success'), $name);
