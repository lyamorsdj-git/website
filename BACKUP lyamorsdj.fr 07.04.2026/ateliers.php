<?php include 'load/header.php'; ?>

<!-- PAGE HERO -->
<div class="page-hero">
    <div class="container">
        <div class="breadcrumb"><a href="index.php">Accueil</a>Ateliers DJ</div>
        <span class="section-tag">Initiation & pratique</span>
        <h1 class="section-title" style="font-size: clamp(3.5rem, 8vw, 7rem); line-height:0.88;">Ateliers<br>DJ.</h1>
        <p class="section-lead" style="margin-top:24px;">On ouvre les platines à tout le monde. Aucun pré-requis, aucune sélection — juste l'envie d'apprendre et de créer.</p>
    </div>
</div>

<!-- CONCEPT -->
<section>
    <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:80px; align-items:center;">
            <div>
                <span class="section-tag reveal">Le concept</span>
                <h2 class="section-title reveal" style="font-size:clamp(2.5rem,5vw,4.5rem);">Le DJing<br>comme<br>outil social.</h2>
                <p class="reveal" style="color:var(--gris-light); line-height:1.8; margin-top:24px; margin-bottom:20px;">
                    Nos ateliers ne sont pas des cours de DJ classiques. On ne forme pas des artistes (même si ça peut arriver !). On utilise la musique comme un vecteur de confiance en soi, de créativité et de lien social.
                </p>
                <p class="reveal" style="color:var(--gris-light); line-height:1.8; margin-bottom:32px;">
                    On intervient dans des établissements scolaires, des centres sociaux, des structures d'insertion, des EHPAD. On s'adapte à chaque public, à chaque besoin.
                </p>
                <a href="contact.php" class="btn btn-primary reveal">Nous solliciter pour un atelier</a>
            </div>
            <div class="reveal">
                <img
                    src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&q=80&w=900"
                    alt="Atelier DJ"
                    style="width:100%; aspect-ratio:4/5; object-fit:cover; border-radius:14px;"
                    loading="lazy"
                >
            </div>
        </div>
    </div>
</section>

<!-- POUR QUI -->
<section style="background:var(--noir-soft);">
    <div class="container">
        <span class="section-tag reveal">Nos publics</span>
        <h2 class="section-title reveal">Pour qui ?</h2>

        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(260px,1fr)); gap:20px; margin-top:56px;" data-stagger>
            <div style="background:var(--noir-card); border:1px solid var(--border); border-radius:14px; padding:36px;">
                <span style="font-size:2rem; display:block; margin-bottom:20px;">🎓</span>
                <h3 style="font-size:1.1rem; font-weight:500; color:var(--blanc); margin-bottom:12px;">Jeunes & scolaires</h3>
                <p style="font-size:0.85rem; color:var(--gris); line-height:1.65;">On intervient dans les collèges, lycées, MJC et centres de loisirs pour initier les jeunes à la culture musicale et à la technique DJ.</p>
            </div>
            <div style="background:var(--noir-card); border:1px solid var(--border); border-radius:14px; padding:36px;">
                <span style="font-size:2rem; display:block; margin-bottom:20px;">💼</span>
                <h3 style="font-size:1.1rem; font-weight:500; color:var(--blanc); margin-bottom:12px;">Personnes en insertion</h3>
                <p style="font-size:0.85rem; color:var(--gris); line-height:1.65;">Dans les structures d'insertion professionnelle, le DJing devient un outil de valorisation des compétences et de confiance en soi.</p>
            </div>
            <div style="background:var(--noir-card); border:1px solid var(--border); border-radius:14px; padding:36px;">
                <span style="font-size:2rem; display:block; margin-bottom:20px;">♿</span>
                <h3 style="font-size:1.1rem; font-weight:500; color:var(--blanc); margin-bottom:12px;">Publics en situation de handicap</h3>
                <p style="font-size:0.85rem; color:var(--gris); line-height:1.65;">On adapte nos ateliers aux besoins spécifiques : handicap moteur, trouble cognitif, etc. La musique n'a pas de barrière.</p>
            </div>
            <div style="background:var(--noir-card); border:1px solid var(--border); border-radius:14px; padding:36px;">
                <span style="font-size:2rem; display:block; margin-bottom:20px;">🧓</span>
                <h3 style="font-size:1.1rem; font-weight:500; color:var(--blanc); margin-bottom:12px;">Seniors & EHPAD</h3>
                <p style="font-size:0.85rem; color:var(--gris); line-height:1.65;">Des ateliers d'écoute musicale et de découverte du mix pour rompre l'isolement et créer du lien entre générations.</p>
            </div>
        </div>
    </div>
</section>

<!-- DÉROULÉ -->
<section>
    <div class="container">
        <span class="section-tag reveal">Comment ça marche</span>
        <h2 class="section-title reveal">Le déroulé<br>d'un atelier.</h2>

        <div style="max-width:760px; margin:56px 0 0; display:flex; flex-direction:column; gap:0;">
            <?php
            $steps = [
                ['num'=>'01', 'title'=>'Prise de contact', 'desc'=>'Vous nous contactez pour présenter votre structure et votre public. On adapte le format de l\'atelier à vos besoins.'],
                ['num'=>'02', 'title'=>'Préparation', 'desc'=>'On prépare le matériel (platines, enceintes, câbles) et le contenu pédagogique adapté. On arrive avec tout ce qu\'il faut.'],
                ['num'=>'03', 'title'=>'L\'atelier (1h30 à 3h)', 'desc'=>'Présentation du métier de DJ, initiation technique, mix en live. Chacun passe derrière les platines. C\'est souvent le meilleur moment.'],
                ['num'=>'04', 'title'=>'Bilan & suite', 'desc'=>'On échange sur le ressenti, on peut envisager plusieurs sessions ou une mini-résidence. Tout est possible.'],
            ];
            foreach ($steps as $i => $step): ?>
            <div class="reveal" style="display:grid; grid-template-columns:60px 1fr; gap:24px; padding:32px 0; border-bottom:1px solid var(--border);">
                <div style="font-family:var(--font-display); font-size:2rem; color:var(--accent); padding-top:4px;"><?= $step['num'] ?></div>
                <div>
                    <h3 style="font-size:1rem; font-weight:500; color:var(--blanc); margin-bottom:10px;"><?= $step['title'] ?></h3>
                    <p style="font-size:0.88rem; color:var(--gris); line-height:1.65;"><?= $step['desc'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-band">
    <div class="container">
        <span class="section-tag" style="display:block; text-align:center; margin-bottom:16px;">On vient chez vous</span>
        <h2 class="section-title reveal">Vous avez un<br>projet ?</h2>
        <p class="section-lead reveal">Association, école, collectivité — on peut intervenir gratuitement ou à coût très réduit. Parlons-en.</p>
        <div class="cta-actions reveal">
            <a href="contact.php" class="btn btn-primary">Nous contacter</a>
            <a href="tel:0564116245" class="btn btn-ghost">05 64 11 62 45</a>
        </div>
    </div>
</section>

<?php include 'load/footer.php'; ?>