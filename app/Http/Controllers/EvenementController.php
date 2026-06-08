<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;


class EvenementController extends Controller
{
    public function index() {
        $items = Evenement::all();
        return view('evenementen.index', compact('items'));
    }
}
