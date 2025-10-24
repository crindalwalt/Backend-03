<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>About — Calmly</title>
  <meta name="description" content="About Calmly — our mission, team, and why we build meditations that help people sleep, focus, and reduce stress." />
  <style>
    :root{
      --bg: #f3f7fb;
      --card: #ffffff;
      --muted: #6b7280;
      --accent: #6c63ff;
      --accent-2: #00bfa6;
      --radius: 12px;
      --maxw: 1100px;
      --shadow: 0 14px 36px rgba(16,24,40,0.06);
      font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans";
    }
    *{box-sizing:border-box}
    html,body{height:100%}
    body{
      margin:0;
      padding:28px 16px;
      background: linear-gradient(180deg,#eef6ff 0%, var(--bg) 40%);
      color:#0f172a;
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale;
      display:flex;
      justify-content:center;
    }
    .wrap{width:100%;max-width:var(--maxw);}

    header{display:flex;justify-content:space-between;align-items:center;gap:16px;margin-bottom:24px}
    .brand{display:flex;gap:12px;align-items:center;text-decoration:none;color:inherit}
    .logo{width:48px;height:48px;border-radius:10px;background:linear-gradient(135deg,var(--accent),#7b9cff);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:800}
    nav{display:flex;gap:12px;align-items:center}
    .nav-link{color:var(--muted);text-decoration:none;font-weight:700;font-size:14px}
    .btn{padding:8px 12px;border-radius:10px;border:none;font-weight:700;cursor:pointer;text-decoration:none}
    .btn-primary{background:var(--accent);color:#fff}

    main{background:transparent}
    .hero{
      background:linear-gradient(180deg, rgba(255,255,255,0.85), rgba(255,255,255,0.9));
      border-radius:14px;padding:22px;border:1px solid rgba(15,23,42,0.04);box-shadow:var(--shadow);display:flex;gap:20px;align-items:center;margin-bottom:20px;
    }
    .hero h1{margin:0;font-size:26px}
    .hero p{margin:6px 0 0 0;color:var(--muted)}

    .two-col{display:grid;grid-template-columns:1fr 360px;gap:20px;margin-bottom:20px}
    .card{background:var(--card);border-radius:12px;padding:16px;border:1px solid rgba(15,23,42,0.04);box-shadow:0 10px 26px rgba(2,6,23,0.02)}
    .section-title{font-size:18px;margin:0 0 10px 0}

    /* Mission / Values */
    .values{display:flex;gap:12px;flex-wrap:wrap}
    .value{flex:1;min-width:180px;padding:14px;border-radius:10px;background:linear-gradient(180deg,#fff,#fbfdff);border:1px solid rgba(15,23,42,0.03)}

    /* Team */
    .team{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin-top:12px}
    .person{display:flex;gap:12px;align-items:center;padding:12px;border-radius:10px;background:linear-gradient(180deg,#fff,#fbfdff);border:1px solid rgba(15,23,42,0.04)}
    .avatar{width:56px;height:56px;border-radius:10px;background:linear-gradient(135deg,var(--accent-2),#8ae3d0);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:800}

    /* Timeline / How we started */
    .timeline{display:flex;flex-direction:column;gap:12px;padding-left:12px}
    .timeline-item{position:relative;padding-left:12px;border-left:2px solid rgba(15,23,42,0.06)}
    .timeline-item span{display:inline-block;background:var(--accent);color:#fff;width:22px;height:22px;border-radius:50%;text-align:center;margin-left:-34px;margin-top:-2px;font-size:12px;line-height:22px}

    /* FAQ */
    .faq{display:grid;gap:10px}
    .faq-item{padding:12px;border-radius:10px;background:linear-gradient(180deg,#fff,#fbfdff);border:1px solid rgba(15,23,42,0.04)}
    .faq-item summary{cursor:pointer;font-weight:700}
    .faq-item p{margin:8px 0 0 0;color:var(--muted)}

    /* Contact */
    .contact-row{display:flex;gap:12px;align-items:center;flex-wrap:wrap}
    .contact-cta{padding:12px 14px;border-radius:10px;background:linear-gradient(90deg,var(--accent),#4fd1c5);color:#fff;font-weight:800}

    footer{margin-top:20px;padding-top:18px;border-top:1px solid rgba(15,23,42,0.04);display:flex;justify-content:space-between;color:var(--muted);font-size:13px}

    @media (max-width:960px){
      .two-col{grid-template-columns:1fr}
      .team{grid-template-columns:repeat(2,1fr)}
    }
    @media (max-width:680px){
      header{flex-direction:column;align-items:flex-start;gap:12px}
      .team{grid-template-columns:1fr}
    }
  </style>
</head>
<body>
  <div class="wrap">
    <header>
      <a class="brand" href="/" aria-label="Calmly home">
        <div class="logo">C</div>
        <div>
          <div style="font-weight:800">Calmly</div>
          <div style="font-size:12px;color:var(--muted)">Meditation & Mindfulness</div>
        </div>
      </a>

      <nav>
        <a class="nav-link" href="index.html">Home</a>
        <a class="nav-link" href="about.html" style="text-decoration:underline">About</a>
        <a class="nav-link" href="#contact">Contact</a>
        <a class="btn btn-primary" href="#start">Start</a>
      </nav>
    </header>

    <main>
      <div class="hero" role="banner">
        <div>
          <h1>Our mission: help people live calmer, healthier lives</h1>
          <p>We design short, science-backed practices to reduce stress, improve sleep, and boost focus — created for people with busy lives.</p>
        </div>
        <div style="min-width:220px;text-align:right">
          <div style="font-weight:800;font-size:20px">1M+</div>
          <div style="color:var(--muted)">sessions played</div>
        </div>
      </div>

      <div class="two-col">
        <section class="card" aria-labelledby="mission-title">
          <h2 id="mission-title" class="section-title">Why we exist</h2>
          <p class="muted">We saw tools that were either too long, too clinical, or too gamified. Calmly exists to provide short, kind, and practical meditations that fit into daily life. Our programs are curated by teachers and informed by modern psychology and sleep science.</p>

          <h3 style="margin-top:16px">Core values</h3>
          <div class="values" aria-hidden="true" style="margin-top:10px">
            <div class="value"><strong>Compassion</strong><div style="margin-top:6px;color:var(--muted)">Make practices that are gentle and non-judgmental.</div></div>
            <div class="value"><strong>Simplicity</strong><div style="margin-top:6px;color:var(--muted)">Short, clear sessions that are easy to start.</div></div>
            <div class="value"><strong>Science-forward</strong><div style="margin-top:6px;color:var(--muted)">Programs backed by research and user testing.</div></div>
          </div>

          <h3 style="margin-top:16px">Where we focus</h3>
          <ul style="margin-top:8px;color:var(--muted)">
            <li>Quick daily meditations (2–15 minutes)</li>
            <li>Sleep stories & soundscapes</li>
            <li>Guided courses for anxiety & focus</li>
          </ul>
        </section>

        <aside class="card" aria-labelledby="team-title">
          <h2 id="team-title" class="section-title">Team & story</h2>

          <div class="team" role="list">
            <div class="person" role="listitem">
              <div class="avatar">AM</div>
              <div>
                <div style="font-weight:800">Amina Khan</div>
                <div style="font-size:13px;color:var(--muted)">Co-founder · Head of Content</div>
              </div>
            </div>

            <div class="person" role="listitem">
              <div class="avatar" style="background:linear-gradient(135deg,#6c63ff,#9bb0ff)">DS</div>
              <div>
                <div style="font-weight:800">Daniel Smith</div>
                <div style="font-size:13px;color:var(--muted)">Co-founder · Product</div>
              </div>
            </div>

            <div class="person" role="listitem">
              <div class="avatar" style="background:linear-gradient(135deg,#00bfa6,#3bd7c9)">PR</div>
              <div>
                <div style="font-weight:800">Priya Rao</div>
                <div style="font-size:13px;color:var(--muted)">Teacher & Coach</div>
              </div>
            </div>
          </div>

          <h3 style="margin-top:14px">How we started</h3>
          <div class="timeline" aria-hidden="true">
            <div class="timeline-item"><span>19</span><strong style="margin-left:8px"> 2019</strong> — Idea sketched over late night conversations about stress and sleep.</div>
            <div class="timeline-item"><span>20</span><strong style="margin-left:8px"> 2020</strong> — First pilot: 7-day course tested with 500 users.</div>
            <div class="timeline-item"><span>21</span><strong style="margin-left:8px"> 2021</strong> — Launched Calmly publicly with sleep stories and short meditations.</div>
          </div>
        </aside>
      </div>

      <section class="card" aria-labelledby="faq-title" style="margin-bottom:14px">
        <h2 id="faq-title" class="section-title">Frequently asked</h2>

        <div class="faq">
          <details class="faq-item">
            <summary>Is Calmly free?</summary>
            <p>Yes — many sessions are free. We also offer a premium tier with full courses and exclusive sleep stories.</p>
          </details>

          <details class="faq-item">
            <summary>Do I need experience in meditation?</summary>
            <p>No. Our sessions are designed for complete beginners as well as experienced practitioners.</p>
          </details>

          <details class="faq-item">
            <summary>How long are the sessions?</summary>
            <p>Sessions range from 2 minutes to 30+ minutes. We recommend starting with 5 minutes daily.</p>
          </details>
        </div>
      </section>

      <section class="card" aria-labelledby="impact-title">
        <h2 id="impact-title" class="section-title">Impact</h2>
        <p style="color:var(--muted)">Over 1 million sessions completed. Users report reduced stress, easier sleep, and improved daily focus. We continuously iterate using user feedback and sleep/mindfulness research.</p>

        <div style="display:flex;gap:12px;margin-top:12px;flex-wrap:wrap">
          <div class="card" style="padding:12px;min-width:140px;text-align:center">
            <div style="font-weight:800;font-size:20px">4.8</div>
            <div style="color:var(--muted);font-size:13px">Average rating</div>
          </div>

          <div class="card" style="padding:12px;min-width:140px;text-align:center">
            <div style="font-weight:800;font-size:20px">1M+</div>
            <div style="color:var(--muted);font-size:13px">Sessions completed</div>
          </div>

          <div class="card" style="padding:12px;min-width:140px;text-align:center">
            <div style="font-weight:800;font-size:20px">50k</div>
            <div style="color:var(--muted);font-size:13px">Active users</div>
          </div>
        </div>
      </section>

      <section class="card" id="contact" aria-labelledby="contact-title" style="margin-top:14px">
        <h2 id="contact-title" class="section-title">Contact & collaboration</h2>
        <p class="muted">Want to work with us, suggest content, or bring Calmly to your organization?</p>

        <div class="contact-row" style="margin-top:12px">
          <a class="contact-cta" href="mailto:hello@calmly.example">Email our team</a>
          <a class="btn" href="mailto:partnerships@calmly.example">Partnerships</a>
          <div style="color:var(--muted);font-size:13px">Or follow us on social for updates.</div>
        </div>
      </section>

    </main>

    <footer>
      <div>© <span id="year"></span> Calmly</div>
      <div style="display:flex;gap:12px">
        <a href="index.html" style="color:var(--muted);text-decoration:none">Home</a>
        <a href="#" style="color:var(--muted);text-decoration:none">Privacy</a>
      </div>
    </footer>
  </div>

  <script>document.getElementById('year').textContent = new Date().getFullYear();</script>
</body>
</html>
