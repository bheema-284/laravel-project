<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Real Beez — Welcome Vinod</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
    :root {
        --orange-50: #5fb816ff;
        --orange-100: rgba(74, 13, 228, 1);
        --orange-300: hsla(112, 72%, 50%, 1.00);
        --orange-500: #ff7a18;
        --orange-600: #f26505;
        --orange-700: #c24b03;
        --bg: linear-gradient(135deg, #fff7f0 0%, #fff4ea 50%, #fff0e6 100%);
        --glass: rgba(255, 255, 255, 0.6);
        --radius: 14px;
        --shadow: 0 10px 30px rgba(12, 12, 12, 0.12);
        --accent-contrast: #ffffff;
        font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;
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
        background: radial-gradient(1200px 600px at 10% 10%, rgba(255, 122, 24, 0.08), transparent),
            radial-gradient(1000px 500px at 90% 90%, rgba(242, 101, 5, 0.04), transparent),
            var(--bg);
        color: rgba(228, 15, 15, 1);
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        padding: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
    }

    .container {
        width: 100%;
        max-width: 1100px;
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.85), rgba(255, 255, 255, 0.72));
        border-radius: 20px;
        padding: 28px;
        box-shadow: var(--shadow);
        backdrop-filter: blur(6px) saturate(120%);
        border: 1px solid rgba(255, 255, 255, 0.6);
    }

    header {
        display: flex;
        align-items: center;
        gap: 18px;
    }

    .logo {
        width: 64px;
        height: 64px;
        border-radius: 12px;
        background: linear-gradient(135deg, var(--orange-500), var(--orange-700));
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--accent-contrast);
        font-weight: 800;
        font-size: 20px;
        box-shadow: 0 6px 18px rgba(242, 101, 5, 0.18);
    }

    h1 {
        margin: 0;
        font-size: 28px;
        line-height: 1.05
    }

    p.lead {
        margin: 6px 0 0;
        color: #5a5a5a
    }

    .hero {
        display: grid;
        grid-template-columns: 1fr 380px;
        gap: 24px;
        margin-top: 20px;
        align-items: center;
    }

    .card {
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.55));
        border-radius: var(--radius);
        padding: 22px;
        border: 1px solid rgba(255, 255, 255, 0.6);
    }

    .big-hero {
        padding: 28px;
        border-radius: 14px;
        background: linear-gradient(135deg, var(--orange-300), var(--orange-500));
        color: var(--accent-contrast);
        box-shadow: 0 18px 50px rgba(255, 122, 24, 0.18);
    }

    .big-hero h2 {
        margin: 0;
        font-size: 30px
    }

    .big-hero p {
        opacity: 0.95
    }

    .cta {
        display: inline-block;
        padding: 12px 18px;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.12);
        color: var(--accent-contrast);
        text-decoration: none;
        font-weight: 700;
        margin-top: 16px;
        border: 1px solid rgba(255, 255, 255, 0.14);
        transition: transform .18s ease, box-shadow .18s ease;
        box-shadow: 0 8px 24px hsla(25, 94%, 45%, 0.12);
    }

    .cta:hover {
        transform: translateY(-4px);
        box-shadow: 0 18px 46px hsla(25, 91%, 46%, 0.22)
    }

    .features {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
        margin-top: 16px
    }

    .feature {
        display: flex;
        gap: 12px;
        align-items: flex-start
    }

    .icon {
        width: 44px;
        height: 44px;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.18);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        box-shadow: inset 0 -6px 18px rgba(0, 0, 0, 0.03);
    }

    .right-column {
        display: flex;
        flex-direction: column;
        gap: 12px
    }

    .profile {
        display: flex;
        align-items: center;
        gap: 12px
    }

    .avatar {
        width: 56px;
        height: 56px;
        border-radius: 12px;
        background: linear-gradient(135deg, #ffd6a8, rgba(108, 210, 5, 1));
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        color: rgba(226, 98, 12, 1)
    }

    .stats {
        display: flex;
        gap: 8px;
        margin-top: 12px
    }

    .stat {
        flex: 1;
        padding: 12px;
        border-radius: 12px;
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.82), rgba(255, 255, 255, 0.7));
        text-align: center
    }

    .stat strong {
        display: block;
        font-size: 18px
    }

    footer {
        margin-top: 18px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #666
    }

    /* responsive */
    @media (max-width:880px) {
        .hero {
            grid-template-columns: 1fr;
        }

        .right-column {
            order: 2
        }
    }

    /* small interactive flourish */
    .pulse {
        animation: pulse 2.6s infinite
    }

    @keyframes pulse {
        0% {
            transform: scale(1)
        }

        50% {
            transform: scale(1.03)
        }

        100% {
            transform: scale(1)
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">RB</div>
            <div>
                <h1>Hello — welcome Vinod to <span style="color:var(--orange-600)">Real Beez</span></h1>
                <p class="lead">A warm orange-first landing you can drop into any project. Clean, responsive &
                    accessible.</p>
            </div>
        </header>

        <section class="hero">
            <div class="card big-hero pulse">
                <h2>Make it bright. Make it warm.</h2>
                <p style="margin-top:10px">This palette and layout focus on an energetic, friendly tone — perfect for
                    promotions, product intros, or personal landing pages.</p>
                <a class="cta" href="#">Get started — it's free</a>

                <div class="features" style="margin-top:18px">
                    <div class="feature">
                        <div class="icon">A</div>
                        <div>
                            <strong>Accessible</strong>
                            <div style="font-size:13px">Good contrast and readable type scale.</div>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="icon">R</div>
                        <div>
                            <strong>Responsive</strong>
                            <div style="font-size:13px">Looks great on phones and desktops.</div>
                        </div>
                    </div>
                </div>
            </div>

            <aside class="right-column">
                <div class="card profile">
                    <div class="avatar">VK</div>
                    <div>
                        <strong>Vinod Kumar</strong>
                        <div style="font-size:13px;color:#666;margin-top:6px">backend developer — Real Beez</div>
                        <div class="stats">
                            <div class="stat"><strong>24</strong><small>Projects</small></div>
                            <div class="stat"><strong>3.2k</strong><small>Users</small></div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <strong style="display:block;margin-bottom:8px">Quick colors</strong>
                    <div style="display:flex;gap:8px;flex-wrap:wrap">
                        <div
                            style="width:42px;height:42px;border-radius:8px;background:var(--orange-300);box-shadow:inset 0 -6px 12px rgba(0,0,0,0.03)">
                        </div>
                        <div style="width:42px;height:42px;border-radius:8px;background:var(--orange-500)"></div>
                        <div style="width:42px;height:42px;border-radius:8px;background:var(--orange-600)"></div>
                        <div style="width:42px;height:42px;border-radius:8px;background:var(--orange-700)"></div>
                    </div>
                </div>

                <div class="card">
                    <strong style="display:block;margin-bottom:8px">Pro tip</strong>
                    <div style="font-size:13px;color:#555">Use the <code>--orange-500</code> for CTAs and
                        <code>--orange-300</code> for backgrounds. Keep large text white for contrast.
                    </div>
                </div>
            </aside>
        </section>

        <footer>
            <div>© <strong>Real Beez</strong> — Crafted for Vinod</div>
            <div style="font-size:13px">Designed with ❤️ using an orange-first system</div>
        </footer>
    </div>
</body>

</html>