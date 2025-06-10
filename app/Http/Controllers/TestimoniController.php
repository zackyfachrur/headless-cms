<?php

namespace App\Http\Controllers;
use App\Models\Testimoni;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function view() {
        $testimoni = Testimoni::all();
        return view('pages.testimoni', compact('testimoni'));
    }

    public function index()
    {
        $testimoni = Testimoni::all();
        return view('pages.admin.testimoni', compact('testiomoni'));
    }

    public function store(Request $request) {
        Log::info('Store method called');

        $validated = $request->validate([
            'client_comment' => 'required|text',
            'client_email' => 'email',
            'client_name' => 'required|string|max:255',
            'client_web' => 'required|string|max:255',
            'comment_status' => 'required|in:accepted,declined',
        ]);

        $testimoni = Testimoni::create([
            'client_commnet' => $validated['client_comment'],
            'client_email'=> $validated['client_email'],
            'client_name'=> $validated['client_name'],
            'client_web'=> $validated['client_web'],
            'comment_status'=> $validated['comment_status'],
        ]);

        Log::info('Testimoni record created');

        return redirect()->route('testimoni.view')->with('success', 'Data berhasil ditambahkan');
    }
}
