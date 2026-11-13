
@extends('layouts.app')

@section('title', 'Help Center | PhysioTrack')
@section('page-title', 'Help Center')

@section('content')

<h3 class="section-title">How Can We Help You?</h3>

<div class="grid">

    <div class="card">
        <div class="card-icon">
            <i data-lucide="book-open"></i>
        </div>

        <h3>User Guide</h3>

        <p>
            Learn how to navigate the PhysioTrack
            dashboard and understand its features.
        </p>
    </div>

    <div class="card">
        <div class="card-icon">
            <i data-lucide="radio"></i>
        </div>

        <h3>Sensor Support</h3>

        <p>
            Learn about sensor connections,
            device status, and data monitoring.
        </p>
    </div>

    <div class="card">
        <div class="card-icon">
            <i data-lucide="database"></i>
        </div>

        <h3>Measurements</h3>

        <p>
            Understand your recorded measurements
            and measurement history.
        </p>
    </div>

    <div class="card">
        <div class="card-icon">
            <i data-lucide="message-circle"></i>
        </div>

        <h3>Contact Support</h3>

        <p>
            Contact the PhysioTrack development
            team for assistance.
        </p>
    </div>

</div>

<div class="card">

    <h3 class="section-title">Frequently Asked Questions</h3>

    <h3>1. What is PhysioTrack?</h3>
    <p>
        PhysioTrack is an IoT-based health measurement
        and tracking platform.
    </p>

    <br>

    <h3>2. How do sensors work?</h3>
    <p>
        Connected sensors collect measurement data
        and transmit it to the system.
    </p>

    <br>

    <h3>3. Where can I see my measurements?</h3>
    <p>
        Visit the Measurements page to view
        your measurement records.
    </p>

</div>

@endsection
