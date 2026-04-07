<?php include 'load/header.php'; ?>

<!-- PAGE HERO -->
<div class="page-hero">
    <div class="container">
        <div class="breadcrumb"><a href="index.php">Accueil</a>Soutenir</div>
        <span class="section-tag">Agir avec nous</span>
        <h1 class="section-title" style="font-size: clamp(3.5rem, 8vw, 7rem); line-height:0.88;">Soutenir<br>LYAMORS<br>DJ.</h1>
        <p class="section-lead" style="margin-top:24px;">Bénévole, partenaire, donateur·rice — il y a plein de façons de rejoindre le mouvement. Choisissez la vôtre.</p>
    </div>
</div>

<!-- 3 FAÇONS -->
<section>
    <div class="container">
        <span class="section-tag reveal">Vos options</span>
        <h2 class="section-title reveal">Comment<br>nous aider ?</h2>

        <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:24px; margin-top:64px;" data-stagger>

            <!-- Bénévolat -->
            <div style="background:var(--noir-card); border:1px solid var(--border); border-radius:14px; padding:40px; display:flex; flex-direction:column;">
                <span style="font-size:2.5rem; margin-bottom:24px; display:block;">🙋</span>
                <h3 style="font-family:var(--font-display); font-size:2rem; letter-spacing:0.5px; color:var(--blanc); margin-bottom:16px;">Bénévole</h3>
                <p style="font-size:0.88rem; color:var(--gris); line-height:1.7; flex:1;">
                    DJs passionné·e·s, technicien·nes son, animateur·rices, organisateur·rices, communicants·es — on a besoin de vous. Aucune compétence musicale requise. Juste l'envie de s'impliquer.
                </p>
                <div style="margin-top:32px; display:flex; flex-direction:column; gap:10px;">
                    <div style="display:flex; align-items:center; gap:10px; font-size:0.82rem; color:var(--gris-light);">
                        <span style="color:var(--accent);">✓</span> Présence aux événements
                    </div>
                    <div style="display:flex; align-items:center; gap:10px; font-size:0.82rem; color:var(--gris-light);">
                        <span style="color:var(--accent);">✓</span> Animation d'ateliers
                    </div>
                    <div style="display:flex; align-items:center; gap:10px; font-size:0.82rem; color:var(--gris-light);">
                        <span style="color:var(--accent);">✓</span> Télébénévolat possible
                    </div>
                    <div style="display:flex; align-items:center; gap:10px; font-size:0.82rem; color:var(--gris-light);">
                        <span style="color:var(--accent);">✓</span> À partir de 2h/semaine
                    </div>
                </div>
                <a href="https://jobs.lyamorsdj.fr" class="btn btn-primary" style="margin-top:32px; justify-content:center;">Rejoindre l'équipe →</a>
            </div>

            <!-- Don -->
            <div id="don" style="background:var(--accent); border-radius:14px; padding:40px; display:flex; flex-direction:column; position:relative; overflow:hidden;">
                <span style="font-family:var(--font-display); font-size:15rem; color:rgba(0,0,0,0.1); position:absolute; bottom:-30px; right:-20px; line-height:1; pointer-events:none;">♪</span>
                <span style="font-size:2.5rem; margin-bottom:24px; display:block; position:relative;">❤️</span>
                <h3 style="font-family:var(--font-display); font-size:2rem; letter-spacing:0.5px; color:white; margin-bottom:16px; position:relative;">Faire un don</h3>
                <p style="font-size:0.88rem; color:rgba(255,255,255,0.85); line-height:1.7; flex:1; position:relative;">
                    Chaque euro compte. Vos dons financent le matériel pour nos ateliers, les déplacements de nos bénévoles, et les projets solidaires qu'on accompagne sur le territoire.
                </p>
                <div style="margin-top:32px; display:flex; flex-direction:column; gap:10px; position:relative;">
                    <div style="display:flex; align-items:center; gap:10px; font-size:0.82rem; color:rgba(255,255,255,0.85);">
                        <span style="color:white; font-weight:bold;">✓</span> Association loi 1901 déclarée
                    </div>
                    <div style="display:flex; align-items:center; gap:10px; font-size:0.82rem; color:rgba(255,255,255,0.85);">
                        <span style="color:white; font-weight:bold;">✓</span> Reçu fiscal sur demande
                    </div>
                    <div style="display:flex; align-items:center; gap:10px; font-size:0.82rem; color:rgba(255,255,255,0.85);">
                        <span style="color:white; font-weight:bold;">✓</span> 100% reversé aux actions
                    </div>
                </div>
                <a href="mailto:contact@lyamorsdj.fr?subject=Don à LYAMORS DJ" class="btn" style="margin-top:32px; justify-content:center; background:white; color:var(--accent);">Nous contacter pour un don →</a>
            </div>

            <!-- Partenaire -->
            <div style="background:var(--noir-card); border:1px solid var(--border); border-radius:14px; padding:40px; display:flex; flex-direction:column;">
                <span style="font-size:2.5rem; margin-bottom:24px; display:block;">🏢</span>
                <h3 style="font-family:var(--font-display); font-size:2rem; letter-spacing:0.5px; color:var(--blanc); margin-bottom:16px;">Partenaire</h3>
                <p style="font-size:0.88rem; color:var(--gris); line-height:1.7; flex:1;">
                    Entreprise, collectivité, association — devenez partenaire de LYAMORS DJ. On peut co-organiser des événements, accueillir nos ateliers, ou soutenir nos projets en nature ou en compétences.
                </p>
                <div style="margin-top:32px; display:flex; flex-direction:column; gap:10px;">
                    <div style="display:flex; align-items:center; gap:10px; font-size:0.82rem; color:var(--gris-light);">
                        <span style="color:var(--accent);">✓</span> Visibilité sur nos événements
                    </div>
                    <div style="display:flex; align-items:center; gap:10px; font-size:0.82rem; color:var(--gris-light);">
                        <span style="color:var(--accent);">✓</span> Co-organisation possible
                    </div>
                    <div style="display:flex; align-items:center; gap:10px; font-size:0.82rem; color:var(--gris-light);">
                        <span style="color:var(--accent);">✓</span> Mécénat de compétences
                    </div>
                    <div style="display:flex; align-items:center; gap:10px; font-size:0.82rem; color:var(--gris-light);">
                        <span style="color:var(--accent);">✓</span> RSE & engagement territorial
                    </div>
                </div>
                <a href="contact.php" class="btn btn-ghost" style="margin-top:32px; justify-content:center; border-color:rgba(255,255,255,0.15);">Discutons-en →</a>
            </div>
        </div>
    </div>
