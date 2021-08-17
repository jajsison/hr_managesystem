<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeavesController extends Controller
{
    // leaves
    public function leaves()
    {
        return view('form.leaves');
    }
}
