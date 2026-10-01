/* ─────────────────────────────────────────────────────────────
   Love — Main JavaScript
   ───────────────────────────────────────────────────────────── */

document.addEventListener('DOMContentLoaded', () => {

    /* ── Stars Background ─────────────────────────────────── */
    const starsContainer = document.querySelector('.stars-bg');
    if (starsContainer) {
        for (let i = 0; i < 120; i++) {
            const star = document.createElement('div');
            star.className = 'star';
            star.style.left   = Math.random() * 100 + '%';
            star.style.top    = Math.random() * 100 + '%';
            star.style.width  = (Math.random() * 2 + 1) + 'px';
            star.style.height = star.style.width;
            star.style.animationDelay    = (Math.random() * 5) + 's';
            star.style.animationDuration = (Math.random() * 4 + 2) + 's';
            starsContainer.appendChild(star);
        }
    }

    /* ── Floating Hearts ──────────────────────────────────── */
    const heartsContainer = document.querySelector('.hearts-container');
    const heartEmojis = ['❤️', '💕', '💖', '💗', '💓', '🌹', '✨', '💫'];

    function spawnHeart() {
        if (!heartsContainer) return;
        const el = document.createElement('div');
        el.className = 'heart-particle';
        el.textContent = heartEmojis[Math.floor(Math.random() * heartEmojis.length)];
        el.style.left            = Math.random() * 100 + '%';
        el.style.fontSize        = (Math.random() * 0.8 + 0.7) + 'rem';
        const duration           = Math.random() * 10 + 10;
        el.style.animationDuration  = duration + 's';
        el.style.animationDelay     = Math.random() * 4 + 's';
        heartsContainer.appendChild(el);
        setTimeout(() => el.remove(), (duration + 4) * 1000);
    }

    // Spawn initial batch, then periodically
    for (let i = 0; i < 12; i++) spawnHeart();
    setInterval(spawnHeart, 2400);

    /* ── Scroll-Reveal (generic .reveal elements) ─────────── */
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

    /* ── Intro Lines Progressive Reveal ──────────────────── */
    const introLines = document.querySelectorAll('.intro-line');
    const introObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                introLines.forEach((line, i) => {
                    setTimeout(() => {
                        line.classList.add('visible');
                        // Reveal signature after last line
                        if (i === introLines.length - 1) {
                            setTimeout(() => {
                                const sig = document.querySelector('.intro-signature');
                                if (sig) sig.classList.add('visible');
                            }, 700);
                        }
                    }, i * 450);
                });
                introObserver.disconnect();
            }
        });
    }, { threshold: 0.3 });

    const introSection = document.getElementById('intro');
    if (introSection) introObserver.observe(introSection);

    /* ── Gallery Photo Cards ──────────────────────────────── */
    const photoCards = document.querySelectorAll('.photo-card');
    const cardObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, idx) => {
            if (entry.isIntersecting) {
                // Stagger each card
                const index = Array.from(photoCards).indexOf(entry.target);
                setTimeout(() => {
                    entry.target.classList.add('visible');
                }, index * 80);
                cardObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    photoCards.forEach(card => cardObserver.observe(card));

    /* ── Lightbox ─────────────────────────────────────────── */
    const lightbox      = document.getElementById('lightbox');
    const lightboxImg   = document.getElementById('lightbox-img');
    const lightboxCap   = document.getElementById('lightbox-caption');
    const lightboxClose = document.getElementById('lightbox-close');

    photoCards.forEach(card => {
        card.addEventListener('click', () => {
            const imgSrc  = card.dataset.img;
            const caption = card.dataset.caption || '';
            if (lightboxImg) {
                if (imgSrc) {
                    lightboxImg.src = imgSrc;
                    lightboxImg.style.display = 'block';
                } else {
                    lightboxImg.style.display = 'none';
                }
            }
            if (lightboxCap) lightboxCap.textContent = caption;
            if (lightbox) lightbox.classList.add('open');
            document.body.style.overflow = 'hidden';
        });
    });

    function closeLightbox() {
        if (lightbox) lightbox.classList.remove('open');
        document.body.style.overflow = '';
    }

    if (lightboxClose) lightboxClose.addEventListener('click', closeLightbox);
    if (lightbox) {
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) closeLightbox();
        });
    }

    /* ── Timeline Items ───────────────────────────────────── */
    const timelineItems = document.querySelectorAll('.timeline-item');
    const timelineObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                timelineObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    timelineItems.forEach(item => timelineObserver.observe(item));

    /* ── Quality Cards ────────────────────────────────────── */
    const qualityCards = document.querySelectorAll('.quality-card');
    const qualityModal = document.getElementById('quality-modal');
    const qualityModalEmoji = document.getElementById('quality-modal-emoji');
    const qualityModalTitle = document.getElementById('quality-modal-title');
    const qualityModalText  = document.getElementById('quality-modal-text');
    const qualityModalClose = document.getElementById('quality-modal-close');

    const qualityCardObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const index = Array.from(qualityCards).indexOf(entry.target);
                setTimeout(() => entry.target.classList.add('visible'), index * 100);
                qualityCardObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    qualityCards.forEach(card => {
        qualityCardObserver.observe(card);
        card.addEventListener('click', () => {
            if (qualityModalEmoji) qualityModalEmoji.textContent = card.dataset.emoji;
            if (qualityModalTitle) qualityModalTitle.textContent = card.dataset.label;
            if (qualityModalText)  qualityModalText.textContent  = card.dataset.message;
            if (qualityModal) qualityModal.classList.add('open');
            document.body.style.overflow = 'hidden';
        });
    });

    function closeQualityModal() {
        if (qualityModal) qualityModal.classList.remove('open');
        document.body.style.overflow = '';
    }

    if (qualityModalClose) qualityModalClose.addEventListener('click', closeQualityModal);
    if (qualityModal) {
        qualityModal.addEventListener('click', (e) => {
            if (e.target === qualityModal) closeQualityModal();
        });
    }

    /* ── Love Letter ──────────────────────────────────────── */
    const envelope   = document.getElementById('envelope');
    const letterBtn  = document.getElementById('letter-open-btn');
    const letterBody = document.getElementById('letter-content');

    function openLetter() {
        if (envelope)   envelope.classList.add('opened');
        if (letterBody) letterBody.classList.add('open');
        if (letterBtn)  letterBtn.style.display = 'none';
    }

    if (envelope)  envelope.addEventListener('click', openLetter);
    if (letterBtn) letterBtn.addEventListener('click', openLetter);

    /* ── Music Player ─────────────────────────────────────── */
    const musicBtn   = document.getElementById('music-btn');
    const musicLabel = document.getElementById('music-label');
    const musicAudio = document.getElementById('music-audio');
    let musicPlaying = false;

    if (musicBtn) {
        musicBtn.addEventListener('click', () => {
            if (!musicAudio) return;
            if (musicPlaying) {
                musicAudio.pause();
                musicBtn.textContent = '🎵';
                if (musicLabel) musicLabel.textContent = 'Notre chanson';
                musicPlaying = false;
            } else {
                musicAudio.play().catch(() => {});
                musicBtn.textContent = '⏸';
                if (musicLabel) musicLabel.textContent = 'En cours...';
                musicPlaying = true;
            }
        });
    }

    /* ── Surprise ─────────────────────────────────────────── */
    const surpriseBtn    = document.getElementById('surprise-btn');
    const surpriseReveal = document.getElementById('surprise-reveal');

    if (surpriseBtn) {
        surpriseBtn.addEventListener('click', () => {
            if (surpriseReveal) surpriseReveal.classList.add('open');
            surpriseBtn.style.display = 'none';
            launchConfetti();
            // Scroll smoothly into the reveal
            setTimeout(() => {
                surpriseReveal?.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }, 200);
        });
    }

    /* ── Confetti ─────────────────────────────────────────── */
    function launchConfetti() {
        const container = document.querySelector('.confetti-container');
        if (!container) return;
        const pieces = ['❤️', '💖', '🌹', '✨', '💕', '🎉', '💫', '🥂'];
        for (let i = 0; i < 60; i++) {
            const el = document.createElement('div');
            el.className = 'confetti-piece';
            el.textContent = pieces[Math.floor(Math.random() * pieces.length)];
            el.style.left     = Math.random() * 100 + 'vw';
            el.style.top      = '-20px';
            const dur         = Math.random() * 2.5 + 2;
            el.style.fontSize = (Math.random() * 1 + 0.8) + 'rem';
            el.style.animationDuration = dur + 's';
            el.style.animationDelay    = (Math.random() * 1.5) + 's';
            container.appendChild(el);
            setTimeout(() => el.remove(), (dur + 1.5) * 1000);
        }
    }

    /* ── Hero CTA smooth scroll ───────────────────────────── */
    const heroCta = document.getElementById('hero-cta');
    if (heroCta) {
        heroCta.addEventListener('click', (e) => {
            e.preventDefault();
            const target = document.getElementById('intro');
            if (target) target.scrollIntoView({ behavior: 'smooth' });
        });
    }

    /* ── Close modals with Escape key ────────────────────── */
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeLightbox();
            closeQualityModal();
        }
    });

});
