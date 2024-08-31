<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoryPassword;

class PasswordController extends Controller
{
    public function generate(Request $request)
    {
        $length = $request->input('length', 12);
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()';
        $password = '';

        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }

        // HistoryPassword::create([
        //     'password' => $password,
        //     'generated_at' => now(),
        // ]);

        // $passwords = HistoryPassword::orderBy("generated_at","desc")->paginate(5);
        // inside compact add this ('password','passwords)
        return view('password', compact('password'));

    }
}
