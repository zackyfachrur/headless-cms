<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolio = Portfolio::all();
        return view("pages.admin.portfolio", compact("portfolio"));
    }

    public function view()
    {
        $portfolio = Portfolio::all();
        return view("pages.portfolio", compact('portfolio'));
    }

    public function create()
    {
        return view('pages.admin.portfolio-create');
    }

    public function store(Request $request)
    {
        Log::info('Store method called');

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'demo_url' => 'nullable|url',
            'demo_username' => 'nullable|string',
            'demo_password' => 'nullable|string',
            'in_progress' => 'required|boolean',
            'progress' => 'nullable|integer|min:0|max:100',
            'progress_note' => 'nullable|string|max:255',
            'detail_url' => 'required|url',
        ]);

        Log::info('Validated data', $validated);

        [$category, $category_label] = explode('|', $validated['category']);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('portfolio', 'public');
            Log::info('Image path stored: ' . $path);
        } else {
            Log::error('No image file found in the request');
            return back()->withErrors(['image' => 'Image file is required']);
        }

        Portfolio::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'category' => $category,
            'category_label' => $category_label,
            'image' => $path,
            'demo_url' => $validated['demo_url'] ?? null,
            'demo_username' => $validated['demo_username'] ?? null,
            'demo_password' => $validated['demo_password'] ?? null,
            'in_progress' => $validated['in_progress'],
            'progress' => $validated['in_progress'] ? $validated['progress'] : null,
            'progress_note' => $validated['in_progress'] ? $validated['progress_note'] : null,
            'detail_url' => $validated['detail_url'],
        ]);

        Log::info('Portfolio record created');

        return redirect()->route('portfolio.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('pages.admin.portfolio-edit', compact('portfolio'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'demo_url' => 'nullable|url',
            'demo_username' => 'nullable|string',
            'demo_password' => 'nullable|string',
            'in_progress' => 'required|boolean',
            'progress' => 'nullable|integer|min:0|max:100',
            'progress_note' => 'nullable|string|max:255',
            'detail_url' => 'required|url',
        ]);

        $portfolio = Portfolio::findOrFail($id);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('portfolio', 'public');
            $portfolio->image = $path;
        }

        [$category, $category_label] = explode('|', $validated['category']);

        $portfolio->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'category' => $category,
            'category_label' => $category_label,
            'demo_url' => $validated['demo_url'] ?? null,
            'demo_username' => $validated['demo_username'] ?? null,
            'demo_password' => $validated['demo_password'] ?? null,
            'in_progress' => $validated['in_progress'],
            'progress' => $validated['in_progress'] ? $validated['progress'] : null,
            'progress_note' => $validated['in_progress'] ? $validated['progress_note'] : null,
            'detail_url' => $validated['detail_url'],
        ]);

        if (isset($path)) {
            $portfolio->image = $path;
            $portfolio->save();
        }

        return redirect()->route('portfolio.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id) {


        $portfolio = Portfolio::findOrFail($id);

        if ($portfolio->image) {
            Storage::disk('public')->delete($portfolio->image);
        }


        $portfolio->delete();



        return redirect()->route('portfolio.index')->with('success', 'Data berhasil diperbarui');
    }
}
