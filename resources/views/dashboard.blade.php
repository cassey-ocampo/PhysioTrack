
@extends('layouts.app')

@section('title', 'Overview | PhysioTrack')
@section('page-title', 'Overview')

@section('content')

<h3 class="section-title">Health Overview</h3>

<div class="grid">

    <div class="card">
        <div class="card-icon"><i data-lucide="weight"></i></div>
        <h3>Current Weight</h3>
        <h2>65.5 kg</h2>
        <p>Latest measurement</p>
    </div>

    <div class="card">
        <div class="card-icon"><i data-lucide="ruler"></i></div>
        <h3>Height</h3>
        <h2>170 cm</h2>
        <p>Recorded height</p>
    </div>

    <div class="card">
        <div class="card-icon"><i data-lucide="activity"></i></div>
        <h3>BMI</h3>
        <h2>22.7</h2>
        <p>Based on sample measurements</p>
    </div>

    <div class="card">
        <div class="card-icon"><i data-lucide="radio"></i></div>
        <h3>Connected Sensors</h3>
        <h2>2 / 2</h2>
        <p><span class="tag">Connected</span></p>
    </div>

</div>

<div class="two-column">

    <div class="card">

        <h3 class="section-title">Recent Measurements</h3>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Weight</th>
                        <th>BMI</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Nov 13, 2026</td>
                        <td>65.5 kg</td>
                        <td>22.7</td>
                    </tr>
                    <tr>
                        <td>Nov 10, 2026</td>
                        <td>66 kg</td>
                        <td>22.8</td>
                    </tr>
                    <tr>
                        <td>Nov 07, 2026</td>
                        <td>66.4 kg</td>
                        <td>23.0</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <div class="card">

        <h3 class="section-title">Daily Nutrition Targets</h3>

        <h3>Calories</h3>
        <h2>2,000 kcal</h2>
        <div class="progress">
            <div class="progress-bar" style="width:70%"></div>
        </div>

        <h3>Protein</h3>
        <h2>100 g</h2>
        <div class="progress">
            <div class="progress-bar" style="width:60%"></div>
        </div>

        <h3>Carbohydrates</h3>
        <h2>250 g</h2>
        <div class="progress">
            <div class="progress-bar" style="width:75%"></div>
        </div>

    </div>

</div>

@endsection
