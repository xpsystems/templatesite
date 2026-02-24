<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($site_config['site_title']) ?></title>
    <meta name="description" content="<?= htmlspecialchars($site_config['site_description']) ?>">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navigation -->
    <nav class="nav-header">
        <div class="nav-inner">
            <a href="/" class="nav-logo"><?= htmlspecialchars($site_config['site_name']) ?></a>
            
            <div class="nav-links">
                <?php foreach ($nav_links as $link): ?>
                    <a href="<?= htmlspecialchars($link['url']) ?>" class="nav-link"><?= htmlspecialchars($link['label']) ?></a>
                <?php endforeach; ?>
            </div>

            <div class="nav-right">
                <?php include 'components/theme-toggle.php'; ?>
                <button class="nav-hamburger" aria-label="Toggle menu">
                    <svg class="icon-hamburger" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                    <svg class="icon-close" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                </button>
            </div>
        </div>
    </nav>
    <div class="nav-overlay"></div>

    <!-- Hero Section -->
    <header class="hero">
        <div class="container">
            <h1 class="hero-title reveal">Welcome to XP-Systems</h1>
            <p class="hero-description reveal" style="--delay: 100ms">
                This is a template page. Replace this content with your actual service information.
            </p>
        </div>
    </header>

    <!-- Divider: Hero -> Content -->
    <div class="section-divider">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0 C300,100 900,0 1200,100 L1200,120 L0,120 Z" class="divider-fill-alt"></path>
        </svg>
    </div>

    <!-- Main Content -->
    <main class="services-section">
        <div class="container">
            <div class="section-header reveal">
                <h2 class="section-title">Our Services</h2>
            </div>
            <!-- Add your content grid/cards here -->
        </div>
    </main>

    <!-- Divider: Content -> Footer -->
    <div class="section-divider">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0 L1200,80 L1200,120 L0,120 Z" class="divider-fill-footer"></path>
        </svg>
    </div>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-inner">
                <div class="footer-brand">
                    <span class="footer-logo"><?= htmlspecialchars($site_config['site_name']) ?></span>
                    <span class="footer-copy">&copy; <?= htmlspecialchars($site_config['current_year']) ?> XP-Systems</span>
                    <span class="footer-version"><?= htmlspecialchars($site_config['version']) ?></span>
                </div>
                <div class="footer-right">
                    <?php include 'components/theme-toggle.php'; ?>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>