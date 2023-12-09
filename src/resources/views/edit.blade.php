{{-- @section('content') --}}
<div class="container">
    <h2>サークル情報の編集</h2>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ url('update-circle') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- サークル名 -->
        <div class="form-group">
            <label for="name">サークル名</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="サークル名を入力" value="{{ old('name', $club->name ?? '慶應公認サークルTLA') }}">
        </div>

        <!-- 練習場所 -->
        <div class="form-group">
            <label for="practice_location">練習場所</label>
            <input type="text" class="form-control" id="practice_location" name="practice_location" placeholder="練習場所を入力" value="{{ old('practice_location', $detail->place ?? '') }}">
        </div>

        <!-- 練習頻度 -->
        <div class="form-group">
            <label for="practice_frequency">練習頻度</label>
            <input type="text" class="form-control" id="practice_frequency" name="practice_frequency" placeholder="練習頻度を入力" value="{{ old('practice_frequency', $detail->time ?? '') }}">
        </div>

        <!-- SNSリンク -->
        <div class="form-group">
            <label for="instagram_link">Instagram リンク</label>
            <input type="text" class="form-control" id="instagram_link" name="instagram_link" placeholder="Instagram リンクを入力" value="{{ old('instagram_link', $content->instagram ?? '') }}">
        </div>
        
        <div class="form-group">
            <label for="twitter_link">Twitter リンク</label>
            <input type="text" class="form-control" id="twitter_link" name="twitter_link" placeholder="Twitter リンクを入力" value="{{ old('twitter_link', $content->twitter ?? '') }}">
        </div>
        
        <div class="form-group">
            <label for="line_link">LINE リンク</label>
            <input type="text" class="form-control" id="line_link" name="line_link" placeholder="LINE リンクを入力" value="{{ old('line_link', $content->line ?? '') }}">
        </div>

        <!-- 写真のアップロード -->
        <div class="form-group">
            <label for="photo">トップの写真 (3枚)</label>
            <input type="file" class="form-control-file" id="photo" name="photos[]" multiple>
        </div>

        <button type="submit" class="btn btn-primary">更新</button>
    </form>
</div>
{{-- @endsection --}}
