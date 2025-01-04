<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MenstrualRecord;

class MenstrualRecordController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'condition' => 'required',
            'menstruation_status' => 'required',
            'mood' => 'required',
            'body_condition' => 'required|array',
            'menstrual_flow' => 'required',
            'memo' => 'nullable|string',
        ]);
        
        MenstrualRecord::create([
            'user_id' => auth()->id(),
            'condition' => $request->input('condition'),
            'menstruation_status' => $request->input('menstruation_status'),
            'mood' => $request->input('mood'),
            'body_condition' => $request->input('body_condition'),
            'menstrual_flow' => $request->input('menstrual_flow'),
            'memo' => $request->input('memo'),
            'date' => now(),
        ]);
        
        return redirect()->route('menstrual_records.index')->with('success', 'Record saved successfully');
    }
    
    public function index()
    {
        $records = MenstrualRecord::where('user_id', auth()->id())->get();
        return view('menstrual_management', compact('records'));
    }
}
