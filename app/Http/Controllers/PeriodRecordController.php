<?php

namespace App\Http\Controllers;

use App\Models\PeriodRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeriodRecordController extends Controller
{
    public function index()
    {
        $records = auth()->user()->periodRecords;
        return view('period_records', compact('records'));
    }
    
    public function store(Request $request)
    {
        auth()->user()->PeriodRecord()->create($request->all());
        return redirect()->route('period_records.index')->with('success', 'Record added successfully');
    }
}
