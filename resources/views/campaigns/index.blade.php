@extends('common')

@section('content')
    @foreach ($campaigns as $campaign)
        <a href="/campaigns/{{ $campaign->id }}">{{ $campaign->name }}</a>
    @endforeach
    <a href="/campaigns/create">Create new campaign</a>
@endsection
