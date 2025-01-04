@extends('layouts.app')

@section('content')
<h2>生理データを編集</h2>

<form method="POST" action="{{ route('menstrual.update', $record->id) }}">
    @csrf
    @method('PUT')

    <div>
        <label for="cycle_start_date">開始日:</label>
        <input type="date" id="cycle_start_date" name="cycle_start_date" value="{{ $record->cycle_start_date }}" required>
    </div>

    <div>
        <label for="cycle_end_date">終了日:</label>
        <input type="date" id="cycle_end_date" name="cycle_end_date" value="{{ $record->cycle_end_date }}">
    </div>

    <div>
        <label for="symptoms">症状:</label>
        <textarea id="symptoms" name="symptoms">{{ $record->symptoms }}</textarea>
    </div>

    <div>
        <label for="notes">メモ:</label>
        <textarea id="notes" name="notes">{{ $record->notes }}</textarea>
    </div>

    <button type="submit">更新</button>
</form>
@endsection
