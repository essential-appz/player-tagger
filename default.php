<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Tagger - Track Player Events During Live Games</title>
    <meta name="description" content="Mobile-friendly web app for tracking player events during Gaelic Games and Soccer matches. Real-time statistics, analytics, and multi-sport support.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica', 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background: #f8f9fa;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #2196F3 0%, #1976D2 100%);
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .version-badge {
            background: rgba(255,255,255,0.2);
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: normal;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 30px;
            font-weight: 500;
            transition: opacity 0.3s;
        }

        nav a:hover {
            opacity: 0.8;
        }

        .launch-btn {
            background: white;
            color: #2196F3;
            padding: 10px 24px;
            border-radius: 25px;
            font-weight: bold;
            margin-left: 30px;
            transition: transform 0.2s;
        }

        .launch-btn:hover {
            transform: scale(1.05);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #2196F3 0%, #1976D2 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 40px;
            opacity: 0.95;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 15px 35px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
            transition: all 0.3s;
            display: inline-block;
        }

        .btn-primary {
            background: white;
            color: #2196F3;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .btn-secondary {
            background: rgba(255,255,255,0.2);
            color: white;
            border: 2px solid white;
        }

        .btn-secondary:hover {
            background: white;
            color: #2196F3;
        }

        /* Features Section */
        .features {
            padding: 80px 0;
            background: white;
        }

        .section-title {
            text-align: center;
            font-size: 36px;
            margin-bottom: 50px;
            color: #1976D2;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .feature-card {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 12px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .feature-icon {
            font-size: 48px;
            margin-bottom: 15px;
        }

        .feature-card h3 {
            font-size: 22px;
            margin-bottom: 10px;
            color: #2196F3;
        }

        .feature-card p {
            color: #666;
        }

        /* Sports Section */
        .sports {
            padding: 80px 0;
            background: linear-gradient(to bottom, #f8f9fa 0%, white 100%);
        }

        .sports-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
            margin-top: 40px;
        }

        .sport-card {
            background: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            border: 2px solid #e0e0e0;
            transition: border-color 0.3s;
        }

        .sport-card:hover {
            border-color: #2196F3;
        }

        .sport-card h3 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #2196F3;
        }

        .sport-details {
            list-style: none;
            margin-top: 15px;
        }

        .sport-details li {
            padding: 8px 0;
            color: #666;
            padding-left: 25px;
            position: relative;
        }

        .sport-details li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #4CAF50;
            font-weight: bold;
        }

        /* Pricing Section */
        .pricing {
            padding: 80px 0;
            background: white;
        }

        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .pricing-card {
            background: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            border: 2px solid #e0e0e0;
            text-align: center;
        }

        .pricing-card.premium {
            border-color: #2196F3;
            box-shadow: 0 10px 40px rgba(33, 150, 243, 0.2);
            position: relative;
        }

        .popular-badge {
            position: absolute;
            top: -15px;
            right: 20px;
            background: #FF9800;
            color: white;
            padding: 6px 20px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: bold;
        }

        .pricing-card h3 {
            font-size: 28px;
            margin-bottom: 15px;
            color: #333;
        }

        .price {
            font-size: 48px;
            font-weight: bold;
            color: #2196F3;
            margin: 20px 0;
        }

        .price span {
            font-size: 20px;
            color: #999;
        }

        .features-list {
            list-style: none;
            margin: 30px 0;
            text-align: left;
        }

        .features-list li {
            padding: 10px 0;
            color: #666;
            padding-left: 30px;
            position: relative;
        }

        .features-list li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #4CAF50;
            font-weight: bold;
            font-size: 18px;
        }

        /* User Guide Section */
        .guide {
            padding: 80px 0;
            background: linear-gradient(to bottom, white 0%, #f8f9fa 100%);
        }

        .guide-steps {
            margin-top: 40px;
        }

        .step {
            background: white;
            padding: 30px;
            margin-bottom: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            display: flex;
            align-items: flex-start;
            gap: 20px;
        }

        .step-number {
            background: linear-gradient(135deg, #2196F3 0%, #1976D2 100%);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
            flex-shrink: 0;
        }

        .step-content h3 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #2196F3;
        }

        .step-content p {
            color: #666;
        }

        /* Footer */
        footer {
            background: #2c3e50;
            color: white;
            padding: 40px 0;
            text-align: center;
        }

        footer a {
            color: #2196F3;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 36px;
            }

            .hero p {
                font-size: 18px;
            }

            nav {
                display: none;
            }

            .features-grid,
            .sports-grid,
            .pricing-grid {
                grid-template-columns: 1fr;
            }

            .step {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="logo">
                Player Tagger
                <span class="version-badge">v1.0</span>
            </div>
            <nav>
                <a href="#features">Features</a>
                <a href="#sports">Sports</a>
                <a href="#pricing">Pricing</a>
                <a href="#guide">Quick Start</a>
                <a href="index.html" class="launch-btn">Launch App</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Track Every Play, Master Every Game</h1>
            <p>Professional-grade player event tracking for Gaelic Games and Soccer. Real-time statistics, comprehensive analytics, and offline capability — all in one powerful mobile app.</p>
            <div class="cta-buttons">
                <a href="index.html" class="btn btn-primary">Launch App →</a>
                <a href="#guide" class="btn btn-secondary">Quick Start Guide</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <h2 class="section-title">Powerful Features for Game Day</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">⚽</div>
                    <h3>Multi-Sport Support</h3>
                    <p>Track Gaelic Games (GAA) with traditional 15-player formation or Soccer with 4-4-2 formation. Sport-specific layouts and player configurations.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📊</div>
                    <h3>Real-Time Analytics</h3>
                    <p>Live scoreboard, event matrices, and sortable statistics update instantly. Track possessions, shot conversion, and kickout success rates.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">⏱️</div>
                    <h3>Game Clock & Periods</h3>
                    <p>Automatic timer tracking with period management. Half-time scores captured automatically for post-game analysis.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📱</div>
                    <h3>Mobile-First Design</h3>
                    <p>Optimized for tablets and phones. Use during live games with quick touch controls and intuitive player selection.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">💾</div>
                    <h3>Save & Export</h3>
                    <p>Multiple checkpoint saves per game. Export to CSV for analysis. Import games from other users or devices.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🔌</div>
                    <h3>Offline Capable</h3>
                    <p>Works completely offline. All data stored locally in your browser. No internet required during games.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sports Section -->
    <section class="sports" id="sports">
        <div class="container">
            <h2 class="section-title">Supports Your Sport</h2>
            <div class="sports-grid">
                <div class="sport-card">
                    <h3>🏐 Gaelic Games (GAA)</h3>
                    <p>Traditional formation with 26 total players</p>
                    <ul class="sport-details">
                        <li>1 Goalkeeper</li>
                        <li>3 Full Backs (positions 2-4)</li>
                        <li>3 Half Backs (positions 5-7)</li>
                        <li>2 Midfield (positions 8-9)</li>
                        <li>3 Half Forwards (positions 10-12)</li>
                        <li>3 Full Forwards (positions 13-15)</li>
                        <li>11 Substitutes (positions 16-26)</li>
                    </ul>
                </div>
                <div class="sport-card">
                    <h3>⚽ Soccer</h3>
                    <p>4-4-2 Formation with 22 total players</p>
                    <ul class="sport-details">
                        <li>1 Goalkeeper (position 1)</li>
                        <li>4 Defenders (positions 2-5)</li>
                        <li>4 Midfielders (positions 6-9)</li>
                        <li>2 Forwards (positions 10-11)</li>
                        <li>11 Substitutes (positions 12-22)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing" id="pricing">
        <div class="container">
            <h2 class="section-title">Choose Your Plan</h2>
            <div class="pricing-grid">
                <div class="pricing-card">
                    <h3>Free</h3>
                    <div class="price">€0<span>/forever</span></div>
                    <ul class="features-list">
                        <li>Full game logging</li>
                        <li>Unlimited players & events</li>
                        <li>Default event descriptors (9 types)</li>
                        <li>Live scoreboard & game clock</li>
                        <li>Event matrices & statistics</li>
                        <li>CSV export for current game</li>
                        <li>Timeline view</li>
                        <li>Offline PWA capability</li>
                    </ul>
                    <a href="index.html" class="btn btn-secondary" style="width: 100%; text-align: center;">Get Started</a>
                </div>
                <div class="pricing-card premium">
                    <div class="popular-badge">Most Popular</div>
                    <h3>Premium</h3>
                    <div class="price">€59.99<span>/year</span></div>
                    <p style="color: #4CAF50; font-weight: bold; margin-bottom: 15px;">14-Day Free Trial</p>
                    <ul class="features-list">
                        <li><strong>All Free features, plus:</strong></li>
                        <li>📊 Detailed Game Reports & Analytics</li>
                        <li>⚙️ Custom Event Descriptors</li>
                        <li>📥 CSV Import from other users</li>
                        <li>💾 Save Game Progress (checkpoints)</li>
                        <li>📂 Load Saved Games</li>
                        <li>⬇️ Download Saved Games as CSV</li>
                        <li>📈 Shot Conversion Statistics</li>
                        <li>🥅 Kickout Win/Loss Analysis</li>
                        <li>🏆 Top Performers Reports</li>
                    </ul>
                    <a href="index.html" class="btn btn-primary" style="width: 100%; text-align: center;">Start Free Trial</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Start Guide -->
    <section class="guide" id="guide">
        <div class="container">
            <h2 class="section-title">Quick Start Guide</h2>
            <div class="guide-steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Start a New Game</h3>
                        <p>Click Settings → Select your sport (Gaelic Games or Soccer) → Enter team names → Click "New Game". Player layout automatically adjusts to match your sport.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Begin Tracking</h3>
                        <p>Click "Start 1st Half" to begin the game timer. Select a player from the formation, add event descriptors (Shot, Goal, Point, etc.), and events are saved automatically.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Monitor Real-Time Stats</h3>
                        <p>View live scoreboard, game clock, and event matrices updating in real-time. Check Recent Events panel to review or delete any mistakes.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>View Analytics</h3>
                        <p>Click "Timeline" for chronological scoring view or "Reports" (Premium) for comprehensive analytics including possession stats, shot conversion, and top performers.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>End & Export</h3>
                        <p>Click "End Game" to save final data. Export to CSV for analysis. Option to start a new game immediately or keep data visible for review.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p><strong>Player Tagger v1.0</strong></p>
            <p style="margin-top: 15px;">Professional player event tracking for Gaelic Games and Soccer</p>
            <p style="margin-top: 15px;">
                <a href="index.html">Launch App</a> |
                <a href="https://github.com/essential-appz/player-tagger" target="_blank">GitHub</a> |
                <a href="README.md" target="_blank">Documentation</a>
            </p>
            <p style="margin-top: 20px; opacity: 0.7; font-size: 14px;">
                &copy; <?php echo date('Y'); ?> Player Tagger. All rights reserved.
            </p>
        </div>
    </footer>
</body>
</html>
