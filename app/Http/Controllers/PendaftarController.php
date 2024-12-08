<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use App\Models\Response;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
                'name' => 'required|string|max:255',
                'nik' => 'required|digits:16|numeric',
                'tgl' => 'required|string|max:255',
                'alamat' => 'required|string|max:500',
                'telp' => 'required',
                'foto' => 'required|image|mimes:jpeg,png,jpg',
                'kk' => 'required|image|mimes:jpeg,png,jpg',
                'akta' => 'required|image|mimes:jpeg,png,jpg',
                'skl' => 'required|image|mimes:jpeg,png,jpg',
                'kis' => 'nullable|image|mimes:jpeg,png,jpg',
            ]);

            $fotoPath = $request->file('foto') ? $request->file('foto')->store('img/foto', 'public') : null;
            $kkPath = $request->file('kk') ? $request->file('kk')->store('img/kk', 'public') : null;
            $aktaPath = $request->file('akta') ? $request->file('akta')->store('img/akta', 'public') : null;
            $sklPath = $request->file('skl') ? $request->file('skl')->store('img/skl', 'public') : null;
            $kisPath = $request->file('kis') ? $request->file('kis')->store('img/kis', 'public') : null;

            Pendaftar::create([
                'name' => $request->name,
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

            Auth::user()->update(['status' => 'warning']);

            return redirect()->route('user.pendaftaran.edit')->with('success', 'Data berhasil disimpan.');
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

        if ($pendaftar === null)
        {
            return redirect()->route('user.pendaftaran');
        }

        return view('user.edit', compact('pendaftar'));
    }

    public function update(Request $request) {

    }

    public function destroy(Request $request, $nik)
    {
        $pendaftar = Pendaftar::where('nik', $nik)->first();

        Response::create([
            'email' => $pendaftar->email,
            'keterangan' => $request->keterangan,
        ]);

        Storage::disk('public')->delete($pendaftar->foto);
        Storage::disk('public')->delete($pendaftar->kk);
        Storage::disk('public')->delete($pendaftar->akta);
        Storage::disk('public')->delete($pendaftar->skl);

        if ($pendaftar->kis !== null) {
            Storage::disk('public')->delete($pendaftar->kis);
        }

        $user = User::where('email', $pendaftar->email)->first();
        $user->update(['status' => 'danger']);
        $pendaftar->delete();

        return redirect()->route('admin.pendaftar')->with('success', 'Data berhasil dihapus.');
    }
}
