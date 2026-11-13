
@extends('layouts.app')

@section('title', 'Goal Targets | PhysioTrack')
@section('page-title', 'Goal Targets')

@section('content')

<h3 class="section-title">Your Fitness Goals</h3>

<div class="grid">

    <div class="card">
        <div class="card-icon"><i data-lucide="trending-down"></i></div>
        <h3>Lose Fat</h3>
        <p>Focus on gradual fat reduction and balanced nutrition.</p>
        <br>
        <span class="tag">Goal Option</span>
    </div>

    <div class="card">
        <div class="card-icon"><i data-lucide="scale"></i></div>
        <h3>Maintain</h3>
        <p>Maintain your current weight and healthy habits.</p>
        <br>
        <span class="tag">Goal Option</span>
    </div>

    <div class="card">
        <div class="card-icon"><i data-lucide="trending-up"></i></div>
        <h3>Bulk</h3>
        <p>Support muscle development with appropriate nutrition.</p>
        <br>
        <span class="tag">Goal Option</span>
    </div>

    <div class="card">
        <div class="card-icon"><i data-lucide="target"></i></div>
        <h3>Current Goal</h3>
        <h2>Maintain</h2>
        <p>Example selected goal</p>
    </div>

</div>

<div class="card">

    <h3 class="section-title">Daily Nutrition Targets</h3>

    <div class="grid">

        <div>
            <h3>Calories</h3>
            <h2>2,000 kcal</h2>
        </div>

        <div>
            <h3>Protein</h3>
            <h2>100 g</h2>
        </div>

        <div>
            <h3>Carbohydrates</h3>
            <h2>250 g</h2>
        </div>

        <div>
            <h3>Fat</h3>
            <h2>65 g</h2>
        </div>

    </div>

</div>

@endsection
