<?php include 'load/header.php'; ?>

<!-- PAGE HERO -->
<div class="page-hero">
    <div class="container">
        <div class="breadcrumb"><a href="index.php">Accueil</a>Événements</div>
        <span class="section-tag">Programme</span>
        <h1 class="section-title" style="font-size: clamp(3.5rem, 8vw, 7rem); line-height:0.88;">Nos<br>événements.</h1>
        <p class="section-lead" style="margin-top:24px;">Soirées caritatives, ateliers DJ, festivals solidaires — retrouvez tout ce qu'on prépare pour vous.</p>
    </div>
</div>

<!-- FILTRE -->
<section style="padding: 48px 0 0;">
    <div class="container">
        <div style="display:flex; gap:12px; flex-wrap:wrap; margin-bottom:48px;">
            <button class="filter-btn active" data-filter="all">Tous</button>
            <button class="filter-btn" data-filter="caritatif">Soirées caritatives</button>
            <button class="filter-btn" data-filter="atelier">Ateliers DJ</button>
            <button class="filter-btn" data-filter="festival">Festivals</button>
        </div>
    </div>
</section>

<style>
.filter-btn {
    font-family: var(--font-body);
    font-size: 0.82rem;
    font-weight: 400;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    padding: 9px 22px;
    border-radius: 50px;
    border: 1px solid var(--border);
    background: transparent;
    color: var(--gris-light);
    cursor: pointer;
    transition: all 0.2s;
}
.filter-btn:hover, .filter-btn.active {
    background: var(--accent);
    border-color: var(--accent);
    color: white;
}
.events-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 20px;
    padding-bottom: 120px;
}
.event-card {
    display: grid;
    grid-template-columns: 120px 1fr auto;
    align-items: center;
    gap: 36px;
    padding: 32px;
    background: var(--noir-card);
    border: 1px solid var(--border);
    border-radius: 14px;
    text-decoration: none;
    transition: border-color 0.3s, transform 0.25s;
}
.event-card:hover {
    border-color: rgba(232,53,58,0.35);
    transform: translateX(8px);
}
.event-card-date {
    text-align: center;
    border-right: 1px solid var(--border);
    padding-right: 36px;
}
.event-card-day {
    font-family: var(--font-display);
    font-size: 3.5rem;
    line-height: 1;
    color: var(--accent);
    display: block;
}
.event-card-month {
    font-family: var(--font-mono);
    font-size: 0.72rem;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--gris);
}
.event-card-title {
    font-size: 1.15rem;
    font-weight: 500;
    color: var(--blanc);
    margin-bottom: 10px;
    line-height: 1.3;
}
.event-card-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
    font-size: 0.8rem;
    color: var(--gris);
}
.event-card-meta span { display: flex; align-items: center; gap: 5px; }
.event-card-desc {
    font-size: 0.85rem;
    color: var(--gris);
    margin-top: 10px;
    line-height: 1.6;
    max-width: 600px;
}
.event-card-side {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    gap: 12px;
}
.event-arrow {
    color: var(--accent);
    font-size: 1.4rem;
    transition: transform 0.2s;
}
.event-card:hover .event-arrow { transform: translateX(4px); }
.event-past { opacity: 0.45; }
.past-label {
    font-family: var(--font-mono);
    font-size: 0.65rem;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: var(--gris);
}
@media (max-width: 640px) {
    .event-card { grid-template-columns: 80px 1fr; }
    .event-card-date { padding-right: 20px; }
    .event-card-day { font-size: 2.5rem; }
    .event-card-side { display: none; }
}
</style>

