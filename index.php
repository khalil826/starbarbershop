<?php
declare(strict_types=1);
// This serves the same single page as index.html. Requires PHP 8+.
// Edit the German and English address, hours and contact text in index.html.
header('Content-Type: text/html; charset=UTF-8');
$html = file_get_contents(__DIR__ . '/index.html');
if ($html === false) {
    http_response_code(500);
    exit('Die Website ist vorübergehend nicht verfügbar.');
}
echo str_replace('© 2026 Star Barbershop', '© ' . date('Y') . ' Star Barbershop', $html);
