<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Understanding Anxiety: A Beginner's Guide - MindfulPath</title>
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
            line-height: 1.8;
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

        .mobile-toggle {
            display: none;
            background: none;
            border: none;
            color: var(--white);
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Breadcrumb */
        .breadcrumb {
            max-width: 900px;
            margin: 2rem auto;
            padding: 0 2rem;
            display: flex;
            gap: 0.5rem;
            align-items: center;
            font-size: 0.95rem;
            color: var(--text-light);
        }

        .breadcrumb a {
            color: var(--primary-orange);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .breadcrumb a:hover {
            color: var(--dark-orange);
        }

        /* Article Header */
        .article-header {
            max-width: 900px;
            margin: 0 auto 3rem;
            padding: 0 2rem;
            text-align: center;
        }

        .article-category {
            display: inline-block;
            background: linear-gradient(135deg, var(--primary-orange), var(--light-orange));
            color: var(--white);
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .article-header h1 {
            font-size: 3rem;
            color: var(--text-dark);
            margin-bottom: 1.5rem;
            line-height: 1.3;
            animation: fadeInUp 0.6s ease;
        }

        .article-meta {
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
            color: var(--text-light);
            font-size: 1rem;
            margin-bottom: 2rem;
        }

        .article-meta span {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .author-info {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            margin-top: 2rem;
            padding: 1.5rem;
            background: var(--light-gray);
            border-radius: 15px;
        }

        .author-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-orange), var(--light-orange));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
        }

        .author-details h3 {
            font-size: 1.1rem;
            color: var(--text-dark);
            margin-bottom: 0.3rem;
        }

        .author-details p {
            font-size: 0.9rem;
            color: var(--text-light);
        }

        /* Featured Image */
        .featured-image {
            max-width: 900px;
            margin: 0 auto 4rem;
            padding: 0 2rem;
        }

        .featured-image-container {
            width: 100%;
            height: 500px;
            background: linear-gradient(135deg, var(--light-orange), var(--primary-orange));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 8rem;
            position: relative;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
        }

        .featured-image-container::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 30%, rgba(255, 255, 255, 0.2), transparent);
        }

        /* Article Content */
        .article-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 2rem 4rem;
        }

        .article-content p {
            font-size: 1.15rem;
            line-height: 1.9;
            margin-bottom: 1.8rem;
            color: var(--text-dark);
        }

        .article-content h2 {
            font-size: 2rem;
            color: var(--text-dark);
            margin: 3rem 0 1.5rem;
            position: relative;
            padding-left: 1.5rem;
        }

        .article-content h2::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 5px;
            height: 70%;
            background: linear-gradient(180deg, var(--primary-orange), var(--light-orange));
            border-radius: 3px;
        }

        .article-content h3 {
            font-size: 1.5rem;
            color: var(--text-dark);
            margin: 2.5rem 0 1rem;
        }

        .article-content ul,
        .article-content ol {
            margin: 1.5rem 0 1.5rem 2rem;
            line-height: 2;
        }

        .article-content li {
            margin-bottom: 0.8rem;
            font-size: 1.1rem;
            color: var(--text-dark);
        }

        .article-content blockquote {
            background: var(--light-gray);
            border-left: 5px solid var(--primary-orange);
            padding: 2rem 2.5rem;
            margin: 2.5rem 0;
            border-radius: 10px;
            font-size: 1.2rem;
            font-style: italic;
            color: var(--text-dark);
        }

        .highlight-box {
            background: linear-gradient(135deg, rgba(255, 107, 53, 0.1), rgba(255, 140, 97, 0.1));
            border: 2px solid var(--light-orange);
            padding: 2rem;
            border-radius: 15px;
            margin: 2.5rem 0;
        }

        .highlight-box h4 {
            color: var(--primary-orange);
            font-size: 1.3rem;
            margin-bottom: 1rem;
        }

        /* Share Section */
        .share-section {
            max-width: 800px;
            margin: 4rem auto;
            padding: 2rem;
            background: var(--light-gray);
            border-radius: 15px;
            text-align: center;
        }

        .share-section h3 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: var(--text-dark);
        }

        .share-buttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .share-btn {
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .share-btn:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow);
        }

        .share-btn.facebook {
            background: #1877F2;
            color: white;
        }

        .share-btn.twitter {
            background: #1DA1F2;
            color: white;
        }

        .share-btn.linkedin {
            background: #0A66C2;
            color: white;
        }

        .share-btn.email {
            background: var(--primary-orange);
            color: white;
        }

        /* Related Articles */
        .related-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 5rem 2rem;
            background: var(--light-gray);
        }

        .related-section h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: var(--text-dark);
        }

        .related-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .related-card {
            background: var(--white);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .related-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .related-image {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, var(--light-orange), var(--primary-orange));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
        }

        .related-content {
            padding: 1.5rem;
        }

        .related-content h3 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }

        .related-content p {
            font-size: 0.95rem;
            color: var(--text-light);
            margin-bottom: 1rem;
        }

        .related-content .read-more {
            color: var(--primary-orange);
            font-weight: 600;
            text-decoration: none;
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

            .article-header h1 {
                font-size: 2rem;
            }

            .featured-image-container {
                height: 300px;
                font-size: 5rem;
            }

            .article-content p {
                font-size: 1.05rem;
            }

            .related-grid {
                grid-template-columns: 1fr;
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
                <li><a href="index.blade.php">Home</a></li>
                <li><a href="index.blade.php#blogs">Blogs</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#resources">Resources</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <a href="{{ route('home') }}">Home</a>
        <span>/</span>
        <a href="{{ route('home') }}">Blogs</a>
        <span>/</span>
        <span>{{ $blog->title }}</span>
    </div>

    <!-- Article Header -->
    <article class="article-header">
        <span class="article-category">{{ $blog->category }}</span>
        <h1>{{ $blog->title }}</h1>
        <div class="article-meta">
            <span>📅 {{ $blog->created_at->diffForHumans() }}</span>
            <span>⏱️ {{ $blog->read_time }} min read</span>
            <span>👁️ {{ $blog->views }} views</span>
        </div>
        <div class="author-info">
            <div class="author-avatar">
                <img src="{{ $blog->author_image }}" alt=""
                    style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="author-details">
                <h3>{{ $blog->author_name }}</h3>
                <p>{{ $blog->author_excerpt }}</p>
            </div>
        </div>
    </article>

    <!-- Featured Image -->
    <div class="featured-image">
        <div class="featured-image-container"><img src="{{ $blog->featured_image }}"
                style="width: 100%; height: 100%; object-fit: cover;" alt=""></div>
    </div>

    <!-- Article Content -->
    <section class="article-content">
        <p>
            {{ $blog->description }}
        </p>
        <p>
            {{ $blog->body }}
        </p>
    </section>

    <!-- Share Section -->
    <div class="share-section">
        <h3>Found this helpful? Share it with others!</h3>
        <div class="share-buttons">
            <button class="share-btn facebook">📘 Facebook</button>
            <button class="share-btn twitter">🐦 Twitter</button>
            <button class="share-btn linkedin">💼 LinkedIn</button>
            <button class="share-btn email">📧 Email</button>
        </div>
    </div>

    <!-- Related Articles -->
    <section class="related-section">
        <h2>You Might Also Like</h2>
        <div class="related-grid">

            @if ($similarBlogs->isNotEmpty())
                @foreach ($similarBlogs as $item)
                    <article class="related-card" onclick="window.location.href='show.blade.php'">
                        <div class="related-image">🧘</div>
                        <div class="related-content">
                            <h3>{{  $item->title }}</h3>
                            <p>{{ $item->description }}</p>
                            <a href="{{ route("blog.detail",$item->id) }}" class="read-more">Read More →</a>
                        </div>
                    </article>
                @endforeach


            @endif


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
                    <li><a href="index.blade.php">Home</a></li>
                    <li><a href="index.blade.php#blogs">Blog Articles</a></li>
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
                    document.getElementById('navLinks').classList.remove('active');
                }
            });
        });

        // Share functionality
        document.querySelectorAll('.share-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const platform = this.classList[1];
                const url = window.location.href;
                const title = document.querySelector('h1').textContent;

                let shareUrl;
                switch (platform) {
                    case 'facebook':
                        shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${url}`;
                        break;
                    case 'twitter':
                        shareUrl = `https://twitter.com/intent/tweet?url=${url}&text=${title}`;
                        break;
                    case 'linkedin':
                        shareUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${url}`;
                        break;
                    case 'email':
                        shareUrl = `mailto:?subject=${title}&body=Check out this article: ${url}`;
                        break;
                }

                if (shareUrl) {
                    window.open(shareUrl, '_blank', 'width=600,height=400');
                }
            });
        });

        // Reading progress indicator
        window.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;

            // You can create a progress bar element and update its width here
            // For simplicity, we'll just log it
            console.log(`Reading progress: ${scrolled}%`);
        });
    </script>
</body>

</html>
