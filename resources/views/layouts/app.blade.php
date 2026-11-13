
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'PhysioTrack')</title>

    @vite(['resources/css/app.css'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>

@if (!request()->routeIs('welcome'))

<div class="app-container">

    <aside class="sidebar">

        <div class="brand">
            <div class="brand-icon">
                <i data-lucide="activity"></i>
            </div>
            <span>PhysioTrack</span>
        </div>

        <p class="nav-label">MAIN MENU</p>

        <nav class="navigation">

            <a href="{{ route('dashboard') }}"
               class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i data-lucide="layout-dashboard"></i>
                Overview
            </a>

            <a href="{{ route('measurements') }}"
               class="{{ request()->routeIs('measurements') ? 'active' : '' }}">
                <i data-lucide="ruler"></i>
                Measurements
            </a>

            <a href="{{ route('goals') }}"
               class="{{ request()->routeIs('goals') ? 'active' : '' }}">
                <i data-lucide="target"></i>
                Goal Targets
            </a>

            <a href="{{ route('sensors') }}"
               class="{{ request()->routeIs('sensors') ? 'active' : '' }}">
                <i data-lucide="radio"></i>
                Sensor Settings
            </a>

        </nav>

        <p class="nav-label">SUPPORT</p>

        <nav class="navigation">
            <a href="{{ route('help') }}"
               class="{{ request()->routeIs('help') ? 'active' : '' }}">
                <i data-lucide="help-circle"></i>
                Help Center
            </a>
        </nav>

        <div class="sidebar-bottom">
            <div class="profile">
                <div class="avatar">PT</div>
                <div>
                    <strong>PhysioTrack User</strong>
                    <small>Personal Account</small>
                </div>
            </div>
        </div>

    </aside>

    <main class="main-content">

        <header class="topbar">
            <div>
                <h2>@yield('page-title', 'Overview')</h2>
                <p>Welcome to your PhysioTrack dashboard.</p>
            </div>

            <div class="topbar-right">
                <span class="status-dot"></span>
                <span>System Online</span>
            </div>
        </header>

        <section class="page-content">
            @yield('content')
        </section>

    </main>

</div>

@else

    @yield('content')

@endif

<script>
    lucide.createIcons();
</script>

</body>
</html>
