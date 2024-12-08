<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('admin.siswa');
    }

    public function create() {

    }

    public function store(Request $request) {

    }

    public function show() {
        return view('admin.siswa.detail');
    }
}
