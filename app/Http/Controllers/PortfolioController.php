<?php

namespace App\Http\Controllers;

use App\Models\Guestbook;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $guestbooks = Guestbook::latest()->take(10)->get();
        return view('portfolio', compact('guestbooks'));
    }
}