@extends('layouts.app')

@section('content')
<style>
    .page-header {
        background: var(--secondary-color);
        padding: 2rem;
        text-align: center;
        border-radius: var(--border-radius);
        margin-bottom: 2rem;
    }
    .page-header h1 {
        color: var(--accent-color);
        font-size: 2.8rem;
    }
    .trends-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
    }
    .trend-card {
        background: #fff;
        border-radius: var(--border-radius);
        box-shadow: var(--box-shadow);
        overflow: hidden;
    }
    .trend-card img {
        width: 100%;
        height: 250px;
        object-fit: cover;
    }
    .trend-info {
        padding: 1.5rem;
    }
    .trend-info h3 {
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
    }
    .trend-info p {
        color: #666;
    }
</style>

<div class="page-header">
    <h1>Fashion Trends 2025</h1>
</div>

<section class="trends-grid">
    <div class="trend-card">
        <img src="https://via.placeholder.com/300x250.png/f8b4c4/ffffff?text=Trend+1" alt="Trend 1">
        <div class="trend-info">
            <h3>Sustainable Fashion</h3>
            <p>Eco-friendly and stylish. Discover brands that are making a difference.</p>
        </div>
    </div>
    <div class="trend-card">
        <img src="https://via.placeholder.com/300x250.png/f8b4c4/ffffff?text=Trend+2" alt="Trend 2">
        <div class="trend-info">
            <h3>Bold Pastels</h3>
            <p>From soft lavenders to minty greens, pastels are back in a big way.</p>
        </div>
    </div>
    <div class="trend-card">
        <img src="https://via.placeholder.com/300x250.png/f8b4c4/ffffff?text=Trend+3" alt="Trend 3">
        <div class="trend-info">
            <h3>Utility Wear</h3>
            <p>Function meets fashion with stylish cargo pants, vests, and jackets.</p>
        </div>
    </div>
</section>
@endsection
