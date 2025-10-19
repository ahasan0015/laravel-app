@extends("../../layout/master")
@section('title', 'Students Page')
@section('content')
    <div class="container">
        <h1> students page</h1>
        <div class="row g-3">
            @foreach ($students as $item)
                <div>{{ $item['name'] }}</div>
                <div class="col">
                    <a href="/students/{{ $item['id'] }}" class="text-decoration-none">
                        <div class="card">
                            <div class="card-body">
                                <span class="badge bg-dark">{{ $item['id'] }}
                                    <h5 class="card-title"> {{ $item['name'] }}</h5>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection