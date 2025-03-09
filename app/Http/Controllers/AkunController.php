<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    public function index() {
        $users = User::whereIn('role', ['admin', 'wali'])->get();
        return view('admin.akun.index', compact('users'));
    }

    public function create() {
        return view('admin.akun.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|in:admin,wali',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('akun.index')->with('success', 'Akun berhasil ditambahkan!');
    }

    public function edit($id)
{
    $user = User::findOrFail($id);
    return view('admin.akun.edit', compact('user'));
}


    public function update(Request $request, User $user) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role' => 'required|in:admin,wali',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        if ($request->password) {
            $user->update(['password' => Hash::make($request->password)]);
        }

        return redirect()->route('akun.index')->with('success', 'Akun berhasil diperbarui!');
    }

    public function destroy($id)
{
    $user = User::find($id);

    if (!$user) {
        return redirect()->route('akun.index')->with('error', 'Akun tidak ditemukan!');
    }

    $user->delete(); 

    return redirect()->route('akun.index')->with('success', 'Akun berhasil dihapus!');
}

}
