<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MenstrualData;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        // ユーザーの生理データを取得
        $menstrualData = MenstrualData::where('user_id', $user->id)->latest()->first();

        return view('dashboard', compact('menstrualData'));
    }

    public function record()
    {
        return view('dashboard.record'); // 記録ページ
    }

    public function chat()
    {
        return view('dashboard.chat'); // チャットページ
    }

    public function report()
    {
        return view('dashboard.report'); // レポートページ
    }
}
