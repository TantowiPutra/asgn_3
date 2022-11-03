@extends('layout.parent')
<style>
    .card {
        margin-top: 15px;
    }
</style>
@section('container')
    <div class="container">
        <h2></h2>
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://source.unsplash.com/300x200?projects" class="card-img-top" alt="...">
                        <p class="position-absolute px-2"
                            style="background-color: rgba(0, 0, 0, 0.5); color: white !important; border-radius: 3px; font-weight: normal !important;">
                            {{ $project['type'] }}
                        </p>
                        <div class="card-body">
                            <a href="/projects/{{ $project['type'] }}" class="d-flex"
                                style="color: black!important; text-decoration: none; position: relative; font-size: 10pt;">By.
                                {{ $project['author'] }}
                                (Click
                                Here!)
                            </a>
                            <p class="card-text">{{ $project['slug'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
