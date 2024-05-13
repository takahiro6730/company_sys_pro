<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsController extends Controller
{
    //
    public function view_terms($local) {
        if (! in_array($local, ['jp', 'ja', 'en', 'ch', 'ru', 'sp'])) {
            abort(400);
        }
        if($local == "ja") return view('terms.useTerm_ja', compact('local'));
        if($local == "en") return view('terms.useTerm_en', compact('local'));
        if($local == "ch") return view('terms.useTerm_ch', compact('local'));
        if($local == "ru") return view('terms.useTerm_ru', compact('local'));
        if($local == "sp") return view('terms.useTerm_sp', compact('local'));
        return view('terms.useTerm_ja');
    }
}
