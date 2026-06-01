<?php
declare(strict_types=1);

header('Content-Type: application/json');
header('X-Robots-Tag: noindex, nofollow', true);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

$rawBody = file_get_contents('php://input') ?: '';
$payload = json_decode($rawBody, true);

if (!is_array($payload)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid JSON']);
    exit;
}

$name = trim((string)($payload['name'] ?? ''));
$email = trim((string)($payload['email'] ?? ''));
$phone = trim((string)($payload['phone'] ?? ''));
$message = trim((string)($payload['message'] ?? ''));

if ($name === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(['error' => 'Missing or invalid fields']);
    exit;
}

$config = [];
$configPath = dirname(__DIR__) . '/private/resend.php';
if (is_readable($configPath)) {
    $loadedConfig = require $configPath;
    if (is_array($loadedConfig)) {
        $config = $loadedConfig;
    }
}

$apiKey = getenv('RESEND_API_KEY') ?: (string)($config['api_key'] ?? '');
$from = (string)($config['from'] ?? 'Mzansi Bonds <noreply@mzansibonds.co.za>');
$to = (string)($config['to'] ?? 'hello@mzansibonds.co.za');

if ($apiKey === '') {
    http_response_code(500);
    echo json_encode(['error' => 'Resend API key is not configured']);
    exit;
}

$safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$safeEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$safePhone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
$safeMessage = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));

$emailBody = <<<HTML
<h2>New secret contact form test</h2>
<p><strong>Name:</strong> {$safeName}</p>
<p><strong>Email:</strong> {$safeEmail}</p>
<p><strong>Phone:</strong> {$safePhone}</p>
<p><strong>Message:</strong></p>
<p>{$safeMessage}</p>
HTML;

$resendPayload = [
    'from' => $from,
    'to' => [$to],
    'reply_to' => $email,
    'subject' => 'Secret contact form test',
    'html' => $emailBody,
];

$ch = curl_init('https://api.resend.com/emails');
curl_setopt_array($ch, [
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => [
        'Authorization: Bearer ' . $apiKey,
        'Content-Type: application/json',
    ],
    CURLOPT_POSTFIELDS => json_encode($resendPayload),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 15,
]);

$responseBody = curl_exec($ch);
$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

if ($responseBody === false || $statusCode < 200 || $statusCode >= 300) {
    http_response_code(502);
    echo json_encode([
        'error' => 'Resend request failed',
        'status' => $statusCode,
        'detail' => $curlError ?: $responseBody,
    ]);
    exit;
}

echo json_encode(['ok' => true]);
