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
    .shop-grid {
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
        text-align: center;
    }
    .product-info h3 {
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
    }
    .product-info p {
        color: var(--accent-color);
        font-weight: 600;
        margin-bottom: 1rem;
    }
    .add-to-cart {
        display: inline-block;
        background-color: var(--primary-color);
        color: #fff;
        padding: 0.6rem 1.5rem;
        text-decoration: none;
        font-weight: 600;
        border-radius: 50px;
        transition: background-color 0.3s ease;
    }
    .add-to-cart:hover {
        background-color: var(--accent-color);
    }
</style>

<div class="page-header">
    <h1>Shop Our Collection</h1>
</div>

<section class="shop-grid">
    <!-- Product 1 -->
    <div class="product-card">
        <img src="https://via.placeholder.com/300x300.png/f8b4c4/ffffff?text=Item" alt="Product">
        <div class="product-info">
            <h3>Chic Pink Blouse</h3>
            <p>$49.99</p>
            <a href="#" class="add-to-cart">Add to Cart</a>
        </div>
    </div>
    <!-- Product 2 -->
    <div class="product-card">
        <img src="https://via.placeholder.com/300x300.png/f8b4c4/ffffff?text=Item" alt="Product">
        <div class="product-info">
            <h3>Elegant Floral Dress</h3>
            <p>$89.99</p>
            <a href="#" class="add-to-cart">Add to Cart</a>
        </div>
    </div>
    <!-- Product 3 -->
    <div class="product-card">
        <img src="https://via.placeholder.com/300x300.png/f8b4c4/ffffff?text=Item" alt="Product">
        <div class="product-info">
            <h3>Modern Skinny Jeans</h3>
            <p>$79.99</p>
            <a href="#" class="add-to-cart">Add to Cart</a>
        </div>
    </div>
    <!-- Product 4 -->
    <div class="product-card">
        <img src="https://via.placeholder.com/300x300.png/f8b4c4/ffffff?text=Item" alt="Product">
        <div class="product-info">
            <h3>Summer Maxi Dress</h3>
            <p>$99.99</p>
            <a href="#" class="add-to-cart">Add to Cart</a>
        </div>
    </div>
</section>
@endsection
