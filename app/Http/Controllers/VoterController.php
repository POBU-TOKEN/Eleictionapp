<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoterController extends Controller
{
    public function dashboard()
    {
        return view('voter.dashboard');
    }
}
