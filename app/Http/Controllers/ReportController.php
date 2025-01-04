<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function show()
    {
        $report = auth()->user()->reports()->first(); // Assuming one report per user
        return view('reports', compact('report'));
    }
}
