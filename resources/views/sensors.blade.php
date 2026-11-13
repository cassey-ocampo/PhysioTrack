
@extends('layouts.app')

@section('title', 'Sensor Settings | PhysioTrack')
@section('page-title', 'Sensor Settings')

@section('content')

<h3 class="section-title">Connected IoT Devices</h3>

<div class="grid">

    <div class="card">

        <div class="card-icon">
            <i data-lucide="radio"></i>
        </div>

        <h3>PT Sensor One</h3>

        <h2>Online</h2>

        <span class="tag">Connected</span>

        <br><br>

        <p>Device ID: PT-001</p>
        <p>Battery: 95%</p>
        <p>Connection: Bluetooth</p>

    </div>

    <div class="card">

        <div class="card-icon">
            <i data-lucide="radio"></i>
        </div>

        <h3>PT Sensor Two</h3>

        <h2>Online</h2>

        <span class="tag">Connected</span>

        <br><br>

        <p>Device ID: PT-002</p>
        <p>Battery: 87%</p>
        <p>Connection: Bluetooth</p>

    </div>

</div>

<div class="card">

    <h3 class="section-title">Sensor Information</h3>

    <p>
        PhysioTrack uses connected measurement sensors to
        collect body measurement information.
    </p>

    <br>

    <p>
        Sensor readings will eventually be transmitted
        through an Arduino or ESP32 microcontroller
        to the PhysioTrack backend.
    </p>

    <br>

    <span class="tag">IoT Monitoring System</span>

</div>

@endsection
