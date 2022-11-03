@extends('layout.parent')

@section('container')
    <div class="container">
        <h2>{{ $project['type'] }}</h2>
        <h5>
            Project By. {{ $project['author'] }}
        </h5>

        <p style="text-align: justify">
            {{ $project['content'] }}
        </p>

        <a href="/projects" style="color: cornflowerblue!important">Kembali ke halaman sebelumnya</a>

    </div>
@endsection
