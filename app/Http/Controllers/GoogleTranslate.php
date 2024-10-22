<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class GoogleTranslate extends Controller
{
    public function index()
    {
        return view('languageview');
    }

    public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
  
        return redirect()->back();
    }
}
