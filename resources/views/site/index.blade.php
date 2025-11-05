<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindfulPath - Mental Health & Wellbeing</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-orange: #FF6B35;
            --light-orange: #FF8C61;
            --dark-orange: #E55A2B;
            --white: #FFFFFF;
            --light-gray: #F8F9FA;
            --text-dark: #2C3E50;
            --text-light: #6C757D;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            background-color: var(--white);
        }

        /* Header Styles */
        header {
            background: linear-gradient(135deg, var(--primary-orange) 0%, var(--light-orange) 100%);
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        header.scrolled {
            box-shadow: var(--shadow-lg);
        }

        nav {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1.2rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: var(--white);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logo::before {
            content: "🧠";
            font-size: 2rem;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
            align-items: center;
        }

        .nav-links a {
            color: var(--white);
            text-decoration: none;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .nav-links a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .nav-links a.active {
            background-color: var(--white);
            color: var(--primary-orange);
        }

        .mobile-toggle {
            display: none;
            background: none;
            border: none;
            color: var(--white);
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, rgba(255, 107, 53, 0.95) 0%, rgba(255, 140, 97, 0.95) 100%),
                url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><path d="M0,300 Q300,100 600,300 T1200,300 L1200,600 L0,600 Z" fill="rgba(255,255,255,0.1)"/></svg>');
            background-size: cover;
            background-position: center;
            color: var(--white);
            padding: 8rem 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
            animation: pulse 4s ease-in-out infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 0.5;
            }

            50% {
                opacity: 1;
            }
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
            animation: fadeInUp 0.8s ease;
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 2.5rem;
            opacity: 0.95;
            animation: fadeInUp 0.8s ease 0.2s backwards;
        }

        .cta-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
            animation: fadeInUp 0.8s ease 0.4s backwards;
        }

        .btn {
            padding: 1rem 2.5rem;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background-color: var(--white);
            color: var(--primary-orange);
            box-shadow: var(--shadow);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--white);
            border: 2px solid var(--white);
        }

        .btn-secondary:hover {
            background-color: var(--white);
            color: var(--primary-orange);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Blog Section */
        .blog-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 5rem 2rem;
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-header h2 {
            font-size: 2.5rem;
            color: var(--text-dark);
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }

        .section-header h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-orange), var(--light-orange));
            border-radius: 2px;
        }

        .section-header p {
            font-size: 1.1rem;
            color: var(--text-light);
            max-width: 600px;
            margin: 1.5rem auto 0;
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2.5rem;
            margin-top: 3rem;
        }

        .blog-card {
            background: var(--white);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: all 0.4s ease;
            cursor: pointer;
            display: flex;
            flex-direction: column;
        }

        .blog-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }

        .blog-image {
            width: 100%;
            height: 250px;
            background: linear-gradient(135deg, var(--light-orange), var(--primary-orange));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            position: relative;
            overflow: hidden;
        }


        .blog-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 30%, rgba(255, 255, 255, 0.3), transparent);
        }

        .blog-content {
            padding: 2rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .blog-meta {
            display: flex;
            gap: 1.5rem;
            margin-bottom: 1rem;
            font-size: 0.9rem;
            color: var(--text-light);
        }

        .blog-meta span {
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }

        .blog-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--text-dark);
            line-height: 1.4;
        }

        .blog-card p {
            color: var(--text-light);
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }

        .read-more {
            color: var(--primary-orange);
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: gap 0.3s ease;
        }

        .read-more:hover {
            gap: 1rem;
        }

        .read-more::after {
            content: '→';
            font-size: 1.2rem;
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, var(--text-dark) 0%, #1a252f 100%);
            color: var(--white);
            padding: 4rem 2rem 2rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-section h3 {
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
            color: var(--primary-orange);
        }

        .footer-section p {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.8;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.8rem;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--primary-orange);
            padding-left: 5px;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-links a {
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            text-decoration: none;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--primary-orange);
            transform: translateY(-3px);
        }

        .footer-bottom {
            max-width: 1200px;
            margin: 0 auto;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
            color: rgba(255, 255, 255, 0.6);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                position: fixed;
                top: 70px;
                left: -100%;
                flex-direction: column;
                background: linear-gradient(135deg, var(--primary-orange), var(--light-orange));
                width: 100%;
                padding: 2rem;
                gap: 1rem;
                transition: left 0.3s ease;
                box-shadow: var(--shadow-lg);
            }

            .nav-links.active {
                left: 0;
            }

            .mobile-toggle {
                display: block;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .blog-grid {
                grid-template-columns: 1fr;
            }

            .footer-content {
                grid-template-columns: 1fr;
            }
        }

        /* Loading Animation */
        .loading {
            opacity: 0;
            animation: fadeIn 0.6s ease forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header id="header">
        <nav>
            <a href="index.blade.php" class="logo">MindfulPath</a>
            <button class="mobile-toggle" onclick="toggleMenu()">☰</button>
            <ul class="nav-links" id="navLinks">
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#blogs">Blogs</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#resources">Resources</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Your Journey to Mental Wellness Starts Here</h1>
            <p>Discover evidence-based strategies, compassionate guidance, and a supportive community dedicated to your
                mental health and wellbeing.</p>
            <div class="cta-buttons">
                <a href="#blogs" class="btn btn-primary">Explore Articles</a>
                <a href="#resources" class="btn btn-secondary">Get Support</a>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog-section" id="blogs">
        <div class="section-header">
            <h2>Latest Insights</h2>
            <p>Expert advice and personal stories to support your mental health journey</p>
        </div>

        <div class="blog-grid">


            @if ($blogs->isNotEmpty())
                @foreach ($blogs as $item)
                    <!-- Blog Card 1 -->
                    <article class="blog-card loading" onclick="window.location.href='show.blade.php'">
                        <div class="blog-image">
                            <img src="{{ $item->featured_image }}" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span>📅 {{ $item->created_at->diffForHumans() }}</span>
                                <span>⏱️ {{ $item->read_time }} min read</span>
                            </div>
                            <h3>{{ $item->title }}</h3>
                            <p>
                                {{ $item->description }}
                            </p>
                            <a href="{{ route("blog.detail",$item->slug) }}" class="read-more">Read More</a>
                        </div>
                    </article>
                @endforeach
            @else
                no data to show
            @endif

            {{-- <!-- Blog Card 2 -->
            <article class="blog-card loading" onclick="window.location.href='show.blade.php'">
                <div class="blog-image">🧘</div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span>📅 October 25, 2025</span>
                        <span>⏱️ 7 min read</span>
                    </div>
                    <h3>Mindfulness Meditation for Better Sleep</h3>
                    <p>Struggling with sleep? Explore how mindfulness meditation can transform your nighttime routine and help you achieve deeper, more restorative rest.</p>
                    <a href="show.blade.php" class="read-more">Read More</a>
                </div>
            </article>

            <!-- Blog Card 3 -->
            <article class="blog-card loading" onclick="window.location.href='show.blade.php'">
                <div class="blog-image">💪</div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span>📅 October 22, 2025</span>
                        <span>⏱️ 6 min read</span>
                    </div>
                    <h3>Building Resilience in Challenging Times</h3>
                    <p>Develop the mental strength to bounce back from setbacks. Learn practical strategies to cultivate resilience and maintain your wellbeing during difficult periods.</p>
                    <a href="show.blade.php" class="read-more">Read More</a>
                </div>
            </article>

            <!-- Blog Card 4 -->
            <article class="blog-card loading" onclick="window.location.href='show.blade.php'">
                <div class="blog-image">❤️</div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span>📅 October 19, 2025</span>
                        <span>⏱️ 8 min read</span>
                    </div>
                    <h3>The Power of Self-Compassion</h3>
                    <p>Learn why being kind to yourself is crucial for mental health. Discover how self-compassion can improve your emotional wellbeing and relationships.</p>
                    <a href="show.blade.php" class="read-more">Read More</a>
                </div>
            </article>

            <!-- Blog Card 5 -->
            <article class="blog-card loading" onclick="window.location.href='show.blade.php'">
                <div class="blog-image">🌞</div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span>📅 October 16, 2025</span>
                        <span>⏱️ 5 min read</span>
                    </div>
                    <h3>Creating Healthy Morning Routines</h3>
                    <p>Start your day right with science-backed morning rituals that promote mental clarity, emotional balance, and sustained energy throughout the day.</p>
                    <a href="show.blade.php" class="read-more">Read More</a>
                </div>
            </article>

            <!-- Blog Card 6 -->
            <article class="blog-card loading" onclick="window.location.href='show.blade.php'">
                <div class="blog-image">🤝</div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span>📅 October 13, 2025</span>
                        <span>⏱️ 6 min read</span>
                    </div>
                    <h3>Nurturing Meaningful Connections</h3>
                    <p>Social connections are vital for mental health. Learn how to build and maintain supportive relationships that enhance your emotional wellbeing.</p>
                    <a href="show.blade.php" class="read-more">Read More</a>
                </div>
            </article> --}}
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>About MindfulPath</h3>
                <p>We're dedicated to providing accessible, evidence-based mental health resources to support your
                    journey toward wellbeing and personal growth.</p>
                <div class="social-links">
                    <a href="#" aria-label="Facebook">📘</a>
                    <a href="#" aria-label="Twitter">🐦</a>
                    <a href="#" aria-label="Instagram">📷</a>
                    <a href="#" aria-label="LinkedIn">💼</a>
                </div>
            </div>

            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#blogs">Blog Articles</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#resources">Resources</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Resources</h3>
                <ul class="footer-links">
                    <li><a href="#">Crisis Helpline</a></li>
                    <li><a href="#">Find a Therapist</a></li>
                    <li><a href="#">Self-Care Tools</a></li>
                    <li><a href="#">Support Groups</a></li>
                    <li><a href="#">Mental Health Apps</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Get in Touch</h3>
                <ul class="footer-links">
                    <li>📧 support@mindfulpath.com</li>
                    <li>📞 1-800-MINDFUL</li>
                    <li>📍 Available 24/7</li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 MindfulPath. All rights reserved. | <a href="#"
                    style="color: var(--primary-orange); text-decoration: none;">Privacy Policy</a> | <a href="#"
                    style="color: var(--primary-orange); text-decoration: none;">Terms of Service</a></p>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        function toggleMenu() {
            const navLinks = document.getElementById('navLinks');
            navLinks.classList.toggle('active');
        }

        // Header Scroll Effect
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Smooth Scrolling for Navigation Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Close mobile menu if open
                    document.getElementById('navLinks').classList.remove('active');

                    // Update active nav link
                    document.querySelectorAll('.nav-links a').forEach(link => {
                        link.classList.remove('active');
                    });
                    this.classList.add('active');
                }
            });
        });

        // Intersection Observer for Blog Cards Animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, index * 100);
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.blog-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'all 0.6s ease';
            observer.observe(card);
        });

        // Add active state to current section in navigation
        window.addEventListener('scroll', () => {
            let current = '';
            const sections = document.querySelectorAll('section[id]');

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= sectionTop - 200) {
                    current = section.getAttribute('id');
                }
            });

            document.querySelectorAll('.nav-links a').forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>

</html>
