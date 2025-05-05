<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Form Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0; padding: 20px;
        }
        form {
            background: white;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }
        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: 600;
            color: #555;
        }
        input[type="text"],
        input[type="email"],
        textarea,
        select {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }
        textarea {
            resize: vertical;
            min-height: 70px;
        }
        .error-message {
            color: #e53935;
            font-size: 13px;
            margin-top: 4px;
        }
        .success-message {
            background-color: #4caf50;
            color: white;
            padding: 10px;
            border-radius: 4px;
            text-align: center;
            margin-top: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }
        button[type="submit"] {
            margin-top: 25px;
            width: 100%;
            background-color: #1976d2;
            color: white;
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #115293;
        }
    </style>
</head>
<body>
    <form method="POST" action="{{ route('admin.store') }}">
        @csrf

        <h1>Form Admin</h1>

        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required>
        @error('nama')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <label for="no_hp">Nomor HP</label>
        <input type="text" id="no_hp" name="no_hp" value="{{ old('no_hp') }}" required>
        @error('no_hp')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <label for="alamat">Alamat</label>
        <textarea id="alamat" name="alamat" required>{{ old('alamat') }}</textarea>
        @error('alamat')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <label for="role">Role</label>
        <select id="role" name="role" required>
            <option value="" disabled {{ old('role') ? '' : 'selected' }}>-- Pilih Role --</option>
            <option value="super_admin" {{ old('role') == 'super_admin' ? 'selected' : '' }}>Super Admin</option>
            <option value="kasir" {{ old('role') == 'kasir' ? 'selected' : '' }}>Kasir</option>
        </select>
        @error('role')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <button type="submit">Kirim </button>
        @if(session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif
    </form>
</body>
</html>