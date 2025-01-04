<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>チャット</title>
</head>
<body>
    <h1>チャット</h1>
    <form action="{{ route('chat.send') }}" method="POST">
        @csrf
        <textarea name="message" placeholder="メッセージを入力" required></textarea>
        <br>
        <button type="submit">送信</button>
    </form>
    <h2>メッセージ履歴</h2>
    <ul>
        @foreach($messages as $message)
            <li>{{ $message->created_at }}: {{ $message->message }}</li>
        @endforeach
    </ul>
</body>
</html>
