<?php
declare(strict_types=1);

$site = [
    'name'        => 'Lyamors DJ',
    'tagline'     => 'Association musicale et solidaire',
    'city'        => 'Bidart • Pays Basque',
    'email'       => 'contact@lyamorsdj.fr',
    'phone'       => '+33 0 00 00 00 00',
    'instagram'   => 'https://instagram.com/',
    'facebook'    => 'https://facebook.com/',
    'hero_title'  => 'La musique au service du lien social.',
    'hero_text'   => "Lyamors DJ est une association qui porte des actions musicales, culturelles et solidaires. Nous créons des événements, des temps de rencontre et des projets utiles, avec une identité sérieuse, moderne et profondément humaine.",
    'logo'        => 'logo.png',
];

$actions = [
    [
        'title' => 'Événements associatifs',
        'text'  => "Organisation et animation de moments musicaux accessibles, fédérateurs et adaptés à différents publics.",
    ],
    [
        'title' => 'Actions solidaires',
        'text'  => "La musique devient un support pour créer du lien, valoriser les personnes et accompagner des initiatives locales.",
    ],
    [
        'title' => 'Présence locale',
        'text'  => "Partenariats, interventions et projets pensés pour le territoire, avec une vraie logique de proximité.",
    ],
];

$values = [
    'Une image propre et professionnelle',
    'Une énergie musicale maîtrisée',
    'Un engagement associatif concret',
    'Une identité locale, humaine et crédible',
];

$highlights = [
    ['title' => 'Ancrage local', 'text' => 'Une association présente sur son territoire et tournée vers le public.'],
    ['title' => 'Univers musical', 'text' => 'Une identité artistique claire, élégante et cohérente.'],
    ['title' => 'Engagement humain', 'text' => 'Des actions utiles qui donnent du sens à la communication.'],
];

$vision = [
    [
        'title' => 'Une image sérieuse',
        'text'  => "Le site doit rassurer, inspirer confiance et montrer une structure propre.",
    ],
    [
        'title' => 'Une direction artistique maîtrisée',
        'text'  => "Le design doit rester beau, moderne et sobre, sans surcharge graphique.",
    ],
    [
        'title' => 'Une vraie cohérence associative',
        'text'  => "L’ensemble doit refléter l’association, ses valeurs et sa présence locale.",
    ],
];

