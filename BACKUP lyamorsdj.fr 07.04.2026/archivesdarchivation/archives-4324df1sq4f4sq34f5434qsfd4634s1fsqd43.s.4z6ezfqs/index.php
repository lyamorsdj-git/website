<?php
declare(strict_types=1);

// Configuration centralisée
$site = [
    'name'      => 'LYAMORS DJ',
    'logo'      => 'logo.png',
    'phone'     => '05 64 11 61 76',
    'cta_link'  => 'https://www.jeveuxaider.gouv.fr/organisations/28963-lyamors-dj',
    'url'       => 'https://lyamorsdj.fr',
    'city'      => 'Bidart',
    'region'    => 'Pays Basque',
    'address'   => '58 résidence Esquirot, 64210 Bidart',
    'rna'       => 'W641015062',
    'tagline'   => 'La musique au service des causes solidaires',
    'desc'      => 'L’association LYAMORS DJ à Bidart organise des événements caritatifs, des ateliers d’initiation au DJing et des actions locales pour renforcer le lien social.'
];

function e(string $v): string {
    return htmlspecialchars($v, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?= e($site['name']) ?> | DJ & Sonorisation Événementielle Pays Basque</title>
    <meta name="description" content="<?= e($site['desc']) ?>">
    <link rel="canonical" href="<?= e($site['url']) ?>">
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "EntertainmentBusiness",
      "name": "<?= e($site['name']) ?>",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "<?= e($site['city']) ?>",
        "addressRegion": "<?= e($site['region']) ?>",
        "addressCountry": "FR"
      },
      "url": "<?= e($site['url']) ?>",
      "telephone": "<?= e($site['phone']) ?>"
    }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&family=Outfit:wght@700;900&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #0f172a; --accent: #d97706; --accent-soft: #fff7ed; --bg: #fffdf8; --surface: #ffffff;
            --text: #172033; --muted: #5f6b7a; --border: #e7ded1; --logo-filter: none;
            --cookie-bg: #0f172a; --cookie-text: #ffffff; --cookie-border: rgba(255,255,255,0.28);
            --hero-glow: radial-gradient(circle at top, rgba(217,119,6,0.18), transparent 48%);
            --radius: 20px; --shadow: 0 10px 30px -10px rgba(0,0,0,0.08);
        }

        @media (prefers-color-scheme: dark) {
            :root {
                --primary: #f8fafc; --accent: #f59e0b; --accent-soft: rgba(245,158,11,0.12); --bg: #08111f; --surface: #0f172a;
                --text: #f8fafc; --muted: #9fb0c5; --border: #203047; --logo-filter: invert(1) brightness(2);
                --cookie-bg: #f8fafc; --cookie-text: #0f172a; --cookie-border: rgba(15,23,42,0.2);
                --hero-glow: radial-gradient(circle at top, rgba(245,158,11,0.16), transparent 52%);
            }
        }

        * { box-sizing: border-box; outline: none; }
        html { scroll-behavior: smooth; }
        body { margin: 0; font-family: 'Plus Jakarta Sans', sans-serif; background: var(--bg); color: var(--text); line-height: 1.6; }
        h1, h2, h3, h4 { font-family: 'Outfit', sans-serif; margin: 0; }
        .container { width: min(1200px, 92%); margin: 0 auto; }
        section { scroll-margin-top: 110px; }

        /* HEADER */
        header { position: sticky; top: 0; z-index: 1000; background: var(--bg); background: color-mix(in srgb, var(--bg) 82%, transparent); backdrop-filter: blur(12px); border-bottom: 1px solid var(--border); padding: 15px 0; }
        .nav { display: flex; align-items: center; justify-content: space-between; gap: 24px; }
        .logo-box { display: flex; align-items: center; gap: 12px; text-decoration: none; color: var(--primary); font-weight: 900; font-size: 1.3rem; }
        .logo-box img { width: 44px; height: 44px; border-radius: 12px; filter: var(--logo-filter); transition: 0.3s; }
        
        .nav-links { display: flex; gap: 24px; flex-wrap: wrap; }
        .nav-links a { text-decoration: none; color: var(--text); font-weight: 600; font-size: 0.9rem; transition: 0.2s; }
        .nav-links a:hover { color: var(--accent); }

        /* HERO */
        .hero { padding: 120px 0 80px; position: relative; overflow: hidden; }
        .hero::before { content: ""; position: absolute; inset: 0; background: var(--hero-glow); pointer-events: none; }
        .hero-layout { position: relative; display: grid; grid-template-columns: minmax(0, 1.2fr) minmax(300px, 0.8fr); gap: 32px; align-items: center; }
        .hero-copy { text-align: left; }
        .hero-panel { background: linear-gradient(180deg, color-mix(in srgb, var(--surface) 92%, transparent), var(--surface)); border: 1px solid var(--border); border-radius: 28px; padding: 28px; box-shadow: var(--shadow); }
        .badge { display: inline-flex; background: var(--accent-soft); border: 1px solid color-mix(in srgb, var(--accent) 24%, var(--border)); padding: 8px 16px; border-radius: 50px; font-size: 0.8rem; font-weight: 700; color: var(--accent); }
        .eyebrow { display: inline-flex; align-items: center; gap: 8px; margin-bottom: 14px; color: var(--muted); font-weight: 700; font-size: 0.86rem; text-transform: uppercase; letter-spacing: 0.08em; }
        .eyebrow::before { content: ""; width: 36px; height: 2px; background: var(--accent); border-radius: 999px; }
        .hero-actions { display: flex; gap: 14px; flex-wrap: wrap; margin-top: 30px; }
        .hero-note { margin-top: 16px; color: var(--muted); font-size: 0.95rem; }

        /* DASHBOARD STATS INTERFACE */
        .stats-grid { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 16px; margin-top: 34px; }
        .stat-card { background: var(--surface); padding: 30px; border-radius: var(--radius); border: 1px solid var(--border); text-align: center; }
        .stat-card span { display: block; font-size: 2.5rem; font-weight: 900; color: var(--accent); font-family: 'Outfit'; }
        .stat-card label { color: var(--muted); font-weight: 600; font-size: 0.9rem; }

        /* INTERFACE ONGLET (TABS) */
        .section-shell { margin: 88px 0; }
        .section-head { display: flex; align-items: end; justify-content: space-between; gap: 24px; margin-bottom: 28px; }
        .section-head p { max-width: 700px; margin: 0; color: var(--muted); }
        .tab-buttons { display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 30px; }
        .tab-btn { padding: 12px 18px; border-radius: 12px; border: 1px solid var(--border); background: var(--surface); font-weight: 700; color: var(--muted); }
        .tab-btn.active { background: var(--accent); color: white; border-color: var(--accent); }

        /* GRID INTERFACES */
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; }
        .glass-card { background: var(--surface); padding: 40px; border-radius: 24px; border: 1px solid var(--border); position: relative; overflow: hidden; transition: 0.4s; }
        .glass-card:hover { transform: translateY(-8px); box-shadow: var(--shadow); border-color: var(--accent); }
        .glass-card p { color: var(--muted); margin-bottom: 0; }
        .card-kicker { display: inline-flex; margin-bottom: 12px; padding: 6px 10px; border-radius: 999px; background: var(--accent-soft); color: var(--accent); font-size: 0.78rem; font-weight: 800; }
        .category-grid { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; }
        .category-card { background: var(--surface); border: 1px solid var(--border); border-radius: 22px; padding: 24px; }
        .category-card strong { display: block; margin-bottom: 8px; font-size: 1rem; }
        .category-card p { margin: 0; color: var(--muted); font-size: 0.92rem; }
        .split-grid { display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 28px; }
        .list-card { background: linear-gradient(180deg, color-mix(in srgb, var(--surface) 95%, transparent), var(--surface)); border: 1px solid var(--border); border-radius: 24px; padding: 28px; }
        .feature-list { margin: 18px 0 0; padding: 0; list-style: none; display: grid; gap: 14px; }
        .feature-list li { padding: 14px 16px; border: 1px solid var(--border); border-radius: 16px; background: color-mix(in srgb, var(--surface) 92%, transparent); }
        .feature-list strong { display: block; margin-bottom: 4px; }

        /* FORMULAIRE INTERFACE */
        .contact-ui { background: var(--surface); border-radius: 30px; border: 1px solid var(--border); padding: 50px; display: grid; grid-template-columns: 1fr 1fr; gap: 50px; margin: 80px 0; }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 8px; font-weight: 700; font-size: 0.9rem; }
        input, select, textarea { width: 100%; padding: 14px; border-radius: 12px; border: 1px solid var(--border); background: var(--bg); color: var(--text); font-family: inherit; }
        textarea { min-height: 140px; resize: vertical; }

        .btn { padding: 16px 32px; border-radius: 14px; font-weight: 800; cursor: pointer; text-decoration: none; border: none; transition: 0.3s; display: inline-flex; align-items: center; justify-content: center; }
        .btn-primary { background: var(--accent); color: white; box-shadow: 0 10px 20px -5px var(--accent); }
        .btn-secondary { background: transparent; color: var(--text); border: 1px solid var(--border); }

        /* FOOTER */
        footer { background: var(--surface); padding: 80px 0 40px; border-top: 1px solid var(--border); }
        .footer-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 40px; }

        /* MODALS / COOKIES */
        #cookie-ui { position: fixed; bottom: 20px; left: 20px; max-width: 400px; background: var(--cookie-bg); color: var(--cookie-text); padding: 25px; border-radius: 20px; z-index: 10000; display: none; box-shadow: 0 20px 40px rgba(0,0,0,0.3); }
        .btn-cookie-secondary { background: transparent; color: var(--cookie-text); border: 1px solid var(--cookie-border); }

        @media (max-width: 1100px) {
            .hero-layout, .split-grid { grid-template-columns: 1fr; }
            .category-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        }

        @media (max-width: 900px) {
            header { padding: 12px 0; }
            .nav { flex-direction: column; align-items: stretch; }
            .nav-links { justify-content: space-between; gap: 14px; }
            .nav .btn-hide { width: 100%; }
            .contact-ui { grid-template-columns: 1fr; padding: 30px; }
            .section-head { flex-direction: column; align-items: flex-start; }
        }

        @media (max-width: 640px) {
            .hero { padding: 88px 0 56px; }
            .hero-copy, .hero-panel { text-align: left; }
            .stats-grid, .category-grid, .grid { grid-template-columns: 1fr; }
            .glass-card, .hero-panel, .list-card, .contact-ui, .category-card { padding: 22px; }
            .hero-actions { flex-direction: column; }
            .hero-actions .btn, .contact-ui .btn { width: 100%; }
            #cookie-ui { left: 12px; right: 12px; bottom: 12px; max-width: none; }
        }
    </style>
