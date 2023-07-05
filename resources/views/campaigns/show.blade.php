@extends('common')

@section('content')
    <p>{{ $campaign->name }}</p>
    <form action="/campaigns/{{ $campaign->id }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete">
    </form>
    <a href="{{ '/campaigns/' . $campaign->id . '/edit' }}">Edit</a>
@endsection
