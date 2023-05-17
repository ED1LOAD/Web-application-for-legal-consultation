<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Qcard;
use Illuminate\Http\Request;

class QcardController extends Controller
{
    public function index()
    {
        $qcards = Qcard::all();
        return view('qcard.index', compact('qcards'));
    }
    public function update(Request $request, Qcard $qcard)
    {
        $request->validate([
            'name' => 'required',
            'question' => 'required',
            'date' => 'required',

        ]);

        $qcard->update([
            'name' => $request->name,
            'question' => $request->qustion,
            'date' => $request->date,
        ]);

        return to_route('qcard.index');
    }
}
