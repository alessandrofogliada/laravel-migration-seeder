<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index (){

        $title = 'Benvenuto nel tuo nuovo progetto!';
        $text = 'Carico per il nuovo progetto!!';

        return view('home', compact('text', 'title'));
    }

    public function contacts (){
        return view('contacts');
    }

    public function about (){
        return view('about');
    }

    public function trains(){

        $trains = Train::all();

        return view('trains' , compact('trains'));
    }

}
