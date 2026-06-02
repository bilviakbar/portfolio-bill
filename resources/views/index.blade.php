<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Bill</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<!-- NAVBAR -->
<nav id="navbar">
    

    <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>

    <a href="#contact" class="nav-cta">Hire Me</a>
</nav>


<!-- HERO -->
<section id="home">
    <div class="hero-text" data-aos="fade-up" data-aos-duration="900">
        
        

        <h1 class="hero-name">
            Muhamad<br>
            <em>Bilfi Akbar</em>
        </h1>

        <p class="hero-subtitle">
            Membangun website dan aplikasi mobile dengan semangat belajar yang tinggi dan perhatian pada detail
        </p>

        <div class="hero-actions">
            <a href="#projects" class="btn-primary">Lihat Portfolio</a>
            <a href="#contact" class="btn-ghost">Contact →</a>
        </div>

        <div class="hero-stats">
            <div>
                <div class="hero-stat-num">2+</div>
                <div class="hero-stat-label">Projects</div>
            </div>
            <div>
                <div class="hero-stat-num">4+</div>
                <div class="hero-stat-label">Tech Stack</div>
            </div>
            <div>
                <div class="hero-stat-num">Open</div>
                <div class="hero-stat-label">To Work</div>
            </div>
        </div>
    </div>

    <div class="hero-visual" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="150">
        <div class="hero-img-wrapper">

            <!-- Floating dot grids -->
            <div class="hero-dots dots-tl">
                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="4"  cy="4"  r="1.5" fill="#C9A84C"/>
                    <circle cx="16" cy="4"  r="1.5" fill="#C9A84C"/>
                    <circle cx="28" cy="4"  r="1.5" fill="#C9A84C"/>
                    <circle cx="4"  cy="16" r="1.5" fill="#C9A84C"/>
                    <circle cx="16" cy="16" r="1.5" fill="#C9A84C"/>
                    <circle cx="28" cy="16" r="1.5" fill="#C9A84C"/>
                    <circle cx="4"  cy="28" r="1.5" fill="#C9A84C"/>
                    <circle cx="16" cy="28" r="1.5" fill="#C9A84C"/>
                    <circle cx="28" cy="28" r="1.5" fill="#C9A84C"/>
                </svg>
            </div>

            <div class="hero-dots dots-br">
                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="36" cy="36" r="1.5" fill="#C9A84C"/>
                    <circle cx="48" cy="36" r="1.5" fill="#C9A84C"/>
                    <circle cx="60" cy="36" r="1.5" fill="#C9A84C"/>
                    <circle cx="36" cy="48" r="1.5" fill="#C9A84C"/>
                    <circle cx="48" cy="48" r="1.5" fill="#C9A84C"/>
                    <circle cx="60" cy="48" r="1.5" fill="#C9A84C"/>
                    <circle cx="36" cy="60" r="1.5" fill="#C9A84C"/>
                    <circle cx="48" cy="60" r="1.5" fill="#C9A84C"/>
                    <circle cx="60" cy="60" r="1.5" fill="#C9A84C"/>
                </svg>
            </div>

            <!-- Gold corner brackets -->
            <div class="corner tl"></div>
            <div class="corner tr"></div>
            <div class="corner bl"></div>
            <div class="corner br"></div>

            <!-- Image frame -->
            <div class="hero-img-frame">
                <img src="{{ asset('images/profil.png') }}" alt="Muhamad Bilfi Akbar">

                <!-- Name badge over image -->
                <div class="hero-img-badge">
                    <span class="hero-img-badge-name">Bilfi Akbar</span>
                    <span class="hero-img-badge-role">Software Engineer</span>
                </div>
            </div>

            <!-- Vertical side tag -->
            <span class="hero-img-sidetag">Software Engineer · 2026</span>

        </div>
    </div>
</section>


<!-- ABOUT -->
<section id="about">
    <div class="section-header" data-aos="fade-right">
        <span class="rule"></span>
        <span class="label">About</span>
        <h2 class="section-title" style="margin-top: 1rem;">
            Mahasiswa yang siap<br><em>belajar dan berkontribusi</em>
        </h2>
    </div>

    <div data-aos="fade-up" data-aos-delay="100">
        <blockquote class="about-quote">
            "Saya tidak datang dengan pengalaman bertahun-tahun tapi saya datang dengan rasa ingin tahu yang tidak pernah berhenti."
        </blockquote>

        <div class="about-body">
            <p>
            Saya Muhamad Bilfi Akbar Mahasiswa S1 Teknik Informatika semester 6 Universitas Sangga Buana dengan fokus pada pengembangan website dan mobile serta pengelolaan database.
            </p>
            <p>
            Terbiasa membangun aplikasi sederhana, mampu bekerja secara kolaboratif dan siap mengembangkan kemampuan di bidang teknologi.
            </p>
        </div>
    </div>
