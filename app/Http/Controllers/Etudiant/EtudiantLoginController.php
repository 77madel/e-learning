<?php

namespace App\Http\Controllers\Etudiant;

 use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EtudiantLoginController extends Controller
{
    public function index()
    {
        return view('auth.etudiantLogin');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);


        $etudiants = DB::table('etudiants')->get();
        $email = $request->email;
        $password = $request->password;
        $user = $etudiants->where('email', $email)->first();

        if (!empty($user)) {
            if (Hash::check($password, $user->password)) {
                Auth::guard('etudiant')->attempt(['email' => $email, 'password' => $password]);

                return redirect('dashboard/etudiant');
            }

            return redirect()->route('etudiant.login')->with('error', 'email ou Mot de passe incorrect', 'Erreur: ');
        }
        return redirect()->route('etudiant.login')->with('error','Nom d\'utilisateur ou Mot de passe incorrect', 'Erreur:');
    }

    public function logout()
    {
        Auth::guard('etudiant')->logout();
        return redirect()->route("etudiant.login");
    }
}
