<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function show($filename)
    {
        $filePath = "{$filename}";

//     Cek autentikasi user
        if (!Auth::check()) {
            abort(403, 'Unauthorized access');
        }

        // Retrieve the uploader's email associated with the file
        $pendaftar = Pendaftar::where('kk', $filename)->first();
        if (!$pendaftar) {
            abort(404, 'File metadata not found');
        }
        // Check authorization: only the uploader or admin can access

        if (Auth::user()->email != $pendaftar->email && Auth::user()->role != '1') {
            abort(403, 'Unauthorized access');
        }

//        if (Auth::user()->role !== 'admin' && Auth::user()->id !== 1) {
//            // Ubah logika ini sesuai dengan kebutuhan otorisasi Anda
//            abort(403, 'Unauthorized access');
//        }

        // Pastikan file ada
        if (!Storage::disk('private')->exists($filePath)) {
            abort(404, 'File tidak ditemukan');
        }

        // Kirim file sebagai respons
        return response()->file(storage_path("app/private/{$filePath}"));
    }
}
