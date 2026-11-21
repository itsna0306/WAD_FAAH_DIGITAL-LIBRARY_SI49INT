<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;
use App\Http\Controllers\FacilityController;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::latest()->get();

        return view('facilities.index', compact('facilities'));
    }

    public function create()
    {
        return view('facilities.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'area_name' => 'required|string|max:255',
            'floor_number' => 'required|integer|min:1',
            'area_number' => 'required|string|max:20|unique:facilities,area_number',
            'area_type' => 'required|in:Reading Room,Silent Room,Discussion Room',
            'has_wifi' => 'nullable|boolean',
            'has_power_outlet' => 'nullable|boolean',
            'status' => 'required|in:available,occupied,maintenance',
            'description' => 'nullable|string',
        ]);

        $validated['has_wifi'] = $request->boolean('has_wifi');
        $validated['has_power_outlet'] = $request->boolean('has_power_outlet');

        Facility::create($validated);

        return redirect()
            ->route('facilities.index')
            ->with('success', 'Facility created successfully!');
    }

    public function edit(Facility $facility)
    {
        return view('facilities.edit', compact('facility'));
    }

    public function update(Request $request, Facility $facility)
    {
        $validated = $request->validate([
            'area_name' => 'required|string|max:255',
            'floor_number' => 'required|integer|min:1',
            'area_number' => 'required|string|max:20|unique:facilities,area_number,' . $facility->id,
            'area_type' => 'required|in:Reading Room,Silent Room,Discussion Room',
            'has_wifi' => 'nullable|boolean',
            'has_power_outlet' => 'nullable|boolean',
            'status' => 'required|in:available,occupied,maintenance',
            'description' => 'nullable|string',
        ]);

        $validated['has_wifi'] = $request->boolean('has_wifi');
        $validated['has_power_outlet'] = $request->boolean('has_power_outlet');

        $facility->update($validated);

        return redirect()
            ->route('facilities.index')
            ->with('success', 'Facility updated successfully!');
    }

    public function destroy(Facility $facility)
    {
        $facility->delete();

        return redirect()
            ->route('facilities.index')
            ->with('success', 'Facility deleted successfully!');
    }
}