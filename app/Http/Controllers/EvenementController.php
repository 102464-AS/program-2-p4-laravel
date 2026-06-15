<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;
use App\Models\EvenementType;


class EvenementController extends Controller
{
    public function index() {
        $items = Evenement::all();
        return view('evenementen.index', compact('items'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'naam' => ['required'],
            'evenement_type_id' => ['required', 'exists:evenement_types,id'],
            'datum' => ['required', 'date'],
            'locatie' => ['required'],
            'beschrijving' => ['nullable'],
        ]);

        $evenement = Evenement::create($data);

        return redirect()
            ->route('evenementen.artiesten', $evenement->id)
            ->with('success', 'Evenement succesvol aangemaakt. Koppel nu artiesten aan dit evenement.');
    }

    public function create()
    {
        $evenementTypes = EvenementType::all();
        return view('evenementen.create', compact('evenementTypes'));
        
    }
}

