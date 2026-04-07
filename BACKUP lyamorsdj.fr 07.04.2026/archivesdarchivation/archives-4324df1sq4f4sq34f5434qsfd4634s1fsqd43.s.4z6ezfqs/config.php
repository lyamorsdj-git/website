<?php

declare(strict_types=1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

const SITE_DATA_FILE = __DIR__ . '/data.json';
const ADMIN_USERNAME = 'admin';
const ADMIN_PASSWORD_HASH = '$2y$12$X4djaPbDHekrRERKPEbCaeTsQn9uEqjZ2gRCI7gZTEu7QJ1wzCDH6'; // ChangeMe123!

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function loadSiteData(): array
{
    if (!file_exists(SITE_DATA_FILE)) {
        return [];
    }

    $json = file_get_contents(SITE_DATA_FILE);
    if ($json === false) {
        return [];
    }

    $data = json_decode($json, true);
    return is_array($data) ? $data : [];
}

function saveSiteData(array $data): bool
{
    $json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    if ($json === false) {
        return false;
    }

    return file_put_contents(SITE_DATA_FILE, $json, LOCK_EX) !== false;
}

function isAdminLoggedIn(): bool
{
    return !empty($_SESSION['lyamors_admin_logged_in']);
}

function requireAdmin(): void
{
    if (!isAdminLoggedIn()) {
        header('Location: admin.php');
        exit;
    }
}

function csrfToken(): string
{
    if (empty($_SESSION['lyamors_csrf'])) {
        $_SESSION['lyamors_csrf'] = bin2hex(random_bytes(24));
    }

    return $_SESSION['lyamors_csrf'];
}

function validateCsrf(?string $token): bool
{
    return is_string($token) && isset($_SESSION['lyamors_csrf']) && hash_equals($_SESSION['lyamors_csrf'], $token);
}
