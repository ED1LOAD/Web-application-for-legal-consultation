<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Lawyer;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    public function index()
    {
        $lawyers = Lawyer::all();
        return view('lawyers.index', compact('lawyers'));
    }


}
