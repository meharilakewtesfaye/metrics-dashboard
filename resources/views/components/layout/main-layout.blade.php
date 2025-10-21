<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Revenue Dashboard — Destinoved</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --bg: 230 14% 7%;
            --panel: 230 14% 12%;
            --muted-panel: 230 14% 15%;
            --accent: 246 80% 65%;
            --text: 220 12% 94%;
            --muted: 220 10% 65%;
            --card-radius: 12px;
            --gap: 18px;
            --glass: 230 12% 10%;
            --glass-2: 230 12% 14%;
            --shadow: 0 6px 18px rgba(0,0,0,0.6);
        }

        * { box-sizing: border-box; }
        
        body {
            background: #181921;
            color: hsl(var(--text));
            font-family: "Inter", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
            font-size: 14px;
            line-height: 1.4;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            margin: 0;
            padding: 0;
        }

        .app { 
            display: flex; 
            min-height: 100vh;
        }

        /* Glass card styles */
        .glass-card {
            background: linear-gradient(180deg, hsl(var(--muted-panel)) 0%, rgba(255,255,255,0.02) 100%);
            border-radius: var(--card-radius);
            box-shadow: var(--shadow);
            border: 1px solid rgba(255,255,255,0.03);
        }

        /* Main content responsive styles */
        .main-content {
            flex: 1;
            padding: 20px;
            overflow: auto;
            margin-left: 224px;
            transition: margin-left 0.3s ease;
        }

        /* Mobile menu button */
        .mobile-menu-btn {
            display: none;
            background: transparent;
            border: none;
            color: #9ca3af;
            cursor: pointer;
            padding: 8px;
            border-radius: 8px;
            margin-right: 10px;
            position: fixed;
            top: 15px;
            left: 15px;
            z-index: 1001;
            background: #1D1E2B;
            border: 1px solid #292B41;
        }

        .mobile-menu-btn:hover {
            background: #374151;
        }

        /* Overlay for mobile */
        .sidebar-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 40;
        }

        /* Hide scrollbar for main content */
        .main-content::-webkit-scrollbar {
            display: none;
        }
        
        .main-content {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* Responsive breakpoints */
        @media (max-width: 900px) {
            .main-content {
                margin-left: 0;
                padding: 15px;
                padding-top: 60px; /* Space for mobile menu button */
            }
            
            .mobile-menu-btn {
                display: flex;
                align-items: center;
                gap: 8px;
            }
            
            .sidebar-overlay.mobile-open {
                display: block;
            }
        }

        @media (max-width: 600px) {
            .main-content {
                padding: 10px;
                padding-top: 60px;
            }
        }
    </style>
</head>
<body>
    <!-- Mobile Menu Button -->
    <button class="mobile-menu-btn" id="mobileMenuBtn">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
        <span>Menu</span>
    </button>

    <!-- Sidebar Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <div class="app">
        <!-- Sidebar -->
        <x-layout.sidebar />
        
        <!-- Main Content -->
        <main class="main-content" id="mainContent">
            <x-layout.header />
            
            <!-- Metrics Grid -->
            <x-sections.metrics-grid />
            
            <!-- Chart Section -->
            <x-sections.chart-section />
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const sidebar = document.getElementById('sidebar');
            const sidebarOverlay = document.getElementById('sidebarOverlay');
            const mainContent = document.getElementById('mainContent');

            function toggleMobileMenu() {
                sidebar.classList.toggle('mobile-open');
                sidebarOverlay.classList.toggle('mobile-open');
                document.body.style.overflow = sidebar.classList.contains('mobile-open') ? 'hidden' : '';
            }

            mobileMenuBtn.addEventListener('click', toggleMobileMenu);
            sidebarOverlay.addEventListener('click', toggleMobileMenu);

            // Close sidebar when clicking on a link (for mobile)
            const navLinks = document.querySelectorAll('.nav-button, .submenu-item');
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (window.innerWidth <= 900) {
                        toggleMobileMenu();
                    }
                });
            });

            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth > 900) {
                    sidebar.classList.remove('mobile-open');
                    sidebarOverlay.classList.remove('mobile-open');
                    document.body.style.overflow = '';
                }
            });
        });
    </script>

    @stack('scripts')
</body>
</html>