<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name= "viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h1>Form Tambah User</h1>

     @if (session('success'))
        <p style="color: green;"> {{ session('success') }} </p>
    @endif

    @if ($errors ->any())
    <div style="color:red;">
        @foreach ( $errors->all() as $error )
            <li>{{ $error }}</li>  
        @endforeach
    </div>
    @endif

    <form method="POST" action="{{ route('user.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Nama" value="{{ old('name') }}"><br>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="password" name="password_confirmation" placeholder="Konfirmasi Password"><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>