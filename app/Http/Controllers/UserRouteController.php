<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use App\Models\Response;
use App\Models\Siswa;
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

    public function pemberitahuan($status)
    {
        if ($status === 'primary')
        {
            return view('user.pemberitahuan.primary');
        }
        else if ($status === 'danger')
        {
            $response = Response::where('email', Auth::user()->email)->first();
            return view('user.pemberitahuan.danger', compact('response'));
        }
        else if ($status === 'success')
        {
            $siswa = Siswa::where('email', Auth::user()->email)->first();
            return view('user.pemberitahuan.success', compact('siswa'));
        }
        return view('user.pemberitahuan.warning');
    }

    public function pendaftaran()
    {
        if (Auth::user()->status === "warning" || Auth::user()->status === "success") {
            return redirect()->route('user.pemberitahuan', ['status' => Auth::user()->status]);
        }
        return view('user.pendaftaran');
    }
}
