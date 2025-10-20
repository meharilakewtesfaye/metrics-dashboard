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
        html, body {  }
        
        body {
            background: #181921;
            color: hsl(var(--text));
            font-family: "Inter", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
            font-size: 14px;
            line-height: 1.4;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .app { 
            display: flex; 
            min-height: 100vh;
        }

        /* Card Styles */
        .glass-card {
            background: linear-gradient(180deg, hsl(var(--muted-panel)) 0%, rgba(255,255,255,0.02) 100%);
            border-radius: var(--card-radius);
            box-shadow: var(--shadow);
            border: 1px solid rgba(255,255,255,0.03);
        }

        /* Chart segment colors */
        .seg-purple { background: #c4b5fd; }
        .seg-blue { background: #60a5fa; }
        .seg-teal { background: #2dd4bf; }
        .seg-green { background: #34d399; }
        .seg-red { background: #fb7185; }
        .seg-pink { background: #f0abfc; }
        .seg-grey { background: #94a3b8; }

        /* Legend dots */
        .dot { 
            display: inline-block; 
            width: 10px; 
            height: 10px; 
            border-radius: 50%; 
            margin-right: 6px; 
            box-shadow: 0 2px 6px rgba(0,0,0,0.6); 
        }
        .dot-red { background: #fb7185; }
        .dot-blue { background: #60a5fa; }
        .dot-green { background: #34d399; }
        .dot-teal { background: #22c1c3; }
        .dot-purple { background: #a78bfa; }
        .dot-pink { background: #f0abfc; }
        .dot-grey { background: #9ca3af; }

        @media (max-width: 900px) {
            .cards-grid { grid-template-columns: repeat(2, 1fr) !important; }
        }

        @media (max-width: 600px) {
            .cards-grid { grid-template-columns: 1fr !important; }
            .y-axis { display: none !important; }
        }

        /* Add these chart-specific styles */
.chart-wrap {
    min-height: 400px;
}

.bars {
    min-height: 300px;
}

.bar {
    min-height: 40px; /* Ensure bars have minimum height */
    transition: all 0.3s ease;
}

.bar:hover {
    transform: scale(1.05);
    z-index: 10;
}

/* Ensure segments are visible */
.seg {
    transition: height 0.3s ease;
    border-bottom: 1px solid rgba(255,255,255,0.1);
}

.seg:last-child {
    border-bottom: none;
}
.sidebar-fixed {
    position: fixed;
    left: 0;
    top: 0;
    height: 100vh;
    width: 191px;
    background: hsl(var(--panel));
    border-right: 1px solid rgba(255,255,255,0.05);
    z-index: 1000;
}

/* Rotate chevron when expanded */
.expandable-menu.active .chevron-icon {
    transform: rotate(180deg);
}

.submenu-container {
    transition: all 0.3s ease;
}

/* Better color definitions for segments */
.seg-purple { background: linear-gradient(to top, #8b5cf6, #a78bfa); }
.seg-blue { background: linear-gradient(to top, #3b82f6, #60a5fa); }
.seg-teal { background: linear-gradient(to top, #14b8a6, #2dd4bf); }
        .seg-green { background: linear-gradient(to top, #10b981, #34d399); }
        .seg-red { background: linear-gradient(to top, #ef4444, #fb7185); }

        /* Hide scrollbar for main content */
        .main-content::-webkit-scrollbar {
            display: none;
        }
        
        .main-content {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body>
    <div class="app">
        <!-- Sidebar -->
        <x-layout.sidebar />
        
        <!-- Main Content -->
        <main class="flex-1 p-7 overflow-auto main-content" style="margin-left: 224px;">
    <x-layout.header />
    
    <!-- Metrics Grid -->
    <x-sections.metrics-grid />
    
    <!-- Chart Section -->
    <x-sections.chart-section />
</main>
    </div>

    @stack('scripts')
</body>
</html>