<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>生理管理記録ページ</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>生理管理記録ページ</h1>
        <form method="POST" action="{{ route('menstrual_records.store') }}">
            @csrf
            <div>
                <h2>1月18日（土）</h2>
            </div>
            <div class="form-group">
                <h3>体調</h3>
                <label><input type="radio" name="condition" value="ばっちり"> ばっちり</label>
                <label><input type="radio" name="condition" value="まあまあ"> まあまあ</label>
                <label><input type="radio" name="condition" value="ふつう"> ふつう</label>
                <label><input type="radio" name="condition" value="いまいち"> いまいち</label>
            </div>
            <div class="form-group">
                <h3>生理</h3>
                <label><input type="radio" name="menstruation_status" value="生理が来た"> 生理が来た</label>
                <label><input type="radio" name="menstruation_status" value="生理中"> 生理中</label>
                <label><input type="radio" name="menstruation_status" value="生理が終わった"> 生理が終わった</label>
            </div>
            <div class="form-group">
                <h3>こころ</h3>
                <label><input type="radio" name="mood" value="ハッピー"> ハッピー</label>
                <label><input type="radio" name="mood" value="おだやか"> おだやか</label>
                <label><input type="radio" name="mood" value="ふつう"> ふつう</label>
                <label><input type="radio" name="mood" value="イライラ"> イライラ</label>
                <label><input type="radio" name="mood" value="不安"> 不安</label>
            </div>
            <div class="form-group">
                <h3>からだ</h3>
                <label><input type="checkbox" name="body_condition[]" value="むくみ"> むくみ</label>
                <label><input type="checkbox" name="body_condition[]" value="だるさ"> だるさ</label>
                <label><input type="checkbox" name="body_condition[]" value="腹痛"> 腹痛</label>
                <label><input type="checkbox" name="body_condition[]" value="頭痛"> 頭痛</label>
                <label><input type="checkbox" name="body_condition[]" value="冷え"> 冷え</label>
            </div>
            <div class="form-group">
                <h3>経血量</h3>
                <label><input type="radio" name="menstrual_flow" value="少ない"> 少ない</label>
                <label><input type="radio" name="menstrual_flow" value="ふつう"> ふつう</label>
                <label><input type="radio" name="menstrual_flow" value="多い"> 多い</label>
            </div>
            <div class="form-group">
                <h3>メモ</h3>
                <textarea class="form-control" name="memo"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">保存</button>
        </form>
    </div>
</body>
</html>
