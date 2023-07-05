@extends('common')

@section('content')
    @foreach ($characters as $character)
        <a href="/characters/{{ $character->id }}">{{ $character->name }}</a>
    @endforeach
    <a href="/characters/create">Create new character</a>
@endsection