</head>
<body>

<header>
    <div class="container nav">
        <a href="#" class="logo-box">
            <img src="<?= e($site['logo']) ?>" alt="Logo Lyamors">
            <span>LYAMORS</span>
        </a>
        <nav class="nav-links">
            <a href="#missions">Missions</a>
            <a href="#actions">Actions</a>
            <a href="#benevolat">Bénévolat</a>
            <a href="#contact">Contact</a>
        </nav>
        <a href="<?= e($site['cta_link']) ?>" class="btn btn-primary btn-hide" style="padding: 10px 20px; font-size: 0.85rem;">Devenir bénévole</a>
    </div>
</header>

<main class="container">
    <section class="hero">
        <div class="hero-layout">
            <div class="hero-copy">
                <span class="badge">Association loi 1901 • Bidart</span>
                <div class="eyebrow">Culture, solidarité, engagement local</div>
                <h1 style="font-size: clamp(2.8rem, 8vw, 5.4rem); margin: 20px 0 16px; line-height: 0.98;"><?= e($site['tagline']) ?></h1>
                <p style="font-size: 1.12rem; color: var(--muted); max-width: 760px; margin: 0;">LYAMORS DJ développe des événements caritatifs, des ateliers d’initiation au DJing et des actions de lien social en collaboration avec d’autres associations et des établissements scolaires du Pays Basque.</p>
                <div class="hero-actions">
                    <a href="<?= e($site['cta_link']) ?>" class="btn btn-primary">Rejoindre l'association</a>
                    <a href="#missions" class="btn btn-secondary">Découvrir nos missions</a>
                </div>
                <p class="hero-note">Basée à <?= e($site['city']) ?>, l’association mobilise bénévoles, DJs, techniciens et citoyens pour faire de la musique un outil d’utilité sociale.</p>
                <div class="stats-grid">
                    <div class="stat-card"><span>2025</span><label>Création déclarée</label></div>
                    <div class="stat-card"><span>64</span><label>Territoire prioritaire</label></div>
                    <div class="stat-card"><span>16+</span><label>Bénévolat ouvert dès</label></div>
                </div>
            </div>
            <aside class="hero-panel">
                <h3 style="font-size: 1.6rem; margin-bottom: 12px;">Ce que fait LYAMORS DJ</h3>
                <p style="margin: 0; color: var(--muted);">Les informations publiques recensent une structure orientée vers l’action caritative, la sensibilisation, l’accompagnement humain et le bénévolat de compétences.</p>
                <ul class="feature-list">
                    <li><strong>Événements caritatifs</strong> Organisation d’actions musicales solidaires avec des partenaires locaux.</li>
                    <li><strong>Ateliers DJ</strong> Initiation pour les jeunes ou les personnes en difficulté afin de transmettre une pratique culturelle accessible.</li>
                    <li><strong>Interventions sociales</strong> Présence dans des cadres éducatifs, associatifs ou d’accompagnement de publics fragilisés.</li>
                </ul>
            </aside>
        </div>
    </section>

    <section id="missions" class="section-shell">
        <div class="section-head">
            <div>
                <span class="eyebrow">Missions</span>
                <h2 style="font-size: clamp(2rem, 5vw, 3rem);">Des actions concrètes autour de la musique.</h2>
            </div>
            <p>L’objet public de l’association mentionne l’organisation d’événements caritatifs en lien avec d’autres associations et établissements scolaires. Les missions publiées mettent aussi en avant la gouvernance, la communication, les ressources humaines et la lutte contre l’isolement.</p>
        </div>
        <div class="grid">
            <div class="glass-card">
                <span class="card-kicker">Solidarité</span>
                <h3>Événements caritatifs</h3>
                <p>Concerts, animations et rendez-vous musicaux conçus pour soutenir des causes locales et créer des moments fédérateurs.</p>
            </div>
            <div class="glass-card">
                <span class="card-kicker">Transmission</span>
                <h3>Ateliers d’initiation DJ</h3>
                <p>Découverte du mix, de l’écoute et des bases techniques pour les jeunes ou les publics en recherche de confiance et d’expression.</p>
            </div>
            <div class="glass-card">
                <span class="card-kicker">Territoire</span>
                <h3>Interventions locales</h3>
                <p>Actions menées avec des acteurs éducatifs, sociaux et associatifs pour faire vivre la culture et renforcer le lien humain.</p>
            </div>
        </div>
    </section>

    <section id="actions" class="section-shell">
        <div class="section-head">
            <div>
                <span class="eyebrow">Catégories</span>
                <h2 style="font-size: clamp(2rem, 5vw, 3rem);">Les grandes catégories de l’association.</h2>
            </div>
            <p>Les plateformes publiques référencent LYAMORS DJ dans les champs “Art et culture pour tous”, “Solidarité et insertion” et “Bénévolat de compétences”, avec des actions de communication, sensibilisation et accompagnement.</p>
        </div>
        <div class="category-grid">
            <article class="category-card">
                <strong>Art et culture pour tous</strong>
                <p>La musique sert de point d’entrée pour rassembler, transmettre et rendre une pratique créative plus accessible.</p>
            </article>
            <article class="category-card">
                <strong>Solidarité et insertion</strong>
                <p>Les actions visent aussi le lien social, l’inclusion et l’accompagnement de personnes en situation de fragilité.</p>
            </article>
            <article class="category-card">
                <strong>Bénévolat de compétences</strong>
                <p>Communication, RH, gouvernance ou organisation : chacun peut contribuer selon son profil, même sans bagage musical.</p>
            </article>
            <article class="category-card">
                <strong>Partenariats locaux</strong>
                <p>Le projet est ancré à Bidart et se construit en collaboration avec d’autres associations et des établissements scolaires.</p>
            </article>
        </div>
    </section>

    <section id="benevolat" class="section-shell split-grid">
        <div class="list-card">
            <span class="eyebrow">Bénévolat</span>
            <h2 style="font-size: clamp(2rem, 5vw, 3rem); margin-bottom: 12px;">Profils recherchés</h2>
            <p style="margin: 0; color: var(--muted);">Les annonces publiques de LYAMORS DJ évoquent des besoins en secrétariat général, ressources humaines, communication et accompagnement social. L’association accueille aussi des bénévoles souhaitant aider sur le terrain.</p>
            <ul class="feature-list">
                <li><strong>Gouvernance</strong> Suivi administratif, réunions, comptes rendus et structuration de l’association.</li>
                <li><strong>Communication</strong> Réseaux sociaux, contenus, flyers et rayonnement local.</li>
                <li><strong>Ressources humaines</strong> Recrutement bénévole, intégration et coordination des équipes.</li>
                <li><strong>Lutte contre l’isolement</strong> Actions de présence, d’écoute et d’accompagnement à distance ou en présentiel.</li>
            </ul>
        </div>
        <div class="list-card">
            <span class="eyebrow">Repères</span>
            <h3 style="font-size: 1.5rem; margin-bottom: 12px;">Informations publiques utiles</h3>
            <ul class="feature-list">
                <li><strong>Siège</strong> <?= e($site['address']) ?></li>
                <li><strong>Téléphone</strong> <a href="tel:0564116176" style="color:inherit;"><?= e($site['phone']) ?></a></li>
                <li><strong>RNA</strong> <?= e($site['rna']) ?></li>
                <li><strong>Participation</strong> Certaines missions publiées sont accessibles dès 16 ans.</li>
            </ul>
            <div class="hero-actions" style="margin-top: 22px;">
                <a href="<?= e($site['cta_link']) ?>" class="btn btn-primary">Voir les missions</a>
                <a href="<?= e($site['url']) ?>" class="btn btn-secondary">Site de l'association</a>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-ui">
        <div>
            <span class="eyebrow">Contact</span>
            <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Entrer en relation avec LYAMORS DJ.</h2>
            <p style="color:var(--muted)">Cette page met en avant les informations publiques actuellement disponibles. Pour rejoindre l’association ou proposer votre aide, la page JeVeuxAider reste le point d’entrée le plus direct.</p>
            <div style="margin-top: 30px;">
                <strong>📍 Siège</strong><br><?= e($site['address']) ?><br><br>
                <strong>📞 Direct</strong><br><a href="tel:0564116176" style="color:inherit; text-decoration:none;"><?= e($site['phone']) ?></a><br><br>
                <strong>🗂️ Cadre</strong><br>Association déclarée à Bidart, orientée action solidaire et culturelle
            </div>
        </div>
        <form onsubmit="event.preventDefault(); alert('Demande envoyée !');">
            <div class="form-group">
                <label>Nom Complet</label>
                <input type="text" autocomplete="name" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" autocomplete="email" required>
            </div>
            <div class="form-group">
                <label>Votre profil</label>
                <select>
                    <option>Bénévole</option>
                    <option>Association partenaire</option>
                    <option>Établissement scolaire</option>
                    <option>Collectivité / structure locale</option>
                    <option>Autre demande</option>
                </select>
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width:100%">Envoyer la demande</button>
        </form>
    </section>
