<?php

namespace App\Http\Controllers\Etudiant;

use App\Http\Controllers\Controller;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EtudiantRegisterController extends Controller
{
    public function index()
    {
        return view('auth.etudiantRegister');
    }

    public function create(Request $request)
    {
       /* $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'adresse' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'string', 'max:255'],
            'ville' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:8', 'confirmed'],
        ]);*/

        try{
            $etudiants = new Etudiant();
            $etudiants->nom = $request->nom;
            $etudiants->prenom = $request->prenom;
            $etudiants->adresse = $request->adresse;
            $etudiants->telephone = $request->telephone;
            $etudiants->ville = $request->ville;
            $etudiants->email = $request->email;
            $etudiants->password = Hash::make($request->password);
            /*dd($enseignants);*/
            $etudiants->save();
            toastr()->success('message', "Etudiant creer avec success");
            return redirect()->route('etudiant.login');
        }catch (\Exception $th)
        {
            toastr()->success($th);
            return redirect()->route('etudiant.login');
        }
    }
}
