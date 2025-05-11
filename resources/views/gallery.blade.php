@extends('Layouts.app')

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@section('title', 'Gallery')

@section('content')
<style>
    .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 15px;
        padding: 10px;
    }

    .gallery-item {
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
        text-align: center; /* Menambahkan teks di tengah */
        background-color: #fff; /* Warna latar belakang putih untuk kotak */
        padding: 10px; /* Ruang di dalam kotak */
    }

    .gallery-item:hover {
        transform: scale(1.05);
    }

    .gallery-item img {
        width: 100%;
        height: 200px; /* Mengatur tinggi gambar agar sama */
        object-fit: cover; /* Memastikan gambar mengisi area tanpa distorsi */
        display: block;
        border-radius: 8px; /* Menambahkan sudut melengkung pada gambar */
    }

    .cat-name {
        font-weight: bold;
        margin-top: 5px;
        font-size: 1.1em; /* Ukuran font untuk nama kucing */
        color: #333; /* Warna teks untuk nama */
    }

    .cat-description {
        font-size: 0.9em;
        color: #555; /* Warna teks untuk deskripsi */
        margin-top: 5px; /* Jarak atas untuk deskripsi */
        padding: 5px; /* Ruang di dalam deskripsi */
        border-top: 1px solid #ddd; /* Garis pemisah di atas deskripsi */
        margin-top: 10px; /* Jarak atas untuk deskripsi */
    }
</style>

<h1>Berbagai Ras Kucing</h1>

<div class="gallery">
    @foreach ($cats as $cat)
        <div class="gallery-item">
            <img src="{{ asset($cat['image']) }}" alt="{{ $cat['name'] }}">
            <div class="cat-name">{{ $cat['name'] }}</div>
            <div class="cat-description">{{ $cat['description'] }}</div>
        </div>
    @endforeach
</div>
@endsection