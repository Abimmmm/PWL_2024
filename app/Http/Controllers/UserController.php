<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user=UserModel::all();
        return view('user', ['data' => $user]);
    }
    public function tambah()
    {
        return view('user_tambah');
    }
   public function tambah_simpan(Request $request)
    {
        UserModel::create([
            'username' => $request->username,
            'nama'     => $request->nama,
            'password' => Hash::make('12345'), // atau input password,
            'level_id' => $request->level_id,
        ]);

        return redirect('/user'); 
    }
    public function ubah($id)
    {
        $data = UserModel::find($id);
        return view('user_ubah', ['data' => $data]);
    }
    public function ubah_simpan($id, Request $request)
    {
        $user = UserModel::find($id);
        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make('12345'); 
        $user->level_id = $request->level_id;
        $user->save();

        return redirect('/user');
    }
    public function hapus($id){
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }
}
