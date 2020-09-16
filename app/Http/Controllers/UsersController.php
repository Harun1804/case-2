<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $user = User::orderBy('id','desc')->get();
        return ResponseFormatter::success($user,"Data User Berhasil Diambil");
    }

    public function show($id)
    {
        $user = User::where('id', $id)->first();
        if ($user) {
            return ResponseFormatter::success($user,"Data User Pilihan Telah Diambil");
        } else {
            return ResponseFormatter::error(null,"Data Tidak Ditemukan");
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required|email|unique:users,email',
            'nohp' => 'required|numeric',
            'pekerjaan' => 'required'
        ]);

        $user = User::create($request->all());
        return ResponseFormatter::success($user,"Data Berhasil Masuk");
    }
}
