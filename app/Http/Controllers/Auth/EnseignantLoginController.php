<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EnseignantLoginController extends Controller
{
    public function index()
    {
        return view('auth.enseignantLogin');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);


        $enseignants = DB::table('enseignants')->get();
        $email    = $request->email;
        $password = $request->password;
        $user = $enseignants->where('email', $email)->first();

        if (!empty($user)) {
            if (Hash::check($password, $user->password)) {
                Auth::guard('enseignant')->attempt(['email' => $email, 'password' => $password]);

                return redirect('enseignant/dashboard');
            }

            return redirect()->route('enseignant.login')->with('error', 'email ou Mot de passe incorrect', 'Erreur: ');
        }
        return redirect()->route('enseignant.login')->with('error','Nom d\'utilisateur ou Mot de passe incorrect', 'Erreur:');
    }

    public function logout()
    {
        Auth::guard('enseignant')->logout();
        return redirect()->route("enseignant.login");
    }
}