</section>

<!-- BENEVOLT -->
<section style="background:var(--noir-soft);">
    <div class="container">
        <div style="max-width:820px; margin:0 auto; text-align:center;">
            <span class="section-tag reveal" style="display:block;">Plateformes officielles</span>
            <h2 class="section-title reveal" style="font-size:clamp(2.2rem,4vw,3.5rem);">On est référencés<br>sur les plateformes<br>du bénévolat.</h2>
            <p class="section-lead reveal" style="margin:0 auto 48px; text-align:center;">
                Vous pouvez rejoindre nos missions de bénévolat directement via les plateformes officielles.
            </p>
            <div style="display:flex; gap:20px; justify-content:center; flex-wrap:wrap;" class="reveal">
                
                <a href="https://www.jeveuxaider.gouv.fr/organisations/28963-lyamors-dj" target="_blank" rel="noopener" 
                   style="display:flex; align-items:center; gap:16px; background:var(--noir-card); border:1px solid var(--border); border-radius:14px; padding:20px 28px; transition:all 0.2s; text-decoration:none;" 
                   onmouseover="this.style.borderColor='rgba(232,53,58,0.35)'; this.style.transform='translateY(-4px)'; this.style.background='rgba(255,255,255,0.02)'" 
                   onmouseout="this.style.borderColor='var(--border)'; this.style.transform=''; this.style.background='var(--noir-card)'">
                    <img src="https://www.google.com/s2/favicons?sz=64&domain=jeveuxaider.gouv.fr" alt="Gouv" style="width:32px; height:32px; border-radius:4px;">
                    <div style="text-align:left;">
                        <div style="font-weight:500; color:var(--blanc); font-size:0.95rem;">JeVeuxAider.gouv.fr</div>
                        <div style="font-size:0.75rem; color:var(--gris);">Plateforme officielle du bénévolat</div>
                    </div>
                </a>

                <a href="https://www.benevolt.fr/association/lyamors-dj-2" target="_blank" rel="noopener" 
                   style="display:flex; align-items:center; gap:16px; background:var(--noir-card); border:1px solid var(--border); border-radius:14px; padding:20px 28px; transition:all 0.2s; text-decoration:none;" 
                   onmouseover="this.style.borderColor='rgba(232,53,58,0.35)'; this.style.transform='translateY(-4px)'; this.style.background='rgba(255,255,255,0.02)'" 
                   onmouseout="this.style.borderColor='var(--border)'; this.style.transform=''; this.style.background='var(--noir-card)'">
                    <img src="https://www.google.com/s2/favicons?sz=64&domain=benevolt.fr" alt="Benevolt" style="width:32px; height:32px; border-radius:4px;">
                    <div style="text-align:left;">
                        <div style="font-weight:500; color:var(--blanc); font-size:0.95rem;">Benevolt.fr</div>
                        <div style="font-size:0.75rem; color:var(--gris);">Bénévolat & engagement associatif</div>
                    </div>
                </a>
				<a href="https://www.linkedin.com/company/lyamors-dj" target="_blank" rel="noopener" 
       style="display:flex; align-items:center; gap:16px; background:var(--noir-card); border:1px solid var(--border); border-radius:14px; padding:20px 28px; transition:all 0.2s; text-decoration:none;" 
       onmouseover="this.style.borderColor='rgba(232,53,58,0.35)'; this.style.transform='translateY(-4px)'; this.style.background='rgba(255,255,255,0.02)'" 
       onmouseout="this.style.borderColor='var(--border)'; this.style.transform=''; this.style.background='var(--noir-card)'">
        <img src="https://www.google.com/s2/favicons?sz=64&domain=linkedin.com" alt="LinkedIn" style="width:32px; height:32px; border-radius:4px;">
        <div style="text-align:left;">
            <div style="font-weight:500; color:var(--blanc); font-size:0.95rem;">LinkedIn</div>
            <div style="font-size:0.75rem; color:var(--gris);">Réseau professionnel</div>
        </div>
    </a>
				<a href="https://jobs.lyamorsdj.fr/?type=B%C3%A9n%C3%A9volat" target="_blank" rel="noopener" 
       style="display:flex; align-items:center; gap:16px; background:var(--noir-card); border:1px solid var(--border); border-radius:14px; padding:20px 28px; transition:all 0.2s; text-decoration:none;" 
       onmouseover="this.style.borderColor='rgba(232,53,58,0.35)'; this.style.transform='translateY(-4px)'; this.style.background='rgba(255,255,255,0.02)'" 
       onmouseout="this.style.borderColor='var(--border)'; this.style.transform=''; this.style.background='var(--noir-card)'">
        <img src="https://jobs.lyamorsdj.fr/assets/logo.png" alt="LinkedIn" style="width:32px; height:32px; border-radius:4px;">
        <div style="text-align:left;">
            <div style="font-weight:500; color:var(--blanc); font-size:0.95rem;">Lyamor's Jobs</div>
            <div style="font-size:0.75rem; color:var(--gris);">Créé par l'association et vous permet de trouver des offres de bénévolat</div>
        </div>
    </a>
            </div>
        </div>
    </div>
</section>

<!-- CTA CONTACT -->
<section class="cta-band">
    <div class="container">
        <span class="section-tag" style="display:block; text-align:center; margin-bottom:16px;">Une question ?</span>
        <h2 class="section-title reveal">On vous<br>répond vite.</h2>
        <p class="section-lead reveal">N'hésitez pas à nous écrire ou à appeler directement.</p>
        <div class="cta-actions reveal">
            <a href="contact.php" class="btn btn-primary">Formulaire de contact</a>
            <a href="tel:0564116245" class="btn btn-ghost">05 64 11 62 45</a>
        </div>
    </div>
</section>

<?php include 'load/footer.php'; ?>