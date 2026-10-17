<?php
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$hostName = strtolower((string) parse_url('http://' . $host, PHP_URL_HOST));
$isLocalhost = in_array($hostName, ['localhost', '127.0.0.1', '::1'], true)
    || substr($hostName, -5) === '.test';
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$scriptDirectory = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/'));
$basePath = in_array($scriptDirectory, ['.', '/'], true) ? '' : rtrim($scriptDirectory, '/');
define('SITE_URL', $isLocalhost ? $scheme . '://' . $host . $basePath : 'https://truyen0hay.site');
define('API_BASE_URL', 'https://api.mangadex.org');
define('COVER_BASE_URL', '/proxy-0hay.php?url=' . urlencode('https://uploads.mangadex.org/covers')); 
define('SITE_NAME', 'TRUYENOHAY');
define('LIMIT_PER_PAGE', 18);
define('R18', false);
define('TRANSLATED_LANGUAGES', ['vi']);
?>