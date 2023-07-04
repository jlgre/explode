@extends('common')

@section('content')
    <form method="POST" action="/campaigns/{{ $campaign?->id ?? '' }}">
        @csrf
        @if (isset($campaign))
            @method("PUT")
        @endif
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required value="{{ $campaign?->name ?? ''}}">
        <input type="submit" value="Submit">
    </form>
@endsection
