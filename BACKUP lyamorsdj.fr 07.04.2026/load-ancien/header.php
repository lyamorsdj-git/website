<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #7c3aed;
        }

        header {
            background-color: #ffffff;
            border-bottom: 1px solid #e5e5e5;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }

        /* Mode sombre automatique */
        @media (prefers-color-scheme: dark) {
            header {
                background-color: #18181b;
                border-bottom: 1px solid #3f3f46;
            }
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .header-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 85px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 14px;
            text-decoration: none;
        }

        .logo-img {
            height: 60px;
            width: auto;
            transition: transform 0.3s ease;
        }

        .logo-img:hover {
            transform: scale(1.06);
        }

        .logo-text {
            display: none;
        }

        .logo-title {
            font-size: 26px;
            font-weight: 700;
            letter-spacing: -1px;
            color: #111827;
            line-height: 1;
        }

        .logo-subtitle {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 2px;
            color: var(--primary);
            text-transform: uppercase;
            margin-top: -2px;
        }

        @media (prefers-color-scheme: dark) {
            .logo-title { color: #ffffff; }
        }

        /* Menu Desktop */
        nav {
            display: none;
            gap: 32px;
        }

        nav a {
            color: #374151;
            text-decoration: none;
            font-weight: 500;
            font-size: 15.5px;
            transition: color 0.3s;
        }

        @media (prefers-color-scheme: dark) {
            nav a { color: #d1d5db; }
        }

        nav a:hover {
            color: var(--primary);
        }

        /* Bouton Nous appeler */
        .call-btn {
            background-color: var(--primary);
            color: white;
            padding: 12px 24px;
            border-radius: 9999px;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 9px;
            font-size: 15px;
            box-shadow: 0 4px 15px rgba(124, 58, 237, 0.25);
            transition: all 0.3s;
        }

        .call-btn:hover {
            background-color: #6d28d9;
            transform: translateY(-2px);
        }

        .hamburger {
            font-size: 29px;
            cursor: pointer;
            color: #374151;
        }

        @media (prefers-color-scheme: dark) {
            .hamburger { color: #d1d5db; }
        }

        /* Menu Mobile */
        .mobile-menu {
            display: none;
            background-color: #ffffff;
            border-top: 1px solid #e5e5e5;
            padding: 25px 20px 30px;
        }

        @media (prefers-color-scheme: dark) {
            .mobile-menu {
                background-color: #18181b;
                border-top: 1px solid #3f3f46;
            }
        }

        .mobile-menu a {
            display: block;
            padding: 14px 0;
            color: #374151;
            text-decoration: none;
            font-size: 17.5px;
            font-weight: 500;
        }

        @media (prefers-color-scheme: dark) {
            .mobile-menu a { color: #d1d5db; }
        }

        /* Responsive */
        @media (min-width: 768px) {
            .logo-text { display: block; }
            nav { display: flex; }
            .hamburger { display: none; }
        }
    </style>
</head>
<body>

<header>
    <div class="container">
        <div class="header-inner">
            
            <!-- Logo -->
            <a href="/" class="logo">
                <img src="assets/images/logo-lyamors-dj.png" 
                     alt="Logo Association LYAMORS DJ" 
                     class="logo-img">
                <div class="logo-text">
                    <div class="logo-title">LYAMORS DJ</div>
                    <div class="logo-subtitle">Association loi 1901</div>
                </div>
            </a>

            <!-- Menu Ordinateur -->
            <nav>
                <a href="/">Accueil</a>
                <a href="/qui-sommes-nous">Qui sommes-nous</a>
                <a href="/evenements">Événements</a>
                <a href="/ateliers">Ateliers DJ</a>
                <a href="/soutien">Soutenir</a>
            </nav>

            <!-- Bouton + Hamburger -->
            <div style="display: flex; align-items: center; gap: 16px;">
                <a href="tel:0564116245" class="call-btn">
                    <i class="fas fa-phone"></i>
                    Nous appeler
                </a>
                
                <div class="hamburger" id="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div id="mobile-menu" class="mobile-menu">
        <a href="/">Accueil</a>
        <a href="/qui-sommes-nous">Qui sommes-nous</a>
        <a href="/evenements">Événements</a>
        <a href="/ateliers">Ateliers DJ</a>
        <a href="/soutien">Soutenir</a>
        
        <a href="tel:0564116245" style="background: #7c3aed; color: white; text-align: center; padding: 16px; border-radius: 9999px; margin-top: 25px; display: block; font-weight: 600;">
            <i class="fas fa-phone"></i> Nous appeler
        </a>
    </div>
</header>

<script>
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');
    
    hamburger.addEventListener('click', () => {
        if (mobileMenu.style.display === 'block') {
            mobileMenu.style.display = 'none';
            hamburger.innerHTML = '<i class="fas fa-bars"></i>';
        } else {
            mobileMenu.style.display = 'block';
            hamburger.innerHTML = '<i class="fas fa-times"></i>';
        }
    });
</script>

</body>
</html>