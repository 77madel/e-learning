<?php

namespace App\Http\Controllers\Enseignant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnseignantController extends Controller
{
    public function index()
    {
        $autorisation = $this->autorisation(Auth::user()->role, 'enseignant.index');
        if ($autorisation == 'false')
        {
            toastr()->info('Vous n\'avez pas le droit d\'acceder à ces ressources', 'Tentative échoué');
            return redirect()->route('dashboard');
        }
        return view('admin.enseignant.index');
    }
}
