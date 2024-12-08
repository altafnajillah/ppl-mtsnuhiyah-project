<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PendaftarController extends Controller
{
    public function index()
    {
        $pendaftars = Pendaftar::all();
        return view('admin.pendaftar', compact('pendaftars'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required|string|max:255',
                'nik' => 'required|digits:16|numeric',
                'tgl' => 'required|string|max:255',
                'alamat' => 'required|string|max:500',
                'telp' => 'required',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg',
                'kk' => 'nullable|image|mimes:jpeg,png,jpg',
                'akta' => 'nullable|image|mimes:jpeg,png,jpg',
                'skl' => 'nullable|image|mimes:jpeg,png,jpg',
                'kis' => 'nullable|image|mimes:jpeg,png,jpg',
            ]);

            $fotoPath = $request->file('foto')->store('private/data/foto');
            $kkPath = $request->file('kk')->store('private/data/kk');
            $aktaPath = $request->file('akta')->store('private/data/akta');
            $sklPath = $request->file('skl')->store('private/data/skl');
            $kisPath = $request->file('kis') ? $request->file('kis')->store('private/data/kis') : null;
            Pendaftar::create([
                'nama' => Auth::user()->name,
                'jk' => $request->jk,
                'nik' => $request->nik,
                'email' => Auth::user()->email,
                'tgl' => $request->tgl,
                'alamat' => $request->alamat,
                'telp' => $request->telp,
                'foto' => $fotoPath,
                'kk' => $kkPath,
                'akta' => $aktaPath,
                'skl' => $sklPath,
                'kis' => $kisPath,
            ]);
            return redirect()->back()->with('success', 'Data berhasil disimpan.');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->with('error', 'Data gagal disimpan.');
        }
    }

    public function show($id)
    {
        $pendaftar = Pendaftar::find($id);
        return view('admin.pendaftar.detail', compact('pendaftar'));
    }

    public function edit()
    {
        $pendaftar = Pendaftar::where("email", Auth::user()->email)->first();
        return view('user.edit', compact('pendaftar'));
    }

    public function update(Request $request) {

    }

    private function updateImage()
    {

    }
}
