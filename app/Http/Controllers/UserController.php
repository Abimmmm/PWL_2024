<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Pelanggan Pertama',
        ];
        UserModel::where('username', 'Customer-1')->update($data);

        //coba akses model usermodel
        $user = UserModel::all(); //ambil semua data dari tabel m_user menggunakan model UserModel
        return view('user', ['data' => $user]);
    }
}
