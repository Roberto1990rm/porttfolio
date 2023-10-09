<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\App;

class PublicController extends Controller
{
    //
    public function setLocale($locale)
    {
        session()->put ('locale', $locale);
        return redirect()->back();
    }
}
