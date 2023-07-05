@extends('common')

@section('content')
    <form method="POST" action="/characters/{{ $character?->id ?? '' }}">
        @csrf
        @if (isset($character))
            @method("PUT")
        @endif
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required value="{{ $character?->name ?? ''}}">
        <label for="level">Level:</label>
        <input type="number" name="level" id="level" required value="{{ $character?->level ?? ''}}">
        <label for="max_hp">Max HP:</label>
        <input type="number" name="max_hp" id="max_hp" required value="{{ $character?->max_hp ?? ''}}">
        <label for="current_hp">Current HP:</label>
        <input type="number" name="current_hp" id="current_hp" required value="{{ $character?->current_hp ?? ''}}">
        <label for="campaign_id">Campaign</label>
        <select name="campaign_id" id="campaign_id">
            @foreach ($campaigns as $campaign)
                <option value="{{ $campaign->id }}">{{ $campaign->name }}</option>
            @endforeach
        </select>
        <input type="submit" value="Submit">
    </form>
@endsection
