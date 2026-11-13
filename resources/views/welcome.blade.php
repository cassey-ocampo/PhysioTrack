
@extends('layouts.app')

@section('title', 'Welcome | PhysioTrack')

@section('content')

<div class="login-page">

    <div class="login-info">

        <div class="brand">
            <div class="brand-icon">
                <i data-lucide="activity"></i>
            </div>
            PhysioTrack
        </div>

        <h1>Understand Your Body. Track Your Progress.</h1>

        <p>
            PhysioTrack is an IoT-based health monitoring platform
            designed to help users monitor body measurements,
            track personal goals, and receive data from connected
            measurement sensors.
        </p>

        <br>

        <p>
            Monitor your progress, understand your measurements,
            and stay informed through one convenient dashboard.
        </p>

    </div>

    <div class="login-form">

        <div class="login-box">

            <h2>Welcome Back!</h2>

            <p>Sign in to access your PhysioTrack account.</p>

            <form action="{{ route('dashboard') }}" method="GET">

                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email"
                           placeholder="Enter your email"
                           required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password"
                           placeholder="Enter your password"
                           required>
                </div>

                <a href="#" class="text-link">Forgot Password?</a>

                <button type="submit">Sign In</button>

            </form>

            <p style="text-align:center;margin-top:25px;">
                PhysioTrack Health Monitoring System
            </p>

        </div>

    </div>

</div>

@endsection
