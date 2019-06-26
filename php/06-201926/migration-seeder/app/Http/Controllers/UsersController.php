<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    //
    function hienThiFormNguoiDung()
    {
        return 'Form Nguoi Dung Ne';
    }

    function docTatCaNguoiDung()
    {

        $users = DB::table('users')->get();
        return $users;
        // return 'Tat Ca nguoi Dung';
    }

    function docMotNguoiDung($idNguoiDung)
    {
        // dd($idNguoiDung);
        $user = DB::table('users')->where('id', $idNguoiDung)->get();
        return view(
            'hien-thi-mot-nguoi-dung',
            ['user' => $user]
        );
        // return 'Mot Nguoi Dung';
    }

    function formSuaNguoiDung()
    {
        return 'Form Sua Nguoi Dung';
    }
}