<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfilController extends Controller
{
    public function index()
    {
        return Profil::latest()->get();
    }
    public function store(Request $request)
    {
        $request->validate([
            'alamat' => 'required|string|min:3',
            'telp' => 'required|string|min:3',
            'email' => 'required|string|min:3',
            'kepemilikan' => 'required|string|min:3',
            'direktur' => 'required|string|min:3',
        ]);
        return Profil::create($request->all());
    }
    public function show(Profil $profil)
    {
        return $profil;

    }
    public function update(Request $request, Profil $profil)
    {
        $request->validate([
            'alamat' => 'required',
            'telp' => 'required',
            'email' => 'required',
            'kepemilikan' => 'required',
            'direktur' => 'required',
        ]);
        $profil->update($request->all());
        return $profil;
    }
    public function destroy(Profil $profil)
    {
        $profil->delete();
        return response()->json([
            'message' => 'Data berhasil dihapus !'
        ]);
    }
}