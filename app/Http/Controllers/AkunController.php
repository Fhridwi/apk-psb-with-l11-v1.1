<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    public function index() {
        $users = User::whereIn('role', ['admin', 'wali', 'pengasuh'])->get();
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
            'role' => 'required|in:admin,wali,pengasuh',
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


public function update(Request $request, User $user)
{
    $rules = [
        'name' => 'required|string|max:255',
        'role' => 'required|in:admin,wali,pengasuh',
    ];

    // Validasi email hanya jika diubah
    if ($request->email !== $user->email) {
        $rules['email'] = 'required|email|unique:users,email';
    }

    $request->validate($rules);

    $data = [];

    if ($request->name !== $user->name) {
        $data['name'] = $request->name;
    }

    if ($request->email !== $user->email) {
        $data['email'] = $request->email;
    }

    if ($request->role !== $user->role) {
        $data['role'] = $request->role;
    }

    if ($request->password) {
        $data['password'] = Hash::make($request->password);
    }

    if (!empty($data)) {
        $user->update($data);
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
