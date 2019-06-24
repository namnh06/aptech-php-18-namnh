<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index()
    {
        $users = DB::table('users')->get();
        return view(
            'welcome',
            [
                'nguoi_dung' => $users,
                'bai_viet' => [1, 2, 3]
            ]
        );
    }
}