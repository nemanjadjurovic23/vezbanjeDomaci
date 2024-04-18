<?php

namespace App\Http\Controllers;

use App\Models\ocene;
use Illuminate\Http\Request;

class DodajOcenu extends Controller
{
    public function addGrade(Request $request)
    {
        $request -> validate([
                "user_id" => 'required|integer',
                "predmet" => 'required|string',
                "ocena" => 'required|integer|min:1|max:5',
                "profesor" => 'required|string'
            ]
        );

        Ocene::create([
            'user_id' => $request->get('user_id'),
            'predmet' => $request->get('predmet'),
            'ocena' => $request->get('ocena'),
            'profesor' => $request->get('profesor')
        ]);

        return redirect('/');
    }

    // - u tabelu ocene dodati user_id
    //      -povezati taj podatak sa tabelom users (id)
}
