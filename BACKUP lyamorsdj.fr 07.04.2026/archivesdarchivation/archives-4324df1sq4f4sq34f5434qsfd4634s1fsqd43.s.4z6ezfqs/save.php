<?php
require __DIR__ . '/config.php';
requireAdmin();

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !validateCsrf($_POST['csrf'] ?? null)) {
    http_response_code(400);
    exit('Requête invalide.');
}

$clean = static function (string $key, int $max = 5000): string {
    $value = trim((string) ($_POST[$key] ?? ''));
    return mb_substr($value, 0, $max);
};

$data = [
    'site' => [
        'name' => $clean('site_name', 120),
        'tagline' => $clean('site_tagline', 180),
        'city' => $clean('site_city', 120),
        'email' => $clean('site_email', 180),
        'phone' => $clean('site_phone', 80),
        'instagram' => $clean('site_instagram', 255),
        'tiktok' => $clean('site_tiktok', 255),
        'youtube' => $clean('site_youtube', 255),
    ],
    'hero' => [
        'eyebrow' => $clean('hero_eyebrow', 180),
        'title' => $clean('hero_title', 400),
        'text' => $clean('hero_text', 1500),
        'button_primary' => $clean('hero_button_primary', 80),
        'button_secondary' => $clean('hero_button_secondary', 80),
    ],
    'about' => [
        'title' => $clean('about_title', 240),
        'text' => $clean('about_text', 2000),
    ],
    'services' => [],
    'events' => [],
    'contact' => [
        'title' => $clean('contact_title', 180),
        'text' => $clean('contact_text', 1200),
        'address' => $clean('contact_address', 180),
    ],
];

for ($i = 0; $i < 3; $i++) {
    $data['services'][] = [
        'title' => $clean('service_title_' . $i, 180),
        'text' => $clean('service_text_' . $i, 1000),
    ];

    $data['events'][] = [
        'date' => $clean('event_date_' . $i, 20),
        'title' => $clean('event_title_' . $i, 180),
        'place' => $clean('event_place_' . $i, 180),
        'text' => $clean('event_text_' . $i, 1000),
    ];
}

if (!saveSiteData($data)) {
    http_response_code(500);
    exit('Impossible d\'enregistrer les données.');
}

header('Location: admin.php?saved=1');
exit;
