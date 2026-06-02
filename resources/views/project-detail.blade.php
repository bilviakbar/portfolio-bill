<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project['title'] }} — Akbar.dev</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/project-detail.css') }}">
</head>

<body>

<!-- NAVBAR  -->
<nav id="navbar" class="scrolled">
    

    <ul class="nav-links">
        <li><a href="{{ url('/') }}#home">Home</a></li>
        <li><a href="{{ url('/') }}#about">About</a></li>
        <li><a href="{{ url('/') }}#skills">Skills</a></li>
        <li><a href="{{ url('/') }}#projects">Projects</a></li>
        <li><a href="{{ url('/') }}#contact">Contact</a></li>
    </ul>

    <a href="{{ url('/') }}#contact" class="nav-cta">Hire Me</a>
</nav>


<!--  HERO PROJECT  -->
<section class="pd-hero">

    <div class="pd-hero-bg">
        <img src="{{ $project['img'] }}" 
             alt="{{ $project['title'] }}" 
             class="pd-hero-image">

        <div class="pd-hero-overlay"></div>
    </div>

    <div class="pd-hero-content" data-aos="fade-up">

        <div class="pd-breadcrumb">
            <a href="{{ url('/') }}#projects">Portfolio</a>
            <span>/</span>
            <span>{{ $project['title'] }}</span>
        </div>

        <div class="pd-tech-badges">
            @foreach($project['tech_list'] as $tech)
                <span class="pd-badge">{{ $tech }}</span>
            @endforeach
        </div>

        <h1 class="pd-title">{{ $project['title'] }}</h1>

        <p class="pd-tagline">
            {{ $project['tagline'] }}
        </p>

    </div>

</section>


<!--  MAIN CONTENT  -->
<div class="pd-body">

    <!--  Overview  -->
    <section class="pd-section" data-aos="fade-up">
        <div class="pd-section-label">
            <span class="rule"></span>
            <span class="label">Overview</span>
        </div>
        <div class="pd-section-content">
            <h2 class="pd-heading">Tentang Project</h2>
            <p class="pd-text">{{ $project['overview'] }}</p>
        </div>
    </section>

    <!-- Stats row  -->
    <div class="pd-stats" data-aos="fade-up">
        <div class="pd-stat">
            <span class="pd-stat-num">{{ $project['duration'] }}</span>
            <span class="pd-stat-label">Durasi</span>
        </div>
        <div class="pd-stat">
            <span class="pd-stat-num">{{ $project['role'] }}</span>
            <span class="pd-stat-label">Role</span>
        </div>
        <div class="pd-stat">
            <span class="pd-stat-num">{{ $project['platform'] }}</span>
            <span class="pd-stat-label">Platform</span>
        </div>
        <div class="pd-stat">
            <span class="pd-stat-num">{{ $project['status'] }}</span>
            <span class="pd-stat-label">Status</span>
        </div>
    </div>

    
    <!--  Mobile Showcase  -->
@if(!empty($project['screenshots']))
<section class="pd-showcase-section" data-aos="fade-up">

    <div class="pd-showcase-header">
        <span class="rule"></span>
        <span class="label">Showcase</span>

        <h2 class="pd-heading">Mobile App Showcase</h2>

        <p class="pd-text">
            Tampilan antarmuka aplikasi mobile mulai dari halaman home,
            autentikasi pengguna, katalog produk, keranjang, hingga checkout.
        </p>
    </div>

    <div class="pd-screenshots {{ ($project['screenshot_type'] ?? 'mobile') === 'web' ? 'pd-screenshots-web' : 'pd-screenshots-mobile' }}">
    
        @foreach($project['screenshots'] as $shot)
            <div class="pd-screenshot-frame">
                <img src="{{ $shot }}" alt="Screenshot {{ $project['title'] }}">
            </div>
        @endforeach

    </div>

</section>
@endif

    <!-- Features  -->
    <section class="pd-section" data-aos="fade-up">
        <div class="pd-section-label">
            <span class="rule"></span>
            <span class="label">Fitur Utama</span>
        </div>
        <div class="pd-section-content">
            <h2 class="pd-heading">Apa yang dibangun</h2>
            <ul class="pd-feature-list">
                @foreach($project['features'] as $feature)
                    <li class="pd-feature-item">
                        <span class="pd-feature-icon">✦</span>
                        <div>
                            <strong>{{ $feature['title'] }}</strong>
                            <p>{{ $feature['desc'] }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <!--  Tech Stack -->
    <section class="pd-section" data-aos="fade-up">
        <div class="pd-section-label">
            <span class="rule"></span>
            <span class="label">Tech Stack</span>
        </div>
        <div class="pd-section-content">
            <h2 class="pd-heading">Teknologi yang digunakan</h2>
            <div class="pd-tech-grid">
                @foreach($project['tech_detail'] as $tech)
                    <div class="pd-tech-item">
                        <span class="pd-tech-name">{{ $tech['name'] }}</span>
                        <span class="pd-tech-purpose">
                            {{ $tech['purpose'] ?? $tech['type'] ?? '-' }}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--  Challenge & Solution  -->
    <section class="pd-section" data-aos="fade-up">
        <div class="pd-section-label">
            <span class="rule"></span>
            <span class="label">Proses</span>
        </div>
        <div class="pd-section-content">
            <h2 class="pd-heading">Tantangan & Solusi</h2>
            <div class="pd-challenge-grid">
                <div class="pd-challenge-card">
                    <span class="pd-challenge-tag">Tantangan</span>
                    <p class="pd-text">{{ $project['challenge'] }}</p>
                </div>
                <div class="pd-solution-card">
                    <span class="pd-challenge-tag pd-solution-tag">Solusi</span>
                    <p class="pd-text">{{ $project['solution'] }}</p>
                </div>
            </div>
        </div>
    </section>

    <!--  Learning  -->
    <section class="pd-section" data-aos="fade-up">
        <div class="pd-section-label">
            <span class="rule"></span>
            <span class="label">Refleksi</span>
        </div>
        <div class="pd-section-content">
            <h2 class="pd-heading">Yang saya pelajari</h2>
            <p class="pd-text">{{ $project['learning'] }}</p>
        </div>
    </section>

    <!--  CTA  -->
    <div class="pd-cta" data-aos="fade-up">
        @if(!empty($project['github']))
            <a href="{{ $project['github'] }}" target="_blank" rel="noopener" class="pd-cta-btn pd-cta-ghost">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z"/>
                </svg>
                Lihat di GitHub
            </a>
        @endif

        @if(!empty($project['demo']))
            <a href="{{ $project['demo'] }}" target="_blank" rel="noopener" class="pd-cta-btn pd-cta-primary">
                Live Demo →
            </a>
        @endif

        <a href="{{ url('/') }}#projects" class="pd-cta-btn pd-cta-ghost">
            ← Kembali ke Portfolio
        </a>
    </div>

</div>


<!--  FOOTER  -->
<footer>
    <span class="footer-copy">© 2026 Muhamad Bilfi Akbar</span>
    
</footer>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ duration: 900, once: true, easing: 'ease-out-quart', offset: 60 });

    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 40);
    }, { passive: true });
</script>

</body>
</html>