
@extends('layouts.app')

@section('content')
<div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; flex-direction: column">
    <h1>{{ $project->title }}</h1>
    <p>url: {{ $project->url }}</p>
</div>
@endsection