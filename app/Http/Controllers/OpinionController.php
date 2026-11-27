<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opinion;

class OpinionController extends Controller
{
    public function guardarOpinion(Request $request)
    {
        $opinion = new Opinion();
        $opinion->opinion = $request->input('opinion');
        $opinion->save();

        return redirect('/formulario')->with('exito', 'Opinión enviada. Gracias por compartirla.');
    }
}