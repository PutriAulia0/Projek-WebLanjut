<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Show the form
    public function showForm()
    {
        return view('admin.admin');
    }

    // Handle form submission
    public function storeForm(StoreAdminRequest $request)
    {
        // The validated data
        $validated = $request->validated();

        // For now just redirect back with success, as no persistence specified
        return redirect()->route('admin.form')->with('success', 'Data berhasil dikirim!');
    }
}