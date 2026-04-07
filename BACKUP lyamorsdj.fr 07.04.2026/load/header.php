<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LYAMORS DJ | Association Musicale</title>
<link rel="icon" type="image" href="assets/server/logo.png">
<link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='https://lyamorsdj.fr/assets/server/logo.svg' viewBox='0 0 100 100'><text y='75' font-size='75' fill='%23e8353a'>♪</text></svg>">
<meta name="description" content="Association loi 1901 à Bidart. LYAMORS DJ allie musique et solidarité via des soirées caritatives et des ateliers DJ inclusifs au Pays Basque. Rejoignez le mouvement !">
<meta name="keywords" content="DJ caritatif, association musique Bidart, ateliers DJ Pays Basque, événementiel solidaire 64, bénévolat musique, assos, asso, dj, bidart, pays basque, solidarité, inclusion, musique pour tous, gratuit, association loi 1901, RNA W641015062, 989 664 602 00012, 64210, 64200, 64, 2025, événements caritatifs, ateliers d'initiation, inclusion musicale, soutien aux projets locaux, ldj, lyamor dj, lyam dj, lyamors dj, lym dj, lyame dj, france">
<link rel="canonical" href="https://www.lyamorsdj.fr/">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.lyamorsdj.fr/">
<meta property="og:title" content="LYAMORS DJ | La musique qui fait du bien">
<meta property="og:description" content="Découvrez l'association qui mixe sons et solidarité à Bidart. Événements, ateliers et inclusion.">
<meta property="og:image" content="https://www.lyamorsdj.fr/assets/img/og-image.jpg"> <meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="LYAMORS DJ | Musique & Solidarité">
<meta name="twitter:description" content="Association DJ caritative basée à Bidart. Ateliers et événements solidaires au Pays Basque.">
<meta name="twitter:image" content="https://www.lyamorsdj.fr/assets/img/og-image.jpg">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "NGO",
  "name": "LYAMORS DJ",
  "description": "Association caritative de DJing et d'inclusion musicale à Bidart.",
  "url": "https://www.lyamorsdj.fr",
  "logo": "https://www.lyamorsdj.fr/assets/img/logo.png",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Bidart",
    "postalCode": "64210",
    "addressRegion": "Nouvelle-Aquitaine",
    "addressCountry": "FR"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 43.4385,
    "longitude": -1.5888
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+33564116245",
    "contactType": "Enquiry"
  },
  "sameAs": [
    "https://www.instagram.com/lyamorsdj",
    "https://www.facebook.com/lyamorsdj"
  ]
}
</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
</head>
<body>

<header id="site-header">
    <nav class="nav-inner">
        <a href="index.php" class="nav-logo">
            <img src="https://lyamorsdj.fr/assets/server/logo.png" alt="Logo LYAMORS DJ" class="logo-img">
            <span class="logo-text">LYAMORS<em>DJ</em></span>
        </a>

        <ul class="nav-links" id="nav-links">
            <li><a href="/">Accueil</a></li>
            <li><a href="qui-sommes-nous.php">L'asso</a></li>
            <li><a href="evenements.php">Événements</a></li>
            <li><a href="ateliers.php">Ateliers DJ</a></li>
            <li><a href="soutien.php">Soutenir</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>

        <a href="tel:0564116245" class="nav-cta">
            <span class="cta-pulse"></span>
            05 64 11 62 45
        </a>

        <button class="hamburger" id="hamburger" aria-label="Menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </nav>
</header>

<div class="mobile-menu" id="mobile-menu" aria-hidden="true">
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="qui-sommes-nous.php">L'asso</a></li>
        <li><a href="evenements.php">Événements</a></li>
        <li><a href="ateliers.php">Ateliers DJ</a></li>
        <li><a href="soutien.php">Soutenir</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
    <a href="tel:0564116245" class="mobile-phone">05 64 11 62 45</a>
</div>
<div class="mobile-overlay" id="mobile-overlay"></div>

<div id="cookie-banner" class="cookie-popup">
    <div class="cookie-content">
        <div class="cookie-text">
            <h3>🍪 Cookies & Musique</h3>
            <p>On utilise quelques cookies pour assurer le bon fonctionnement du site. Ça vous va ? <a href="politique-confidentialite.php">En savoir plus</a>.</p>
        </div>
        <div class="cookie-actions">
            <button id="btn-accept-cookies" class="cookie-btn accept">Accepter</button>
            <button id="btn-refuse-cookies" class="cookie-btn refuse">Refuser</button>
        </div>
    </div>
</div>

<style>
.cookie-popup {
    position: fixed;
    bottom: -100%;
    left: 0;
    width: 100%;
    background: #111;
    border-top: 3px solid #e8353a;
    padding: 20px 5%;
    z-index: 10000;
    transition: bottom 0.5s ease-in-out;
}
.cookie-popup.active { bottom: 0; }
.cookie-content { max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; gap: 20px; }
.cookie-text h3 { font-family: 'Bebas Neue', sans-serif; color: #e8353a; margin: 0 0 5px 0; font-size: 1.4rem; }
.cookie-text p { font-family: 'DM Sans', sans-serif; color: #fff; margin: 0; font-size: 0.9rem; }
.cookie-text a { color: #e8353a; text-decoration: underline; }
.cookie-actions { display: flex; gap: 10px; }
.cookie-btn { padding: 10px 20px; font-family: 'Bebas Neue', sans-serif; font-size: 1rem; cursor: pointer; border: none; transition: 0.3s; }
.cookie-btn.accept { background: #e8353a; color: #fff; }
.cookie-btn.refuse { background: #333; color: #bbb; }
@media (max-width: 768px) {
    .cookie-content { flex-direction: column; text-align: center; }
    .cookie-actions { width: 100%; }
    .cookie-btn { width: 50%; }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const banner = document.getElementById("cookie-banner");
    const accept = document.getElementById("btn-accept-cookies");
    const refuse = document.getElementById("btn-refuse-cookies");
    if (!localStorage.getItem("cookieChoice")) {
        setTimeout(() => { banner.classList.add("active"); }, 1000);
    }
    accept.addEventListener("click", () => { localStorage.setItem("cookieChoice", "accepted"); banner.classList.remove("active"); });
    refuse.addEventListener("click", () => { localStorage.setItem("cookieChoice", "refused"); banner.classList.remove("active"); });
});
</script>