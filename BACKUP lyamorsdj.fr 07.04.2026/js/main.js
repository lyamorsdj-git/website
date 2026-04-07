// Animation des éléments .reveal au scroll
document.addEventListener('DOMContentLoaded', () => {
    const reveals = document.querySelectorAll('.reveal');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    });
    
    reveals.forEach(el => observer.observe(el));
});

// Menu hamburger
document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileOverlay = document.querySelector('.mobile-overlay');
    
    if (!hamburger || !mobileMenu) return;
    
    const toggleMenu = () => {
        hamburger.classList.toggle('open');
        mobileMenu.classList.toggle('open');
        if (mobileOverlay) mobileOverlay.classList.toggle('open');
    };
    
    hamburger.addEventListener('click', toggleMenu);
    
    if (mobileOverlay) {
        mobileOverlay.addEventListener('click', toggleMenu);
    }
    
    // Fermer en cliquant sur un lien
    mobileMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', toggleMenu);
    });
});

// Header scroll effect
document.addEventListener('scroll', () => {
    const header = document.getElementById('site-header');
    if (window.scrollY > 10) {
        header?.classList.add('scrolled');
    } else {
        header?.classList.remove('scrolled');
    }
});

// Animation des statistiques
document.addEventListener('DOMContentLoaded', () => {
    const stats = document.querySelectorAll('[data-count]');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
                entry.target.classList.add('counted');
                const finalCount = parseInt(entry.target.dataset.count);
                const suffix = entry.target.dataset.suffix || '';
                const duration = 1000;
                const start = Date.now();
                
                const animate = () => {
                    const now = Date.now();
                    const progress = (now - start) / duration;
                    
                    if (progress < 1) {
                        const current = Math.floor(finalCount * progress);
                        entry.target.textContent = current + suffix;
                        requestAnimationFrame(animate);
                    } else {
                        entry.target.textContent = finalCount + suffix;
                    }
                };
                
                animate();
            }
        });
    }, { threshold: 0.5 });
    
    stats.forEach(stat => observer.observe(stat));
});

// Smooth scroll pour les ancres
document.addEventListener('click', (e) => {
    if (e.target.tagName === 'A' && e.target.getAttribute('href')?.startsWith('#')) {
        e.preventDefault();
        const target = document.querySelector(e.target.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth' });
        }
    }
});
