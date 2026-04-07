<?php
require __DIR__ . '/config.php';

$error = '';
$data = loadSiteData();

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: admin.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'login') {
    $username = trim((string) ($_POST['username'] ?? ''));
    $password = (string) ($_POST['password'] ?? '');

    if ($username === ADMIN_USERNAME && password_verify($password, ADMIN_PASSWORD_HASH)) {
        $_SESSION['lyamors_admin_logged_in'] = true;
        header('Location: admin.php');
        exit;
    }

    $error = 'Identifiants invalides.';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin • Lyamors DJ</title>
    <style>
        :root {
            --bg: #0a0d13; --panel: rgba(255,255,255,.06); --line: rgba(255,255,255,.08);
            --text: #f6f7fb; --muted: #a9b4c5; --primary: #8cf0ff; --secondary: #8a7cff;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0; color: var(--text); font-family: Inter, Arial, sans-serif;
            background: radial-gradient(circle at top left, rgba(140,240,255,.10), transparent 25%), linear-gradient(180deg, #090c12 0%, #0c1018 100%);
        }
        .wrap { width: min(calc(100% - 32px), 1180px); margin: 0 auto; padding: 32px 0 60px; }
        .panel {
            border: 1px solid var(--line); border-radius: 26px; background: linear-gradient(180deg, rgba(255,255,255,.06), rgba(255,255,255,.03));
            box-shadow: 0 24px 60px rgba(0,0,0,.35);
        }
        .login {
            min-height: 100vh; display: grid; place-items: center; padding: 24px;
        }
        .login-box { width: min(100%, 500px); padding: 28px; }
        h1, h2, h3 { margin-top: 0; }
        .muted { color: var(--muted); }
        .grid { display: grid; gap: 18px; }
        .grid-2 { display: grid; grid-template-columns: repeat(2,1fr); gap: 18px; }
        .grid-3 { display: grid; grid-template-columns: repeat(3,1fr); gap: 18px; }
        label { display: block; font-weight: 700; margin-bottom: 8px; }
        input, textarea {
            width: 100%; padding: 14px 16px; border-radius: 16px; border: 1px solid var(--line); outline: none;
            background: rgba(255,255,255,.04); color: var(--text); font: inherit;
        }
        textarea { min-height: 120px; resize: vertical; }
        .btn {
            display: inline-flex; align-items: center; justify-content: center; min-height: 48px; padding: 0 18px;
            border-radius: 16px; border: 1px solid transparent; color: #0b1017; font-weight: 800; cursor: pointer;
            background: linear-gradient(135deg, var(--primary), #d7fbff);
        }
        .btn-alt { background: rgba(255,255,255,.04); color: var(--text); border-color: var(--line); text-decoration: none; }
        .header { display: flex; justify-content: space-between; align-items: center; gap: 16px; margin-bottom: 22px; }
        .block { padding: 22px; }
        .section-title { margin-bottom: 14px; }
        .actions { display: flex; gap: 12px; flex-wrap: wrap; }
        .notice { padding: 14px 16px; border-radius: 16px; background: rgba(138,124,255,.10); border: 1px solid rgba(138,124,255,.18); }
        .error { padding: 14px 16px; border-radius: 16px; background: rgba(255,93,122,.12); border: 1px solid rgba(255,93,122,.18); }
        @media (max-width: 900px) { .grid-2, .grid-3 { grid-template-columns: 1fr; } }
    </style>
</head>
<body>
<?php if (!isAdminLoggedIn()): ?>
    <div class="login">
        <form method="post" class="panel login-box grid">
            <div>
                <h1>Panel admin</h1>
                <p class="muted">Connexion au panneau de gestion du site Lyamors DJ.</p>
            </div>
            <?php if ($error): ?>
                <div class="error"><?= e($error) ?></div>
            <?php endif; ?>
            <input type="hidden" name="action" value="login">
            <div>
                <label>Utilisateur</label>
                <input type="text" name="username" required>
            </div>
            <div>
                <label>Mot de passe</label>
                <input type="password" name="password" required>
            </div>
            <button class="btn" type="submit">Se connecter</button>
            <div class="notice">Par défaut : <b>admin</b> / <b>ChangeMe123!</b>. Pense à modifier le hash dans <code>config.php</code>.</div>
        </form>
    </div>
<?php else: ?>
    <div class="wrap">
        <div class="header">
            <div>
                <h1 style="margin-bottom:8px;">Administration du site</h1>
                <p class="muted" style="margin:0;">Modifie les contenus sans toucher au design ni aux SVG.</p>
            </div>
            <div class="actions">
                <a class="btn btn-alt" href="index.php" target="_blank" rel="noopener">Voir le site</a>
                <a class="btn btn-alt" href="admin.php?logout=1">Déconnexion</a>
            </div>
        </div>

        <?php if (isset($_GET['saved'])): ?>
            <div class="notice" style="margin-bottom:18px;">Les modifications ont bien été enregistrées.</div>
        <?php endif; ?>

        <form action="save.php" method="post" class="grid">
            <input type="hidden" name="csrf" value="<?= e(csrfToken()) ?>">

            <section class="panel block grid">
                <div class="section-title"><h2>Informations globales</h2></div>
                <div class="grid-3">
                    <div><label>Nom</label><input type="text" name="site_name" value="<?= e($data['site']['name'] ?? '') ?>"></div>
                    <div><label>Tagline</label><input type="text" name="site_tagline" value="<?= e($data['site']['tagline'] ?? '') ?>"></div>
                    <div><label>Ville / zone</label><input type="text" name="site_city" value="<?= e($data['site']['city'] ?? '') ?>"></div>
                </div>
                <div class="grid-3">
                    <div><label>Email</label><input type="text" name="site_email" value="<?= e($data['site']['email'] ?? '') ?>"></div>
                    <div><label>Téléphone</label><input type="text" name="site_phone" value="<?= e($data['site']['phone'] ?? '') ?>"></div>
                    <div><label>Adresse</label><input type="text" name="contact_address" value="<?= e($data['contact']['address'] ?? '') ?>"></div>
                </div>
                <div class="grid-3">
                    <div><label>Instagram</label><input type="text" name="site_instagram" value="<?= e($data['site']['instagram'] ?? '') ?>"></div>
                    <div><label>TikTok</label><input type="text" name="site_tiktok" value="<?= e($data['site']['tiktok'] ?? '') ?>"></div>
                    <div><label>YouTube</label><input type="text" name="site_youtube" value="<?= e($data['site']['youtube'] ?? '') ?>"></div>
                </div>
            </section>

            <section class="panel block grid">
                <div class="section-title"><h2>Hero</h2></div>
                <div><label>Eyebrow</label><input type="text" name="hero_eyebrow" value="<?= e($data['hero']['eyebrow'] ?? '') ?>"></div>
                <div><label>Titre principal</label><textarea name="hero_title"><?= e($data['hero']['title'] ?? '') ?></textarea></div>
                <div><label>Texte principal</label><textarea name="hero_text"><?= e($data['hero']['text'] ?? '') ?></textarea></div>
                <div class="grid-2">
                    <div><label>Bouton principal</label><input type="text" name="hero_button_primary" value="<?= e($data['hero']['button_primary'] ?? '') ?>"></div>
                    <div><label>Bouton secondaire</label><input type="text" name="hero_button_secondary" value="<?= e($data['hero']['button_secondary'] ?? '') ?>"></div>
                </div>
            </section>

            <section class="panel block grid">
                <div class="section-title"><h2>Section association</h2></div>
                <div><label>Titre</label><input type="text" name="about_title" value="<?= e($data['about']['title'] ?? '') ?>"></div>
                <div><label>Texte</label><textarea name="about_text"><?= e($data['about']['text'] ?? '') ?></textarea></div>
            </section>

            <section class="panel block grid">
                <div class="section-title"><h2>Actions / services</h2></div>
                <div class="grid-3">
                    <?php for ($i = 0; $i < 3; $i++): ?>
                        <div class="grid">
                            <div><label>Titre <?= $i + 1 ?></label><input type="text" name="service_title_<?= $i ?>" value="<?= e($data['services'][$i]['title'] ?? '') ?>"></div>
                            <div><label>Texte <?= $i + 1 ?></label><textarea name="service_text_<?= $i ?>"><?= e($data['services'][$i]['text'] ?? '') ?></textarea></div>
                        </div>
                    <?php endfor; ?>
                </div>
            </section>

            <section class="panel block grid">
                <div class="section-title"><h2>Agenda</h2></div>
                <div class="grid-3">
                    <?php for ($i = 0; $i < 3; $i++): ?>
                        <div class="grid">
                            <div><label>Date <?= $i + 1 ?></label><input type="date" name="event_date_<?= $i ?>" value="<?= e($data['events'][$i]['date'] ?? '') ?>"></div>
                            <div><label>Titre <?= $i + 1 ?></label><input type="text" name="event_title_<?= $i ?>" value="<?= e($data['events'][$i]['title'] ?? '') ?>"></div>
                            <div><label>Lieu <?= $i + 1 ?></label><input type="text" name="event_place_<?= $i ?>" value="<?= e($data['events'][$i]['place'] ?? '') ?>"></div>
                            <div><label>Texte <?= $i + 1 ?></label><textarea name="event_text_<?= $i ?>"><?= e($data['events'][$i]['text'] ?? '') ?></textarea></div>
                        </div>
                    <?php endfor; ?>
                </div>
            </section>

            <section class="panel block grid">
                <div class="section-title"><h2>Contact</h2></div>
                <div><label>Titre</label><input type="text" name="contact_title" value="<?= e($data['contact']['title'] ?? '') ?>"></div>
                <div><label>Texte</label><textarea name="contact_text"><?= e($data['contact']['text'] ?? '') ?></textarea></div>
            </section>

            <div class="actions">
                <button class="btn" type="submit">Enregistrer</button>
                <a class="btn btn-alt" href="index.php" target="_blank" rel="noopener">Prévisualiser</a>
            </div>
        </form>
    </div>
<?php endif; ?>
</body>
</html>