$contacts = [
    ['label' => 'Email', 'value' => $site['email'], 'link' => 'mailto:' . $site['email']],
    ['label' => 'Téléphone', 'value' => $site['phone'], 'link' => 'tel:' . preg_replace('/\s+/', '', $site['phone'])],
    ['label' => 'Localisation', 'value' => $site['city'], 'link' => '#'],
];

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= e($site['name']) ?> — <?= e($site['tagline']) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lyamors DJ est une association musicale et solidaire qui organise des actions, événements et projets autour de la musique, du lien social et de l'engagement local.">

    <style>
        :root{
            --bg:#0f1115;
            --bg-soft:#131720;
            --surface:#151922;
            --surface-2:#1a1f2a;
            --line:#262c38;
            --text:#f4f4f2;
            --muted:#b7bcc6;
            --accent:#d8b46a;
            --accent-soft:rgba(216,180,106,.12);
            --max:1140px;
            --radius:18px;
            --radius-sm:13px;
            --shadow:0 18px 40px rgba(0,0,0,.22);
            --shadow-soft:0 10px 22px rgba(0,0,0,.14);
            --transition:.28s ease;
        }

        *{box-sizing:border-box}
        html{scroll-behavior:smooth}
        body{
            margin:0;
            font:16px/1.68 Arial, Helvetica, sans-serif;
            color:var(--text);
            background:
                radial-gradient(circle at top left, rgba(216,180,106,.07), transparent 26%),
                radial-gradient(circle at top right, rgba(216,180,106,.04), transparent 24%),
                linear-gradient(180deg, #0f1115 0%, #11141a 100%);
            -webkit-font-smoothing:antialiased;
            text-rendering:optimizeLegibility;
        }

        a{color:inherit;text-decoration:none}
        img{display:block;max-width:100%}
        h1,h2,h3,h4,p{margin:0}

        .wrap{
            width:min(calc(100% - 32px), var(--max));
            margin:0 auto;
        }

        .fade-up{
            animation:fadeUp .8s ease both;
        }

        .delay-1{animation-delay:.08s}
        .delay-2{animation-delay:.16s}
        .delay-3{animation-delay:.24s}
        .delay-4{animation-delay:.32s}

        @keyframes fadeUp{
            from{opacity:0;transform:translateY(18px)}
            to{opacity:1;transform:translateY(0)}
        }

        @keyframes floatSoft{
            0%,100%{transform:translateY(0)}
            50%{transform:translateY(-6px)}
        }

        header.top{
            position:sticky;
            top:0;
            z-index:50;
            background:rgba(15,17,21,.90);
            backdrop-filter:blur(10px);
            border-bottom:1px solid rgba(255,255,255,.04);
        }

        .nav{
            min-height:82px;
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:24px;
        }

        .brand{
            display:flex;
            align-items:center;
            gap:14px;
            min-width:0;
        }

        .brand-logo{
            width:54px;
            height:54px;
            border-radius:14px;
            object-fit:cover;
            background:#141821;
            border:1px solid rgba(255,255,255,.06);
            box-shadow:var(--shadow-soft);
            padding:6px;
        }

        .brand-text{
            min-width:0;
        }

        .brand-text strong{
            display:block;
            font-size:17px;
            letter-spacing:.2px;
            white-space:nowrap;
            overflow:hidden;
            text-overflow:ellipsis;
        }

        .brand-text span{
            display:block;
            color:var(--muted);
            font-size:13px;
            white-space:nowrap;
            overflow:hidden;
            text-overflow:ellipsis;
        }

        .menu{
            display:flex;
            align-items:center;
            gap:18px;
            flex-wrap:wrap;
            color:var(--muted);
            font-size:14px;
        }

        .menu a{
            padding:7px 0;
            transition:var(--transition);
        }

        .menu a:hover,
        .menu a:focus{
            color:var(--text);
        }

        .nav-actions{
            display:flex;
            align-items:center;
            gap:10px;
            flex-wrap:wrap;
        }

        .btn{
            display:inline-flex;
            align-items:center;
            justify-content:center;
            min-height:44px;
            padding:0 16px;
            border-radius:12px;
            background:var(--surface);
            border:1px solid rgba(255,255,255,.07);
            color:var(--text);
            transition:var(--transition);
            box-shadow:var(--shadow-soft);
        }

        .btn:hover,
        .btn:focus{
            transform:translateY(-1px);
            border-color:rgba(216,180,106,.55);
        }

        .btn.gold{
            background:var(--accent);
            border-color:var(--accent);
            color:#111;
            font-weight:700;
        }

        .hero{
            padding:66px 0 46px;
        }

        .hero-grid{
            display:grid;
            grid-template-columns:1.1fr .9fr;
            gap:28px;
            align-items:center;
        }

        .kicker{
            display:inline-flex;
            align-items:center;
            gap:10px;
            margin-bottom:16px;
            padding:8px 12px;
            border-radius:999px;
            background:var(--accent-soft);
            color:var(--accent);
            font-size:13px;
            text-transform:uppercase;
            letter-spacing:1.1px;
        }

        .hero h1{
            font-size:clamp(38px, 6vw, 66px);
            line-height:1.02;
            letter-spacing:-1.6px;
            margin-bottom:16px;
            max-width:760px;
        }

        .lead{
            max-width:720px;
            color:var(--muted);
            font-size:18px;
        }

        .hero-actions{
            display:flex;
            flex-wrap:wrap;
            gap:12px;
            margin-top:26px;
        }

        .hero-points{
            display:grid;
            grid-template-columns:repeat(3,1fr);
            gap:14px;
            margin-top:28px;
        }

        .hero-point{
            background:linear-gradient(180deg, rgba(255,255,255,.02), rgba(255,255,255,.01));
            border:1px solid rgba(255,255,255,.06);
            border-radius:15px;
            padding:16px;
            box-shadow:var(--shadow-soft);
            transition:var(--transition);
        }

        .hero-point:hover{
            transform:translateY(-3px);
            border-color:rgba(216,180,106,.35);
        }

        .hero-point strong{
            display:block;
            margin-bottom:6px;
            font-size:15px;
        }

        .hero-point span{
            display:block;
            color:var(--muted);
            font-size:13px;
            line-height:1.5;
        }

        .visual-card{
            position:relative;
            border-radius:22px;
            background:linear-gradient(180deg, #151922 0%, #171c26 100%);
            border:1px solid rgba(255,255,255,.07);
            padding:20px;
            box-shadow:var(--shadow);
            overflow:hidden;
            animation:floatSoft 5s ease-in-out infinite;
        }

        .visual-card::before{
            content:"";
            position:absolute;
            inset:-80px auto auto -80px;
            width:180px;
            height:180px;
            border-radius:50%;
            background:rgba(216,180,106,.05);
            filter:blur(10px);
            pointer-events:none;
        }

        .visual-card::after{
            content:"";
            position:absolute;
            right:-40px;
            bottom:-40px;
            width:160px;
            height:160px;
            border-radius:50%;
            background:rgba(216,180,106,.03);
            pointer-events:none;
        }

        .visual-card small{
            display:block;
            margin-top:14px;
            color:var(--muted);
        }

        .visual-card svg{
            border-radius:14px;
            background:#151922;
        }

        section{
            padding:56px 0;
        }

        .section-head{
            max-width:780px;
            margin:0 0 24px;
        }

        .section-head h2{
            font-size:clamp(28px, 4vw, 42px);
            letter-spacing:-.9px;
            margin-bottom:10px;
        }

        .section-head p{
            color:var(--muted);
        }

        .grid-3{
            display:grid;
            grid-template-columns:repeat(3,1fr);
            gap:18px;
        }

        .card{
            background:linear-gradient(180deg, var(--surface) 0%, var(--surface-2) 100%);
            border:1px solid rgba(255,255,255,.06);
            border-radius:var(--radius);
            padding:22px;
            box-shadow:var(--shadow-soft);
            transition:var(--transition);
        }

        .card:hover{
            transform:translateY(-4px);
            border-color:rgba(216,180,106,.35);
            box-shadow:var(--shadow);
        }

        .card h3{
            font-size:21px;
            margin-bottom:8px;
            letter-spacing:-.4px;
        }

        .card p{
            color:var(--muted);
        }

        .about-grid{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:18px;
        }

        .pill-row{
            display:flex;
            flex-wrap:wrap;
            gap:10px;
            margin-top:18px;
        }

        .pill{
            padding:9px 12px;
            border-radius:999px;
            background:rgba(255,255,255,.03);
            border:1px solid rgba(255,255,255,.07);
            color:var(--muted);
            font-size:13px;
        }

        .split{
            display:grid;
            grid-template-columns:1.05fr .95fr;
            gap:18px;
        }

        .timeline{
            display:grid;
            gap:14px;
        }

        .timeline-item{
            background:linear-gradient(180deg, var(--surface) 0%, var(--surface-2) 100%);
            border:1px solid rgba(255,255,255,.06);
            border-radius:16px;
            padding:18px;
            box-shadow:var(--shadow-soft);
            transition:var(--transition);
        }

        .timeline-item:hover{
            transform:translateY(-3px);
            border-color:rgba(216,180,106,.35);
        }

        .timeline-item strong{
            display:block;
            margin-bottom:6px;
            font-size:16px;
        }

        .timeline-item span{
            color:var(--muted);
            display:block;
            font-size:14px;
        }

        .stats{
            display:grid;
            grid-template-columns:repeat(3,1fr);
            gap:18px;
        }

        .stat{
            background:linear-gradient(180deg, var(--surface) 0%, var(--surface-2) 100%);
            border:1px solid rgba(255,255,255,.06);
            border-radius:16px;
            padding:20px;
            box-shadow:var(--shadow-soft);
            transition:var(--transition);
        }

        .stat:hover{
            transform:translateY(-3px);
            border-color:rgba(216,180,106,.35);
        }

        .stat strong{
            display:block;
            font-size:22px;
            color:var(--accent);
            margin-bottom:6px;
        }

        .stat span{
            display:block;
            color:var(--muted);
            font-size:14px;
        }

        .values-list{
            display:grid;
            grid-template-columns:repeat(2,1fr);
            gap:14px;
        }

        .value-box{
            background:linear-gradient(180deg, var(--surface) 0%, var(--surface-2) 100%);
            border:1px solid rgba(255,255,255,.06);
            border-radius:16px;
            padding:18px;
            box-shadow:var(--shadow-soft);
            transition:var(--transition);
        }

        .value-box:hover{
            transform:translateY(-3px);
            border-color:rgba(216,180,106,.35);
        }

        .value-box strong{
            display:block;
            margin-bottom:4px;
            font-size:16px;
        }

        .value-box span{
            color:var(--muted);
            font-size:14px;
        }

        .contact{
            display:grid;
            grid-template-columns:1fr .9fr;
            gap:18px;
            align-items:start;
        }

        .contact-box{
            background:linear-gradient(180deg, var(--surface) 0%, var(--surface-2) 100%);
            border:1px solid rgba(255,255,255,.06);
            border-radius:18px;
            padding:22px;
            box-shadow:var(--shadow-soft);
        }

        .contact-item{
            padding:14px 0;
            border-top:1px solid rgba(255,255,255,.05);
        }

        .contact-item:first-child{
            border-top:0;
            padding-top:0;
        }

        .contact-item span{
            display:block;
            color:var(--muted);
            font-size:14px;
            margin-bottom:4px;
        }

        .contact-item a:hover{
            color:var(--accent);
        }

        .footer{
            margin-top:10px;
            padding:42px 0 26px;
            background:rgba(16,19,25,.94);
            border-top:1px solid rgba(255,255,255,.04);
        }

        .footer-top{
            display:grid;
            grid-template-columns:1.1fr .9fr;
            gap:24px;
            padding-bottom:22px;
        }

        .footer-brand{
            max-width:600px;
        }

        .footer-brand-head{
            display:flex;
            align-items:center;
            gap:14px;
            margin-bottom:14px;
        }

        .footer-brand-logo{
            width:62px;
            height:62px;
            border-radius:16px;
            object-fit:cover;
            background:#141821;
            border:1px solid rgba(255,255,255,.06);
            box-shadow:var(--shadow-soft);
            padding:7px;
        }

        .footer-brand strong{
            display:block;
            font-size:18px;
        }

        .footer-brand span{
            display:block;
            color:var(--muted);
            font-size:14px;
        }

        .footer-brand p{
            color:var(--muted);
            margin-top:10px;
        }

        .footer-logos{
            display:flex;
            flex-wrap:wrap;
            gap:14px;
            margin-top:18px;
        }

        .footer-logo{
            display:inline-flex;
            align-items:center;
            gap:10px;
            min-height:48px;
            padding:8px 12px;
            background:var(--surface);
            border:1px solid rgba(255,255,255,.06);
            border-radius:12px;
            box-shadow:var(--shadow-soft);
            transition:var(--transition);
        }

        .footer-logo:hover{
            transform:translateY(-2px);
            border-color:rgba(216,180,106,.35);
        }

        .footer-logo svg{
            width:24px;
            height:24px;
            flex:none;
        }

        .footer-logo span{
            color:var(--muted);
            font-size:13px;
        }

        .footer-links{
            display:grid;
            grid-template-columns:repeat(2,1fr);
            gap:18px;
        }

        .footer-column h4{
            font-size:15px;
            margin-bottom:10px;
        }

        .footer-column a{
            display:block;
            color:var(--muted);
            margin-bottom:8px;
            transition:var(--transition);
        }

        .footer-column a:hover{
            color:var(--accent);
        }

        .footer-bottom{
            display:flex;
            justify-content:space-between;
            gap:16px;
            flex-wrap:wrap;
            padding-top:18px;
            border-top:1px solid rgba(255,255,255,.05);
            color:var(--muted);
            font-size:14px;
        }

        .section-space-top{
            margin-top:10px;
        }

        @media (max-width:980px){
            .hero-grid,
            .grid-3,
            .about-grid,
            .split,
            .stats,
            .contact,
            .footer-top,
            .footer-links,
            .values-list{
                grid-template-columns:1fr;
            }

            .hero-points{
                grid-template-columns:1fr;
            }
        }

        @media (max-width:760px){
            .nav{
                padding:12px 0;
                flex-direction:column;
                align-items:flex-start;
            }

            .menu,
            .nav-actions{
                width:100%;
                justify-content:flex-start;
            }

            .hero{
                padding-top:40px;
            }

            .lead{
                font-size:16px;
            }

            .brand-logo{
                width:48px;
                height:48px;
            }

            .footer-brand-logo{
                width:56px;
                height:56px;
            }
        }

        @media (prefers-reduced-motion:reduce){
            *{
                animation:none !important;
                transition:none !important;
                scroll-behavior:auto !important;
            }
        }
    </style>
</head>
<body>

<header class="top">
    <div class="wrap nav">
        <a href="#top" class="brand" aria-label="Accueil <?= e($site['name']) ?>">
            <img class="brand-logo" src="<?= e($site['logo']) ?>" alt="Logo <?= e($site['name']) ?>">
            <div class="brand-text">
                <strong><?= e($site['name']) ?></strong>
                <span><?= e($site['tagline']) ?></span>
            </div>
        </a>

        <nav class="menu" aria-label="Navigation principale">
            <a href="#association">Association</a>
            <a href="#actions">Actions</a>
        <!--    <a href="#vision">Vision</a> -->
            <a href="#valeurs">Valeurs</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="nav-actions">
     <!--       <a class="btn" href="<?= e($site['instagram']) ?>" target="_blank" rel="noopener">Instagram</a> -->
            <a class="btn gold" href="https://espace.lyamorsdj.fr">Nous rejoindre</a>
        </div>
    </div>
</header>

<main id="top">
    <section class="hero">
        <div class="wrap hero-grid">
            <div class="fade-up">
                <div class="kicker"><?= e($site['tagline']) ?></div>
                <h1 class="delay-1"><?= e($site['hero_title']) ?></h1>
                <p class="lead delay-2"><?= e($site['hero_text']) ?></p>

                <div class="hero-actions delay-3">
                    <a class="btn gold" href="#contact">Nous contacter</a>
                    <a class="btn" href="#actions">Découvrir nos actions</a>
                </div>

                <div class="hero-points delay-4">
                    <?php foreach ($highlights as $item): ?>
                        <div class="hero-point">
                            <strong><?= e($item['title']) ?></strong>
                            <span><?= e($item['text']) ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="visual-card fade-up delay-2" aria-hidden="true">
                <svg viewBox="0 0 620 340" role="img">
                    <rect width="620" height="340" fill="#151922"/>
                    <circle cx="470" cy="132" r="86" fill="none" stroke="#d8b46a" stroke-width="2"/>
                    <circle cx="470" cy="132" r="30" fill="none" stroke="#d8b46a" stroke-width="2"/>
                    <circle cx="470" cy="132" r="6" fill="#d8b46a"/>
                    <path d="M18 205
                             C38 205 38 135 58 135
                             C78 135 78 250 98 250
                             C118 250 118 94 138 94
                             C158 94 158 224 178 224
                             C198 224 198 120 218 120
                             C238 120 238 280 258 280
                             C278 280 278 142 298 142
                             C318 142 318 195 338 195
                             C358 195 358 160 378 160"
                          fill="none"
                          stroke="#f4f4f2"
                          stroke-width="3"
                          stroke-linecap="round"/>
                    <rect x="390" y="250" width="170" height="18" rx="5" fill="#262c38"/>
                    <rect x="390" y="250" width="88" height="18" rx="5" fill="#d8b46a"/>
                </svg>
                <small>Une identité plus propre, plus premium, plus cohérente avec l’association.</small>
            </div>
        </div>
    </section>

    <section id="association" class="section-space-top">
        <div class="wrap">
            <div class="section-head fade-up">
                <h2>L’association</h2>
                <p>
                    Lyamors DJ est une association qui allie musique, engagement et proximité. À travers ses actions, elle développe une image sérieuse, moderne et accessible, portée par une vraie identité artistique et une volonté de créer du lien. Chaque projet mené par l’association s’inscrit dans une démarche cohérente, utile et tournée vers le public.
                </p>
            </div>

            <div class="about-grid">
                <article class="card fade-up delay-1">
                    <h3>Des services pour tous</h3>
                    <p>
                        En effet, l'association Lyamør's DJ est avant tout une association qui propose ces services et tout cela gratuitement, dans le but de maximiser la sociabilité
                    </p>
                    <div class="pill-row">
                        <span class="pill">Culture</span>
                        <span class="pill">Musique</span>
                    </div>
                </article>

                <article class="card fade-up delay-2">
                    <h3>Une associatin Caritative</h3>
                    <p>
                        L'association soutiens aussi d'autres structures qui contribue à l'humanité, comme par exemple les associations de Lutte contre le harcèlement ou même d'aide humanitaire
                    </p>
                    <div class="pill-row">
                    <span class="pill">Humain</span>

                    </div>
                </article>
            </div>
        </div>
    </section>

    <section id="actions">
        <div class="wrap">
            <div class="section-head fade-up">
                <h2>Nos actions</h2>
                <p>
                    Une structure lisible, un message clair et une présentation honnête : c’est ce qui inspire confiance.
                </p>
            </div>

            <div class="grid-3">
                <?php foreach ($actions as $index => $action): ?>
                    <article class="card fade-up delay-<?= (int) ($index + 1) ?>">
                        <h3><?= e($action['title']) ?></h3>
                        <p><?= e($action['text']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<!--  <section id="vision"> 
        <div class="wrap split">
            <div>
                <div class="section-head fade-up">
                    <h2>Notre vision</h2>
                    <p>
                        Le projet veut faire coexister qualité visuelle, cohérence associative et univers musical sans tomber
                        dans le cliché ou l’exagération graphique.
                    </p>
                </div>

                <div class="timeline">
                    <?php foreach ($vision as $index => $item): ?>
                        <div class="timeline-item fade-up delay-<?= (int) ($index + 1) ?>">
                            <strong><?= e($item['title']) ?></strong>
                            <span><?= e($item['text']) ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div> 

            <div>
                <div class="section-head fade-up delay-2">
                    <h2>Ce que le site doit transmettre</h2>
                    <p>
                        Une impression de sérieux, de stabilité et d’identité. Le rendu doit rester moderne, mais sans artifices.
                    </p>
                </div>

                <div class="stats">
                    <div class="stat fade-up delay-1">
                        <strong>Sobre</strong>
                        <span>Une direction artistique propre et lisible.</span>
                    </div>
                    <div class="stat fade-up delay-2">
                        <strong>Beau</strong>
                        <span>Un rendu travaillé, plus premium et plus cohérent.</span>
                    </div>
                    <div class="stat fade-up delay-3">
                        <strong>Fiable</strong>
                        <span>Un site pensé pour inspirer confiance sur tous supports.</span>
                    </div>
                </div>
            </div>
        </div> -->
    </section>

    <section id="valeurs">
        <div class="wrap">
            <div class="section-head fade-up">
                <h2>Ce que reflète Lyamors DJ</h2>
                <p>

                </p>
            </div>

            <div class="values-list">
                <?php foreach ($values as $index => $value): ?>
                    <div class="value-box fade-up delay-<?= (($index % 4) + 1) ?>">
                        <strong><?= e($value) ?></strong>
                        <span>Une valeur essentielle de l’image et du positionnement de l’association.</span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="wrap contact">
            <div class="fade-up">
                <div class="section-head">
                    <h2>Contact</h2>
                    <p>
                        Pour une demande d’information, un partenariat, une intervention ou un échange autour de l’association,
                        vous pouvez nous contacter directement.
                    </p>
                </div>

                <div class="hero-actions">
                    <a class="btn gold" href="mailto:<?= e($site['email']) ?>">Envoyer un email</a>
                    <a class="btn" href="<?= e($site['instagram']) ?>" target="_blank" rel="noopener">Instagram</a>
                    <a class="btn" href="<?= e($site['facebook']) ?>" target="_blank" rel="noopener">Facebook</a>
                </div>
            </div>

            <div class="contact-box fade-up delay-2">
                <?php foreach ($contacts as $item): ?>
                    <div class="contact-item">
                        <span><?= e($item['label']) ?></span>
                        <?php if ($item['link'] !== '#'): ?>
                            <a href="<?= e($item['link']) ?>"><?= e($item['value']) ?></a>
                        <?php else: ?>
                            <div><?= e($item['value']) ?></div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>

                <div class="contact-item">
                    <span>Réseaux</span>
                    <a href="<?= e($site['instagram']) ?>" target="_blank" rel="noopener">Instagram</a><br>
                    <a href="<?= e($site['facebook']) ?>" target="_blank" rel="noopener">Facebook</a>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="wrap">
        <div class="footer-top">
            <div class="footer-brand fade-up">
                <div class="footer-brand-head">
                    <img class="footer-brand-logo" src="<?= e($site['logo']) ?>" alt="Logo <?= e($site['name']) ?>">
                    <div>
                        <strong><?= e($site['name']) ?></strong>
                        <span><?= e($site['tagline']) ?></span>
                    </div>
                </div>

                <p>
                    <?= e($site['name']) ?> développe une image musicale et associative sérieuse, pensée pour créer du lien,
                    valoriser les initiatives locales et porter des projets utiles.
                </p>

                <div class="footer-logos">
                    <div class="footer-logo">
                        <svg viewBox="0 0 48 48" fill="none" aria-hidden="true">
                            <circle cx="24" cy="24" r="20" stroke="#d8b46a" stroke-width="2"/>
                            <path d="M14 27C18 21 22 21 26 27C30 33 34 33 38 27" stroke="#f4f4f2" stroke-width="2.2" stroke-linecap="round"/>
                        </svg>
                        <span>Identité musicale</span>
                    </div>

                    <div class="footer-logo">
                        <svg viewBox="0 0 48 48" fill="none" aria-hidden="true">
                            <rect x="10" y="10" width="28" height="28" rx="8" stroke="#d8b46a" stroke-width="2"/>
                            <path d="M17 24H31" stroke="#f4f4f2" stroke-width="2"/>
                            <path d="M24 17V31" stroke="#f4f4f2" stroke-width="2"/>
                        </svg>
                        <span>Projet associatif</span>
                    </div>

                    <div class="footer-logo">
                        <svg viewBox="0 0 48 48" fill="none" aria-hidden="true">
                            <path d="M24 10L36 16V24C36 31 31.5 36 24 38C16.5 36 12 31 12 24V16L24 10Z" stroke="#d8b46a" stroke-width="2"/>
                            <circle cx="24" cy="23" r="4" fill="#f4f4f2"/>
                        </svg>
                        <span>Image crédible</span>
                    </div>
                </div>
            </div>

            <div class="footer-links fade-up delay-2">
                <div class="footer-column">
                    <h4>Navigation</h4>
                    <a href="#association">Association</a>
                    <a href="#actions">Actions</a>
                  <!--  <a href="#vision">Vision</a> -->
                    <a href="#valeurs">Valeurs</a>
                    <a href="#contact">Contact</a>
                </div>

                <div class="footer-column">
                    <h4>Coordonnées</h4>
                    <a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a>
                    <a href="tel:<?= e(preg_replace('/\s+/', '', $site['phone'])) ?>"><?= e($site['phone']) ?></a>
                    <a href="#contact"><?= e($site['city']) ?></a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div>© <?= date('Y') ?> <?= e($site['name']) ?> — Tous droits réservés.</div>
            <div><?= e($site['city']) ?></div>
        </div>
    </div>
</footer>

</body>
</html>
