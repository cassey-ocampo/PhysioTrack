@extends('layouts.app')

@section('title', 'Welcome | PhysioTrack')

@section('content')

<header class="navbar">
    <div class="brand">
        <div class="brand-logo">PT</div>
        <div class="brand-name">
            <h2>PhysioTrack</h2>
            <span>PERSONAL HEALTH</span>
        </div>
    </div>

    <nav class="nav-links">
        <a href="#about">Product</a>
        <a href="#about">Security</a>
        <a href="#footer">Contact Support</a>
    </nav>
</header>

<main class="login-section">
    <div class="login-card">
        <div class="login-heading">
            <h1>Welcome Back!</h1>
            <p>Sign in to access your PhysioTrack account.</p>
        </div>

        <form action="{{ route('dashboard') }}" method="GET">
            <div class="form-group">
                <label for="email">Email Address</label>
                <div class="input-wrapper">
                    <span class="input-icon">
                        <i data-lucide="mail" width="16" height="16"></i>
                    </span>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-wrapper">
                    <span class="input-icon">
                        <i data-lucide="lock" width="16" height="16"></i>
                    </span>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    <button type="button" class="password-toggle" onclick="togglePassword()" aria-label="Toggle password visibility">
                        <i data-lucide="eye" width="16" height="16"></i>
                    </button>
                </div>
            </div>

            <div class="form-options">
                <label class="remember-me">
                    <input type="checkbox" name="remember">
                    <span>Remember me</span>
                </label>
                <a href="#" class="forgot-password">Forgot Password?</a>
            </div>

            <button type="submit" class="signin-button">Sign In</button>
        </form>

        <div class="divider">
            <span></span>
            <p>OR</p>
            <span></span>
        </div>

        <button type="button" class="microsoft-button">
            <span class="microsoft-logo">
                <i></i><i></i><i></i><i></i>
            </span>
            Sign in with Microsoft
        </button>

        <div class="register-link">
            <span>Don't have an account?</span>
            <a href="#">Create an account</a>
        </div>
    </div>
</main>

<section class="about-section" id="about">
    <h2>Understand Your Body. Track Your Progress.</h2>

    <div class="about-cards">
        <div class="about-card">
            <div class="about-icon">
                <i data-lucide="activity" width="20" height="20"></i>
            </div>
            <h3>IoT Health Monitoring</h3>
            <p>
                PhysioTrack is an IoT-based health monitoring platform designed to help users monitor body measurements, track personal goals, and receive data from connected measurement sensors.
            </p>
        </div>

        <div class="about-card">
            <div class="about-icon">
                <i data-lucide="zap" width="20" height="20"></i>
            </div>
            <h3>Track Your Progress</h3>
            <p>
                Monitor your progress, understand your measurements, and stay informed through one convenient dashboard connected directly to your measurement sensors.
            </p>
        </div>

        <div class="about-card">
            <div class="about-icon">
                <i data-lucide="shield-check" width="20" height="20"></i>
            </div>
            <h3>Data Privacy &amp; Reliability</h3>
            <p>
                Calibrated sensor readings ensure accurate body measurements while keeping your personal health data secure and accessible whenever you need it.
            </p>
        </div>
    </div>
</section>

<footer class="footer" id="footer">
    <p>PhysioTrack Health Monitoring System</p>
    <div class="footer-links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
        <a href="#">Trust Center</a>
    </div>
</footer>

<script>
    function togglePassword() {
        const input = document.getElementById('password');
        input.type = input.type === 'password' ? 'text' : 'password';
    }
</script>

@endsection