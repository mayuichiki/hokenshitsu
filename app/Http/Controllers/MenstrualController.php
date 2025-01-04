<?php

namespace App\Http\Controllers;

use App\Models\MenstrualData;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenstrualController extends Controller
{
    public function index()
    {
        $records = MenstrualData::where('user_id', Auth::id())->get();
        return view('menstrual_management', compact('records'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'cycle_start_date' => 'required|date',
            'cycle_end_date' => 'nullable|date|after_or_equal:cycle_start_date',
            'symptoms' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        $validated['user_id'] = Auth::id();
        MenstrualData::create($validated);

        return redirect()->route('menstrual.index');
    }

    public function edit($id)
    {
        // 指定されたIDの生理データを取得
        $record = MenstrualData::findOrFail($id);

        // 編集画面を表示
        return view('menstrual_edit', compact('record'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'cycle_start_date' => 'required|date',
            'cycle_end_date' => 'nullable|date|after_or_equal:cycle_start_date',
            'symptoms' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        $record = MenstrualData::findOrFail($id);
        $record->update($validated);

        return redirect()->route('menstrual.index')->with('success', '生理データが更新されました！');
    }


}
