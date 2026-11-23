<?php
header('Content-Type: application/json; charset=utf-8');
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { http_response_code(405); echo json_encode(['ok'=>false,'message'=>'Método não permitido']); exit; }
$input = json_decode(file_get_contents('php://input'), true) ?: $_POST;
$name = trim((string)($input['name'] ?? ''));
$email = trim((string)($input['email'] ?? ''));
$message = trim((string)($input['message'] ?? ''));
if ($name === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $message === '') { http_response_code(422); echo json_encode(['ok'=>false,'message'=>'Preencha nome, e-mail e mensagem.']); exit; }
// Configure SMTP/Resend antes de receber leads em produção.
echo json_encode(['ok'=>true,'message'=>'Mensagem recebida. Em breve entraremos em contato.']);
