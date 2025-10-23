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
    .about-content {
        background: #fff;
        padding: 2.5rem;
        border-radius: var(--border-radius);
        box-shadow: var(--box-shadow);
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
    }
    .about-content h2 {
        font-size: 2rem;
        margin-bottom: 1rem;
        color: var(--primary-color);
    }
    .about-content p {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #555;
    }
</style>

<div class="page-header">
    <h1>About Fashionista</h1>
</div>

<section class="about-content">
    <h2>Our Story</h2>
    <p>
        Welcome to Fashionista, your ultimate destination for modern and chic fashion. We believe that style is a way to express who you are without having to speak. Our mission is to empower you to feel confident and beautiful in your own skin by providing high-quality, trendy, and affordable clothing.
    </p>
    <br>
    <p>
        Founded in 2025, Fashionista started with a simple idea: to create a one-stop-shop for fashion lovers who appreciate both style and quality. We carefully curate our collections to bring you the latest trends and timeless pieces that you'll love for years to come.
    </p>
</section>
@endsection
