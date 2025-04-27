<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact.form');
    }

    public function submitForm(StoreContactRequest $request)
    {
        // Data sudah tervalidasi
        // Proses data (misalnya, simpan ke database atau kirim email)

        return redirect()->route('contact.form')->with('success', 'Pesan Anda telah dikirim!');
    }
}