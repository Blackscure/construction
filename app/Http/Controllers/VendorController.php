<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index()
    {
        $vendors = Vendor::all();
        return view('vendor.index', compact('vendors'));
    }

    public function create()
    {
        return view('vendor.create');
    }

    public function store(Request $request)
    {
        // Validation logic here

        Vendor::create($request->all());

        return redirect()->route('vendor.index')->with('success', 'Vendor created successfully');
    }

    // Other methods like edit, update, destroy can be implemented similarly
}
