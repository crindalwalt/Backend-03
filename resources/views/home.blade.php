<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Calmly — Meditation & Mindfulness</title>
    <meta name="description"
        content="Guided meditations, breathing exercises, sleep stories and mindfulness tools to reduce stress and improve focus." />
    <style>
        :root {
            --bg: #f3f7fb;
            --card: #ffffff;
            --muted: #6b7280;
            --accent: #6c63ff;
            --accent-2: #00bfa6;
            --glass: rgba(255, 255, 255, 0.7);
            --radius: 14px;
            --maxw: 1100px;
            --shadow: 0 12px 30px rgba(16, 24, 40, 0.08);
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans";
        }

        * {
            box-sizing: border-box
        }

        html,
        body {
            height: 100%
        }

        body {
            margin: 0;
            background: linear-gradient(180deg, #eef6ff 0%, var(--bg) 40%);
            color: #0f172a;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            line-height: 1.5;
            padding: 28px 16px;
            display: flex;
            justify-content: center;
        }

        .wrap {
            width: 100%;
            max-width: var(--maxw);
        }

        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            margin-bottom: 28px
        }

        .brand {
            display: flex;
            gap: 12px;
            align-items: center;
            text-decoration: none;
            color: inherit
        }

        .logo {
            width: 52px;
            height: 52px;
            border-radius: 12px;
            background: radial-gradient(circle at 30% 20%, rgba(255, 255, 255, 0.35), transparent 20%), linear-gradient(135deg, var(--accent), #7b9cff 60%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 20px;
            box-shadow: var(--shadow);
        }

        nav {
            display: flex;
            gap: 14px;
            align-items: center
        }

        .nav-link {
            color: var(--muted);
            text-decoration: none;
            font-weight: 600;
            font-size: 14px
        }

        .btn {
            padding: 10px 14px;
            border-radius: 12px;
            border: none;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none
        }

        .btn-ghost {
            background: transparent;
            border: 1px solid rgba(15, 23, 42, 0.06);
            color: inherit
        }

        .btn-primary {
            background: var(--accent);
            color: #fff;
            box-shadow: 0 10px 30px rgba(108, 99, 255, 0.18)
        }

        /* Hero */
        .hero {
            display: grid;
            grid-template-columns: 1fr 420px;
            gap: 28px;
            align-items: center;
            margin-bottom: 36px
        }

        .hero h1 {
            font-size: 36px;
            margin: 0;
            line-height: 1.03
        }

        .hero p {
            margin: 14px 0 0;
            color: var(--muted);
            max-width: 55ch
        }

        .hero-actions {
            margin-top: 18px;
            display: flex;
            gap: 12px;
            align-items: center
        }

        .statbar {
            display: flex;
            gap: 12px;
            margin-top: 18px;
            color: var(--muted);
            font-size: 13px
        }

        /* Card / preview */
        .card {
            background: var(--card);
            border-radius: 16px;
            padding: 16px;
            box-shadow: var(--shadow);
            border: 1px solid rgba(15, 23, 42, 0.04)
        }

        .player {
            display: flex;
            align-items: center;
            gap: 14px
        }

        .play {
            width: 56px;
            height: 56px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--accent), #98a7ff);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 20px;
            box-shadow: 0 8px 20px rgba(108, 99, 255, 0.18)
        }

        .track {
            flex: 1
        }

        .track h4 {
            margin: 0;
            font-size: 16px
        }

        .track p {
            margin: 6px 0 0;
            color: var(--muted);
            font-size: 13px
        }

        /* Sections */
        .grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-top: 18px
        }

        .feature {
            padding: 18px;
            border-radius: 12px;
            background: linear-gradient(180deg, #fff, #fbfdff);
            border: 1px solid rgba(15, 23, 42, 0.04)
        }

        .feature h3 {
            margin: 0 0 8px 0
        }

        .feature p {
            margin: 0;
            color: var(--muted);
            font-size: 14px
        }

        /* Sessions list */
        .sessions {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px
        }

        .session {
            display: flex;
            gap: 12px;
            align-items: center;
            padding: 12px;
            border-radius: 12px;
            background: var(--card);
            border: 1px solid rgba(15, 23, 42, 0.04)
        }

        .session .thumb {
            width: 64px;
            height: 64px;
            border-radius: 10px;
            flex-shrink: 0;
            background: linear-gradient(135deg, var(--accent-2), #8ae3d0);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700
        }

        /* Testimonials */
        .testimonials {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-top: 12px
        }

        .testimonial {
            padding: 14px;
            border-radius: 12px;
            background: linear-gradient(180deg, #fff, #f8fbff);
            border: 1px solid rgba(15, 23, 42, 0.04)
        }

        .testimonial p {
            margin: 0;
            color: var(--muted)
        }

        .author {
            margin-top: 12px;
            font-weight: 700;
            font-size: 14px
        }

        /* CTA */
        .cta {
            margin-top: 26px;
            background: linear-gradient(90deg, var(--accent) 0%, #4fd1c5 100%);
            color: white;
            padding: 22px;
            border-radius: 14px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 16px 40px rgba(79, 70, 229, 0.12)
        }

        .cta .left {
            max-width: 70%
        }

        .cta h3 {
            margin: 0;
            font-size: 18px
        }

        .cta p {
            margin: 6px 0 0;
            color: rgba(255, 255, 255, 0.9)
        }

        footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
            color: var(--muted);
            font-size: 13px;
            margin-top: 26px;
            border-top: 1px solid rgba(15, 23, 42, 0.04)
        }

        /* Utilities & responsive */
        .muted {
            color: var(--muted)
        }

        .pill {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 999px;
            background: rgba(108, 99, 255, 0.08);
            color: var(--accent);
            font-weight: 700;
            font-size: 13px
        }

        @media (max-width:980px) {
            .hero {
                grid-template-columns: 1fr 1fr
            }

            .grid-3 {
                grid-template-columns: repeat(2, 1fr)
            }

            .testimonials {
                grid-template-columns: repeat(2, 1fr)
            }

            .sessions {
                grid-template-columns: 1fr
            }
        }

        @media (max-width:720px) {
            body {
                padding: 18px 12px
            }

            header {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px
            }

            nav {
                display: none
            }

            .hero {
                grid-template-columns: 1fr;
                gap: 18px
            }

            .grid-3 {
                grid-template-columns: 1fr
            }

            .testimonials {
                grid-template-columns: 1fr
            }

            .cta {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px
            }
        }

        /* small, calming animation */
        .floating {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-8px);
            }

            100% {
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="wrap" role="document">
        <header>
            <a class="brand" href="/" aria-label="Calmly home">
                <div class="logo floating">C</div>
                <div>
                    <div style="font-weight:800">Calmly</div>
                    <div style="font-size:12px;color:var(--muted)">Meditation & Mindfulness</div>
                </div>
            </a>

            <nav aria-label="Main navigation">
                <a class="nav-link" href="{{ route('about') }}">about</a>
                <a class="nav-link" href="#sleep">Sleep</a>
                <a class="nav-link" href="#courses">Courses</a>
                <a class="btn btn-ghost" href="#login">Sign in</a>
                <a class="btn btn-primary" href="#start">{{ $name }}</a>
            </nav>
        </header>

        <!-- HERO -->
        <section class="hero" aria-labelledby="hero-title">
            <div>
                <div class="pill">New — 7-day calm course</div>
                <h1 id="hero-title">Quiet your mind. Find clarity.</h1>
                <p>Guided meditations, breathing exercises and bedtime stories to help lower stress, sleep better and
                    boost focus — in as little as 5 minutes a day.</p>

                <div class="hero-actions">
                    <a class="btn btn-primary" href="#start">Begin 5-minute practice</a>
                    <a class="btn btn-ghost" href="#explore">Explore sessions</a>
                </div>

                <div class="statbar" aria-hidden="true">
                    <div><strong>1M+</strong> sessions completed</div>
                    <div style="border-left:1px solid rgba(15,23,42,0.06);padding-left:12px"><strong>4.8</strong>
                        average rating</div>
                </div>
            </div>

            <aside class="card" aria-label="Featured session preview">
                <div class="player">
                    <div class="play" aria-hidden="true">▶</div>
                    <div class="track">
                        <h4>5-Minute Grounding</h4>
                        <p class="muted">A quick guided practice to settle into the present.</p>
                    </div>
                    <div style="font-size:13px;color:var(--muted)">5:00</div>
                </div>

                <div style="margin-top:14px" class="muted">Recommended for: Stress · Morning routine</div>

                <div style="margin-top:14px;display:flex;gap:8px;">
                    <button class="btn btn-ghost" onclick="alert('Play sample — replace with audio player')">Play
                        sample</button>
                    <button class="btn" style="background:#eefbf6;color:var(--accent-2);border-radius:10px"
                        onclick="location.href='#start'">Start session</button>
                </div>
            </aside>
        </section>

        <!-- FEATURES / BENEFITS -->
        <section aria-labelledby="benefits">
            <h2 id="benefits" style="margin:0 0 8px 0;font-size:20px">How Calmly helps</h2>
            <p style="margin:0;color:var(--muted)">Short practices, expert teachers, and science-backed programs.</p>

            <div class="grid-3" style="margin-top:14px">
                <div class="feature">
                    <h3>Short & focused</h3>
                    <p>Daily meditations you can complete in 5–15 minutes to build a consistent habit.</p>
                </div>
                <div class="feature">
                    <h3>Sleep & relaxation</h3>
                    <p>Bedtime stories, soundscapes and breathing tools to help you drift off easier.</p>
                </div>
                <div class="feature">
                    <h3>Courses & programs</h3>
                    <p>Structured multi-day programs for anxiety, focus, and building resilience.</p>
                </div>
            </div>
        </section>

        <!-- SESSIONS -->
        <section id="sessions" style="margin-top:22px" aria-labelledby="sessions-title">
            <h2 id="sessions-title" style="margin:0 0 10px 0;font-size:20px">Popular sessions</h2>

            <div class="sessions">

                @if ($friends != null)
                    @foreach ($friends as $item)
                        <div class="session card" role="article" aria-label="Morning breathing">
                            <div class="thumb">MB</div>
                            <div>
                                <div style="font-weight:800">{{ $item }}</div>
                                <div class="muted" style="margin-top:6px;font-size:13px">2–6 minutes · Energy & focus
                                </div>
                            </div>
                            <div style="margin-left:auto;color:var(--muted)">4:00</div>
                        </div>


                    @endforeach
                        @else
                        <h1>no data found</h1>
                @endif



            </div>
        </section>

        <!-- TESTIMONIALS -->
        <section aria-labelledby="testimonials-title" style="margin-top:22px">
            <h2 id="testimonials-title" style="margin:0 0 10px 0;font-size:20px">What people say</h2>

            <div class="testimonials">
                <div class="testimonial">
                    <p>"I sleep more deeply now. The sleep stories are gentle and soothing."</p>
                    <div class="author">— Aisha</div>
                </div>

                <div class="testimonial">
                    <p>"Two minutes in the morning sets my day on a calm path. Simple and effective."</p>
                    <div class="author">— Daniel</div>
                </div>

                <div class="testimonial">
                    <p>"Great for beginners. The 7-day course made meditation approachable."</p>
                    <div class="author">— Priya</div>
                </div>
            </div>
        </section>

        <!-- BIG CTA -->
        <section style="margin-top:22px">
            <div class="cta" role="region" aria-label="Start meditating">
                <div class="left">
                    <h3 style="margin:0">Start your first session — 5 minutes</h3>
                    <p style="margin:6px 0 0">A quick breathing practice to calm your mind. No experience required.</p>
                </div>
                <div style="text-align:right">
                    <a class="btn btn-primary" href="#start">Start now</a>
                    <div style="margin-top:8px;color:rgba(255,255,255,0.95);font-size:13px">Free • No signup</div>
                </div>
            </div>
        </section>

        <footer>
            <div>© <span id="year"></span> Calmly</div>
            <div style="display:flex;gap:14px;align-items:center">
                <a href="#" style="color:var(--muted);text-decoration:none;font-weight:600">Privacy</a>
                <a href="#" style="color:var(--muted);text-decoration:none;font-weight:600">Terms</a>
            </div>
        </footer>
    </div>

    <script>
        // small helpers
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</body>

</html>
