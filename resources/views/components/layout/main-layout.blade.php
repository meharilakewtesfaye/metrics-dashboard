<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinoved - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: #fafbfc;
        }

        .sidebar {
            background: white;
            border-right: 1px solid #dfe1e6;
            height: 100vh;
            position: fixed;
            width: 240px;
            left: 0;
            top: 0;
            overflow-y: auto;
        }

        .main-content {
            margin-left: 240px;
            min-height: 100vh;
        }

        .nav-section {
            padding: 8px 12px;
        }

        .nav-title {
            color: #6b778c;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }

        .nav-item {
            display: flex;
            align-items: center;
            padding: 6px 12px;
            color: #42526e;
            text-decoration: none;
            font-size: 14px;
            border-radius: 3px;
            margin-bottom: 2px;
            transition: background-color 0.2s;
        }

        .nav-item:hover {
            background-color: #f4f5f7;
        }

        .nav-item.active {
            background-color: #e4f0f6;
            color: #0052cc;
        }
    </style>
</head>
<body>
    <div class="flex">
        <!-- Left Sidebar -->
        <x-layout.sidebar />
        
        <!-- Main Content -->
        <div class="main-content flex-1">
            <x-layout.header />
            <main class="p-6">
                {{ $slot }}
            </main>
        </div>
    </div>

    @stack('scripts')
</body>
</html>