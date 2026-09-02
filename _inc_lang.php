<?php
/**
 * Language layer — www.amineelkhal.com
 *
 * Resolution order: ?lang= (explicit) -> cookie -> Accept-Language -> fr (default).
 * URLs: FR = /   EN = /en/   (see .htaccess; ?lang=en keeps working as a fallback)
 *
 * Helpers available to the templates:
 *   t('hero.subtitle')   -> string, ready to print (copy is trusted, may contain HTML)
 *   e('hero.subtitle')   -> echoes it
 *   a('meta.title')      -> escaped for use inside an HTML attribute
 *   arr('projects.items')-> array, for foreach loops
 */

const SITE_URL   = 'https://www.amineelkhal.com';
const BIRTH_DATE = '1989-06-10';
const LANGS      = ['fr', 'en'];
const LANG_FALLBACK = 'fr';

/** Age, recomputed on every request so it never goes stale. */
function site_age()
{
    static $age = null;
    if ($age === null) {
        $birth = new DateTime(BIRTH_DATE, new DateTimeZone('Africa/Casablanca'));
        $now   = new DateTime('now', new DateTimeZone('Africa/Casablanca'));
        $age   = (int) $birth->diff($now)->y;
    }
    return $age;
}

function detect_lang()
{
    // 1. Explicit choice in the URL wins and is remembered for a year.
    if (isset($_GET['lang']) && in_array($_GET['lang'], LANGS, true)) {
        setcookie('lang', $_GET['lang'], time() + 31536000, '/');
        return $_GET['lang'];
    }
    // 2. Previously remembered choice.
    if (isset($_COOKIE['lang']) && in_array($_COOKIE['lang'], LANGS, true)) {
        return $_COOKIE['lang'];
    }
    // 3. Browser preference, first match wins.
    $accept = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '';
    foreach (explode(',', $accept) as $chunk) {
        $code = strtolower(substr(trim($chunk), 0, 2));
        if (in_array($code, LANGS, true)) {
            return $code;
        }
    }
    return LANG_FALLBACK;
}

$LANG = detect_lang();
$L    = require __DIR__ . '/lang/' . $LANG . '.php';

/** Dot-path lookup: 'projects.title' -> $L['projects']['title'] */
function lang_get($path)
{
    global $L;
    $node = $L;
    foreach (explode('.', $path) as $key) {
        if (!is_array($node) || !array_key_exists($key, $node)) {
            return null;
        }
        $node = $node[$key];
    }
    return $node;
}

function t($path)
{
    $value = lang_get($path);
    if (!is_string($value)) {
        return '';
    }
    return str_replace('{age}', (string) site_age(), $value);
}

function e($path)
{
    echo t($path);
}

/** Same string, safe to drop inside an HTML attribute. */
function a($path)
{
    return htmlspecialchars(strip_tags(t($path)), ENT_QUOTES, 'UTF-8', false);
}

function arr($path)
{
    $value = lang_get($path);
    return is_array($value) ? $value : [];
}

/** Canonical URL of the home page in a given language. */
function lang_url($lang)
{
    return $lang === LANG_FALLBACK ? SITE_URL . '/' : SITE_URL . '/' . $lang . '/';
}

/** The other language — this site only has two. */
function other_lang()
{
    global $LANG;
    return $LANG === 'fr' ? 'en' : 'fr';
}
