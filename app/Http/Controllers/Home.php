<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\brands;
use App\Models\persons;
use \Illuminate\Support\Facades\DB;

class Home extends Controller
{
    public function index()
    {
        $brands = brands::all();
        return view('welcome', ['brands' => $brands]);
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'user' => 'required',
            'password' => 'required',
        ]);
        $user = $request->user;
        $password = $request->password;
        $userInfo = DB::table('persons')->where('username', $user)->first();
        try {
            if ($userInfo != null) {
                $passwordUser = $userInfo->password;
                $role = $userInfo->id_role;
                if ($password == $passwordUser) {
                    if ($role == 1) {
                        $request->session()->put('admin', $request->input());
                        return redirect('/');
                    }
                } else {
                    return redirect('/Login');
                }
            } else {
                return redirect('/Login');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
