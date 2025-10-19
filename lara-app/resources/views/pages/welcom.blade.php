@extends("../layout/master")
@section('title', 'Welcome Page')
@section('content')
    <div class="container">
        <h1>Welcome Page</h1>
    </div>
    <x-alert>
        <h2> Welcome to laravel</h2>
        <h2>Student Id: {{{ $id }}}</h2>
        <h2>Student Id: {{{ $round }}}</h2>

    </x-alert>

@endsection

