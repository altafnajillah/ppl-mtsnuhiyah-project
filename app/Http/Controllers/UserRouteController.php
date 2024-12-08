<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserRouteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user.index');
    }

    public function pemberitahuan()
    {
        return view('user.pemberitahuan');
    }

    public function pendaftaran()
    {
        $exists = DB::table('pendaftars')->where('email', Auth::user()->email)->exists();
        if ($exists) {
            return redirect()->route('user.pendaftar.edit');
        }
        return view('user.pendaftaran');
    }
}
