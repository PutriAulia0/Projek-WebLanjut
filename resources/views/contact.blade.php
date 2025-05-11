@extends('Layouts.app')

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@section('title', 'Contact')
@section('content')
<style>
    .contact-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
        padding: 20px;
    }

    .contact-box {
        width: 150px;
        height: 150px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease;
        text-align: center;
        cursor: pointer;
        overflow: hidden; /* Menyembunyikan bagian gambar yang keluar dari kotak */
    }

    .contact-box:hover {
        transform: scale(1.1);
    }

    .contact-box img {
        width: 100%; /* Mengatur lebar gambar menjadi 100% dari kotak */
        height: 100%; /* Mengatur tinggi gambar menjadi 100% dari kotak */
        object-fit: contain; /* Memastikan gambar tidak terdistorsi */
    }
</style>

<div class="container">
    <h1 class="text-center">Contact Us</h1>
    <p class="text-center">Kontak kami</p>

    <div class="contact-container">
        <a href="https://www.whatsapp.com" class="contact-box whatsapp">
            <img src="{{ asset('images/whatsapp-icon.png') }}" alt="WhatsApp">
        </a>
        <a href="https://www.instagram.com" class="contact-box instagram">
            <img src="{{ asset('images/instagram-icon.png') }}" alt="Instagram">
        </a>
        <a href="https://www.youtube.com" class="contact-box youtube">
            <img src="{{ asset('images/youtube-icon.png') }}" alt="YouTube">
        </a>
        <a href="mailto:youremail@example.com" class="contact-box email">
            <img src="{{ asset('images/email-icon.png') }}" alt="Email">
        </a>
    </div>
</div>
@endsection