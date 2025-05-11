@extends('Layouts.app')
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@section('title', 'About Us')

@section('content')
<style>
    .about-container {
        max-width: 800px;
        margin: 2rem auto;
        padding: 2rem;
        background: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .about-container h1 {
        text-align: center;
        margin-bottom: 1.5rem;
        color: #343a40;
        font-weight: 700;
    }
    .about-container p {
        font-size: 1.125rem;
        line-height: 1.6;
        color: #495057;
        margin-bottom: 1.25rem;
        text-align: justify;
    }
</style>

<div class="about-container">
    <h1>About Us</h1>
    <p>Selamat datang di website saya, Anda bisa melihat berbagai macam ras kucing di website ini! Dalam website ini saya hanya ingin memberikan informasi lengkap seputar berbagai jenis ras kucing yang ada di dunia. Saya berharap Anda menemukan informasi yang bermanfaat dan menambah wawasan mengenai kucing! :D.</p>
</div>
@endsection
