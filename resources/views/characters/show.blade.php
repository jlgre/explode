@extends('common')

@section('content')
    <p>Name: {{ $character->name }}</p>
    <p>Level: {{ $character->level }}</p>
    <p>Current HP: {{ $character->current_hp }}</p>
    <p>Max HP: {{ $character->max_hp }}</p>
    <p>Campaign: {{ $character->campaign->name }}</p>
    <form action="/characters/{{ $character->id }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete">
    </form>
    <a href="{{ '/characters/' . $character->id . '/edit' }}">Edit</a>
@endsection