</section>


<!-- SKILLS  -->
<section id="skills">
    <div class="section-header" data-aos="fade-up">
        <span class="rule"></span>
        <span class="label">Technology Stack</span>
        <h2 class="section-title" style="margin-top: 1rem;">
            Keahlian &amp; <em>Tools</em>
        </h2>
    </div>

    @php
        $skills = [
            ['name' => 'Laravel', 'index' => '01'],
            ['name' => 'Flutter', 'index' => '02'],
            ['name' => 'MySQL', 'index' => '03'],
            ['name' => 'Python', 'index' => '04'],
            ['name' => 'Firebase', 'index' => '05'],
            ['name' => 'JavaScript', 'index' => '06'],
            ['name' => 'Tailwind CSS', 'index' => '07'],
            ['name' => 'PySpark', 'index' => '08'],
        ];
    @endphp

    <div class="skills-grid" data-aos="fade-up" data-aos-delay="100">
        @foreach($skills as $skill)
            <div class="skill-item">
                <span class="skill-index">{{ $skill['index'] }}</span>
                <div class="skill-name">{{ $skill['name'] }}</div>
            </div>
        @endforeach
    </div>
</section>


<!-- PROJECTS  -->
<section id="projects">
    <div class="section-header" data-aos="fade-up">
        <span class="rule"></span>
        <span class="label">Portfolio</span>
        <h2 class="section-title" style="margin-top: 1rem;">
            Featured <em>Projects</em>
        </h2>
    </div>

    <div class="projects-grid" data-aos="fade-up" data-aos-delay="100">
        @foreach($projects as $project)
            <div class="project-card">
                <img src="{{ Str::startsWith($project['img'], ['http://', 'https://']) ? $project['img'] : asset($project['img']) }}"
                     alt="{{ $project['title'] }}"
                     class="project-card-img">

                <div class="project-card-overlay">
                    <div class="project-card-tech">{{ $project['tech'] }}</div>
                    <h3 class="project-card-title">{{ $project['title'] }}</h3>
                    <p class="project-card-desc">{{ $project['overview'] }}</p>

                    <a href="{{ route('project.detail', $project['slug']) }}" class="project-card-link">
                        View Detail →
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</section>


<!-- CONTACT  -->
<section id="contact">
    <div class="contact-inner" data-aos="fade-up">
        <span class="rule" style="margin: 0 auto 1.5rem;"></span>
        <span class="label">Contact</span>

        <h2 class="section-title" style="margin-top: 1rem; margin-bottom: 2rem;">
            Mari<br><em>Berdiskusi</em>
        </h2>


        <div class="contact-channels">

            <!-- Email -->
            <a href="mailto:bilfi0009@gmail.com" class="contact-channel">
                <div class="contact-channel-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="4" width="20" height="16" rx="2"/>
                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                    </svg>
                </div>
                <div class="contact-channel-body">
                    <span class="contact-channel-label">Email</span>
                    <span class="contact-channel-value">bilfi0009@gmail.com</span>
                </div>
                <span class="contact-channel-arrow">→</span>
            </a>

            <!-- WhatsApp -->
            @php $wa = '62895327628012'; @endphp
            <a href="https://wa.me/{{ $wa }}?text=Halo%20Akbar."
               target="_blank" rel="noopener" class="contact-channel contact-channel-wa">
                <div class="contact-channel-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/>
                    </svg>
                </div>
                <div class="contact-channel-body">
                    <span class="contact-channel-label">WhatsApp</span>
                    <span class="contact-channel-value">+62895327628012</span>
                </div>
                <span class="contact-channel-arrow">→</span>
            </a>

        </div>

        
    </div>
</section>


<!-- FOOTER  -->
<footer>
    <span class="footer-copy">© 2026 Muhamad Bilfi Akbar</span>
    
</footer>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 900,
        once: true,
        easing: 'ease-out-quart',
        offset: 60,
    });

    // Navbar scroll effect
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 40);
    }, { passive: true });
</script>

</body>
</html>