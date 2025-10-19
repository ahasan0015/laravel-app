@extends("../../layout/master")
@section('title', 'Students Page')
@section('content')
<div class="container">
    <h1>Student details</h1>
    <h5>ID: {{ $student['id'] }}</h5>
    <h5>ID: {{ $student['name'] }}</h5>
    <h5>ID: {{ $student['address'] }}</h5>
</div>
@endsection

