@extends("../layout/master")
@section('title','About Us')

@section("content")
    @php
    $name= 'John';
    @endphp



    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>About Page</h1>
        <p> my name is <?php echo $name ?></p>
        <p> My name is {{$name}}</p>
        
        @for($i=1; $i<=5; $i++)
        <p> {{$i}}</p>
        @endfor

        @switch($name)
            @case('John')
            <p>John</p>
            @break
            @case('Jane')
            <p>Jane</p>
            @break
            @default
            <p>Default</p>
        @endswitch
    @if($name == 'John')
        <p>John</p>
        <hr>
        <p>new line</p>
        @if(true)
            <p>Not John</p>
        @endif
    @else
        <p>Not John</p>
    @endif

@endSection


<script src="{{ asset('assets/bootstrap.bundle.js') }}"></script>
</body>
</html>