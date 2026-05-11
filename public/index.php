<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dev Container - Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="badge">
                <span class="dot"></span>
                System Operational
            </div>

            <div class="icon-wrapper">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
            </div>

            <h1>Welcome to Coder</h1>
            <p class="description">
                Your high-performance PHP development environment is ready. 
                Built with Nginx and Alpine Linux for maximum efficiency.
            </p>

            <div class="stats-grid">
                <div class="stat-item">
                    <span class="stat-label">PHP Version</span>
                    <span class="stat-value"><?php echo PHP_VERSION; ?></span>
                </div>
                <div class="stat-item">
                    <span class="stat-label">Server</span>
                    <span class="stat-value">Nginx/Alpine</span>
                </div>
                <div class="stat-item">
                    <span class="stat-label">Environment</span>
                    <span class="stat-value">Docker</span>
                </div>
            </div>

            <a href="https://github.com/Moozaheed/Coder-Test" target="_blank" class="btn">View Source</a>
        </div>
    </div>
</body>
</html>
