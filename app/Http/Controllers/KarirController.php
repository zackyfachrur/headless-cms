<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karir;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class KarirController extends Controller
{
    public function index() {
        $karir = Karir::all();
        return view('pages.admin.karir', compact('karir'));
    }
    public function view()
    {
        $karir = Karir::all();
        return view('pages.karir', compact('karir'));
    }

    public function store(Request $request)
    {
        Log::info('Store method called');

        $validated = $request->validate([
            'job_title' => 'required|string|max:255',
            'job_location' => 'required|string|max:255',
            'job_division' => 'required|string|max:255',
            'job_description' => 'required',
            'job_deadline' => 'required|date',
            'job_status' => 'required|in:open,closed',
            'job_requirements' => 'required|array',
            'job_requirements.*' => 'required|string|max:255',
        ]);

        Log::info('Validated data', $validated);

        $slug = Str::slug($validated['job_title']);

        Karir::create([
            'slug' => $slug,
            'job_title' => $validated['job_title'],
            'job_location' => $validated['job_location'],
            'job_division' => $validated['job_division'],
            'job_description' => $validated['job_description'],
            'job_deadline' => $validated['job_deadline'],
            'job_status' => $validated['job_status'],
            'job_requirements' => $validated['job_requirements'],
        ]);

        Log::info('Karir record created');

       return redirect()->route('karir.index')->with('success', 'Data berhasil ditambahkan');
    }


    public function edit($id) {
        $karir = Karir::findOrFail($id);
        return view('pages.admin.karir-edit', compact('karir'));
    }

    public function update(Request $request, $id) {
        Log::info('Store method called');

        $karir = Karir::findOrFail($id);

        $validated = $request->validate([
            'job_title' => 'required|string|max:255',
            'job_location' => 'required|string|max:255',
            'job_division' => 'required|string|max:255',
            'job_description' => 'required',
            'job_deadline' => 'required|date',
            'job_status' => 'required|in:open,closed',
            'job_requirements' => 'required|array',
            'job_requirements.*' => 'required|string|max:255',
        ]);

        Log::info('Validated data', $validated);

        if($karir->job_title !== $validated['job_title']) {
            $slug = Str::slug($validated['job_title']);

            $karir->slug = $slug;
        }

        $karir = Karir::findOrFail($id);
        $karir->update([
        'job_title' => $validated['job_title'],
        'job_location' => $validated['job_location'],
        'job_division' => $validated['job_division'],
        'job_description' => $validated['job_description'],
        'job_deadline' => $validated['job_deadline'],
        'job_status' => $validated['job_status'],
        'job_requirements' => $validated['job_requirements'],
    ]);



        return redirect()->route('karir.index')->with('success', 'Data berhasil diperbarui');
    }

    public function detail($slug) {
    $karir = Karir::where('slug', $slug)->firstOrFail();
    return view('pages.karir-detail', compact('karir'));
}

}
