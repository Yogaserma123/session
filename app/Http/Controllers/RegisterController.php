<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(Request $request)
    {

        // $_SESSION['email'] = $request->input('email');

        session(["email" => $request->input('email')]);

        return redirect('dashboard');
    }
}