</main>

<footer>
    <div class="container footer-grid">
        <div>
            <h3 style="margin-bottom:20px"><?= e($site['name']) ?></h3>
            <p style="font-size: 0.9rem; color:var(--muted)">Association loi 1901 à Bidart.<br>Musique, solidarité et engagement local.</p>
        </div>
        <div>
            <h4>Liens</h4>
            <nav style="display:flex; flex-direction:column; gap:10px;">
                <a href="#missions" style="text-decoration:none; color:var(--muted)">Missions</a>
                <a href="#benevolat" style="text-decoration:none; color:var(--muted)">Bénévolat</a>
                <a href="<?= e($site['cta_link']) ?>" style="text-decoration:none; color:var(--muted)">JeVeuxAider</a>
            </nav>
        </div>
        <div>
            <h4>Coordonnées</h4>
            <p style="font-size: 0.9rem; color:var(--muted)"><?= e($site['address']) ?><br><?= e($site['phone']) ?></p>
        </div>
    </div>
    <div class="container" style="margin-top:50px; padding-top:20px; border-top:1px solid var(--border); font-size:0.8rem; text-align:center; color:var(--muted)">
        © <?= date('Y') ?> LYAMORS DJ. Made with ❤️ in Bidart.
    </div>
</footer>

<div id="cookie-ui">
    <h4 style="margin:0 0 10px">Vie Privée</h4>
    <p style="font-size:0.85rem; margin-bottom:20px">En tant qu'association locale, nous respectons vos données. On accepte ?</p>
    <div style="display:flex; gap:10px;">
        <button class="btn btn-primary" style="padding:10px; flex:1; font-size:0.8rem;" onclick="closeCookies('yes')">Oui</button>
        <button class="btn btn-cookie-secondary" style="padding:10px; flex:1; font-size:0.8rem;" onclick="closeCookies('no')">Non</button>
    </div>
</div>

<script>
    function closeCookies(val) {
        localStorage.setItem('ly_cookies', val);
        document.getElementById('cookie-ui').style.display = 'none';
    }

    window.onload = () => {
        if(!localStorage.getItem('ly_cookies')) {
            setTimeout(() => { document.getElementById('cookie-ui').style.display = 'block'; }, 2000);
        }
    };

    // Notification Push Simulation
    if ('Notification' in window && Notification.permission === "default") {
        setTimeout(() => {
            Notification.requestPermission();
        }, 10000);
    }
</script>

</body>
</html>
