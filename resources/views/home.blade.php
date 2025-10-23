@extends('layouts.app')

@section('content')
<style>
    .hero {
        background: linear-gradient(135deg, var(--secondary-color), #ffffff);
        padding: 4rem 2rem;
        text-align: center;
        border-radius: var(--border-radius);
        margin-bottom: 2rem;
    }
    .hero h1 {
        font-size: 3.5rem;
        color: var(--accent-color);
        margin-bottom: 1rem;
    }
    .hero p {
        font-size: 1.2rem;
        max-width: 600px;
        margin: 0 auto 2rem;
        color: var(--text-color);
    }
    .hero .cta-button {
        display: inline-block;
        background-color: var(--primary-color);
        color: #fff;
        padding: 0.8rem 2rem;
        text-decoration: none;
        font-weight: 600;
        border-radius: 50px;
        transition: transform 0.3s ease, background-color 0.3s ease;
        box-shadow: 0 4px 10px rgba(255, 128, 171, 0.4);
    }
    .hero .cta-button:hover {
        background-color: var(--accent-color);
        transform: translateY(-3px);
    }
    .featured-products {
        text-align: center;
    }
    .featured-products h2 {
        font-size: 2.5rem;
        margin-bottom: 2rem;
        color: var(--text-color);
    }
    .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
    }
    .product-card {
        background: #fff;
        border-radius: var(--border-radius);
        box-shadow: var(--box-shadow);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    }
    .product-card img {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }
    .product-info {
        padding: 1.5rem;
    }
    .product-info h3 {
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
    }
    .product-info p {
        color: var(--accent-color);
        font-weight: 600;
    }
</style>

<div class="hero">
    <h1>Discover Your Style</h1>
    <p>Explore the latest trends and find the perfect look for every occasion. Your fashion journey starts here.</p>
    <a href="/shop" class="cta-button">Shop Now</a>
</div>

<section class="featured-products">
    <h2>Featured Products</h2>
    <div class="product-grid">
        <div class="product-card">
            <img src="https://via.placeholder.com/300x300.png/f8b4c4/ffffff?text=Fashion" alt="Product 1">
            <div class="product-info">
                <h3>Chic Pink Blouse</h3>
                <p>$49.99</p>
            </div>
        </div>
        <div class="product-card">
            <img src="https://via.placeholder.com/300x300.png/f8b4c4/ffffff?text=Fashion" alt="Product 2">
            <div class="product-info">
                <h3>Elegant Floral Dress</h3>
                <p>$89.99</p>
            </div>
        </div>
        <div class="product-card">
            <img src="https://via.placeholder.com/300x300.png/f8b4c4/ffffff?text=Fashion" alt="Product 3">
            <div class="product-info">
                <h3>Modern Skinny Jeans</h3>
                <p>$79.99</p>
            </div>
        </div>
    </div>
</section>
@endsection
