<?php include 'load/header.php'; ?>

<!-- PAGE HERO -->
<div class="page-hero">
    <div class="container">
        <div class="breadcrumb"><a href="index.php">Accueil</a>Contact</div>
        <span class="section-tag">On est là</span>
        <h1 class="section-title" style="font-size: clamp(3.5rem, 8vw, 7rem); line-height:0.88;">Parlons-<br>nous.</h1>
        <p class="section-lead" style="margin-top:24px;">Une question, un projet d'atelier, envie de devenir bénévole ? Écrivez-nous, on répond vite.</p>
    </div>
</div>

<section>
    <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1.6fr; gap:80px; align-items:start;">

            <!-- COORDONNÉES -->
            <div>
                <span class="section-tag reveal">Coordonnées</span>

                <div style="display:flex; flex-direction:column; gap:28px; margin-top:32px;">
                    <div class="reveal" style="display:flex; gap:20px; align-items:flex-start;">
                        <div style="width:44px; height:44px; border-radius:10px; background:rgba(232,53,58,0.12); border:1px solid rgba(232,53,58,0.2); display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div>
                            <div style="font-size:0.72rem; letter-spacing:0.1em; text-transform:uppercase; color:var(--gris); margin-bottom:6px;">Adresse</div>
                            <div style="color:var(--blanc-soft); line-height:1.6;">58 Résidence Esquirot<br>64210 Bidart, Pays Basque</div>
                        </div>
                    </div>

                    <div class="reveal" style="display:flex; gap:20px; align-items:flex-start;">
                        <div style="width:44px; height:44px; border-radius:10px; background:rgba(232,53,58,0.12); border:1px solid rgba(232,53,58,0.2); display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.81a19.79 19.79 0 01-3.07-8.63A2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
                        </div>
                        <div>
                            <div style="font-size:0.72rem; letter-spacing:0.1em; text-transform:uppercase; color:var(--gris); margin-bottom:6px;">Téléphone</div>
                            <a href="tel:0564116245" style="color:var(--blanc-soft); font-size:1.1rem; transition:color 0.2s;" onmouseover="this.style.color='var(--accent)'" onmouseout="this.style.color='var(--blanc-soft)'">05 64 11 62 45</a>
                        </div>
                    </div>

                    <div class="reveal" style="display:flex; gap:20px; align-items:flex-start;">
                        <div style="width:44px; height:44px; border-radius:10px; background:rgba(232,53,58,0.12); border:1px solid rgba(232,53,58,0.2); display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </div>
                        <div>
                            <div style="font-size:0.72rem; letter-spacing:0.1em; text-transform:uppercase; color:var(--gris); margin-bottom:6px;">Email</div>
                            <a href="mailto:contact@lyamorsdj.fr" style="color:var(--blanc-soft); transition:color 0.2s;" onmouseover="this.style.color='var(--accent)'" onmouseout="this.style.color='var(--blanc-soft)'">contact@lyamorsdj.fr</a>
                        </div>
                    </div>
                </div>

                <div style="margin-top:48px; padding-top:40px; border-top:1px solid var(--border);" class="reveal">
                    <div style="font-size:0.72rem; letter-spacing:0.1em; text-transform:uppercase; color:var(--gris); margin-bottom:20px;">Nous suivre</div>
                    <div style="display:flex; gap:12px;">
                        <a href="https://www.facebook.com/profile.php?id=61576024793522" target="_blank" rel="noopener"
                           style="display:flex; align-items:center; gap:8px; font-size:0.82rem; color:var(--gris-light); border:1px solid var(--border); padding:10px 16px; border-radius:8px; transition:all 0.2s;"
                           onmouseover="this.style.color='var(--blanc)'; this.style.borderColor='rgba(255,255,255,0.2)'"
                           onmouseout="this.style.color='var(--gris-light)'; this.style.borderColor='rgba(255,255,255,0.07)'">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            Facebook
                        </a>
                        <a href="https://www.instagram.com/asso.lyamorsdj/" target="_blank" rel="noopener"
                           style="display:flex; align-items:center; gap:8px; font-size:0.82rem; color:var(--gris-light); border:1px solid var(--border); padding:10px 16px; border-radius:8px; transition:all 0.2s;"
                           onmouseover="this.style.color='var(--blanc)'; this.style.borderColor='rgba(255,255,255,0.2)'"
                           onmouseout="this.style.color='var(--gris-light)'; this.style.borderColor='rgba(255,255,255,0.07)'">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                            Instagram
                        </a>
                    </div>
                </div>
            </div>

            <!-- FORMULAIRE -->
            <div class="reveal">
                <div style="background:var(--noir-card); border:1px solid var(--border); border-radius:20px; padding:48px;">
                    <h2 style="font-family:var(--font-display); font-size:2rem; margin-bottom:8px; letter-spacing:0.5px;">Envoyez-nous<br>un message.</h2>
                    <p style="font-size:0.85rem; color:var(--gris); margin-bottom:36px;">On répond sous 48h en général.</p>

                    <?php if (isset($_GET['success'])): ?>
                    <div style="background:rgba(16,185,129,0.1); border:1px solid rgba(16,185,129,0.3); border-radius:10px; padding:16px 20px; margin-bottom:28px; font-size:0.9rem; color:#6ee7b7;">
                        ✓ Message envoyé ! On vous recontactera rapidement.
                    </div>
                    <?php endif; ?>

                    <?php if (isset($_GET['error'])): ?>
                    <div style="background:rgba(232,53,58,0.1); border:1px solid rgba(232,53,58,0.3); border-radius:10px; padding:16px 20px; margin-bottom:28px; font-size:0.9rem; color:#ff5c60;">
                        ✗ Erreur lors de l'envoi. Veuillez réessayer ou nous appeler directement.
                    </div>
                    <?php endif; ?>

                    <form method="POST" action="process-contact.php" style="display:flex; flex-direction:column; gap:20px;">
                        <div style="display:grid; grid-template-columns:1fr 1fr; gap:20px;">
                            <div class="form-group" style="margin:0;">
                                <label for="prenom">Prénom *</label>
                                <input type="text" id="prenom" name="prenom" required placeholder="Votre prénom">
                            </div>
                            <div class="form-group" style="margin:0;">
                                <label for="nom">Nom *</label>
                                <input type="text" id="nom" name="nom" required placeholder="Votre nom">
                            </div>
                        </div>

                        <div class="form-group" style="margin:0;">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required placeholder="votre@email.fr">
                        </div>

                        <div class="form-group" style="margin:0;">
                            <label for="telephone">Téléphone</label>
                            <input type="tel" id="telephone" name="telephone" placeholder="05 XX XX XX XX">
                        </div>

                        <div class="form-group" style="margin:0;">
                            <label for="sujet">Sujet (en maintenance)</label>
                            <select id="sujet" name="sujet">
                                <option value="">-- Choisir un sujet --</option>
                                <option value="benevole">Devenir bénévole</option>
                                <option value="atelier">Demander un atelier DJ</option>
                                <option value="partenariat">Partenariat / Soutien</option>
                                <option value="evenement">Événement à venir</option>
                                <option value="autre">Autre</option>
                            </select>
                        </div>

                        <div class="form-group" style="margin:0;">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" required placeholder="Dites-nous tout…"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" style="justify-content:center; width:100%; font-size:1rem; padding:16px;">
                            Envoyer le message →
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'load/footer.php'; ?>