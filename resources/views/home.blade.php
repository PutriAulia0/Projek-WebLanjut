@extends('Layouts.app')

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@section('title', 'Home')

@section('content')
<style>
    .hero {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 70vh;
        background: linear-gradient(135deg, #89f7fe 0%, #66a6ff 100%);
        color: white;
        text-align: center;
        padding: 0 1rem;
        border-radius: 12px;
        box-shadow: 0 8px 30px rgba(102, 166, 255, 0.4);
    }
    .hero h1 {
        font-weight: 700;
        font-size: 3rem;
        margin-bottom: 1rem;
        text-shadow: 0 3px 6px rgba(0,0,0,0.1);
    }
    .hero p {
        font-size: 1.25rem;
        max-width: 600px;
        margin-bottom: 2rem;
        text-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .btn-primary-custom {
        background-color: #335eea;
        border: none;
        padding: 0.75rem 2rem;
        font-size: 1.1rem;
        border-radius: 50px;
        transition: background-color 0.3s ease;
        box-shadow: 0 5px 15px rgba(51, 94, 234, 0.4);
    }
    .btn-primary-custom:hover {
        background-color: #2546c1;
    }
</style>

<div class="hero">
    <h1>Selamat Datang di Website Cute Cats</h1>
    <p>Ini adalah website berupa berbagai macam jenis-jenis kucing diseluruh dunia. Jelajahi website dan temukan berbagai pengetahuan menarik mengenai bebrbagai kucing di dalamnya!</p>
    <a href="{{ route('about') }}" class="btn btn-primary-custom">Telusuri lebih lanjut</a>
</div>
@endsection