<section style="padding-top:0;">
    <div class="container">
        <div class="events-grid" data-stagger>

            <!-- Événements à venir -->
        <!--    <a href="#" class="event-card" data-type="caritatif">
                <div class="event-card-date">
                    <span class="event-card-day">19</span>
                    <span class="event-card-month">Avr<br>2025</span>
                </div>
                <div>
                    <h3 class="event-card-title">Soirée caritative « Les Ondes du Cœur »</h3>
                    <div class="event-card-meta">
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Salle des fêtes, Bidart</span>
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>21h – 3h</span>
                        <span>🎟 Entrée 10€</span>
                    </div>
                    <p class="event-card-desc">Soirée DJ au profit de l'association caritative locale. 100% des bénéfices reversés.</p>
                </div>
                <div class="event-card-side">
                    <span class="event-badge badge-caritatif">Caritatif</span>
                    <span class="event-arrow">→</span>
                </div>
            </a>

            <a href="#" class="event-card" data-type="atelier">
                <div class="event-card-date">
                    <span class="event-card-day">03</span>
                    <span class="event-card-month">Mai<br>2025</span>
                </div>
                <div>
                    <h3 class="event-card-title">Atelier DJ découverte — Collège de Bidart</h3>
                    <div class="event-card-meta">
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Collège de Bidart</span>
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>14h – 17h</span>
                        <span>🆓 Entrée libre</span>
                    </div>
                    <p class="event-card-desc">Initiation au DJing pour les élèves du collège. Platines, mix, beatmatching — on initie les jeunes à l'art du DJ.</p>
                </div>
                <div class="event-card-side">
                    <span class="event-badge badge-atelier">Atelier</span>
                    <span class="event-arrow">→</span>
                </div>
            </a>

            <a href="#" class="event-card" data-type="festival">
                <div class="event-card-date">
                    <span class="event-card-day">14</span>
                    <span class="event-card-month">Juin<br>2025</span>
                </div>
                <div>
                    <h3 class="event-card-title">Festival Solidaire Pays Basque — édition 2025</h3>
                    <div class="event-card-meta">
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Place du Port, Bidart</span>
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>15h – 23h</span>
                        <span>🎟 Participation libre</span>
                    </div>
                    <p class="event-card-desc">Grande soirée festive en plein air avec plusieurs DJs, animations, stands associatifs et buvette solidaire.</p>
                </div>
                <div class="event-card-side">
                    <span class="event-badge badge-festival">Festival</span>
                    <span class="event-arrow">→</span>
                </div>
            </a>

            <a href="#" class="event-card" data-type="atelier">
                <div class="event-card-date">
                    <span class="event-card-day">28</span>
                    <span class="event-card-month">Juin<br>2025</span>
                </div>
                <div>
                    <h3 class="event-card-title">Atelier DJ — Centre social Anglet</h3>
                    <div class="event-card-meta">
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Centre social, Anglet</span>
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>10h – 12h</span>
                        <span>🆓 Gratuit sur inscription</span>
                    </div>
                    <p class="event-card-desc">Atelier ouvert aux personnes en insertion professionnelle. Découverte du métier de DJ et de la technique son.</p>
                </div>
                <div class="event-card-side">
                    <span class="event-badge badge-atelier">Atelier</span>
                    <span class="event-arrow">→</span>
                </div>
            </a> -->

            <!-- Événement passé -->
            <div class="event-card event-past" data-type="caritatif">
                <div class="event-card-date">
                    <span class="event-card-day">08</span>
                    <span class="event-card-month">Mars<br>2025</span>
                </div>
                <div>
                    <h3 class="event-card-title">Soirée DJ solidaire — 8 Mars, journée des droits des femmes</h3>
                    <div class="event-card-meta">
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Bidart</span>
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>20h – 2h</span>
                    </div>
                </div>
                <div class="event-card-side">
                    <span class="past-label">Passé</span>
                    <span class="event-badge badge-caritatif">Caritatif</span>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CTA inscription newsletter -->
<section class="cta-band">
    <div class="container">
        <span class="section-tag" style="display:block; text-align:center; margin-bottom:16px;">Ne rien rater</span>
        <h2 class="section-title reveal">Rester informé·e.</h2>
        <p class="section-lead reveal">On vous prévient en avant-première pour nos prochains événements.</p>
        <div class="cta-actions reveal" style="max-width:480px; margin:0 auto;">
            <a href="contact.php" class="btn btn-primary">Nous contacter</a>
            <a href="https://www.facebook.com/profile.php?id=61576024793522" target="_blank" class="btn btn-ghost">Suivre sur Facebook</a>
        </div>
    </div>
</section>

<script>
document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const filter = btn.dataset.filter;
        document.querySelectorAll('.event-card').forEach(card => {
            if (filter === 'all' || card.dataset.type === filter) {
                card.style.display = 'grid';
            } else {
                card.style.display = 'none';
            }
        });
    });
});
</script>

<?php include 'load/footer.php'; ?>