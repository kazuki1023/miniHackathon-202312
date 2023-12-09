{{-- @extends('layouts.app')

@section('content') --}}
<div class="container">
    <h2>サークル情報の編集</h2>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ url('update-circle') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- サークル名（既に存在するため変更不要） -->
        <div class="form-group">
            <label for="name">サークル名</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="サークル名を入力" value="{{ old('name', '慶應公認サークルTLA') }}">
        </div>

        <!-- 練習頻度・練習場所 -->
        <div class="form-group">
            <label for="practice_details">練習頻度・練習場所</label>
            <textarea class="form-control" id="practice_details" name="practice_details" rows="3" placeholder="練習頻度・練習場所の詳細を入力">{{ old('practice_details') }}</textarea>
        </div>

        <!-- 男女比・学部比（チャートデータの入力形式を考慮してください） -->
        <div class="form-group">
            <label for="gender_ratio">男女比</label>
            <input type="text" class="form-control" id="gender_ratio" name="gender_ratio" placeholder="男女比を入力" value="{{ old('gender_ratio') }}">
        </div>

        <div class="form-group">
            <label for="department_ratio">学部比</label>
            <input type="text" class="form-control" id="department_ratio" name="department_ratio" placeholder="学部比を入力" value="{{ old('department_ratio') }}">
        </div>

        <!-- 写真のアップロード -->
        <div class="form-group">
            <label for="photo">トップの写真 (3枚)</label>
            <input type="file" class="form-control-file" id="photo" name="photos[]" multiple>
        </div>

        <!-- SNSリンク -->
        <div class="form-group">
            <label for="instagram_link">Instagram リンク</label>
            <input type="text" class="form-control" id="instagram_link" name="instagram_link" placeholder="Instagram リンクを入力" value="{{ old('instagram_link') }}">
        </div>
        
        <div class="form-group">
            <label for="twitter_link">Twitter リンク</label>
            <input type="text" class="form-control" id="twitter_link" name="twitter_link" placeholder="Twitter リンクを入力" value="{{ old('twitter_link') }}">
        </div>
        
        <div class="form-group">
            <label for="line_link">LINE リンク</label>
            <input type="text" class="form-control" id="line_link" name="line_link" placeholder="LINE リンクを入力" value="{{ old('line_link') }}">
        </div>        

        <button type="submit" class="btn btn-primary">更新</button>
    </form>
</div>
{{-- @endsection --}}
