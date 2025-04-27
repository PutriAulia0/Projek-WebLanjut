<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: rgb(39, 110, 161);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .container {
            max-width: 500px;
            margin: auto;
            background-color: #f4f4f4;
            padding: 60px;
            border-radius: 10px;
            box-shadow: 0 5px 30px rgba(7, 15, 62, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: rgb(12, 72, 110);
            color: white;
            padding: 10px 30px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: auto;
            display: block;
            text-align: center;
        }
        button:hover {
            background-color: rgb(0, 0, 0);
        }
        .error {
            color: red;
            margin-bottom: 15px;
            text-align: center; /* Menengahkan teks */
        }
        .success {
            color: green;
            margin-bottom: 15px;
            text-align: center; /* Menengahkan teks */
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Contact Us</h1>

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <div>
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div>
                <label for="phone">No. Hp:</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone') }}" required>
            </div>
            <div>
                <label for="message">Pesan:</label>
                <textarea id="message" name="message" rows="4" required>{{ old('message') }}</textarea>
            </div>
            <button type="submit">Kirim</button>
        </form>

        @if (session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif
    </div>
</body>
</html>