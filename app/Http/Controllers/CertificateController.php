<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    /**
     * Display a listing of the certificates.
     */
    public function index()
    {
        $certificates = Certificate::where('is_active', true)->get();
        
        return view('certificates', compact('certificates'));
    }

    /**
     * Display the specified certificate.
     */
    public function show(Certificate $certificate)
    {
        if (!$certificate->is_active) {
            abort(404);
        }
        
        return view('resources.certificates.show', compact('certificate'));
    }

    /**
     * Show the form for creating a new certificate.
     */
    public function create()
    {
        return view('admin.certificates.create');
    }

    /**
     * Store a newly created certificate in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file_path' => 'nullable|file|mimes:pdf|max:10240',
            'url' => 'nullable|url|max:255',
            'valid_until' => 'nullable|date',
            'is_active' => 'boolean',
        ]);
        
        if ($request->hasFile('file_path')) {
            $validated['file_path'] = $request->file('file_path')->store('certificates', 'public');
        }
        
        Certificate::create($validated);
        
        return redirect()->route('admin.certificates.index')
            ->with('success', 'Certificate created successfully.');
    }

    /**
     * Show the form for editing the specified certificate.
     */
    public function edit(Certificate $certificate)
    {
        return view('admin.certificates.edit', compact('certificate'));
    }

    /**
     * Update the specified certificate in storage.
     */
    public function update(Request $request, Certificate $certificate)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file_path' => 'nullable|file|mimes:pdf|max:10240',
            'url' => 'nullable|url|max:255',
            'valid_until' => 'nullable|date',
            'is_active' => 'boolean',
        ]);
        
        if ($request->hasFile('file_path')) {
            $validated['file_path'] = $request->file('file_path')->store('certificates', 'public');
        }
        
        $certificate->update($validated);
        
        return redirect()->route('admin.certificates.index')
            ->with('success', 'Certificate updated successfully.');
    }

    /**
     * Remove the specified certificate from storage.
     */
    public function destroy(Certificate $certificate)
    {
        $certificate->delete();
        
        return redirect()->route('admin.certificates.index')
            ->with('success', 'Certificate deleted successfully.');
    }
}
