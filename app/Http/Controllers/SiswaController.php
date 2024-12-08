<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use App\Models\Response;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $siswas = Siswa::all();
        return view('admin.siswa', compact('siswas'));
    }

    public function create()
    {

    }

    public function store(Request $request, $nik)
    {
        $request->validate([
            'className' => 'required|string|max:5',
        ]);

        // Mencari data pendaftar berdasarkan NIK
        $pendaftar = Pendaftar::where('nik', $nik)->first();

        // Mengecek jika data pendaftar ditemukan
        if (!$pendaftar) {
            return response()->json(['message' => 'Pendaftar not found'], 404);
        }

        // Membuat data siswa baru berdasarkan data pendaftar
        Siswa::create([
            'name' => $pendaftar->name,
            'nik' => $pendaftar->nik,
            'tgl' => $pendaftar->tgl,
            'telp' => $pendaftar->telp,
            'jk' => $pendaftar->jk,
            'email' => $pendaftar->email,
            'alamat' => $pendaftar->alamat,
            'kelas' => $request->className,
            'kk' => $pendaftar->kk,
            'foto' => $pendaftar->foto,
            'akta' => $pendaftar->akta,
            'skl' => $pendaftar->skl,
            'kis' => $pendaftar->kis,
        ]);

        $user = User::where('email', $pendaftar->email)->first();
        $user->update(['status' => 'success']);

//        $response = Response::where('nik', $nik)->first();

        $pendaftar->delete();

        // Mengembalikan response jika data siswa berhasil dibuat
        return redirect()->route('admin.pendaftar')->with('success', 'Siswa sukses dibuat');
    }

    public function show($id)
    {
        $siswa = Siswa::find($id);
        return view('admin.siswa.detail', compact('siswa'));
    }
}
