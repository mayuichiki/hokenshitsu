<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>レポート</title>
</head>
<body>
    <h1>レポート</h1>
    <form action="{{ route('report.generate') }}" method="POST">
        @csrf
        <label for="report_type">レポートタイプ</label>
        <select id="report_type" name="report_type">
            <option value="menstrual">生理周期</option>
            <option value="symptoms">症状履歴</option>
        </select>
        <br>
        <button type="submit">レポート生成</button>
    </form>
    <h2>生成済みレポート</h2>
    <ul>
        @foreach($reports as $report)
            <li>{{ $report->generated_at }} - {{ $report->report_type }}</li>
        @endforeach
    </ul>
</body>
</html>
