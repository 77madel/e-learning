<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Enseignant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EnseignantRegisterController extends Controller
{
    public function index()
    {
        return view('auth.enseignantRegister');
    }

    public function create(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'adresse' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'string', 'max:255'],
            'ville' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:8', 'confirmed'],
        ]);

        try{
            $enseignants = new Enseignant();
            $enseignants->nom = $request->nom;
            $enseignants->prenom = $request->prenom;
            $enseignants->adresse = $request->adresse;
            $enseignants->telephone = $request->telephone;
            $enseignants->ville = $request->ville;
            $enseignants->email = $request->email;
            $enseignants->password = Hash::make($request->password);
            /*dd($enseignants);*/
            $enseignants->save();
            toastr()->success('message', "Enseignant creer avec success");
            return redirect()->route('enseignant.login');
        }catch (\Exception $th)
        {
            toastr()->success($th);
            return redirect()->route('enseignant.login');
        }
    }
}
