<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        // Validation logic here

        User::create($request->all());

        return redirect()->route('user.index')->with('success', 'User created successfully');
    }

    // Other methods like edit, update, destroy can be implemented similarly
}
