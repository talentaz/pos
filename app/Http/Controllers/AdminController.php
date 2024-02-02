<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, Validator, Exception, Image, URL;
use Illuminate\Support\Facades\File; 
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function edit_profile(Request $request)
    {
        $user = User::where('role', 1)->first();
        return view('admin.pages.admin.edit', [
            'user' => $user,
        ]);
    }
}
