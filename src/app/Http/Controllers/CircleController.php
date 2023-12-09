<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Circle;  // Circle モデルをインポート
use App\Models\Detail;
use App\Models\Content;
use App\Models\Facility;
use App\Models\Image;

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
        $detail = Detail::first();
        $content = Content::first();
        $facilities = Facility::all();
        $images = Image::all();

        return view('edit', compact('detail', 'content', 'facilities', 'images'));
    }

    public function show($id)
    {
        $circle = Circle::findOrFail($id);
        return view('show', compact('circle'));
    }
}
