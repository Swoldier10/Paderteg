<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MachineController extends Controller
{
    /**
     * Display a listing of the machines.
     */
    public function index()
    {
        $machines = Machine::where('is_active', true)->get();
        
        return view('machines', compact('machines'));
    }

    /**
     * Display the specified machine.
     */
    public function show(Machine $machine)
    {
        if (!$machine->is_active) {
            abort(404);
        }
        
        return view('resources.machines.show', compact('machine'));
    }

    /**
     * Show the form for creating a new machine.
     */
    public function create()
    {
        return view('admin.machines.create');
    }

    /**
     * Store a newly created machine in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:5120',
            'specifications' => 'nullable|array',
            'capabilities' => 'nullable|array',
            'is_active' => 'boolean',
        ]);
        
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('machines', 'public');
        }
        
        Machine::create($validated);
        
        return redirect()->route('admin.machines.index')
            ->with('success', 'Machine created successfully.');
    }

    /**
     * Show the form for editing the specified machine.
     */
    public function edit(Machine $machine)
    {
        return view('admin.machines.edit', compact('machine'));
    }

    /**
     * Update the specified machine in storage.
     */
    public function update(Request $request, Machine $machine)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:5120',
            'specifications' => 'nullable|array',
            'capabilities' => 'nullable|array',
            'is_active' => 'boolean',
        ]);
        
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($machine->image && Storage::disk('public')->exists($machine->image)) {
                Storage::disk('public')->delete($machine->image);
            }
            $validated['image'] = $request->file('image')->store('machines', 'public');
        }
        
        $machine->update($validated);
        
        return redirect()->route('admin.machines.index')
            ->with('success', 'Machine updated successfully.');
    }

    /**
     * Remove the specified machine from storage.
     */
    public function destroy(Machine $machine)
    {
        // Delete image if exists
        if ($machine->image && Storage::disk('public')->exists($machine->image)) {
            Storage::disk('public')->delete($machine->image);
        }
        
        $machine->delete();
        
        return redirect()->route('admin.machines.index')
            ->with('success', 'Machine deleted successfully.');
    }
}
