
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PhysioTrack | Personal Health</title>

    <link rel="stylesheet" href="{{ asset('css/physiotrack.css') }}">
</head>

<body>

    <!-- Navigation Bar -->
    <header class="navbar">

        <div class="brand">
            <div class="brand-logo">
                <span>PT</span>
            </div>

            <div class="brand-name">
                <h2>PhysioTrack</h2>
                <span>PERSONAL HEALTH</span>
            </div>
        </div>

        <nav class="nav-links">
            <a href="#about">Product</a>
            <a href="#privacy">Security</a>
            <a href="#support">Contact Support</a>
        </nav>

    </header>


    <!-- Login Section -->
    <main>

        <section class="login-section">

            <div class="login-card">

                <div class="login-heading">
                    <h1>Welcome back</h1>
                    <p>Enter your credentials to access your workspace.</p>
                </div>

                <form action="#" method="POST">

                    @csrf

                    <!-- Email Address -->
                    <div class="form-group">

                        <label for="email">Email address</label>

                        <div class="input-wrapper">
                            <span class="input-icon">✉</span>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="name@company.com"
                                required
                            >
                        </div>

                    </div>


                    <!-- Password -->
                    <div class="form-group">

                        <label for="password">Password</label>

                        <div class="input-wrapper">
                            <span class="input-icon">♙</span>

                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="••••••••"
                                required
                            >

                            <button
                                type="button"
                                class="password-toggle"
                                aria-label="Show password"
                                onclick="togglePassword()"
                            >
                                ◉
                            </button>
                        </div>

                    </div>


                    <!-- Remember Me and Forgot Password -->
                    <div class="form-options">

                        <label class="remember-me">
                            <input type="checkbox" name="remember">
                            <span>Remember me</span>
                        </label>

                        <a href="#" class="forgot-password">
                            Forgot password?
                        </a>

                    </div>


                    <!-- Sign In Button -->
                    <button type="submit" class="signin-button">
                        Sign In
                    </button>

                </form>


                <!-- Divider -->
                <div class="divider">
                    <span></span>
                    <p>OR</p>
                    <span></span>
                </div>


                <!-- Microsoft Sign In -->
                <button type="button" class="microsoft-button">

                    <span class="microsoft-logo">
                        <i></i>
                        <i></i>
                        <i></i>
                        <i></i>
                    </span>

                    Sign in with Microsoft

                </button>


                <!-- Create Account -->
                <div class="register-link">
                    <span>Don't have an account?</span>

                    <a href="#">
                        Create an account
                    </a>
                </div>

            </div>

        </section>


        <!-- About PhysioTrack Section -->
        <section class="about-section" id="about">

            <h2>About PhysioTrack</h2>

            <div class="about-cards">

                <!-- Objectives Card -->
                <div class="about-card">

                    <div class="about-icon">
                        ♧
                    </div>

                    <h3>Objectives</h3>

                    <p>
                        PhysioTrack streamlines body composition
                        assessment by automatically measuring
                        height and weight via integrated sensors.
                        By instantly calculating BMI and matching
                        results with user goals, the system provides
                        personalized fitness and health
                        recommendations in real time.
                    </p>

                </div>


                <!-- How It Works Card -->
                <div class="about-card">

                    <div class="about-icon">
                        ↯
                    </div>

                    <h3>How it Works</h3>

                    <p>
                        Step onto the measurement platform equipped
                        with ultrasonic and load cell sensors. The
                        microcontroller processes raw sensor inputs,
                        automatically computes your BMI, and displays
                        your data alongside targeted health
                        suggestions on an intuitive digital interface.
                    </p>

                </div>


                <!-- Privacy Card -->
                <div class="about-card" id="privacy">

                    <div class="about-icon">
                        ♧
                    </div>

                    <h3>Data Privacy &amp; Reliability</h3>

                    <p>
                        Data privacy and accuracy are core to
                        PhysioTrack. Calibrated sensor readings ensure
                        precise measurements, while secure local data
                        transmission protects individual biometric
                        logs to keep user health information
                        confidential and safe.
                    </p>

                </div>

            </div>

        </section>

    </main>


    <!-- Footer -->
    <footer class="footer">

        <p>
            © 2026 PhysioTrack Health Systems, Inc.
            All rights reserved.
        </p>

        <div class="footer-links">

            <a href="#">Privacy Policy</a>

            <a href="#">Terms of Service</a>

            <a href="#support">Trust Center</a>

        </div>

    </footer>


    <script>
        function togglePassword() {

            const password = document.getElementById('password');

            if (password.type === 'password') {
                password.type = 'text';
            } else {
                password.type = 'password';
            }

        }
    </script>

</body>
</html>
