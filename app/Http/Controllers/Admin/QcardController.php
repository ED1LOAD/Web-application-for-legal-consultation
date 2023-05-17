<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Qcard;
use Illuminate\Http\Request;

class QcardController extends Controller
{
    public function index()
    {
        $qcards = Qcard::all();
        return view('admin.qcard.index', compact('qcards'));
    }


    public function destroy(Qcard $qcard)
    {
        $qcard->delete();
        return to_route('admin.qcard.index');
    }

}
