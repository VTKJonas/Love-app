<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Love ❤️</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    {{-- ── Atmospheric backgrounds ───────────────────────────── --}}
    <div class="stars-bg" aria-hidden="true"></div>
    <div class="hearts-container" aria-hidden="true"></div>
    <div class="confetti-container" aria-hidden="true"></div>

    {{-- ══════════════════════════════════════════════════════════
         §1 — HERO
    ══════════════════════════════════════════════════════════ --}}
    <section id="hero" class="section">
        <p class="hero-eyebrow">Pour toi, rien que pour toi</p>

        <h1 class="hero-title">
            Pour la fille qui fait<br>
            battre mon cœur<span>❤️</span>
        </h1>

        <p class="hero-subtitle">
            J'ai créé cet endroit spécialement pour toi.<br>
            Prends quelques minutes, mets tes écouteurs,<br>
            et laisse-moi te raconter pourquoi tu comptes autant pour moi.
        </p>

        <a href="#intro" id="hero-cta" class="hero-cta">
            Commencer notre histoire ❤️
        </a>

        <div class="hero-scroll-hint" aria-hidden="true">
            <div class="scroll-arrow"></div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════════
         §2 — INTRO
    ══════════════════════════════════════════════════════════ --}}
    <section id="intro" class="section">
        <div class="intro-inner">
            <h2 class="section-title reveal">
                Pourquoi j'ai créé <span class="accent">Love</span>
            </h2>
            <div class="section-divider reveal">❤️</div>

            <p class="intro-line">
                Je pourrais simplement te dire que je t'aime...
            </p>
            <p class="intro-line">
                Mais trois mots ne suffisent pas toujours à expliquer tout ce que tu représentes pour moi.
            </p>
            <p class="intro-line">
                Tu es la première pensée de mes matins et la dernière de mes nuits.
            </p>
            <p class="intro-line">
                Chaque moment passé avec toi est un cadeau que je chéris profondément.
            </p>
            <p class="intro-line">
                Alors j'ai décidé de créer quelque chose de spécial, rien que pour toi.
            </p>
            <p class="intro-line">
                Un endroit où nos souvenirs vivent, où mes sentiments ont une maison.
            </p>

            <p class="intro-signature">
                — Avec tout mon amour ❤️
            </p>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════════
         §3 — GALLERY
         → Remplace les data-img par tes vraies URLs de photos.
           Ex: data-img="{{ asset('images/photo1.jpg') }}"
    ══════════════════════════════════════════════════════════ --}}
    <section id="gallery" class="section">
        <h2 class="section-title reveal">Ma <span class="accent">Princesse</span></h2>
        <div class="section-divider reveal">👑</div>

        <div class="gallery-grid">

            <div class="photo-card"
                 data-img=""
                 data-caption="Mon soleil. Tu illumines chaque journée juste en existant. ☀️">
                <video autoplay muted loop playsinline
                       style="width:100%; aspect-ratio:4/3; object-fit:cover; display:block;">
                    <source src="{{ asset('videos/souvenir1.mp4') }}" type="video/mp4">
                </video>
                <div class="photo-card-body">
                    <p class="photo-card-caption">Celle qui fait sourire mon cœur 🌷</p>
                    <p class="photo-card-date">Sans même essayer</p>
                </div>
            </div>

            <div class="photo-card"
                 data-img=""
                 data-caption="Ma douceur. Tout en toi est délicat, naturel, parfait. Je ne me lasse jamais de te regarder. 🌸">
                <video autoplay muted loop playsinline
                       style="width:100%; aspect-ratio:4/3; object-fit:cover; display:block;">
                    <source src="{{ asset('videos/souvenir2.mp4') }}" type="video/mp4">
                </video>
                <div class="photo-card-body">
                    <p class="photo-card-caption">Celle à qui je pense en premier 🌙</p>
                    <p class="photo-card-date">Dès que j'ouvre les yeux</p>
                </div>
            </div>

            <div class="photo-card"
                 data-img=""
                 data-caption="Ma beauté. Pas juste à l'extérieur — à l'intérieur aussi. Tu es belle de partout. 🌹">
                <video autoplay muted loop playsinline
                       style="width:100%; aspect-ratio:4/3; object-fit:cover; display:block;">
                    <source src="{{ asset('videos/souvenir3.mp4') }}" type="video/mp4">
                </video>
                <div class="photo-card-body">
                    <p class="photo-card-caption">Ma beauté 🌹</p>
                    <p class="photo-card-date">Belle de partout</p>
                </div>
            </div>

            <div class="photo-card"
                 data-img=""
                 data-caption="Mon étoile. Peu importe l'obscurité, tu brilles toujours. Tu es mon repère. ✨">
                <video autoplay muted loop playsinline
                       style="width:100%; aspect-ratio:4/3; object-fit:cover; display:block;">
                    <source src="{{ asset('videos/souvenir4.mp4') }}" type="video/mp4">
                </video>
                <div class="photo-card-body">
                    <p class="photo-card-caption">Mon étoile ✨</p>
                    <p class="photo-card-date">Mon repère dans la nuit</p>
                </div>
            </div>

            <div class="photo-card"
                 data-img=""
                 data-caption="Ma force. Tu es bien plus courageuse que tu ne le penses. Tu m'inspires chaque jour. 💪🏾">
                <video autoplay muted loop playsinline
                       style="width:100%; aspect-ratio:4/3; object-fit:cover; display:block;">
                    <source src="{{ asset('videos/souvenir5.mp4') }}" type="video/mp4">
                </video>
                <div class="photo-card-body">
                    <p class="photo-card-caption">Celle qui m'apaise rien qu'en souriant 🕊️</p>
                    <p class="photo-card-date">Mon calme, mon refuge</p>
                </div>
            </div>

            <div class="photo-card"
                 data-img=""
                 data-caption="Mon tout. Tout simplement. Tu es ce que j'ai de plus précieux. ❤️">
                <video autoplay muted loop playsinline
                       style="width:100%; aspect-ratio:4/3; object-fit:cover; display:block;">
                    <source src="{{ asset('videos/souvenir6.mp4') }}" type="video/mp4">
                </video>
                <div class="photo-card-body">
                    <p class="photo-card-caption">Celle que je veux encore demain 🌹</p>
                    <p class="photo-card-date">Et tous les jours après</p>
                </div>
            </div>

        </div>
    </section>

    {{-- Lightbox --}}
    <div id="lightbox" class="lightbox" role="dialog" aria-modal="true" aria-label="Photo agrandie">
        <div class="lightbox-inner">
            <img id="lightbox-img" class="lightbox-img" src="" alt="Souvenir">
            <p id="lightbox-caption" class="lightbox-caption"></p>
        </div>
        <button id="lightbox-close" class="lightbox-close" aria-label="Fermer">✕</button>
    </div>

    {{-- ══════════════════════════════════════════════════════════
         §4 — VIDEOS
         → Remplace les <source src=""> par tes vraies vidéos.
           Ex: <source src="{{ asset('videos/video1.mp4') }}" type="video/mp4">
    ══════════════════════════════════════════════════════════ --}}
    <section id="videos" class="section">
        <h2 class="section-title reveal">Nos petits <span class="accent">Moments</span></h2>
        <div class="section-divider reveal">🎥</div>

        <div class="video-main reveal">
            <video controls preload="metadata" style="width:100%; height:auto; display:block;">
                <source src="{{ asset('videos/main.mp4') }}" type="video/mp4">
            </video>
        </div>

        <div class="video-thumbnails">

            <div class="video-thumb reveal">
                <div class="video-thumb-preview">▶</div>
                <p class="video-thumb-label">Notre première vidéo</p>
            </div>

            <div class="video-thumb reveal">
                <div class="video-thumb-preview">▶</div>
                <p class="video-thumb-label">Un moment inoubliable</p>
            </div>

            <div class="video-thumb reveal">
                <div class="video-thumb-preview">▶</div>
                <p class="video-thumb-label">Notre fou rire</p>
            </div>

        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════════
         §5 — TIMELINE
    ══════════════════════════════════════════════════════════ --}}
    <section id="timeline" class="section">
        <h2 class="section-title reveal">Notre <span class="accent">Histoire</span></h2>
        <div class="section-divider reveal">💑</div>

        <div class="timeline-container">
            <div class="timeline-line" aria-hidden="true"></div>

            <div class="timeline-item">
                <div class="timeline-dot" aria-hidden="true">🌟</div>
                <div class="timeline-content">
                    <h3 class="timeline-event">Notre rencontre</h3>
                    <p class="timeline-text">
                        Le jour où tout a commencé. Je ne savais pas encore que cette rencontre allait changer ma vie pour toujours.
                    </p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot" aria-hidden="true">❤️</div>
                <div class="timeline-content">
                    <h3 class="timeline-event">Notre premier rendez-vous</h3>
                    <p class="timeline-text">
                        J'étais tellement nerveux, et pourtant, avec toi, tout était naturel. Ce soir-là, j'ai su que tu étais quelqu'un de spécial.
                    </p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot" aria-hidden="true">💕</div>
                <div class="timeline-content">
                    <h3 class="timeline-event">Je t'ai dit « je t'aime »</h3>
                    <p class="timeline-text">
                        Ces trois mots que je n'avais jamais prononcés avec autant de sincérité. Mon cœur battait tellement fort.
                    </p>
                </div>
            </div>



            <div class="timeline-item">
                <div class="timeline-dot" aria-hidden="true">🌹</div>
                <div class="timeline-content">
                    <p class="timeline-date">Aujourd'hui</p>
                    <h3 class="timeline-event">Et aujourd'hui...</h3>
                    <p class="timeline-text">
                        Chaque jour à tes côtés est un cadeau. Je suis impatient de vivre tous les chapitres qui nous attendent encore.
                    </p>
                </div>
            </div>

        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════════
         §6 — QUALITIES
    ══════════════════════════════════════════════════════════ --}}
    <section id="qualities" class="section">
        <h2 class="section-title reveal">Ce que j'<span class="accent">aime</span> chez toi</h2>
        <div class="section-divider reveal">💖</div>

        <div class="qualities-grid">

            <div class="quality-card"
                 data-emoji="😊"
                 data-label="Ton sourire"
                 data-message="Ton sourire est la plus belle chose que je vois chaque jour. Il peut transformer n'importe quelle journée difficile en quelque chose de lumineux. Je pourrais le regarder pendant des heures.">
                <span class="quality-emoji">😊</span>
                <p class="quality-label">Ton sourire</p>
            </div>

            <div class="quality-card"
                 data-emoji="💬"
                 data-label="Ta façon de parler"
                 data-message="La façon dont tu t'exprimes, dont tu racontes les choses, dont tu ris en plein milieu d'une phrase... j'adore t'écouter. Ta voix est ma mélodie préférée.">
                <span class="quality-emoji">💬</span>
                <p class="quality-label">Ta façon de parler</p>
            </div>

            <div class="quality-card"
                 data-emoji="💛"
                 data-label="Ta gentillesse"
                 data-message="Tu as un cœur immense. Ta façon d'être attentionnée, de prendre soin des gens que tu aimes... ça me touche profondément. Tu rends le monde meilleur juste en étant toi.">
                <span class="quality-emoji">💛</span>
                <p class="quality-label">Ta gentillesse</p>
            </div>

            <div class="quality-card"
                 data-emoji="👀"
                 data-label="Ton regard"
                 data-message="Quand tes yeux croisent les miens, le temps s'arrête. Il y a quelque chose dans ton regard qui me fait sentir vu, compris, aimé. Je me perds dedans à chaque fois.">
                <span class="quality-emoji">👀</span>
                <p class="quality-label">Ton regard</p>
            </div>

            <div class="quality-card"
                 data-emoji="🌙"
                 data-label="Tes petites manies"
                 data-message="Ces petites choses que tu fais sans t'en rendre compte — et que j'adore. Ces habitudes qui te rendent unique, qui font que tu es toi, et personne d'autre.">
                <span class="quality-emoji">🌙</span>
                <p class="quality-label">Tes petites manies</p>
            </div>

            <div class="quality-card"
                 data-emoji="💪"
                 data-label="Ta force"
                 data-message="Tu es plus forte que tu ne le crois. La façon dont tu traverses les obstacles, dont tu te relèves, dont tu continues... tu m'inspires chaque jour.">
                <span class="quality-emoji">💪</span>
                <p class="quality-label">Ta force</p>
            </div>

            <div class="quality-card"
                 data-emoji="🎨"
                 data-label="Ta créativité"
                 data-message="Tu vois le monde différemment, et c'est magnifique. Ta façon de penser, de créer, d'imaginer... tu apportes de la couleur dans ma vie.">
                <span class="quality-emoji">🎨</span>
                <p class="quality-label">Ta créativité</p>
            </div>

            <div class="quality-card"
                 data-emoji="🤝"
                 data-label="Ta présence"
                 data-message="Même sans dire un mot, ta présence suffit à me rassurer. Tu es mon ancre. Avec toi, je me sens chez moi, peu importe où l'on est.">
                <span class="quality-emoji">🤝</span>
                <p class="quality-label">Ta présence</p>
            </div>

        </div>
    </section>

    {{-- Quality Modal --}}
    <div id="quality-modal" class="quality-modal" role="dialog" aria-modal="true">
        <div class="quality-modal-inner">
            <span id="quality-modal-emoji" class="quality-modal-emoji"></span>
            <h3 id="quality-modal-title" class="quality-modal-title"></h3>
            <p id="quality-modal-text" class="quality-modal-text"></p>
            <button id="quality-modal-close" class="quality-modal-close">Fermer ❤️</button>
        </div>
    </div>

    {{-- ══════════════════════════════════════════════════════════
         §7 — LOVE LETTER
    ══════════════════════════════════════════════════════════ --}}
    <section id="letter" class="section">
        <h2 class="section-title reveal">Ma <span class="accent">Lettre</span> pour toi</h2>
        <div class="section-divider reveal">💌</div>

        <div class="letter-wrapper">

            <div class="envelope-container">
                <div id="envelope" class="envelope" role="button" aria-label="Ouvrir la lettre" tabindex="0">
                    <div class="envelope-body">
                        <div class="envelope-lines" aria-hidden="true">
                            <div class="envelope-line-bar"></div>
                            <div class="envelope-line-bar"></div>
                            <div class="envelope-line-bar"></div>
                        </div>
                    </div>
                    <div class="envelope-flap" aria-hidden="true"></div>
                    <div class="envelope-seal" aria-hidden="true">❤️</div>
                </div>
            </div>

            <button id="letter-open-btn" class="letter-open-btn">
                Ouvrir la lettre ❤️
            </button>

            <div id="letter-content" class="letter-content">
                <div class="letter-paper">
                    <p class="letter-salutation">Ma chère amour,</p>
                    <div class="letter-body">
                        <p>
                            Si tu es en train de lire ces lignes, c'est parce que je voulais que tu saches, vraiment, ce que tu représentes pour moi.
                        </p>
                        <p>
                            Depuis que tu es entrée dans ma vie, quelque chose a changé. Les couleurs sont plus vives, les journées ont plus de sens, et même les moments ordinaires deviennent extraordinaires quand ils sont partagés avec toi.
                        </p>
                        <p>
                            Tu m'as appris à regarder le monde différemment. À ralentir. À apprécier. À rire de choses qui semblaient anodines. Tu m'as rendu meilleur sans même essayer.
                        </p>
                        <p>
                            Il y a des soirs où je reste silencieux, pas parce que je n'ai rien à dire, mais parce que simplement être à côté de toi me suffit. Tu es mon calme, mon chez-moi.
                        </p>
                        <p>
                            Je ne suis peut-être pas parfait. Mais je sais une chose : mon amour pour toi l'est. Il est sincère, profond, et sans condition.
                        </p>
                        <p>
                            Merci d'être toi. Merci d'être là. Merci de me laisser t'aimer.
                        </p>
                    </div>
                    <p class="letter-closing">
                        Pour toujours et à jamais,<br>
                        Avec tout mon amour ❤️
                    </p>
                </div>
            </div>

        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════════
         §8 — SURPRISE
    ══════════════════════════════════════════════════════════ --}}
    <section id="surprise" class="section">
        <h2 class="section-title reveal">J'ai encore quelque chose <span class="accent">pour toi...</span></h2>

        <p class="surprise-teaser reveal">
            Si tu es arrivée jusqu'ici, c'est que tu viens de parcourir<br>
            une petite partie de tout ce que je ressens pour toi.
        </p>

        <button id="surprise-btn" class="surprise-btn reveal">
            Ouvrir ❤️
        </button>

        <div id="surprise-reveal" class="surprise-reveal">
            <span class="surprise-big-heart">❤️</span>
            <p class="surprise-message">
                Tu es ma plus belle surprise, ma plus belle histoire, ma plus belle aventure.<br><br>
                Chaque matin à tes côtés est un privilège que je ne prends jamais pour acquis.<br><br>
                Et peu importe ce que la vie nous réserve — les hauts, les bas, les doutes et les certitudes — je veux traverser tout ça avec toi, main dans la main.<br><br>
                Parce que avec toi, même les tempêtes ont quelque chose de beau.<br><br>
                Je t'aime. Infiniment. 🌹
            </p>
            <span class="surprise-big-heart" style="animation-delay: 0.3s">💖</span>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════════
         §9 — MUSIC PLAYER (fixed bottom-right)
         → Remplace la source audio par ta vraie chanson.
           Ex: <source src="{{ asset('audio/notre-chanson.mp3') }}" type="audio/mpeg">
    ══════════════════════════════════════════════════════════ --}}
    <div id="music-player" aria-label="Lecteur de musique">
        <span id="music-label" class="music-label">Notre chanson</span>
        <button id="music-btn" class="music-btn" aria-label="Lancer / Mettre en pause la musique">
            🎵
        </button>
        <audio id="music-audio" loop>
            <source src="{{ asset('audio/notre-chanson.mp3') }}" type="audio/mpeg">
        </audio>
    </div>

</body>
</html>
