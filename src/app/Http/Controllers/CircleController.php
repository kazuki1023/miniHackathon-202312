<?php

namespace App\Http\Controllers;

use App\Models\Circle;
use Illuminate\Http\Request;

class CircleController extends Controller
{
    public function update(Request $request)
    {
        // バリデーション
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            // その他のフィールドもバリデーションを追加
        ]);

        // データの更新または新規作成
        $circle = Circle::updateOrCreate(
            ['id' => $request->id], // 既存のレコードを検索するためのキー
            $validatedData // 更新するデータ
        );

        // リダイレクトとメッセージ
        return redirect()->back()->with('status', 'サークル情報が更新されました。');
    }

    public function edit()
    {
        $circle = Circle::first(); // 例えば、最初のレコードを取得
        return view('edit', compact('circle'));
    }

    public function show($id)
{
    $circle = Circle::findOrFail($id);
    return view('show', compact('circle'));
}

}
