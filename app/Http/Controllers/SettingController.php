<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(Request $request)
    {
        return view('setting.setting-company');
    }

    public function profile(Request $request)
    {
        return view('setting.setting-profile');
    }

    public function changePassword(Request $request)
    {
        return view('setting.setting-password');
    }

    public function transport(Request $request)
    {
        return view('setting.setting-transport');
    }
}
