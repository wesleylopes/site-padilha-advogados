<?php
declare(strict_types=1);
$relative = ltrim((string)($_GET['path'] ?? ''), '/');
$root = realpath(dirname(__DIR__));
$file = realpath($root . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $relative));
if (!$file || !$root || !str_starts_with($file, $root . DIRECTORY_SEPARATOR) || !is_file($file)) { http_response_code(404); exit('Not found'); }
$types = ['css'=>'text/css; charset=utf-8','js'=>'application/javascript; charset=utf-8','png'=>'image/png','jpg'=>'image/jpeg','jpeg'=>'image/jpeg','webp'=>'image/webp','svg'=>'image/svg+xml','md'=>'text/plain; charset=utf-8'];
$ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
header('Content-Type: ' . ($types[$ext] ?? 'application/octet-stream'));
header('Cache-Control: public, max-age=31536000, immutable');
readfile($file);
