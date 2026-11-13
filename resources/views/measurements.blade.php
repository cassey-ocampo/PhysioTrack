
@extends('layouts.app')

@section('title', 'Measurements | PhysioTrack')
@section('page-title', 'Measurements')

@section('content')

<h3 class="section-title">Body Measurements</h3>

<div class="grid">

    <div class="card">
        <div class="card-icon"><i data-lucide="weight"></i></div>
        <h3>Current Weight</h3>
        <h2>65.5 kg</h2>
        <p>Latest recorded value</p>
    </div>

    <div class="card">
        <div class="card-icon"><i data-lucide="ruler"></i></div>
        <h3>Height</h3>
        <h2>170 cm</h2>
        <p>Recorded height</p>
    </div>

    <div class="card">
        <div class="card-icon"><i data-lucide="target"></i></div>
        <h3>Target Weight</h3>
        <h2>63 kg</h2>
        <p>Example target</p>
    </div>

    <div class="card">
        <div class="card-icon"><i data-lucide="activity"></i></div>
        <h3>BMI</h3>
        <h2>22.7</h2>
        <p>Based on sample data</p>
    </div>

</div>

<div class="card">

    <h3 class="section-title">Measurement History</h3>

    <div class="table-wrapper">
        <table>

            <thead>
                <tr>
                    <th>Date</th>
                    <th>Weight</th>
                    <th>Height</th>
                    <th>BMI</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Nov 13, 2026</td>
                    <td>65.5 kg</td>
                    <td>170 cm</td>
                    <td>22.7</td>
                </tr>

                <tr>
                    <td>Nov 10, 2026</td>
                    <td>66 kg</td>
                    <td>170 cm</td>
                    <td>22.8</td>
                </tr>

                <tr>
                    <td>Nov 07, 2026</td>
                    <td>66.4 kg</td>
                    <td>170 cm</td>
                    <td>23.0</td>
                </tr>
            </tbody>

        </table>
    </div>

</div>

@endsection
